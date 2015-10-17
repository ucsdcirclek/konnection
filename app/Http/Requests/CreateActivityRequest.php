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
            'user_id' => 'required',
            'name' => 'required'
        ];

        // Reverts to empty array if user_id array in request does not exist
        $this->request->has('user_id') ? $attendees = $this->request->get('user_id') : $attendees = [];

        // Iterates through array of user IDs
        foreach($attendees as $thisKey => $attendee) {
            $otherAttendees = '';

            if ($attendees[$thisKey] === "null") continue;

            /*
             * For each user ID in the original user ID array, this loop
             * iterates through all other user IDs to make sure that each user
             * ID is unique in the member attendance list.
             */
            foreach($attendees as $otherKey => $otherAttendee) {
                if ($thisKey !== $otherKey && $attendees[$otherKey] !== "null")
                    $otherAttendees = $otherAttendees . $otherAttendee . ',';
            }

            $otherAttendees = rtrim($otherAttendees, ',');
            $rules['user_id.' . $thisKey] = 'not_in:' . $otherAttendees;
        }

        $this->request->has('name') ? $names = $this->request->get('name') : $names = [];

        foreach($names as $index => $name) {
            $rules['name.' . $index] = 'required';

            $rules['service_hours.' . $index] = 'numeric|min:0';
            $rules['planning_hours.' . $index] = 'numeric|min:0';
            $rules['traveling_hours.' . $index] = 'numeric|min:0';
            $rules['admin_hours.' . $index] = 'numeric|min:0';
            $rules['social_hours.' . $index] = 'numeric|min:0';
            $rules['mileage.' . $index] = 'numeric|min:0';
        }

        /*
         * All arrays of hours are of the same length, so can iterate through
         * all in a single loop.
         */
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
        $emptyNames = false;

        $errors = $validator->errors()->all();

        foreach($errors as $index => $error)
        {
            if (fnmatch('The selected user id.* is invalid.', $error)) {

                // Removes from array; can still iterate through array with foreach
                unset($errors[$index]);
                $repeatedAttendee = true;
            }

            else if (fnmatch('The name.* field is required.', $error)) {
                unset($errors[$index]);
                $emptyNames = true;
            }
        }

        // Pushes more descriptive error message onto array
        if ($repeatedAttendee) array_push($errors, 'The same attendee has been entered in the attendance list more than once.');
        if ($emptyNames) array_push($errors, 'One of the names of the listed attendees has not been provided.');

        return $errors;
    }
}
