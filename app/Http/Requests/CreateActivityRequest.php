<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Contracts\Validation\Validator;

class CreateActivityRequest extends Request
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
            'user_id' => 'required'
        ];

        $this->request->has('user_id') ? $attendees = $this->request->get('user_id') : $attendees = [];

        foreach($attendees as $thisKey => $attendee) {
            $otherAttendees = '';

            foreach($attendees as $otherKey => $otherAttendee) {
                if ($thisKey === $otherKey || is_null($attendees[$thisKey]) || is_null($attendees[$otherKey]))
                    continue;

                $otherAttendees = $otherAttendees . $otherAttendee . ',';
            }
            $otherAttendees = rtrim($otherAttendees, ',');
            $rules['user_id.' . $thisKey] = 'not_in:' . $otherAttendees;
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'user_id.required' => 'The event has to have at least one attendee.',
        ];
    }

    public function formatErrors(Validator $validator)
    {
        $repeatedAttendee = false;

        $errors = $validator->errors()->all();

        foreach($errors as $index => $error)
        {
            if (fnmatch('The selected user id.* is invalid.', $error)) {

                // Removes from array; can still iterate through array with foreach
                unset($errors[$index]);
                $repeatedAttendee = true;
            }
        }

        // Pushes more descriptive error message onto array
        if ($repeatedAttendee) array_push($errors, 'The same attendee has been entered in the attendance list more than once.');

        return $errors;
    }
}
