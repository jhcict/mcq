<?php

/**
 * Class: CreateCategoryRequest
 *
 * PHP Version 7.0
 *
 * @category Requests
 * @package  LearnMCQ
 * @author   Gnanakeethan Balasubramaniam <gnana@keethan.me>
 * @license  MIT http://opensource.org/licenses/MIT/
 * @link     http://mcq.learntechnologies.org/
 */

namespace App\Http\Requests;

use Auth;
use App\Http\Requests\Request;

/**
 * Class: CreateCategoryRequest
 *
 * @category Requests
 * @package  LearnMCQ
 * @author   Gnanakeethan Balasubramaniam <gnana@keethan.me>
 * @license  MIT http://opensource.org/licenses/MIT/
 * @link     http://mcq.learntechnologies.org/
 *
 * @see Request
 */
class CreateCategoryRequest extends Request
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
            'name' => 'string'
        ];
    }
}
