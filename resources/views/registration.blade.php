<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap Login &amp; Register Templates</title>

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">

		<!-- CSS

		<link rel="stylesheet" href="/css/registration/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="/css/regrsitation/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="/css/regsitration/form-elements.css">
		<link rel="stylesheet" href="/css/registration/css/style.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- Favicon and touch icons
		<link rel="shortcut icon" href="assets/ico/favicon.png">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/css/registration/ico/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/css/registration/ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/css/registration/ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="/css/registration/apple-touch-icon-57-precomposed.png">  -->


		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!--<link href="css/bootstrap.min.css" rel="stylesheet">  -->
		<link rel="stylesheet" href="/css/registration/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="/css/registration/css/form-elements.css">
		<link rel="stylesheet" href="/css/registration/css/style.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- Favicon and touch icons -->
		<link rel="shortcut icon" href="assets/ico/favicon.png">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/css/registration/ico/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/css/registration/ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/css/registration/ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="/css/registration/ico/apple-touch-icon-57-precomposed.png">


		<style>

			body{
				background:white;
				overflow-x:hidden;
				overflow-y:hidden;
			}

			.form-box{
				padding-bottom: 250px;
			}


			.container{
				text-align: center;
				width: 1200px;
				overflow: hidden;
			}


			.col-md-6{
			}

		</style>


	</head>

    <body>

	<div class="container">

                    <div class="row">

                        <div class="col-md-offset-3 col-md-6">
                        	
                        	<div class="form-box">
                        		<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Sign up now</h3>
	                            		<p>Fill in the form below to get instant access:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-pencil"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" action="/userprofile" method="post" class="registration-form">
										{{csrf_field()}}
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-first-name">First name</label>
				                        	<input type="text" name="firstname" placeholder="First name..." class="form-first-name form-control" id="form-first-name" required>
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-last-name">Last name</label>
				                        	<input type="text" name="lastname" placeholder="Last name..." class="form-last-name form-control" id="form-last-name" required>
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-email">Email</label>
				                        	<input type="text" name="email" placeholder="Email..." class="form-email form-control" id="form-email" required>
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-about-yourself">Password</label>
											<input type="password" name="password" placeholder="Enter password" class=" form-control" id="password" required>

										</div>
										<div class="form-group">
											<label class="sr-only" for="form-about-yourself">Confirm Password</label>
											<input type="password" name="password_confirmation" placeholder="Confirm password" class=" form-control" id="confirmpassword" required>

										</div>
				                        <button type="submit" class="btn">Sign me up!</button>
										@include('layout.errors')
				                    </form>
			                    </div>
                        	</div>
                        	
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>



        <!-- Javascript -->
        <script src="/css/assets/js/jquery-1.11.1.min.js"></script>
        <script src="/css/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="/css/assets/js/jquery.backstretch.min.js"></script>
        <script src="/css/assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="/css/assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>