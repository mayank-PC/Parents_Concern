<!doctype html>
<html>
<head>
<title>School Management</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="School Management" />
<meta name="keywords" content="School Management" />
<meta name="author" content="School Management" />
<?php 	$this->load->helper('url');?>
<!-- Bootstrap core CSS -->
<link href="<?php echo base_url();?>dist/css/bootstrap.css" rel="stylesheet">
<!-- Bootstrap theme -->
<link href="<?php echo base_url();?>dist/css/bootstrap-theme.min.css" rel="stylesheet">
 <!-- Custom styles for this template -->

  <!-- DatePicker CSS -->
<link href="<?php echo base_url();?>datepicker/datepicker.css" rel="stylesheet">
<!-- DatePicker CSS -->


<!-- Just for debugging purposes. Don't actually copy this line! -->
<!--[if lt IE 9]><script src="docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
</head>
<body>
<header>
	<div class="mainpageFixedBlock">
    	<div class="row">
        	<div class="col-md-7">
   	   		 <img src="<?php echo base_url();?>images/logo.png" width="260" height="166" alt="mainLogo" class="mainlogo" />
        </div>
          <div class="col-md-5">
            <div class="memberblock_welcome">
                <div class="memberblock_welcome_inner">Welcome XYZ</div>
            </div>
                <div class="memberblock_logout"><img src="<?php echo base_url();?>images/icon_logout.png" width="60" height="38" alt="logout" /></div>
          </div>
        </div>
    </div>
</header>
<section class="main-content container_bg">
	<div class="mainpageFixedBlock">
    	<div class="row">
        	<div class="col-xs-6 col-sm-m-3">
            	<table align="center" cellpadding="0" cellspacing="0" border="0">
				
                	<tr>
                    	<td>
                        	<table align="center" cellpadding="4" cellspacing="4" border="0" width="100%">
                              

                                <form name="add_attendence" method="post" action="<?php echo base_url(); ?>index.php/welcome/get_student_by_class">
								
								 <tr>
                                	<th style="width:110px;">Select Class:</th>
									<td style="width:80px;">
									  
									   <SELECT name="class">
									        <option value="#">Select Class</option>
										    <option value="1st">1st</option>
											<option value="2st">2nd</option>
											<option value="3st">4th</option>
											<option value="10th">10th</option>
										</SELECT>
											<!--<option  value="">Select Class</option>
											<option value="1st">1st</option>
											<option value="2st">2nd</option>
											<option value="3st">4th</option>
											<option value="3st"> 10th</option>
										</select> -->
									</td>
									<td ><input type="submit" name="submit" title="Select Class to get student listing by class" value="Add Attendence"></td>
                                    
                                
								</form>
                                
                            </table>
                        </td>
                        
                     </tr>
					 <tr>
					 <td>&nbsp;</td>
					 <td>&nbsp;</td>
					 <td>&nbsp;</td>
					 <td>&nbsp;</td>
					 <td>&nbsp;</td>
					 </tr>

					  <tr>
					 <td>&nbsp;</td>
					 <td>&nbsp;</td>
					 <td>&nbsp;</td>
					 <td>&nbsp;</td>
					 <td>&nbsp;</td>
					 </tr>
                     <tr>
                     	<td><br/><br/>
						<form name="insert_attendence" method="post" action="<?php echo base_url(); ?>index.php/welcome/mark_attendance">
                        	<table align="center" cellpadding="7" cellspacing="5" border="0" width="100%">
								<?php if(!empty($res)){?>
							  <tr>
									 <th	>Select Date</th>
									<td>
									<input id="datepick" name="date" value="" size="20" />
									  <!-- <SELECT name="date">
											<option value="2013-12-18">2013-12-18</option>
											<option value="2013-12-19">2013-12-19</option>
											<option value="2013-12-20">2013-12-20</option>
											<option value="2013-12-21">2013-12-21</option>
										</SELECT > -->
									</td>
									 
									 </tr>
									 
							<tr>
							    
								<th>Name</th>
								<th>Subject</th>
								<th>Time</th>
								<th>Status</th>
                                <th>Teachers Remarks</th>
								<th>Parents Remarks</th>
								
								
							</tr>
							<?php }?>
							    <?php foreach($res as $row){?>    
                                     
							
							<tr>
							<!--<td></td>-->
							    <input type="hidden" name="class" value="<?php echo $row['class']; ?>">
								<input type="hidden" name="firstname" value="<?php echo $row['firstname']; ?>">
								<input type="hidden" name="student_id" value="<?php echo $row['student_id']; ?>">
								<td><?php echo $row['firstname']; ?></td>
								<td> 
								<SELECT name="subject">
										    <option value="">Select Subject</option>
                                           <option value="maths">Maths</option>
										   <option value="english">English</option>
										   <option value="maths">Science</option>
										   <option value="english">History</option>
								</SELECT>
								
								</td>
								<td>
								<SELECT name="time">
								    <option value="12:00am">12:00am</option>
									<option value="1:00am">1:00am</option>
									<option value="2:00am">2:00am</option>
									<option value="3:00am">3:00am</option>
									<option value="4:00am">4:00am</option>
									<option value="5:00am">5:00am</option>
									<option value="6:00am">6:00am</option>
									<option value="7:00am">7:00am</option>
									<option value="8:00am">8:00am</option>
									<option value="9:00am">9:00am</option>
									<option value="10:00am">10:00am</option>
									<option value="11:00am">11:00am</option>
									<option value="12:00pm">12:00pm</option>
									<option value="1:00pm">1:00pm</option>
									<option value="2:00pm">2:00pm</option>
									<option value="3:00pm">3:00pm</option>
									<option value="4:00pm">4:00pm</option>
									<option value="5:00pm">5:00pm</option>
									<option value="6:00pm">6:00pm</option>
									<option value="7:00pm">7:00pm</option>
									<option value="8:00pm">8:00pm</option>
									<option value="9:00pm">9:00pm</option>
									<option value="10:00pm">10:00pm</option>
									<option value="11:00pm">11:00pm</option>
								</SELECT>
									
			                  </td>
								
								<td> 
								<SELECT name="status">
										   <option value="present">Present</option>
											<option value="absent">Absent</option>
								</SELECT>
								</td>
							
								<td><input type="text" name="parents_remark" value=""></td>
								<td><input type="submit" name="submit" value="Mark Attendance"></td>
								
							</tr>
						
							<?php }?>

                          
							
                             </table>
							<form>
                        </td>
                     </tr>
                     
                </table>

            </div>
        </div>
    </div>
</section>
<!-- DatePicker JS -->
        <script type="text/javascript" src="<?php echo base_url();?>datepicker/datepickr.js"></script>
		<script type="text/javascript">
		new datepickr('datepick');
		</script>
<!-- DatePicker JS -->
<?php require_once("footer.inc.php");?>
</body>
</html>
