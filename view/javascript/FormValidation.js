// Javascript for validating emails.
//register form validation

function updateInputChecks(element, setting) { //element is an int between 0 - 3 refers to the type of check box, setting is boolean and will set the check boxes to true or false
	"use strict";
	var checkBox;

	switch (element) {
		case (0):
			checkBox = document.getElementById("firstNameCheck");
			break;
		case (1):
			checkBox = document.getElementById("lastNameCheck");
			break;
		case (2):
			checkBox = document.getElementById("eMailCheck");
			break;
		case (3):
			checkBox = document.getElementById("passwordCheck");
			break;

	}

	checkBox.checked = setting;

	updateSubmitButton();
}

function updateSubmitButton() {
	"use strict";
	
	var checkBoxes = document.getElementsByClassName("checkerBox");
	var submitButton = document.getElementById("submitButton");
	
	submitButton.disabled = false;
	
	for (var i = 0; i < checkBoxes.length ;i++) {
		if (!checkBoxes[i].checked) {
			submitButton.disabled = true;
		}
	}
	
}

function hideAlertBoxes() {
	"use strict";

	var errorDivs = document.getElementsByClassName("alert");

	var i;

	for (i = 0; i < errorDivs.length; i++) {
		errorDivs[i].style.display = 'none';
	}
}
//password
function validatePassword() {
	"use strict";
	var ErrorTextStrings = [
		"<p>- Password must have <strong>at least 8 characters</strong>.</p>",
		"<p>- Password must contain <strong>at least one number</strong>.</p>",
		"<p>- Password must have <strong>at least one uppercase letter</strong>.</p>",
		"<p>- Password must have <strong>at least one lowercase letter</strong>.</p>"
	];

	var password = document.getElementById('passwordInput').value;

	if (password == "") {
		updateInputChecks(3, false);
		return "";
	}

	//the checks are: 8 letters, a digit, an uppercase, and a lowercase
	var checks = [
		false,
		false,
		false,
		false
	];
	//If the password length is greater than or equal to 8
	checks[0] = password.length >= 8;

	//If there is a digit in the password
	checks[1] = /\d/.test(password);

	//If there is an uppercase letter
	checks[2] = /[A-Z]/.test(password);

	//If there is a lowercase letter
	checks[3] = /[a-z]/.test(password);

	//Setup the return variable - a string that contains the errors
	var returnVal = "";

	updateInputChecks(3, true);
	
	for (var i = 0; i < checks.length; i++) {
		if (!checks[i]) {
			returnVal = returnVal + ErrorTextStrings[i];
			
			updateInputChecks(3, false);
		}
	}

	return returnVal;


}

function displayPasswordError() {
	"use strict";
	var passVal = validatePassword();
	var errorDiv = document.getElementById("passwordAlert");

	if (passVal === "") {
		//Use -PasswordErrorDiv-.display.style = "none";
		errorDiv.style.display = 'none';
		
		return;
		
	} else {
		//Make bootstap display the error div, with the value of passVal inside it.
		//Use -PasswordErrorDiv-.display.style = "block";
		errorDiv.style.display = 'block';
		//Use -PasswordErrorDiv-.innerHTML = passVal;
		errorDiv.innerHTML = "<p><strong>ERROR:</strong> Password is invalid, because:</p>" + passVal;

		
	}
}

//email
function validateEmail() {
	"use strict";
	updateInputChecks(2, false);
	
	var ErrorTextString = "Email is not formatted correctly.";

	var email = document.getElementById('emailInput').value;

	if (email == "") {
		return "";
	}

	//If email is formatted correctly, check email exists
	if (/.*@.*\..{2,4}/.test(email)) {
		checkEmailAlreadyExists(email);
		return "";
	} else {
		return ErrorTextString;
	}
}

function checkEmailAlreadyExists(email) {
	"use strict";

	//This is where you'd *display* the loader

	var checkurl = "../../control/register_check_email_exists.php?email=" + email;
	$.ajax({
		url: checkurl,
		method: 'get',
		datatype: 'json',
		success: function (res) {
			//This is where you hide the loader
			displayEmailExists(res.emailexists);

		}
	});
}

