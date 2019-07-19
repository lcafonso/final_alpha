<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DistrictUpdateRequest extends FormRequest
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
            'district_id' => 'required|unique:districts,district_id,'.$this->admindistrict,
        ];

    }

    public function messages()
    {
        return [
            'name.required' => 'É necessario preencher o nome!',
            'district_id.required' => 'É necessario preencher o campo do Codigo!'
        ];
    }
}
