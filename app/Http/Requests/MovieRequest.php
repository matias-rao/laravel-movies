<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MovieRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'year' => 'required|integer',
            'director_id' => ['required', Rule::exists('directors','id')],
            'genres' => ['required', 'array'],
            'genres.*' => ['required', Rule::exists('genres','id')]
        ];
    }
}
