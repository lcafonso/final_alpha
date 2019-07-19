<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlaceStoreRequest extends FormRequest
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
            'place_id' => 'required|unique:places,place_id',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'É necessario preencher o nome!',
            'place_id.required' => 'É necessario preencher o codigo!'

        ];
    }
}
