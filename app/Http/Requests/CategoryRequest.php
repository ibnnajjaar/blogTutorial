<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
        $rules = [
            'name' => 'string',
            'slug' => 'string|unique:categories,slug'
        ];

        if ($category = $this->route('category')) {
            // update
            $rules['slug'] .= ',' . $category->id;
        } else {
            //store
            $rules['name'] .= '|required';
            $rules['slug'] .= '|required';
        }

        return $rules;
    }
}
