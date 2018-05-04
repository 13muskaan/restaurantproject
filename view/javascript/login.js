// JavaScript Document
var loader;
var form;

function SubmitButton () {
	HideElement(form);
	ShowElement(loader);
}

function HideElement (elem) {
	elem.style.display = "none";
}

function ShowElement (elem) {
	elem.style.display = "block";
}

$(document).ready(function() {
	loader = document.getElementById("loader");
	form = document.getElementById("form");
});