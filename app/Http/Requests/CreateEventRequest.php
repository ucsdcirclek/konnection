<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateEventRequest extends Request {

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
            'title' => 'required',
            'start_time' => 'required|date',
            'end_time' => 'required|date',
            'start_time' => 'before:end_time',
            'open_time' => 'date|before:close_time',
            'close_time' => 'date',
		];
	}

}
