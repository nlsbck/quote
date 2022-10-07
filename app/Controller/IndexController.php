<?php

namespace App\Controller;

use App\Models\Quote;
use Illuminate\Http\Request;


class IndexController
{
    public function indexAction(Request $request)
    {
        if ($request->getMethod() == "POST") {
            $validated = $request->validate([
                "by" => "required|max:255",
                "text" => "required",
                "source" => "nullable"
            ]);
            Quote::create($validated);
            return redirect()->route('index')->with('success', 'Successfully saved!');
        }
        $entries = Quote::query()->orderBy('created_at', 'DESC')->get();
        return view('index', ['entries' => $entries]);
    }
}
