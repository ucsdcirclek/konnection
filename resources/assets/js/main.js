$(document).ready(function () {
  /*
   * Setup
   */
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });


  /*
   * Homepage
   */
  $('.slider').slick({
    autoplay: true
  });

  /*
   * Calendar
   */
  $('.calendar').fullCalendar({
    class: 'calendar',
    height: 'auto',
    columnFormat: {
      month: 'dddd',    // Monday, Wednesday, etc
      week: 'dddd, MMM dS', // Monday 9/7
      day: 'dddd, MMM dS'  // Monday 9/7
    },
    buttonText: {
      today: 'Today',
      month: 'Month',
      week: 'Week',
      day: 'Day'
    },
    events: function(start, end, timezone, callback) {
      $.ajax({
        url: '/api/events',
        dataType: 'json',
        data: {
          // our hypothetical feed requires UNIX timestamps
          start: start.toISOString(),
          end: end.toISOString()
        },
        success: function(doc) {
          var events = [];

          _.forEach(doc, function(event) {
            events.push({
              id: event.id,
              title: event.title,
              start: moment.tz(event.start_time, "UTC").tz("America/Los_Angeles"), // Convert from server UTC to local
              end: moment.tz(event.start_time, "UTC").tz("America/Los_Angeles"),
              url: '/events/' + event.slug,
              backgroundColor: '#104891',
              borderColor: '#104891'
            });
          });

          callback(events);
        }
      });
    }
  });

  /*
   * Event
   */
  function findSlug() {
    var path = window.location.pathname;
    return path.substr(path.lastIndexOf("/") + 1);
  }

  $('#register-btn').click(function(event) {
    // Register user
    $.post('/api/events/'+findSlug()+'/registrations/create');

    // Change button
    var self = $(this);
    self.attr('id','unregister-btn');
    self.html('<i class="fa fa-close"></i> Signup');
  });

  $('#unregister-btn').click(function(event) {
    // Unregister user
    $.ajax({
      url: '/api/events/'+findSlug()+'/registrations/self',
      type: 'DELETE'
    });

    // Change button
    var self = $(this);
    self.attr('id','register-btn');
    self.html('<i class="fa fa-check"></i> Signup');
  });

  $('#registerGuest').submit(function(event) {
    event.preventDefault();

    var $form = $(this);

    var data = {
      first_name: $form.find( "input[name='firstName']" ).val(),
      last_name: $form.find( "input[name='lastName']" ).val(),
      phone: $form.find( "input[name='phone']" ).val()
    };

    $.post('/api/events/'+findSlug()+'/registrations/create', data);

    $('#guestRegistration').remove();
  });

  $('#drive-btn').click(function(event) {
    // Register user
    $.ajax({
      url: '/api/events/'+findSlug()+'/registrations/self',
      type: 'PATCH',
      data: {
        driver_status: 1
      }
    });

    // Change button
    var self = $(this);
    self.prop('disabled', true);
  });

  $('#photograph-btn').click(function(event) {
    // Register user
    $.ajax({
      url: '/api/events/'+findSlug()+'/registrations/self',
      type: 'PATCH',
      data: {
        photographer_status: 1
      }
    });

    // Change button
    var self = $(this);
    self.prop('disabled', true);
  });

  $('#write-btn').click(function(event) {
    // Register user
    $.ajax({
      url: '/api/events/'+findSlug()+'/registrations/self',
      type: 'PATCH',
      data: {
        writer_status: 1
      }
    });

    // Change button
    var self = $(this);
    self.prop('disabled', true);
  });

  /*
   * Date and time picker on event create and update pages.
   */

  $('.datetime').datetimepicker({
    format: 'l, F j, Y g:i A',    // Expresses date in readable format.
    step: 30                      // Sets times in timepicker at increments of 30 minutes.
  });

  /**
   * Chair search popup on CerfsController@create.
   */

  $('.search-popup-link').magnificPopup({
    type: 'inline',
    closeBtnInside: false,

    callbacks: {
      open: function() {

        // Hackish autofocus; can't set autofocus HTML attribute and there is no afterOpen callback.
        setTimeout(function() {
          $('#search-input').focus();
        }, 500);
      }
    },

    removalDelay: 500,
    mainClass: 'mfp-move-horizontal'
  });

  /**
   * Search functions.
   */

  var timeoutID;

  window.searchUsers = function() {

    var searchAndDisplayResults = function() {

      // Gets user input.
      var input = $('#search-input').val();

      if (input.length > 0) {

        // Posts to UsersController@search with user input and fills in div with results.
        $.post('/users/search', {input: input}, function(markup) {
          $('#search-results').html(markup);
        })
      }
    };

    // Finds results when user finishes typing.
    setTimeout(searchAndDisplayResults, 500);
  }

  window.resetTimer = function() {
    clearTimeout(timeoutID);
  }

  $('#search-input').keydown(window.searchUsers);
  $('#search-input').keyup(window.resetTimer);

  // Popup loaded with AJAX, so cannot use jQuery native click() function.
  $('#search-results').on('click', 'a', function(event) {
    event.preventDefault();

    $.magnificPopup.close();
  });

  /*
   * Misc.
   */
  $('.editor').editable({inlineMode: false});

});
