$(document).ready(function () {
    $('#employeecode_valid').hide();	
    let employeecodeerror = true;
    $('#employeecode').keyup(function () {			
        employeecode();
    });
    
    function employeecode() {
        let employeecodeValue = $('#employeecode').val();
        if (employeecodeValue == '') {
        $('#employeecode_valid').show();
        employeecodeerror = false;
            return false;
        }	
        else {
            $('#employeecode_valid').hide();
            employeecodeerror = true;	
        }
        }

		// employeename
		$('#employeename_valid').hide();	
		let employeenameerror = true;
		$('#employeename').keyup(function () {			
			employeename();
		});
		function employeename() {
			let employeenameValue = $('#employeename').val();
			if (employeenameValue == '') {
			$('#employeename_valid').show();
			employeenameerror = false;
				return false;
			}	
			else {
				$('#employeename_valid').hide();
				employeenameerror = true;	
			}
			}


			// date of birth
	$('#dateofbirth_valid').hide();	
	let dateofbirtherror = true;
	$('#dateofbirth').keyup(function () {			
		dateofbirth();
	});
	function dateofbirth() {
		let dateofbirthValue = $('#dateofbirth').val();
		if (dateofbirthValue == '') {
		$('#dateofbirth_valid').show();
		dateofbirtherror = false;
			return false;
		}	
		else {
			$('#dateofbirth_valid').hide();
			dateofbirtherror = true;	
		}
		}

		
	// gender
	$('#gender_valid').hide();	
	let gendererror = true;
	$('#gender').keyup(function () {			
		gender();
	});
	function gender() {
		let genderValue = $('#gender').val();
		if (genderValue == '') {
		$('#gender_valid').show();
		gendererror = false;
			return false;
		}	
		else {
			$('#gender_valid').hide();
			gendererror = true;	
		}
		}


	// Email id 
	$('#emailid_valid').hide();	
	let emailiderror = true;
	$('#emailid').keyup(function () {			
		emailid();
	});
	function emailid() {
		let emailidValue = $('#emailid').val();
		if (emailidValue == '') {
		$('#emailid_valid').show();
		emailiderror = false;
			return false;
		}	
		else {
			$('#emailid_valid').hide();
			emailiderror = true;	
		}
		}


// designation
$('#designation_valid').hide();	
let designationerror = true;
$('#designation').keyup(function () {			
	designation();
});
function designation() {
	let designationValue = $('#designation').val();
	if (designationValue == '') {
	$('#designation_valid').show();
	designationerror = false;
		return false;
	}	
	else {
		$('#designation_valid').hide();
		designationerror = true;	
	}
	}



		
// employeenumber
$('#employeenumber_valid').hide();	
let employeenumbererror = true;
$('#employeenumber').keyup(function () {			
	employeenumber();
});
function employeenumber() {
	let employeenumberValue = $('#employeenumber').val();
	if (employeenumberValue == '') {
	$('#employeenumber_valid').show();
	employeenumbererror = false;
		return false;
	}	
	else {
		$('#employeenumber_valid').hide();
		employeenumbererror = true;	
	}
	}


	// dateofjoining
$('#dateofjoining_valid').hide();	
let dateofjoiningerror = true;
$('#dateofjoining').keyup(function () {			
	dateofjoining();
});
function dateofjoining() {
	let dateofjoiningValue = $('#dateofjoining').val();
	if (dateofjoiningValue == '') {
	$('#dateofjoining_valid').show();
	dateofjoiningerror = false;
		return false;
	}	
	else {
		$('#dateofjoining_valid').hide();
		dateofjoiningerror = true;	
	}
	}



		// contact
$('#contact_valid').hide();	
let contacterror = true;
$('#contact').keyup(function () {			
	contact();
});
function contact() {
	let contactValue = $('#contact').val();
	if (contactValue == '') {
	$('#contact_valid').show();
	contacterror = false;
		return false;
	}	
	else {
		$('#contact_valid').hide();
		contacterror = true;	
	}
	}



	
// employeeimage
$('#employeeimage_valid').hide();	
let employeeimageerror = true;
$('#employeeimage').keyup(function () {			
	employeeimage();
});
function employeeimage() {
	let employeeimageValue = $('#employeeimage').val();
	if (employeeimageValue == '') {
	$('#employeeimage_valid').show();
	employeeimageerror = false;
		return false;
	}	
	else {
		$('#employeeimage_valid').hide();
		employeeimageerror = true;	
	}
	}


	
// expertise
$('#expertise_valid').hide();	
let expertiseerror = true;
$('#expertise').keyup(function () {			
	expertise();
});
function expertise() {
	let expertiseValue = $('#expertise').val();
	if (expertiseValue == '') {
	$('#expertise_valid').show();
	expertiseerror = false;
		return false;
	}	
	else {
		$('#expertise_valid').hide();
		expertiseerror = true;	
	}
	}

		


// starrating
$('#starrating_valid').hide();	
let starratingerror = true;
$('#starrating').keyup(function () {			
	starrating();
});
function starrating() {
	let starratingValue = $('#starrating').val();
	if (starratingValue == '') {
	$('#starrating_valid').show();
	starratingerror = false;
		return false;
	}	
	else {
		$('#starrating_valid').hide();
		starratingerror = true;	
	}
	}



	

// hra
$('#hra_valid').hide();	
let hraerror = true;
$('#hra').keyup(function () {			
	hra();
});
function hra() {
	let hraValue = $('#hra').val();
	if (hraValue == '') {
	$('#hra_valid').show();
	hraerror = false;
		return false;
	}	
	else {
		$('#hra_valid').hide();
		hraerror = true;	
	}
	}


	// conveyance
$('#conveyance_valid').hide();	
let conveyanceerror = true;
$('#conveyance').keyup(function () {			
	conveyance();
});
function conveyance() {
	let conveyanceValue = $('#conveyance').val();
	if (conveyanceValue == '') {
	$('#conveyance_valid').show();
	conveyanceerror = false;
		return false;
	}	
	else {
		$('#conveyance_valid').hide();
		conveyanceerror = true;	
	}
	}

	
	// allowance
$('#allowance_valid').hide();	
let allowanceerror = true;
$('#allowance').keyup(function () {			
	allowance();
});
function allowance() {
	let allowanceValue = $('#allowance').val();
	if (allowanceValue == '') {
	$('#allowance_valid').show();
	allowanceerror = false;
		return false;
	}	
	else {
		$('#allowance_valid').hide();
		allowanceerror = true;	
	}
	}



		// incentivepercent
$('#incentivepercent_valid').hide();	
let incentivepercenterror = true;
$('#incentivepercent').keyup(function () {			
	incentivepercent();
});
function incentivepercent() {
	let incentivepercentValue = $('#incentivepercent').val();
	if (incentivepercentValue == '') {
	$('#incentivepercent_valid').show();
	incentivepercenterror = false;
		return false;
	}	
	else {
		$('#incentivepercent_valid').hide();
		incentivepercenterror = true;	
	}
	}



	// grosspay
$('#grosspay_valid').hide();	
let grosspayerror = true;
$('#grosspay').keyup(function () {			
	grosspay();
});
function grosspay() {
	let grosspayValue = $('#grosspay').val();
	if (grosspayValue == '') {
	$('#grosspay_valid').show();
	grosspayerror = false;
		return false;
	}	
	else {
		$('#grosspay_valid').hide();
		grosspayerror = true;	
	}
	}



		// tds
$('#tds_valid').hide();	
let tdserror = true;
$('#tds').keyup(function () {			
	tds();
});
function tds() {
	let tdsValue = $('#tds').val();
	if (tdsValue == '') {
	$('#tds_valid').show();
	tdserror = false;
		return false;
	}	
	else {
		$('#tds_valid').hide();
		tdserror = true;	
	}
	}

			// pf
$('#pf_valid').hide();	
let pferror = true;
$('#pf').keyup(function () {			
	pf();
});
function pf() {
	let pfValue = $('#pf').val();
	if (pfValue == '') {
	$('#pf_valid').show();
	pferror = false;
		return false;
	}	
	else {
		$('#pf_valid').hide();
		pferror = true;	
	}
	}



	
			// esi
$('#esi_valid').hide();	
let esierror = true;
$('#esi').keyup(function () {			
	esi();
});
function esi() {
	let esiValue = $('#esi').val();
	if (esiValue == '') {
	$('#esi_valid').show();
	esierror = false;
		return false;
	}	
	else {
		$('#esi_valid').hide();
		esierror = true;	
	}
	}

			// loans
			$('#loans_valid').hide();	
			let loanserror = true;
			$('#loans').keyup(function () {			
				loans();
			});
			function loans() {
				let loansValue = $('#loans').val();
				if (loansValue == '') {
				$('#loans_valid').show();
				loanserror = false;
					return false;
				}	
				else {
					$('#loans_valid').hide();
					loanserror = true;	
				}
				}

		// salaryadvance
		$('#salaryadvance_valid').hide();	
		let salaryadvanceerror = true;
		$('#salaryadvance').keyup(function () {			
			salaryadvance();
		});
		function salaryadvance() {
			let salaryadvanceValue = $('#salaryadvance').val();
			if (salaryadvanceValue == '') {
			$('#salaryadvance_valid').show();
			salaryadvanceerror = false;
				return false;
			}	
			else {
				$('#salaryadvance_valid').hide();
				salaryadvanceerror = true;	
			}
			}


			
		// anyotherdeduction
		$('#anyotherdeduction_valid').hide();	
		let anyotherdeductionerror = true;
		$('#anyotherdeduction').keyup(function () {			
			anyotherdeduction();
		});
		function anyotherdeduction() {
			let anyotherdeductionValue = $('#anyotherdeduction').val();
			if (anyotherdeductionValue == '') {
			$('#anyotherdeduction_valid').show();
			anyotherdeductionerror = false;
				return false;
			}	
			else {
				$('#anyotherdeduction_valid').hide();
				anyotherdeductionerror = true;	
			}
			}

		// totaldeduction
		$('#totaldeduction_valid').hide();	
		let totaldeductionerror = true;
		$('#totaldeduction').keyup(function () {			
			totaldeduction();
		});
		function totaldeduction() {
			let totaldeductionValue = $('#totaldeduction').val();
			if (totaldeductionValue == '') {
			$('#totaldeduction_valid').show();
			totaldeductionerror = false;
				return false;
			}	
			else {
				$('#totaldeduction_valid').hide();
				totaldeductionerror = true;	
			}
			}
			// basic
		$('#basic_valid').hide();	
		let basicerror = true;
		$('#basic').keyup(function () {			
			basic();
		});
		function basic() {
			let basicValue = $('#basic').val();
			if (basicValue == '') {
			$('#basic_valid').show();
			basicerror = false;
				return false;
			}	
			else {
				$('#basic_valid').hide();
				basicerror = true;	
			}
			}




			
			$('#submit').click(function () {	
				employeecode();
				employeename();
				dateofbirth();
				gender();
				emailid();
				designation();
				employeenumber();
				dateofjoining();
				contact();
				employeeimage();
				expertise();
				starrating();
				hra();
				conveyance();
				allowance();
				incentivepercent();
				grosspay();
				tds();
				pf();
				esi();
				salaryadvance();
				loans();
				anyotherdeduction();totaldeduction();basic();
			if ( 
				employeecodeerror == true
				&& employeenameerror == true
				&& dateofbirtherror == true
				&& gendererror == true
				&& emailiderror == true
				&& designationerror == true
				&& employeenumbererror == true
				&& dateofjoiningerror == true
				&& contacterror == true
				&& employeeimageerror == true
				&& expertiseerror == true
				&& starratingerror == true
				&& hraerror == true
				&& conveyanceerror == true
				&& allowanceerror == true
				&& incentivepercenterror == true
				&& grosspayerror == true
				&& tdserror == true
				&& pferror == true
				&& esierror == true
				&& loanserror == true
				&& salaryadvanceerror == true
				&& anyotherdeductionerror == true
				&& totaldeductionerror == true
				&& basicerror == true


			 )
			  {
				return true;
			  } 
			  else 
			  {
				return false;
			  }
	
	});

	});