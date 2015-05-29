$(document).ready(function () {

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
    ignoreTimezone: false,
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
              start: event.start_time,
              end: event.end_time,
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
    $.post('/api/events/'+findSlug()+'/create');

    // Change button
    this.attr('id','unregister-btn');
    this.html('<i class="fa fa-close"></i> Signup');
  });

  $('#unregister-btn').click(function(event) {
    // Unregister user
    $.ajax({
      url: '/api/events/'+findSlug()+'/registrations/self',
      type: 'DELETE'
    });

    // Change button
    this.attr('id','register-btn');
    this.html('<i class="fa fa-check"></i> Signup');
  });

  $('#registerGuest').submit(function(event) {
    event.preventDefault();

    var $form = $(this);

    var data = {
      first_name: $form.find( "input[name='firstName']" ).val(),
      last_name: $form.find( "input[name='lastName']" ).val(),
      phone: $form.find( "input[name='phone']" ).val(),
    };

    $.post('/api/events/'+findSlug()+'/registrations/create', data);

    $('#guestRegistration').remove();
  });

  /*
   * Misc.
   */
  $('.editor').editable({inlineMode: false});

});