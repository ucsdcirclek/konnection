<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreatePostRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return \Auth::user()->can('manage_system');
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
            'category_id' => 'required|exists:post_categories,id',
            'title' => 'required',
            'content' => 'required'
		];
	}

}
