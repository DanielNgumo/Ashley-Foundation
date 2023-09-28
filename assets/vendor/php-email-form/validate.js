(function () {
  "use strict";

  // Function to handle form submission
  function handleFormSubmit(event) {
    event.preventDefault();

    const thisForm = event.target;
    const action = thisForm.getAttribute('action');
    const recaptcha = thisForm.getAttribute('data-recaptcha-site-key');

    if (!action) {
      displayError(thisForm, 'The form action property is not set!');
      return;
    }

    // Show loading message and hide error and sent messages
    thisForm.querySelector('.loading').classList.add('d-block');
    thisForm.querySelector('.error-message').classList.remove('d-block');
    thisForm.querySelector('.sent-message').classList.remove('d-block');

    const formData = new FormData(thisForm);

    if (recaptcha) {
      if (typeof grecaptcha !== "undefined") {
        try {
          // Get reCAPTCHA token and add it to form data before submission
          grecaptcha.execute(recaptcha, { action: 'php_email_form_submit' })
            .then(token => {
              formData.set('recaptcha-response', token);
              phpEmailFormSubmit(thisForm, action, formData);
            })
            .catch(error => {
              displayError(thisForm, error);
            });
        } catch (error) {
          displayError(thisForm, error);
        }
      } else {
        displayError(thisForm, 'The reCaptcha javascript API url is not loaded!');
      }
    } else {
      // No reCAPTCHA, directly submit the form
      phpEmailFormSubmit(thisForm, action, formData);
    }
  }

  // Function to handle form submission via Fetch API
  function phpEmailFormSubmit(thisForm, action, formData) {
    fetch(action, {
      method: 'POST',
      body: formData,
      headers: { 'X-Requested-With': 'XMLHttpRequest' }
    })
      .then(response => {
        if (response.ok) {
          return response.text();
        } else {
          throw new Error(`${response.status} ${response.statusText} ${response.url}`);
        }
      })
      .then(data => {
        thisForm.querySelector('.loading').classList.remove('d-block');
        if (data.trim() === 'OK') {
          thisForm.querySelector('.sent-message').classList.add('d-block');
          thisForm.reset();
        } else {
          throw new Error(data ? data : 'Form submission failed and no error message returned from: ' + action);
        }
      })
      .catch(error => {
        displayError(thisForm, error);
      });
  }

  // Function to display error messages
  function displayError(thisForm, error) {
    thisForm.querySelector('.loading').classList.remove('d-block');
    thisForm.querySelector('.error-message').innerHTML = status;
    thisForm.querySelector('.error-message').classList.add('d-block');
  }

  // Add form submit event listeners to all forms with class 'php-email-form'
  const forms = document.querySelectorAll('.php-email-form');
  forms.forEach(form => {
    form.addEventListener('submit', handleFormSubmit);
  });
})();
