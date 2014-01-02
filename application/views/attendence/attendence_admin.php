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
                        	<table align="center" cellpadding="0" cellspacing="0" border="0" width="100%">
							
                            	<tr>
								 <td><a href="<?php echo base_url(); ?>index.php/welcome/display_add_attendence_page">Add Attendence</a><br/>
								 <a href="<?php echo base_url(); ?>index.php/welcome/display_add_student_page">Add Student</a><br/></td>
                                	
									 
									   <td>&nbsp;</td>
                                    
                                </tr>

                                <tr>
                                	<td>&nbsp;</td>
									  <td>&nbsp;</td>
									   <td>&nbsp;</td>
                                    
                                </tr>
                                <tr>
                                	<td>&nbsp;</td>
									  <td>&nbsp;</td>
									   <td>&nbsp;</td>
                                </tr>
                                <tr>
                                	<td>&nbsp;</td>
									  <td>&nbsp;</td>
									   <td>&nbsp;</td>
                                </tr>
                              <tr>
                                	 <td>&nbsp;</td>
									  <td>&nbsp;</td>
									   <td>&nbsp;</td>
                                </tr>
                                
                            </table>
                        </td>
                        
                     </tr>
                     <tr>
                     	<td>
                      <table align="center" cellpadding="7" cellspacing="5" border="0" width="100%">
							<form name="attendence_admin" method="post" action="<?php echo base_url(); ?>index.php/welcome/get_attendence_for_admin">
								<tr>
									<th colspan="2">Select Date</th>
										<td ><input id="datepick" name="date_time" value="" size="20" /><br/><br/><br/></td>
										<td >Select Class<br/><br/><br/></td>
										<td>
											<select name="class">
											<option value="10th">10th</option>
											<option value="11th">11th</option>
											<option value="12th">12th</option>
											</select> <br/><br/><br/>
										</td>
									<td><input type="submit" name="submit" value="GET ATTENDENCE" /><br/><br/><br/></td>
								</tr>
							</form>
							<tr>
								<th>Name</th>
								<th>Date</th>
								<th>Status</th>
								<th>Parents Remark</th>
								<th>Teachers Remark</th>
								<th>Edit</th>
								<th>Delete</th>
							</tr>
								<?php foreach($res as $row){;?>
						<tr>
							<form name="edit_attendence" method="post" action="<?php echo base_url(); ?>index.php/welcome/edit_attendence_page">
							   <!-- <td><input type="checkbox" name="stude_id" value="<?php echo $row['student_id']; ?>"></td>-->
								<input type="hidden" name="stud_id" value="<?php echo $row['id']; ?>" >

								<input type="hidden" name="name" value="<?php echo $row['name']; ?>" >
								<input type="hidden" name="date" value="<?php echo $row['date']; ?>" >
								<input type="hidden" name="status" value="<?php echo $row['status']; ?>" >
								<input type="hidden" name="parents_remark" value="<?php echo $row['parents_remark']; ?>" >
								<input type="hidden" name="teachers_remark" value="<?php echo $row['teachers_remark']; ?>" >

								<td><?php echo $row['name']; ?></td>
								<td><?php echo $row['date']; ?></td>
								<td><?php echo $row['status']; ?></td>
								<td><?php echo $row['parents_remark']; ?></td>
								<td><?php echo $row['teachers_remark']; ?></td>
								<!--<td><a href="<?php echo base_url(); ?>index.php/welcome/edit_attendence_page/?">Edit</a></td>-->
								<td><input type="submit" name="submit" value="Edit"></td>
								<td><a href="#">Delete</a></td>
								<!--<td><input type="text" name="premark" value="<?php echo $row['parents_remark']; ?>" readonly></td>
								<td><input type="text" name="tremark" value="<?php echo $row['teachers_remark']; ?>"></td>-->
							</form>
						</tr>
					<?php } ?>
                  </table>
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
