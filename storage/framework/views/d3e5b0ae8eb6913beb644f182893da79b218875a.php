<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Location Redirect Page</title>

    <!-- embedding bootstrap 4 cdn and google icons and awesome font

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous"> -->


    !-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
  <!--  <link rel="stylesheet" type="text/css" href="/css/home/normalize.css" />
    <link rel="stylesheet" type="text/css" href="/css/home/demo.css" />
    <link rel="stylesheet" type="text/css" href="/css/home/set2.css" />  -->


    <link rel="stylesheet" type="text/css" href="/css/hotelscity/hotelcityset2.css">
    <link rel="stylesheet" type="text/css" href="/css/hotelscity/hotelcitydemo.css">
    <link rel="stylesheet"  type="text/css" href="/css/hotelscity/hotelcitynormalize.css">


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



         /*color: white;
             float: left;
             color: #353b48;
         }
         .brand2 {
              hsl(215,100,25);
             float: right;
             color:  #c44569;

         }  */


           .borderdesgin{

               border: 1px solid transparent;
               border-style: double;
               border-radius: 0px;
               padding: 0px;

           }




          .carousel-inner{ width: 1140px; left: 40px;}
         .carousel-inner .active.left { left: -33%; }
         .carousel-inner .next        { left:  33%; }
         .carousel-inner .prev        { left: -33%; }

         .carousel-control.left { background: none;
             margin-right:10px;}

         .carousel-control.right {background:none; margin-left: 10px; }
         .item:not(.prev) {visibility: visible;}
         .item.right:not(.prev) {visibility: hidden;}
         .rightest{ visibility: visible;}
         .leftest {visibility: visible;}



         .grid-bordered:after {
             content: "";
             display: block;
             border-bottom: 3px solid #353b48;
             margin-top:3px;
             margin: 0 15px;
         }



         .grid-bordered:before {
             content: "";
             display: block;
             border-top: 2px solid #353b48;
             margin-bottom:3px;
             margin: 0 15px;

         }

        body{

            background: white;
            font-family: 'Lato';
        }


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


            /* height: 50px;
             width: 205px; */
             vertical-align: middle;

             font-kerning: none;

             white-space: nowrap;
             /*  color: #7952b3;
               border-color: #7952b3;
               background-color: white; */



             /*  border-color: #353b48;
               color:#353b48; */

             background-color:
                     #c44569;

             color:white;
             border-color:
                     #c44569;


             line-height: 1.2;
             border-radius: .25rem;
             /*padding-top: 15px;
             padding-bottom: 15px;
             padding-left: 60px;
             padding-right: 60px; */
             /* font-size: 2.20rem;
              font-weight: 500; */
             font-size: small;
             font-weight: 400;
         }


         .btn1:active ,.btn1:hover {

             /* background-color: #7952b3;
              color: white; */

             background-color:
                     #c44569;

             color:white;
             border-color:
                     #c44569;

         }

        h3{ color:
                    #c44569;
        }

        a{
            color:
                    #c44569;
        }
        a:active, a:hover{
            color:
                    #c44569;
        }


         .txtcol{
             color: #353b48;
         }
         .sitcolor{
             color: #c44569;
         }




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




    </style>


</head>


  <body>


  <nav style="opacity: 1.0;" class="navbar  navbar-fixed-top navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
          <img src="/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
          Bootstrap
      </a>
  </nav>

  <div class="grid">

      <div id="block2" style=" height: 300px; margin-bottom: 0px;"
           data-vide-bg="mp4:ocean, webm:dash, ogv: http://vodkabears.github.io/vide/video/ocean, poster: video/ocean"
           data-vide-options="position: 0% 50%, muted:false">
      </div>

  </div>


  <div class="grid">
      
    <div class="col-md-4">


        <div style="width: 470px; height: 150px; border-collapse: collapse; padding: 5px; border-radius:3px; color: #353b48;">
            <h3 style="text-align: left">Want to save money</h3>

         <h4 style="text-align: justify; line-height: 2.5rem;">Hbook brings 200+ hotels to help you find the lowest price on the right hotel for you. Brand new advertisement prospects for hotels online.</h4>

        </div>

    </div>

    <div class="col-md-offset-3 col-md-4">

        <div style="border: 2px solid transparent; width: 470px; height: 150px; border-collapse: collapse; padding: 5px; border-radius:3px; color: #353b48;">
            <h3 style="text-align: left">Want to share your travel experience</h3>
            <h4 style="text-align: justify; line-height: 2.5rem;">HBook provides you a wholesome interactive and fun way to create, store and share your travel journey by Socializing. Join our social community.</h4>
            <button class="btn btn1 btn-block btn-lg">Join Now</button>
        </div>

    </div>

      
    
