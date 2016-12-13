<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration Form using jQuery Ajax and PHP MySQL</title>
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen"> 

<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>

<script type="text/javascript" src="js/validation.min.js"></script>
<link href="css/main.css" rel="stylesheet" media="screen">

<script type="text/javascript">
$('document').ready(function()
{ 
	window.setTimeout(function(){
									
		window.location.href = "index.php";
										
	}, 6000);
	
	
	$("#back").click(function(){
		window.location.href = "index.php";
	});
});
</script>

</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Project name</a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
      </div>
</nav>
    
<div class="signin-form">

<div class="container">
    <div class='alert alert-success'>
		<button class='close' data-dismiss='alert'>&times;</button>
			<strong>Success!</strong>  Successfully Registered.
    </div>
    
    <button class="btn btn-primary" id="back">
      <span class="glyphicon glyphicon-backward"></span> &nbsp; back to main page
    </button>
    
</div>

</div>

</body>
</html>