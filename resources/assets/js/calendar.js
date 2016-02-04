/**
 * @fileOverview Handles configuration and initialization of calendar.
 *
 * Initializes calendar by converting passed in Moment values to ISO strings,
 * then making an API call to retrieve related events within that range. For
 * each event retrieved, its fields are parsed, and a color is set to each
 * event based on its type.
 */

$(function() {
  // Sets color of event cell based on type of event.
  window.setEventColor = function(type_id) {

    var color = appConstants.DEFAULT_COLOR;

    switch (type_id) {

      //Service
      case 1:
        color = appConstants.SERVICE_COLOR;
        break;

      // Social
      case 2:
        color = appConstants.SOCIAL_COLOR;
        break;

      // Committee
      case 3:
        color = appConstants.COMMITTEE_COLOR;
        break;

      // Kiwanis
      case 4:
        color = appConstants.KIWANIS_COLOR;
        break;

      // Fundraising
      case 5:
        color = appConstants.FUNDRAISING_COLOR;
        break;

      // Division/District
      case 6:
        color = appConstants.DIVISION_COLOR;
        break;
    }

    return color;
  };

  // Calendar plugin configuration.
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

          _.forEach(doc.data, function(event) {
            console.log(moment.tz(event.start_time, "UTC").tz("America/Los_Angeles"));
            events.push({
              id: event.id,
              title: event.title,
              start: moment.tz(event.start_time, "UTC").tz("America/Los_Angeles"), // Convert from server UTC to local
              end: moment.tz(event.end_time, "UTC").tz("America/Los_Angeles"),
              url: '/events/' + event.slug,
              backgroundColor: window.setEventColor(event.type_id),
              borderColor: window.setEventColor(event.type_id)
            });
          });
          console.log(events);

          callback(events);
        },
        error: function(error) {
          alert(appConstants.GENERIC_FAIL_MESSAGE);
          console.log(error);
        }
      });
    }
  });
});
