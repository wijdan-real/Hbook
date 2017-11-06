
<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hotel Profile</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">



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
            height: 450px;
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

        @keyframes fadeEffect {
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
            height: 540px;
            margin-left: 350px;
            border: 2px solid black;
            padding: 5px;
        }

        .article-slide{
            border: 2px solid black;
        }

        /* Indicators list style */
        .article-slide .carousel-indicators {
            top:87%;
            bottom: 0;
            left: 0;
            margin-left: auto;
            margin-right: auto;
            width: 700px;
            height: auto;

        }
        /* Indicators list style */
        .article-slide .carousel-indicators li {
            border: medium none;
            border-radius: 0;
            float: left;
            height: 54px;
            margin-bottom: 5px;
            margin-left: 0px;
            margin-right: 4px !important;
            margin-top: 0;
            width: 95px;
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



    </style>
</head>

<body>


<nav class="navbar navbar-inverse">
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

       <div style="float: left; overflow: hidden; width: 300px; height: 505px; border: 1px solid black; margin-left: 20px;">

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

       </div>

       <div style="float: right; overflow: hidden; width: 300px; height: 505px; border: 1px solid black; margin-right: 20px;">

           <p>euvvie ieigei ekegek rkebk rekrk rekebrkrejg jergj
               dbmm fkbk kknkr knrgn rlnltr
           </p>

           <p>euvvie ieigei ekegek rkebk rekrk rekebrkrejg jergj
               dbmm fkbk kknkr knrgn rlnltr
           </p>

           <p>euvvie ieigei ekegek rkebk rekrk rekebrkrejg jergj
               dbmm fkbk kknkr knrgn rlnltr
           </p>

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


    <div class="grid">

    <div class="carousel slide article-slide center-block" id="article-photo-carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner cont-slider">

            <div class="item active">
                <img alt="" title="" width="700px;" src="http://placehold.it/600x400">
            </div>

            <div class="item">
                <img alt="" title="" width="700px;" src="http://placehold.it/600x400">
            </div>
            <div class="item">
                <img alt="" title=""  width="700px;" src="http://placehold.it/600x400">
            </div>
            <div class="item">
                <img alt="" title="" width="700px;" src="http://placehold.it/600x400">
            </div>
            <div class="item">
                <img alt="" title="" width="700px;" src="http://placehold.it/600x400">
            </div>
            <div class="item">
                <img alt="" title=""  width="700px;" src="http://placehold.it/600x400">
            </div>
            <div class="item">
                <img alt="" title="" width="700px;" src="http://placehold.it/600x400">
            </div>
            <div class="item">
                <img alt="" title="" width="700px;" src="http://placehold.it/600x400">
            </div>
            <div class="item">
                <img alt="" title=""  width="700px;" src="http://placehold.it/600x400">
            </div>
            <div class="item">
                <img alt="" title="" width="700px;" src="http://placehold.it/600x400">
            </div>
            <div class="item">
                <img alt="" title="" width="700px;" src="http://placehold.it/600x400">
            </div>
            <div class="item">
                <img alt="" title=""  width="700px;" src="http://placehold.it/600x400">
            </div>
            <div class="item">
                <img alt="" title="" width="700px;" src="http://placehold.it/600x400">
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








<!--<script src="/public/js/jquery-3.2.1.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



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

