<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HBook</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--<link href="css/bootstrap.min.css" rel="stylesheet">  -->

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <!-- <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">  -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">

    <link rel="stylesheet" href="/css/landingpage/form-elements.css">
    <link rel="stylesheet" href="/css/landingpage/style.css">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.css">


    <!--<link rel="stylesheet" type="text/css" href="mbr-additional.css">
    <link rel="stylesheet" type="text/css" href="mobirise-icons.css"> -->
    <link rel="stylesheet" type="text/css" href="/css/landingpage/normalize.css" />
    <link rel="stylesheet" type="text/css" href="/css/landingpage/demo.css" />
    <link rel="stylesheet" type="text/css" href="/css/landingpage/set1.css" />

    <!-- Optional theme -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>

        body{
            background-color: white;
            overflow-x: hidden; /*for hiding horizontal scroll bar*/
            overflow-y: auto; /*for vertical scroll bar*/
           color:rgba(142, 68, 173,1.0);
            font-family: 'Lato';

            /*  Other Fonts are lato, roboto , droid ,  poiret one..  */



        }


        .tool-tip {
            /* border: 1px solid white;
             border-radius: 16px ; */
            padding: 5px 15px;
            color: #2b2b2b;
            position: relative;
            opacity: 1;
            cursor: pointer;
            margin: 0 10px;
            text-transform: uppercase;
        }

        .tool-tip::after {
            float: left;
            /*background-color: #323a45;
            /* background-color:   rgb(255,51,102); */
            background-color: transparent;
            opacity: 0.2;
            /*  border-radius: 2px; */
            color: black;
            content: attr(data-tooltip-title) " ";
            font-weight: normal;
            width: 140px;
            border-radius: 10px;
            height: 90px;
            font-size: 17px;
            padding: 5px 8px;
            text-align: center;
            text-transform: capitalize;
        }

        .tool-tip::before {
            width: 0;
            height: 0;
            content: "";
        }

        .tool-tip::before,
        .tool-tip::after {
            position: absolute;
            transition: opacity 250ms ease 0ms, transform 250ms ease 0ms;
            transform-style: preserve-3d;
            opacity: 0;
            z-index: -1;
        }

        .tool-tip[data-tooltip-position="bottom"]::after {

            left: 50%;
        }
        .tool-tip[data-tooltip-position="bottom"]::after {
            transform: translate3d(-50%, -10px, 0px);
            transform: translateY(30px);
            transform: translateX(-50px);
            transform-origin: top right;
        }
        .tool-tip[data-tooltip-position="bottom"]::after {
            top: calc(100% + 5px);



        }

        /* Pointers */

        .tool-tip[data-tooltip-position="bottom"]::before {
            border-left: 7px solid transparent;
            border-right: 7px solid transparent;
            left: 50%;
        }

        .tool-tip[data-tooltip-position="bottom"]::before {
            transform: translate3d(-50%, -10px, 0);
        }

        .tool-tip[data-tooltip-position="bottom"]::before {
            border-bottom: 7px solid #323a45;
            top: calc(98% + 0px);
        }


        .tool-tip:hover::before,
        .tool-tip:hover::after {
            opacity: 1;
            z-index: 100;
        }

        .tool-tip[data-tooltip-position="bottom"]:hover::before,
        .tool-tip[data-tooltip-position="bottom"]:hover::after {
            transform: translate3d(-50%, 0px, 0);
            margin-right: 50px;
        }



        .back-to-top {
            cursor: pointer;
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: #353b48;
            color: white;
            display:none;
        }

        .back-to-top:hover{

            background-color:#353b48;
            color: white;
        }


       /* .row {

            position: relative;
            margin: 0 auto;
            padding: 1em 0 4em;
            max-width: 1300px;
            list-style: none;
            text-align: center;
        }  */



        .left-inner-addon {
            position: relative;

        }
        .left-inner-addon input {
            padding-left: 80px;
            padding-top: 0px;
            padding-bottom: 0px;
            padding-right: 0px;
            border-radius: 2px;
        }
        .left-inner-addon i {
            position: absolute;
            padding: 13px 4px;
            font-size: 22px;
            pointer-events: none;
        }

        /*.left-inner-addon button {

            border-radius: 2px;

        } */


      /*  .left-inner-addon button {


            left: 400px;
            padding: 6px 12px;
            pointer-events: none;
            font-size: 18px;
            border: 2px;
        } */


        .right-inner-addon {
            position: relative;
        }
        .right-inner-addon input {
            padding-right: 30px;
        }
        .right-inner-addon i {
            position: absolute;
            right: 0px;
            padding: 10px 12px;
            pointer-events: none;
        }



        .grid1 {
            position: relative;
            clear: both;
            margin: 0 auto;
            padding: 1em 0 4em;
            max-width: 1300px;
            list-style: none;
            text-align: center;
            top:20px;
        }


        .ct-btn-scroll {
            width: 54px;
            height: 54px;
            position: absolute;
            bottom: 30px;
            left: 0;
            right: 0;
            margin: auto;
           /* color: #0b2e13;;
            border: 2px solid; */
            padding-top: 0px;
            z-index: 9;
            border-radius: 60%;
            -webkit-transition: background-color 0.25s ease-in-out;
            transition: background-color 0.25s ease-in-out;
        }



        .vertical-divider {
            position: absolute;
            z-index: 10;
            top: 50%;
            left: 50%;
            margin: 0;
            padding: 0;
            width: auto;
            height: 50%;
            line-height: 0;
            text-align:center;
            text-transform: uppercase;
            transform: translateX(-50%);
        }

        .vertical-divider:before,
        .vertical-divider:after {
            position: absolute;
            left: 50%;
            content: '';
            z-index: 9;
            border-left: 1px solid rgba(34,36,38,.15);
            border-right: 1px solid rgba(255,255,255,.1);
            width: 0;
            height: calc(100% - 1rem);
        }

        .row-divided > .vertical-divider {
            height: calc(50% - 1rem);
        }

        .vertical-divider:before {
            top: -100%;
        }

        .vertical-divider:after {
            top: auto;
            bottom: 0;
        }

        .row-divided {
            position:relative;
        }

        .row-divided > [class^="col-"],
        .row-divided > [class*=" col-"] {
            padding-left: 30px;  /* gutter width (give a little extra room) 2x default */
            padding-right: 30px; /* gutter width (give a little extra room) 2x default */
        }




        /* Arrow Button
	-----------------------------------*/
        .container-arrow{
            margin-top: -20px;
            font-weight: bold;
            text-transform: uppercase;
            color:white;
            display: inline-block;
            text-align: center;
            line-height: 20px;
            border-radius: 60%;
            position: absolute;
            bottom:0;left:70px;
            z-index: 10;
            width:35%;
            padding-bottom: 0px;
            cursor: pointer;
            font-size: 12px;
          /*  background-color: rgb(60,62,70); */
        }
        .container-arrow:hover,
        .container-arrow:focus{text-decoration: none;}

        /* Arrow Bouncing */
        .container-arrow span{  display: inline-block; font-size: 80px;	 animation: .7s down  infinite alternate; -webkit-animation: .7s down infinite alternate; }
        /***Animation Arrow down***/
        @keyframes down{ 0%{transform:translateY(0px)} 100%{transform:translateY(15px)} }
        @-webkit-keyframes down{ 0%{-webkit-transform:translateY(0px)} 100%{-webkit-transform:translateY(15px)} }




        /* sets positioning */
        .arrow {
            width: 60px;
            height: 82px;
            position: absolute;
            left: 50%;
            margin-left: -30px;
            bottom: 10px;
        }

        /* sets arrow style */
        .arrow path {
           /* stroke: #119a12; */

            stroke:#c44569;
            fill: transparent;
            stroke-width: 4px;
            animation: arrow 2s infinite;
            -webkit-animation: arrow 2s infinite;
        }

        @keyframes arrow{
            0% {opacity:0}
            25% {opacity:1}
            75% {opacity:0}
            100% {opacity:0}
        }

        @-webkit-keyframes arrow{
            0% {opacity:0}
            25% {opacity:1}
            75% {opacity:0}
            100% {opacity:0}
        }

        .arrow path.a1{
            animation-delay:-1s;
            -webkit-animation-delay:-1s;
        }

        .arrow path.a2{
            animation-delay:-.5s;
            -webkit-animation-delay:-.5s;
        }

        .arrow path.a3{
            animation-delay:0s;
            -webkit-animation-delay:0s;
        }


        #myNavbar{}

        .fa fa-user-circle-o { border: none; }

        .fa fa-registered { border: none; }

        .fa {

            border: white !important;
        }

        .rightlink {

          border: none;
        }

        .social:hover {
            opacity:1;
            -webkit-transform: scale(1.1);
            -moz-transform: scale(1.1);
            -o-transform: scale(1.1);
        }

        .social {
            opacity:0.9;
            -webkit-transform: scale(0.8);
            -moz-transform: scale(0.8);
            -o-transform: scale(0.8);
            -webkit-transition-duration: 0.5s;
            -moz-transition-duration: 0.5s;
            -o-transition-duration: 0.5s;
        }

        .social-fb {
            color: #3B5998;
        }

        .social-gp {
            color: #d34836;
        }

        .social-tw {
            color: #4099FF;
        }

        .social-ig {
            color: #cd486b;
        }


        .row.vdivide [class*='col-']:not(:last-child):after {
            background: #e0e0e0;
            width: 2px;
            content: "";
            display:block;
            position: absolute;
            top:20px;
            bottom: 0;
            right: 0;
           /* min-height: 90px; */
            height: 355px;
        }


        #search {
            position: relative;
            border-radius: 2px;
            padding-bottom: 15px;
            top: 25px;
            height: 40px;
            box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.2), 0 8px 20px 0 rgba(0, 0, 0, 0.19);
            box-sizing: border-box;



           /* box-sizing: border-box;

            bottom: 10px; */
        }

        #search-input {
            padding-left: 60px;
            padding-top: 5px;
            font-size: 18px;

        }

        #search-icon {
            position: absolute;
            padding: 15px 10px;
            margin-left: -210px;
            font-size: 22px;

        }


        #search1 {
            position: relative;
            padding-bottom: 15px;
            border-radius: 2px;
            box-sizing: border-box;
            top: 25px;
            height: 40px;
            /*box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); */
            box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.2), 0 8px 20px 0 rgba(0, 0, 0, 0.19);

            /* box-sizing: border-box;

             bottom: 10px; */
        }

        #search-input1 {
            padding-left: 60px;
            padding-top: 5px;
            font-size: 18px;
        }

        #search-icon1 {
            position: absolute;
            padding: 15px 10px;
            margin-left: -210px;
            font-size: 22px;

        }

        #search2 {
            position: relative;
            padding-bottom: 15px;
            border-radius: 2px;
            bottom: 3px;
            height: 40px;
           /* box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); */
            box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.2), 0 8px 20px 0 rgba(0, 0, 0, 0.19);
            box-sizing: border-box;



            /* box-sizing: border-box;

             bottom: 10px; */
        }

        #search-input2 {
            padding-left: 60px;
            padding-top: 5px;
            font-size: 18px;
        }

        #search-icon2 {
            position: absolute;
            padding: 15px 10px;
            margin-left: -210px;
            font-size: 22px;

        }

        #search3 {
            position: relative;
            border-radius: 2px;
            padding-bottom: 15px;
            bottom: 3px;
            height: 40px;
            box-sizing: border-box;
            box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.2), 0 8px 20px 0 rgba(0, 0, 0, 0.19);
      /*      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); */
            /* box-sizing: border-box;


             bottom: 10px; */
        }

        #search-input3 {
            padding-left: 60px;
            padding-top: 5px;
            font-size: 18px;
        }

        #search-icon3 {
            position: absolute;
            padding: 15px 10px;
            margin-left: -210px;
            font-size: 22px;

        }

     /*   #search1 {
            position: relative;
            padding-bottom: 15px;
            bottom: 5px;

        }

        #search-input1 {
            padding-left: 60px;
        }

        #search-icon1 {
            position: absolute;
            padding: 14px 10px;
            margin-left: -220px;

        }

        #search2 {
            position: relative;
            bottom: 5px;
            padding-bottom: 15px;



        }

        #search-input2 {
            padding-left: 60px;
        }

        #search-icon2 {
            position: absolute;
            padding: 14px 10px;
            margin-left: -220px;

        }


        #search3 {
            position: relative;
            bottom: 5px;
            padding-bottom: 15px;



        }

        #search-input3 {
            padding-left: 60px;
        }

        #search-icon3 {
            position: absolute;
            padding: 14px 10px;
            margin-left: -220px;

        } */


        .btn1{

         /*   display: inline-block;
            font-weight: 400;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            border: 1px solid transparent;
            padding: .375rem .75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: .25rem;
            transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out; */


            height: 50px;
            width: 205px;
            vertical-align: middle;

            font-kerning: none;

            white-space: nowrap;
          /*  color: #7952b3;
            border-color: #7952b3;
            background-color: white; */

            background-color:white;
            border-color:
                    #c44569;
            color:
                    #c44569;

          /*  border-color: #353b48;
            color:#353b48; */


            line-height: 1.5;
            border-radius: .45rem;
            /*padding-top: 15px;
            padding-bottom: 15px;
            padding-left: 60px;
            padding-right: 60px; */
           /* font-size: 2.20rem;
            font-weight: 500; */
            font-size: large;
            font-weight: 600;
        }


        .btn1:active ,.btn1:hover {

           /* background-color: #7952b3;
            color: white; */

            background-color: #c44569;

            color:white;
            border-color:#c44569;
        }

        .inline-p{display: inline;}

        .brand1 {
            /*color: white; */
            float: left;
            color: #353b48;
        }
        .brand2 {
      /*  hsl(215,100,25); */
            float: right;
            color:  #c44569;

        }


        i{
            color: #353b48;
        }

        .fa {
            color: #353b48;
        }



        /*.btn-bd-primary:active,.btn-bd-primary:hover
        {
            font-weight: 500;
            color: #7952b3;
            border-color: #7952b3;
        } */


        div#frm *{display:inline}

        div#frm1 *{display:inline}


        html::-webkit-scrollbar {
            width: 1.2em;
        }

      /*  html::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
        }

        html::-webkit-scrollbar-thumb {
            background-color: darkgrey;
            outline: 1px solid slategrey;
        } */

         /* STYLE 1
        html::-webkit-scrollbar-thumb {
            border-radius: 10px;
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
            background-color: #555;
        }

        html::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
            border-radius: 10px;
            background-color: #F5F5F5;
        }  */







        /* STYLE 11 */
        html::-webkit-scrollbar-track {
            border-radius: 0px;
            background: rgba(0,0,0,0.1);
            border: 1px solid #ccc;
        }

        html::-webkit-scrollbar-thumb {
            border-radius: 0px;
           /* background: linear-gradient(left, #fff, #e4e4e4); */
            background: #353b48;
            border: 1px solid #353b48;
            border-radius: 1px;
        }

        html::-webkit-scrollbar-thumb:hover {
            background: #353b48;
        }

        html::-webkit-scrollbar-thumb:active {
            background: linear-gradient(left, #22ADD4, #1E98BA);
        }


        .classWithPad {


            margin:0px;
            padding-right:45px;
        }


        .classWithPad1 {


            margin:0px;
            padding-left:45px;
        }


        #hotelregmodal{
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }


        #userregmodal{
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

        }

        /*.modal-backdrop.in {
            opacity:0.2;
            background:white;
        } */

        .modal-backdrop{

            background:linear-gradient(to top left,#9900ff 0%, #ff0066 98%);
            opacity:1.0 !important;
            overflow:hidden;

        }


    </style>


</head>




<body>

    <!-- Navigation
   <nav style="background-color: transparent" class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            Brand and toggle get grouped for better mobile display
            <div style="margin-left: -320px; font-size: 22px;"  class="navbar-header navbar-nav navbar-left">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a style=" color: rgb(13,103,134); font-size: 24px;" class="navbar-brand" href="#">H-BOOK</a>
            </div>
            Collect the nav links, forms, and other content for toggling
            <div style="" class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul style=" color: rgb(13,103,134);" class="nav navbar-nav navbar-right">
                    <li>
                        <a style=" color: rgb(13,103,134);" href="#about">About</a>
                    </li>
                    <li>
                        <a style=" color: rgb(13,103,134);" href="#services">Services</a>
                    </li>
                    <li>
                        <a style=" color: rgb(13,103,134);" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse
        </div>

    </nav>-->



        <nav style="background-color: white; border-bottom: none; border-top: none; margin-top: 10px;" class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

               <!-- <a style="font-size: 30px; margin-top: 5px; margin-left: 0px;" class="navbar-brand" href="#">H-BOOK</a>  -->

                           <a class="navbar-brand" style="font-weight: 400; font-size: 32px; margin-top: 8px; margin-left: 5px;">
                    <div class="inline-p" style=""><p class="brand1">H</p><p class="brand2">BOOK</p></div>
                            </a>

            </div>
            <div style="margin-left: 5px;" class="collapse navbar-collapse" id="#myNavbar">
               <!-- <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Page 1-1</a></li>
                            <li><a href="#">Page 1-2</a></li>
                            <li><a href="#">Page 1-3</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Page 2</a></li>
                    <li><a href="#">Page 3</a></li>
                </ul>  -->
                <ul style=""  class="nav navbar-nav navbar-right">

                    <li >
                        <a style=" color: #353b48;" class="tool-tip" target="_self" data-toggle="modal" data-target="#userregmodal" data-tooltip-title="Find a Hotel" data-tooltip-position="bottom">
                            <i class="fa fa-user-o fa-3x"></i> <b style="font-size: 12px;">Member Login</b></a>
                    </li>

                    <li>
                        <a style="  color: #353b48;" class="tool-tip"  data-toggle="modal" data-target="#hotelregmodal" data-tooltip-title="Register Your Hotel" data-tooltip-position="bottom">
                            <i class="fa fa-registered fa-3x"></i> <b style="font-size: 12px;">Register Hotel</b></a>
                    </li>


                <!--   <li><a href="#"><i style="color: #00acc1;" class="fa fa-user-circle-o social social-fb fa-3x" aria-hidden="true"></i></span></a></li>
                    <li><a href="#"><i style="border: none;" class="fa fa-registered fa-3x" aria-hidden="true"></i></span></a></li> -->
                </ul>
            </div>
        </div>
    </nav>










    <!-- Header -->
    <a name="about"></a>

    <div class="grid1">

    <div class="intro-header">

           <!-- <div style="top: 100px;" class="grid">  -->




                <div style="top:0px;" class="row vdivide">


                <div class="col-md-offset-1 col-lg-5">

                    <div class="col-md-12 text-center classWithPad">



                    <div style="" class="page-header "><h2 style=" color:#c44569;"> <i style="font-size: 26px;" class="material-icons">card_travel</i> trip planner</h2></div>
                 <!--   <div class="well">  -->




                        <form  style="height: 220px;" action="/action_page.php">

                           <!-- <div class="form-group-lg">
                                <div  class="left-inner-addon">
                                    <i class="fa fa-money" aria-hidden="true"></i>
                                    <input  type="text"
                                            class="form-control"
                                            placeholder="        Enter Your Budget ..." />
                                </div>

                            </div>  -->


                            <div id="search3">
                                <i id="search-icon3" class="fa fa-money fa-3x"></i>
                                <input type="text" class="form-control" placeholder="Enter your budget" id="search-input3" />
                            </div>


                            <div id="search">
                                <i style="" id="search-icon" class="material-icons">add_location</i>
                                <input type="text" class="form-control" placeholder="Enter your trip destination" id="search-input" />
                            </div>

                           <!-- <button style="margin-bottom: 13px; width: 440px; height: 40px; margin-left: -617px; font-size: 22px; padding-bottom: 8px; padding-top: 3px; " type="submit" class="btn btn-primary btn-block">PLAN TRIP</button>  -->


                              <br><br>

                            <div id="frm1">

                                <form>
                                    <input style="" type="button" class="btn btn-block btn1" value="Plan Trip">
                                    <!--  <button style="" class="btn btn-lg btn1 ">Find hotel</button> -->
                                </form>


                            </div>




                        </form>


                  <!--  </div>  -->
                </div>

                </div>




                   <!-- <div style="font-size: 18px; color: black;" class="vertical-divider">OR</div>



                    <div class="col-lg-2"></div>  -->


                    <div class="col-lg-5">  <!-- col -md -6 -->


                        <div class="col-md-12 text-center classWithPad1">

                        <div style="" class="page-header"><h2 style="color:#c44569"> <i style="font-size: 25px;" class="fa fa-h-square" aria-hidden="true"></i>   book a hotel</h2></div>

                        <!--<div  class="well">  -->


                            <form  style="height: 220px;" action="/action_page.php">


                               <!-- <div class="form-group-lg">
                                <div  class="left-inner-addon">
                                    <i class="fa fa-search"></i>
                                    <input  type="text"
                                           class="form-control"
                                           placeholder="        Search For Hotel ..." />
                                </div>

                                </div>  -->


                                <div id="search2">
                                    <i id="search-icon2" class="fa fa-fw fa-search fa-2x"></i>
                                    <input type="text" class="form-control" placeholder="Search your hotel" id="search-input2" />
                                </div>

                                <div id="search1">
                                    <i style="" id="search-icon1" class="material-icons">location_city</i>
                                    <input type="text" class="form-control" placeholder="Enter your city" id="search-input1" />
                                </div>

                               <!-- <div id="frm">
                                    Involved:
                                    <form>
                                        <input type="submit" value="Add from list">
                                    </form>
                                    <p>or</p>
                                    <form>
                                        <input type="submit" value="Type a name">
                                    </form>
                                </div>  -->
                                <br> <br>

                                <div id="frm">

                                    <form>
                                        <input style="float: left;" type="button" class="btn btn1" value="Find Hotel">
                                      <!--  <button style="" class="btn btn-lg btn1 ">Find hotel</button> -->
                                    </form>

                                    <form>
                                        <input style="float: right;" type="button" class="btn btn1" value="City Hotels">
                                       <!-- <button style="" class="btn btn-lg btn1">City hotels</button>  -->
                                    </form>
                                </div>


                                <!-- <button style="margin-bottom: 13px; width: 440px; height: 40px; margin-left: -617px; font-size: 22px; padding-bottom: 8px; padding-top: 3px; " type="submit" class="btn btn-primary btn-block">FIND HOTEL</button>  -->


                        </form>


                        <!--</div>  -->

                        </div>
                </div>

               <!-- </div> -->

                </div>
    </div>
            </div>  <!-- grid class ends here -->








        <div style="top:90px;" class="grid1">


            <div class="col-md-offset-5 col-md-2 col-md-offset-5">

               <!-- <a style="background-color:transparent;" class="ct-btn-scroll ct-js-btn-scroll" href="#section2"><i style="font-size: 40px; border: 3px solid black; border-radius: 60%; padding: 5px; margin-top: 8px; margin-left: 1px;" class="fa fa-arrow-down" aria-hidden="true"></i></a> -->


              <!-- <a class="container-arrow scroll-to" href="#section2">
  <span>
    <i class="fa fa-angle-down" aria-hidden="true"></i> <i style="font-size: 72px;" class="material-icons">arrow_downward</i>
                        <img style="color: white;" src="arrow5.png" width="80px;" border="1px rgb(60,62,70)" height="80px;">
                    </span>


                </a>  -->


               <svg class="arrow">
                    <path class="a1" d="M0 0 L30 32 L60 0"></path>
                    <path class="a2" d="M0 20 L30 52 L60 20"></path>
                    <path class="a3" d="M0 40 L30 72 L60 40"></path>
                </svg>

             <!--   <div class="mbr-section-btn">
                <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
                    <a href="#next">
                        <i class="mbri-down mbr-iconfont"></i>
                    </a>
                </div>
                </div> -->


            </div>


        </div>



        <div  class="main">
            <section id="section2">



                <div style="top: 45px;" class="grid">


                    <figure class="effect-zoe padding-0">
                        <img src="1.jpg" alt="img25"/>
                        <figcaption>
                            <h2>Creative <span>Zoe</span></h2>
                            <p class="icon-links">
                                <a href="#"><i class="fa fa-heart-o"></i></a>
                                <a href="#"><i class="fa fa-facebook-official"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </p>
                            <p class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p>
                        </figcaption>
                    </figure>
                    <figure class="effect-zoe padding-0">
                        <img src="3.jpg" alt="img26"/>
                        <figcaption>
                            <h2>Creative <span>Zoe</span></h2>
                            <p class="icon-links">
                                <a href="#"><i class="fa fa-heart-o"></i></a>
                                <a href="#"><i class="fa fa-facebook-official"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </p>
                            <p class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p>
                        </figcaption>
                    </figure>


                    <figure class="effect-zoe padding-0">
                        <img src="4.jpg" alt="img25"/>
                        <figcaption>
                            <h2>Creative <span>Zoe</span></h2>
                            <p class="icon-links">
                                <a href="#"><i class="fa fa-heart-o"></i></a>
                                <a href="#"><i class="fa fa-facebook-official"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </p>
                            <p class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p>
                        </figcaption>
                    </figure>
                    <figure class="effect-zoe">
                        <img src="5.jpg" alt="img26"/>
                        <figcaption>
                            <h2>Creative <span>Zoe</span></h2>
                            <p class="icon-links">
                                <a href="#"><i class="fa fa-heart-o"></i></a>
                                <a href="#"><i class="fa fa-facebook-official"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </p>
                            <p class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p>
                        </figcaption>
                    </figure>


                    <figure class="effect-zoe">
                        <img src="2.jpg" alt="img25"/>
                        <figcaption>
                            <h2>Creative <span>Zoe</span></h2>
                            <p class="icon-links">
                                <a href="#"><i class="fa fa-heart-o"></i></a>
                                <a href="#"><i class="fa fa-facebook-official"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </p>
                            <p class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p>
                        </figcaption>
                    </figure>



                    <figure class="effect-zoe">
                        <img src="6.jpg" alt="img25"/>
                        <figcaption>
                            <h2>Creative <span>Zoe</span></h2>
                            <p class="icon-links">
                                <a href="#"><i class="fa fa-heart-o"></i></a>
                                <a href="#"><i class="fa fa-facebook-official"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </p>
                            <p class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p>
                        </figcaption>
                    </figure>
                    <figure class="effect-zoe">
                        <img src="7.jpg" alt="img26"/>
                        <figcaption>
                            <h2>Creative <span>Zoe</span></h2>
                            <p class="icon-links">
                                <a href="#"><i class="fa fa-heart-o"></i></a>
                                <a href="#"><i class="fa fa-facebook-official"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </p>
                            <p class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p>
                        </figcaption>
                    </figure>



                    <figure class="effect-zoe">
                        <img src="8.jpg" alt="img25"/>
                        <figcaption>
                            <h2>Creative <span>Zoe</span></h2>
                            <p class="icon-links">
                                <a href="#"><i class="fa fa-heart-o"></i></a>
                                <a href="#"><i class="fa fa-facebook-official"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </p>
                            <p class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p>
                        </figcaption>
                    </figure>
                    <figure class="effect-zoe">
                        <img src="9.jpg" alt="img26"/>
                        <figcaption>
                            <h2>Creative <span>Zoe</span></h2>
                            <p class="icon-links">
                                <a href="#"><i class="fa fa-heart-o"></i></a>
                                <a href="#"><i class="fa fa-facebook-official"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </p>
                            <p class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p>
                        </figcaption>
                    </figure>


                    <figure class="effect-zoe">
                        <img src="10.jpg" alt="img25"/>
                        <figcaption>
                            <h2>Creative <span>Zoe</span></h2>
                            <p class="icon-links">
                                <a href="#"><i class="fa fa-heart-o"></i></a>
                                <a href="#"><i class="fa fa-facebook-official"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </p>
                            <p class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p>
                        </figcaption>
                    </figure>
                    <figure class="effect-zoe">
                        <img src="11.jpg" alt="img26"/>
                        <figcaption>
                            <h2>Creative <span>Zoe</span></h2>
                            <p class="icon-links">
                                <a href="#"><i class="fa fa-heart-o"></i></a>
                                <a href="#"><i class="fa fa-facebook-official"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </p>
                            <p class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p>
                        </figcaption>
                    </figure>



                    <figure class="effect-zoe">
                        <img src="12.jpg" alt="img25"/>
                        <figcaption>
                            <h2>Creative <span>Zoe</span></h2>
                            <p class="icon-links">
                                <a href="#"><i class="fa fa-heart-o"></i></a>
                                <a href="#"><i class="fa fa-facebook-official"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </p>
                            <p class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p>
                        </figcaption>
                    </figure>
                    <figure class="effect-zoe">
                        <img src="13.jpg" alt="img26"/>
                        <figcaption>
                            <h2>Creative <span>Zoe</span></h2>
                            <p class="icon-links">
                                <a href="#"><i class="fa fa-heart-o"></i></a>
                                <a href="#"><i class="fa fa-facebook-official"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </p>
                            <p class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p>
                        </figcaption>
                    </figure>



                    <figure class="effect-zoe">
                        <img src="14.jpg" alt="img25"/>
                        <figcaption>
                            <h2>Creative <span>Zoe</span></h2>
                            <p class="icon-links">
                                <a href="#"><i class="fa fa-heart-o"></i></a>
                                <a href="#"><i class="fa fa-facebook-official"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </p>
                            <p class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p>
                        </figcaption>
                    </figure>
                    <figure class="effect-zoe">
                        <img src="15.jpg" alt="img26"/>
                        <figcaption>
                            <h2>Creative <span>Zoe</span></h2>
                            <p class="icon-links">
                                <a href="#"><i class="fa fa-heart-o"></i></a>
                                <a href="#"><i class="fa fa-facebook-official"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </p>
                            <p class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p>
                        </figcaption>
                    </figure>



                    <figure class="effect-zoe">
                        <img src="16.jpg" alt="img25"/>
                        <figcaption>
                            <h2>Creative <span>Zoe</span></h2>
                            <p class="icon-links">
                                <a href="#"><i class="fa fa-heart-o"></i></a>
                                <a href="#"><i class="fa fa-facebook-official"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </p>
                            <p class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p>
                        </figcaption>
                    </figure>
                    <figure class="effect-zoe">
                        <img src="17.jpg" alt="img26"/>
                        <figcaption>
                            <h2>Creative <span>Zoe</span></h2>
                            <p class="icon-links">
                                <a href="#"><i class="fa fa-heart-o"></i></a>
                                <a href="#"><i class="fa fa-facebook-official"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </p>
                            <p class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p>
                        </figcaption>
                    </figure>



                    <figure class="effect-zoe">
                        <img src="18.jpg" alt="img25"/>
                        <figcaption>
                            <h2>Creative <span>Zoe</span></h2>
                            <p class="icon-links">
                                <a href="#"><i class="fa fa-heart-o"></i></a>
                                <a href="#"><i class="fa fa-facebook-official"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </p>
                            <p class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p>
                        </figcaption>
                    </figure>


                </div>


            </section>
        </div>



        <a id="back-to-top" href="#" class="btn btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>


<!--

            <div class="footer">
                <div style="margin-bottom: 0px;" id="button"></div>
                <div id="container">

                    <div id="cont">

                        <div class="footer_center">
                            <h3 style="">Classy footer text</h3>
                        </div>

                    </div>

                    <div id="cont1">

                        <div class="footer_center">
                            <h3 style="">Classy footer text</h3>
                        </div>

                    </div>

                </div>
            </div>


        <!--</div>-->
        <!-- /.container

    </div>   -->


   <!-- Modal For Hotels Signin -->


    <!-- Modal  -->
    <div class="modal fade" id="hotelregmodal" role="dialog">
        <div style="background:transparent;" class="modal-dialog">

            <!-- Modal content
            <div class="modal-content"> -->

                <div class="modal-body">

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


                                <hr>

                                <span><strong style="padding-left:90px; font-size:20px;">For Hotel Registration <a href="hotelregistration">Register Hotel</a></strong></span>


                            </form>
                        </div>
                    </div>

               <!-- </div> -->
            </div>
        </div>
    </div>


    <!-- Modal For Hotel Sigin Ends here -->


    <!-- Modal For User Sigin -->


    <div class="modal fade" id="userregmodal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content
            <div class="modal-content"> -->

                <div class="modal-body">


                    <div class="form-box1">
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3>Login to our site</h3>
                                <p>Enter username and password to log on:</p>
                            </div>
                            <div class="form-top-right">
                                <i class="fa fa-lock"></i>
                            </div>
                        </div>
                        <div class="form-bottom">
                            <form role="form" action="/hbook" method="post" class="login-form">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label class="sr-only" for="username">Email</label>
                                    <input type="email" name="email" placeholder="Email..." class="form-username form-control" id="form-username">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="password">Password</label>
                                    <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
                                </div>
                                <button type="submit" class="btn">Sign in!</button>
                                <hr>

                                <div class="social-login">

                                    <div class="social-login-buttons">
                                        <a style="" class="btn btn-link-2" href="#">
                                            <i  class="fa fa-facebook"><strong style="padding-left:5px;">Facebook</strong></i>
                                        </a>
                                        <a class="btn btn-link-2" href="#">
                                            <i  class="fa fa-twitter"><strong style="padding-left:5px;">Twiiter</strong></i>
                                        </a>
                                        <a class="btn btn-link-2" href="#">
                                            <i  class="fa fa-google-plus"><strong style="padding-left:5px;">Google</strong></i>
                                        </a>
                                    </div>
                                    <h3>For Sign Up Go to <a href="registration">Signup</a></h3>

                                </div>
                            </form>
                        </div>
                    </div>




                </div>
            </div>

        <!--</div> -->
    </div>

    </div>



    <!-- Modal For User Sigin Ends here -->






    <!-- /.intro-header -->

    <!-- Page Content -->

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Javascript
    <script src="jquery-1.11.1.min.js"></script>
    <script src="bootstrap.min.js"></script>  -->
    <script src="jquery.backstretch.min.js"></script>
    <script src="scripts.js"></script>


    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <!--<script src="js/bootstrap.min.js"></script>-->






    <script>


        // Google Places Library
        function initialize() {
            var defaultBounds = new google.maps.LatLngBounds(
                new google.maps.LatLng(37.971297,-122.523168)
            );

            var origin_input = document.getElementById('startAddress');
            var destination_input = document.getElementById('endAddress');
            var options = {
                bounds: defaultBounds,
                componentRestrictions: {country: 'us'}
            };
            var autocomplete_origin = new google.maps.places.Autocomplete(origin_input, options);
            var autocomplete_destination = new google.maps.places.Autocomplete(destination_input, options);
        }
        google.maps.event.addDomListener(window, 'load', initialize);

        // Set current date
        var curDateTime = new Date();
        var curYear = curDateTime.getFullYear();
        var curMonth = curDateTime.getMonth() + 1;
        var curDay = curDateTime.getDate();
        var curDate = "";
        curDate = ((curMonth < 10) ? "0" : "") + curMonth + "/" + curDay + "/" + curYear;
        document.getElementById("date").value = curDate;

        // Date and time picker
        $(function () {
            $('#date').datepicker();
            $('input.timepicker').timepicker({
                timeFormat: 'h:mm p',
                interval: 30,
                minHour: 0,
                maxHour: 24,
                defaultTime: 'now',
                dropdown: true,
                dynamic: false,
            });
        });

        // Reverse origin and destination
        function swapOD() {
            var priorStart = $("#startAddress").val();
            var priorEnd = $("#endAddress").val();
            $("#startAddress").val(priorEnd);
            $("#endAddress").val(priorStart);
        }
        $('[data-toggle="tooltip"]').tooltip(); // Add tooltip to button


    </script>


     <script>

         $(document).ready(function(){
             $(window).scroll(function () {
                 if ($(this).scrollTop() > 50) {
                     $('#back-to-top').fadeIn();
                 } else {
                     $('#back-to-top').fadeOut();
                 }
             });
             // scroll body to 0px on click
             $('#back-to-top').click(function () {
                 $('#back-to-top').tooltip('hide');
                 $('body,html').animate({
                     scrollTop: 0
                 }, 800);
                 return false;
             });

             $('#back-to-top').tooltip('show');

         });


     </script>




</body>

</html>
