/**
* PHP Email Form Validation - v3.5
*/
(function () {
  "use strict";

  function php_email_form_submit(thisForm, action, formData) {
    thisForm.querySelector('.loading').innerHTML = 'Loading';
    fetch(action, {
      method: 'POST',
      body: formData,
      headers: {'X-Requested-With': 'XMLHttpRequest'}
    })
    .then(response => {
      return response.text();
    })
    .then(data => {
      let obj = JSON.parse(data);
      console.log(obj.status);
      thisForm.querySelector('.loading').innerHTML = '..............Loading...............';
      thisForm.querySelector('.loading').classList.remove('d-block');
      if (obj.status == 'OK') {
        thisForm.querySelector('.loading').innerHTML = '';
        thisForm.querySelector('.error-message').innerHTML = '';
        thisForm.querySelector('.sent-message').innerHTML = 'Your message has been sent!';
        thisForm.querySelector('.sent-message').classList.add('d-block');
        
        thisForm.reset(); 
      } else {
        thisForm.querySelector('.loading').innerHTML = '';
        throw new Error(data ? data : 'Form submission failed and no error message returned from: ' + action); 
      }
    })
    .catch((error) => {
      displayError(thisForm, error);
    });
  }

  function php_carrer_form_submit(thisForm, action, formData) {
    thisForm.querySelector('.loading').innerHTML = 'Loading';
    fetch(action, {
      method: 'POST',
      body: formData,
      headers: {'X-Requested-With': 'XMLHttpRequest'}
    })
    .then(response => {
      return response.text();
    })
    .then(data => {
      let obj = JSON.parse(data);
      console.log(obj.status);
      thisForm.querySelector('.loading').innerHTML = '..............Loading...............';
      thisForm.querySelector('.loading').classList.remove('d-block');
      if (obj.status == 'OK') {
        thisForm.querySelector('.loading').innerHTML = '';
        thisForm.querySelector('.error-message').innerHTML = '';
        thisForm.querySelector('.sent-message').innerHTML = 'Your message has been sent!';
        thisForm.querySelector('.sent-message').classList.add('d-block');
        
        thisForm.reset(); 
        removeUpload();
      } else {
        thisForm.querySelector('.loading').innerHTML = '';
        throw new Error(data ? data : 'Form submission failed and no error message returned from: ' + action); 
      }
    })
    .catch((error) => {
      displayError(thisForm, error);
    });
  }

  function displayError(thisForm, error) {
    thisForm.querySelector('.loading').classList.remove('d-block');
    thisForm.querySelector('.error-message').innerHTML = error;
    thisForm.querySelector('.error-message').classList.add('d-block');
  }

  var elementContact = document.getElementById('myForm');

  if (elementContact) {

    elementContact.addEventListener('submit', function(event) {
      // prevent the default action of form submission
      event.preventDefault();

      // clear the error messages
      document.getElementById('firstnameError').innerHTML = "";
      document.getElementById('lastnameError').innerHTML = "";
      document.getElementById('emailError').innerHTML = "";
      document.getElementById('contactNumberError').innerHTML = "";
      document.getElementById('messageError').innerHTML = "";

      var firstname = document.getElementById('firstname').value;
      var lastname = document.getElementById('lastname').value;
      var email = document.getElementById('email').value;
      var contactNumber = document.getElementById('contact_number').value;
      var message = document.getElementById('message').value;

      // regular expression to check email format
      var emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

      // regular expression to check phone number format
      var phoneRegex = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;

      var hasErrors = false;
      // validate the form elements
      if (firstname == "") {
        document.getElementById('firstnameError').innerHTML = "First name is required";
        hasErrors = true;
      }
      if (lastname == "") {
        document.getElementById('lastnameError').innerHTML = "Last name is required";
        hasErrors = true;
      }
      if (email == "") {
        document.getElementById('emailError').innerHTML = "Email is required";
        hasErrors = true;
      }
      if (!emailRegex.test(email)) {
        document.getElementById('emailError').innerHTML = "Invalid email address";
        hasErrors = true;
      }
      if (contactNumber == "") {
        document.getElementById('contactNumberError').innerHTML = "Contact number is required";
        hasErrors = true;
      }
      if (!phoneRegex.test(contactNumber)) {
        document.getElementById('contactNumberError').innerHTML = "Invalid contact number";
        hasErrors = true;
      }
      if (message == "") {
        document.getElementById('messageError').innerHTML = "Message is required";
        hasErrors = true;
      }

      // form is valid, allow it to be submitted
      if (hasErrors){
        return false;
      }

      let thisForm = this;

      let action = thisForm.getAttribute('action');

      thisForm.querySelector('.loading').classList.add('d-block');
      thisForm.querySelector('.error-message').classList.remove('d-block');
      thisForm.querySelector('.sent-message').classList.remove('d-block');

      let formData = new FormData( thisForm );

      php_email_form_submit(thisForm, action, formData);

      return true;

    });
  }

  // career form

  var elementCareer = document.getElementById('myCareerForm');

  if (elementCareer) {

    elementCareer.addEventListener('submit', function(event) {
      // prevent the default action of form submission
      event.preventDefault();

      // clear the error messages
      document.getElementById('nameError').innerHTML = "";
      document.getElementById('emailError').innerHTML = "";
      document.getElementById('contactNumberError').innerHTML = "";
      document.getElementById('jobTypeError').innerHTML = "";
      document.getElementById('currentLocationError').innerHTML = "";
      document.getElementById('experienceError').innerHTML = "";
      document.getElementById('fileTypeError').innerHTML = "";

      var name = document.getElementById('name').value;
      var email = document.getElementById('email').value;
      var contactNumber = document.getElementById('contact_number').value;
      var jobType = document.getElementById('job_type').value;
      var currentLocation = document.getElementById('current_location').value;
      var experience = document.getElementById('experience').value;

      // regular expression to check email format
      var emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

      // regular expression to check phone number format
      var phoneRegex = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;

      var hasErrors = false;
      // validate the form elements
      if (name == "") {
        document.getElementById('nameError').innerHTML = "Name is required";
        hasErrors = true;
      }
      if (email == "") {
        document.getElementById('emailError').innerHTML = "Email is required";
        hasErrors = true;
      }
      if (!emailRegex.test(email)) {
        document.getElementById('emailError').innerHTML = "Invalid email address";
        hasErrors = true;
      }
      if (contactNumber == "") {
        document.getElementById('contactNumberError').innerHTML = "Contact number is required";
        hasErrors = true;
      }
      if (!phoneRegex.test(contactNumber)) {
        document.getElementById('contactNumberError').innerHTML = "Invalid contact number";
        hasErrors = true;
      }
      if (jobType == "") {
        document.getElementById('jobTypeError').innerHTML = "Job/Internship is required";
        hasErrors = true;
      }
      if (currentLocation == "") {
        document.getElementById('currentLocationError').innerHTML = "Current location is required";
        hasErrors = true;
      }
      if (experience == "") {
        document.getElementById('experienceError').innerHTML = "Experience is required";
        hasErrors = true;
      }
      const fileInput = document.querySelector('.file-upload-input');
      if (fileInput.files.length === 0) {
        // Display an error message
        document.getElementById('fileTypeError').innerHTML = 'Please select a file.';
        hasErrors = true;
      }

      // form is valid, allow it to be submitted
      if (hasErrors){
        return false;
      }

      let thisForm = this;

      let action = thisForm.getAttribute('action');

      thisForm.querySelector('.loading').classList.add('d-block');
      thisForm.querySelector('.error-message').classList.remove('d-block');
      thisForm.querySelector('.sent-message').classList.remove('d-block');

      let formData = new FormData( thisForm );

      php_carrer_form_submit(thisForm, action, formData);

      return true;

    });
  }

  // Get the file input element
  const fileInput = document.querySelector('.file-upload-input');

  // Set the allowed file types
  const allowedTypes = ['application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/pdf', 'application/vnd.oasis.opendocument.text', 'application/rtf'];

  // Add an event listener for the change event
  fileInput.addEventListener('change', function() {
    // Get the selected file
    const file = fileInput.files[0];

    // Check if the file type is not allowed
    if (!allowedTypes.includes(file.type)) {
      // Display an error message
      document.getElementById('fileTypeError').innerHTML = 'Invalid file type. Please select a .doc, .docx, .pdf, .odt, or .rtf file.';
    } else {
      // Clear the error message
      document.getElementById('fileTypeError').innerHTML = '';
    }
  });


})();


