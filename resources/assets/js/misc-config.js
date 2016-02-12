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

      // Automatically fills in event close time in event creation form with
      // event's end time for convenience.
      if ($input.attr('name') == 'end_time') {
        var closeTimeField = $('input[name=close_time]');
        closeTimeField.val($input.val());
      }
    },
    format: 'l, F j, Y g:i A',    // Expresses date in readable format.
    step: 30                      // Sets times in timepicker at increments of 30 minutes.
  });

  $('.editor').editable({inlineMode: false});
  $('#featuredEventEditor').editable({maxCharacters: 160, inlineMode: false});
});
