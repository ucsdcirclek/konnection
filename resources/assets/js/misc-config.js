/**
 * @fileOverview Miscellaneous configuration.
 */

$(function() {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  $('.slider').slick({
    autoplay: true
  });

  $('.datetime').datetimepicker({
    onChangeDateTime: function(dp, $input) {

      if ($input.attr('name') == 'end_time') {

        // Automatically fills in event close time in event creation form with
        // event's end time for convenience.
        var closeTimeField = $('input[name=close_time]');
        closeTimeField.val($input.val());

      } else if ($input.attr('name') == 'start_time') {

        // Automatically fills in end time to be an hour after start time.
        var endTimeField = $('input[name=end_time]');
        var endTimeDate = moment(new Date($input.val())).add(1, 'hours').format('dddd, MMMM D, YYYY h:mm A');
        endTimeField.val(endTimeDate);

        // Also updates sign-up close time.
        var closeTimeField = $('input[name=close_time]');
        closeTimeField.val(endTimeField.val());
      }

    },
    format: 'l, F j, Y g:i A',    // Expresses date in readable format.
    step: 30                      // Sets times in timepicker at increments of 30 minutes.
  });

  $('.editor').editable({inlineMode: false});
  $('#featuredEventEditor').editable({maxCharacters: 160, inlineMode: false});
});
