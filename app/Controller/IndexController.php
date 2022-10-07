<?php

namespace App\Controller;

use App\Http\Requests\QuoteRequest;
use App\Models\Quote;
use Illuminate\Http\Request;


class IndexController
{
    public function indexAction(Request $request)
    {
        $limit = max(env("LIMIT"), 1);
        $maxQuotes = Quote::count();
        $maxPages = (int)ceil($maxQuotes / $limit);
        $page = (int)$request->get('page', 1);
        $page = min(max(1, $page), $maxPages);
        $offset = ($page - 1) * $limit;
        $entries = Quote::query()
            ->orderBy('created_at', 'DESC')
            ->offset($offset)
            ->limit($limit)
            ->get();
        return view('index', ['entries' => $entries, 'maxPages' => $maxPages, 'currentPage' => $page]);
    }

    public function saveAction(QuoteRequest $request)
    {
        $validated = $request->validated();
        Quote::create($validated);
        return redirect()->route('index')->with('success', 'Successfully saved!');
    }
}
