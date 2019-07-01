/* global $, BUILD_NUMBER */

$(function () {
  // DOM Ready
  // Only perform default tasks if we're in a supported browser.
  $.cachedScript = function (url, options) {
    // Cache-honoring version of $.getScript()
    // Obtained from: https://api.jquery.com/jQuery.getScript/
    // Allow user to set any option except for dataType, cache, and url
    options = $.extend(options || {}, {
      dataType: 'script',
      cache: true,
      url: url + '?_=' + BUILD_NUMBER
    })

    // Use $.ajax() since it is more flexible than $.getScript
    // Return the jqXHR object so we can chain callbacks
    return $.ajax(options)
  }

  if ($('#contactForm').length) {
    $.cachedScript('/assets/js/email.js')
  }
})
