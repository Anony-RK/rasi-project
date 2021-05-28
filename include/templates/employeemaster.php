<?php 
   $id=0;

 if(isset($_POST['submitemployee']) && $_POST['submitemployee'] != '')
 {

    
    if(isset($_POST['id']) && $_POST['id'] >0 && is_numeric($_POST['id'])){		
        $id = $_POST['id']; 	
    $updateEemployeemaster = $userObj->updateEemployeemaster($mysqli,$id);  
    ?>
   <script>location.href='<?php echo $HOSTPATH;  ?>editemployeemaster&msc=2';</script>
    <?php	}
    else{   
	
		$addemployeemaster = $userObj->addemployeemaster($mysqli);   
        ?>
    <script>location.href='<?php echo $HOSTPATH;  ?>editemployeemaster&msc=1';</script>
        <?php
    }
 }  
 

$del=0;
if(isset($_GET['del']))
{
$del=$_GET['del'];
}
if($del>0)
{
	$deleteemployeemaster = $userObj->deleteemployeemaster($mysqli,$del); 
	//die;
	?>
	<script>location.href='<?php echo $HOSTPATH;  ?>editemployeemaster&msc=3';</script>
<?php	
}

if(isset($_GET['upd']))
{
$idupd=$_GET['upd'];
}
$status =0;
if($idupd>0)
{
	$getemployeemaster = $userObj->getemployeemaster($mysqli,$idupd); 
	
	if (sizeof($branchdetails)>0) {
        for($ibranch=0;$ibranch<sizeof($getemployeemaster);$ibranch++)  {			
			$employeecode                	 = $getemployeemaster['employeecode'];
			$employeename          		 = $getemployeemaster['employeename'];
			$dateofbirth      			     = $getemployeemaster['dateofbirth'];
			$gender      			     = $getemployeemaster['gender'];
			$emailid       			 = $getemployeemaster['emailid'];
			$designation                	 = $getemployeemaster['designation'];
			$employeenumber       		    	 = $getemployeemaster['employeenumber'];
			$dateofjoining     			     = $getemployeemaster['dateofjoining'];
			$contact     		     = $getemployeemaster['contact'];
			$employeeimage     			         = $getemployeemaster['employeeimage'];
			$expertise        		     = $getemployeemaster['expertise'];
			$starrating	    		         = $getemployeemaster['starrating'];
			$basic                         = $getemployeemaster['basic'];
            $hra                        = $getemployeemaster['hra']; 
			$conveyance                      = $getemployeemaster['conveyance']; 
			$allowance            = $getemployeemaster['allowance']; 
            $incentivepercent                      = $getemployeemaster['incentivepercent'];  
            $grosspay     			     = $getemployeemaster['grosspay'];
			$tds     		     = $getemployeemaster['tds'];
			$pf     			         = $getemployeemaster['pf'];
			$esi        		     = $getemployeemaster['esi'];
			$loans	    		         = $getemployeemaster['loans'];
			$salaryadvance                         = $getemployeemaster['salaryadvance'];
            $totaldeduction                        = $getemployeemaster['totaldeduction']; 


			$institutetype1                      = $getemployeemaster['institutetype1']; 
			$name1            = $getemployeemaster['name1']; 
            $positionheld1     			     = $getemployeemaster['positionheld1'];
			$place1     		     = $getemployeemaster['place1'];
			$fromperiod1     			         = $getemployeemaster['fromperiod1'];
			$toperiod1        		     = $getemployeemaster['toperiod1'];
			$date1	    		         = $getemployeemaster['date1'];

            $institutetype2                      = $getemployeemaster['institutetype2']; 
			$name2            = $getemployeemaster['name2']; 
            $positionheld2     			     = $getemployeemaster['positionheld2'];
			$place2     		     = $getemployeemaster['place2'];
			$fromperiod2     			         = $getemployeemaster['fromperiod2'];
			$toperiod2        		     = $getemployeemaster['toperiod2'];
			$date2	    		         = $getemployeemaster['date2'];

            $institutetype3                      = $getemployeemaster['institutetype3']; 
			$name3            = $getemployeemaster['name3']; 
            $positionheld3     			     = $getemployeemaster['positionheld3'];
			$place3     		     = $getemployeemaster['place3'];
			$fromperiod3     			         = $getemployeemaster['fromperiod3'];
			$toperiod3        		     = $getemployeemaster['toperiod3'];
			$date3	    		         = $getemployeemaster['date3'];

            $institutetype4                      = $getemployeemaster['institutetype4']; 
			$name4            = $getemployeemaster['name4']; 
            $positionheld4     			     = $getemployeemaster['positionheld4'];
			$place4     		     = $getemployeemaster['place4'];
			$fromperiod4     			         = $getemployeemaster['fromperiod4'];
			$toperiod4        		     = $getemployeemaster['toperiod4'];
			$date4	    		         = $getemployeemaster['date4'];

            $institutetype5                      = $getemployeemaster['institutetype5']; 
			$name5            = $getemployeemaster['name5']; 
            $positionheld5     			     = $getemployeemaster['positionheld5'];
			$place5     		     = $getemployeemaster['place5'];
			$fromperiod5     			         = $getemployeemaster['fromperiod5'];
			$toperiod5        		     = $getemployeemaster['toperiod5'];
			$date5	    		         = $getemployeemaster['date5'];


            $title1        		     = $getemployeemaster['title1'];
			$certificate1	    		         = $getemployeemaster['certificate1'];

            $title2        		     = $getemployeemaster['title2'];
			$certificate2	    		         = $getemployeemaster['certificate2'];

            $title3        		     = $getemployeemaster['title3'];
			$certificate3	    		         = $getemployeemaster['certificate3'];

            $title4        		     = $getemployeemaster['title4'];
			$certificate4	    		         = $getemployeemaster['certificate4'];

            $title5        		     = $getemployeemaster['title5'];
			$certificate5	    		         = $getemployeemaster['certificate5'];
            $status	    		         = $getemployeemaster['status'];

		}
	}
}

  ?>
  