function readURL(input) {
  // Get the file input element
  const fileInput = document.querySelector('.file-upload-input');
  // alert('hi');
  // Set the allowed file types
  const allowedTypes = ['application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/pdf', 'application/vnd.oasis.opendocument.text', 'application/rtf'];

  // Add an event listener for the change event
  
    // Get the selected file
  const file = fileInput.files[0];
    // Check if the file type is not allowed
    if (!allowedTypes.includes(file.type)) {
      // Display an error message
      document.getElementById('fileTypeError').innerHTML = 'Invalid file type. Please select a .doc, .docx, .pdf, .odt, or .rtf file.';
      removeUpload();
    } else {
      // Clear the error message
      document.getElementById('fileTypeError').innerHTML = '';
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          document.querySelector('.image-upload-wrap').style.display = 'none';
          document.querySelector('.file-upload-image').src = e.target.result;
          document.querySelector('.file-upload-content').style.display = 'block';
          document.querySelector('.image-title').innerHTML = input.files[0].name;
          document.querySelector('.file-upload-image').style.display = 'none';
        };
        reader.readAsDataURL(input.files[0]);
      } else {
        removeUpload();
      }

    }
  

}

function removeUpload() {
  var input = document.querySelector('.file-upload-input');
  var clone = input.cloneNode(true);
  input.parentNode.replaceChild(clone, input);
  document.querySelector('.file-upload-content').style.display = 'none';
  document.querySelector('.image-upload-wrap').style.display = 'block';
}

document.querySelector('.image-upload-wrap').addEventListener('dragover', function () {
  document.querySelector('.image-upload-wrap').classList.add('image-dropping');
});

document.querySelector('.image-upload-wrap').addEventListener('dragleave', function () {
  document.querySelector('.image-upload-wrap').classList.remove('image-dropping');
});


var elements = document.querySelectorAll('.my-elements');
Array.from(elements).forEach(function(element) {
  // do something with each element
});