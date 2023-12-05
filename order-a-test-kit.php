<?php include 'inc/head.php'; ?>
  <title>FRATNOW - Order Test Kit For Adults & Kids</title>
  <meta content="Get the FRAT® kit for sample collection at no cost. Prescriptions required from medical professionals, and results are sent exclusively to your prescribing physician." name="description">
  <meta content="" name="keywords">
 <!-- Canonical Tag -->
	<link rel="canonical" href="https://www.fratnow.com/order-a-test-kit.php" />
	<!-- End Canonical Tag -->
  
  <script type="text/javascript" src="./js/jquery-1.10.2.min.js"></script>
  <?php include 'inc/header.php'; ?>
  

<div style="clear:both;"></div>
<br>
  <main id="main">
      <div class="banner-contact-us order-a-test-kit">
          <div class="container" >
            <div id="top-banner-section" class="row gy-4 publications-row">
                  <div class="col-xl-4 col-md-6" id="banner-left-heading">
                    <div>
                      <h1>Order a Test Kit</h1>
                      <p>We provide FRAT<sup>®</sup> kits for your convenience.
</p>
                    </div>
                  </div>
                  <div class="col-xl-4 col-md-6" id="banner-right-img" style="margin-top: 0px;
    margin-bottom: 20px;">
                    <img src="assets/img/order-a-test-kit-banner.webp" alt="Order a test kit banner">
                  </div>
            </div>
          </div>
      </div>
      <section id="autism-test-kit">
         <div class="container">
        <!--<h4>Autism Test Kit For Adults & Kids - FRAT<sup>®</sup></h4>
        <p>FRAT<sup>®</sup> provides a FRAT<sup>®</sup> Kit for your convenience. The FRAT<sup>®</sup> kit includes all that is necessary for a patient/physician to send in a sample. There is NO charge for the kit.</p>-->
        <!--<a href="https://www.fratnow.com"><img src="assets/img/logo.webp" alt="frat"></a>
        <p>The FRAT<sup>®</sup> kit includes all that is necessary to send a sample to our CLIA certified lab.
</p>
<p>There is NO charge for the collection kit.
</p>-->
<p><b>Please note that ONLY a medical professional may prescribe FRAT<sup>®</sup>.</b>
</p>
<p>Consult your physician before ordering a FRAT<sup>®</sup> kit. </p>
        </div>
    </section>
     
    
      <section id="frat-contact-us" class="frat-contact-us pb-0 pt-5">
        <div id="frat-test-kit-info" class="container" >
          <div class="row gy-4 ">
            <p class="submit-info">To Order a FRAT<sup>®</sup> kit kindly submit the following information:</p>
            <form class="c-form pt-3" id="enquiry-form" action=""  method="POST">
                <div class="row ">
                    <div class="col">
                        <div class="holder">I am a <span class="red">*</span></div>
                        <select class="form-select" aria-label="I am a" id="occupation">
                            <option selected></option>
                            <option value="physician">Physician</option>
                            <option value="parent">Parent</option>
                            <option value="patient">Patient</option>
                            <option value="other">Other</option>
                        </select>    
                    </div>
                    <div id="option-error"></div>
                    <span id="errorOccupation" class="red-text-3452"> </span>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="holder">Physician's Office/Organization <span class="red">*</span></div>
                        <input type="text" id="organization" class="form-control" name="office_organization">
                        <div id="office_organization-error"></div>
                        <span id="errorPhysicionOffice" class="red-text-3452"> </span>
                    </div>
                </div>
                <div class="row">
                  <div class="col mr-80">
				    <div class="holder">First Name <span class="red">*</span></div>
                    <input type="text" class="form-control" id="firstname" name="first_name" place>
                    <span id="errorFirstName" class="red-text-3452"> </span>
                  </div>
                  <div class="col">
					<div class="holder">Last Name <span class="red">*</span></div>
                    <input type="text" class="form-control" id="lastname" name="last_name">
                    <span id="errorLastName" class="red-text-3452"> </span>
                  </div>
                </div>
                <div class="row">
                  <div class="col mr-80">
					<div class="holder">Address <span class="red">*</span></div>
                    <input type="text" class="form-control" id="address" name="address">
                    <span id="errorAddress" class="red-text-3452"> </span>
                  </div>
                  <div class="col">
					<div class="holder">City <span class="red">*</span></div>
                    <input type="text" class="form-control" id="city" name="city">
                    <span id="errorCity" class="red-text-3452"> </span>
                  </div>
                </div>
                <div class="row">
                  <div class="col mr-80">
					<div class="holder">State <span class="red">*</span></div>
                    <input type="text" class="form-control" id="state" name="state">
                   <span id="errorState" class="red-text-3452"> </span>
                  </div>
                  <div class="col">
					<div class="holder">Zip Code <span class="red">*</span></div> 
                    <input type="text" class="form-control" id="zipcode" name="zip_code">
                   <span id="errorZip" class="red-text-3452"> </span>
                  </div>
                </div>
                <div class="row">
                  <div class="col mr-80">
					<div class="holder">Country <span class="red">*</span></div>
                    <input type="text" class="form-control" id="Country" name="country">
                    <span id="errorCountry" class="red-text-3452"> </span>
                  </div>
                  <div class="col">
					<div class="holder">Telephone <span class="red">*</span></div>
                    <input type="text" class="form-control" id="telephone" name="telephone">
                    <span id="errorTelephone" class="red-text-3452"> </span>
                  </div>
                </div>
                <div class="row">
                  <div class="col mr-80">
					<div class="holder">Email <span class="red">*</span></div>
                    <input type="text" class="form-control" id="email" name="email">
                    <span id="errorEmail" class="red-text-3452"> </span>
                  </div>
                  <div class="col">
					<div class="holder"># of Test Kits <span class="red">*</span></div>
                    <input type="text" class="form-control" id="testkits" name="kits">
                    <span id="errorNoOfKits" class="red-text-3452"> </span>
                  </div>
                </div>
				
                <div class="row">
                  <!--<div class="col">
                    <input type="text" class="form-control" placeholder="Message" name="msg" fdprocessedid="sgkaa8">
                    <div id="message-error"></div>
                  </div>-->
                </div>
                <div class="row">
				<div>
                  <p>Please allow 5 to 6 business days for delivery. If you require expedited service,<br>
