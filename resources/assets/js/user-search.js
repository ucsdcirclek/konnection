/**
 * @fileOverview Handles logic related to pop-ups.
 *
 * Magnific Popup plugin is used for pop-ups. Pop-ups are used for adding
 * attendees in the CERF form and for selecting the chair at the beginning of
 * the form. Which type of pop-up to use depends on what classes the pop-up
 * open link has. Depending on what inside the popup is clicked and what class
 * the the results div has, either the chair is selected or an attendee row
 * is appended to the end.
 */

$(function() {
  console.log('initialized user-search');

  var timeoutID;

  window.addNotListed = function() {
    $('#member-attendance-section').find('table tr:last').after('' +
      '<tr>' +
      '<input name="user_id[]" type="hidden" value=null>' +
      '<td><input type="text" name="name[]"></td>' +
      '<td><input type="number" name="service_hours[]" value="0" step="0.25" min="0"></td>' +
      '<td><input type="number" name="planning_hours[]" value="0" step="0.25" min="0"></td>' +
      '<td><input type="number" name="traveling_hours[]" value="0" step="0.25" min="0"></td>' +
      '<td><input type="number" name="admin_hours[]" value="0" step="0.25" min="0"></td>' +
      '<td><input type="number" name="social_hours[]" value="0" step="0.25" min="0"></td>' +
      '<td><input type="number" name="mileage[]" value="0" step="0.25" min="0"></td>' +
      '<td><a href="#" class="remove-registration-button"><div class="button emphasis"><i class="fa fa-times"></i></div></a></td>' +
      '</tr>');
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

  // Adds new row for attendee with empty form fields.
  $('.search-popup').on('click', '#not-listed', function(event) {
    event.preventDefault();
    window.addNotListed();
    $.magnificPopup.close();
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
});
