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
                                	<th style="width:115px; ">School Name : </th>
                                    <th style="color:#FFFFFF;">Delhi Public School</td>
									 <td>&nbsp;</td>
                                    
                                </tr>
                                <tr>
                                	<th>Student Name : </th>
                                    <th style="color:#FFFFFF;">Test</td>
									 <td>&nbsp;</td>
                                    
                                </tr>
                                <tr>
                                	<th>Class : </th>
                                    <th style="color:#FFFFFF;">10th </td>
									<td>&nbsp;</td>
                                </tr>
                                <tr>
                                	<th>Faculty name : </th>
                                    <th style="color:#FFFFFF;">test125</td>
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
					  <!--<form name="gs_attendence" method="post" action="<?php echo base_url(); ?>index.php/welcome/get_attendence_student">
							<table>
                             <tr>
							
							<th>SELECT DATE</th>
							<td ><input type="text" name="cal_date" id="inputField" /></td>
							<td><input type="submit" name="submit" value="GET ATTENDENCE" /></td>
							
							 </tr>
							</table>
							</form>-->
                     <tr>

                     	<td>
						<br/><br/>
                        	<table align="center" cellpadding="12" cellspacing="12" border="3">
							  <form name="gs_attendence" method="post" action="<?php echo base_url(); ?>index.php/welcome/get_attendence_student">
							<tr>
							<th>SELECT DATE</th>
							<td><input id="datepick" name="cal_date" value="" size="20" /></td>
							<!--<td><input type="text" name="cal_date" id="inputField" /></td>-->
						     <td colspan="2"><input type="submit" name="submit" value="GET ATTENDENCE" /></td>
							
							</tr>
							</form>
                            	<tr>
								    <!--<th></th>-->
                                	<th>Date</th>
									<th>Time</th>
									<th>Subject</th>

                                    <th>Status</th>
									 <th>Parents Remark</th>
									  <th>Teachers Remark</th>
									  <td></td>
                                </tr>
								<?php foreach($res as $row){;?>
								<?php 
								//echo "<pre>";
								//print_r($res);?>
						<tr>
						<form name="insert_remark" method="post" action="<?php echo base_url(); ?>index.php/welcome/insert_parents_remark">
						   <!-- <td><input type="checkbox" name="stude_id" value="<?php echo $row['student_id']; ?>"></td>-->
							<input type="hidden" name="stud_id" value="<?php echo $row['id']; ?>" >
							<td><?php echo $row['date']; ?></td>
                           	<td><?php echo $row['time']; ?></td>
							<td><?php echo $row['subject']; ?></td>

							<td><?php echo $row['status']; ?></td>
							<td><input type="text" name="premark" value="<?php echo $row['parents_remark']; ?>"></td>
							<td><input type="text" name="tremark" value="<?php echo $row['teachers_remark']; ?>" readonly></td>
							<td><input type="submit" name="submit" value="Add Remark"></td>
							</form>
						<tr>
					<?php } ?>
                               
                            </table>
                        </td>
                     </tr>
                      <?php // echo $pagination; ?>
                </table><br/><br/>
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
