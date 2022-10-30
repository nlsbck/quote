<?php

namespace App\Controller;

use App\Http\Controllers\Controller;
use App\Http\Requests\QuoteRequest;
use App\Models\Quote;
use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class IndexController extends Controller
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

    public function saveQuote(QuoteRequest $request)
    {
        $validated = $request->validated();
        $by = Person::where('name', $validated['by'])->first();

        if (is_null($by)) {
            $by = Person::create([
                'name' => $validated['by']
            ]);
        }
        Quote::create(['text' => $validated['text'], 'person_id' => $by->id, 'source_id' => 0]);
        return redirect()->route('index')->with('success', 'Successfully saved!');
    }
}
