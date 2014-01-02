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

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>
<?php //echo base_url();?>

<!-- Script for ajax -->


<?php 	$this->load->helper('url');?>
<!-- Bootstrap core CSS -->
<link href="<?php echo base_url();?>dist/css/bootstrap.css" rel="stylesheet">
<!-- Bootstrap theme -->
<link href="<?php echo base_url();?>dist/css/bootstrap-theme.min.css" rel="stylesheet">
 <!-- Custom styles for this template -->

<!-- DatePicker CSS -->
<link href="<?php echo base_url();?>datepicker/datepicker.css" rel="stylesheet">
<!-- DatePicker CSS -->

<!-- Pop Up CSS -->
<link href="<?php echo base_url();?>style/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Pop Up CSS -->

<!-- Pop Up JS -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"> </script>
<script type="text/javascript" src="<?php echo base_url();?>js/script.js"></script>
<!-- Pop Up JS -->

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
						<div id ="show" ></div>
                        	<table align="center" cellpadding="0" cellspacing="0" border="0" width="100%">
							
                            	<tr>
								<!-- <td ><a style="color:#FFFFFF;"  href="<?php echo base_url(); ?>index.php/welcome/add_exam_schedule">ADD Exam Schedule</a><br/>
								</td>-->
                                	
									 
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
						<br/><br/>
                          <table cellpadding="12" cellspacing="12" border="3">
                          <tr style="background-color:gray; color:white;">
                              <th>Name:</th>
							  <th>Marks Out Of</th>
							  <th>Marks Obtained</th>
							   <th>Percentage(%)</th>
							  <th>Status</th>
							 
							     <th>Grade</th>
								   <th>Detailed View</th>
						  </tr>
						  <?php  $count = count($res);?>
                             <?php foreach($res as $row){?>
						  <tr>
                              <td><?php echo $row['firstname'];?><?php echo $row['middlename'];?><?php echo $row['lastname'];?></td>
							  <td><?php echo $row['mof'];?></td>
							  <td><?php echo $row['mo'];?></td>
							  <td><?php   echo $percentage = (  $row['mo']/ $row['mof']) * 100; ;
						
							  ?> % </td>
							   <td><?php echo $row['status'];?></td>
							   
							 <td>
							 <?php if($percentage >= '90')
							       {
								  echo "A+";
								   }else if($percentage >=80 AND $percentage <=90 )
									 {
									   echo "A";
									 }
									   else if($percentage >=70 AND $percentage <=80 )
									 {
									    echo "B+";
									 }
									 else if($percentage >=60 AND $percentage <=70 )
									 {
									    echo "C+";
									 }
									 else if($percentage >=50 AND $percentage <=60 )
									 {
									    echo "C";
									 }
									  else if($percentage < 50 )
									 {
									    echo "D";
									 }
							 
							 ?>  
							 
							 
							
							 </td>
							   
                                 
								    <td><a onclick="#" >Detailed View</a></td>

						  </tr>
						  <?php }?>
						  </table>
						
			
                      

						
						<!--<a href="<?php echo base_url(); ?>index.php/welcome/uplode_csv">Upload CSV</a>-->
               
                        </td>
                     </tr>
                     
                </table>
				<br/><br/>
            </div>
        </div>
    </div>
</section>
<input type="button" name="#result_student" id="#result_student">
 
<!-- DatePicker JS -->
        <script type="text/javascript" src="<?php echo base_url();?>datepicker/datepickr.js"></script>
		<script type="text/javascript">
		new datepickr('datepick');
		</script>

		 <script type="text/javascript" src="<?php echo base_url();?>datepicker/datepickr.js"></script>
		<script type="text/javascript">
		new datepickr('datepick1');
		</script>
<!-- DatePicker JS -->



<?php require_once("footer.inc.php");?>
</body>
</html>
