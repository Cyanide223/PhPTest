<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Registration Form using jQuery Ajax and PHP MySQL</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
            <link href="css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
                <script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>

                <script type="text/javascript" src="js/validation.min.js"></script>
                <style>
                    body {
                        padding-top: 50px;
                        padding-bottom: 20px;
                    }
                </style>
                <link rel="stylesheet" href="css/main.css">

                    <script type="text/javascript" src="js/signupscript.js"></script>

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
                                    <a class="navbar-brand" href="index.html">Project name</a>
                                </div>

                            </div>
                        </nav>

                        <div class="signin-form">

                            <div class="container">


                                <form class="form-signin" method="post" id="register-form">

                                    <h2 class="form-signin-heading">Sign Up</h2><hr />

                                    <div id="error">
                                        <!-- error will be shown here ! -->
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Username" name="user_name" id="user_name" />
                                    </div>

                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email address" name="user_email" id="user_email" />
                                        <span id="check-e"></span>
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password" id="password" />
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Retype Password" name="cpassword" id="cpassword" />
                                    </div>
                                    <hr />

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-default" name="btn-save" id="btn-submit">
                                            <span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account
                                        </button> 
                                    </div>  

                                </form>

                            </div>

                        </div>

                        <script src="js/vendor/bootstrap.min.js"></script>

                    </body>
                    </html>
