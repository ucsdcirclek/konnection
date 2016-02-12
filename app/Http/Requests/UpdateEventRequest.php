<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdateEventRequest extends Request {

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
            'start_time' => 'sometimes|required|date|before:end_time',
            'end_time' => 'sometimes|required|date',
            'open_time' => 'sometimes|date',
            'close_time' => 'sometimes|date'
		];
	}

}
