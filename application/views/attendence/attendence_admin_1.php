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

    <!-- Tab Scrript and CSS -->
    <link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/default/easyui.css">
	<link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/icon.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.1.min.js"></script>
	<script type="text/javascript" src="http://www.jeasyui.com/easyui/jquery.easyui.min.js"></script>
	<!-- Tab Scrript and CSS -->


<!-- Bootstrap core CSS -->
<link href="<?php echo base_url();?>dist/css/bootstrap.css" rel="stylesheet">
<!-- Bootstrap theme -->
<link href="<?php echo base_url();?>dist/css/bootstrap-theme.min.css" rel="stylesheet">
 <!-- Custom styles for this template -->

<!-- DatePicker CSS -->
<link href="<?php echo base_url();?>datepicker/datepicker.css" rel="stylesheet">
<!-- DatePicker CSS -->

<!--Notification - CSS-->



<!--Notification - CSS-->






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
<div class="memberblock_logout"><a href="<?php echo base_url(); ?>index.php/events/index">EVENTS</a></div>
				 
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
								 <td ><a style="color:#FFFFFF;"  href="<?php echo base_url(); ?>index.php/welcome/display_add_attendence_page">ADD ATTENDANCE</a><br/>
								 <a style="color:#FFFFFF;"  href="<?php echo base_url(); ?>index.php/welcome/display_add_student_page">ADD STUDENT</a><br/></td>
                                	
									 
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


					

						<form name="" method="post" action="<?php echo base_url(); ?>index.php/welcome/display_attendence_class_date">
                        <table align="center" cellpadding="7" cellspacing="5" border="0" width="100%">
							<tr>
                                <th style="width:90px;">Select Date</th>
									<td>
										<input id="datepick" name="date" value="" size="20" />
									  <!-- <SELECT name="date">
									   <option value="">Select Date</option>
											<option value="2013-12-18">2013-12-18</option>
											<option value="2013-12-19">2013-12-19</option>
											<option value="2013-12-20">2013-12-20</option>
											<option value="2013-12-21">2013-12-21</option>
										</SELECT > -->
									</td>


									 <th style="width:90px;">Select Class</th>
									<td>
											<select name="class">
											<option value="">Select Class</option>
											<option value="10th">10th</option>
											<option value="11th">11th</option>
											<option value="12th">12th</option>
											</select> 
									</td>
									
									<td><input type="submit" name="submit" value="GET ATTENDENCE" /></td>
								
							</tr>
							
						</table>
						<a href="<?php echo base_url(); ?>index.php/welcome/uplode_csv">Upload CSV</a>
                    </form>
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