function displayEmailExists(emailExists) {
	"use strict";
	var errorDiv = document.getElementById("emailAlert");
	if (emailExists) {
		errorDiv.style.display = 'block';
		errorDiv.innerHTML = "<strong>ERROR:</strong> Email already exists.";
	} else {
		updateInputChecks(2, true);
		errorDiv.style.display = 'none';
	}
}

function displayEmailError() {
	"use strict";

	var emailVal = validateEmail();
	var errorDiv = document.getElementById("emailAlert");

	if (emailVal == "") {
		//Use -PasswordErrorDiv-.display.style = "none";
		errorDiv.style.display = 'none';
		return;
	} else {
		//Make bootstap display the error div, with the value of passVal inside it.
		//Use -PasswordErrorDiv-.display.style = "block";
		errorDiv.style.display = 'block';
		//Use -PasswordErrorDiv-.innerHTML = passVal;
		errorDiv.innerHTML = "<p><strong>ERROR:</strong> Email is invalid, because:</p>" + emailVal;
	}
}
//firstname
function displayFirstNameError() {
	"use strict";
	var passVal = validateFirstName();
	var errorDiv = document.getElementById("firstNameAlert");

	if (passVal === "") {
		//Use -PasswordErrorDiv-.display.style = "none";
		errorDiv.style.display = 'none';
		return;
	} else {
		//Make bootstap display the error div, with the value of passVal inside it.
		//Use -PasswordErrorDiv-.display.style = "block";
		errorDiv.style.display = 'block';
		//Use -PasswordErrorDiv-.innerHTML = passVal;
		errorDiv.innerHTML = "<p><strong>ERROR:</strong> First Name is invalid, because:</p>" + passVal;
	}
}

