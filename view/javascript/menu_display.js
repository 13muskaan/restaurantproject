// Menu Displaying File for Javascript

//DatabaseCount to limit the page number and disable buttons based on when it's reached max
var databaseCount = -1;

function setDatabaseCount (i) {
	databaseCount = i;
}
	
$.ajax({
	url: "../../model/dbconnection.php?table=menu",
	method: 'get',
	datatype: 'json',
	success: function(res){
		setDatabaseCount(res.count);
	},
	error: function(a,b,c) {
	console.log("FAILED");
		console.log(a.status);
		console.log(b.toString());
		console.log(c.toString());
}
	
});

//Database limit variables
var page = 0;
var numToDisplay = 5; //If you want to change the amount you display, change this number

//Retrieve the page elements that will be interacted with
var menuHtml = document.getElementById("menuHtml");
var nextButton = document.getElementById("nextButton");
var backButton = document.getElementById("backButton");

function retrieveData() {
	$.ajax({
		url: "../../model/menu_retrieve.php?page=" + page + "&num=" + numToDisplay,
		method: 'get',
		datatype: 'json',
		success: function (res) {
			//This is where you change the element that contains the menu items.
			"use strict";
			
			menuHtml.innerHTML = res.html;
			

		}
	});
	
	if (page <= 0) {
		backButton.disabled = true;
	} else {
		backButton.disabled = false;
	}
	
	if (AtLimit()) {
		nextButton.disabled = true;
	} else {
		nextButton.disabled = false;
	}
		
}

function increasePage() {
	page++;
	
	console.log("Page = "+page);
	console.log("databaseCount = " + databaseCount);
	
	retrieveData();
	
	
}

function AtLimit() {
	return  page >= databaseCount / numToDisplay - 1;
}

function decreasePage() {
	page--;
	
	retrieveData();
	
	console.log("Page = "+page);
	console.log("databaseCount = " + databaseCount);
	
	
	
}

$(document).ready(function () {
	retrieveData();
	backButton.disabled = true;
});