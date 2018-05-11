// JavaScript Document
/* reservation*/

//Loader div
var loader;

//FormDivs
var timeDiv;
var functionDiv;
var submitDiv;


// Slider Code
var slider = document.getElementById("GuestSlider");
var output = document.getElementById("GuestNumber");
output.innerHTML = slider.value;

slider.oninput = function () {
	output.innerHTML = this.value;
}

//Date picker
$('input[name="date"]').datepicker({
	format: "yyyy-mm-dd",
	startDate: "+0D",
	autoclose: true,
});

function CheckDate() {
	//Disable times if enabled
	DisableTime();
	
	var date = document.getElementById("date");
	var ajaxurl = "../../model/reservation-date_check.php?date=" + date.value;

	//Display loader
	document.getElementById("selectTimeMessage").style.display = "none";
	loader.style.display = "block";
	
	$.ajax({
		url: ajaxurl,
		method: 'get',
		datatype: 'json',
		success: function (res) {
			EnableTimes(res);
		},
		error: function (a, b, c) {
			console.log("FAILED");
			console.log(a.status);
			console.log(b.toString());
			console.log(c.toString());
		}
	}); //End AJAX	
}

function EnableTimes(results) {
	"use strict";
	
	timeDiv.style.display = "block";
	
	console.log("RESULTS RETRIEVED");
	
	//Hide Loader
	loader.style.display = "none";
	
	for (var i = 0; i < results.length; i++) {
		console.log(results[i]);
		console.log(results[i]['time']);
		console.log(results[i]['time'].substring(0, 2));
		console.log(results[i]['time'].substring(0, 2) == "09")
	}

	var Morning = document.getElementById("timeCheckboxMor");
	var Afternoon = document.getElementById("timeCheckboxAft");
	var Evening = document.getElementById("timeCheckboxEve");

	Morning.disabled = false;
	Afternoon.disabled = false;
	Evening.disabled = false;

	for (i = 0; i < results.length; i++) {
		var time = results[i].time.substring(0, 2);

		if (time == "09") {
			Morning.disabled = true;
		}
		if (time == "12") {
			Afternoon.disabled = true;
		}
		if (time == "17") {
			Evening.disabled = true;
		}

	}

}



function EnableFunction() {
	console.log("FISH");
	functionDiv.style.display = "block";
}

function EnableSubmit() {
	submitDiv.style.display = "block";
	document.getElementById("submit").disabled = false;
}

function DisableTime(){
	timeDiv.style.display = "none";
	DisableFunction();
}

function DisableFunction() {
	functionDiv.style.display = "none";
	DisableSubmit();
}

function DisableSubmit() {
	submitDiv.style.display = "none";
	document.getElementById("submit").disabled = true;
}

$(document).ready( function() {
	document.getElementById("date").onchange = function () {CheckDate();};
	loader = document.getElementById("loader");
	
	loader.style.display = "none";
	
	timeDiv = document.getElementById("timeSelectDiv");
	functionDiv = document.getElementById("functionSelectDiv");
	submitDiv = document.getElementById("submitDiv");
});
