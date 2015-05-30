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
              backgroundColor: '#8B1C23',
              borderColor: '#8B1C23'
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
   * Misc.
   */
  $('.editor').editable({inlineMode: false});

});
