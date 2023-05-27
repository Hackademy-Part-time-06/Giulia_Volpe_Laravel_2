<?php

namespace App\Http\Requests;

use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {     
        return [
            "title" => 'required|string',
          "author" => 'required|string',
          "pages" => 'required|numeric',
          "year" => 'required|numeric',
          "image" => "required|mimes:bmp,png,jpeg,webp"
        ];
    }
}