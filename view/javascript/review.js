// Star displaying codes

var spanHTML = ['<span class="', '" aria-hidden="true"></span>'];
var starglyph = "glyphicon glyphicon-star";

var averagestar = "";
var foodstar = " small red";
var servicestar = " small blue";
var locationstar = " small yellow";
var pricestar = " small green";
var cleanlinessstar = " small cyan";

var startypes = [averagestar, foodstar, servicestar, locationstar, pricestar, cleanlinessstar];

var starparts = [" empty", " quarter", " half", " threequarters", ""];

var totalstaraverage;
var totalstarfood;
var totalstarservice;
var totalstarlocation;
var totalstarprice;
var totalstarcleanliness;

var totalstarelems;

var totalscoreaverage;
var totalscorefood;
var totalscoreservice;
var totalscorelocation;
var totalscoreprice;
var totalscorecleanliness;

var totalscoreelems;

var totalscore = 5;

function showstarsinelem(starelem, startype, score) {
	var starstrings = "";
	
	for (var i = 0; i < totalscore; i++) {
		var nextstar = spanHTML[0] + starglyph + startypes[startype];
		
		if (score == 0) {
			nextstar += starparts[0];
		} else if (score < 1) {
			var int = Math.round(score * 100 / 25);
			nextstar += starparts[int];
			score = 0;
		} else {
			score -= 1;
		}
		
		starstrings += nextstar + spanHTML[1];
	}
	
	console.log(starelem.id);
	console.log(starstrings);
	
	starelem.innerHTML = starstrings;
}

window.onload = function() {
	totalstaraverage = document.getElementById('totalstaraverage');
	totalstarfood = document.getElementById('totalstarfood');
	totalstarservice = document.getElementById('totalstarservice');
	totalstarlocation = document.getElementById('totalstarlocation');
	totalstarprice = document.getElementById('totalstarprice');
	totalstarcleanliness = document.getElementById('totalstarcleanliness');
	
	totalstarelems = [totalstaraverage, totalstarfood, totalstarservice, totalstarlocation, totalstarprice, totalstarcleanliness];
	
	totalscoreaverage = document.getElementById('totalscoreaverage');
	totalscorefood = document.getElementById('totalscorefood');
	totalscoreservice = document.getElementById('totalscoreservice');
	totalscorelocation = document.getElementById('totalscorelocation');
	totalscoreprice = document.getElementById('totalscoreprice');
	totalscorecleanliness = document.getElementById('totalscorecleanliness');
	
	totalscoreelems = [totalscoreaverage, totalscorefood, totalscoreservice, totalscorelocation, totalscoreprice, totalscorecleanliness];
		
$.ajax({
	url: "../../model/review_retrieve.php",
	method: 'get',
	datatype: 'json',
	success: function(res){
		setuptotalstarscore(res);
	},
	error: function(a,b,c) {
	console.log("FAILED");
		console.log(a.status);
		console.log(b.toString());
		console.log(c.toString());
}
});
	
};

function setuptotalstarscore(scoreaverages) {
	for (var i = 0; i < totalstarelems.length; i++) {
		totalscoreelems[i].innerHTML = Math.round(scoreaverages[i] * 10) / 10;
		showstarsinelem(totalstarelems[i], i, scoreaverages[i]);
	}
}






// Review Displaying codes

//DatabaseCount to limit the page number and disable buttons based on when it's reached max
var databaseCount = -1;

function setDatabaseCount (i) {
	databaseCount = i;
}
	
$.ajax({
	url: "../../model/dbconnection.php?table=review",
	method: 'get',
	datatype: 'json',
	success: function(res){
		setDatabaseCount(res.count);
		EnableButtons();
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
var reviewDisplayHtml = document.getElementById("userReviews");
var nextButton = document.getElementById("nextButton");
var backButton = document.getElementById("backButton");

function retrieveData() {
	$.ajax({
		url: "../../model/review_retrieve.php?page=" + page + "&num=" + numToDisplay,
		method: 'get',
		datatype: 'json',
		success: function (res) {
			"use strict";
			
			DisplayReviews(res);
			
			EnableButtons();
		}
	});		
}

var userfoodstar;
var userservicestar;
var userlocationstar;
var userpricestar;
var usercleanlinessstar;
var useraveragestar;

function DisplayReviews(reviewArray) {
	
	reviewDisplayHtml.innerHTML = "";
	
	reviewArray.forEach(function (item) {
		
		reviewDisplayHtml.innerHTML += item;
		
		userfoodstar = document.getElementById('userfoodstar');
		userservicestar = document.getElementById('userservicestar');
		userlocationstar = document.getElementById('userlocationstar');
		userpricestar = document.getElementById('userpricestar');
		usercleanlinessstar = document.getElementById('usercleanlinessstar');
		useraveragestar = document.getElementById('useraveragestar');
		
		var userstars = [useraveragestar, userfoodstar, userservicestar, userlocationstar, userpricestar, usercleanlinessstar];
		
		for (var i = 0; i < userstars.length; i++) {
			showstarsinelem(userstars[i], i, userstars[i].innerHTML);
			userstars[i].id = null;
		}
		
	});
	
}

function EnableButtons() {
	if (page <= 0) {
		backButton.className = "page-item disabled";
	} else {
		backButton.className = "page-item";
	}
	
	if (AtLimit()) {
		nextButton.className = "page-item disabled";
	} else {
		nextButton.className = "page-item";
	}
}

function increasePage() {
	page++;
	
	retrieveData();
}

function AtLimit() {
	return  page >= databaseCount / numToDisplay - 1;
}

function decreasePage() {
	page--;
	
	retrieveData();
}

$(document).ready(function () {
	retrieveData();
	backButton.className = "page-item disabled";
});