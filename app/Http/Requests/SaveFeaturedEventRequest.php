<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SaveFeaturedEventRequest extends Request
{
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
            'event' => 'required|exists:events,id',
            'summary' => 'required'
        ];
    }
}