call our office at <span class="org-color"><a href="tel:610-441-9050">610-441-9050</a>.</span> </p>
              </div>
                <input type="button" onclick="kitFormValidation()" id="submit" class="btn btn-default sub-btn" name="submit" value="Submit"></input>
                <i id="loading" class="fa fa-circle-o-notch fa-spin fa-3x fa-fw loding-icon-153"></i>
                <!--<button type="submit" onclick="kitFormValidation()" id="submit" class="btn btn-default sub-btn" name="submit" value="Submit">Submit</button>-->
              </div>
            </form>
          </div><!-- End post list item -->
        </div>
      </section><!-- End Recent Blog Posts Section -->
      
      
      <section id="contact-box" class="pb-50 test-kit-gray-box" >
        <div class="container">
          <div class="row gy-4">
            <div class="col-xl-4 col-md-6 corporate-address h-230">
              <article>
                  <img src="assets/img/blood-sample-collection.webp" alt="Blood sample collection" class="clia-1">
                  <h3 class="title">
                  Blood Sample Collection and Shipping: 
                  </h3>
                <p class="post-category">
                <span class="org-color"><a href="pdf/Directions-for-Drawing-blood-samples.pdf" target="_blank">Directions for Drawing Blood Samples</a></span>
                </p>
              </article>
            </div><!-- End post list item -->
             <div class="col-xl-4 col-md-6 enquiries">
                 <article>
                  <img src="assets/img/blood sample.png" alt="Blood sample collection" class="clia-1">
                  <h3 class="title">
                  How to send in samples
                  </h3>
                <p class="post-category">
                <span class="org-color"><a href="how-to-send-samples.php">Clicking Here</a></span>
                </p>
              </article>
            </div><!-- End post list item -->
            <div class="col-xl-4 col-md-6 lab-address h-230">
              <article>
              <h3 class="clia-2">CLIA</h3>
                    <h3 class="title">
                    CLIA: 39D2109943
                    </h3>
                  <p class="post-category">
                  A copy of the certificate is available by <a href="pdf/CLIA-Certificate-of-Compliance.pdf" target="_blank" class="org-color">Clicking Here</a>
                  </p>
              </article>
            </div><!-- End post list item -->
           
          </div>
        </div>
      </section>
      
      
