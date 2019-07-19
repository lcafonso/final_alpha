<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CountyStoreRequest extends FormRequest
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
            'name' => 'required',
            'county_id' => 'required|unique:counties,county_id',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'É necessario preencher o nome!',
            'county_id.required' => 'É necessario preencher o Codigo!'

        ];
    }
}
