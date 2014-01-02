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
							
                            	<tr>
								 <td ><a style="color:#FFFFFF;"  href="<?php echo base_url(); ?>index.php/welcome/add_exam_schedule">ADD Exam Schedule</a><br/>
								</td>
                                	
									 
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
					 <?php 
					 //echo"<pre>";
					// print_r($res);?>
                      <?php if(!empty($success_message)){  ?>
					 <tr>
					 <th>Time Table Added Successfully</th>
					 </tr>
                     <?php }?>
                     <tr>
                     	<td>
						
						<form name="add_timeTable" method="post" action="<?php echo base_url(); ?>index.php/welcome/show_exam_schedule">
						<table cellpadding="5" cellspacing="5" border="0">
						
						<tr >
						<!--<th>Date:</th>
						<td><input id="datepick" name="date" value="" size="20" /></td>-->

						
						
						<th>Class:</th>
							<td>
								<select name="class">
									<option value="">Select Class</option>
									<option value="10th">10th</option>
									<option value="11th">11th</option>
									<option value="12th">12th</option>
								</select> 
							</td>
								<td>
								<input type="submit" name="submit" value="Get Exam Schedule">
							</td>
						</tr><br/>
						
				
					
						</table>

						
						</form>
                            <br/><br/>
                             <table cellpadding="12" cellspacing="12" border="3">
							 <!--<tr>
							 <th>Class:</th>
							
							
							  <td><?php echo $res[0]['class'];?></td>
							  
							 </tr>-->
							 <tr style="background-color:gray; color:white;">
								
								<th>Subject</th>
								<th>Class</th>
								<th>Date</th>
								<th>Day</th>

								<th>Time</th>
								<th>Exam Type</th>
								<th>Exam Mode</th>
								<th></th>
								<th></th>
								
							</tr>
                              <?php foreach($res as $row){?>
							 <tr>
							 
								<td><?php echo $row['subject'];?></td>
								<td><?php echo $row['class'];?> </td>
								<td><?php echo $row['date'];?> </td>
								
								<td><?php  $row['date'];?> <?php echo $weekday = date('l', strtotime($row['date']));  ?></td>
								<td><?php echo $row['time'];?></td>
								<td><?php echo $row['exam_type'];?></td>
								<td><?php echo $row['exam_mode'];?></td>
								<td><a href="<?php echo base_url(); ?>index.php/welcome/edit_exam_schedule/?id='<?php echo $row['id'];?>'">Edit</a></td>
								<td>
							
								<a onclick="return confirm('Are you sure you want to delete?')" href="http://localhost/parent_concern/index.php/welcome/delete_exam_schedule/?id='<?php echo $row['id'];?>'">Delete</a></td>
							</tr>
                         <?php }?>
                           </table>
					

                         


						<!--<table cellpadding="7" cellspacing="5" border="0">
                        <tr>
						<th>Day</th>
						<th>Date</th>
						<th>Subject</th>
						<th>Topic</th>
						<th>Status</th>
						</tr>
                       <?php foreach($res as $row){ ?>
						<tr>
						<td><?php echo $row['day']; ?></td>
						<td><?php echo $row['date']; ?></td>
						<td><?php echo $row['subject']; ?></td>
						<td><?php echo $row['topic']; ?></td>
						<td><?php echo $row['status']; ?></td>
						</tr>
						<?php } ?>
						</table>-->
						<a href="<?php echo base_url(); ?>index.php/welcome/uplode_csv">Upload CSV</a>
               
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
