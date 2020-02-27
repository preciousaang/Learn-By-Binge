<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCourseRequest extends FormRequest
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
            'category'=>'required|exists:categories,id',
            'title'=>'required|string|max:255',
            'price'=>'required|numeric',
            'description'=>'required',
            'image'=>'image|max:2048'
        ];
    }
}
