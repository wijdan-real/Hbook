<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Location Redirect Page</title>

    <!-- embedding bootstrap 4 cdn and google icons and awesome font -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


    <style>

         .hotelbox {

             border-style:groove;
             border: 1px black;
             width: 100px;
             height:auto;

         }





    </style>




</head>


  <body>


          <div class="container">
              <div class="row">


                  <div class="col-lg-3 hotelbox">

                    <img  src="<?php echo e(asset('public\images\nathan-anderson-228741.jpg')); ?>">

                  </div>


                  <div class="col-lg-3 hotelbox">

                      <img  src="<?php echo e(asset('public\images\nathan-anderson-228741.jpg')); ?>">


                  </div>



                  <div class="col-lg-3 hotelbox">


                      <img  src="<?php echo e(asset('public\images\nathan-anderson-228741.jpg')); ?>">

                  </div>




                  <div class="col-lg-3 hotelbox">


                      <img  src="<?php echo e(asset('public\images\nathan-anderson-228741.jpg')); ?>">


                  </div>


              </div>

          </div>





  </body>



</html>