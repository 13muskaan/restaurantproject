// Javascript for validating emails.
//register form validation

//order is - firstname - lastname - email - password - currentPassword
var firstNameIndex = 0;
var lastNameIndex = 1;
var emailIndex = 2;
var passwordIndex = 3;
var currentPasswordIndex = 4;

var possibleInputIDs = ["firstNameInput", "lastNameInput", "emailInput", "passwordInput", "currentPasswordInput"];
var possibleAlertIDs = ["firstNameAlert", "lastNameAlert", "emailAlert", "passwordAlert", "currentPasswordAlert"];
var possibleGlyphIDs = ["firstNameGlyph", "lastNameGlyph", "emailGlyph", "passwordGlyph", "currentPasswordGlyph"];
var inputs = [null, null, null, null, null]; //array of element
var alerts = [null, null, null, null, null]; //array of element
var glyphs = [null, null, null, null, null]; //array of element

var emailLoader; //element
var passwordLoader; //element

var glyphIcons = ["glyphicon glyphicon-minus", "glyphicon glyphicon-ok", "glyphicon glyphicon-remove"]; //array of string
var glyphColors = ["#555", "#00aa00", "#aa0000"];

var inputBackgroundColors = ["#ffffff", "#ccffcc", "#ffcccc"];
var inputBorderColors = ["#000", "#55aa55", "#cc5555"];

var submitButtonColors = ["#999999", "#ff0000", "#999999"];

var empty = 0;
var valid = 1;
var error = 2;

var imageInput;
var imageAlert;
var imageSubmit;

function updateInputGlyphs(element, setting) { //Element is a number which refers to the input element, setting is the type of glyph to set
	"use strict";

	glyphs[element].className = glyphIcons[setting];
	glyphs[element].style.color = glyphColors[setting];

	inputs[element].style.backgroundColor = inputBackgroundColors[setting];
	inputs[element].style.borderColor = inputBorderColors[setting];

	updateSubmitButton();
}

function updateSubmitButton() {
	"use strict";
	var submitButton = document.getElementById("submitButton");

	submitButton.disabled = false;
	submitButton.style.backgroundColor = submitButtonColors[valid];

	var i;

	if (CheckPasswordOptional()) {
		for (i = 0; i < glyphs.length; i++) { //Passwords are only optional when updating user info
			if (glyphs[i] != null && 
				(glyphs[i].className == glyphIcons[error] || (glyphs[i].id != "passwordGlyph" && inputs[i].value == "") ||
				 (glyphs[i].id == "currentPasswordGlyph" && glyphs[i].className != glyphIcons[valid]))) { //Only need to see if any glyph has an error


				submitButton.style.backgroundColor = submitButtonColors[(glyphs[i].className == glyphIcons[error]) ? error : empty];

				submitButton.disabled = true;
				return;
			}
		}
	} else {
		for (i = 0; i < glyphs.length; i++) {
			if (glyphs[i] != null && glyphs[i].className != glyphIcons[valid]) {

				submitButton.style.backgroundColor = submitButtonColors[(glyphs[i].className == glyphIcons[error]) ? error : empty];

				submitButton.disabled = true;
				return;
			}
		}
	}
}

