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
				
				<tr><th>ADD STUDENT</th></tr>
                	<tr>
					
                    	<td>
                        	<table align="center" cellpadding="4" cellspacing="5" border="0" width="100%">
                              
                               
                                <form name="add_attendence" method="post" action="<?php echo base_url(); ?>index.php/welcome/add_student">
								<br/>
								<br/><br/><br/><br/>
								 <tr>
                                	<th>First Name</th>
									<td><input type="text" name="firstname" value="" required></td>
                                </tr>

								<tr>
                                	<th>Middle Name</th>
									<td><input type="text" name="middlename" value=""></td>
                                </tr>

								<tr>
                                	<th>Last Name</th>
									<td><input type="text" name="lastname" value=""></td>
                                </tr>

								<tr>
                                	<th>Class</th>
									<td><input type="text" name="class" value=""></td>

                                </tr>

								<tr>
                                	<th>Admition No</th>
									<td><input type="number" size="6" name="adm_no" min="18" max="99" value="" required></td>
									
                                </tr>

									<tr>
                                	<th>Admition Date</th>
									<td><input type="text" name="adm_date" value=""></td>
                                </tr>

								<tr>
                                	<th>Blood Group</th>
									<td><input type="text" name="blood_group" value=""></td>
                                </tr>

								<tr>
                                	<th>Gender</th>
									<td><input type="text" name="gender" value=""></td>
                                </tr>

								<tr>
                                	<th>Nationality</th>
									<td><input type="text" name="nationality" value=""></td>
                                </tr>

								<tr>
                                	<th>Address</th>
									<td><input type="text" name="address" value=""></td>
                                </tr>

								<tr>
                                	<th>Mobile</th>
									<td><input type="text" name="mobile" value=""></td>
                                </tr>

								<tr>
                                	<th>Fathers Nmae</th>
									<td><input type="text" name="fathersname" value=""></td>
                                </tr>

								<tr>
                                	<th>Mothers name</th>
									<td><input type="text" name="mothersname" value=""></td>
                                </tr>

								<tr>
                                	<th>Faculty_name</th>
									<td><input type="text" name="facultyname" value=""></td>
                                </tr>

								<tr>
                                	<th>School Name</th>
									<td><input type="text" name="schoolname" value=""></td>
                                </tr>

								
								<tr>
								<td><input type="submit" name="submit" value="Add Attendence"></td>
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
<?php require_once("footer.inc.php");?>
</body>
</html>
