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
								
								</td>
								<?php if(!empty($res)){ ?>
								<th><a href="<?php echo base_url(); ?>index.php/welcome/get_ranks_in_class/?id= <?php echo $res[0]['student_id'];?>&class=<?php echo $res[0]['class'];?>&division=<?php echo $res[0]['division'];?>&exam_type=<?php echo $res[0]['exam_type'];?>">Check Position In Class</a></th>
								<?php }?>
                                	
									 
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
                     	<td></br/><br/>
						<form name="exam_results_by_exam_type" method="post" action="<?php echo base_url(); ?>index.php/welcome/exam_results_by_exam_type">
                           <table cellpadding="12" cellspacing="12" border="0">
                            <tr>
                               <td>Exam Type:</td>
							   <td>
							   <select name="exam_type">
								<option value="" >Select Exam Type</option>
								<option value="Unite Test">Unite Test</option>
								<option value="Quaterly Exam">Quaterly Exam</option>
								<option value="Half Yearly Exam">Half Yearly Exam</option>
								<option value="Annual Exam">Annual Exam</option>
								<option value="Semister Exam">Semister Exam</option>
								</select> 
							   </td>
							   <td><input type="submit" name="submit" value="Get Results By Exam Type"></td>
							</tr>
						   </table>
						   </form>
                          
                         <?php if(!empty($res)){?>
						<table  cellpadding="12" cellspacing="12" border="0">
                         <tr>
						 <th>Student Name:</th><td>Mayank </td>
                         <td>&nbsp;</td><td>&nbsp;</td>
						 </tr>

						 <tr>
						 <th>Class :</th><td>10th - A</td>
						  <td>&nbsp;</td><td>&nbsp;</td>
						  </tr>
						  <tr>
						<th>Exam Type:</th> <td><?php echo $res[0]['exam_type'];?></td>
						 <td>&nbsp;</td><td>&nbsp;</td>
						</tr>
						 </tr>
						</table>
						
						
                             <table cellpadding="8" cellspacing="8" border="2" >
							
							 <tr style="background-color:gray; color:white;">
								
								<th>Subject</th>
								<th>Marks Out Of</th>
								<th>Marks Obtained</th>
								<th>Status</th>
								<th>Percentage</th>

								<!--<th>Time</th>
								<th>Exam Type</th>
								<th>Exam Mode</th>-->
								
								
							</tr>
							<?php //echo"<pre>";
							//print_r($res);
							//count($res);
							
							?>
                          <?php
						  $total['marks_out_of'] = "0";
						  $total['marks_obtained'] = "0";
						  foreach($res as $row){?>
							 <tr>
								<td><?php echo $row['subject'];?> </td>
								<td><?php echo $row['marks_out_of'];?></td>
                                  
								<td><?php echo $row['marks_obtained'];?></td>
						    </tr>
							    
							 <?php
							  $total['marks_out_of'] += $row['marks_out_of'] ;
							  $total['marks_obtained'] += $row['marks_obtained'] ;
							 }?>
							 <tr style="background-color:gray; color:white;">
							 <td>Total</td>
							  <td>  <?php echo $total['marks_out_of']; ?></td>
						
							  <td>  <?php echo $total['marks_obtained']; ?></td>
							  <td>Pass</td>
							  <th> <?php 

                                  echo $percentage = (  $total['marks_obtained']/ $total['marks_out_of']) * 100;
                                   echo "%";
                               ?></th>
							 </tr>
                       
                           </table>
					<?php }?>

                         


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
