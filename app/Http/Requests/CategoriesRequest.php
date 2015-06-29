<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CategoriesRequest extends Request
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
            'name' => 'required|max:255|alpha_dash',
            'display_name' => 'required|max:255',
            'parent_id' => 'required|exists:categories,id'
        ];
        if($this->request->get('parent_id') == 0){
            $rules['parent_id'] = 'required';
        }

        return $rules;
    }
}
