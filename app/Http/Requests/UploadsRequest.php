<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UploadsRequest extends Request
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
            'file' => 'max:100|mimes:txt,html,php|required',
            'name' => 'required|alpha_dash'
        ];

        return $rules;
    }
}
