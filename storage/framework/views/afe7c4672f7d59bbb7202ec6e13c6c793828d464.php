
<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hotel Profile</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="/css-stars.css">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/navbar-fixed-top.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>



    <!-- embedding bootstrap 4 cdn and google icons and awesome font -->

  <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous"> -->
    <!--<link rel="stylesheet" href="/public/css/bootstrap.min.css" type="text/css"> -->

   <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script> -->
    <!--<link rel="stylesheet" href="/css/bootstrap.css" type="text/css"> -->
   <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>-->
   <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script> -->


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


    <style>


        .tab-pane {

            border: 2px solid black;
            width: 800px;
            height: auto;
            background-color:blue;
        }

        .tab-pane:not(.active):hover {

            opacity: 0;
            visibility: hidden;

        }

        /*   .tab-pane:not(:hover){
               opacity: 0.3;
           }

           .tab-pane {
               border: 2px solid black;
           }

        /*   .tab-pane:hover:not(.active) {

               opacity: 0;

           }

          /* .tab-pane not hover {

               opacity: 0;
           } */

        body {font-family: "Lato", sans-serif;}

        /* Style the tab */
        div.tab {
            overflow: hidden;
            border: 1px solid #ccc;
            width: 700px;
            background-color: #f1f1f1;
        }

        /* Style the buttons inside the tab */
        div.tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 17px;
        }

        /* Change background color of buttons on hover */
        div.tab button:hover {
            background-color: #ddd;
        }

        /* Create an active/current tablink class */
        div.tab button.active {
            background-color: #ccc;
        }

        /* Style the tab content */
       /* .tabcontent {
            display: none;
            width: 698px;
            height:auto;
            padding: 6px 12px;
            -webkit-animation: fadeEffect 2s;
            margin-left: 352px;
            animation: fadeEffect 2s;
            border-left: 1px solid black;
            border-bottom: 1px solid black;
            border-right:1px solid black;
            border-radius: 1px
        } */
        div.tabcontent {
            display: none;
            overflow: hidden;
            border: 1px solid #ccc;
            width: 700px;
            height: 500px;
            background-color: #f1f1f1;
            -webkit-animation: fadeEffect 3s;
            padding: 6px 12px;
            -webkit-animation: fadeEffect 3s;
            margin-left: 350px;
            animation: fadeEffect 3s;
            border-top: none;

          /*  border-left: 1px solid;
            border-bottom: 1px solid;
            border-right:1px solid; */
            border-radius: 1px
        }


        /* Fade in tabs */
        @-webkit-keyframes fadeEffect {
            from {opacity: 0;}
            to {opacity: 1;}
        }

        @keyframes  fadeEffect {
            from {opacity: 0;}
            to {opacity: 1;}
        }

        .center1 {
            /*  text-align: center;
              border: 3px solid green; */
            margin-left:215px;
        }


        #element1{
             width: 595px;
            margin-left: 400px;
            border-left: 1px solid black;
            border-bottom: 1px solid black;
            border-right:1px solid black;
            border-radius: 1px; }


        .grid {
            position: relative;
            clear: both;
            margin: 0 auto;
            padding: 1em 0 4em;
            max-width: 1400px;
            list-style: none;
            text-align: center;
        }

        .center-block {

            display: block;
            margin-right: auto;
            margin-left: auto;
        }

        .grid1 {
            position: relative;
            clear: both;
            margin: 0 auto;
            padding: 1em 0 4em;
            max-width: 1000px;
            height:300px;
            list-style: none;
            text-align: center;
        }

        .grid2 {
            position: relative;
            clear: both;
            margin: 0 auto;
            padding: 1em 0 4em;
            max-width: 680px;
            list-style: none;
            text-align: center;
        }

        .jmb{
               max-width: 1000px; height: 330px; }


        /* Style the close button */
        .topright {
            float: right;
            cursor: pointer;
            font-size: 20px;
        }

        .topright:hover {color: red;}


        /* Main carousel style */
        .carousel {
            width: 700px;
            margin-top: -57px;
            height: 557px;
            margin-left: 410px;
            border: 2px solid black;
            padding: 6px;
        }

        .article-slide{
            border: 2px solid black;
        }

        /* Indicators list style */
        .article-slide .carousel-indicators {
            top:80%;
            bottom: 5%;
            left: 1%;
            margin-left: auto;
            margin-right: auto;
            width: 690px;
            height: auto;

        }
        /* Indicators list style */
        .article-slide .carousel-indicators li {
            border: medium none;
            border-radius: 0;
            float: left;
            height: 42px;
            margin-bottom: 5px;
            margin-left: auto;
            margin-right: 4px !important;
            margin-top: 3px;
            width: 94px;
        }
        /* Indicators images style */
        .article-slide .carousel-indicators img {
            border: 2px solid #FFFFFF;
            float: left;
            height: 54px;
            display: block;
            visibility: visible;
            opacity: 1.0;
            left: 0;
            width: 100px;
        }
        /* Indicators active image style */
        .article-slide .carousel-indicators .active img {
            border: 2px solid #428BCA;
            display: block;
            visibility: visible;
            opacity: 1.0;
            border: 1px solid black;
        }

        .descriptiontext{
            /* line-height: 1.5px; */
            font-size: 18px;
            text-indent: 1px;
            /* font-kerning: auto; */
            padding-bottom:1px;
            margin-top: 50px;
            width: 650px;
            text-align: left;
            margin-bottom: auto;
            margin-right: auto;
            margin-left: auto;
        }



        button.accordion {
            background-color: #eee;
            color: #444;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            transition: 0.4s;
        }

        button.accordion.active, button.accordion:hover {
            background-color: #ccc;
        }

        button.accordion:after {
            content: '\002B';
            color: #777;
            font-weight: bold;
            float: right;
            margin-left: 5px;
        }

        button.accordion.active:after {
            content: "\2212";
        }

        div.panel {
            padding: 0 18px;
            background-color: white;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
        }



          /*   User Star Based Rating Scorecard .......!   */

        * {
            box-sizing: border-box;
        }



        .heading {
            font-size: 25px;
            margin-right: 25px;
        }

        .fa {
            font-size: 25px;
        }

        .checked {
            color: orange;
        }

        /* Three column layout */
        .side {
            float: left;
            width: 15%;
            margin-top:10px;
        }

        .middle {
            margin-top:10px;
            float: left;
            width: 70%;
        }

        /* Place text to the right */
        .right {
            text-align: right;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* The bar container */
        .bar-container {
            width: 100%;
            background-color: #f1f1f1;
            text-align: center;
            color: white;
        }

        /* Individual bars */
        .bar-5 {width: 60%; height: 18px; background-color: #4CAF50;}
        .bar-4 {width: 30%; height: 18px; background-color: #2196F3;}
        .bar-3 {width: 10%; height: 18px; background-color: #00bcd4;}
        .bar-2 {width: 4%; height: 18px; background-color: #ff9800;}
        .bar-1 {width: 15%; height: 18px; background-color: #f44336;}

        /* Responsive layout - make the columns stack on top of each other instead of next to each other */
        @media (max-width: 400px) {
            .side, .middle {
                width: 100%;
            }
            .right {
                display: none;
            }
        }

           /* other start */


        .btn-grey{
            background-color:#D8D8D8;
            color:#FFF;
        }
        .rating-block{
            background-color:#FAFAFA;
            border:1px solid #EFEFEF;
            padding:15px 15px 20px 15px;
            border-radius:3px;
        }
        .bold{
            font-weight:700;
        }
        .padding-bottom-7{
            padding-bottom:7px;
        }

        .review-block{
            background-color:#FAFAFA;
            border:1px solid #EFEFEF;
            padding:15px;
            border-radius:3px;
            margin-bottom:15px;
        }
        .review-block-name{
            font-size:12px;
            margin:10px 0;
        }
        .review-block-date{
            font-size:12px;
        }
        .review-block-rate{
            font-size:13px;
            margin-bottom:15px;
        }
        .review-block-title{
            font-size:15px;
            font-weight:700;
            margin-bottom:10px;
        }
        .review-block-description{
            font-size:13px;
        }


        .pagination{
            padding: 30px 0;
        }

        .pagination ul{
            margin: 0;
            padding: 0;
            list-style-type: none;
        }

        .pagination a{
            display: inline-block;
            padding: 10px 18px;
            color: #222;
        }


        .p4 a{
            width: 40px;
            height: 40px;
            line-height: 40px;
            border-radius: 100%;
            padding: 0;
            text-align: center;
            position: relative;
            border: 3px solid #2ecc71;
        }

        .p4 .is-active:before{
            content: "";
            width: 30px;
            height: 30px;
            border-radius: 100%;
            background-color: #2ecc71;
            position: absolute;
            top: 5px;
            left: 5px;
        }



        .p12 a:first-of-type, .p12 a:last-of-type, .p12 .is-active{
            background-color: #2ecc71;
            color: #fff;
            font-weight: bold;
        }

        #myBtn {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 30px;
            z-index: 99;
            border: none;
            outline: none;
            background-color: red;
            color: white;
            cursor: pointer;
            padding: 15px;
            border-radius: 10px;
        }
        #myBtn:hover {
            background-color: #555;
        }



    </style>
</head>

<body>


<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">HotelName</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span><i class="fa fa-envelope fa-lg" aria-hidden="true"></i></span> Sign Up</a></li>
            <li><a href="#"><span><i class="fa fa-globe fa-lg" aria-hidden="true"></i></span> Login</a></li>
        </ul>
    </div>
</nav>

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

<div class="grid">


    <div class="jmb center-block">
        <h1 class="display-3">Hello, world!</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
       <!-- <p class="lead">
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </p> -->
    </div>

</div>

   <div style="margin-top: -120px;" class="grid">

       <div style="float: left; overflow: hidden; width: 300px; height: 555px; border: 1px solid black; margin-left: 20px;">

           <button class="accordion">Section 1</button>
           <div class="panel">

               <img style=" float: left; border: 1px solid #ddd;
    border-radius: 4px;
    padding: 5px;
    width: 150px;" src="/images/3.jpg" alt="Forest">

               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
           </div>

           <button class="accordion">Section 2</button>
           <div class="panel">

             <!--  <a target="_blank" href="img_forest.jpg"> -->
                   <img style=" float: left; border: 1px solid #ddd;
    border-radius: 4px;
    padding: 5px;
    width: 150px;" src="/images/1.jpg" alt="Forest">

               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
           </div>

           <button class="accordion">Section 3</button>
           <div class="panel">

               <img style=" float: left; border: 1px solid #ddd;
    border-radius: 4px;
    padding: 5px;
    width: 150px;" src="/images/2.jpg" alt="Forest">

               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
           </div>
           <button class="accordion">Section 4</button>
           <div class="panel">

               <!--  <a target="_blank" href="img_forest.jpg"> -->
               <img style=" float: left; border: 1px solid #ddd;
    border-radius: 4px;
    padding: 5px;
    width: 150px;" src="/images/4.jpg" alt="Forest">

               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
           </div>

           <button class="accordion">Section 5</button>
           <div class="panel">

               <img style=" float: left; border: 1px solid #ddd;
    border-radius: 4px;
    padding: 5px;
    width: 150px;" src="/images/5.jpg" alt="Forest">

               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
           </div>



       </div>

       <div style="float: right; overflow: hidden; width: 300px; height: 555px; border: 1px solid black; margin-right: 20px;">


           <div id="googleMap" style="height:300px;background:yellow; margin-top:52px; margin-bottom: 50px;"></div>


               <div style=" height: 80px; margin: auto; width: 280px; border: 2px solid black; border-radius: 2px;">
                   <div style="height: 60px; width: 260px; padding:auto; margin-left:8px; margin-right: 5px; margin-top: 8px; margin-bottom:7px;
                        border: 2px solid black; border-radius: 2px;">

                    <!--   <button class="btn btn-success">Reserve</button> -->
                       <button type="button" class="btn btn-success btn-large" data-toggle="modal" data-target="#myModal">Reserve</button>

                   </div>
               </div>
       </div>




     <div style="margin-bottom: 500px; margin-right: 320px;">
    <div   class="tab btn-group btn-group-lg" >
    <button style="margin-left: 55px; margin-right: 5px;" class="tablinks" onclick="openCity(event, 'Desc')" id="defaultOpen">Description</button>
    <button style="margin-left: 10px; margin-right: 5px;" class="tablinks" onclick="openCity(event, 'Facilities')">Facilities</button>
    <button style="margin-left: 10px; margin-right: 5px;" class="tablinks" onclick="openCity(event, 'Room')">Room Info & Prices</button>
    <button style="margin-left: 10px; margin-right: 5px;" class="tablinks" onclick="openCity(event, 'House')">House Rules</button>
    </div>



    <div  id="Desc" class="tabcontent">

        <span onclick="this.parentElement.style.display='none'" class="topright"><i class="fa fa-window-close"></i></span>

        <br>
        <div class="center-block">
        <p class="descriptiontext">The Golders Green Hotel is in a quiet area, 700 m from Golders Green London Underground Station. It has free Wi-Fi, free off-street parking and good-value en suite rooms.

            The Golders Green Hotel is in North London, a short walk from Hampstead Heath. There are shops, restaurants and bars a short walk away and Brent Cross Shopping Centre is 2.4 km (2.4 km) from the hotel.

            Local buses and national coaches run regularly from Golders Green Station to all of London's airports and all around the city. Central London is 15 minutes away by Tube.

            The rooms have TVs, telephones and hairdryers. Tea/coffee making facilities are available 24 hours a day in the dining room.

            We speak your language!

            Golders Green Hotel has been welcoming Booking.com guests since 5 Feb 2010.</p>
        </div>

    </div>


    <div  id="Facilities" class="tabcontent">
        <span onclick="this.parentElement.style.display='none'" class="topright"><i class="fa fa-window-close"></i></span>

        <br>

        <div class="center-block">

        <span style="display: inline; font-size: 18px; text-align: center; color: #1f648b"><p>
                        <i class="fa fa-wifi"><b style="margin-left: 5px; margin-right: 10px;
            font-family: 'Convergence';">Wifi</b></i>
                        <i class="fa fa-taxi"><b style="margin-left: 5px; margin-right: 10px;
            font-family: 'Convergence';">Taxi</b></i>
                        <i class="fa fa-bath"><b style="margin-left: 5px; margin-right: 10px;
            font-family: 'Convergence';">Bar</b></i>
                     <i class="fa fa-cutlery"><b style="margin-left: 5px; margin-right: 10px;
            font-family: 'Convergence';">Restaurant</b></i>
                        <i class="fa fa-bed"><b style="margin-left: 5px; margin-right: 10px;
            font-family: 'Convergence';">Room</b></i>
                        <i class="fa fa-plane"><b style="margin-left: 5px; margin-right: 10px;
            font-family: 'Convergence';">Airplane Shuttle</b></i>
                    </p></span>

        <!--  <span style="display: inline; font-size: 18px; text-align: center; color: #1f648b"><p>
                 </p></span> -->

        <div class="center-block" style="border: 1px solid black;">

            <div style="float: left">
                <i style="margin-left: -9px;" class="fa fa-wifi"><b style="margin-left: 2px; margin-right: 10px;
            font-family: 'Convergence';">Wifi</b></i>

                <ul>

                    <li><p style="margin-right: 22px; margin-bottom: 1px;">Coffee</p></li>
                    <li><p style="margin-right: 22px; margin-bottom: 1px;">Coffee</p></li>
                    <li><p style="margin-right: 22px; margin-bottom: 1px;">Coffee</p></li>
                    <li><p style="margin-right: 22px; margin-bottom: 1px;">Coffee</p></li>
                    <li><p style="margin-right: 22px; margin-bottom: 1px;">Coffee</p></li>

                </ul>
            </div>


            <div style="margin-right:  150px;">
                <i style="margin-left: -48px;" class="fa fa-wifi"><b style="margin-left: 2px; margin-right: 10px;
            font-family: 'Convergence';">Wifi</b></i>

                <ul>

                    <li><p style="margin-right: 22px; margin-bottom: 1px;">Coffee</p></li>
                    <li><p style="margin-right: 22px; margin-bottom: 1px;">Coffee</p></li>
                    <li><p style="margin-right: 22px; margin-bottom: 1px;">Coffee</p></li>
                    <li><p style="margin-right: 22px; margin-bottom: 1px;">Coffee</p></li>
                    <li><p style="margin-right: 22px; margin-bottom: 1px;">Coffee</p></li>


                </ul>
            </div>



            <div style="margin-top: -160px; margin-left: 425px;">
                <i style="margin-left: 20px;" class="fa fa-wifi"><b style="margin-left: 2px; margin-right: 10px;
            font-family: 'Convergence';">Wifi</b></i>

                <ul>

                    <li>Coffee</li>
                    <li>Tea</li>
                    <li>Coca Cola</li>
                    <li>Tea</li>
                    <li>Coca Cola</li>

                </ul>
            </div>

        </div>



        <div style="border: 1px solid transparent;">

            <div style="float: left">
                <i style="margin-left: 20px;" class="fa fa-wifi"><b style="margin-left: 2px; margin-right: 10px;
            font-family: 'Convergence';">Wifi</b></i>

                <ul>

                    <li>Coffee</li>
                    <li>Tea</li>
                    <li>Coca Cola</li>
                    <li>Tea</li>
                    <li>Coca Cola</li>

                </ul>
            </div>



            <div class="center1">
                <i style="margin-left: 20px;" class="fa fa-wifi"><b style="margin-left: 2px; margin-right: 10px;
            font-family: 'Convergence';">Wifi</b></i>

                <ul>

                    <li>Coffee</li>
                    <li>Tea</li>
                    <li>Coca Cola</li>
                    <li>Tea</li>
                    <li>Coca Cola</li>

                </ul>
            </div>



            <div style="margin-top: -160px; margin-left: 425px;">
                <i style="margin-left: 20px;" class="fa fa-wifi"><b style="margin-left: 2px; margin-right: 10px;
            font-family: 'Convergence';">Wifi</b></i>

                <ul>

                    <li>Coffee</li>
                    <li>Tea</li>
                    <li>Coca Cola</li>
                    <li>Tea</li>
                    <li>Coca Cola</li>

                </ul>
            </div>

        </div>
            </div>

    </div>


    <div  id="Room" class="tabcontent">

        <span onclick="this.parentElement.style.display='none'" class="topright"><i class="fa fa-window-close"></i></span>

        <table class="table table-sm">
            <thead>
            <tr>
                <th>Sleeps</th>
                <th>Room Type</th>
                <th>Further Info</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row"> <i class="fa fa-user"></i></th>
                <td><p>Standard Double or Twin Room</p>
                    <span><p><i class="fa fa-bed"><b style="margin-left: 5px; margin-right: 10px;
            font-family: 'Convergence';">2 bed or more</b></i></p></span>
                </td>
                <td><button style="margin-top: 18px;" class="btn btn-secondary">Room Info & Prices</button></td>
            </tr>
            <tr>
                <th scope="row"> <i class="fa fa-user"></i> <i class="fa fa-user"></i> </th>
                <td><p>Standard Double or Twin Room</p>
                    <span><p><i class="fa fa-bed"><b style="margin-left: 5px; margin-right: 10px;
            font-family: 'Convergence';">1 small bed</b></i></p></span>
                </td>
                <td><button style="margin-top: 18px;" class="btn btn-secondary">Room Info & Prices</button></td>
            </tr>
            <tr>
                <th scope="row"><i class="fa fa-user"></i> <i class="fa fa-user"></i> + <i class="fa fa-user"></i></th>
                <td><p>Luxry Deluxe Double or Twin Rooms</p>
                    <span><p><i class="fa fa-bed"><b style="margin-left: 5px; margin-right: 10px;
            font-family: 'Convergence';">2 deluxe bed</b></i></p></span>
                </td>
                <td><button style="margin-top: 18px;" class="btn btn-secondary">Room Info & Prices</button></td>
            </tr>

            <tr>
                <th scope="row"><i class="fa fa-users"></i></th>
                <td><p>Connecting Family Rooms</p>
                    <span><p><i class="fa fa-bed"><b style="margin-left: 5px; margin-right: 10px;
            font-family: 'Convergence';">Beds for multiple person</b></i></p></span>
                </td>
                <td><button style="margin-top: 18px;" class="btn btn-secondary">Room Info & Prices</button></td>
            </tr>

            <tr>
                <th scope="row"><i class="fa fa-user"></i> <i class="fa fa-user"></i> + <i class="fa fa-user"></i> <i class="fa fa-user"></i></th>
                <td><p>Economy Double Room without Window</p>
                    <span><p><i class="fa fa-bed"><b style="margin-left: 5px; margin-right: 10px;
            font-family: 'Convergence';">Double bed for couple</b></i></p></span>
                </td>
                <td><button style="margin-top: 18px;" class="btn btn-secondary">Room Info & Prices</button></td>
            </tr>

            </tbody>
        </table>



    </div>

    <div id="House" class="tabcontent">

        <span onclick="this.parentElement.style.display='none'" class="topright"><i class="fa fa-window-close"></i></span>
        <h3>House Rules</h3>
        <p>House is the capital of Japan.</p>
    </div>
   </div>

   </div>
       </div>



    <div style="margin-top: -500px;" class="grid">


        <div style="float: left; overflow: hidden; width: 300px; height: 555px; border: 1px solid black; margin-left: 20px; background-color: #CCCCCC">

            <div class="rating-block">
                <h4>Average user rating</h4>
                <h2 class="bold padding-bottom-7">4.3 <small>/ 5</small></h2>
                <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                </button>
                <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                </button>
                <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                </button>
                <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                </button>
                <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                </button>
            </div>










            <h4 style="text-align:center;">Rating breakdown</h4>
            <div style="margin-left: 30px;">
            <div class="pull-left">
                <div class="pull-left" style="width:35px; line-height:1;">
                    <div style="height:9px; margin:5px 0;">5 <span class="glyphicon glyphicon-star"></span></div>
                </div>
                <div class="pull-left" style="width:180px;">
                    <div class="progress" style="height:9px; margin:8px 0;">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5" style="width: 1000%">
                            <span class="sr-only">80% Complete (danger)</span>
                        </div>
                    </div>
                </div>

                <div class="pull-right" style="margin-left:10px;">1</div>
            </div>
            <div class="pull-left">
                <div class="pull-left" style="width:35px; line-height:1;">
                    <div style="height:9px; margin:5px 0;">4 <span class="glyphicon glyphicon-star"></span></div>
                </div>
                <div class="pull-left" style="width:180px;">
                    <div class="progress" style="height:9px; margin:8px 0;">
                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="5" style="width: 80%">
                            <span class="sr-only">80% Complete (danger)</span>
                        </div>
                    </div>
                </div>
                <div class="pull-right" style="margin-left:10px;">1</div>
            </div>
            <div class="pull-left">
                <div class="pull-left" style="width:35px; line-height:1;">
                    <div style="height:9px; margin:5px 0;">3 <span class="glyphicon glyphicon-star"></span></div>
                </div>
                <div class="pull-left" style="width:180px;">
                    <div class="progress" style="height:9px; margin:8px 0;">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5" style="width: 60%">
                            <span class="sr-only">80% Complete (danger)</span>
                        </div>
                    </div>
                </div>
                <div class="pull-right" style="margin-left:10px;">0</div>
            </div>
            <div class="pull-left">
                <div class="pull-left" style="width:35px; line-height:1;">
                    <div style="height:9px; margin:5px 0;">2 <span class="glyphicon glyphicon-star"></span></div>
                </div>
                <div class="pull-left" style="width:180px;">
                    <div class="progress" style="height:9px; margin:8px 0;">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5" style="width: 40%">
                            <span class="sr-only">80% Complete (danger)</span>
                        </div>
                    </div>
                </div>
                <div class="pull-right" style="margin-left:10px;">0</div>
            </div>
            <div class="pull-left">
                <div class="pull-left" style="width:35px; line-height:1;">
                    <div style="height:9px; margin:5px 0;">1 <span class="glyphicon glyphicon-star"></span></div>
                </div>
                <div class="pull-left" style="width:180px;">
                    <div class="progress" style="height:9px; margin:8px 0;">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="5" style="width: 20%">
                            <span class="sr-only">80% Complete (danger)</span>
                        </div>
                    </div>
                </div>
                <div class="pull-right" style="margin-left:10px;">0</div>
            </div>
        </div>
        </div>


        </div>



    <div class="carousel slide article-slide center-block" id="article-photo-carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner cont-slider">

            <div class="item active">
                <img alt="" title="" height="480px;" width="700px;" src="http://placehold.it/600x400">
            </div>

            <div class="item">
                <img alt="" title="" height="480px;" width="700px;" src="http://placehold.it/600x400">
            </div>
            <div class="item">
                <img alt="" title="" height="480px;"  width="700px;" src="http://placehold.it/600x400">
            </div>
            <div class="item">
                <img alt="" title="" height="480px;" width="700px;" src="http://placehold.it/600x400">
            </div>
            <div class="item">
                <img alt="" title="" height="480px;" width="700px;" src="http://placehold.it/600x400">
            </div>
            <div class="item">
                <img alt="" title="" height="480px;"  width="700px;" src="http://placehold.it/600x400">
            </div>
            <div class="item">
                <img alt="" title="" height="480px;" width="700px;" src="http://placehold.it/600x400">
            </div>
            <div class="item">
                <img alt="" title="" height="480px;" width="700px;" src="http://placehold.it/600x400">
            </div>
            <div class="item">
                <img alt="" title="" height="480px;" width="700px;" src="http://placehold.it/600x400">
            </div>
            <div class="item">
                <img alt="" title="" height="480px;" width="700px;" src="http://placehold.it/600x400">
            </div>
            <div class="item">
                <img alt="" title="" height="480px;" width="700px;" src="http://placehold.it/600x400">
            </div>
            <div class="item">
                <img alt="" title="" height="480px;"  width="700px;" src="http://placehold.it/600x400">
            </div>
            <div class="item">
                <img alt="" title="" height="480px;" width="700px;" src="http://placehold.it/600x400">
            </div>



        </div>
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li class="active" data-slide-to="0" data-target="#article-photo-carousel">
                <img alt="" src="http://placehold.it/250x180">
            </li>
            <li class="" data-slide-to="1" data-target="#article-photo-carousel">
                <img alt="" src="http://placehold.it/250x180">
            </li>
            <li class="" data-slide-to="2" data-target="#article-photo-carousel">
                <img alt="" src="http://placehold.it/250x180">
            </li>
            <li class="" data-slide-to="3" data-target="#article-photo-carousel">
                <img alt="" src="http://placehold.it/250x180">
            </li>
            <li class="" data-slide-to="4" data-target="#article-photo-carousel">
                <img alt="" src="http://placehold.it/250x180">
            </li>
            <li class="" data-slide-to="5" data-target="#article-photo-carousel">
                <img alt="" src="http://placehold.it/250x180">
            </li>
            <li class="" data-slide-to="6" data-target="#article-photo-carousel">
                <img alt="" src="http://placehold.it/250x180">
            </li>
            <li class="" data-slide-to="7" data-target="#article-photo-carousel">
                <img alt="" src="http://placehold.it/250x180">
            </li>
            <li class="" data-slide-to="8" data-target="#article-photo-carousel">
                <img alt="" src="http://placehold.it/250x180">
            </li>
            <li class="" data-slide-to="9" data-target="#article-photo-carousel">
                <img alt="" src="http://placehold.it/250x180">
            </li>
            <li class="" data-slide-to="10" data-target="#article-photo-carousel">
                <img alt="" src="http://placehold.it/250x180">
            </li>
            <li class="" data-slide-to="11" data-target="#article-photo-carousel">
                <img alt="" src="http://placehold.it/250x180">
            </li>
            <li class="" data-slide-to="12" data-target="#article-photo-carousel">
                <img alt="" src="http://placehold.it/250x180">
            </li>
        </ol>
    </div>
</div>
    </div>


</div>


<div class="grid">


    <hr/>

    <div style="float: right; width: 550px; height: 400px; border: 2px solid black; background-color: #CCCCCC" class="center-block">

        <h3 style="text-align: center">Make a Review</h3>


        <div class="center-block">

            <form class="form-horizontal">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label"><b>Your Name</b></label>
                    <div class="col-sm-7">
                        <input type="name" class="form-control" id="inputEmail3" placeholder="Enter Your Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label"><b>Title</b></label>
                    <div class="col-sm-7">
                        <input type="title" class="form-control" id="inputPassword3" placeholder="Enter Your Title">
                    </div>
                </div>

                <div class="form-group">
                    <label for="opinion" class="col-sm-offset-1 col-sm-5 control-label"><b>Your opinion matters to us</b></label>
                    <div class=" col-sm-4">
                        <select id="example">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        </select>
                    </div>
               </div>

                <textarea style="width: 410px;" class="form-control col-sm-offset-1 col-sm-6" rows="5" placeholder="Have Your Say...!"></textarea>

                <div style="margin-top: 15px; margin-left: 330px;" class="col-sm-offset-7 col-sm-4">
                    <button type="submit" class="btn btn-primary btn-md">Submit</button>
                </div>

            </form>

        </div>

    </div>


        <div style=" float:left;width: 650px; height: auto">


        <div class="review-block">
            <div class="row">
                <div class="col-sm-3">
                    <img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">
                    <div class="review-block-name"><a href="#">nktailor</a></div>
                    <div class="review-block-date">January 29, 2016<br/>1 day ago</div>
                </div>
                <div class="col-sm-9">
                    <div class="review-block-rate">
                        <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                    </div>
                    <div class="review-block-title">this was nice in buy</div>
                    <div class="review-block-description">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div>
                </div>
            </div>
            <hr/>
            <div class="row">
                <div class="col-sm-3">
                    <img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">
                    <div class="review-block-name"><a href="#">nktailor</a></div>
                    <div class="review-block-date">January 29, 2016<br/>1 day ago</div>
                </div>
                <div class="col-sm-9">
                    <div class="review-block-rate">
                        <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                    </div>
                    <div class="review-block-title">this was nice in buy</div>
                    <div class="review-block-description">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div>
                </div>
            </div>
            <hr/>
            <div class="row">
                <div class="col-sm-3">
                    <img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">
                    <div class="review-block-name"><a href="#">nktailor</a></div>
                    <div class="review-block-date">January 29, 2016<br/>1 day ago</div>
                </div>
                <div class="col-sm-9">
                    <div class="review-block-rate">
                        <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                    </div>
                    <div class="review-block-title">this was nice in buy</div>
                    <div class="review-block-description">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div>
                </div>

            </div>
            </div>


       <!--     <ul class="pagination">
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
            </ul> -->

            <div class="pagination p12">
                <ul>
                    <a href="#"><li>Previous</li></a>
                    <a href="#"><li>1</li></a>
                    <a href="#"><li>2</li></a>
                    <a href="#"><li>3</li></a>
                    <a href="#"><li>4</li></a>
                    <a href="#"><li>5</li></a>
                    <a class="is-active" href="#"><li>6</li></a>
                    <a href="#"><li>Next</li></a>
                </ul>
            </div>



</div>
</div>








<!--<script src="/public/js/jquery-3.2.1.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="/jquery.barrating.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>


    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>


<script>
    function myMap() {
        var mapProp= {
            center:new google.maps.LatLng(51.508742,-0.120850),
            zoom:5,
        };
        var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
    }
</script><script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAA1750liR_-w6TfMTwnmQDk3Db17HXZXw&callback=myMap"></script>






<script type="text/javascript">
    $(function() {
        $('#example').barrating({
            theme: 'css-stars'
        });
    });
</script>



    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("myBtn").style.display = "block";
            } else {
                document.getElementById("myBtn").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>




<script>
    // Stop carousel

    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].onclick = function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight){
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        }
    }



    $('.carousel').carousel({
        interval: false
    });


    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    document.getElementById("defaultOpen").click();
</script>

    <script>
    (function($){
    function floatLabel(inputType){
    $(inputType).each(function(){
    var $this = $(this);
    // on focus add cladd active to label
    $this.focus(function(){
    $this.next().addClass("active");
    });
    //on blur check field and remove class if needed
    $this.blur(function(){
    if($this.val() === '' || $this.val() === 'blank'){
    $this.next().removeClass();
    }
    });
    });
    }
    // just add a class of "floatLabel to the input field!"
    floatLabel(".floatLabel");
    })(jQuery);

    </script>

<!--<script>
$("#Facilities").hide();
var i = null;
$("#Facilities").mousemove(function() {
clearTimeout(i);
$("#Facilities").show();
i = setTimeout('$("#Facilities").hide();', 50);
}).mouseleave(function() {
clearTimeout(i);
$("#Facilities").hide();
});
</script> -->


</body>
</html>

