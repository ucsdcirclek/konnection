$(document).ready(function () {

  $('.slider').slick({
    autoplay: true
  });

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

  $('.editor').editable({inlineMode: false});

});