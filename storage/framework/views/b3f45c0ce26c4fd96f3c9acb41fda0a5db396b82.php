<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Landing Page - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--<link href="css/bootstrap.min.css" rel="stylesheet">  -->

    <!-- Custom CSS -->

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">  -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.css">



    <style>

        @import  url(https://fonts.googleapis.com/css?family=Roboto:400,300,500);
        *:focus {
            outline: none;
        }

        body {
            margin: 0;
            padding: 0;
            font-size: 16px;
            color: #222;
            background: linear-gradient(to top left, #9900ff 0%, #ff0066 98%);
            font-family: 'Roboto', sans-serif;
            font-weight: 300;
        }

        #login-box {
            position: relative;
            margin: 5% auto;
            width: 900px;
            height: 550px;
            background: #FFF;
            border-radius: 0px;
            border: none;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
        }

        .left {
            position: absolute;
            top: 0;
            left: 0;
            box-sizing: border-box;
            padding: 40px;
            width: 400px;
            height: 500px;
            border-radius: 0px;
            border: none;
        }


        h1 {
            margin: 0 0 20px 0;
            font-weight: 300;
            font-size: 28px;
        }

        input[type="text"],
        input[type="password"] {
            display: block;
            box-sizing: border-box;
            margin-bottom: 20px;
            padding: 4px;
            width: 260px;
            height: 38px;
            border: none;
            border-bottom: 1px solid #AAA;
            font-family: 'Roboto', sans-serif;
            font-weight: 400;
            font-size: 15px;
            transition: 0.2s ease;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-bottom: 2px solid #16a085;
            color: #16a085;
            transition: 0.2s ease;
        }

        input[type="submit"] {
            margin-top: 28px;
            width: 120px;
            height: 32px;
            background: #16a085;
            border: none;
            border-radius: 2px;
            color: white;
            font-family: 'Roboto', sans-serif;
            font-weight: 500;
            text-transform: uppercase;
            transition: 0.1s ease;
            cursor: pointer;
        }

        input[type="submit"]:hover,
        input[type="submit"]:focus {
            opacity: 0.8;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
            transition: 0.1s ease;
        }

        input[type="submit"]:active {
            opacity: 1;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
            transition: 0.1s ease;
        }

        .or {
            position: absolute;
            top: 210px;
            left: 360px;
            width: 40px;
            height: 40px;
            background: transparent;
            border-radius: 50%;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
            line-height: 40px;
            text-align: center;
        }

        .right {
            position: absolute;
            top: 0;
            right: 0;
            box-sizing: border-box;
            padding: 40px;
            width: 400px;
            border-radius: 0px;
            border: none;
            height: 500px;
          /*  background: url('https://goo.gl/YbktSj');
            background-size: cover;
            background-position: center; */
            border-radius: 0 2px 2px 0;
        }

        .right .loginwith {
            display: block;
            margin-bottom: 40px;
            font-size: 28px;
            color: #FFF;
            text-align: center;
        }

        button.social-signin {
            margin-bottom: 20px;
            width: 220px;
            height: 36px;
            border: none;
            border-radius: 2px;
            color: #FFF;
            font-family: 'Roboto', sans-serif;
            font-weight: 500;
            transition: 0.2s ease;
            cursor: pointer;
        }

        button.social-signin:hover,
        button.social-signin:focus {
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
            transition: 0.2s ease;
        }

        button.social-signin:active {
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
            transition: 0.2s ease;
        }

        button.social-signin.facebook {
            background: #32508E;
        }

        button.social-signin.twitter {
            background: #55ACEE;
        }

        button.social-signin.google {
            background: #DD4B39;
        }


        #myModal{
            background: transparent;
        }


      /*  .modal-backdrop.in {
            opacity: 0.1;
        }

        .modal-backdrop {
            /*opacity: 1; */
          /*  background: linear-gradient(to top left, #3399ff 0%, #ff3399 107%);
            background: linear-gradient(to top left, #9900ff 0%, #ff0066 98%)
        }


        body.modal-open .pagecontent{
             -webkit-filter: blur(4px);
               -moz-filter: blur(4px);
               -o-filter: blur(4px);
               -ms-filter: blur(4px);
               filter: blur(4px);
               filter: url("https://gist.githubusercontent.com/amitabhaghosh197/b7865b409e835b5a43b5/raw/1a255b551091924971e7dee8935fd38a7fdf7311/blur".svg#blur);
               filter:progid:DXImageTransform.Microsoft.Blur(PixelRadius='4');
            background: #0c5460;

            /*visibility: hidden;
        } */



    </style>


</head>

<body>



                <div id="login-box">
                    <div class="left">
                        <h1>Sign up for Hotel</h1>

                        <input type="text" name="hotelname" placeholder="Hotel Name" />
                        <input type="text" name="hotelemail" placeholder="Hotel E-mail" />
                        <input type="password" name="hotelpassword" placeholder="Hotel Password" />
                        <input type="password" name="hotelpassword2" placeholder="Retype password" />

                        <input type="submit" name="hotelsignup_submit" value="Hotel Signup" />


                    </div>

                    <div style="" class="right">
                        <span class="loginwith">Sign in<br /></span>

                        <h1>Sign in to your Hotel</h1>



                        <input type="text" name="hotelemail" placeholder="Hotel E-mail" />
                        <input type="password" name="hotelpassword" placeholder="Password" />

                        <input type="submit" name="hotelsignup_submit" value="Sign in" />

                        <a href="homepage" target="_self" type="button">HomePage</a>

                       <!-- <button class="social-signin facebook">Log in with facebook</button>
                        <button class="social-signin twitter">Log in with Twitter</button>
                        <button class="social-signin google">Log in with Google+</button> -->
                    </div>
                    <div class="or">OR</div>

                </div>

            <!--</div>-->





<!--<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>

<div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div> -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<script>


</script>

</body>

</html>