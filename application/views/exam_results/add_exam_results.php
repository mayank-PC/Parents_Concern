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
                        	<table align="center" cellpadding="0" cellspacing="0" border="0" width="100%">
							
                            	<tr>
								 <td ><a style="color:#FFFFFF;"  href="<?php echo base_url(); ?>index.php/welcome/get_results_by_class">Get Exam Results</a><br/>
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
					 <th>Exam Schedule  Successfully</th>
					 </tr>
                     <?php }?>
                     <tr>
                     	<td>
						<br/><br/>

						<form name="add_timeTable" method="post" action="<?php echo base_url(); ?>index.php/welcome/get_students_list">
						<table cellpadding="0" cellspacing="0" border="0">
						
						<tr >
					
						<th>Select Class:</th>
							<td>
								<select name="class" >
									<option value="">Select Class</option>
									<option value="10th">10th</option>
									<option value="11th">11th</option>
									<option value="12th">12th</option>
								</select> 
							</td>
                          
						              <td>&nbsp;</td> <td>&nbsp;</td>

								  <th>Select Division:</th>

								<td>
									<select name="division">
									<option value="" >Select Division</option>
									<option value="A">A</option>
									<option value="B">B</option>
									<option value="C">C</option>
									<option value="D">D</option>
									<option value="E">E</option>
									</select> 
								</td>
								

								<td>
								<input type="submit" name="submit" value="Add Exam Results">
							</td>
						</tr>
						
			

				
					
						</table><br/><br/>
						</form>
			
                      

						<form name="exam_results" method="post" action="<?php echo base_url(); ?>index.php/welcome/insert_student_result">
						<?php if(isset($res)){ ?>
								<table cellpadding="8" cellspacing="8" border="3">
								<tr>
								<th colspan="5">
								Enter the exam results of class: <?php echo  get_cookie('class');?> - <?php echo  get_cookie('div') ;?>
								</th>
								</tr>
								<tr>
								<th> Select Subject:</th>
								<td>
								<select name="subject">
									<option value="" >Select Division</option>
									<option value="Maths">Maths</option>
									<option value="English">English</option>
									<option value="Science">Science</option>
									<option value="Drawing">Drawing</option>
									<option value="History">History</option>
									</select> 
								</td>
								<th>Exam Type:</th>
								<td>
								<select name="exam_type">
									<option value="" >Select Exam Type</option>
									<option value="Unite Test">Unite Test</option>
									<option value="Half Yearly Exam">Half Yearly Exam</option>
									<option value="Annual Exam">Annual Exam</option>
									
									</select> 
								</td>
								<!--<th>Class:</th>
								<td><?php echo  get_cookie('class');?> - <?php echo  get_cookie('div');?></td>-->
								
								</tr>

								<tr style="background-color:gray; color:white;">
									<td>Student Name</td>
									
									
									<td>Marks Out Of</td>
									<td>Marks Obtained</td>
									<td>Status</td>
									<!--<th>Grade</th>-->
								</tr>
								
								<?php foreach($res as $row){?>
								
								<tr>
								  
                                  <input type="hidden" name="student_id[]" value="<?php echo $row['student_id'];?>">
                             <td><a href="<?php echo base_url(); ?>index.php/welcome/insert_one_student_result/?student_id='<?php echo $row['student_id'];?>'&class='<?php echo $row['class'];?>'&div='<?php echo $row['division'];?>'"><?php echo $row['firstname']; ?></a></td>

								

								

								<td><input type="text" name="marks_out_of[]"></td>
								<td><input type="text" name="marks_obtained[]" ></td>
								<td><input type="text" name="status[]" ></td>

							
								<!--<td><a href="<?php echo base_url(); ?>index.php/welcome/insert_student_result/?student_id='<?php echo $row['student_id'];?>'">Add Result</a></td>-->
								<!--<td><?php echo $row['grade'];?></td>-->
								</tr>
								
                                 <?php } ?>
								<tr>
									<td colspan="3"><input type="submit" name="submit" value="Add Results"></td>
								</tr>
								</table>
								<?php }?>

						</form>


					
						<!--<a href="<?php echo base_url(); ?>index.php/welcome/uplode_csv">Upload CSV</a>-->
               
                        </td>
                     </tr>
                     
                </table>
				<br/><br/>
            </div>
        </div>
    </div>
</section>
 <div id="toPopup"> 
    	
        <div class="close"></div>
       	<span class="ecs_tooltip">Press Esc to close <span class="arrow"></span></span>
		<div id="popup_content"> <!--your content start-->

		<form name="exam_results_student" method="post" action="<?php echo base_url(); ?>index.php/welcome/insert_one_student_result">
		<table cellpadding="12" cellspacing="12" border="1">
         
       
          <table align="center" cellpadding="12" cellspacing="12" border="1">
          <tr style="background-color:gray; color:white;">
			<td></td>
			<td>Marks Out Of</td>
			<td>Marks Obtained</td>
			<td>Status</td>
		  </tr>

		  <tr>
			<td>Maths</td>
			<td><input type="text" name="marks_out_of"></td>
			<td><input type="text" name="marks_obtained"></td>
			<td><input type="text" name="status"></td>
			
		  </tr>

            <tr>
			<td >English</td>
			<td><input type="text" name="marks_out_of"></td>
			<td><input type="text" name="marks_obtained"></td>
			<td><input type="text" name="status"></td>
			</tr>

		   <tr>
			<td >Science</td>
			<td><input type="text" name="marks_out_of"></td>
			<td><input type="text" name="marks_obtained"></td>
			<td><input type="text" name="status"></td>
		 </tr>

		   <tr>
			<td >History</td>
			<td><input type="text" name="marks_out_of"></td>
			<td><input type="text" name="marks_obtained"></td>
			<td><input type="text" name="status"></td>
		</tr>

		   <tr>
			<td>Drawing</td>
			<td><input type="text" name="marks_out_of"></td>
			<td><input type="text" name="marks_obtained"></td>
			<td><input type="text" name="status"></td>
		  </tr>

		   <tr>
			<td colspan="4"><input type="submit" name="submit" value="Add"></td>
			
		  </tr>
		 
		</table>
		</form>

                      <!-- <p align="center"><a href="#" class="livebox">Click Here Trigger</a></p>-->
        </div> <!--your content end-->
    
    </div> <!--toPopup end-->
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
