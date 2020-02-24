<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CourseRequest extends FormRequest
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
            'title'=>[
                'required',
                'string',
                'max:255',
                Rule::unique('courses')->where(function($query){
                    return $query->where('user_id', auth()->user()->id);
                }),
            ],
            'category'=>[
                'required',
                'integer',
                'exists:categories,id'
            ],
            'image'=>[
                'required',
                'image',
                'max:4096'
            ],
            'description'=>[
                'required',
            ],
            'price'=>[
                'required',
                'numeric'
            ]
        ];
    }
}
