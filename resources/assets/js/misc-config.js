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
    format: 'l, F j, Y g:i A',    // Expresses date in readable format.
    step: 30                      // Sets times in timepicker at increments of 30 minutes.
  });

  $('.editor').editable({inlineMode: false});
  $('#featuredEventEditor').editable({maxCharacters: 160, inlineMode: false});
});
