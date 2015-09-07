<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\MessageBag;

class CreateCerfRequest extends Request {

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
            'chair_id' => 'required',
            'attendee_id' => 'required',
            'service_tags' => 'required_without_all:admin_tags,social_tags'
		];

        $attendees = $this->request->get('attendee_id');

        foreach($attendees as $thisKey => $attendee) {
            $otherAttendees = '';

            foreach($attendees as $otherKey => $otherAttendee) {
                if ($thisKey === $otherKey) continue;
                $otherAttendees = $otherAttendees . $otherAttendee . ',';
            }
            $otherAttendees = rtrim($otherAttendees, ',');
            $rules['attendee_id.' . $thisKey] = 'not_in:' . $otherAttendees;
        }

        return $rules;
	}

    public function formatErrors(Validator $validator)
    {
        $repeatedAttendee = false;

        $errors = $validator->errors()->all();

        foreach($errors as $index => $error)
        {
            if (fnmatch('The selected attendee id.* is invalid.', $error)) {

                // Removes from array; can still iterate through array with foreach
                unset($errors[$index]);
                $repeatedAttendee = true;
            }
        }

        // Pushes more descriptive error message onto array
        if ($repeatedAttendee) array_push($errors, 'The same attendee has been entered in the attendance list more than once.');

        return $errors;
    }

    public function messages()
    {
        $messages = [
            'chair_id.required' => 'The event chair is missing.',
            'attendee_id.required' => 'The event has to have at least one attendee.',
            'service_tags.required_without_all' => 'The event needs a tag in at least one of the service, leadership, or fellowship categories.'
        ];

        return $messages;
    }
}
