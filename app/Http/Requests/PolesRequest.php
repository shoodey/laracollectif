<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PolesRequest extends Request
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
            "name" => "required|min:6|unique:poles",
            "email" => "required|email|exists:users,email"
        ];
        if($this->method() == 'PUT'){
            $rules["name"] = "required|min:6";
        }

        return $rules;
    }
}