</main><!-- End #main -->
<script>
    $(function() {
    $(".holder + input").keyup(function() {
        if($(this).val().length) {
            $(this).prev('.holder').hide();
        } else {
            $(this).prev('.holder').show();
        }
    });
    $(".holder + select").change(function() {
        if($(this).val() != '') {
            $(this).prev('.holder').hide();
        } else {
            $(this).prev('.holder').show();
        }
    });
    $(".holder").click(function() {
        $(this).next().focus();
    });
});
// form validation and data submit start
function kitFormValidation() {
    
    var submitButton = $('#submit');
    // $('#submit').addClass('')
    var english = /^[A-Za-z0-9\s\.\,/\/\#]*$/;
    var mail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*.(\.\w{2,3})+$/;
    var regNum = /^[0-9]+$/;

    var occupation = $('#occupation').val();
    var firstname = $('#firstname').val();
    var lastname = $('#lastname').val();
    var organization = $('#organization').val();
    var address = $('#address').val();
    var email = $('#email').val();
    var city = $('#city').val();
    var state = $('#state').val();
    var zipcode = $('#zipcode').val();
    var Country = $('#Country').val();
    var telephone = $('#telephone').val();
    var testkits = $('#testkits').val();
    
    var validationFailed = false;
    var valFirstNameFailed = false;
    var validOccupation = true;
    var validFirstName = true;
    var validLastName = true;
    var validPhysicianOffice = true;
    var validAddress = true;
    var validCity = true;
    var validState = true;
    var validZip = true;
    var validCountry = true;
    var validTelephone = true;
    var validEmail = true;
    var validNoOfkits = true;

    if (occupation == null || occupation == "" || occupation == undefined || occupation == "I am a"){
        validationFailed = true;
        $('#errorOccupation').text("Please select an option");
        $('#occupation').focus();
        validOccupation = false;
    }
    if (firstname == null || firstname == "" || firstname == undefined) {
        // console.log("first name can not be empty")
        validationFailed = true;
        $('#errorFirstName').text("First name cannot be empty");
        $('#firstname').focus();
        validFirstName = false;

    }
    else {
        if (firstname.length > 50) {
            validationFailed = true;
            $('#errorFirstName').text("First name should be within 50 chars");
            $('#firstname').focus();
            validFirstName = false;
        }
        else {
            $('#errorFirstName').text("");
            validationFailed = false;
            validFirstName = true;
        }
    }

    if (lastname == null || lastname == "" || lastname == undefined) {
        //console.log("last name can not be empty")
        validationFailed = true
        $('#errorLastName').text("Last name cannot be empty");
        $('#lastname').focus();
        validLastName = false;

    }
    else {
        if (lastname.length > 50) {
            validationFailed = true;
            $('#errorLastName').text("Last name should be within 50 chars");
            $('#lastname').focus();
            validLastName = false;
        }
        else {
            $('#errorLastName').text("");
            validationFailed = false;
            validLastName = true;
        }
    }

    // organization  

    if (organization == null || organization == "" || organization == undefined) {
        //console.log("organization name can not be empty")
        validationFailed = true;
        $('#errorPhysicionOffice').text("Physician Office cannot be empty");
        $('#organization').focus();
        validPhysicianOffice = false;

    }
    else {
        if (organization.length > 50) {
            validationFailed = true;
            $('#errorPhysicionOffice').text("Physician Office should be within 50 chars");
            $('#organization').focus();
            validPhysicianOffice = false
        }
        else {
            validationFailed = false;
            $('#errorPhysicionOffice').text("");
            validPhysicianOffice = true;
        }
    }

    // address

    if (address == null || address == "" || address == undefined) {
        //console.log("address name can not be empty")
        validationFailed = true
        $('#errorAddress').text("Address cannot be empty");
        $('#address').focus();
        validAddress = false;
    }
    else {
        if (address.length > 300) {
            validationFailed = true
            $('#errorAddress').text("Address should be within 300 chars");
            $('#address').focus();
            validAddress = false;
        }
        else {
            validationFailed = false;
            $('#errorAddress').text("")
            validAddress = true;
        }
    }

    // email

    if (email == null || email == "" || email == undefined) {
        //console.log("email can not be empty")
        validationFailed = true
        $('#errorEmail').text("Email cannot be empty");
        $('#email').focus();
        validEmail = false;

    }
    else {
        if (!mail.test(email)) {
            //console.log("Inputs should be in mail only")
            validationFailed = true;
            $('#errorEmail').text("Email not in correct format");
            $('#email').focus();
            validEmail = false;
        }
        else {
            $('#errorEmail').text("");
            validationFailed = false;
            validEmail = true;
        }
    }
    // city

    if (city == null || city == "" || city == undefined) {
        //console.log("city can not be empty")
        validationFailed = true;
        $('#errorCity').text("City cannot be empty");
        $('#city').focus();
        validCity = false;
    }
    else {
        if (city.length > 50) {
            validationFailed = true;
            $('#errorCity').text("City should be within 50 chars ");
            $('#city').focus();
            validCity = false;
        }
        else {
            validationFailed = false;
            $('#errorCity').text("");
            validCity = true;
        }
    }
    // state

    if (state == null || state == "" || state == undefined) {
        validationFailed = true;
        $('#errorState').text("State cannot be empty");
        $('#state').focus();
        validState = false;
    }
    else {
        if (state.length > 50) {
            validationFailed = true;
            $('#errorState').text("State should be within 50 chars ");
            $('#state').focus();
            validState = false;
        }
        else {
            validationFailed = false;
            $('#errorState').text("");
            validState = true;
        }
    }
    // zipcode

    if (zipcode == null || zipcode == "" || zipcode == undefined) {
        //console.log("zipcode can not be empty")
        validationFailed = true;
        $('#errorZip').text("Zip-code cannot be empty");
        $('#zipcode').focus();
        validZip = false;

    }
    else {
        /*if (!regNum.test(zipcode)){
                //console.log("Inputs should be in english only")
                validationFailed=true;
                    $('#errorZip').text("Zip-code accept only numbers");
                $('#zipcode').focus();
                validZip=false;
        }*/
        if (zipcode.length > 15) {
            validationFailed = true;
            $('#errorZip').text("Zip-code should be within 20 numbers");
            $('#zipcode').focus();
            validZip = false;
        }
        else {
            validationFailed = false;
            $('#errorZip').text("");
            validZip = true;
        }
    }
    // country

    if (Country == null || Country == "" || Country == undefined) {
        //console.log("Country can not be empty")
        validationFailed = true;
        $('#errorCountry').text("Country cannot be empty");
        $('#Country').focus();
        validCountry = false;

    }
    else {
        if (Country.length > 50) {
            validationFailed = true;
            $('#errorCountry').text("Country should be within 50 chars");
            $('#Country').focus();
            validCountry = false;
        }
        else {
            validationFailed = false;
            $('#errorCountry').text("");
            validCountry = true;
        }
    }
    // telephone

    if (telephone == null || telephone == "" || telephone == undefined) {
        validationFailed = true;
        $('#errorTelephone').text("Telephone cannot be empty");
        $('#telephone').focus();
        validTelephone = false;

    }
    else {
        if (telephone.length < 5) {
            validationFailed = true;
            $('#errorTelephone').text("Telephone  number should have at least 5 digits ");
            $('#telephone').focus();
            validTelephone = false;
        }
        else if (telephone.length > 21) {
            validationFailed = true;
            $('#errorTelephone').text("Telephone Should be within  20 chars");
            $('#telephone').focus();
            validTelephone = false;
        }

        else {
            validationFailed = false;
            $('#errorTelephone').text("");
            validTelephone = true;
        }
    }
    // testkit   

    if (testkits == null || testkits == "" || testkits == undefined) {
        //console.log("zipcode can not be empty")
        validationFailed = true;
        $('#errorNoOfKits').text("No. of kits cannot be empty");
        $('#testkits').focus();
        validNoOfkits = false;

    }
    else {
        if (!regNum.test(testkits)) {
            //console.log("Inputs should be in english only")
            validationFailed = true;
            $('#errorNoOfKits').text("No. of kits accept only numbers");
            $('#testkits').focus();
            validNoOfkits = false;
        }
        else if (testkits == 0) {
            validationFailed = true;
            $('#errorNoOfKits').text("No. of kits  should have at least 1");
            $('#testkits').focus();
            validNoOfkits = false;
        }
        else if (testkits.length > 3) {
            validationFailed = true;
            $('#errorNoOfKits').text("No. of kits should be in 3 digits");
            $('#testkits').focus();
            validNoOfkits = false;
        }

        else {
            validationFailed = false;
            $('#errorNoOfKits').text("");
            validNoOfkits = true;
        }
    }
    


    if (!validationFailed && validFirstName && validLastName && validPhysicianOffice && validAddress && validCity && validState && validZip && validCountry && validTelephone && validEmail && validNoOfkits) {
        //event.preventDefault();
        $('#loading').show();
        $('#submit').attr('disabled','disabled');
        var OrderkitData = { //Fetch form data
            'author': $('#occupation').val(),
            'firstname': $('#firstname').val(),
            'lastname': $('#lastname').val(),
            'organization': $('#organization').val(),
            'address': $('#address').val(),
            'email': $('#email').val(),
            'city': $('#city').val(),
            'state': $('#state').val(),
            'zipcode': $('#zipcode').val(),
            'country': $('#Country').val(),
            'telephone': $('#telephone').val(),
            'testkits': $('#testkits').val(),
        };
        $.ajax({
            type: 'POST',
            url: '/order-form.php',
            data: OrderkitData,
            // dataType  : 'json',
            success: function (data) {
                $('#loading').hide();
                if (data == '"Email is Sent. order process is completed"') {
                    //alert("Order process is  completed");
                    $(location).attr('href', 'https://www.fratnow.com/thank-you.php');
                    $('#contact-form')[0].reset();

                }
                else if (data === 'Email is not sent. order process is not completed') {
                    alert("Order process is  not completed.. Try Again");
                }
                $('#submit').removeAttr('disabled');
            },
            failure: function (error) {
                $('#loading').hide();
                console.log(error)
            }
        });
    }
    else {
        // alert("Fill with right data in required fields")
    }
}
// form validation and data submit end
</script>
  <?php include 'inc/footer.php'; ?>
  <?php include 'inc/footer-js.php'; ?>
  
  <?php include 'inc/footer-close.php'; ?>