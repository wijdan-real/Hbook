
<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Registration Hotel</title>

    <!-- embedding bootstrap 4 cdn and google icons and awesome font -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!--<script type="text/javascript" src="/public/js/countries.js"></script> -->

    <style>

        body {
            padding-top: 140px; }
        body, html {
            height: 100%;
        }

        .panel-login {
            border-color: #ccc;
            -webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
            -moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
            box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
            width: 500px;
            height: 500px;
        }
        .panel-login>.panel-heading {
            color: #00415d;
            background-color: #fff;
            border-color: #fff;
            text-align:center;
            font-size: large;
            font-weight: 300;
            margin-top: 5px;
            margin-bottom:7px;
        }
        .panel-login>.panel-heading a{
            text-decoration: wavy;
            color: #666;
            font-weight: bold;
            font-size: 24px;
            -webkit-transition: all 0.1s linear;
            -moz-transition: all 0.1s linear;
            transition: all 0.1s linear;
            opacity: 0.7;
        }
        .panel-login>.panel-heading a.active{
            color: #029f5b;
            font-size: 24px;
            font-weight: bold;
            -webkit-transition: all 0.1s linear;
            -moz-transition: all 0.1s linear;
            transition: all 0.1s linear;
            opacity: 1.0;
        }
        .panel-login>.panel-heading hr{
            margin-top: 10px;
            margin-bottom: 50px;
            clear: both;
            border: 0;
            height: 1px;
            background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
            background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
            background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
            background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
        }
        .panel-login input[type="text"],.panel-login input[type="email"],.panel-login input[type="password"] {

            height: 45px;
            margin-bottom: 5px;
            border: 1px solid #ddd;
            font-size: 18px;
            -webkit-transition: all 0.1s linear;
            -moz-transition: all 0.1s linear;
            transition: all 0.1s linear;
        }
        .panel-login input:hover,
        .panel-login input:focus {
            outline:none;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
            border-color:#CCCCCC;
        }
        .btn-login {
            margin-top: 10px;
            background-color: #59B2E0;
            outline: none;
            color: #fff;
            font-size: 16px;
            height: auto;
            font-weight: normal;
            padding: 14px 0;
            text-transform: uppercase;
            border-color: #59B2E6;
        }

        .btn-login:hover,
        .btn-login:focus {
            color: #fff;
            background-color: #53A3CD;
            border-color: #53A3CD;
        }
        .forgot-password {
            text-decoration: underline;
            color: #888;
        }
        .forgot-password:hover,
        .forgot-password:focus {
            text-decoration: underline;
            color: #666;
        }

        .btn-register {
            background-color: #1CB94E;
            margin-top: 10px;
            outline: none;
            color: #fff;
            font-size: 14px;
            height: auto;
            font-weight: normal;
            padding: 14px 0;
            text-transform: uppercase;
            border-color: #1CB94A;
        }
        .btn-register:hover,
        .btn-register:focus {

            color: #fff;
            background-color: #1CA347;
            border-color: #1CA347;
        }



        .sec1 {

          /*  margin-top: 10px;
            margin-left: -10px;
            border: 2px solid white;
            /* border-radius:12px; */
           /* height: 500px;
            width: 450px;
            padding-bottom: 200px;
            opcaity:1.0;
            background-color: transparent;
            transition: width 4s;
            -webkit-transition: width 4s; */

             border:1px solid #CCCCCC;
            background-color: white;
            -webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.4);
            -moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.4);
            box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.4);
            width: 500px;
            height: 500px;
            border-radius: 3px;

        }


        .h{
            margin-top: 10px;
            margin-bottom: 85px;
            clear: both;
            border: 0;
            height: 1px;
            background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
            background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
            background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
            background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
        }

        .desttext{
            text-decoration: wavy;
            color: #666;
            font-weight: bold;
            margin-top: 17px;
            font-size: 24px;
            -webkit-transition: all 0.1s linear;
            -moz-transition: all 0.1s linear;
            transition: all 0.1s linear;
            opacity: 0.7;
        }

        .in{
            height: 44px;
            width:470px;
            border: 1px solid #ddd;
            font-size: 18px;
            margin-left: 15px;
            margin-bottom: 15px;
            -webkit-transition: all 0.1s linear;
            -moz-transition: all 0.1s linear;
            transition: all 0.1s linear;}

        .btn-dest {
            background-color: #1CB94E;
            margin-top: 10px;
            outline: none;
            color: #fff;
            font-size: 14px;
            height: auto;
            font-weight: normal;
            padding: 14px 0;
            text-transform: uppercase;
            border-color: #1CB94A;
        }
        .btn-dest:hover,
        .btn-dest:focus {

            color: #fff;
            background-color: #1CA347;
            border-color: #1CA347;
        }



       /* .sec1:hover{
            position: inherit;
            top: 30px;
            right: 30px;
            bottom: 30px;
            left: 30px;
            border: 2px solid #fff;
            /* box-shadow: 0 0 0 30px rgba(255,255,255,0.2); */
            /*  content: '';*/
           /* -webkit-transition: opacity 0.5s,
            -webkit-transform 0.5s;
            transition: opacity 0.5s, transform 0.5s;
            -webkit-transform: scale3d(1.0,1.1,1.0);
            transform: scale3d(1.0,1.1,1.0);
        }
        */


        .grid {
            position: relative;
            clear: both;
            margin: 0 auto;
            padding: 1em 0 4em;
            max-width: 1200px;
            list-style: none;
            text-align: center;
        }


        .row.vdivide [class*='col-']:not(:last-child):after {
            background: #e0e0e0;
            width: 1px;
            content: "";
            display:block;
            left: 191%;
            position: absolute;
            top:0;
            bottom: 0;
            right: 0;
            min-height: 70px;
        }


        .parallax {
            /* The image used */
            background-image: url('/images/david-lezcano-211888.jpg');

            /* Full height */
            height: 100%;

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        /* Turn off parallax scrolling for tablets and phones. Increase the pixels if needed */
        @media only screen and (max-device-width: 1024px) {
            .parallax {
                background-attachment: scroll;
            }
        }


    </style>


</head>


<body class="parallax">

<div class="container">
    <div class="row vdivide">

         <div class="center-block">

        <div style="margin-left: 20px;" class="col-md-3">


            <div class="form sec1">

                    <!--<label class="control-label col-md-2" for="country">Enter Your Country:</label>-->

                <div class="row">


                    <span style="text-align: center"><p class="desttext">Choose Destination</p></span>

                    <hr class="h">

	                            <div  class="col-md-12">
	                         	<select class="form-control in" id="country" name ="country"></select>
	                            </div>
                </div>



                <div class="row">
		                        <div class=" col-md-12">
		                      	<select class="form-control in" name ="state" id ="state"></select>
	                        	</div>

                </div>


                <div class="row">
                    <div class=" col-md-12">
                        <button class="btn btn-dest in">Enter</button>
                    </div>

                </div>




            </div>
        </div>












        <!--<div class="col-md-6 col-md-offset-3"> -->
            <div class="col-md-offset-3 col-md-3">
            <div class="panel panel-login">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6">
                            <a href="#" class="active" id="login-form-link">Login</a>
                        </div>
                        <div class="col-xs-6">
                            <a href="#" id="register-form-link">Register</a>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="login-form" action="http://phpoll.com/login/process" method="post" role="form" style="display: block;">
                                <div class="form-group">
                                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                </div>
                                <div style="margin-right:7px;" class="form-group text-center">
                                    <input style="margin-top: 15px;" type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                    <label for="remember"> Remember Me</label>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="text-center">
                                                <a href="http://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <form id="register-form" action="http://phpoll.com/register/process" method="post" role="form" style="display: none;">
                                <div class="form-group">
                                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>

                    </div>
                </div>


                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- snipp1 -->
                <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-client="ca-pub-9155049400353686"
                     data-ad-slot="4807425052"
                     data-ad-format="auto"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
        </div>
    </div>
</div>

</div>


</body>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type= "text/javascript" src="/countries.js"></script>


<script>

    $(function() {

        $('#login-form-link').click(function(e) {
            $("#login-form").delay(100).fadeIn(100);
            $("#register-form").fadeOut(100);
            $('#register-form-link').removeClass('active');
            $(this).addClass('active');
            e.preventDefault();
        });
        $('#register-form-link').click(function(e) {
            $("#register-form").delay(100).fadeIn(100);
            $("#login-form").fadeOut(100);
            $('#login-form-link').removeClass('active');
            $(this).addClass('active');
            e.preventDefault();
        });

    });


</script>


<script language="javascript" >
    populateCountries("country", "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
    populateCountries("country2");
    populateCountries("country2");
</script>

<script>
    $(".border-bottom").children("div").matchHeight();
</script>





</html>