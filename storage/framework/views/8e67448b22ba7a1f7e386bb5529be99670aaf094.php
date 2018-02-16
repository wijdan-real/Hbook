
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="/css/categoryhotels/categoryhotelnormalize.css" />
    <link rel="stylesheet" type="text/css" href="/css/categoryhotels/categoryhoteldemo.css" />
    <link rel="stylesheet" type="text/css" href="/css/categoryhotels/categoryhotelset2.css" />
    <link rel="stylesheet" type="text/css" href="/css/pagination.css"/>

    <style>


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
            border-bottom: 2px solid #ccc;
            margin-top:3px;
            margin: 0 15px;
        }



        .grid-bordered:before {
            content: "";
            display: block;
            border-top: 2px solid #ccc;
            margin-bottom:3px;
            margin: 0 15px;

        }

        .pagination pagination-lg {

            background-color: transparent;or: #0b566f !important;
            color: white !important;
        }



        /**
  * Form & Checkbox Styles
  */

        .form-horizontal{

            margin-left: 0px;
            margin-right: 0px;
            width: 1180px;
            height: 230px;
            border: 2px solid white;
            background: white;

        }

        .formstyle{

          /*  background-color: #00acc1; */
            background: white;
        }

        h4{
            font-weight: 700;
            margin-bottom: .5em;
        }

        label{
            font-weight: lighter;
            font-family: 'Lato';
            font-size: 12px;
            color: #353b48;
        }

        input[type="text"] {
            font-family: 'helvetica';
            font-size: 14px;
            border: 1px solid transparent;
            padding: .5em;
            border:1px solid black;
            border-radius: 2px;
        }

        input[type="text"]:focus {
            outline: 0 none;
            border-color: #68b8c4;
        }

        button{
            display: inline-block;
            vertical-align: top;
            padding: .4em .8em;
            margin: 0;
            background: #68b8c4;
            border: 0;
            color: #333;
            font-size: 16px;
            font-weight: 700;
            border-radius: 4px;
            cursor: pointer;
        }

        button:focus{
            outline: 0 none;
        }

        .controls{
            background: white;
            padding: 2%;
            padding-top:0px;
            padding-bottom: 0px;
        }

        fieldset{
            /*display:inline-block;*/
            display:inline;
            vertical-align: top;
            margin: 0 1em 0 0;
            background:transparent;
            border: transparent;

            padding: .2em;
            border-radius: 0px;
            margin-top: 0px;
            margin-bottom: 0px;

            margin-left: 0px;
            margin-right: 5px;
            width: 550px;
        }

        .checkbox{
            display: block;
            position: relative;
            cursor: pointer;
            margin-bottom: 8px;

        }

        .checkboxstyle{
            border: 1px solid #353b48;
            border-radius: 0px;
        }

        .checkbox input[type="checkbox"]{
            position: absolute;
            display: block;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            cursor: pointer;
            border: 1px solid #353b48;
            border-radius: 0px;
            margin: 0;
            opacity: 0;
            z-index: 1;
        }

        .checkbox label{
            display: inline-block;
            vertical-align: top;
            text-align: left;
            font-family: Lato;
            font-size: 12px;
            padding-left: 1.5em;
        }

        .checkbox label:before,
        .checkbox label:after{
            content: '';
            display: block;
            position: absolute;
        }

        .checkbox label:before{
            left: 0;
            top: 0;
            width: 18px;
            height: 18px;
            margin-right: 10px;
            background: #ddd;
            border-radius: 3px;
        }

        .checkbox label:after{
            content: '';
            position: absolute;
            top: 4px;
            left: 4px;
            width: 10px;
            height: 10px;
            border-radius: 2px;
            background: #68b8c4;
            opacity: 0;
            pointer-events: none;
        }

        .checkbox input:checked ~ label:after{
            opacity: 1;

        }

        .checkbox input:focus ~ label:before{
            background: #eee;
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


    <form class="form-horizontal formstyle controls" id="Filters">
        <!-- We can add an unlimited number of "filter groups" using the following format: style="display: inline-block;" -->

        <fieldset
                  class="filter-group checkboxes">
            <h4>Star Rating</h4>
            <div class="checkbox-inline">
                <input type="checkbox" value=".fivestar"/>
                <label>Five Star</label>
            </div>
            <div class="checkbox-inline">
                <input type="checkbox" value=".fourstar"/>
                <label>Four Star</label>
            </div>
            <div class="checkbox-inline">
                <input type="checkbox" value=".threestar"/>
                <label>Three Star</label>
            </div>
            <div class="checkbox-inline">
                <input type="checkbox" value=".twostar"/>
                <label>Two Star</label>
            </div>
            <div class="checkbox-inline">
                <input type="checkbox" value=".onestar"/>
                <label>One Star</label>
            </div>

        </fieldset>

        <fieldset class="filter-group checkboxes">
            <h4>Fun Thing to do</h4>
            <div class="checkbox-inline">
                <input type="checkbox" value=".sauna"/>
                <label>Sauna</label>
            </div>
            <div class="checkbox-inline">
                <input type="checkbox" value=".fitness centre"/>
                <label>Fitness Centre</label>
            </div>
            <div class="checkbox-inline">
                <input type="checkbox" value=".spa and wellness centre"/>
                <label>Spa and wellness centre</label>
            </div>
            <div class="checkbox-inline">
                <input type="checkbox" value=".massage"/>
                <label>Massage</label>
            </div>
            <div class="checkbox-inline">
                <input type="checkbox" value=".beach"/>
                <label>Beach</label>
            </div>


        </fieldset>




        <fieldset class="filter-group checkboxes">
            <h4>Per Night Charges</h4>
            <div class="checkbox-inline">
                <input type="checkbox" value=".1000"/>
                <label>1000 - 2000</label>
            </div>

            <div class="checkbox-inline">
                <input type="checkbox" value=".3000"/>
                <label>3000 - 4000</label>
            </div>

            <div class="checkbox-inline">
                <input type="checkbox" value=".5000"/>
                <label>5000 - 6000</label>
            </div>

            <div class="checkbox-inline">
                <input type="checkbox" value=".7000"/>
                <label>7000 - 8000</label>
            </div>

            <div class="checkbox-inline">
                <input type="checkbox" value=".9000"/>
                <label>9000 - 10000</label>
            </div>
        </fieldset>

            <fieldset class="filter-group checkboxes">
                <h4>Sizes</h4>
                <div class="checkbox-inline">
                    <input type="checkbox" value=".sm"/>
                    <label>Small</label>
                </div>
                <div class="checkbox-inline">
                    <input type="checkbox" value=".lrg"/>
                    <label>Large</label>
                </div>
            </fieldset>



        <fieldset style="margin-right: 560px;" class="filter-group search">
            <h4>Search</h4>
            <input style="width: 470px;" type="text" placeholder="Search What do you want  ..."/>
        </fieldset>


        <fieldset style="margin-left: 562px; margin-top: -35px;" class="">

            <button style="" id="Reset" class="btn btn1 btn-md btn-block">Clear Filters</button>

        </fieldset>

    </form>



</div>


<div  style="clear: both">
    <h3 style="float: left ; margin-left: 120px;"><b>Hotels in City</b></h3>
    <h3 style="float: right; margin-right: 120px;"><b><a href="#">See All</a></b></h3>
</div>



<div class="grid">
                <!-- <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4"> -->


                <figure class="effect-ming borderdesgin">
                    <img src="/images/5.jpg" alt="img09"/>
                    <figcaption>
                        <h2>Hotel <span>Name</span></h2>
                        <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                            <span><a href="#" class="btn btn-md">View Hotel</a></span>
                            <br>
                            <span><a class="back-to-top" href="#" title="Add Hotel to Comparison List" data-toggle="tooltip"><i class="material-icons">add_box</i></a></span></p>
                        </p>
                        <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                        <p>  </p>
                        <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                 <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                 <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                    </figcaption>
                </figure>

                <!--  <a href="#"><img src="http://lorempixel.com/400/200/sports" class="img-responsive">1</a>

              </div> -->



                <!--  <a href="#"><img src="http://lorempixel.com/400/200/" class="img-responsive">2</a>-->

                <figure class="effect-ming borderdesgin">
                    <img src="/images/12.jpg" alt="img08"/>
                    <figcaption>
                        <h2>Hotel <span>Name</span></h2>
                        <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                            <span><a href="#" class="btn btn-md">View Hotel</a></span>
                            <br>
                            <span><a class="back-to-top" href="#" title="Add Hotel to Comparison List" data-toggle="tooltip" href="#"><i class="material-icons">add_box</i></a></span></p>
                        <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                        <p></p>
                        <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                 <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                 <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                    </figcaption>
                </figure>


                <!--  <a href="#"><img src="http://lorempixel.com/400/200/sports" class="img-responsive">3</a>-->

                <figure class="effect-ming borderdesgin">
                    <img src="/images/2.jpg" alt="img08"/>
                    <figcaption>
                        <h2>Hotel <span>Name</span></h2>
                        <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                            <span><a href="#" class="btn btn-md">View Hotel</a></span>
                            <br>
                            <span><a class="back-to-top" href="#" title="Add Hotel to Comparison List" data-toggle="tooltip" href="#"><i class="material-icons">add_box</i></a></span></p>
                        </p>
                        <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                        <p>  </p>
                        <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                 <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                 <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                    </figcaption>
                </figure>


                <figure class="effect-ming borderdesgin">
                    <img src="/images/1.jpg" alt="img08"/>
                    <figcaption>
                        <h2>Hotel <span>Name</span></h2>
                        <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                            <span><a href="#" class="btn btn-md">View Hotel</a></span>
                            <br>
                            <span><a class="back-to-top" href="#" title="Add Hotel to Comparison List" data-toggle="tooltip" href="#"><i class="material-icons">add_box</i></a></span></p>
                        </p>
                        <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                        <p>  </p>
                        <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                 <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                 <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                    </figcaption>
                </figure>


                <figure class="effect-ming borderdesgin">
                    <img src="/images/4.jpg" alt="img08"/>
                    <figcaption>
                        <h2>Hotel <span>Name</span></h2>
                        <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                            <span><a href="#" class="btn btn-md">View Hotel</a></span>
                            <br>
                            <span><a class="back-to-top" href="#" title="Add Hotel to Comparison List" data-toggle="tooltip" href="#"><i class="material-icons">add_box</i></a></span></p>
                        </p>
                        <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                        <p>  </p>
                        <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                 <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                 <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                    </figcaption>
                </figure>


                <figure class="effect-ming borderdesgin">
                    <img src="/images/3.jpg" alt="img08"/>
                    <figcaption>
                        <h2>Hotel <span>Name</span></h2>
                        <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                            <span><a href="#" class="btn btn-md">View Hotel</a></span>
                            <br>
                            <span><a class="back-to-top" href="#" title="Add Hotel to Comparison List" data-toggle="tooltip" href="#"><i class="material-icons">add_box</i></a></span></p>
                        </p>
                        <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                        <p>  </p>
                        <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                 <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                 <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                    </figcaption>
                </figure>


                <figure class="effect-ming borderdesgin">
                    <img src="/images/6.jpg" alt="img08"/>
                    <figcaption>
                        <h2>Hotel <span>Name</span></h2>
                        <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                            <span><a href="#" class="btn btn-md">View Hotel</a></span>
                            <br>
                            <span><a class="back-to-top" href="#" title="Add Hotel to Comparison List" data-toggle="tooltip" href="#"><i class="material-icons">add_box</i></a></span></p>
                        </p>
                        <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                        <p>  </p>
                        <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                 <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                 <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                    </figcaption>
                </figure>


                <figure class="effect-ming borderdesgin">
                    <img src="/images/7.jpg" alt="img08"/>
                    <figcaption>
                        <h2>Hotel <span>Name</span></h2>
                        <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                            <span><a href="#" class="btn btn-md">View Hotel</a></span>
                            <br>
                            <span><a class="back-to-top" href="#" title="Add Hotel to Comparison List" data-toggle="tooltip" href="#"><i class="material-icons">add_box</i></a></span></p>
                        </p>
                        <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                        <p>  </p>
                        <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                 <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                 <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                    </figcaption>
                </figure>


                <figure class="effect-ming borderdesgin">
                    <img src="/images/8.jpg" alt="img08"/>
                    <figcaption>
                        <h2>Hotel <span>Name</span></h2>
                        <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                            <span><a href="#" class="btn btn-md">View Hotel</a></span>
                            <br>
                            <span><a class="back-to-top" href="#" title="Add Hotel to Comparison List" data-toggle="tooltip" href="#"><i class="material-icons">add_box</i></a></span></p>
                        </p>
                        <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                        <p>  </p>
                        <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                 <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                 <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                    </figcaption>
                </figure>


                <figure class="effect-ming borderdesgin">
                    <img src="/images/9.jpg" alt="img08"/>
                    <figcaption>
                        <h2>Hotel <span>Name</span></h2>
                        <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                            <span><a href="#" class="btn btn-md">View Hotel</a></span>
                            <br>
                            <span><a class="back-to-top" href="#" title="Add Hotel to Comparison List" data-toggle="tooltip" href="#"><i class="material-icons">add_box</i></a></span></p>
                        </p>
                        <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                        <p>  </p>
                        <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                 <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                 <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                    </figcaption>
                </figure>


                <figure class="effect-ming borderdesgin">
                    <img src="/images/10.jpg" alt="img08"/>
                    <figcaption>
                        <h2>Hotel <span>Name</span></h2>
                        <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                            <span><a href="#" class="btn btn-md">View Hotel</a></span>
                            <br>
                            <span><a class="back-to-top" href="#" title="Add Hotel to Comparison List" data-toggle="tooltip" href="#"><i class="material-icons">add_box</i></a></span></p>
                        </p>
                        <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                        <p>  </p>
                        <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                 <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                 <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                    </figcaption>
                </figure>


                <figure class="effect-ming borderdesgin">
                    <img src="/images/11.jpg" alt="img08"/>
                    <figcaption>
                        <h2>Hotel <span>Name</span></h2>
                        <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                            <span><a href="#" class="btn btn-md">View Hotel</a></span>
                            <br>
                            <span><a class="back-to-top" href="#" title="Add Hotel to Comparison List" data-toggle="tooltip" href="#"><i class="material-icons">add_box</i></a></span></p>
                        </p>
                        <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                        <p>  </p>
                        <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                 <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                 <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                    </figcaption>
                </figure>


                <figure class="effect-ming borderdesgin">
                    <img src="/images/2.jpg" alt="img08"/>
                    <figcaption>
                        <h2>Hotel <span>Name</span></h2>
                        <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                            <span><a href="#" class="btn btn-md">View Hotel</a></span>
                            <br>
                            <span><a class="back-to-top" href="#" title="Add Hotel to Comparison List" data-toggle="tooltip" href="#"><i class="material-icons">add_box</i></a></span></p>
                        </p>
                        <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
                        <p>  </p>
                        <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
                 <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
                 <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
                    </figcaption>
                </figure>


                <figure class="effect-ming borderdesgin">
        <img src="/images/10.jpg" alt="img08"/>
        <figcaption>
            <h2>Hotel <span>Name</span></h2>
            <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                <span><a href="#" class="btn btn-md">View Hotel</a></span>
                <br>
                <span><a class="back-to-top" href="#" title="Add Hotel to Comparison List" data-toggle="tooltip" href="#"><i class="material-icons">add_box</i></a></span></p>
            </p>
            <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
            <p>  </p>
            <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
     <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
     <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
        </figcaption>
                   </figure>


                    <figure class="effect-ming borderdesgin">
        <img src="/images/11.jpg" alt="img08"/>
        <figcaption>

            <h2>Hotel <span>Name</span></h2>
            <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                <span><a href="#" class="btn btn-md">View Hotel</a></span>
                <br>
                <span><a class="back-to-top" href="#" title="Add Hotel to Comparison List" data-toggle="tooltip"  href="#"><i class="material-icons">add_box</i></a></span></p>
            </p>
            <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
            <p>  </p>
            <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
     <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
     <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
        </figcaption>
                      </figure>


                   <figure class="effect-ming borderdesgin">
        <img src="/images/2.jpg" alt="img08"/>
        <figcaption>
            <h2>Hotel <span>Name</span></h2>
            <p> <span><a href="#" class="btn btn1 btn-sm">View Hotel</a></span>
                <span><a href="#" class="btn btn-md">View Hotel</a></span>
                <br>
                <span><a class="back-to-top" href="#" title="Add Hotel to Comparison List" data-toggle="tooltip" href="#"><i class="material-icons">add_box</i></a></span></p>
            </p>
            <!--<span></span><p>Ming sits in the corner the whole day. She's into crochet.</p>  -->
            <p>  </p>
            <!--  <p> <span>  <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-facebook"></i></a>
     <a href="#" target="_blank"><i style="color: white; font-size: 14px;" class="fa fa-instagram"></i></a>
     <a href="#" target="_blank"><i style="color: white; font-size: 14px;"class="fa fa-twitter"></i></a></span></p>  -->
        </figcaption>
                  </figure>



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




</body>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!--<script src="/public/js/jquery.vide.js"></script>  -->

<script src="/js/jquery.vide.js"></script>



<script>


</script>


<!-- </div> -->

</html>