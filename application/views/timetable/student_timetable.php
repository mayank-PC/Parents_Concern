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
                              <tr>
                                	 <td>&nbsp;</td>
									  <td>&nbsp;</td>
									   <td>&nbsp;</td>
                                </tr><br/><br/><br/>
                                		
                            </table>
					
                        </td>
                        
                     </tr>
					 <form name="add_timeTable" method="post" action="<?php echo base_url(); ?>index.php/welcome/timetable_by_class_date">
					 <table>
                      <tr>
					   <th>Date:</th>  
					  	<td><input id="datepick" name="date" value="" size="20" /></td>
                        <td>&nbsp;</td>

                       <th>Class:</th>  
					   <td>
						<select name="class">
							<option value="">Select Class</option>
							<option value="10th">10th</option>
							<option value="11th">11th</option>
							<option value="12th">12th</option>
						</select> 
					   </td> 
					     <td>&nbsp;</td>


                         <th>Div:</th>  
					   <td>
						<select name="division">
							<option value="">Select Division</option>
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="C">C</option>
							<option value="D">D</option>
							<option value="E">E</option>
							<option value="F">F</option>
						</select> 
					  </td>
					    <td>&nbsp;</td>
					  <td><input type="submit" name="submit" value="Get TimeTable"></td>
					   

					  </tr>
					 </table><br/>
					 </form>

					<table cellpadding="2" cellspacing="7" >
						<tr>
							<th>Student Name:</th>
							<td>Test</td>
                            <td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<th>Class:</th>

							<td><?php echo $res[0]['class'];?>-<?php echo $res[0]['division'];?></td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
                            <th>Day & Date:</th><td>&nbsp;</td>
							<td><?php echo $res[0]['date'];?> <?php echo $weekday = date('l', strtotime($res[0]['date']));  ?></td>

						</tr>
					</table><br/>




					

					 <table align="center" cellpadding="25" cellspacing="25" border="3">
                     <tr>
					
					 
					 <th>Time</th>
					  <th>Subject</th>
					   <th>Topic</th>
					    <th>Activity</th>
						 <th>Faculty</th>
					 </tr>
					
					  <?php foreach($res as $row){?>
					<tr>
				
						
						<td><?php echo $row['time'];?></td>
						<td><?php echo $row['subject'];?></td>
						<td><?php echo $row['topic'];?></td>
						<td><?php echo $row['activity_type'];?></td>
						<td><?php echo $row['faculty'];?></td>
					</tr>
					  <?php } ?>
					 </table><br/><br/>
                    </form>
                        </td>
                     </tr>
                     
                </table>
				
				<!--<table cellpadding="15" cellspacing="15" border="3">
               <tr>
			        <th>Time</th>
					<th>Subject</th>
					<th>2013-12-24</th>
					<th >2013-12-25</th>
					<th>2013-12-26</th>
					<th>2013-12-27</th>
					<th>2013-12-28</th>
					<th>2013-12-29</th>
			   </tr>
			     <tr>
			      <th>9:00 am to 10:00 am</th> 
				  <th>ENGLISH</th> 
				</tr>

				 <tr>
			      <th>10:00 am to 11:00 am</th> 
				  <th>MATHS</th> 
				</tr>

				 <tr>
			      <th>11:00 am to 12:00 pm</th> 
				 <th>SCIENCE</th> 
				</tr>

				 <tr>
			      <th>12:00 pm to 1:00 pm</th> 
				 <th>HISTORY</th> 
				</tr>

				 <tr>
			      <th>9:00 am to 10:00 am</th> 
				  <th>DRAWING</th> 
				</tr>

				 <tr>
			      <th>9:00 am to 10:00 am</th> 
				  <th>PHYSICS</th> 
				</tr>
				</table>-->
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
