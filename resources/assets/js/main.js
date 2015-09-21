$(document).ready(function () {

  var genericFailMessage = 'Something went wrong! Please report this incident to technology@ucsdcki.org';

  //region Ajax setup

  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  //endregion

  //region Homepage carousel configuration

  $('.slider').slick({
    autoplay: true
  });

  //endregion

  //region Calendar plugin configuration

  window.setEventColor = function(type_id) {

    var color = '#999';

    switch (type_id) {

      //Service
      case 1:
        color = '#6DA592';
        break;

      // Social
      case 2:
        color = '#4A7B9D';
        break;

      // Committee
      case 3:
        color = '#93ACB5';
        break;

      // Kiwanis
      case 4:
        color = '#A898B3';
        break;

      // Fundraising
      case 5:
        color = '#759936';
        break;

      // Division/District
      case 6:
        color = '#CEB28A';
        break;
    }

    return color;
  }

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
              backgroundColor: window.setEventColor(event.type_id),
              borderColor: window.setEventColor(event.type_id)
            });
          });

          callback(events);
        }
      });
    }
  });

  //endregion

  //region Event display and driver, writer, photographer buttons

  function findSlug() {
    var path = window.location.pathname;
    return path.substr(path.lastIndexOf("/") + 1);
  }

  $('#register-btn').click(function(event) {
    var self = $(this);
    self.html('<i class="fa fa-circle-o-notch fa-spin"></i> Signup');

    // Register user
    $.ajax({
      type: 'POST',
      url: '/api/events/'+findSlug()+'/registrations/create',
      success: function() {
        location.reload();

        // Change button
        self.attr('id','unregister-btn');
        self.html('<i class="fa fa-close"></i> Signup');
      },
      error: function() {
        self.html('<i class="fa fa-check"></i> Signup');
        alert('An error occurred and we were unable to sign you up for the event!');
      }
    });
  });

  $('#unregister-btn').click(function(event) {
    var self = $(this);
    self.html('<i class="fa fa-circle-o-notch fa-spin"></i> Signup');

    // Unregister user
    $.ajax({
      url: '/api/events/'+findSlug()+'/registrations/self',
      type: 'DELETE',
      success: function() {
        location.reload();

        // Change button
        self.attr('id','register-btn');
        self.html('<i class="fa fa-check"></i> Signup');
      },
      error: function() {
        self.html('<i class="fa fa-close"></i> Signup');
        alert('An error occurred and we were unable to remove your signup for the event!');
      }
    });
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

  window.updateChair = function(id) {

    $.ajax({
      url: '/api/events/' + findSlug(),
      type: 'PATCH',
      data: {
        chair_id: id
      }
    })
      .fail(function() {
        alert(genericFailMessage);
      });
  }

  $('#chair-event-btn').click(function(event) {
    console.log('chair event button clicked!');

    var urlField = $('.chair.avatar').find('img');
    var nameField = $('.chair.avatar').find('.name');
    var infoField = $('.chair.avatar').find('.info');

    $.get('/users/current', function(data) {
      var currentUser = $.parseJSON(data);

      var name = currentUser.first_name + ' ' + currentUser.last_name;
      var phone = currentUser.phone;

      nameField.text(name);
      phone ? infoField.text(phone) : infoField.text('');

      window.updateChair(currentUser.id);
    })
      .fail(function() {
        alert(genericFailMessage);
      });
  });

  $('#drive-btn').click(function(event) {
    $(this).html('<i class="fa fa-circle-o-notch fa-spin"></i>');

    // Register user
    $.ajax({
      url: '/api/events/'+findSlug()+'/registrations/self',
      type: 'PATCH',
      data: {
        driver_status: 1
      }
    }).done(function() {
      location.reload();
    }).fail(function() {
      alert(genericFailMessage);
    });

    // Change button
    var self = $(this);
    self.prop('disabled', true);
  });

  $('#photograph-btn').click(function(event) {
    $(this).html('<i class="fa fa-circle-o-notch fa-spin"></i>');

    // Register user
    $.ajax({
      url: '/api/events/'+findSlug()+'/registrations/self',
      type: 'PATCH',
      data: {
        photographer_status: 1
      }
    }).done(function() {
      location.reload();
    }).fail(function() {
      alert(genericFailMessage);
    });

    // Change button
    var self = $(this);
    self.prop('disabled', true);
  });

  $('#write-btn').click(function(event) {
    $(this).html('<i class="fa fa-circle-o-notch fa-spin"></i>');

    // Register user
    $.ajax({
      url: '/api/events/'+findSlug()+'/registrations/self',
      type: 'PATCH',
      data: {
        writer_status: 1
      }
    }).done(function() {
      location.reload();
    }).fail(function() {
      alert(genericFailMessage);
    });

    // Change button
    var self = $(this);
    self.prop('disabled', true);
  });

  //endregion

  //region Date and time picker configuration

  $('.datetime').datetimepicker({
    format: 'l, F j, Y g:i A',    // Expresses date in readable format.
    step: 30                      // Sets times in timepicker at increments of 30 minutes.
  });

  //endregion

  //region Popup plugin configuration and customization

  $('.search-popup-link').magnificPopup({
    type: 'inline',
    closeBtnInside: false,

    callbacks: {
      open: function() {

        // Hackish autofocus; can't set autofocus HTML attribute and there is no afterOpen callback.
        setTimeout(function() {
          $('#search-input').focus();
        }, 500);
      },

      beforeClose: function() {
        $('#not-listed').remove();
        $('#search-results').removeClass('attendee-select');
      }
    },

    removalDelay: 500,
    mainClass: 'mfp-move-horizontal'
  });

  // Check classes to customize popup
  $('.search-popup-link').click(function() {

    if ($(this).hasClass('user-optional')) {
      $('#search-input').after('<a href="#" id="not-listed">Not a paid member?</a>');
      $('#search-results').addClass('attendee-select');
    }
    else if ($(this).hasClass('user-not-optional')) {
      $('#search-results').addClass('chair-select');
    }
  });

  //endregion

  //region Search functions and popup actions

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

  /**
   * Sets chair name, image, and hidden form input with relevant
   *
   * @param id
   * @param url
   * @param name
   */
  window.setChair = function(id, url, name) {

    $('.chair-field').val(id);

    $('.avatar > p').html(function() {
      return '<strong>Event Chair: </strong>' + name;
    })

    $('.avatar > img').attr('src', url);
  }

  /**
   * Adds another row to member attendee table.
   *
   * @param id
   * @param name
   */
  window.addAttendeeRow = function(id, name) {

    $('#member-attendance-section').find('table tr:last').after('' +
      '<tr>' +
        '<input class="attendee-field" name="user_id[]" type="hidden" value=' + id + '>' +
        '<input  name="name[]" type="hidden" value=' + name + '>' +
        '<td>' + name + '</td>' +
        '<td><input name="service_hours[]" type="number" value="0"></td>' +
        '<td><input name="planning_hours[]" type="number" value="0"></td>' +
        '<td><input name="traveling_hours[]" type="number" value="0"></td>' +
        '<td><input name="admin_hours[]" type="number" value="0"></td>' +
        '<td><input name="social_hours[]" type="number" value="0"></td>' +
        '<td><input name="mileage[]" type="number" value="0"></td>' +
        '<td><a href="#" class="remove-registration-button"><div class="button emphasis"><i class="fa fa-times"></i></div></a></td>' +
      '</tr>');
  }

  // Adds new row for attendee with empty form fields.
  $('.search-popup').on('click', '#not-listed', function(event) {
    event.preventDefault();

    $.magnificPopup.close();

    $('#member-attendance-section').find('table tr:last').after('' +
      '<tr>' +
        '<input name="user_id[]" type="hidden" value=null>' +
        '<td><input type="text" name="name[]"></td>' +
        '<td><input type="number" name="service_hours[]" value="0"></td>' +
        '<td><input type="number" name="planning_hours[]" value="0"></td>' +
        '<td><input type="number" name="traveling_hours[]" value="0"></td>' +
        '<td><input type="number" name="admin_hours[]" value="0"></td>' +
        '<td><input type="number" name="social_hours[]" value="0"></td>' +
        '<td><input type="number" name="mileage[]" value="0"></td>' +
        '<td><a href="#" class="remove-registration-button"><div class="button emphasis"><i class="fa fa-times"></i></div></a></td>' +
      '</tr>');
  });

  // Searches users only when keydown events have finished (when user finishes typing)
  $('#search-input').keydown(window.searchUsers);
  $('#search-input').keyup(window.resetTimer);

  // Popup loaded with AJAX, so cannot use jQuery native click() function
  $('#search-results').on('click', 'a', function(event) {
    event.preventDefault();

    // Updates UI with info from search result
    var id = $(this).find('.result-description').attr('userId');
    var url = $(this).find('.result-avatar > img').attr('src');
    var name = $(this).find('.result-description > div:first-child').text();

    // For adding attendees to member attendance table
    if ($('#search-results').hasClass('attendee-select')) {
      window.addAttendeeRow(id, name);
    }

    // For selecting event chair
    else if ($('#search-results').hasClass('chair-select')) {
      window.setChair(id, url, name);
    }

    $.magnificPopup.close();
  });

  //endregion

  //region CERF form functions

  $('#attendance-table').on('click', '.remove-registration-button > div', function(event) {
    $(this).parents().eq(2).remove();

    event.preventDefault();
  });

  $('#kiwanis-attendance-section').on('click', '.remove-kiwanis-attendee-button > div', function(event) {
    $(this).parents().eq(2).remove();

    event.preventDefault();
  });

  $('#kiwanis-attendance-section').on('click', '.add-kiwanis-attendee-button > div', function(event) {
    var lastRow = $('#kiwanis-attendance-section').find('table tr:last');

    lastRow.after('' +
      '<tr>' +
        '<td><input name="kiwanis_club_name[]" type="text" class="kiwanis-club-name"></td>' +
        '<td><input name="num_members[]" type="number"></td>' +
        '<td><a href="#" class="remove-kiwanis-attendee-button"><div class="button emphasis"><i class="fa fa-times"></i></div></a></td>' +
      '</tr>');

    event.preventDefault();
  });

  //endregion

  //region Miscellaneous

  $('.editor').editable({inlineMode: false});
  $('#featuredEventEditor').editable({maxCharacters: 160, inlineMode: false});

  //endregion

});
