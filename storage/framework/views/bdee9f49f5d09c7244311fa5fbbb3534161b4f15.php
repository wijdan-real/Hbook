<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Location Redirect Page</title>

    <!-- embedding bootstrap 4 cdn and google icons and awesome font -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/css/home/normalize.css" />
    <link rel="stylesheet" type="text/css" href="/css/home/demo.css" />
    <link rel="stylesheet" type="text/css" href="/css/home/set2.css" />

    <style>

         .hb {

             border-style:groove;
             border: 1px black;
             width: 100px;
             height:auto;
         }

         .grid.vdivide [class*='effect-ming']:not(:last-child):after {
             background: #e0e0e0;
             width: 1px;
             content: "";
             display:block;
             position:absolute;
             top:0;
             bottom: 0;
             right: 0;
             min-height: 70px;

         }


         .vl {
             border-left: 1px solid green;
             height: 70px;
             position: absolute;
             left: 50%;
             margin-left: -3px;
             top: 0;
         }


           .borderdesgin{

               border: 2px solid white;
               border-style: double;
               border-radius: 0px;
               padding: 0px;

           }



           /* Styling for carousel horizontal */



         .carousel-inner .active.left { left: -33%; }
         .carousel-inner .next        { left:  33%; }
         .carousel-inner .prev        { left: -33%; }
         .carousel-control.left,.carousel-control.right {background-image:none;}
         .item:not(.prev) {visibility: visible;}
         .item.right:not(.prev) {visibility: hidden;}
         .rightest{ visibility: visible;}




    </style>


</head>


  <body>


  <nav style="opacity: 1.0;" class="navbar  navbar-fixed-top navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
          Bootstrap
      </a>
  </nav>


<!--    <div class="grid"> -->

  <div class="grid">


          <iframe width="1220" height="400" src="https://www.youtube.com/embed/H_VxlcdP0Kk">
          </iframe>

      </div>





  <span><p style="color: black">Top Hotels</p></span>








  <div class="container">
      <div class="col-md-12">
          <div class="carousel slide" id="myCarousel">
              <div class="carousel-inner">
                  <div class="item active">
                      <div class="col-lg-3 col-xs-3 col-md-3 col-sm-3">
                          <a href="#"><img src="https://getbootstrap.com/assets/img/bootstrap-stack.png" class="img-responsive">1</a>
                      </div>
                  </div>
                  <div class="item">
                      <div class="col-lg-3 col-xs-3 col-md-3 col-sm-3">
                          <a href="#"><img src="https://getbootstrap.com/assets/img/bootstrap-stack.png" class="img-responsive">1</a>
                      </div>
                  </div>
              </div>
              <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
          </div>
      </div>
  </div>



  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>


  <!-- JS FOR SLIDER -->

<script>

    $(document).ready(function () {
        $('#myCarousel').carousel({
            interval: 5000
        });

        $('.carousel .item').each(function() {
            var next = $(this).next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }
            next.children(':nth-child(1)').clone().appendTo($(this));

            if (next.next().length > 0) {

                next.next().children(':first-child').clone().appendTo($(this)).addClass('rightest');

            } else {
                $(this).siblings(':first').children(':first-child').clone().appendTo($(this));

            }
        });
    });


</script>

  </body>


 <!-- </div> -->
</html>