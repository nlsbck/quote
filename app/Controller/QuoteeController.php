<?php

namespace App\Controller;

use \App\Http\Controllers\Controller;
use App\Models\Person;
use Illuminate\Http\Request;

class QuoteeController extends Controller
{
    public function getQuotee(Request $request)
    {
        $person = Person::find($request['id']);


        return view('quotee', ['quotee' => $person]);
    }
}
