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
<script type="text/JavaScript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"> </script>
<script type="text/javascript" src="<?php echo base_url();?>js/script.js"></script>
<!-- Pop Up JS -->



<!-- Ajax Popup -->
<script type="text/JavaScript">
$(function() {
    $("#buttonId").click(function() {
        $("#divToUpdate").load("http://localhost/parent_concern/ajax.php/?id='11'");
    });
});
</script>
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
								 <!--<td ><a style="color:#FFFFFF;"  href="<?php echo base_url(); ?>index.php/welcome/get_results_by_class">Get Exam Results</a><br/>-->
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
					
                     <tr>
                     	<td>
						<br/><br/>
                        <form name="add_timeTable" method="post" action="<?php echo base_url(); ?>index.php/welcome/display_message">
						<table cellpadding="12" cellspacing="12" border="0">
                               <tr>
							   <th>Class</th>
									<td>
										<select name="class">
											<option value="">Select Class</option>
											<option value="10th">10th</option>
											<option value="11th">11th</option>
											<option value="12th">12th</option>
										</select> 
									</td>

								<th>Division</th>
									<td>
										<select name="division">
											<option value="">Select Division</option>
											<option value="A">A</option>
											<option value="B">B</option>
											<option value="C">C</option>
										</select> 
									</td>
									<td colspan="1" align="right"><input type="submit" name="submit" value="Get List"></td>
							   </tr>

						</table>
						<br/>
						<form>
						<table>
                        <tr>
                           <td> Message</td>
						   <td><textarea size="120" row="5"></textarea></td>
						</tr>
						</table>

						<table cellpadding="12" cellspacing="12" border="3">
						<tr>
						
                        </tr>
                              <tr>
							  <td><input type="checkbox" name="student_id"></td>
							  <th>Student Name</th>
							  <th>Gardians Name</th>
							  
							  
							  <th>Send Message</th>
							  </tr>
                              
							  <?php foreach($res as $row){?>
							   <tr>
							     <td><input type="checkbox" name="student_id" value="<?php echo $row['student_id'];?>"></td>
							  <td><?php echo $row['firstname'];?> <?php echo $row['middlename'];?> <?php echo $row['lastname'];?></td>
							  <td><?php echo $row['father_name'];?></td>
							   <!--<td colspan="4">
						       <div id="divToUpdate"></div>
						       </td>-->
							  
							  <td><a href="#" class="topopup" >Click Here to Send Message</a>	</td>
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