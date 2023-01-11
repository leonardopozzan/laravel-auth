<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|min:5|max:45',
            'description' => 'nullable',
            'dev_lang' => 'required',
            'framework' => 'nullable',
            'team' => 'nullable',
            'git_link' => 'nullable',
            'diff_lvl' => 'nullable|min:0|max:10',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'il nome è obbligatorio',
            'name.min' => 'il nome deve avere almeno :min caratteri',
            'name.max' => 'il nome deve avere meno di :max caratteri',
            'dev_lang.required' => 'il linguaggio è obbligatorio',
            'diff_lvl.min' => 'il livello di difficoltà non può essere inferiore a :min',
            'diff_lvl.max' => 'il livello di difficoltà non può essere superiore a :max',
        ];
    }
}
