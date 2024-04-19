<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlatRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'ingredients' => 'required|min:5|max:50|regex:/^[^.,;]+$/',
            'quantier' => 'numeric|required',
            'types' => 'required'
        ];
    }
}
