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

<link href="<?php echo base_url();?>style/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"> </script>
<script type="text/javascript" src="<?php echo base_url();?>js/script.js"></script>



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
						<form name="" method="post" action="<?php echo base_url(); ?>index.php/welcome/display_attendence_class_date">
                        <table align="center" cellpadding="7" cellspacing="5" border="0" width="100%">
							<tr>
                                <th style="width:90px;">Select Date</th>
									<td>
									<input id="datepick" name="date" value="" size="20" />
									  <!-- <SELECT name="date">
											<option value="2013-12-18">2013-12-18</option>
											<option value="2013-12-19">2013-12-19</option>
											<option value="2013-12-20">2013-12-20</option>
											<option value="2013-12-21">2013-12-21</option>
										</SELECT > -->
									</td>


									 <th style="width:90px;">Select Class</th>
									<td>
											<select name="class">
											<option value="10th">10th</option>
											<option value="11th">11th</option>
											<option value="12th">12th</option>
											</select> 
									</td>
									
									<td><input type="submit" name="submit" value="GET ATTENDENCE" /></td>
								
							</tr>
							 <table align="center" cellpadding="12" cellspacing="12" border="3">
								<tr>
                                   <!--<th>ID</th>-->
									<th>Name</th>
									<th>Subject</th>
									<th>Time</th>

									<th>Date</th>
									<th>Status</th>
									<th>Parents Remark</th>
									<th>Teachers Remark</th> 
									<th></th>
									<th></th>
									
								</tr>
								
                              <?php foreach($res as $row){?>
								<tr>
								   <!-- <td><?php echo $row['id'];?></td>-->
									<td><?php echo $row['name'];?></td>
									<td><?php echo $row['subject'];?></td>
									<td><?php echo $row['time'];?></td>

									<td><?php echo $row['date'];?></td>
									<td><?php echo $row['status'];?></td>
									<td><?php echo $row['parents_remark'];?></td>
									<td><?php echo $row['teachers_remark'];?></td>
									<!--<th><a href="#" class="topopup">Edit</a></th>-->
									<th><a href="<?php echo base_url(); ?>index.php/welcome/edit_attandance_of_student/?id=<?php echo $row['id'];?>" >Edit</a></th>
									<!--<th><a href="<?php echo base_url(); ?>index.php/welcome/delete_attendence/?id=<?php echo $row['id'];?>" >Delete</a></th>-->
									
                                           <th><a onclick="return confirm('Are you sure you want to delete?')" href="http://localhost/parent_concern/index.php/welcome/delete_attendence/?id='<?php echo $row['id'];?>'">Delete</a></th>

								<?php } ?>
							</table>
						</table>
                    </form>
                        </td>
                     </tr>
                     
                </table>  <br/><br/>
            </div>
        </div>
    </div>
</section>
<div id="toPopup" style="height:200px; width:500px;"> 
    	
        <div class="close"></div>
       	<span class="ecs_tooltip">Press Esc to close <span class="arrow"></span></span>
		<div id="popup_content"> <!--your content start-->
          <table align="left" cellpadding="7" cellspacing="5">
		  <tr>
		  <th>Name:</th>
		  <td></td>
		  </tr>

		  <tr>
		  <th>Date</th>
		  <td></td>
		  </tr>

		  <tr>
		  <th>Status</th>
		  <td></td>
		  </tr>

		  <tr>
		  <th>Parents Remarks</th>
		  <td></td>
		  </tr>

		  <tr>
		  <th>Teachers Remarks</th>
		  <td></td>
		  </tr>


           
		  </table>
		  <br/><br/>
            <p align="right"><a href="#" class="livebox">close</a></p>
			<br/>
        </div> <!--your content end-->
    
    </div> <!--toPopup end-->

<!-- DatePicker JS -->
        <script type="text/javascript" src="<?php echo base_url();?>datepicker/datepickr.js"></script>
		<script type="text/javascript">
		new datepickr('datepick');
		</script>
<!-- DatePicker JS -->
<?php require_once("footer.inc.php");?>
</body>
</html>
