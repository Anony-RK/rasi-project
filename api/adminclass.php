<?php

  class admin 
	{
			

   /* User Details Start */ 
   public function adduser($mysqli) 
   {
	   $date  = date('Y-m-d');
	   if (isset($_POST['fullname'])) {
		$fullname             = mysqli_real_escape_string($mysqli,$_POST['fullname']);		
	}
	   if (isset($_POST['role'])) {
	   $role             = mysqli_real_escape_string($mysqli,$_POST['role']);		
	   }	
	   if (isset($_POST['email'])) {
	   $email               = mysqli_real_escape_string($mysqli,$_POST['email']);		
	   }
	   if (isset($_POST['password'])) {
	   $password               = mysqli_real_escape_string($mysqli,$_POST['password']);		
	   }
	  
	   if(isset($_POST['status']) &&    $_POST['status'] == 'Yes')		
	   {
		   $status=0;
	   }
	   else
	   {
		   $status=1;
	   }
	   $qry = "INSERT INTO user(fullname,user_name,user_password,
	   status) 
	   VALUES ('".strip_tags($fullname)."' ,'".strip_tags($email)."','".strip_tags($password)."',
	   '".strip_tags($status)."');";		
   
	   $res =$mysqli->query($qry)or die("Error in Query".$mysqli->error);
	   $id = 0;
	   $id = $mysqli->insert_id;
   
	   return $id; 
   }
   public function deleteuser($mysqli,$id) 
   {
	   $date  = date('Y-m-d'); 
	   $qry = 'UPDATE  user  SET status="1"  WHERE user_id="'.mysqli_real_escape_string($mysqli,$id).'"'; 
	   $res =$mysqli->query($qry)or die("Error in delete query".$mysqli->error);	
   } 	

	   
   public function getuser($mysqli,$idupd) 
   {
	   $qry = "SELECT * FROM user WHERE user_id='".mysqli_real_escape_string($mysqli,$idupd)."'"; 
	   $res =$mysqli->query($qry)or die("Error in Get All Records".$mysqli->error);
	   $detailrecords = array();
	   if ($mysqli->affected_rows>0)
	   {
		   $row = $res->fetch_object();	
		   $detailrecords['user_id']                    = $row->user_id; 
		   $detailrecords['fullname']       	        = strip_tags($row->fullname);
		   $detailrecords['user_name']       	        = strip_tags($row->user_name);
		   $detailrecords['user_password']              = strip_tags($row->user_password);		  	
		   $detailrecords['status']                     = strip_tags($row->status);		
   
	   }
	   return $detailrecords;
   }
   public function updateuser($mysqli,$id) { 		
	$date  = date('Y-m-d');
	if (isset($_POST['fullname'])) {
		$fullname             = mysqli_real_escape_string($mysqli,$_POST['fullname']);		
	}
	if (isset($_POST['role'])) {
	$role             = mysqli_real_escape_string($mysqli,$_POST['role']);		
	}	
	if (isset($_POST['email'])) {
	$email               = mysqli_real_escape_string($mysqli,$_POST['email']);		
	}
	if (isset($_POST['password'])) {
	$password               = mysqli_real_escape_string($mysqli,$_POST['password']);		
	}	
	if(isset($_POST['status']) &&    $_POST['status'] == 'Yes')		
	{
		$status=0;
	}
	else
	{
		$status=1;
	}
   $updateQry = 'UPDATE  user  SET fullname="'.strip_tags($fullname).'" ,user_name="'.strip_tags($email).'" ,user_password="'.strip_tags($password).'" ,		 
   status="'.$status.'"			
			WHERE user_id="'.mysqli_real_escape_string($mysqli,$id).'"';  

   $res =$mysqli->query($updateQry)or die("Error in in update Query!.".$mysqli->error); 
			
			 
   }	

/* User Details End */ 


