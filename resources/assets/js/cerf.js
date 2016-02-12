/**
 * @fileOverview Contains functions for the CERF form.
 *
 * For both the member attendance and Kiwanis attendance section, new table
 * rows must be added or removed dynamically after page load. addAttendeeRow()
 * works with the user search pop-up script to add a new row with the name and
 * ID of the relevant user already filled in. For the Kiwanis attendees, a new
 * row only needs blank fields (one for the Kiwanis club name, and another for
 * the number of members).
 */

$(function() {
  $('#attendance-table').on('click', '.remove-registration-button > div', function(event) {
    $(this).parents().eq(2).remove();

    event.preventDefault();
  });

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
      '<td><input name="service_hours[]" type="number" value="0" step="0.25" min="0"></td>' +
      '<td><input name="planning_hours[]" type="number" value="0" step="0.25" min="0"></td>' +
      '<td><input name="traveling_hours[]" type="number" value="0" step="0.25" min="0"></td>' +
      '<td><input name="admin_hours[]" type="number" value="0" step="0.25" min="0"></td>' +
      '<td><input name="social_hours[]" type="number" value="0" step="0.25" min="0"></td>' +
      '<td><input name="mileage[]" type="number" value="0" step="0.25" min="0"></td>' +
      '<td><a href="#" class="remove-registration-button"><div class="button emphasis"><i class="fa fa-times"></i></div></a></td>' +
      '</tr>');
  }

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
});