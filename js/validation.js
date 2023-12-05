$(document).ready(function() {
  $('#enquiry-form input').on('input', function() {
    $(this).removeClass('alert-danger').css('border-color', '');
    $(this).parent().find('.error').remove();
  });
  
  $('#enquiry-form input[type="text"]').on('keypress', function(event) {
    var key = String.fromCharCode(event.which);
    var allowedChars = /^[a-zA-Z\s]*$/; // Regular expression for letters and spaces

    if (!allowedChars.test(key)) {
      event.preventDefault();
    }
  });

  $('#enquiry-form').submit(function(e) {
    // Response Captcha Error
      var response = grecaptcha.getResponse();
            if (response.length === 0) {
                event.preventDefault(); // Prevent form submission
                $('.captchafailed').css('display', 'block');
            } else {
                $('.captchafailed').css('display', 'none');
                FormValidation(event);
            }
      
    // Clear any existing error messages
    $('.error').remove();

    // Validate the form fields
    var error = false;
    var nameRegex = /^[a-zA-Z ]*$/;
    var phoneRegex = /^[6789][0-9]{9}$/;
    var first_name = $('input[name=first_name]');
    var last_name = $('input[name=last_name]');
    var email = $('input[name=email]');
    // var company = $('input[name=company]');
    var inquiry = $('select[name=inquiry]');
    // var country = $('input[name=country]');
    var option = $('select[name=option]'); 
    var office_organization = $('input[name=office_organization]'); 
    var address = $('input[name=address]'); 
    var city = $('input[name=city]'); 
    var state = $('input[name=state]'); 
    var zip_code = $('input[name=zip_code]'); 
    var telephone = $('input[name=telephone]');
    var kits = $('input[name=kits]');

    if (first_name.val() == '') {
      first_name.after('<div class="error">Please enter your first name.</div>');
      first_name.css('border-color', 'red');
      error = true;
    } else if (!nameRegex.test(first_name.val())) {
      first_name.after('<div class="error">Please enter a valid name.</div>');
      first_name.css('border-color', 'red');
      error = true;
    } else {
      first_name.css('border-color', 'green');
    }

    if (last_name.val() == '') {
      last_name.after('<div class="error">Please enter your last name.</div>');
      last_name.css('border-color', 'red');
      lname = true;
    } else if (!nameRegex.test(last_name.val())) {
      last_name.after('<div class="error">Please enter a valid name.</div>');
      last_name.css('border-color', 'red');
      error = true;
    } else {
      last_name.css('border-color', 'green');
    }

    if (email.val() == '') {
      email.after('<div class="error">Please enter your email address.</div>');
      email.css('border-color', 'red');
      error = true;
    } else if (!emailRegex.test(email.val())) {
      email.after('<div class="error">Please enter a valid email address.</div>');
      email.css('border-color', 'red');
      error = true;
    } else {
      email.css('border-color', 'green');
    }

    // if (company.val() == '') {
    //   company.after('<div class="error">Please enter your company name.</div>');
    //   company.css('border-color', 'red');
    //   error = true;
    // } else if (!nameRegex.test(company.val())) {
    //   company.after('<div class="error">Please enter a valid company name.</div>');
    //   company.css('border-color', 'red');
    //   error = true;
    // } else {
    //   company.css('border-color', 'green');
    // }

    if (inquiry.val() === '1') { // Changed the comparison value to match the default
      $('#inquiry-error').html('<div class="error">Please select a inquiry type.</div>');
      inquiry.css('border-color', 'red');
      error = true;
    } else {
      inquiry.css('border-color', 'green');
    }


    // if (country.val() == '') {
    //   country.after('<div class="error">Please enter your country.</div>');
    //   country.css('border-color', 'red');
    //   error = true;
    // } else if (!nameRegex.test(country.val())) {
    //   country.after('<div class="error">Please enter a valid country.</div>');
    //   country.css('border-color', 'red');
    //   error = true;
    // } else {
    //   country.css('border-color', 'green');
    // }

    if (option.val() === '1') { // Changed the comparison value to match the default
      $('#option-error').html('<div class="error">Please select option.</div>');
      option.css('border-color', 'red');
      error = true;
    } else {
      option.css('border-color', 'green');
    }

    if (office_organization.val() == '') {
      office_organization.after('<div class="error">Please enter Physicians Office/Organization.</div>');
      office_organization.css('border-color', 'red');
      error = true;
    } else if (!nameRegex.test(office_organization.val())) {
      office_organization.after('<div class="error">Please enter Physicians Office/Organization.</div>');
      office_organization.css('border-color', 'red');
      error = true;
    } else {
      office_organization.css('border-color', 'green');
    }

    if (address.val() == '') {
      address.after('<div class="error">Please enter your address.</div>');
      address.css('border-color', 'red');
      error = true;
    } else if (!nameRegex.test(address.val())) {
      address.after('<div class="error">Please enter your address.</div>');
      address.css('border-color', 'red');
      error = true;
    } else {
      address.css('border-color', 'green');
    }

    if (city.val() == '') {
      city.after('<div class="error">Please enter your city.</div>');
      city.css('border-color', 'red');
      error = true;
    } else if (!nameRegex.test(city.val())) {
      city.after('<div class="error">Please enter your city.</div>');
      city.css('border-color', 'red');
      error = true;
    } else {
      city.css('border-color', 'green');
    }

    if (state.val() == '') {
      state.after('<div class="error">Please enter your state.</div>');
      state.css('border-color', 'red');
      error = true;
    } else if (!nameRegex.test(state.val())) {
      state.after('<div class="error">Please enter your state.</div>');
      state.css('border-color', 'red');
      error = true;
    } else {
      state.css('border-color', 'green');
    }

    if (zip_code.val() == '') {
      zip_code.after('<div class="error">Please enter zip code.</div>');
      zip_code.css('border-color', 'red');
      error = true;
    } else if (!nameRegex.test(zip_code.val())) {
      zip_code.after('<div class="error">Please enter zip code.</div>');
      zip_code.css('border-color', 'red');
      error = true;
    } else {
      zip_code.css('border-color', 'green');
    }

    if (telephone.val() == '') {
      telephone.after('<div class="error">Please enter telephone.</div>');
      telephone.css('border-color', 'red');
      error = true;
    } else if (!phoneRegex.test(telephone.val())) {
      telephone.after('<div class="error">Please enter a valid phone number.</div>');
      telephone.css('border-color', 'red');
      error = true;
    } else {
      telephone.css('border-color', 'green');
    }

    if (kits.val() == '') {
      kits.after('<div class="error">Please enter kits.</div>');
      kits.css('border-color', 'red');
      error = true;
    } else if (!nameRegex.test(kits.val())) {
      kits.after('<div class="error">Please enter kits.</div>');
      kits.css('border-color', 'red');
      error = true;
    } else {
      kits.css('border-color', 'green');
    }

    // If there are errors, prevent the form from submitting and show the error messages
    if (error) {
      e.preventDefault();
      $('.error').css('color', 'red');
      return false;
    } else {
      $('#enquiry-form input').css('border-color', 'green');
    }
  });
});