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
<link href="dist/css/bootstrap.css" rel="stylesheet">
<!-- Bootstrap theme -->
<link href="dist/css/bootstrap-theme.min.css" rel="stylesheet">
 <!-- Custom styles for this template -->
<link href="dist/css/login.css" rel="stylesheet" type="text/css"/>

<!-- Just for debugging purposes. Don't actually copy this line! -->
<!--[if lt IE 9]><script src="docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
</head>
<body>

<section class="formpage_block">
	<div class="formpage_block_logo">
    <img src="images/logoLogin.png" width="258" height="176" alt="logo"> </div>
  <div class="formpage_block_bg">
  	<form action="" method="post" enctype="multipart/form-data">
    	<div class="formcontainer_block">
    	<div>
        	<div class="formcontainer_block_row formcontainer_txt"><strong>Username</strong></div>
            <div class="formcontainer_block_row">
            	<div class="formcontainer_block_username">
                	<input name="" type="text">
                </div>
            </div>
            <div class="formcontainer_block_row formcontainer_txt"><strong>Password</strong></div>
            <div class="formcontainer_block_row">
            	<div class="formcontainer_block_password">
                	<input name="" type="text">
                </div>
            </div>
            <div class="formcontainer_block_row">&nbsp;</div>
            <div class="formcontainer_block_row txt_center">
       	    	<input type="image" src="images/btn_login.png" />
            </div>
            
            <div class="formcontainer_block_row formcontainer_link txt_center">
            	<a href="#">Forgot Password?</a> | <a href="#">New User</a>
            </div>
            <div class="formcontainer_block_row"></div>
        </div>
    </div>
    </form>
  </div>
</section>
<?php require_once("footer.inc.php");?>
</body>
</html>
