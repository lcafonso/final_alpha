<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostStoreRequest extends FormRequest
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
            'name' => 'required',
            'slug' => 'required|unique:posts,slug',
            'user_id' => 'required|integer',
            'category_id' => 'required|integer',
            'tags' => 'required|array',
            'body' => 'required',
            'status' => 'required|in:DRAFT,PUBLISHED',
            'file' => 'required|mimes:jpg,jpeg,png|max:32768'
        ];

       /* if ($this->get('file'))
            $rules = array_merge($rules, ['file' => 'mimes:jpg,jpeg,png']);*/

        return $rules;

    }

    public function messages()
    {
        return [
            'name.required' => 'É necessario preencher o nome!',
            'slug.required' => 'É necessario preencher o URL amigavel!',
            'file.required' => 'É necessario uma imagem!',
            'file.mimes' => 'Somente imagen nos formatos: JPG, JPEG, PNG!'
        ];
    }
}
