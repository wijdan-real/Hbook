
<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hotel Profile</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

    <!-- embedding bootstrap 4 cdn and google icons and awesome font -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap-glyphicons.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href='https://fonts.googleapis.com/css?family=Convergence' rel='stylesheet'>




    <style>


        body{

            font-family: 'Convergence';
        }



        .grid {
            position: relative;
            clear: both;
            margin: 0 auto;
            padding: 1em 0 4em;
            max-width: 1400px;
            list-style: none;
            text-align: center;
        }

        .grid1 {
            position: relative;
            clear: both;
            margin: 0 auto;
            padding: 1em 0 4em;
            max-width: 600px;
            list-style: none;
            text-align: center;
        }


        .up{
            background-image: url('/images/runnyrem-263132.jpg');
            background-size: cover;
            background-position: inherit;
            stroke-opacity: 0.4;
        }

        .descriptiontext{
            /* line-height: 1.5px; */
            font-size: 16px;
            /* font-kerning: auto; */
            font-style: normal;
            padding-bottom:1px;
            padding-top: 1px;
            padding-left: 1px;
            padding-right: 1px;
            text-align: left;
        }


        .modal-dialog{

            border-radius: 0px;
        }

        .modal-content{  border-radius: 1px;



            margin-top:5px;
            margin-bottom:5px;
            margin-left: 5px;
            margin-right: 5px;
        }


        #mymodal{}


        .fa1 {

            border-radius: 5px;
            border: 1px solid black;
            background-color: #1d1e1f;
        }


        .center1 {
          /*  text-align: center;
            border: 3px solid green; */
            margin-left:280px;
        }



         /* Design for Reviews */


        .hide-bullets {
            list-style:none;
            margin-left: -40px;
            margin-top:20px;
        }

        .thumbnail {
            padding: 0;
        }

        .carousel-inner>.item>img, .carousel-inner>.item>a>img {
            width: 100%;
        }




        /* Design for Reviews */


    </style>
</head>


<body>


<div class="grid">

    <div class="jumbotron">
        <h1 class="display-3">Hello, world!</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </p>
    </div>

    <hr>

</div>




<!-- Bootstrap Modal -->


<div class="grid">


   <span>
       <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
       <button type="button" class="btn btn-secondary btn-large" data-toggle="modal" data-target="#myModal">Description</button>
       <button type="button" class="btn btn-secondary btn-large" data-toggle="modal" data-target="#myModal1">Faciliites</button>
       <button type="button" class="btn btn-secondary btn-large" data-toggle="modal" data-target="#myModal2">Room Info & Prices</button>
       <button type="button" class="btn btn-secondary btn-large" data-toggle="modal" data-target="#myModal3">House Rules</button>
       </div>
   </span>

</div>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="purchaseLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="purchaseLabel">Dani Hotel Description</h4>

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">

                    <h3 style="text-align: left">Description</h3>

                    <br>
                    <h5 class="descriptiontext">The Golders Green Hotel is in a quiet area, 700 m from Golders Green London Underground Station. It has free Wi-Fi, free off-street parking and good-value en suite rooms.

                        The Golders Green Hotel is in North London, a short walk from Hampstead Heath. There are shops, restaurants and bars a short walk away and Brent Cross Shopping Centre is 2.4 km (2.4 km) from the hotel.

                        Local buses and national coaches run regularly from Golders Green Station to all of London's airports and all around the city. Central London is 15 minutes away by Tube.

                        The rooms have TVs, telephones and hairdryers. Tea/coffee making facilities are available 24 hours a day in the dining room.

                        We speak your language!

                        Golders Green Hotel has been welcoming Booking.com guests since 5 Feb 2010.</h5>


                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">x</button>
                    <button type="button" class="btn btn-primary">Purchase</button>
                </div>
            </div>
        </div>
    </div>
<!--</div> -->




</div>

