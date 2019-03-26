<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return [
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
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
            'current-password.required' => trans('index.passRequire'),
            'new-password.required' => trans('index.newpassRequire'),
        ];
    }
}
