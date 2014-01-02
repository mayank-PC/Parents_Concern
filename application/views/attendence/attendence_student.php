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
            <!--<div class="col-xs-6 col-sm-m-3">-->
        	<div>
            	<table align="center" cellpadding="8" cellspacing="8" border="0">
                	<tr>
					<td><img src="<?php echo base_url();?>uploads/Lighthouse.jpg" width="160" height="120" alt="profile pic"  /></td>
                    	<td>
                        	<table align="center" cellpadding="0" cellspacing="0" border="0" width="100%">
                            	<tr>
                                	<th>School Name : </th>
                                    <td>test</td>
                                </tr>
                                <tr>
                                	<th>Student Name  </th>
                                    <td>Cambridge</td>
                                </tr>
                                <tr>
                                	<th>Class : </th>
                                    <td>10th </td>
                                </tr>
                                <tr>
                                	<th>Faculty name : </th>
                                    <td>test</td>
                                </tr>   
                            </table>
                        </td>
                    
                     </tr>
					
					 
					
					 <!--<tr>
                      <td>
					   <form name="g_attendence" method="post" action="<?php echo base_url(); ?>index.php/welcome/get_attendence">
							<table>
                             <tr>
							
							<th>SELECT DATE</th>
							<td ><input type="text" name="cal_date" id="inputField"/></td>
							<td><input type="submit" name="submit" value="GET ATTENDENCE" /></td>
							
							 </tr>
							</table>
							</form>
							</td>
                    
					 </tr>-->
                     <tr>


					  
						<!--<tr>
						<form name="gst_attendence" method="post" action="<?php echo base_url(); ?>index.php/welcome/get_student_attendence_date">
							<th style="width:50px;">SELECT DATE</th>
							<td><input id="datepick" name="cal_date" value="" size="20" /></td>-->
							<!--<td><input type="text" name="cal_date" id="inputField" /></td>-->
						  <!--   <td colspan="2"><input type="submit" name="submit" value="GET ATTENDENCE" /></td>
						</form>
						</tr>-->
						
                    
                     	<td>
                        	<table align="center" cellpadding="12" cellspacing="12" border="3">
						
                            	<tr style="background-color:gray; color:white;">
									<th>Date</th>
									<th>Status</th>
									<th>Parents Remark</th>
									<th>Teachers Remark</th>
                                </tr>
								<?php foreach($res as $row){;?>
						<tr>
						    <td><?php echo $row['date']; ?></td>
							<td><?php echo $row['status']; ?></td>
							<td><?php echo $row['parents_remark']; ?></td>
							<td><?php echo $row['teachers_remark']; ?></td>
						</tr>
						
					<?php } ?>
                               
                            </table>
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
