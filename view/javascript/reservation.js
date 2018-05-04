// JavaScript Document
/* reservation*/

//Loader div
var loader;


// Slider Code
var slider = document.getElementById("GuestSlider");
var output = document.getElementById("GuestNumber");
output.innerHTML = slider.value;

slider.oninput = function () {
	output.innerHTML = this.value;
}

//Date picker
/*$(document).ready(function () {
	var date_input = $('input[name="date"]'); //our date input has the name "date"
	var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
	date_input.datepicker({
		format: 'YYYY-MM-DD',
		container: container,
		todayHighlight: true,
		autoclose: true,
		startDate: "+0D"
	})
})*/

$('input[name="date"]').datepicker({
	format: "yyyy-mm-dd",
	startDate: "+0D",
	autoclose: true,
});

function CheckDate() {
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
	
	
	document.getElementById("timeSelectDiv").style.display = "block";
	
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

function EnableSubmit() {
	document.getElementById("submit").disabled = false;
}

$(document).ready( function() {
	document.getElementById("date").onchange = function () {CheckDate();};
	loader = document.getElementById("loader");
	
	loader.style.display = "none";
});
