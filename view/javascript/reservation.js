// JavaScript Document
/* reservation*/

//Loader div
var loader;

//FormDivs
var timeDiv;
var functionDiv;
var submitDiv;

var dateInput;
var timeInput;
var functionInput;
var guestNoInput;
var commentInput;


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
	
	var date = document.getElementById("dateSelect");
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
		error: function (a, b, c, d) {
			console.log("FAILED");
			console.log(a.status);
			console.log(b.toString());
			console.log(c.toString());
			console.log(d);
		}
	}); //End AJAX	
	
	sessionStorage.setItem("selectedDate", date.value);
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
	
	switch (sessionStorage.getItem("selectedTime")) 
			{
		case "0":
			timeInput.mor.checked = true;
			EnableFunction(0);
			break;
		case "1":
			timeInput.aft.checked = true;
			EnableFunction(1);
			break;
		case "2":
			timeInput.eve.checked = true;
			EnableFunction(2);
	}
	

}



function EnableFunction(timeSelection) {
	sessionStorage.setItem("selectedTime", timeSelection);
	functionDiv.style.display = "block";
	
	if (sessionStorage.getItem("selectedFunction") != null) {
		selectItemByValue(functionInput, sessionStorage.getItem("selectedFunction"));
		EnableSubmit();
	}
}

function EnableSubmit() {
	
	sessionStorage.setItem("selectedFunction", functionInput.value);
	submitDiv.style.display = "block";
	document.getElementById("submit").disabled = false;
	
	if (sessionStorage.getItem("guestNo") != null) {
		guestNoInput.value = sessionStorage.getItem("guestNo");
		document.getElementById("GuestNumber").innerHTML = sessionStorage.getItem("guestNo");
	}
	
	if (sessionStorage.getItem("comment") != null) {
		commentInput.value = sessionStorage.getItem("comment");
	}
}

function setGuestNo() {
	sessionStorage.setItem("guestNo", guestNoInput.value);
	
}

function setComment() {
	sessionStorage.setItem("comment", commentInput.value);
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
	document.getElementById("dateSelect").onchange = function () {CheckDate();};
	loader = document.getElementById("loader");
	
	loader.style.display = "none";
	
	timeDiv = document.getElementById("timeSelectDiv");
	functionDiv = document.getElementById("functionSelectDiv");
	submitDiv = document.getElementById("submitDiv");
	
	dateInput = document.getElementById("dateSelect");
	timeInput = {mor:null, aft:null, eve:null};
	timeInput.mor = document.getElementById("timeCheckboxMor");
	timeInput.aft = document.getElementById("timeCheckboxAft");
	timeInput.eve = document.getElementById("timeCheckboxEve");
	functionInput = document.getElementById("functionID");
	guestNoInput = document.getElementById("GuestSlider");
	commentInput = document.getElementById("comment");
	
	if (sessionStorage.getItem("selectedDate") != null) {
		dateInput.value = sessionStorage.getItem("selectedDate");
		CheckDate();
	}
});






function selectItemByValue(elmnt, value){

    for(var i = 0; i < elmnt.options.length; i++)
    {
      if(elmnt.options[i].value == value)
        elmnt.selectedIndex = i;
    }
  }
