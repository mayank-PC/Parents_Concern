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
<!-- Bootstrap core CSS -->
<?php 	$this->load->helper('url');?>
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
                <div class="memberblock_logout"><img src="images/icon_logout.png" width="60" height="38" alt="logout" /></div>
          </div>
        </div>
    </div>
</header>
<section class="main-content container_bg">
	<div class="mainpageFixedBlock">
    	<div class="row">
        	<div class="col-xs-6 col-sm-3">

				<div>
				<table>
				<tr>
				<td>School Name:</td>
				<td>Cambridge</td>
				</tr>

				<tr>
				<td>Student Name:</td>
				<td>Mayank Agrawal</td>
				</tr>

				<tr>
				<td>Class:</td>
				<td>---STD</td>
				</tr>

				</table>
					<table border="1";>
						<tr>
							<th>Date</th>
							<th>Status</th>
						</tr>

						<?php foreach($res as $row){;?>
						<tr>
						
							<td><?php echo $row['date']; ?></td>
							<td><?php echo $row['status']; ?></td>
							
							
						<tr>
					<?php } ?>

					</table>
				</div>
			
            </div>
			

			


        </div>
    </div>
</section>
<?php require_once("footer.inc.php");?>
</body>
</html>