function CheckPasswordOptional() {
	for (var i = 0; i < inputs.length; i++) {
		if (inputs[i] != null && inputs[i].id == "currentPasswordInput") {
			return true;
		}
	}

	return false;
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

	var password = inputs[passwordIndex].value;

	if (password == "") {
		updateInputGlyphs(passwordIndex, empty);
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

	updateInputGlyphs(passwordIndex, valid);

	for (var i = 0; i < checks.length; i++) {
		if (!checks[i]) {
			returnVal = returnVal + ErrorTextStrings[i];

			updateInputGlyphs(passwordIndex, error);
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
function validateEmailWhenInEdit() {


}

function validateEmail() {
	"use strict";

	var ErrorTextString = "Email is not formatted correctly.";

	var email = inputs[emailIndex].value;

	if (email == "" || email == inputs[emailIndex].placeholder) {
		updateInputGlyphs(emailIndex, empty);
		return "";
	}

	//If email is formatted correctly, check email exists
	if (/.*@.*\..{2,4}/.test(email)) {
		checkEmailAlreadyExists(email);
		return "";
	} else {
		updateInputGlyphs(emailIndex, error);
		return ErrorTextString;
	}
}



function checkEmailAlreadyExists(email) {
	"use strict";

	//Display Loader
	emailLoader.style.display = "block";



	var checkurl = "../../control/register_check_email_exists.php?email=" + email;
	$.ajax({
		url: checkurl,
		method: 'get',
		datatype: 'json',
		success: function (res) {

			displayEmailExists(res.emailexists);
		}
	});
}

function displayEmailExists(emailExists) {
	"use strict";

	//Hide Loader
	emailLoader.style.display = "none";
	glyphs[2].style.display = "block";

	var errorDiv = document.getElementById("emailAlert");
	if (emailExists) {
		//Display the Red X glyph
		updateInputGlyphs(emailIndex, error);

		errorDiv.style.display = 'block';
		errorDiv.innerHTML = "<strong>ERROR:</strong> Email already exists.";
	} else {
		//Display the green tick glyph

		updateInputGlyphs(emailIndex, valid);
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

	var firstname = inputs[firstNameIndex].value;

	if (firstname == "") {
		updateInputGlyphs(firstNameIndex, empty);
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

	updateInputGlyphs(firstNameIndex, valid);

	for (var i = 0; i < checks.length; i++) {
		if (!checks[i]) {
			returnVal = returnVal + ErrorTextStrings[i];
			updateInputGlyphs(firstNameIndex, error);
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

	var lastname = inputs[lastNameIndex].value;

	if (lastname == "") {
		updateInputGlyphs(lastNameIndex, empty);
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

	updateInputGlyphs(lastNameIndex, valid);

	for (var i = 0; i < checks.length; i++) {
		if (!checks[i]) {
			returnVal = returnVal + ErrorTextStrings[i];
			updateInputGlyphs(lastNameIndex, error);
		}
	}

	return returnVal;


}


function displayImageError() {
	"use strict";
	var imgVal = validatePassword();
	var errorDiv = document.getElementById("imageAlert");

	if (imgVal === "") {
		errorDiv.style.display = 'none';

		return;

	} else {
		//Make bootstap display the error div, with the value of passVal inside it.
		//Use -PasswordErrorDiv-.display.style = "block";
		errorDiv.style.display = 'block';
		//Use -PasswordErrorDiv-.innerHTML = passVal;
		errorDiv.innerHTML = "<p><strong>ERROR:</strong> Chosen Image is invalid, because:</p>" + imgVal;
	}
}

//Image validator
function validateImage() {
	"use strict";
	var ErrorTextStrings = [
		"<p>- Must be an accepted file type:</p><ul><li>png</li><li>jpg</li><li>jpeg</li><li>gif</li></ul>",
		"<p>- Must be under 100kb</p>"
	];

	var image = document.getElementById('fileToUpload').files[0];

	if (!image) {
		updateInputGlyphs(currentPasswordIndex, valid);
		return "";
	}

	var checks = [
		false, // Accepted File Type
		false // Under File Size
	];

	checks[0] = (
		image.type == 'jpg' ||
		image.type == "png" ||
		image.type == "jpeg" ||
		image.type == "gif");

	checks[1] = image.size <= 100 * 1024;

	//Setup the return variable - a string that contains the errors
	var returnVal = "";

	for (var i = 0; i < checks.length; i++) {
		if (!checks[i]) {
			returnVal = returnVal + ErrorTextStrings[i];
		}
	}

	return returnVal;
}

//Current Password (updateuserinfo)
function validateCurrentPassword(userID) {
	"use strict";
	updateInputGlyphs(currentPasswordIndex, empty);

	var passwordInput = document.getElementById('currentPasswordInput').value;

	if (passwordInput == "") {
		return;
	}
	checkPasswordMatches(userID, passwordInput);
}



function checkPasswordMatches(userID, pass) {
	"use strict";

	//Display Loader
	passwordLoader.style.display = "block";
	glyphs[4].style.display = "none";

	var checkurl = "../../control/check_password_matches.php?userID= " + userID + "&password=" + pass;

	$.ajax({
		url: checkurl,
		method: 'get',
		datatype: 'json',
		success: function (res) {
			displayPasswordMatches(res.passwordMatches);
		}
	});
}

function displayPasswordMatches(passwordMatches) {
	"use strict";

	//Hide Loader
	passwordLoader.style.display = "none";
	glyphs[4].style.display = "block";

	var errorDiv = document.getElementById("currentPasswordAlert");
	if (!passwordMatches) {
		//Display the Red X glyph
		updateInputGlyphs(currentPasswordIndex, error);

		errorDiv.style.display = 'block';
		errorDiv.innerHTML = "<strong>ERROR:</strong> Password doesn't match.";
	} else {
		//Display the green tick glyph

		updateInputGlyphs(currentPasswordIndex, valid);
		errorDiv.style.display = 'none';
	}
}


$(document).ready(function () {

	for (var i = 0; i < possibleInputIDs.length; i++) {
		inputs[i] = document.getElementById(possibleInputIDs[i]);
		alerts[i] = document.getElementById(possibleAlertIDs[i]);
		glyphs[i] = document.getElementById(possibleGlyphIDs[i]);
	}


	emailLoader = document.getElementById("emailLoader");
	passwordLoader = document.getElementById("passwordLoader");
	
	imageInput = document.getElementById("imageInput");
	imageAlert = document.getElementById("imageAlert");
	imageSubmit = document.getElementById("imageSubmitButton");
	
	imageInput.onchange = displayImageError();

	updateSubmitButton();
});
