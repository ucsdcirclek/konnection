<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateTagRequest extends Request
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
        return [
            'service_tags' => 'required_without_all:admin_tags,social_tags'
        ];
    }

    public function messages()
    {
        return [
            'service_tags.required_without_all' => 'The event needs a tag in at least one of the service, leadership, or fellowship categories.'
        ];
    }
}
