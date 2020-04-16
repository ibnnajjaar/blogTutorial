<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title'     => 'string|max:255',
            'content'   => 'string',
            'category'  => 'integer|exists:categories,id',
            'tags'      => 'array',
            'tags.*'    => 'integer|exists:tags,id'
        ];

        if ($post = $this->route('post')) {
            // update
        } else {
            //store
            $rules['title']     .= '|required';
            $rules['content']   .= '|required';
            $rules['category']  .= '|required';
            $rules['tags']      .= '|required';
        }

        return $rules;
    }
}