</div>
      


  <div  style="clear: both">
      <h3 style="float: left ; margin-left: 120px;"><b>Popular Hotels</b></h3>
      <h3 style="float: right; margin-right: 120px;"><b><a href="#">See All</a></b></h3>
  </div>

  <div class="grid grid-bordered">
          <div class="carousel slide" id="myCarousel">
              <div style="" class="carousel-inner">
                  <div class="item active">
                     <!-- <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4"> -->


                          <figure class="effect-ming borderdesgin">
                              <img src="/images/5.jpg" alt="img09"/>
                              <figcaption>
                                  <h2>Hotel <span>Name</span></h2>
                                  <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                                      <span><a href="#" class="btn btn-md">View Hotel</a></span></p>
                                  <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                                 <p>  </p>
                                <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                         <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                         <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                              </figcaption>
                          </figure>

                        <!--  <a href="#"><img src="http://lorempixel.com/400/200/sports" class="img-responsive">1</a>

                      </div> -->
                  </div>
                  <div class="item">


                        <!--  <a href="#"><img src="http://lorempixel.com/400/200/" class="img-responsive">2</a>-->

                          <figure class="effect-ming borderdesgin">
                              <img src="images/12.jpg" alt="img08"/>
                              <figcaption>
                                  <h2>Hotel <span>Name</span></h2>
                                  <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                                      <span><a href="#" class="btn btn-md">View Hotel</a></span></p>
                                  <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                                  <p>  </p>
                                  <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                           <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                           <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                              </figcaption>
                          </figure>



                  </div>
                  <div class="item">

                        <!--  <a href="#"><img src="http://lorempixel.com/400/200/sports" class="img-responsive">3</a>-->

                      <figure class="effect-ming borderdesgin">
                          <img src="images/2.jpg" alt="img08"/>
                          <figcaption>
                              <h2>Hotel <span>Name</span></h2>
                              <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                                  <span><a href="#" class="btn btn-md">View Hotel</a></span></p>
                              <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                              <p>  </p>
                              <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                       <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                       <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                          </figcaption>
                      </figure>

                  </div>
                  <div class="item">

                      <figure class="effect-ming borderdesgin">
                          <img src="images/1.jpg" alt="img08"/>
                          <figcaption>
                              <h2>Hotel <span>Name</span></h2>
                              <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                                  <span><a href="#" class="btn btn-md">View Hotel</a></span></p>
                              <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                              <p>  </p>
                              <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                       <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                       <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                          </figcaption>
                      </figure>


                  </div>

                  <div class="item">


                      <figure class="effect-ming borderdesgin">
                          <img src="images/4.jpg" alt="img08"/>
                          <figcaption>
                              <h2>Hotel <span>Name</span></h2>
                              <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                                  <span><a href="#" class="btn btn-md">View Hotel</a></span></p>
                              <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                              <p>  </p>
                              <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                       <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                       <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                          </figcaption>
                      </figure>


                  </div>

                  <div class="item">


                      <figure class="effect-ming borderdesgin">
                          <img src="images/3.jpg" alt="img08"/>
                          <figcaption>
                              <h2>Hotel <span>Name</span></h2>
                              <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                                  <span><a href="#" class="btn btn-md">View Hotel</a></span></p>
                              <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                              <p>  </p>
                              <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                       <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                       <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                          </figcaption>
                      </figure>



                  </div>

                  <div class="item">


                      <figure class="effect-ming borderdesgin">
                          <img src="images/6.jpg" alt="img08"/>
                          <figcaption>
                              <h2>Hotel <span>Name</span></h2>
                              <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                                  <span><a href="#" class="btn btn-md">View Hotel</a></span></p>
                              <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                              <p>  </p>
                              <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                       <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                       <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                          </figcaption>
                      </figure>



                  </div>

                  <div class="item">


                      <figure class="effect-ming borderdesgin">
                          <img src="images/7.jpg" alt="img08"/>
                          <figcaption>
                              <h2>Hotel <span>Name</span></h2>
                              <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                                  <span><a href="#" class="btn btn-md">View Hotel</a></span></p>
                              <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                              <p>  </p>
                              <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                       <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                       <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                          </figcaption>
                      </figure>


                  </div>


                  <div class="item">


                      <figure class="effect-ming borderdesgin">
                          <img src="images/8.jpg" alt="img08"/>
                          <figcaption>
                              <h2>Hotel <span>Name</span></h2>
                              <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                                  <span><a href="#" class="btn btn-md">View Hotel</a></span></p>
                              <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                              <p>  </p>
                              <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                       <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                       <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                          </figcaption>
                      </figure>



                  </div>


                  <div class="item">

                      <figure class="effect-ming borderdesgin">
                          <img src="images/9.jpg" alt="img08"/>
                          <figcaption>
                              <h2>Hotel <span>Name</span></h2>
                              <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                                  <span><a href="#" class="btn btn-md">View Hotel</a></span></p>
                              <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                              <p>  </p>
                              <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                       <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                       <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                          </figcaption>
                      </figure>


                  </div>

                  <div class="item">

                      <figure class="effect-ming borderdesgin">
                          <img src="images/10.jpg" alt="img08"/>
                          <figcaption>
                              <h2>Hotel <span>Name</span></h2>
                              <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                                  <span><a href="#" class="btn btn-md">View Hotel</a></span></p>
                              <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                              <p>  </p>
                              <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                       <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                       <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                          </figcaption>
                      </figure>


                  </div>


                  <div class="item">


                      <figure class="effect-ming borderdesgin">
                          <img src="images/11.jpg" alt="img08"/>
                          <figcaption>
                              <h2>Hotel <span>Name</span></h2>
                              <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                                  <span><a href="#" class="btn btn-md">View Hotel</a></span></p>
                              <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                              <p>  </p>
                              <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                       <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                       <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                          </figcaption>
                      </figure>


                  </div>

                  <div class="item">


                      <figure class="effect-ming borderdesgin">
                          <img src="images/2.jpg" alt="img08"/>
                          <figcaption>
                              <h2>Hotel <span>Name</span></h2>
                              <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                                  <span><a href="#" class="btn btn-md">View Hotel</a></span></p>
                              <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                              <p>  </p>
                              <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                       <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                       <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                          </figcaption>
                      </figure>


                  </div>


              </div>
              <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
          </div>
  </div>


  <div  style="clear: both">
      <h3 style="float: left ; margin-left: 120px;"><b>5 Star Hotels</b></h3>
      <h3 style="float: right; margin-right: 120px;"><b><a href="#">See All</a></b></h3>
  </div>


  <div class="grid grid-bordered">
      <div class="carousel slide" id="myCarousel1">
          <div style="" class="carousel-inner">
              <div class="item active">
                  <!-- <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4"> -->


                  <figure class="effect-ming borderdesgin">
                      <img src="/images/5.jpg" alt="img09"/>
                      <figcaption>
                          <h2>Hotel <span>Name</span></h2>
                          <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                              <span><a href="#" class="btn btn-md">View Hotel</a></span></p>
                          <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                          <p>  </p>
                          <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                      </figcaption>
                  </figure>

                  <!--  <a href="#"><img src="http://lorempixel.com/400/200/sports" class="img-responsive">1</a>

                </div> -->
              </div>
              <div class="item">


                  <!--  <a href="#"><img src="http://lorempixel.com/400/200/" class="img-responsive">2</a>-->

                  <figure class="effect-ming borderdesgin">
                      <img src="images/12.jpg" alt="img08"/>
                      <figcaption>
                          <h2>Hotel <span>Name</span></h2>
                          <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                              <span><a href="#" class="btn btn-md">View Hotel</a></span></p>
                          <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                          <p>  </p>
                          <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                      </figcaption>
                  </figure>



              </div>
              <div class="item">

                  <!--  <a href="#"><img src="http://lorempixel.com/400/200/sports" class="img-responsive">3</a>-->

                  <figure class="effect-ming borderdesgin">
                      <img src="images/2.jpg" alt="img08"/>
                      <figcaption>

                          <h2>Hotel <span>Name</span></h2>
                          <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                              <span><a href="#" class="btn btn-md">View Hotel</a></span></p>
                          <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                          <p>  </p>
                          <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                      </figcaption>
                  </figure>

              </div>
              <div class="item">

                  <figure class="effect-ming borderdesgin">
                      <img src="images/1.jpg" alt="img08"/>
                      <figcaption>
                          <h2>Hotel <span>Name</span></h2>
                          <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                              <span><a href="#" class="btn btn-md">View Hotel</a></span></p>
                          <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                          <p>  </p>
                          <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                      </figcaption>
                  </figure>


              </div>

              <div class="item">


                  <figure class="effect-ming borderdesgin">
                      <img src="images/4.jpg" alt="img08"/>
                      <figcaption>
                          <h2>Hotel <span>Name</span></h2>
                          <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                              <span><a href="#" class="btn btn-md">View Hotel</a></span></p>
                          <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                          <p>  </p>
                          <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->

                      </figcaption>
                  </figure>


              </div>

              <div class="item">


                  <figure class="effect-ming borderdesgin">
                      <img src="images/3.jpg" alt="img08"/>
                      <figcaption>
                          <h2>Hotel <span>Name</span></h2>
                          <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                              <span><a href="#" class="btn btn-md">View Hotel</a></span></p>
                          <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                          <p>  </p>
                          <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                      </figcaption>
                  </figure>



              </div>

              <div class="item">


                  <figure class="effect-ming borderdesgin">
                      <img src="images/6.jpg" alt="img08"/>
                      <figcaption>
                          <h2>Hotel <span>Name</span></h2>
                          <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                              <span><a href="#" class="btn btn-md">View Hotel</a></span></p>
                          <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                          <p>  </p>
                          <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                      </figcaption>
                  </figure>



              </div>

              <div class="item">


                  <figure class="effect-ming borderdesgin">
                      <img src="images/7.jpg" alt="img08"/>
                      <figcaption>
                          <h2>Hotel <span>Name</span></h2>
                          <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                              <span><a href="#" class="btn btn-md">View Hotel</a></span></p>
                          <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                          <p>  </p>
                          <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                      </figcaption>
                  </figure>


              </div>


              <div class="item">


                  <figure class="effect-ming borderdesgin">
                      <img src="images/8.jpg" alt="img08"/>
                      <figcaption>
                          <h2>Hotel <span>Name</span></h2>
                          <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                              <span><a href="#" class="btn btn-md">View Hotel</a></span></p>
                          <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                          <p>  </p>
                          <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                      </figcaption>
                  </figure>



              </div>


              <div class="item">

                  <figure class="effect-ming borderdesgin">
                      <img src="images/9.jpg" alt="img08"/>
                      <figcaption>
                          <h2>Hotel <span>Name</span></h2>
                          <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                              <span><a href="#" class="btn btn-md">View Hotel</a></span></p>
                          <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                          <p>  </p>
                          <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                      </figcaption>
                  </figure>


              </div>

              <div class="item">

                  <figure class="effect-ming borderdesgin">
                      <img src="images/10.jpg" alt="img08"/>
                      <figcaption>
                          <h2>Hotel <span>Name</span></h2>
                          <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                              <span><a href="#" class="btn btn-md">View Hotel</a></span></p>
                          <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                          <p>  </p>
                          <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                      </figcaption>
                  </figure>


              </div>


              <div class="item">


                  <figure class="effect-ming borderdesgin">
                      <img src="images/11.jpg" alt="img08"/>
                      <figcaption>
                          <h2>Hotel <span>Name</span></h2>
                          <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                              <span><a href="#" class="btn btn-md">View Hotel</a></span></p>
                          <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                          <p>  </p>
                          <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                      </figcaption>
                  </figure>


              </div>

              <div class="item">


                  <figure class="effect-ming borderdesgin">
                      <img src="images/2.jpg" alt="img08"/>
                      <figcaption>
                          <h2>Hotel <span>Name</span></h2>
                          <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                              <span><a href="#" class="btn btn-md">View Hotel</a></span></p>
                          <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                          <p>  </p>
                          <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                      </figcaption>
                  </figure>


              </div>


          </div>
          <a class="left carousel-control" href="#myCarousel1" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
          <a class="right carousel-control" href="#myCarousel1" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
      </div>
  </div>


  <div  style="clear: both">
      <h3 style="float: left ; margin-left: 120px;"><b>4 Star Hotels</b></h3>
      <h3 style="float: right; margin-right: 120px;"><b><a href="#">See All</a></b></h3>
  </div>

  <div class="grid grid-bordered">
      <div class="carousel slide" id="myCarousel2">
          <div style="" class="carousel-inner">
              <div class="item active">
                  <!-- <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4"> -->


                  <figure class="effect-ming borderdesgin">
                      <img src="/images/5.jpg" alt="img09"/>
                      <figcaption>
                          <h2>Hotel <span>Name</span></h2>
                          <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                              <span><a href="#" class="btn btn-md">View Hotel</a></span></p>
                          <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                          <p>  </p>
                          <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                      </figcaption>
                  </figure>

                  <!--  <a href="#"><img src="http://lorempixel.com/400/200/sports" class="img-responsive">1</a>

                </div> -->
              </div>
              <div class="item">


                  <!--  <a href="#"><img src="http://lorempixel.com/400/200/" class="img-responsive">2</a>-->

                  <figure class="effect-ming borderdesgin">
                      <img src="images/12.jpg" alt="img08"/>
                      <figcaption>
                          <h2>Hotel <span>Name</span></h2>
                          <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                              <span><a href="#" class="btn btn-md">View Hotel</a></span></p>
                          <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                          <p>  </p>
                          <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                      </figcaption>
                  </figure>



              </div>
              <div class="item">

                  <!--  <a href="#"><img src="http://lorempixel.com/400/200/sports" class="img-responsive">3</a>-->

                  <figure class="effect-ming borderdesgin">
                      <img src="images/2.jpg" alt="img08"/>
                      <figcaption>
                          <h2>Hotel <span>Name</span></h2>
                          <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                              <span><a href="#" class="btn btn-md">View Hotel</a></span></p>
                          <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                          <p>  </p>
                          <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                      </figcaption>
                  </figure>

              </div>
              <div class="item">

                  <figure class="effect-ming borderdesgin">
                      <img src="images/1.jpg" alt="img08"/>
                      <figcaption>
                          <h2>Hotel <span>Name</span></h2>
                          <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                              <span><a href="#" class="btn btn-md">View Hotel</a></span></p>
                          <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                          <p>  </p>
                          <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                      </figcaption>
                  </figure>


              </div>

              <div class="item">


                  <figure class="effect-ming borderdesgin">
                      <img src="images/4.jpg" alt="img08"/>
                      <figcaption>
                          <h2>Hotel <span>Name</span></h2>
                          <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                              <span><a href="#" class="btn btn-md">View Hotel</a></span></p>
                          <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                          <p>  </p>
                          <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                      </figcaption>
                  </figure>


              </div>

              <div class="item">


                  <figure class="effect-ming borderdesgin">
                      <img src="images/3.jpg" alt="img08"/>
                      <figcaption>
                          <h2>Hotel <span>Name</span></h2>
                          <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                              <span><a href="#" class="btn btn-md">View Hotel</a></span></p>
                          <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                          <p>  </p>
                          <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                      </figcaption>
                  </figure>



              </div>

              <div class="item">


                  <figure class="effect-ming borderdesgin">
                      <img src="images/6.jpg" alt="img08"/>
                      <figcaption>
                          <h2>Hotel <span>Name</span></h2>
                          <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                              <span><a href="#" class="btn btn-md">View Hotel</a></span></p>
                          <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                          <p>  </p>
                          <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                      </figcaption>
                  </figure>



              </div>

              <div class="item">


                  <figure class="effect-ming borderdesgin">
                      <img src="images/7.jpg" alt="img08"/>
                      <figcaption>
                          <h2>Hotel <span>Name</span></h2>
                          <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                              <span><a href="#" class="btn btn-md">View Hotel</a></span></p>
                          <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                          <p>  </p>
                          <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                      </figcaption>
                  </figure>


              </div>


              <div class="item">


                  <figure class="effect-ming borderdesgin">
                      <img src="images/8.jpg" alt="img08"/>
                      <figcaption>
                          <h2>Hotel <span>Name</span></h2>
                          <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                              <span><a href="#" class="btn btn-md">View Hotel</a></span></p>
                          <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                          <p>  </p>
                          <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                      </figcaption>
                  </figure>



              </div>


              <div class="item">

                  <figure class="effect-ming borderdesgin">
                      <img src="images/9.jpg" alt="img08"/>
                      <figcaption>
                          <h2>Hotel <span>Name</span></h2>
                          <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                              <span><a href="#" class="btn btn-md">View Hotel</a></span></p>
                          <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                          <p>  </p>
                          <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                      </figcaption>
                  </figure>


              </div>

              <div class="item">

                  <figure class="effect-ming borderdesgin">
                      <img src="images/10.jpg" alt="img08"/>
                      <figcaption>
                          <h2>Hotel <span>Name</span></h2>
                          <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                              <span><a href="#" class="btn btn-md">View Hotel</a></span></p>
                          <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                          <p>  </p>
                          <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                      </figcaption>
                  </figure>


              </div>


              <div class="item">


                  <figure class="effect-ming borderdesgin">
                      <img src="images/11.jpg" alt="img08"/>
                      <figcaption>
                          <h2>Hotel <span>Name</span></h2>
                          <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                              <span><a href="#" class="btn btn-md">View Hotel</a></span></p>
                          <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                          <p>  </p>
                          <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                      </figcaption>
                  </figure>


              </div>

              <div class="item">


                  <figure class="effect-ming borderdesgin">
                      <img src="images/2.jpg" alt="img08"/>
                      <figcaption>
                          <h2>Hotel <span>Name</span></h2>
                          <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                              <span><a href="#" class="btn btn-md">View Hotel</a></span></p>
                          <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                          <p>  </p>
                          <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                      </figcaption>
                  </figure>


              </div>


          </div>
          <a class="left carousel-control" href="#myCarousel2" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
          <a class="right carousel-control" href="#myCarousel2" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
      </div>
  </div>



  <div  style="clear: both">
      <h3 style="float: left ; margin-left: 120px;"><b>3 Star Hotels</b></h3>
      <h3 style="float: right; margin-right: 120px;"><b><a href="#">See All</a></b></h3>
  </div>



  <div class="grid grid-bordered">
      <div class="carousel slide" id="myCarousel3">
          <div style="" class="carousel-inner">
              <div class="item active">
                  <!-- <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4"> -->


                  <figure class="effect-ming borderdesgin">
                      <img src="/images/5.jpg" alt="img09"/>
                      <figcaption>
                          <h2>Hotel <span>Name</span></h2>
                          <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                              <span><a href="#" class="btn btn-md">View Hotel</a></span></p>
                          <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                          <p>  </p>
                          <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->

                      </figcaption>
                  </figure>

                  <!--  <a href="#"><img src="http://lorempixel.com/400/200/sports" class="img-responsive">1</a>

                </div> -->
              </div>
              <div class="item">


                  <!--  <a href="#"><img src="http://lorempixel.com/400/200/" class="img-responsive">2</a>-->

                  <figure class="effect-ming borderdesgin">
                      <img src="images/12.jpg" alt="img08"/>
                      <figcaption>
                          <h2>Hotel <span>Name</span></h2>
                          <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                              <span><a href="#" class="btn btn-md">View Hotel</a></span></p>
                          <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                          <p>  </p>
                          <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                      </figcaption>
                  </figure>



              </div>
              <div class="item">

                  <!--  <a href="#"><img src="http://lorempixel.com/400/200/sports" class="img-responsive">3</a>-->

                  <figure class="effect-ming borderdesgin">
                      <img src="images/2.jpg" alt="img08"/>
                      <figcaption>

                          <h2>Hotel <span>Name</span></h2>
                          <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                              <span><a href="#" class="btn btn-md">View Hotel</a></span></p>
                          <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                          <p>  </p>
                          <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                      </figcaption>
                  </figure>

              </div>
              <div class="item">

                  <figure class="effect-ming borderdesgin">
                      <img src="images/1.jpg" alt="img08"/>
                      <figcaption>
                          <h2>Hotel <span>Name</span></h2>
                          <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                              <span><a href="#" class="btn btn-md">View Hotel</a></span></p>
                          <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                          <p>  </p>
                          <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                      </figcaption>
                  </figure>


              </div>

              <div class="item">


                  <figure class="effect-ming borderdesgin">
                      <img src="images/4.jpg" alt="img08"/>
                      <figcaption>
                          <h2>Hotel <span>Name</span></h2>
                          <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                              <span><a href="#" class="btn btn-md">View Hotel</a></span></p>
                          <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                          <p>  </p>
                          <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                      </figcaption>
                  </figure>


              </div>

              <div class="item">


                  <figure class="effect-ming borderdesgin">
                      <img src="images/3.jpg" alt="img08"/>
                      <figcaption>
                          <h2>Hotel <span>Name</span></h2>
                          <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                              <span><a href="#" class="btn btn-md">View Hotel</a></span></p>
                          <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                          <p>  </p>
                          <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                      </figcaption>
                  </figure>



              </div>

              <div class="item">


                  <figure class="effect-ming borderdesgin">
                      <img src="images/6.jpg" alt="img08"/>
                      <figcaption>
                          <h2>Hotel <span>Name</span></h2>
                          <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                              <span><a href="#" class="btn btn-md">View Hotel</a></span></p>
                          <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                          <p>  </p>
                          <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                      </figcaption>
                  </figure>



              </div>

              <div class="item">


                  <figure class="effect-ming borderdesgin">
                      <img src="images/7.jpg" alt="img08"/>
                      <figcaption>
                          <h2>Hotel <span>Name</span></h2>
                          <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                              <span><a href="#" class="btn btn-md">View Hotel</a></span></p>
                          <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                          <p>  </p>
                          <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                      </figcaption>
                  </figure>


              </div>


              <div class="item">


                  <figure class="effect-ming borderdesgin">
                      <img src="images/8.jpg" alt="img08"/>
                      <figcaption>
                          <h2>Hotel <span>Name</span></h2>
                          <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                              <span><a href="#" class="btn btn-md">View Hotel</a></span></p>
                          <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                          <p>  </p>
                          <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                      </figcaption>
                  </figure>



              </div>


              <div class="item">

                  <figure class="effect-ming borderdesgin">
                      <img src="images/9.jpg" alt="img08"/>
                      <figcaption>
                          <h2>Hotel <span>Name</span></h2>
                          <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                              <span><a href="#" class="btn btn-md">View Hotel</a></span></p>
                          <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                          <p>  </p>
                          <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                      </figcaption>
                  </figure>


              </div>

              <div class="item">

                  <figure class="effect-ming borderdesgin">
                      <img src="images/10.jpg" alt="img08"/>
                      <figcaption>
                          <h2>Hotel <span>Name</span></h2>
                          <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                              <span><a href="#" class="btn btn-md">View Hotel</a></span></p>
                          <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                          <p>  </p>
                          <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                      </figcaption>
                  </figure>


              </div>


              <div class="item">


                  <figure class="effect-ming borderdesgin">
                      <img src="images/11.jpg" alt="img08"/>
                      <figcaption>
                          <h2>Hotel <span>Name</span></h2>
                          <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                              <span><a href="#" class="btn btn-md">View Hotel</a></span></p>
                          <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                          <p>  </p>
                          <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                      </figcaption>
                  </figure>


              </div>

              <div class="item">


                  <figure class="effect-ming borderdesgin">
                      <img src="images/2.jpg" alt="img08"/>
                      <figcaption>
                          <h2>Hotel <span>Name</span></h2>
                          <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                              <span><a href="#" class="btn btn-md">View Hotel</a></span></p>
                          <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                          <p>  </p>
                          <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                   <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                      </figcaption>
                  </figure>


              </div>


          </div>
          <a class="left carousel-control" href="#myCarousel3" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
          <a class="right carousel-control" href="#myCarousel3" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
      </div>
  </div>





  </body>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="/js/jquery.vide.js"></script>

<script>
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
    next.next().children(':first-child').clone().appendTo($(this)).addClass('leftest');

} else {
$(this).siblings(':first').children(':first-child').clone().appendTo($(this));

}
});

</script>


 <!-- </div> -->

</html>