<!-- Page header start -->
<div class="page-header">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">Employee Master</li>
					</ol>

					<ul class="app-actions">
						<li>
							<a href="#" id="reportrange">
								<span class="range-text"></span>
								<i class="icon-chevron-down"></i>	
							</a>
						</li>
						<li>
							<a href="#">
								<i class="icon-export"></i> Export
							</a>
						</li>
					</ul>
				</div>
				<!-- Page header end -->

				<!-- Main container start -->
				<div class="main-container">


					<!--------form start-->
					<form id = "employee" name="employee" action="" method="post"> 
                    <input type="hidden" class="form-control" value="<?php if(isset($employeeid )) echo $employeeid ; ?>"  id="id" name="id" aria-describedby="id" placeholder="Enter id">

 		<!-- Row start -->
         <div class="row gutters">

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
					<div class="card-header">
						<div class="card-title">General Info</div>
					</div>
                    <div class="card-body">
                        
                        <div class="row gutters">
                            <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                                <div class="form-group">
                                    <label >Employee Code <span class="required">*</span></label>
                                    <input type="text" class="form-control" id="employeecode" name="employeecode" value="<?php if(isset($employeecode )) echo $employeecode ; ?>">
									<label id="employeecode_valid" class="text-danger" >Enter Employee Code</label>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                                <div class="form-group">
                                    <label for="disabledInput">Employee Name<span class="required">*</span></label>
                                    <input type="text" id="employeename" name="employeename" class="form-control"  value="<?php if(isset($employeename )) echo $employeename ; ?>">
									<label id="employeename_valid" class="text-danger" >Enter Employee Name</label>
                                </div>
                            </div>
			
                            <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                                <div class="form-group">
                                    <label for="inputEmail">Date Of birth <span class="required">*</span></label>
                                    <input type="date" class="form-control" id="dateofbirth" name="dateofbirth" value="<?php if(isset($dateofbirth )) echo $dateofbirth ; ?>">
									<label id="dateofbirth_valid" class="text-danger" >Select Date Of Birth</label>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg col-md-4 col-sm-4 col-12">
                                <div class="form-group">
                                    <label for="disabledInput">Gender <span class="required">*</span></label>
                                    <select class="form-control " id="gender" name="gender">
                                        
                                        <option value=""> Select Gender</option>
                                        <option <?php if(isset($gender)) { if($gender == "Male" ) echo 'selected'; }  ?> value="Male"> Male</option>
                                        <option  <?php if(isset($gender)) { if($gender == "Female" ) echo 'selected'; }  ?> value="Female"> FeMale</option>
                                    </select>
									<label id="gender_valid" class="text-danger">Select Gender</label>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                <div class="form-group">
                                    <label for="inputReadOnly">E-Mail Id <span class="required">*</span></label>
                                    <input class="form-control" id="emailid" name="emailid" type="text" value="<?php if(isset($emailid )) echo $emailid ; ?>">
									<label id="emailid_valid" class="text-danger" >Enter Email Id</label>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                                <div class="form-group">
                                    <label for="disabledInput">Designation <span class="required">*</span></label>
                                    <div class="d-flex">
										<select class="form-control w-75" id="designation" name="designation">
											<option value=""> Select Designation</option>
                                            <option  <?php if(isset($designation)) { if($designation == "Manager" ) echo 'selected'; }  ?> value="Manager">Manager </option>
                                            <option  <?php if(isset($designation)) { if($designation == "Supervisor" ) echo 'selected'; }  ?> value="Supervisor">Supervisor</option>
                                            <option  <?php if(isset($designation)) { if($designation == "SalesExecutive" ) echo 'selected'; }  ?> value="Sales Executive"> Sales Executive</option>
										</select>
									<button style="width: 35px;height: 35px;margin-left: 20px;font-size: 20px; border: none;outline: none;color:#fff;background: #af772a;"type="button" data-toggle="modal" data-target="#exampleModal">+</button></div>
									<label id="designation_valid" class="text-danger">Enter Designation</label>
                                </div>
                            </div>
							<style>
								modal-ku {
									width: 750px;
									margin: auto;
									}
							</style>
 									<!-- Modal -->
									<div class="modal fade  " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Add Designation</h5>
											<!-- <button type="button" class="btn-close" ></button> -->
											<button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="modal" aria-label="Close" ></button>
											</div>
											<div class="modal-body">
												<div class="align-items-center">
													<label for="">Designation</label>
													<input type="text" id="adddesignation" name="adddesignation" class="form-control" >
													<label for="">Designation List</label>
													<div class="d-flex justify-content-between">
														<div class="d-flex justify-content-around">
															<button style=" border: none;outline: none;color:#fff;background: #af772a;"type="button" class="ml-1">Copy</button>
															<button style=" border: none;outline: none;color:#fff;background: #af772a;"type="button" class="ml-1">Excel</button>
															<button style=" border: none;outline: none;color:#fff;background: #af772a;"type="button" class="ml-1">Print</button>
															<button style=" border: none;outline: none;color:#fff;background: #af772a;"type="button" class="ml-1">PDF</button>
															<button style=" border: none;outline: none;color:#fff;background: #af772a;"type="button" class="ml-1">Column Visibility</button>

														</div>
														<div class="d-flex align-items-center">
															<label for="">Search:</label> 
															<input type="text" id="searchitems" name="searchitems" class="form-control" >

														</div>
													
													</div>
													<!---Table-->

													<table class="table table-bordered mt-4">
														<thead>
														  <tr>
															<th scope="col">Name</th>
															<th scope="col">Actions</th>
															
														  </tr>
														</thead>
														<tbody>
														  <tr>
															<th scope="row">first Name</th>
															<td><i class="fa fa-pencil-square" aria-hidden="true" style="font-size: 20px; border: none;outline: none;color: #af772a;"></i>
																<i class="fa fa-trash" aria-hidden="true" style="font-size: 20px; border: none;outline: none;color: #af772a;"></i></td>
															
														  </tr>
														  <tr>
															<th scope="row">Second Name</th>
															<td>
																<i class="fa fa-pencil-square" aria-hidden="true"  style="font-size: 20px; border: none;outline: none;color: #af772a;"></i>
																<i class="fa fa-trash" aria-hidden="true"  style=" font-size: 20px; border: none;outline: none;color: #af772a;"></i>
															</td>
															
														  </tr>
														
														</tbody>
													  </table>

													  <div class="d-flex justify-content-between">
														  <p>Showing 1 to 7 of 7 entries</p>
														  <div class="d-flex justify-content-around ">
															  <a href="#" class="ml-1">First</a>
															  <a href="#" class="ml-1">Previous</a>
															  <button style=" border: none;outline: none;color:#fff;background: #af772a;" type="button" class="ml-1">2</button>
															  <a href="#" class="ml-1">Next</a>
															  <a href="#" class="ml-1">Last</a>
															  
														  </div>
													  </div>
												</div>


											</div>
											
										</div>
										</div>
									</div>
                           
                            <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                                <div class="form-group">
                                    <label for="disabledInput">Employee Number <span class="required">*</span></label>
                                    <input type="text" id="employeenumber" name="employeenumber" class="form-control"  value="<?php if(isset($employeenumber )) echo $employeenumber ; ?>">
									<label id="employeenumber_valid" class="text-danger" >Enter Employee Number</label>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                                <div class="form-group">
                                    <label for="disabledInput">Date Of Joining <span class="required">*</span></label>
                                    <input type="date" id="dateofjoining" name="dateofjoining" class="form-control" value="<?php if(isset($dateifjoining )) echo $dateofjoining ; ?>">
									<label id="dateofjoining_valid" class="text-danger" >Select Data Of Joining</label>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                                <div class="form-group">
                                    <label for="disabledInput">Contact <span class="required">*</span></label>
                                    <input type="text" id="contact" name="contact" class="form-control" value="<?php if(isset($contact )) echo $contact ; ?>" >
									<label id="contact_valid" class="text-danger" >Enter Contact Number</label>
                                </div>
                            </div>
							<div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                                <div class="form-group" > 
                                     <img width="150" style="height:200px; margin: 0px auto;" id="viewimage" >
                                    <input type="file" class="form-control w-50" accept="image/*" onchange="loadFile(event)" value="<?php if(isset($employeeimage )) echo $employeeimage ; ?>" id="employeeimage" name="employeeimage" >
									<label id="employeeimage_valid" class="text-danger" >Select Employee Photo</label>
                                </div>
                            </div>
							<script>
								var loadFile = function(event) {
									var image = document.getElementById("viewimage");
									image.src = URL.createObjectURL(event.target.files[0]);
								};
							</script>
                            
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
					<div class="card-header">
						<div class="card-title">Expertise</div>
					</div>
                    <div class="card-body">
                        
                        <div class="row gutters">
                          
                            <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                                <div class="form-group">
                                    <label for="disabledInput">Expertise <span class="required">*</span></label>
                                    <input type="text" id="expertise"  name="expertise" class="form-control" placeholder="Expertise" value="<?php if(isset($expertise )) echo $expertise ; ?>">
									<label id="expertise_valid" class="text-danger">Enter Expertise</label>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                                <div class="form-group">
                                    <label for="inputEmail">Star Rating<span class="required">*</span></label>
                                    <input type="text" class="form-control" id="starrating" name="starrating" placeholder="Star Rating" value="<?php if(isset($starrating )) echo $starrating ; ?>">
									<label id="starrating_valid" class="text-danger">Enter Star Rating</label>
                                </div>
                            </div>
                          
                            
                        </div>

                    </div>
                </div>
            </div>
            
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
					<div class="card-header">
						<div class="card-title">Pay Structure</div>
					</div>
                    <div class="card-body">
                        
                        <div class="row gutters">
                            <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                                <div class="form-group">
                                    <label for="inputName">Basic<span class="required">*</span></label>
                                    <input type="text" class="form-control" id="basic" name="basic" value="<?php if(isset($basic )) echo $basic ; ?>">
									<label id="basic_valid" class="text-danger">Enter Basic</label>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                                <div class="form-group">
                                    <label for="disabledInput">HRA<span class="required">*</span></label>
                                    <input type="text" id="hra" name="hra" class="form-control"  value="<?php if(isset($hra )) echo $hra ; ?>">
									<label id="hra_valid" class="text-danger">Enter HRA</label>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                                <div class="form-group">
                                    <label for="inputEmail">Conveyance<span class="required">*</span></label>
                                    <input type="text" class="form-control" id="conveyance" name="conveyance" value="<?php if(isset($conveyance )) echo $conveyance ; ?>">
									<label id="conveyance_valid" class="text-danger">Enter Conveyance</label>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                                <div class="form-group">
                                    <label for="inputPwd">Allowance<span class="required">*</span></label>
                                    <input type="text" class="form-control" id="allowance" name="allowance" value="<?php if(isset($allowance )) echo $allowance ; ?>">
									<label id="allowance_valid" class="text-danger">Enter Allowance</label>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                <div class="form-group">
                                    <label for="inputReadOnly">Incentive Percent<span class="required">*</span></label>
                                    <input class="form-control" id="incentivepercent" name="incentivepercent" type="text" value="<?php if(isset($incentivepercent )) echo $incentivepercent ; ?>">
									<label id="incentivepercent_valid" class="text-danger">Enter Incentive Percent</label>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                                <div class="form-group">
                                    <label for="disabledInput">Gross Pay<span class="required">*</span></label>
                                    <input type="text" id="grosspay" name="grosspay" class="form-control"  value="<?php if(isset($grosspay )) echo $grosspay ; ?>">
									<label id="grosspay_valid" class="text-danger">Enter Gross Pay</label>
                                </div>
                            </div>
                           
                            <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                                <div class="form-group">
                                    <label for="disabledInput">TDS<span class="required">*</span></label>
                                    <input type="text" id="tds" name="tds" class="form-control" value="<?php if(isset($tds )) echo $tds ; ?>" >
									<label id="tds_valid" class="text-danger">Enter TDS</label>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                                <div class="form-group">
                                    <label for="disabledInput">PF<span class="required">*</span></label>
                                    <input type="text" id="pf" name="pf" class="form-control" value="<?php if(isset($pf )) echo $pf ; ?>">
									<label id="pf_valid" class="text-danger">Enter PF</label>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                                <div class="form-group">
                                    <label for="disabledInput">ESI<span class="required">*</span></label>
                                    <input type="text" id="esi" name="esi" class="form-control" value="<?php if(isset($esi )) echo $esi ; ?>">
									<label id="esi_valid" class="text-danger">Enter ESI</label>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                                <div class="form-group">
                                    <label for="Input">Loans<span class="required">*</span></label>
                                    <input type="text" id="loans" name="loans" class="form-control"  value="<?php if(isset($loans )) echo $loans ; ?>">
									<label id="loans_valid" class="text-danger">Enter Loans</label>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                                <div class="form-group">
                                    <label for="disabledInput">Salary Advance<span class="required">*</span></label>
                                    <input type="text" id="salaryadvance" name="salaryadvance" class="form-control" value="<?php if(isset($salaryadvance )) echo $salaryadvance ; ?>">
									<label id="salaryadvance_valid" class="text-danger">Enter Salary Advance</label>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                                <div class="form-group">
                                    <label for="disabledInput">Total Deduction<span class="required">*</span></label>
                                    <input type="text" id="totaldeduction" name="totaldeduction" class="form-control"  value="<?php if(isset($totaldeduction )) echo $totaldeduction ; ?>">
									<label id="totaldeduction_valid" class="text-danger">Enter Total Deduction</label>
                                </div>
                            </div>
							<div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                                <div class="form-group">
                                    <label for="disabledInput">Any Other Deduction<span class="required">*</span></label>
                                    <input type="text" id="anyotherdeduction" name="anyotherdeduction" class="form-control"  value="<?php if(isset($anyotherdeduction )) echo $anyotherdeduction ; ?>">
									<label id="anyotherdeduction_valid" class="text-danger">Any Other Deduction</label>
                                </div>
                            </div>
                            
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Staff Experience Details <span class="required">*</span></div>
                    </div>
					<style>
                        thead{
                            background-color: #af772a;
                        }
                        .required{
                            color: #af772a;
                        }
                        .bg1{
                            background-color: #af772a;
                            color:#fff;
                        }
                    </style>
                    <div class="card-body">
                        <table class="table">
                            <thead style="background:">
                              <tr>
                                <th scope="col" class="text-center text-white">Type</th>
                                <th scope="col" class="text-center text-white">Name</th>
                                <th scope="col" class="text-center text-white">Position Held</th>
                                <th scope="col" class="text-center text-white">Place </th>
                                <th scope="col" class="text-center text-white">From period</th>
                                <th scope="col" class="text-center text-white">To Period</th>
                                <th scope="col" class="text-center text-white">Date</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th>  <div class="form-group">
                                    <select class="form-control form-control-lg" id="institutetype1" name="institutetype1">
                                        <option>Select Institute Type</option>
                                    </select>
                                </div></th>
                                <td> <input type="text" id="name1" name="name1" class="form-control"  value="<?php if(isset($name1 )) echo $name1 ; ?>"></td>
                                <td><input type="text" id="positionheld1" name="positionheld1" class="form-control" value="<?php if(isset($positionheld1 )) echo $positionheld1 ; ?>" > </td>
                                <td><input type="text" id="place1" name="place1" class="form-control"  value="<?php if(isset($place1 )) echo $place1 ; ?>"></td>
                                <td><input type="text" id="fromperiod1" name="fromperiod1" class="form-control"  value="<?php if(isset($fromperiod1 )) echo $fromperiod1 ; ?>"></td>
                                <td><input type="text" id="toperiod1" name="toperiod1" class="form-control"  value="<?php if(isset($toperiod1 )) echo $toperiod1 ; ?>"></td>
                                <td><input type="text" id="date1" name="date1" class="form-control" value="<?php if(isset($date1 )) echo $date1 ; ?>" ></td>
                              </tr>
                              <tr>
                                <th>  <div class="form-group">
                                    <select class="form-control form-control-lg" id="institutetype2" name="institutetype2">
                                        <option>Select Institute Type</option>
                                    </select>
                                </div></th>
                                <td> <input type="text" id="name2" name="name2" class="form-control"  value="<?php if(isset($name2 )) echo $name2 ; ?>"></td>
                                <td><input type="text" id="positionheld2" name="positionheld2" class="form-control"  value="<?php if(isset($positionheld2 )) echo $positionheld2 ; ?>"> </td>
                                <td><input type="text" id="place2" name="place2" class="form-control"  value="<?php if(isset($place2 )) echo $place2 ; ?>"></td>
                                <td><input type="text" id="fromperiod2" name="fromperiod2" class="form-control"  value="<?php if(isset($fromperiod2 )) echo $fromperiod2 ; ?>"></td>
                                <td><input type="text" id="toperiod2" name="toperiod2" class="form-control"  value="<?php if(isset($toperiod2 )) echo $toperiod2 ; ?>"></td>
                                <td><input type="text" id="date2" name="date2" class="form-control"  value="<?php if(isset($date2 )) echo $date2 ; ?>"></td>
                              </tr>
                              <tr>
                                <th>  <div class="form-group">
                                    <select class="form-control form-control-lg" id="institutetype3" name="institutetype3">
                                        <option>Select Institute Type</option>
                                    </select>
                                </div></th>
                                <td> <input type="text" id="name3" name="name3" class="form-control"  value="<?php if(isset($name3 )) echo $name3 ; ?>"></td>
                                <td><input type="text" id="positionheld3" name="positionheld3" class="form-control"  value="<?php if(isset($positionheld3 )) echo $positionheld3 ; ?>"> </td>
                                <td><input type="text" id="place3" name="place3" class="form-control" value="<?php if(isset($place3 )) echo $place3 ; ?>" ></td>
                                <td><input type="text" id="fromperiod3" name="fromperiod3" class="form-control"  value="<?php if(isset($fromperiod3 )) echo $fromperiod3 ; ?>"></td>
                                <td><input type="text" id="toperiod3" name="toperiod3" class="form-control" value="<?php if(isset($toperiod3 )) echo $toperiod3 ; ?>" ></td>
                                <td><input type="text" id="date3" name="date3" class="form-control"  value="<?php if(isset($date3 )) echo $date3 ; ?>"></td>
                              </tr>
                              <tr>
                                <th>  <div class="form-group">
                                    <select class="form-control form-control-lg" id="institutetype4" name="institutetype4">
                                        <option>Select Institute Type</option>
                                    </select>
                                </div></th>
                                <td> <input type="text" id="name4" name="name4" class="form-control"  value="<?php if(isset($name4 )) echo $name4 ; ?>"></td>
                                <td><input type="text" id="positionheld4" name="positionheld4" class="form-control"  value="<?php if(isset($positionheld4 )) echo $positionheld4 ; ?>"> </td>
                                <td><input type="text" id="place4" name="place4" class="form-control"  value="<?php if(isset($place4 )) echo $place4 ; ?>"></td>
                                <td><input type="text" id="fromperiod4" name="fromperiod4" class="form-control" value="<?php if(isset($fromperiod4 )) echo $fromperiod4 ; ?>" ></td>
                                <td><input type="text" id="toperiod4" name="toperiod4" class="form-control"  value="<?php if(isset($toperiod4 )) echo $toperiod4 ; ?>"></td>
                                <td><input type="text" id="date4" name="date4" class="form-control"  value="<?php if(isset($date4 )) echo $date4 ; ?>"></td>
                              </tr>
                              <tr>
                                <th> <div class="form-group w-100">
										<select class="form-control form-control-lg" id="institutetype5" name="institutetype5">
											<option>Select Institute Type</option>
										</select>
                                    </div>
							    </th>
                                <td> <input type="text" id="name5" name="name5" class="form-control"  value="<?php if(isset($name5 )) echo $name5 ; ?>"></td>
                                <td><input type="text" id="positionheld5" name="positionheld5" class="form-control" value="<?php if(isset($positionheld5 )) echo $positionheld5 ; ?>"> </td>
                                <td><input type="text" id="place5" name="place5" class="form-control" value="<?php if(isset($place5 )) echo $place5 ; ?>" ></td>
                                <td><input type="text" id="fromperiod5" name="fromperiod5" class="form-control"  value="<?php if(isset($fromperiod5 )) echo $fromperiod5 ; ?>"></td>
                                <td><input type="text" id="toperiod5" name="toperiod5" class="form-control"  value="<?php if(isset($toperiod5 )) echo $toperiod5 ; ?>"></td>
                                <td><input type="text" id="date5" name="date5" class="form-control" value="<?php if(isset($date5 )) echo $date5 ; ?>"></td>
                              </tr>
                            </tbody>
                          </table>

                    </div>
                </div>
            </div>

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Certificates <span class="required">*</span></div>
                    </div>
                    <div class="card-body">
                        
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label ">Title</label>
                            <div class="col-sm-10 d-flex align-items-center">
                                <input type="text"  class="form-control w-50 " id="title1" name="title1" value="<?php if(isset($title1 )) echo $title1 ; ?>">
								<input type="file"  id="certificate1" name="certificate1" accept="application/pdf" class="ml-4" value="<?php if(isset($certificate1 )) echo $certificate1 ; ?>">

							</div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label ">Title</label>
                            <div class="col-sm-10 d-flex align-items-center">
								<input type="text"  class="form-control w-50 " id="title2" name="title2" value="<?php if(isset($title2 )) echo $title2 ; ?>">
								<input type="file"    id="certificate2" name="certificate2" accept="application/pdf"  class="ml-4" value="<?php if(isset($certificate2 )) echo $certificate2 ; ?>">
                            </div>
                        </div>
						<div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label ">Title</label>
                            <div class="col-sm-10 d-flex align-items-center">
								<input type="text"  class="form-control w-50 " id="title3" name="title3" value="<?php if(isset($title3 )) echo $title3 ; ?>">
								<input type="file"  id="certificate3" name="certificate3" accept="application/pdf"  class="ml-4" value="<?php if(isset($certificate3 )) echo $certificate3 ; ?>">
                            </div>
                        </div>
						<div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label ">Title</label>
                            <div class="col-sm-10 d-flex align-items-center">
								<input type="text"  class="form-control w-50 " id="title4" name="title4" value="<?php if(isset($title4 )) echo $title4 ; ?>">
								<input type="file"  id="certificate4" name="certificate4" accept="application/pdf"  class="ml-4" value="<?php if(isset($certificate4 )) echo $certificate4 ; ?>">
                            </div>
                        </div>
						<div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label ">Title</label>
                            <div class="col-sm-10 d-flex align-items-center">
								<input type="text"  class="form-control w-50 " id="title5" name="title5" value="<?php if(isset($title5 )) echo $title5 ; ?>">
								<input type="file"  id="certificate5" name="certificate5" accept="application/pdf" class="ml-4" value="<?php if(isset($certificate5 )) echo $certificate5 ; ?>">
                            </div>
                        </div>


                        <div class="custom-control custom-checkbox mt-4">
									<input type="checkbox" value="Yes"  <?php if($status==0){echo'checked';}?> tabindex="16"  class="custom-control-input" id="status" name="status">
										<label class="custom-control-label" for="status">Status</label>
									</div>

                    </div>
                </div>
				
            </div>

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
               
                   <div class="row">
					   <div class="col-md-2 d-flex" > 
						<button type="submit" class="btn btn-primary mb-2  " >Download</button>
						<button type="submit" class="btn btn-primary mb-2 ml-2">Upload</button>
					   </div>
					   <div class="col-md-2">
						

					   </div>
					   <div class="col-md-2"></div>
					   <div class="col-md-2"></div>
					   <div class="col-md-2"></div>
					<div class="col-md-2">
						
							<button type="submit" name="submitemployee" id="submitemployee" class="btn btn-primary ">Submit</button>
						    <button type="submit" class="btn btn-primary ">Cancel</button>
					

					</div>

				 
                 
                </div>
            </div>


        </div>
        <!-- Row end -->

</form>

</div>

<script src="../employee.js"></script>
<!-- Main container end -->