<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="purchaseLabel" aria-hidden="true">
    <div style="width: 800px;" class="modal-dialog modal-lg">
        <div class="modal-content">
            <div  class="modal-header">
                <h4 class="modal-title" id="purchaseLabel">Dani Hotel Facilities</h4>

                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">

                <h3 style="text-align: left">Most Popular Facilities</h3>

                <br>



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



                    <div style="margin-top: -160px; margin-left: 540px;">
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



                    <div style="margin-top: -160px; margin-left: 540px;">
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


            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">x</button>
                <button type="button" class="btn btn-primary">Purchase</button>
            </div>
        </div>
    </div>
</div>

</div>




<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="purchaseLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="purchaseLabel">Dani Hotel Facilities</h4>

                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">


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


            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">x</button>
                <button type="button" class="btn btn-primary">Purchase</button>
            </div>
        </div>
    </div>
</div>

</div>


<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="purchaseLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="purchaseLabel">Dani Hotel Facilities</h4>

                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">

                <h3 style="text-align: left">Description</h3>

                <br>
                <h5 class="descriptiontext">The Golders Green Hotel is in a quiet area, 700 m from Golders Green London Underground Station. It has free Wi-Fi, free off-street parking and good-value en suite rooms.

                    The Golders Green Hotel is in North London, a short walk from Hampstead Heath. There are shops, restaurants and bars a short walk away and Brent Cross Shopping Centre is 2.4 km (2.4 km) from the hotel.

                    Local buses and national coaches run regularly from Golders Green Station to all of London's airports and all around the city. Central London is 15 minutes away by Tube.

                    The rooms have TVs, telephones and hairdryers. Tea/coffee making facilities are available 24 hours a day in the dining room.

                    We speak your language!

                    Golders Green Hotel has been welcoming Booking.com guests since 5 Feb 2010.</h5>


            </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">x</button>
                <button type="button" class="btn btn-primary">Purchase</button>
            </div>
        </div>
    </div>
</div>







<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="purchaseLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="purchaseLabel">Dani Hotel Facilities</h4>

                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">

                <h3 style="text-align: left">Description</h3>

                <br>
                <h5 class="descriptiontext">The Golders Green Hotel is in a quiet area, 700 m from Golders Green London Underground Station. It has free Wi-Fi, free off-street parking and good-value en suite rooms.

                    The Golders Green Hotel is in North London, a short walk from Hampstead Heath. There are shops, restaurants and bars a short walk away and Brent Cross Shopping Centre is 2.4 km (2.4 km) from the hotel.

                    Local buses and national coaches run regularly from Golders Green Station to all of London's airports and all around the city. Central London is 15 minutes away by Tube.

                    The rooms have TVs, telephones and hairdryers. Tea/coffee making facilities are available 24 hours a day in the dining room.

                    We speak your language!

                    Golders Green Hotel has been welcoming Booking.com guests since 5 Feb 2010.</h5>


            </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">x</button>
                <button type="button" class="btn btn-primary">Purchase</button>
            </div>
        </div>
    </div>
</div>






<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="purchaseLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="purchaseLabel">Dani Hotel Facilities</h4>

                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">

                <h3 style="text-align: left">Description</h3>

                <br>
                <h5 class="descriptiontext">The Golders Green Hotel is in a quiet area, 700 m from Golders Green London Underground Station. It has free Wi-Fi, free off-street parking and good-value en suite rooms.

                    The Golders Green Hotel is in North London, a short walk from Hampstead Heath. There are shops, restaurants and bars a short walk away and Brent Cross Shopping Centre is 2.4 km (2.4 km) from the hotel.

                    Local buses and national coaches run regularly from Golders Green Station to all of London's airports and all around the city. Central London is 15 minutes away by Tube.

                    The rooms have TVs, telephones and hairdryers. Tea/coffee making facilities are available 24 hours a day in the dining room.

                    We speak your language!

                    Golders Green Hotel has been welcoming Booking.com guests since 5 Feb 2010.</h5>


            </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">x</button>
                <button type="button" class="btn btn-primary">Purchase</button>
            </div>
        </div>
    </div>
</div>




