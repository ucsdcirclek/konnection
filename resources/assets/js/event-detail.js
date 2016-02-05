/**
 * @fileOverview Contains scripts for the event detail page.
 *
 * Handles signing up for an event, removing your sign-up, and indicating
 * whether you are a driver, writer, or photographer. AJAX is used to create
 * new registrations remove them by making a POST request to the relevant API
 * endpoint. Driver, writer, and photographer statuses are stored as boolean
 * values in the database, so AJAX calls are also required to update those
 * accordingly.
 */

$(function() {
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
      url: appConstants.EVENT_LIST_ENDPOINT+findSlug()+'/registrations/create',
      success: function(data) {
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
      url: appConstants.EVENT_LIST_ENDPOINT+findSlug()+'/registrations/self',
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

    $.post(appConstants.EVENT_LIST_ENDPOINT+findSlug()+'/registrations/create', data);

    $('#guestRegistration').remove();
  });


  $('#drive-btn').click(function(event) {
    $(this).html('<i class="fa fa-circle-o-notch fa-spin"></i>');

    // Register user
    $.ajax({
      url: appConstants.EVENT_LIST_ENDPOINT+findSlug()+'/registrations/self',
      type: 'PATCH',
      data: {
        driver_status: 1
      }
    }).done(function() {
      location.reload();
    }).fail(function() {
      alert(appConstants.GENERIC_FAIL_MESSAGE);
    });

    // Change button
    var self = $(this);
    self.prop('disabled', true);
  });

  $('#photograph-btn').click(function(event) {
    $(this).html('<i class="fa fa-circle-o-notch fa-spin"></i>');

    // Register user
    $.ajax({
      url: appConstants.EVENT_LIST_ENDPOINT+findSlug()+'/registrations/self',
      type: 'PATCH',
      data: {
        photographer_status: 1
      }
    }).done(function() {
      location.reload();
    }).fail(function() {
      alert(appConstants.GENERIC_FAIL_MESSAGE);
    });

    // Change button
    var self = $(this);
    self.prop('disabled', true);
  });

  $('#write-btn').click(function(event) {
    $(this).html('<i class="fa fa-circle-o-notch fa-spin"></i>');

    // Register user
    $.ajax({
      url: appConstants.EVENT_LIST_ENDPOINT+findSlug()+'/registrations/self',
      type: 'PATCH',
      data: {
        writer_status: 1
      }
    }).done(function() {
      location.reload();
    }).fail(function() {
      alert(appConstants.GENERIC_FAIL_MESSAGE);
    });

    // Change button
    var self = $(this);
    self.prop('disabled', true);
  });
});
