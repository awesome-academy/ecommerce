<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return [
            'name' => 'required|max:255',
            'phone' => 'required',
            'email' => 'required',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name.required' => trans('index.nameRequire'),
            'email.required' => trans('index.emailRequire'),
            'password.required' => trans('index.passRequire'),
        ];
    }
}
