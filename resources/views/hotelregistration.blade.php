<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>hotel registration</title>

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
    <link rel="stylesheet" href="/css/home/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/home/css/form-elements.css">
    <link rel="stylesheet" href="/css/home/css/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="/css/hotelregistration/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/css/home/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/css/home/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/css/home/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/css/home/ico/apple-touch-icon-57-precomposed.png">

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
                                <h3>Register your Hotel</h3>
                                <p>Fill in the form below to get instant access</p>
                            </div>
                            <div class="form-top-right">
                                <i class="fa fa-pencil"></i>
                            </div>
                        </div>
                        <div class="form-bottom">
                            <form role="form" action="/hotelprofile" method="post" class="registration-form">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label class="sr-only" for="hotelname">Hotel Name</label>
                                    <input type="text" name="username" placeholder="Hotel Name" class="form-first-name form-control" id="form-first-name" required>
                                </div>

                                <div class="form-group">
                                    <label class="sr-only" for="hotelemail">Hotel Email</label>
                                    <input type="text" name="email" placeholder="Hotel Email..." class="form-email form-control" id="form-email" required>
                                </div>

                                <div class="form-group">
                                    <label class="sr-only" for="hotelpassword">Hotel Password</label>
                                    <input type="password" name="password" placeholder=" Password" class="form-password form-control" id="form-password" required>
                                </div>

                                <div class="form-group">
                                    <label class="sr-only" for="hotelpassword">Confirm Password</label>
                                    <input type="password" name="password_confirmation" placeholder="Confirm Password" class="form-password form-control" id="form-password" required>
                                </div>




                                <button type="submit" class="btn">Register Hotel</button>

                            </form>
                            @include('layout.errors')
                        </div>
                    </div>

                </div>
            </div>

        </div>

<script src="/css/assets/js/jquery-1.11.1.min.js"></script>
<script src="/css/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="/css/assets/js/jquery.backstretch.min.js"></script>
<script src="/css/assets/js/scripts.js"></script>

<!--[if lt IE 10]>
<script src="/css/assets/js/placeholder.js"></script>
<![endif]-->

</body>

</html>