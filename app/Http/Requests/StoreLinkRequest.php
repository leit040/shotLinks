<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLinkRequest extends FormRequest
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
            'link'=>'required|url',
            'hour'=>'numeric|min:0|:max:24',
            'minute'=>'numeric|min:0|:max:60',
            'limit'=>'numeric|min:0|:max:100'
        ];
    }
}
