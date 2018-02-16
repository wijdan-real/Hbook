<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hotel Profile</title>

    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  -->



    <!-- embedding bootstrap 4 cdn and google icons and awesome font -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>

 <!--   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>




    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href='https://fonts.googleapis.com/css?family=Convergence' rel='stylesheet'>



    <style>


        /* Main carousel style */


        #thumbnail-preview-indicators {
            position: relative;
            overflow: hidden;
        }
        #thumbnail-preview-indicators .slides .slide-1,
        #thumbnail-preview-indicators .slides .slide-2,
        #thumbnail-preview-indicators .slides .slide-3 {
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
        }
        #thumbnail-preview-indicators,
        #thumbnail-preview-indicators .slides,
        #thumbnail-preview-indicators .slides .slide-1,
        #thumbnail-preview-indicators .slides .slide-2,
        #thumbnail-preview-indicators .slides .slide-3 {
            height: 480px;
        }
        #thumbnail-preview-indicators .slides .slide-1 {
            background-image: url(https://s3.amazonaws.com/ooomf-com-files/wdXqHcTwSTmLuKOGz92L_Landscape.jpg);
        }
        #thumbnail-preview-indicators .slides .slide-2 {
            background-image: url(https://s3.amazonaws.com/ooomf-com-files/tU3ptNgGSP6U2fE67Gvy_SYDNEY-162.jpg);
        }
        #thumbnail-preview-indicators .slides .slide-3 {
            background-image: url(https://s3.amazonaws.com/ooomf-com-files/mtNrf7oxS4uSxTzMBWfQ_DSC_0043.jpg);
        }
        #thumbnail-preview-indicators .carousel-inner .item .carousel-caption {
            top: 20%;
            bottom: inherit;
        }
        #thumbnail-preview-indicators .carousel-indicators li,
        #thumbnail-preview-indicators .carousel-indicators li.active {
            position: relative;
            width: 100px;
            height: 8px;
        }
        #thumbnail-preview-indicators .carousel-indicators li > .thumbnail {
            position: absolute;
            top: 0;
            width: 100px;
            display: none;
            opacity: 0;
            left: 50%;
            margin-top: -80px;
            margin-left: -50px;
        }
        #thumbnail-preview-indicators .carousel-indicators li:hover > .thumbnail,
        #thumbnail-preview-indicators .carousel-indicators li.active > .thumbnail {
            display: block;
            opacity: .8;
        }
        #thumbnail-preview-indicators .carousel-indicators li.active > .thumbnail:hover{
            opacity: 1;
        }
        @media screen and (max-width : 480px) {
            #thumbnail-preview-indicators .carousel-indicators li,
            #thumbnail-preview-indicators .carousel-indicators li.active {
                width: 50px;
                height: 8px;
                position: relative;
            }
            #thumbnail-preview-indicators .carousel-indicators li > .thumbnail {
                width: 50px;
                left: 50%;
                margin-top: -50px;
                margin-left: -25px;
            }
        }




    </style>


</head>

<body>


<div id="thumbnail-preview-indicators" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#thumbnail-preview-indicators" data-slide-to="0" class="active">
            <div class="thumbnail">
                <img class="img-responsive" src="https://s3.amazonaws.com/ooomf-com-files/wdXqHcTwSTmLuKOGz92L_Landscape.jpg">
            </div>
        </li>
        <li data-target="#thumbnail-preview-indicators" data-slide-to="1">
            <div class="thumbnail">
                <img class="img-responsive" src="https://s3.amazonaws.com/ooomf-com-files/tU3ptNgGSP6U2fE67Gvy_SYDNEY-162.jpg">
            </div>
        </li>
        <li data-target="#thumbnail-preview-indicators" data-slide-to="2">
            <div class="thumbnail">
                <img class="img-responsive" src="https://s3.amazonaws.com/ooomf-com-files/mtNrf7oxS4uSxTzMBWfQ_DSC_0043.jpg">
            </div>
        </li>
    </ol>
    <div class="carousel-inner">
        <div class="item slides active">
            <div class="slide-1"></div>
            <div class="container">
                <div class="carousel-caption">
                    <h1>New carousel layout</h1>
                    <p>Responsive thumbnail preview in carousel indicators.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                </div>
            </div>
        </div>
        <div class="item slides">
            <div class="slide-2"></div>
            <div class="container">
                <div class="carousel-caption">
                    <h1>Another example headline.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                </div>
            </div>
        </div>
        <div class="item slides">
            <div class="slide-3"></div>
            <div class="container">
                <div class="carousel-caption">
                    <h1>One more for good measure.</h1>
                    <p>Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#thumbnail-preview-indicators" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#thumbnail-preview-indicators" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div>



</body>

</html>