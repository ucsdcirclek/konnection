<div id="member-attendance-section">

    <div class="wrapper">
        <h3>Home Club Attendance</h3>

        <p class="section-instructions">
            For each person who attended, fill in the service, planning, traveling, leadership, and fellowship
            hours. Also include drivers in the list of attendees and fill in their mileage <strong>to the
                event.</strong>
        </p>

        @if (!$registrations->isEmpty())
            <table id="attendance-table">
                <tr>
                    <th>Name</th>
                    <th>Service</th>
                    <th>Planning</th>
                    <th>Traveling</th>
                    <th>Leadership</th>
                    <th>Fellowship</th>
                    <th>Mileage</th>
                </tr>

                @foreach($registrations as $registration)
                    <tr>
                        <input class="attendee-field" name="attendee_id[]" type="hidden" value="{{ $registration->user->id }}">

                        {{-- <td><div class="avatar small"><img src="{{ $registration->user->avatar->url() }}"></div></td> --}}
                        <td>{{ $registration->user->first_name }} {{ $registration->user->last_name }}</td>

                        <td><input name="service_hours[{{ $registration->user->id }}]" type="number" value="0"></td>
                        <td><input name="planning_hours[{{ $registration->user->id }}]" type="number" value="0"></td>
                        <td><input name="traveling_hours[{{ $registration->user->id }}]" type="number" value="0"></td>
                        <td><input name="admin_hours[{{ $registration->user->id }}]" type="number" value="0"></td>
                        <td><input name="social_hours[{{ $registration->user->id }}]" type="number" value="0"></td>
                        <td><input name="mileage[{{ $registration->user->id }}]" type="number" value="0"></td>

                        <td><a href="#" class="remove-registration-button"><div class="button emphasis"><i class="fa fa-times"></i></div></a></td>
                    </tr>
                @endforeach
            </table>
        @endif

        <div><a href=".search-popup" class="user-optional attendee-row search-popup-link button emphasis" data-effect="mfp-move-horizontal">Add Attendee</a></div>

    </div>
</div>