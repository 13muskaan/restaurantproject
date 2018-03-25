
jQuery(document).ready(function(){
	//datepicker code
	$("input#selectDate_id").value("");
	$("input#selectDate_id").datepicker({
		dateFormat:"dd/mm/yy", // this is the dateformat for visible date
		altField: $("input#selectValueDate_Id"),
});