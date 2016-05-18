<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdateUserRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return \Auth::check();
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'email' => 'sometimes|required|email',
			'password' => 'sometimes|confirmed|min:6',
            'first_name' => 'sometimes|required',
            'last_name' => 'sometimes|required',
            'avatar' => 'image'
		];
	}

}
