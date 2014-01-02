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

<!--Notification - CSS-->

<style>

.noti_Container {
    position:relative;
    border:1px solid blue; /* This is just to show you where the container ends */
    width:16px;
    height:16px;
	cursor: pointer;
}
.noti_bubble {
    position:absolute;
    top: -8px;
    right:-6px;
    padding-right:2px;
    background-color:red;
    color:white;
    font-weight:bold;
    font-size:0.80em;
    
    border-radius:2px;
    box-shadow:1px 1px 1px gray;
}
</style>

<!--Notification - CSS-->


<!--Notification - JS-->
<script>
function f1()
{
document.getElementById("n1").style.visibility='hidden';
}
</script>
<!--Notification - JS-->



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
				<!-- <div class="memberblock_logout"><div class="noti_Container" onclick="return f1();">
<img src="<?php echo base_url();?>images/notification.png" width="30" height="30" style="border:none;"/>
<div class="noti_bubble" id="n1">5</div>
</div></div>-->

				 
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
							  
							  <?php foreach($res as $row){?>

                            	<tr>
								<th>Student Name:</th>
							    <td><?php echo $row['firstname'];?></td>
                                <td>&nbsp;</td>
                                </tr>
								<tr>
								<th>Class:</th>
							    <td><?php echo $row['class'];?>  -  <?php echo $row['division'];?></td>
                                <td>&nbsp;</td>
                                </tr>
								 <input type="hidden" name="student_id" value="<?php echo $row['student_id'];?>">
							 <input type="hidden" name="class" value="<?php echo $row['class'];?>">
							  <input type="hidden" name="division" value="<?php echo $row['division'];?>">
                           
								<?php } ?>
							

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
					
					   <form name="exam_results_student" method="post" action="<?php echo base_url(); ?>index.php/welcome/insert_one_student_result1">
						<table cellpadding="12" cellspacing="12" border="1">
						 
					   
						  <table align="center" cellpadding="12" cellspacing="12" border="1">
						  
						  <tr style="background-color:gray; color:white;">
							<td></td>
							<td>Marks Out Of</td>
							<td>Marks Obtained</td>
							<td>Status</td>
						  </tr>
						  <tr>
						  <td colspan="0">Select Exam Type:</td>
						  <td colspan="3">
								<select name="exam_type">
								<option value="" >Select Exam Type</option>
								<option value="Unite Test">Unite Test</option>
								<option value="Half Yearly Exam">Half Yearly Exam</option>
								<option value="Annual Exam">Annual Exam</option>
								</select> 
                           </td>
						  </tr>

						  <tr>
							<td>Maths</td>
							<td><input type="text" name="marks_out_of1"></td>
							<td><input type="text" name="marks_obtained1"></td>
							<td><input type="text" name="status"></td>
							
						  </tr>

							<tr>
							<td >English</td>
							<td><input type="text" name="marks_out_of2"></td>
							<td><input type="text" name="marks_obtained2"></td>
							<td><input type="text" name="status2"></td>
							</tr>

						   <tr>
							<td >Science</td>
							<td><input type="text" name="marks_out_of3"></td>
							<td><input type="text" name="marks_obtained3"></td>
							<td><input type="text" name="status3"></td>
						 </tr>

						   <tr>
							<td >History</td>
							<td><input type="text" name="marks_out_of4"></td>
							<td><input type="text" name="marks_obtained4"></td>
							<td><input type="text" name="status4"></td>
						</tr>

						   <tr>
							<td>Drawing</td>
							<td><input type="text" name="marks_out_of5"></td>
							<td><input type="text" name="marks_obtained5"></td>
							<td><input type="text" name="status5"></td>
						  </tr>

						   <tr>
							<td colspan="4"><input type="submit" name="submit" value="Add"></td>
							
						  </tr>
						 
						</table>
						</form>

			
                        </td>
                     </tr>
                     
                </table>
				<br/><br/>
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
