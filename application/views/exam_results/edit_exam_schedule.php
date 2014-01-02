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
				<tr><th>Edit Examination Schedule</th></tr>
                	<tr>
					
                    	<td>
                        	<table align="center" cellpadding="4" cellspacing="5" border="0" width="100%">
                              
                             
							   <?php foreach($res as $row){?>
                                <form name="add_attendence" method="post" action="<?php echo base_url(); ?>index.php/welcome/edit_exam_schedule">
								<br/>
								<br/><br/><br/><br/>
								<input type="hidden" name="exam_schedule_id" value="<?php echo $row['id']; ?>" >
								
								 <tr>
                                	<th>Subject</th>
									<td><input type="text" name="subject" value="<?php echo $row['subject']; ?>" required></td>
                                </tr>

								<tr>
                                	<th>Class</th>
									<td><input type="text" name="class" value="<?php echo $row['class']; ?>" required></td>
                                </tr>

								<tr>
                                	<th>Date</th>
									<td><input id="datepick" name="date" value="<?php echo $row['date']; ?>" size="20" /></td>
                                </tr>

								<tr>
                                	<th>Time</th>
									<td><input type="date" name="time" value="<?php echo $row['time']; ?>" required></td>
                                </tr>


								<tr>
                                	<th>Exam Type</th>
									<td><input type="text" name="exam_type" value="<?php echo $row['exam_type']; ?>" required></td>

                                </tr>

								<tr>
                                	<th>Exam Mode</th>
									<td><input type="text" name="exam_mode" value="<?php echo $row['exam_mode']; ?>" required></td>

                                </tr>

								

								<?php }?>
								
								<tr>
								<td><input type="submit" name="submit" value="Edit"></td>
								</tr>
								</form>
								 <tr>
                                	<th></th>
									<td>
									   
									</td>
                                    
                                </tr>
                                
                                
                            </table>
                        </td>
                        
                     </tr>
                     <tr>
                     	<td><br/><br/><br/>	
						
                        	
                     
                </table>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript" src="<?php echo base_url();?>datepicker/datepickr.js"></script>
<script type="text/javascript">
new datepickr('datepick');
</script>

<?php require_once("footer.inc.php");?>
</body>
</html>
