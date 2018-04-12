<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TalkRequest extends FormRequest
{
    public function authorize()
    {
        return auth()->check();
    }

    public function rules()
    {
        return [
            'title' => 'required|max:255',
            'description' => 'required',
            'src' => 'required',
            'place' => 'required|max:255'
        ];
    }
}
