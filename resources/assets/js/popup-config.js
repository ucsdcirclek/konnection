/**
 * @fileOverview Configuration for Magnific pop-up plugin.
 *
 * Specifies what to do when the pop-up opens and what to do right before the
 * pop-up closes, and some visual aspects for the pop-up.
 */

$(function() {
  console.log('initialized popup-config');

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
});