// Document is ready
$(document).ready(function () {

// Validate Stocktype
	$('#stocktypecheck').hide();	
	let stocktypeError = true;
	$('#stocktype').keyup(function () {	
	validatestocktype();
	});
	
	function validatestocktype() {
	let stocktypeValue = $('#stocktype').val();	
	if (stocktypeValue.length == '') {
	$('#stocktypecheck').show();
	stocktypeError = false;
		return false;
	}
	else {
		$('#stocktypecheck').hide();
		stocktypeError = true;	
	}
	}

// Validate Stockname
	$('#itemnamecheck').hide();	
	let itemnameError = true;
	$('#itemname').keyup(function () {	
	validateitemname();
	});
	
	function validateitemname() {
	let itemnameValue = $('#itemname').val();	
	if (itemnameValue.length == '') {
	$('#itemnamecheck').show();
	itemnameError = false;
		return false;
	}
	else {
		$('#itemnamecheck').hide();
		itemnameError = true;	
	}
	}

// Validate HSN Name
	$('#hsncodecheck').hide();	
	let hsncodeError = true;
	$('#hsncode').keyup(function () {	
	validatehsncode();
	});
	
	function validatehsncode() {
	let hsncodeValue = $('#hsncode').val();	
	if (hsncodeValue.length == '') {
	$('#hsncodecheck').show();
	hsncodeError = false;
		return false;
	}
	else {
		$('#hsncodecheck').hide();
		hsncodeError = true;	
	}
	}

// Validate GST Rate
	$('#gstratecheck').hide();	
	let gstrateError = true;
	$('#gstrate').keyup(function () {	
	validategstrate();
	});
	
	function validategstrate() {
	let gstrateValue = $('#gstrate').val();	
	if (gstrateValue.length == '') {
	$('#gstratecheck').show();
	gstrateError = false;
		return false;
	}
	else {
		$('#gstratecheck').hide(); 
		gstrateError = true;	
	}
	}

// Validate No of Gm/ Pcs
	$('#noofgmpcscheck').hide();	
	let noofgmpcsError = true;
	$('#noofgmpcs').keyup(function () {	
	validatenoofgmpcs();
	});
	
	function validatenoofgmpcs() {
	let noofgmpcsValue = $('#noofgmpcs').val();	
	if (noofgmpcsValue.length == '') {
	$('#noofgmpcscheck').show();
	noofgmpcsError = false;
		return false;
	}
	else {
		$('#noofgmpcscheck').hide(); 
		noofgmpcsError = true;	
	}
	}

	
	$('#addunit').click(function () {	
		document.getElementById("unitform").style.display = "block";
	});

//Submit Button Onclick
	$('#submitbtn').click(function () {	
	
		validatestocktype();
		validateitemname();
		validatehsncode();
		validategstrate();
		validatenoofgmpcs();

		if (stocktypeError == true && itemnameError == true && hsncodeError == true && gstrateError == true && noofgmpcsError == true)
		  {
			return true;
		  } 
		  else 
		  {
			return false;
		  }
	});

	
});
