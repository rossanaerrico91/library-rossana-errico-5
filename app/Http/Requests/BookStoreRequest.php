<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'author_id'=>'required|integer',
            'title' => 'required',
            'pages' => 'required',
            'image' => 'mimes:png,jpeg,jpg,bmp|max:2048',
            'categories'=>'required|array'
        ];
    }
}