<div class="grid">
    <div id="main_area">
        <!-- Slider -->
        <div class="row">
            <div class="col-sm-6" id="slider-thumbs">
                <!-- Bottom switcher of slider -->
                <ul class="hide-bullets">
                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-0">
                            <img src="http://placehold.it/150x150&text=zero">
                        </a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-1"><img src="http://placehold.it/150x150&text=1"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-2"><img src="http://placehold.it/150x150&text=2"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-3"><img src="http://placehold.it/150x150&text=3"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-4"><img src="http://placehold.it/150x150&text=4"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-5"><img src="http://placehold.it/150x150&text=5"></a>
                    </li>
                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-6"><img src="http://placehold.it/150x150&text=6"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-7"><img src="http://placehold.it/150x150&text=7"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-8"><img src="http://placehold.it/150x150&text=8"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-9"><img src="http://placehold.it/150x150&text=9"></a>
                    </li>
                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-10"><img src="http://placehold.it/150x150&text=10"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-11"><img src="http://placehold.it/150x150&text=11"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-12"><img src="http://placehold.it/150x150&text=12"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-13"><img src="http://placehold.it/150x150&text=13"></a>
                    </li>
                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-14"><img src="http://placehold.it/150x150&text=14"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-15"><img src="http://placehold.it/150x150&text=15"></a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-6">
                <div class="col-xs-12" id="slider">
                    <!-- Top part of the slider -->
                    <div class="row">
                        <div class="col-sm-12" id="carousel-bounding-box">
                            <div class="carousel slide" id="myCarousel">
                                <!-- Carousel items -->
                                <div class="carousel-inner">
                                    <div class="active item" data-slide-number="0">
                                        <img src="http://placehold.it/470x480&text=zero"></div>

                                    <div class="item" data-slide-number="1">
                                        <img src="http://placehold.it/470x480&text=1"></div>

                                    <div class="item" data-slide-number="2">
                                        <img src="http://placehold.it/470x480&text=2"></div>

                                    <div class="item" data-slide-number="3">
                                        <img src="http://placehold.it/470x480&text=3"></div>

                                    <div class="item" data-slide-number="4">
                                        <img src="http://placehold.it/470x480&text=4"></div>

                                    <div class="item" data-slide-number="5">
                                        <img src="http://placehold.it/470x480&text=5"></div>

                                    <div class="item" data-slide-number="6">
                                        <img src="http://placehold.it/470x480&text=6"></div>

                                    <div class="item" data-slide-number="7">
                                        <img src="http://placehold.it/470x480&text=7"></div>

                                    <div class="item" data-slide-number="8">
                                        <img src="http://placehold.it/470x480&text=8"></div>

                                    <div class="item" data-slide-number="9">
                                        <img src="http://placehold.it/470x480&text=9"></div>

                                    <div class="item" data-slide-number="10">
                                        <img src="http://placehold.it/470x480&text=10"></div>

                                    <div class="item" data-slide-number="11">
                                        <img src="http://placehold.it/470x480&text=11"></div>

                                    <div class="item" data-slide-number="12">
                                        <img src="http://placehold.it/470x480&text=12"></div>

                                    <div class="item" data-slide-number="13">
                                        <img src="http://placehold.it/470x480&text=13"></div>

                                    <div class="item" data-slide-number="14">
                                        <img src="http://placehold.it/470x480&text=14"></div>

                                    <div class="item" data-slide-number="15">
                                        <img src="http://placehold.it/470x480&text=15"></div>
                                </div>
                                <!-- Carousel nav -->
                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/Slider-->
        </div>

    </div>
</div>




<script>

    jQuery(document).ready(function($) {

        $('#myCarousel').carousel({
            interval: 5000
        });

        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click(function () {
            var id_selector = $(this).attr("id");
            try {
                var id = /-(\d+)$/.exec(id_selector)[1];
                console.log(id_selector, id);
                jQuery('#myCarousel').carousel(parseInt(id));
            } catch (e) {
                console.log('Regex failed!', e);
            }
        });
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function (e) {
            var id = $('.item.active').data('slide-number');
            $('#carousel-text').html($('#slide-content-'+id).html());
        });
    });


</script>




</body>

</html>