/* Branch Details Start */ 
public function addbranch($mysqli) 
{
	
	$date  = date('Y-m-d');
	if (isset($_POST['branchname'])) {
	 $branchname             = mysqli_real_escape_string($mysqli,$_POST['branchname']);		
   }
	if (isset($_POST['address'])) {
	$address             = mysqli_real_escape_string($mysqli,$_POST['address']);		
	}	
	if (isset($_POST['Address1'])) {
	$Address1               = mysqli_real_escape_string($mysqli,$_POST['Address1']);		
	}
	if (isset($_POST['Address2'])) {
	$Address2               = mysqli_real_escape_string($mysqli,$_POST['Address2']);		
	}
   
	if (isset($_POST['pincode'])) {
	$pincode               = mysqli_real_escape_string($mysqli,$_POST['pincode']);		
	}

	if (isset($_POST['state'])) {
	$state               = mysqli_real_escape_string($mysqli,$_POST['state']);		
	}
	if (isset($_POST['country'])) {
	$country               = mysqli_real_escape_string($mysqli,$_POST['country']);		
	}
	if (isset($_POST['phonenumber'])) {
		$phonenumber               = mysqli_real_escape_string($mysqli,$_POST['phonenumber']);		
	}
	if (isset($_POST['email'])) {
		$email               = mysqli_real_escape_string($mysqli,$_POST['email']);		
	}
	if (isset($_POST['faxnumber'])) {
		$faxnumber               = mysqli_real_escape_string($mysqli,$_POST['faxnumber']);		
	}
	if (isset($_POST['tanno'])) {
		$tanno               = mysqli_real_escape_string($mysqli,$_POST['tanno']);		
	}
	if (isset($_POST['gst'])) {
		$gst               = mysqli_real_escape_string($mysqli,$_POST['gst']);		
	}
	if (isset($_POST['pfno'])) {
		$pfno               = mysqli_real_escape_string($mysqli,$_POST['pfno']);		
	}
	if (isset($_POST['esicno'])) {
		$esicno               = mysqli_real_escape_string($mysqli,$_POST['esicno']);		
	}
	if (isset($_POST['loginshortername'])) {
		$loginshortername               = mysqli_real_escape_string($mysqli,$_POST['loginshortername']);		
	}
	if(isset($_POST['status']) &&    $_POST['status'] == 'Yes')		
	{
		$status=0;
	}
	else
	{
		$status=1;
	}
	$qry = "INSERT INTO branch(branchname,address,address1,address2,pincode,
	state,country,phonenumber,email,faxnumber,tanno,gst,pfno,esicno,loginshortername,
	status) 
	VALUES ('".strip_tags($branchname)."' ,'".strip_tags($address)."','".strip_tags($Address1)."',
	'".strip_tags($Address2)."' ,'".strip_tags($pincode)."','".strip_tags($state)."',
	'".strip_tags($country)."' ,'".strip_tags($phonenumber)."','".strip_tags($email)."',
	'".strip_tags($faxnumber)."' ,'".strip_tags($tanno)."','".strip_tags($gst)."',
	'".strip_tags($pfno)."' ,'".strip_tags($esicno)."','".strip_tags($loginshortername)."',
	'".strip_tags($status)."');";		

	$res =$mysqli->query($qry)or die("Error in Query".$mysqli->error);
	$id = 0;
	$id = $mysqli->insert_id;

	return $id; 
}
public function deletebranch($mysqli,$id) 
{
	$date  = date('Y-m-d'); 
	$qry = 'UPDATE  branch  SET status="1"  WHERE branchid="'.mysqli_real_escape_string($mysqli,$id).'"'; 
	$res =$mysqli->query($qry)or die("Error in delete query".$mysqli->error);	
} 	

	
public function getbranch($mysqli,$idupd) 
{
	$qry = "SELECT * FROM branch WHERE branchid='".mysqli_real_escape_string($mysqli,$idupd)."'"; 
	$res =$mysqli->query($qry)or die("Error in Get All Records".$mysqli->error);
	$detailrecords = array();
	if ($mysqli->affected_rows>0)
	{
		$row = $res->fetch_object();	

		$detailrecords['branchid']                  = $row->branchid; 
		$detailrecords['branchname']       	        = strip_tags($row->branchname);
		$detailrecords['address']       	        = strip_tags($row->address);
		$detailrecords['address1']                  = strip_tags($row->address1);	
		$detailrecords['address2']                  = strip_tags($row->address2);	
		$detailrecords['pincode']                   = $row->pincode; 
		$detailrecords['state']       	            = strip_tags($row->state);
		$detailrecords['country']       	        = strip_tags($row->country);
		$detailrecords['phonenumber']               = strip_tags($row->phonenumber);

		$detailrecords['email']                     = $row->email; 
		$detailrecords['faxnumber']       	        = strip_tags($row->faxnumber);
		$detailrecords['tanno']       	            = strip_tags($row->tanno);
		$detailrecords['gst']                       = strip_tags($row->gst);

		$detailrecords['pfno']       	            = strip_tags($row->pfno);
		$detailrecords['esicno']       	            = strip_tags($row->esicno);
		$detailrecords['loginshortername']        = strip_tags($row->loginshortername);

		$detailrecords['status']                    = strip_tags($row->status);		

	}
	return $detailrecords;
}
public function updatebranch($mysqli,$id) { 		
	
	 $date  = date('Y-m-d');
	 if (isset($_POST['branchname'])) {
	  $branchname             = mysqli_real_escape_string($mysqli,$_POST['branchname']);		
	}
	 if (isset($_POST['address'])) {
	 $address             = mysqli_real_escape_string($mysqli,$_POST['address']);		
	 }	
	 if (isset($_POST['Address1'])) {
	 $Address1               = mysqli_real_escape_string($mysqli,$_POST['Address1']);		
	 }
	 if (isset($_POST['Address2'])) {
	 $Address2               = mysqli_real_escape_string($mysqli,$_POST['Address2']);		
	 }
	
	 if (isset($_POST['pincode'])) {
	 $pincode               = mysqli_real_escape_string($mysqli,$_POST['pincode']);		
	 }
 
	 if (isset($_POST['state'])) {
	 $state               = mysqli_real_escape_string($mysqli,$_POST['state']);		
	 }
	 if (isset($_POST['country'])) {
	 $country               = mysqli_real_escape_string($mysqli,$_POST['country']);		
	 }
	 if (isset($_POST['phonenumber'])) {
		 $phonenumber               = mysqli_real_escape_string($mysqli,$_POST['phonenumber']);		
	 }
	 if (isset($_POST['email'])) {
		 $email               = mysqli_real_escape_string($mysqli,$_POST['email']);		
	 }
	 if (isset($_POST['faxnumber'])) {
		 $faxnumber               = mysqli_real_escape_string($mysqli,$_POST['faxnumber']);		
	 }
	 if (isset($_POST['tanno'])) {
		 $tanno               = mysqli_real_escape_string($mysqli,$_POST['tanno']);		
	 }
	 if (isset($_POST['gst'])) {
		 $gst               = mysqli_real_escape_string($mysqli,$_POST['gst']);		
	 }
	 if (isset($_POST['pfno'])) {
		 $pfno               = mysqli_real_escape_string($mysqli,$_POST['pfno']);		
	 }
	 if (isset($_POST['esicno'])) {
		 $esicno               = mysqli_real_escape_string($mysqli,$_POST['esicno']);		
	 }
	 if (isset($_POST['loginshortername'])) {
		 $loginshortername               = mysqli_real_escape_string($mysqli,$_POST['loginshortername']);		
	 }
	 if(isset($_POST['status']) &&    $_POST['status'] == 'Yes')		
	 {
		 $status=0;
	 }
	 else
	 {
		 $status=1;
	 }

	$updateQry = 'UPDATE  branch  SET branchname="'.strip_tags($branchname).'" ,
	address="'.strip_tags($address).'" ,address1="'.strip_tags($Address1).'" ,		
	address2="'.strip_tags($Address2).'" ,	pincode="'.strip_tags($pincode).'" ,	
	state="'.strip_tags($state).'" ,country="'.strip_tags($country).'" ,	
	phonenumber="'.strip_tags($phonenumber).'" ,email="'.strip_tags($email).'" ,
	faxnumber="'.strip_tags($faxnumber).'" ,tanno="'.strip_tags($tanno).'" ,
	gst="'.strip_tags($gst).'" ,pfno="'.strip_tags($pfno).'" ,
	esicno="'.strip_tags($esicno).'" ,loginshortername="'.strip_tags($loginshortername).'" ,	 
	status="'.$status.'" WHERE branchid="'.mysqli_real_escape_string($mysqli,$id).'"';  

$res =$mysqli->query($updateQry)or die("Error in in update Query!.".$mysqli->error); 
		 
		  
}	

