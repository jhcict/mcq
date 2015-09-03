<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

class CreateSubjectRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (!Auth::user()->hasRole('admin'))
            return false;
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
            'name'=>'string',
            'code'=>'string|size:3',
            'abbreviation'=>'min:2|max:6|alpha_num',
            'category_id'=>'exists:category,id',
            //
        ];
    }
}