function validateFirstName() {
	"use strict";

	var ErrorTextStrings = [
		"<p>- First name has to be between <strong> 2 and 15 characters</strong> in length.</p>",
		"<p>- Firstname <strong> cannot have digits.</strong></p>",
		"<p>- Firstname <strong> cannot have symbols.</strong> (Hyphen (-) is acceptable)</p>"
	];

	var firstname = document.getElementById('firstNameInput').value;

	if (firstname == "") {
		updateInputChecks(0, false);
		return "";
	}

	var checks = [
		false, // Name length
		false, // No digits
		false // No symbols - have to allow hyphens
	];
	//If the name is greater than 2 letters, but less than 15
	//checks[0] = firstname.length less than 15;
	checks[0] = (firstname.length >= 2 && firstname.length <= 15);

	//If there is no digits
	checks[1] = !(/\d/.test(firstname));

	//If there is a no symbols, but hyphens are allowed
	checks[2] = !(/[\`\~\!\@\#\$\%\^\&\*\(\)\_\+\?\/\\\[\]\\{\}\|\"\'\.\,]/.test(firstname));

	//Setup the return variable - a string that contains the errors
	var returnVal = "";

	updateInputChecks(0, true);
	
	for (var i = 0; i < checks.length; i++) {
		if (!checks[i]) {
			returnVal = returnVal + ErrorTextStrings[i];
			updateInputChecks(0, false);
		}
	}

	return returnVal;


}
//lastname
function displayLastNameError() {
	"use strict";
	var passVal = validateLastName();
	var errorDiv = document.getElementById("lastNameAlert");

	if (passVal === "") {
		//Use -PasswordErrorDiv-.display.style = "none";
		errorDiv.style.display = 'none';
		return;
	} else {
		//Make bootstap display the error div, with the value of passVal inside it.
		//Use -PasswordErrorDiv-.display.style = "block";
		errorDiv.style.display = 'block';
		//Use -PasswordErrorDiv-.innerHTML = passVal;
		errorDiv.innerHTML = "<p><strong>ERROR:</strong> Last Name is invalid, because:</p>" + passVal;
	}
}

function validateLastName() {
	"use strict";
	var ErrorTextStrings = [
		"<p>- Last name has to be between <strong> 2 and 15 characters</strong> in length.</p>",
		"<p>- Last name <strong> cannot have digits.</strong></p>",
		"<p>- Last name <strong> cannot have symbols.</strong> (Hyphen (-) is acceptable)</p>"
	];

	var lastname = document.getElementById('lastNameInput').value;

	if (lastname == "") {
		updateInputChecks(1, false);
		return "";
	}

	var checks = [
		false, // Name length
		false, // No digits
		false // No symbols - have to allow hyphens
	];
	//If the name is greater than 2 letters, but less than 15
	//checks[0] = firstname.length less than 15;
	checks[0] = (lastname.length >= 2 && lastname.length <= 15);

	//If there is no digits
	checks[1] = !(/\d/.test(lastname));

	//If there is a no symbols, but hyphens are allowed
	checks[2] = !(/[\`\~\!\@\#\$\%\^\&\*\(\)\_\+\?\/\\\[\]\\{\}\|\"\'\.\,]/.test(lastname));

	//Setup the return variable - a string that contains the errors
	var returnVal = "";

	updateInputChecks(1, true);
	
	for (var i = 0; i < checks.length; i++) {
		if (!checks[i]) {
			returnVal = returnVal + ErrorTextStrings[i];
			updateInputChecks(1, false);
		}
	}

	return returnVal;


}




/*//Johns code
window.onload = function () { "use strict";
	// Set Defaults
	window.sessionStorage.setItem('emailexists', 'false');
	
	$('#register_form').form({
		on: 'blur',
		fields: {
			fname: {
				identifier: 'first name',
				rules: [{
					type: 'regExp[/^[A-Za-z -\']{2,32}$/]',
					prompt: 'Please enter a valid First Name'
				}, {
					type: 'empty',
					prompt: 'Please enter a value for First Name'
				}]
			},
			lname: {
				identifier: 'last name',
				rules: [{
					type: 'regExp[/^[A-Za-z -\']{2,32}$/]',
					prompt: 'Please enter a valid Last Name'
				}, {
					type: 'empty',
					prompt: 'Please enter a value for Last Name'
				}]
			}, //lname end
			email: {
				identifier: 'email',
				rules: [{
					type: 'email',
					prompt: 'Please enter a valid Email'
				}, {
					type: 'hasEmail',
					prompt: 'Email already exists'
				}, {
					type: 'empty',
					prompt: 'Please enter a value'
				}]
			}, // email end

			password: {
				identifier: 'password',
				rules: [{
						type: 'empty',
						prompt: 'Please enter a value for Password'
					}, {
						type: 'minLength[8]',
						prompt: 'Your password must be at least {ruleValue} characters'
					}, {
						type: 'regExp[/[A-Z]/]',
						prompt: 'Your password must contain one uppercase letter'
					}, {
						type: 'regExp[/[a-z]/]',
						prompt: 'Your password must contain one lowercase letter'
					}, {
						type: 'regExp[/[0-9]/]',
						prompt: 'Your password must be at least one number'
					}] //rules end
			}, //password end
		}
	});
	//login form validation
	$('#login_form').form({
		on: 'blur',
		fields: {
			email: {
				identifier: 'email',
				rules: [{
					type: 'email',
					prompt: 'Please enter a valid Email'
				}, {
					type: 'empty',
					prompt: 'Please enter a value'
				}]
			},

			password: {
				identifier: 'psw',
				rules: [{
					type: 'empty',
					prompt: 'Please enter a value for Password'
				}]
			},
		}
	});

	// Custom Validation for the Check if Email exists  
	// Documentaion describes synchronous nature of this but .ajax is asynchronous! - Fix not yet obvious 
	$.fn.form.settings.rules.hasEmail = function (value, donno) {
		checkEmailExists();
		if (window.sessionStorage.getItem('emailexists') === 'true') {
			return false;
		} else {
			return true;
		}
	};
}; //onload end

//John's code for seeing if the email exists
function checkEmailExists() {
	"use strict";
	var checkurl = "registration_check_email.php?email=" + email.value;
	$.ajax({
		url: checkurl,
		method: 'get',
		datatype: 'json',
		success: function (res) {
			if (res.emailexists === true) {
				window.sessionStorage.setItem('emailexists', 'true');
			} else {
				window.sessionStorage.setItem('emailexists', 'false');
			}
		},
		error: function (err) {
			console.log(res);
		}
	});
}*/
