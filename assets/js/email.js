/* global jQuery, window */
(function ($, w) {
  let $form, $message
  const icons = {
    'success': 'check-circle',
    'info': 'info-circle',
    'warning': 'exclamation-circle',
    'danger': 'exclamation-triangle'
  }

  $(function () {
    $form = $('#contactForm')
    $message = $('#message')
    $form.submit(submitForm)
  })

  function submitForm (e) {
    e.stopPropagation()
    let formData = $form.serialize()
    $form.find(':input').attr('disabled', 'disabled')
    showMessage('info', 'Submitting...')
    $.ajax({
      type: $form.attr('method'),
      url: $form.attr('action'),
      data: formData,
      success: function (response) {
        switch (response) {
          case '0':
            showMessage('success', '<strong>Success</strong>: Message Sent!')
            break
          case '1':
            showMessage('warning', '<strong>Error</strong>: Please fill out all fields and try again.')
            break
          default:
            showMessage('danger', '<strong>Error</strong>: Please try again later.')
            break
        }
      },
      error: function () {
        showMessage('danger', '<strong>Error</strong>: Please try again later.')
      },
      complete: function () {
        $form.find(':input').attr('disabled', false)
      }
    })
    return false
  }

  function showMessage (level, message) {
    $message
      .addClass('d-none')
      .html('<i class="fas fa-' + icons[level] + '"></i> ' + message)
      .removeClass('alert-info alert-warning alert-succe ss alert-danger')
      .addClass('alert-' + level)
      .removeClass('d-none')
  }
})(jQuery, window)