/* Branch Details End */ 

	


	/*Add Employee Master*/

	
public function addemployeemaster() {

	


	if(isset($_POST['employeecode']))		
		{
		$employeecode = $_POST['employeecode'];
		}
	if(isset($_POST['employeename']))		
		{
		$employeename = $_POST['employeename'];
		}
	if(isset($_POST['dateofbirth']))		
	{
		$dateofbirth = $_POST['dateofbirth'];
	}
	if(isset($_POST['gender']))		
		{
		$gender = $_POST['gender'];
		}
		if(isset($_POST['emailid']))		
		{
		$emailid = $_POST['emailid'];
		}
		if(isset($_POST['designation']))		
		{
		$designation = $_POST['designation'];
		}
		if(isset($_POST['employeenumber']))		
		{
		$employeenumber = $_POST['employeenumber'];
		}
		if(isset($_POST['dateofjoining']))		
		{
		$dateofjoining = $_POST['dateofjoining'];
		}
		
	if(isset($_POST['contact']))		
	{
	$contact = $_POST['contact'];
	}
	if(isset($_POST['employeeimage']))		
	{
	$employeeimage = $_POST['employeeimage'];
	}
	if(isset($_POST['expertise']))		
	{
	$expertise = $_POST['expertise'];
	}
	if(isset($_POST['starrating']))		
	{
	$starrating = $_POST['starrating'];
	}
	if(isset($_POST['basic']))		
	{
	$basic = $_POST['basic'];
	}
	if(isset($_POST['hra']))		
	{
	$hra = $_POST['hra'];
	}
	if(isset($_POST['conveyance']))		
	{
	$conveyance = $_POST['conveyance'];
	}
	if(isset($_POST['allowance']))		
	{
	$allowance = $_POST['allowance'];
	}
	
	if(isset($_POST['incentivepercent']))		
		{
		$incentivepercent = $_POST['incentivepercent'];
		}
	if(isset($_POST['grosspay']))		
		{
		$grosspay = $_POST['grosspay'];
		}
	if(isset($_POST['tds']))		
	{
		$tds = $_POST['tds'];
	}
	if(isset($_POST['pf']))		
		{
		$pf = $_POST['pf'];
		}
		if(isset($_POST['esi']))		
		{
		$esi = $_POST['esi'];
		}
		if(isset($_POST['loans']))		
		{
		$loans = $_POST['loans'];
		}
		if(isset($_POST['salaryadvance']))		
		{
		$salaryadvance = $_POST['salaryadvance'];
		}
		if(isset($_POST['totaldeduction']))		
		{
		$totaldeduction = $_POST['totaldeduction'];
		}
		
	if(isset($_POST['anyotherdeduction']))		
	{
	$anyotherdeduction = $_POST['anyotherdeduction'];
	}
	if(isset($_POST['institutetype1']))		
	{
	$institutetype1 = $_POST['institutetype1'];
	}
	if(isset($_POST['name1']))		
	{
	$name1 = $_POST['name1'];
	}
	if(isset($_POST['positionheld1']))		
	{
	$positionheld1 = $_POST['positionheld1'];
	}
	if(isset($_POST['place1']))		
	{
	$place1 = $_POST['place1'];
	}
	if(isset($_POST['fromperiod1']))		
	{
	$fromperiod1 = $_POST['fromperiod1'];
	}
	if(isset($_POST['toperiod1']))		
	{
	$toperiod1 = $_POST['toperiod1'];
	}
	if(isset($_POST['date1']))		
	{
	$date1 = $_POST['date1'];
	}
	
	
	if(isset($_POST['institutetype2']))		
	{
	$institutetype2 = $_POST['institutetype2'];
	}
	if(isset($_POST['name2']))		
	{
	$name12= $_POST['name2'];
	}
	if(isset($_POST['positionheld2']))		
	{
	$positionheld2 = $_POST['positionheld2'];
	}
	if(isset($_POST['place2']))		
	{
	$place2 = $_POST['place2'];
	}
	if(isset($_POST['fromperiod2']))		
	{
	$fromperiod2 = $_POST['fromperiod2'];
	}
	if(isset($_POST['toperiod2']))		
	{
	$toperiod2 = $_POST['toperiod2'];
	}
	if(isset($_POST['date2']))		
	{
	$date2 = $_POST['date2'];
	}
	
	
	
	if(isset($_POST['institutetype3']))		
	{
	$institutetype3 = $_POST['institutetype3'];
	}
	if(isset($_POST['name3']))		
	{
	$name3 = $_POST['name3'];
	}
	if(isset($_POST['positionheld3']))		
	{
	$positionheld3 = $_POST['positionheld3'];
	}
	if(isset($_POST['place3']))		
	{
	$place3 = $_POST['place3'];
	}
	if(isset($_POST['fromperiod3']))		
	{
	$fromperiod3 = $_POST['fromperiod3'];
	}
	if(isset($_POST['toperiod3']))		
	{
	$toperiod3 = $_POST['toperiod3'];
	}
	if(isset($_POST['date3']))		
	{
	$date3 = $_POST['date3'];
	}
		
	
	
	
	
	if(isset($_POST['institutetype4']))		
	{
	$institutetype4 = $_POST['institutetype4'];
	}
	if(isset($_POST['name4']))		
	{
	$name4 = $_POST['name4'];
	}
	if(isset($_POST['positionheld4']))		
	{
	$positionheld4 = $_POST['positionheld4'];
	}
	if(isset($_POST['place4']))		
	{
	$place4 = $_POST['place4'];
	}
	if(isset($_POST['fromperiod4']))		
	{
	$fromperiod4 = $_POST['fromperiod4'];
	}
	if(isset($_POST['toperiod4']))		
	{
	$toperiod4 = $_POST['toperiod4'];
	}
	if(isset($_POST['date4']))		
	{
	$date4 = $_POST['date4'];
	}
	
	
	
	
	if(isset($_POST['institutetype5']))		
	{
	$institutetype5 = $_POST['institutetype5'];
	}
	if(isset($_POST['name5']))		
	{
	$name5 = $_POST['name5'];
	}
	if(isset($_POST['positionheld5']))		
	{
	$positionheld5 = $_POST['positionheld5'];
	}
	if(isset($_POST['place5']))		
	{
	$place5 = $_POST['place5'];
	}
	if(isset($_POST['fromperiod5']))		
	{
	$fromperiod5 = $_POST['fromperiod5'];
	}
	if(isset($_POST['toperiod5']))		
	{
	$toperiod5 = $_POST['toperiod5'];
	}
	if(isset($_POST['date5']))		
	{
	$date5 = $_POST['date5'];
	}
	
	
	
	
	if(isset($_POST['title1']))		
	{
	$title1 = $_POST['title1'];
	}
	if(isset($_POST['certificate1']))		
	{
	$certificate1 = $_POST['certificate1'];
	}
	
	if(isset($_POST['title2']))		
	{
	$title2 = $_POST['title2'];
	}
	if(isset($_POST['certificate2']))		
	{
	$certificate2 = $_POST['certificate2'];
	}
	
	if(isset($_POST['title3']))		
	{
	$title3 = $_POST['title3'];
	}
	if(isset($_POST['certificate3']))		
	{
	$certificate3 = $_POST['certificate3'];
	}
	
	if(isset($_POST['title4']))		
	{
	$title4 = $_POST['title4'];
	}
	if(isset($_POST['certificate4']))		
	{
	$certificate4 = $_POST['certificate4'];
	}
	
	if(isset($_POST['title5']))		
	{
	$title5 = $_POST['title5'];
	}
	if(isset($_POST['certificate5']))		
	{
	$certificate5 = $_POST['certificate5'];
	}
	if(isset($_POST['status']) &&    $_POST['status'] == 'Yes')		
	{
		$status=0;
	}
	else
	{
		$status=1;
	}
	
		$qry = "INSERT INTO employee( employeecode, employeename,
		 dateofbirth, 
		gender, emailid, designation, employeenumber, dateofjoining, contact, employeeimage,
		 expertise, starrating, basic, hra, conveyance, allowance, incentivepercent, grosspay,
		tds, pf, esi, loans, salaryadvance, totaldeduction, anyotherdeduction, institutetype1,
		name1, positionheld1, place1, fromperiod1, toperiod1, date1, institutetype2, name2, 
		positionheld2, place2, fromperiod2, toperiod2, date2, institutetype3, name3, positionheld3,
		 place3, fromperiod3, toperiod3, date3, institutetype4, name4, positionheld4, place4,
		fromperiod4, toperiod4, date4, institutetype5, name5, positionheld5, place5, fromperiod5,
	   toperiod5, date5, title1, certificate1, title2, certificate2, title3, certificate3,
		title4, certificate4, title5, certificate5,status) VALUES (
		'".strip_tags($employeecode)."',
		'".strip_tags($employeename)."',
		'".strip_tags($dateofbirth)."',
		'".strip_tags($gender)."',
		'".strip_tags($emailid)."',
		'".strip_tags($designation)."',
		'".strip_tags($employeenumber)."',
		'".strip_tags($dateofjoining)."',
		'".strip_tags($contact)."',
		'".strip_tags($employeeimage)."',
		'".strip_tags($expertise)."',
		'".strip_tags($starrating)."',
		'".strip_tags($basic)."',
		'".strip_tags($hra)."',
		'".strip_tags($conveyance)."',
		'".strip_tags($allowance)."',
		'".strip_tags($incentivepercent)."',
		'".strip_tags($grosspay)."',
		'".strip_tags($tds)."',
		'".strip_tags($pf)."',
		'".strip_tags($esi)."',
		'".strip_tags($loans)."',
		'".strip_tags($salaryadvance)."',
		'".strip_tags($totaldeduction)."',
		'".strip_tags($anyotherdeduction)."',
	
		'".strip_tags($institutetype1)."',
		'".strip_tags($name1)."',
		'".strip_tags($positionheld1)."',
		'".strip_tags($place1)."',
		'".strip_tags($fromperiod1)."',
		'".strip_tags($toperiod1)."',
		'".strip_tags($date1)."',
	
		'".strip_tags($institutetype2)."',
		'".strip_tags($name2)."',
		'".strip_tags($positionheld2)."',
		'".strip_tags($place2)."',
		'".strip_tags($fromperiod2)."',
		'".strip_tags($toperiod2)."',
		'".strip_tags($date2)."',
	
		'".strip_tags($institutetype3)."',
		'".strip_tags($name3)."',
		'".strip_tags($positionheld3)."',
		'".strip_tags($place3)."',
		'".strip_tags($fromperiod3)."',
		'".strip_tags($toperiod3)."',
		'".strip_tags($date3)."',
	
		'".strip_tags($institutetype4)."',
		'".strip_tags($name4)."',
		'".strip_tags($positionheld4)."',
		'".strip_tags($place4)."',
		'".strip_tags($fromperiod4)."',
		'".strip_tags($toperiod4)."',
		'".strip_tags($date4)."',
	
		'".strip_tags($institutetype5)."',
		'".strip_tags($name5)."',
		'".strip_tags($positionheld5)."',
		'".strip_tags($place5)."',
		'".strip_tags($fromperiod5)."',
		'".strip_tags($toperiod5)."',
		'".strip_tags($date5)."',
	
	
		'".strip_tags($title1)."',
		'".strip_tags($certificate1)."',
		
		'".strip_tags($title2)."',
		'".strip_tags($certificate2)."',
		'".strip_tags($title3)."',
		'".strip_tags($certificate3)."',
		'".strip_tags($title4)."',
		'".strip_tags($certificate4)."',
		'".strip_tags($title5)."',
		'".strip_tags($certificate5)."',
		'".strip_tags($status)."'
	
		
		);";
		$res =$mysqli->query($qry)or die("Error in Query".$mysqli->error);
		$id = 0;
		$id = $mysqli->insert_id;
		return $id; 
		
		}
	/*End Employee ADD*/


	/*Delete Employee master*/
		public function deleteemployeemaster($mysqli,$del) 
		{
			$date  = date('Y-m-d'); 
			$qry = 'UPDATE  employee  SET status="1"  WHERE employeeid="'.mysqli_real_escape_string($mysqli,$id).'"'; 
			$res =$mysqli->query($qry)or die("Error in delete query".$mysqli->error);	
		} 	
	 /*End Delete Employee*/


	 /*GET Employeemaster*/

	    
	 public function getgetemployeemasteruser($mysqli,$idupd) 
	 {
		 $qry = "SELECT * FROM user WHERE employeeid='".mysqli_real_escape_string($mysqli,$idupd)."'"; 
		 $res =$mysqli->query($qry)or die("Error in Get All Records".$mysqli->error);
		 $detailrecords = array();
		 if ($mysqli->affected_rows>0)
		 {
			 $row = $res->fetch_object();	
			 $detailrecords['employeeid']                    = $row->employeeid; 
			 $detailrecords['employeecode']       	        = strip_tags($row->employeecode);
			 $detailrecords['employeename']       	        = strip_tags($row->employeename);
			 $detailrecords['dateofbirth']              = strip_tags($row->dateofbirth);		  	
			 $detailrecords['gender']                     = strip_tags($row->gender);	
			 $detailrecords['emailid']                    = strip_tags($row->emailid); 
			 $detailrecords['designation']       	        = strip_tags($row->designation);
			 $detailrecords['employeenumber']       	        = strip_tags($row->employeenumber);
			 $detailrecords['dateofjoining']              = strip_tags($row->dateofjoining);		  	
			 $detailrecords['contact']                     = strip_tags($row->contact);		
			 $detailrecords['employeeimage']                    =strip_tags( $row->employeeimage); 
			 $detailrecords['expertise']       	        = strip_tags($row->expertise);
			 $detailrecords['starrating']       	        = strip_tags($row->starrating);
			 $detailrecords['basic']              = strip_tags($row->basic);		  	
			 $detailrecords['hra']                     = strip_tags($row->hra);	
			 $detailrecords['conveyance']                    = strip_tags($row->conveyance); 
			 $detailrecords['allowance']       	        = strip_tags($row->allowance);
			 $detailrecords['incentivepercent']       	        = strip_tags($row->incentivepercent);
			 $detailrecords['grosspay']              = strip_tags($row->grosspay);		  	
			 $detailrecords['tds']                     = strip_tags($row->tds);	
			 $detailrecords['pf']                    = strip_tags($row->pf); 
			 $detailrecords['esi']       	        = strip_tags($row->esi);
			 $detailrecords['loans']       	        = strip_tags($row->loans);
			 $detailrecords['salaryadvance']              = strip_tags($row->salaryadvance);		  	
			 $detailrecords['totaldeduction']                     = strip_tags($row->totaldeduction);	
			 $detailrecords['anyotherdeduction']                    = strip_tags($row->anyotherdeduction); 


			 $detailrecords['institutetype1']       	        = strip_tags($row->institutetype1);
			 $detailrecords['name1']       	        = strip_tags($row->name1);
			 $detailrecords['positionheld1']              = strip_tags($row->positionheld1);		  	
			 $detailrecords['place1']                     = strip_tags($row->place1);	
			 $detailrecords['fromperiod1']                    = strip_tags($row->fromperiod1); 
			 $detailrecords['toperiod1']       	        = strip_tags($row->toperiod1);
			 $detailrecords['date1']       	        = strip_tags($row->date1);


			 $detailrecords['institutetype2']       	        = strip_tags($row->institutetype2);
			 $detailrecords['name2']       	        = strip_tags($row->name2);
			 $detailrecords['positionheld2']              = strip_tags($row->positionheld2);		  	
			 $detailrecords['place2']                     = strip_tags($row->place2);	
			 $detailrecords['fromperiod2']                    = strip_tags($row->fromperiod2); 
			 $detailrecords['toperiod2']       	        = strip_tags($row->toperiod2);
			 $detailrecords['date2']       	        = strip_tags($row->date2);

			 $detailrecords['institutetype3']       	        = strip_tags($row->institutetype3);
			 $detailrecords['name3']       	        = strip_tags($row->name3);
			 $detailrecords['positionheld3']              = strip_tags($row->positionheld3);		  	
			 $detailrecords['place3']                     = strip_tags($row->place3);	
			 $detailrecords['fromperiod3']                    = strip_tags($row->fromperiod3); 
			 $detailrecords['toperiod3']       	        = strip_tags($row->toperiod3);
			 $detailrecords['date3']       	        = strip_tags($row->date3);

			 $detailrecords['institutetype4']       	        = strip_tags($row->institutetype4);
			 $detailrecords['name4']       	        = strip_tags($row->name1);
			 $detailrecords['positionheld1']              = strip_tags($row->positionheld4);		  	
			 $detailrecords['place4']                     = strip_tags($row->place4);	
			 $detailrecords['fromperiod4']                    = strip_tags($row->fromperiod4); 
			 $detailrecords['toperiod4']       	        = strip_tags($row->toperiod4);
			 $detailrecords['date4']       	        = strip_tags($row->date4);

			 $detailrecords['institutetype5']       	        = strip_tags($row->institutetype5);
			 $detailrecords['name5']       	        = strip_tags($row->name5);
			 $detailrecords['positionheld5']              = strip_tags($row->positionheld5);		  	
			 $detailrecords['place5']                     = strip_tags($row->place5);	
			 $detailrecords['fromperiod5']                    = strip_tags($row->fromperiod5); 
			 $detailrecords['toperiod5']       	        = strip_tags($row->toperiod5);
			 $detailrecords['date5']       	        = strip_tags($row->date5);


			 $detailrecords['toperiod1']       	        = strip_tags($row->toperiod1);
			 $detailrecords['date1']       	        = strip_tags($row->date1);

			 $detailrecords['toperiod2']       	        = strip_tags($row->toperiod2);
			 $detailrecords['date2']       	        = strip_tags($row->date2);

			 $detailrecords['toperiod3']       	        = strip_tags($row->toperiod3);
			 $detailrecords['date3']       	        = strip_tags($row->date3);

			 $detailrecords['toperiod4']       	        = strip_tags($row->toperiod4);
			 $detailrecords['date4']       	        = strip_tags($row->date4);

			 $detailrecords['toperiod5']       	        = strip_tags($row->toperiod5);
			 $detailrecords['date5']       	        = strip_tags($row->date5);

				
	 
		 }
		 return $detailrecords;
	 }


	 /*End Get employee master*/


	 /*Update employee Master*/

	 public function updateEemployeemaster($mysqli,$id) { 		
	
		$date  = date('Y-m-d');
		if (isset($_POST['employeecode'])) {
		 $employeecode             = mysqli_real_escape_string($mysqli,$_POST['employeecode']);		
	   }
		if (isset($_POST['employeename'])) {
		$employeename             = mysqli_real_escape_string($mysqli,$_POST['employeename']);		
		}	
		if (isset($_POST['dateofbirth'])) {
		$dateofbirth               = mysqli_real_escape_string($mysqli,$_POST['dateofbirth']);		
		}
		if (isset($_POST['gender'])) {
		$gender               = mysqli_real_escape_string($mysqli,$_POST['gender']);		
		}
	   
		if (isset($_POST['emailid'])) {
		$emailid               = mysqli_real_escape_string($mysqli,$_POST['emailid']);		
		}
	
		if (isset($_POST['designation'])) {
		$designation               = mysqli_real_escape_string($mysqli,$_POST['designation']);		
		}
		if (isset($_POST['employeenumber'])) {
		$employeenumber               = mysqli_real_escape_string($mysqli,$_POST['employeenumber']);		
		}
		if (isset($_POST['dateofjoining'])) {
			$dateofjoining               = mysqli_real_escape_string($mysqli,$_POST['dateofjoining']);		
		}
		if (isset($_POST['contact'])) {
			$contact               = mysqli_real_escape_string($mysqli,$_POST['contact']);		
		}
		if (isset($_POST['employeeimage'])) {
			$employeeimage               = mysqli_real_escape_string($mysqli,$_POST['employeeimage']);		
		}
		if (isset($_POST['expertise'])) {
			$expertise               = mysqli_real_escape_string($mysqli,$_POST['expertise']);		
		}
		if (isset($_POST['starrating'])) {
			$starrating               = mysqli_real_escape_string($mysqli,$_POST['starrating']);		
		}
		if (isset($_POST['basic'])) {
			$basic               = mysqli_real_escape_string($mysqli,$_POST['basic']);		
		}
		if (isset($_POST['hra'])) {
			$hra               = mysqli_real_escape_string($mysqli,$_POST['hra']);		
		}
		if (isset($_POST['conveyance'])) {
			$conveyance               = mysqli_real_escape_string($mysqli,$_POST['conveyance']);		
		}
		if (isset($_POST['allowance'])) {
			$allowance               = mysqli_real_escape_string($mysqli,$_POST['allowance']);		
		}
		if (isset($_POST['incentivepercent'])) {
			$incentivepercent               = mysqli_real_escape_string($mysqli,$_POST['incentivepercent']);		
		}
		if (isset($_POST['grosspay'])) {
			$grosspay               = mysqli_real_escape_string($mysqli,$_POST['grosspay']);		
		}
		if (isset($_POST['tds'])) {
			$tds               = mysqli_real_escape_string($mysqli,$_POST['tds']);		
		}
		if (isset($_POST['pf'])) {
			$pf               = mysqli_real_escape_string($mysqli,$_POST['pf']);		
		}
		if (isset($_POST['salaryadvance'])) {
			$salaryadvance               = mysqli_real_escape_string($mysqli,$_POST['salaryadvance']);		
		}
		if (isset($_POST['totaldeduction'])) {
			$totaldeduction               = mysqli_real_escape_string($mysqli,$_POST['totaldeduction']);		
		}
		if (isset($_POST['anyotherdeduction'])) {
			$anyotherdeduction               = mysqli_real_escape_string($mysqli,$_POST['anyotherdeduction']);		
		}



		


		
		if (isset($_POST['institutetype1'])) {
			$institutetype1               = mysqli_real_escape_string($mysqli,$_POST['institutetype1']);		
		}
		if (isset($_POST['name1'])) {
			$name1               = mysqli_real_escape_string($mysqli,$_POST['name1']);		
		}
		if (isset($_POST['positionheld1'])) {
			$positionheld1               = mysqli_real_escape_string($mysqli,$_POST['positionheld1']);		
		}
		if (isset($_POST['place1'])) {
			$place1               = mysqli_real_escape_string($mysqli,$_POST['place1']);		
		}
		if (isset($_POST['fromperiod1'])) {
			$fromperiod1               = mysqli_real_escape_string($mysqli,$_POST['fromperiod1']);		
		}
		if (isset($_POST['toperiod1'])) {
			$toperiod1               = mysqli_real_escape_string($mysqli,$_POST['toperiod1']);		
		}
		if (isset($_POST['date1'])) {
			$date1               = mysqli_real_escape_string($mysqli,$_POST['date1']);		
		}



		if (isset($_POST['institutetype2'])) {
			$institutetype2               = mysqli_real_escape_string($mysqli,$_POST['institutetype2']);		
		}
		if (isset($_POST['name2'])) {
			$name2               = mysqli_real_escape_string($mysqli,$_POST['name2']);		
		}
		if (isset($_POST['positionheld2'])) {
			$positionheld2               = mysqli_real_escape_string($mysqli,$_POST['positionheld2']);		
		}
		if (isset($_POST['place2'])) {
			$place2               = mysqli_real_escape_string($mysqli,$_POST['place2']);		
		}
		if (isset($_POST['fromperiod2'])) {
			$fromperiod2               = mysqli_real_escape_string($mysqli,$_POST['fromperiod2']);		
		}
		if (isset($_POST['toperiod2'])) {
			$toperiod2               = mysqli_real_escape_string($mysqli,$_POST['toperiod2']);		
		}
		if (isset($_POST['date2'])) {
			$date2               = mysqli_real_escape_string($mysqli,$_POST['date2']);		
		}




		
		if (isset($_POST['institutetype3'])) {
			$institutetype3               = mysqli_real_escape_string($mysqli,$_POST['institutetype3']);		
		}
		if (isset($_POST['name3'])) {
			$name3               = mysqli_real_escape_string($mysqli,$_POST['name3']);		
		}
		if (isset($_POST['positionheld3'])) {
			$positionheld3               = mysqli_real_escape_string($mysqli,$_POST['positionheld3']);		
		}
		if (isset($_POST['place3'])) {
			$place3               = mysqli_real_escape_string($mysqli,$_POST['place3']);		
		}
		if (isset($_POST['fromperiod3'])) {
			$fromperiod3               = mysqli_real_escape_string($mysqli,$_POST['fromperiod3']);		
		}
		if (isset($_POST['toperiod1'])) {
			$toperiod3               = mysqli_real_escape_string($mysqli,$_POST['toperiod3']);		
		}
		if (isset($_POST['date3'])) {
			$date3               = mysqli_real_escape_string($mysqli,$_POST['date3']);		
		}





		
		if (isset($_POST['institutetype4'])) {
			$institutetype4               = mysqli_real_escape_string($mysqli,$_POST['institutetype4']);		
		}
		if (isset($_POST['name4'])) {
			$name4               = mysqli_real_escape_string($mysqli,$_POST['name4']);		
		}
		if (isset($_POST['positionheld4'])) {
			$positionheld4               = mysqli_real_escape_string($mysqli,$_POST['positionheld4']);		
		}
		if (isset($_POST['place4'])) {
			$place4               = mysqli_real_escape_string($mysqli,$_POST['place4']);		
		}
		if (isset($_POST['fromperiod4'])) {
			$fromperiod4               = mysqli_real_escape_string($mysqli,$_POST['fromperiod4']);		
		}
		if (isset($_POST['toperiod4'])) {
			$toperiod4               = mysqli_real_escape_string($mysqli,$_POST['toperiod4']);		
		}
		if (isset($_POST['date4'])) {
			$date4               = mysqli_real_escape_string($mysqli,$_POST['date4']);		
		}




		
		if (isset($_POST['institutetype5'])) {
			$institutetype5               = mysqli_real_escape_string($mysqli,$_POST['institutetype5']);		
		}
		if (isset($_POST['name5'])) {
			$name5               = mysqli_real_escape_string($mysqli,$_POST['name5']);		
		}
		if (isset($_POST['positionheld5'])) {
			$positionheld5               = mysqli_real_escape_string($mysqli,$_POST['positionheld5']);		
		}
		if (isset($_POST['place5'])) {
			$place5               = mysqli_real_escape_string($mysqli,$_POST['place5']);		
		}
		if (isset($_POST['fromperiod5'])) {
			$fromperiod5               = mysqli_real_escape_string($mysqli,$_POST['fromperiod5']);		
		}
		if (isset($_POST['toperiod5'])) {
			$toperiod5               = mysqli_real_escape_string($mysqli,$_POST['toperiod5']);		
		}
		if (isset($_POST['date5'])) {
			$date5               = mysqli_real_escape_string($mysqli,$_POST['date5']);		
		}


		if (isset($_POST['title1'])) {
			$title1               = mysqli_real_escape_string($mysqli,$_POST['title1']);		
		}
		if (isset($_POST['certificate1'])) {
			$certificate1               = mysqli_real_escape_string($mysqli,$_POST['certificate1']);		
		}



		if (isset($_POST['title2'])) {
			$title2               = mysqli_real_escape_string($mysqli,$_POST['title2']);		
		}
		if (isset($_POST['certificate2'])) {
			$certificate2               = mysqli_real_escape_string($mysqli,$_POST['certificate2']);		
		}


		if (isset($_POST['title3'])) {
			$title3               = mysqli_real_escape_string($mysqli,$_POST['title3']);		
		}
		if (isset($_POST['certificate3'])) {
			$certificate3               = mysqli_real_escape_string($mysqli,$_POST['certificate3']);		
		}


		if (isset($_POST['title4'])) {
			$title4               = mysqli_real_escape_string($mysqli,$_POST['title4']);		
		}
		if (isset($_POST['certificate4'])) {
			$certificate4               = mysqli_real_escape_string($mysqli,$_POST['certificate4']);		
		}


		if (isset($_POST['title5'])) {
			$title5               = mysqli_real_escape_string($mysqli,$_POST['title5']);		
		}
		if (isset($_POST['certificate5'])) {
			$certificate5               = mysqli_real_escape_string($mysqli,$_POST['certificate5']);		
		}


		
		if(isset($_POST['status']) &&    $_POST['status'] == 'Yes')		
		{
			$status=0;
		}
		else
		{
			$status=1;
		}
   
	   $updateQry = 'UPDATE  employee  SET employeecode="'.strip_tags($employeecode).'" ,
	   employeename="'.strip_tags($employeename).'" ,dateofbirth="'.strip_tags($dateofbirth).'" ,		
	   gender="'.strip_tags($gender).'" ,	emailid="'.strip_tags($emailid).'" ,	
	   designation="'.strip_tags($designation).'" ,employeenumber="'.strip_tags($employeenumber).'" ,	
	   dateofjoining="'.strip_tags($dateofjoining).'" ,contact="'.strip_tags($contact).'" ,
	   employeeimage="'.strip_tags($employeeimage).'" ,expertise="'.strip_tags($expertise).'" ,
	   starrating="'.strip_tags($starrating).'" ,basic="'.strip_tags($basic).'" ,
	   hra="'.strip_tags($hra).'" ,conveyance="'.strip_tags($conveyance).'" ,	 
	   allowance="'.strip_tags($allowance).'" ,incentivepercent="'.strip_tags($incentivepercent).'" ,	
	   grosspay="'.strip_tags($grosspay).'" ,tds="'.strip_tags($tds).'" ,	
	   pf="'.strip_tags($pf).'" ,esi="'.strip_tags($esi).'" ,	
	   loans="'.strip_tags($loans).'" ,salaryadvance="'.strip_tags($salaryadvance).'" ,	
	   totaldeduction="'.strip_tags($totaldeduction).'" ,anyotherdeduction="'.strip_tags($anyotherdeduction).'" ,	
	   

	
	   institutetype1="'.strip_tags($institutetype1).'" ,name1="'.strip_tags($name1).'" ,	
	   positionheld1="'.strip_tags($positionheld1).'" ,place1="'.strip_tags($place1).'" ,	
	   fromperiod1="'.strip_tags($fromperiod1).'",toperiod1="'.strip_tags($toperiod1).'",
	   date1="'.strip_tags($date1).'",

	   institutetype2="'.strip_tags($institutetype2).'" ,name2="'.strip_tags($name2).'" ,	
	   positionheld2="'.strip_tags($positionheld2).'" ,place2="'.strip_tags($place2).'" ,	
	   fromperiod2="'.strip_tags($fromperiod2).'",toperiod2="'.strip_tags($toperiod2).'",
	   date2="'.strip_tags($date2).'",

	   institutetype3="'.strip_tags($institutetype3).'" ,name3="'.strip_tags($name3).'" ,	
	   positionheld3="'.strip_tags($positionheld3).'" ,place3="'.strip_tags($place3).'" ,	
	   fromperiod3="'.strip_tags($fromperiod3).'",toperiod3="'.strip_tags($toperiod3).'",
	   date3="'.strip_tags($date3).'",

	   institutetype4="'.strip_tags($institutetype4).'" ,name4="'.strip_tags($name4).'" ,	
	   positionheld4="'.strip_tags($positionheld4).'" ,place4="'.strip_tags($place4).'" ,	
	   fromperiod4="'.strip_tags($fromperiod4).'",toperiod4="'.strip_tags($toperiod4).'",
	   date4="'.strip_tags($date4).'",

	   institutetype5="'.strip_tags($institutetype5).'" ,name5="'.strip_tags($name5).'" ,	
	   positionheld5="'.strip_tags($positionheld5).'" ,place5="'.strip_tags($place5).'" ,	
	   fromperiod5="'.strip_tags($fromperiod5).'",toperiod5="'.strip_tags($toperiod5).'",
	   date5="'.strip_tags($date5).'",


	   title1="'.strip_tags($title1).'" ,certificate1="'.strip_tags($certificate1).'" ,

	   title2="'.strip_tags($title2).'" ,certificate2="'.strip_tags($certificate2).'" ,

	   title3="'.strip_tags($title3).'" ,certificate3="'.strip_tags($certificate3).'" ,
	   title4="'.strip_tags($title4).'" ,certificate4="'.strip_tags($certificate4).'" ,
	   title5="'.strip_tags($title5).'" ,certificate5="'.strip_tags($certificate5).'" ,

	   
	   
	   status="'.$status.'"
	 
	 
	 
	 
	 
	 
	   WHERE employeeid="'.mysqli_real_escape_string($mysqli,$id).'"';  
   
   $res =$mysqli->query($updateQry)or die("Error in in update Query!.".$mysqli->error); 
			
			 
   }
	}
?>