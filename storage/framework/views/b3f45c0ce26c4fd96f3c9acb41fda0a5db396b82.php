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
    <link rel="stylesheet" href="/css/assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/assets/css/form-elements.css">
    <link rel="stylesheet" href="/css/assets/css/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/css/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/css/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/css/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/css/assets/ico/apple-touch-icon-57-precomposed.png">


</head>

<body>

<!-- Top content -->
<div class="top-content">

    <div class="inner-bg">
        <div class="container">

            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text">
                    <h1><strong>Bootstrap</strong> Login &amp; Register Forms</h1>
                    <div class="description">
                        <p>
                            This is a free responsive <strong>"login and register forms"</strong> template made with Bootstrap.
                            Download it on <a href="http://azmind.com" target="_blank"><strong>AZMIND</strong></a>,
                            customize and use it as you like! <a href="homepage" class="btn btn-primary">Return to Home</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-5">

                    <div class="form-box">
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3>Login to your Hotel</h3>
                                <p>Manage your hotel activities there</p>
                            </div>
                            <div class="form-top-right">
                                <i class="fa fa-lock"></i>
                            </div>
                        </div>
                        <div class="form-bottom">
                            <form role="form" action="" method="post" class="login-form">
                                <div class="form-group">
                                    <label class="sr-only" for="hotelname">Hotel Name</label>
                                    <input type="text" name="hotelname" placeholder="Hotel Name" class="form-username form-control" id="form-username" required>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="hotelpassword">Password</label>
                                    <input type="password" name="hotelpassword" placeholder="Hotel Password" class="form-password form-control" id="form-password" required>
                                </div>
                                <button type="submit" class="btn">Sign in</button>
                            </form>
                        </div>
                    </div>


                </div>

                <div class="col-sm-1 middle-border"></div>
                <div class="col-sm-1"></div>

                <div class="col-sm-5">

                    <div class="form-box">
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3>Register your Hotel</h3>
                                <p>Fill in the form below to get instant access</p>
                            </div>
                            <div class="form-top-right">
                                <i class="fa fa-pencil"></i>
                            </div>
                        </div>
                        <div class="form-bottom">
                            <form role="form" action="" method="post" class="registration-form">
                                <div class="form-group">
                                    <label class="sr-only" for="hotelname">Hotel Name</label>
                                    <input type="text" name="form-first-name" placeholder="Hotel Name" class="form-first-name form-control" id="form-first-name" required>
                                </div>

                                <div class="form-group">
                                    <label class="sr-only" for="hotelemail">Hotel Email</label>
                                    <input type="text" name="form-email" placeholder="Hotel Email..." class="form-email form-control" id="form-email" required>
                                </div>

                                <div class="form-group">
                                    <label class="sr-only" for="hotelpassword">Hotel Password</label>
                                    <input type="password" name="hotelpassword" placeholder="Hotel Password" class="form-password form-control" id="form-password" required>
                                </div>

                                <div class="form-group">
                                    <label class="sr-only" for="hotelpassword">Confirm Hotel Password</label>
                                    <input type="password" name="hotelpassword" placeholder="Confirm Hotel Password" class="form-password form-control" id="form-password" required>
                                </div>



                                <div class="form-group">
                                    <label class="sr-only" for="hoteladdress">Hotel Address</label>
                                    <textarea name="hoteladdress" placeholder="Hotel Address"
                                              class="form-about-yourself form-control" id="form-about-yourself" required></textarea>
                                </div>
                                <button type="submit" class="btn">Register Hotel</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

</div>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">

            <div class="col-sm-8 col-sm-offset-2">
                <div class="footer-border"></div>
                <p>Made by Anli Zaimi at <a href="http://azmind.com" target="_blank"><strong>AZMIND</strong></a>
                    having a lot of fun. <i class="fa fa-smile-o"></i></p>
            </div>

        </div>
    </div>
</footer>

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