<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuoteRequest extends FormRequest
{
    public function rules()
    {
        return [
            "by" => "required|max:255",
            "text" => "required",
            "source" => "nullable"
        ];
    }
}
