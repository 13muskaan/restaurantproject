// Register JavaScript Document

var form;
var loader;
var errorDiv;

function submitData(){
	"use strict";
	
	//var formData = form.serialize(); // NOT WORKING
	var formData = serialize(form);
	
	//Display loader
	loader.style.display = "block";
	
	//Hide the form
	form.style.display = "none";
	
	var ajaxRequest = $.ajax({
		url: "../../control/register_process.php",
		type: 'post',
		data: formData
	}); //End AJAX
	
	// Callback handler that will be called on success
    ajaxRequest.done(function (response, textStatus, jqXHR){
        // Log a message to the console
        console.log(response + textStatus);
		
		//Go to index.php
		window.location.href = "index.php";
    });

    // Callback handler that will be called on failure
    ajaxRequest.fail(function (jqXHR, textStatus, errorThrown){
        // Log the error to the console
        console.error(
            "The following error occurred: "+
            textStatus, errorThrown
        );
		
		//Hide loader
		loader.style.display = "none";
		//Show form
		form.style.display = "block";
		//Display error message
		errorDiv.style.display = "block";
		errorDiv.innerHTML = "<strong>ERROR:</strong> " + textStatus + errorThrown;
    });
	
}




function serialize(form) {
	var serialized = "";
	
	serialized += "firstname=" + form.firstname.value + "&";
	serialized += "lastname=" + form.lastname.value + "&";
	serialized += "email=" + form.email.value + "&";
	serialized += "password=" + form.password.value;
	
	return serialized;
}

$(document).ready (function () {
	form = document.getElementById("register_form");
	loader = document.getElementById("loader");
	errorDiv = document.getElementById("errorDiv");
});