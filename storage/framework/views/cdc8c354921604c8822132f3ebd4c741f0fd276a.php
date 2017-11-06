<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>



     <!-- Bootstrap 4 CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <meta name="description" content="Hover Effect Ideas: Inspiration for subtle hover effects" />
    <meta name="keywords" content="hover effect, inspiration, grid, thumbnail, transition, subtle, web design" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="../favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,800,500,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="/css/home/normalize.css" />
    <link rel="stylesheet" type="text/css" href="/css/home/demo.css" />
    <link rel="stylesheet" type="text/css" href="/css/home/set2.css" />
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style> -->


    <style>


      .sec1 {

            margin-top: 10px;
            margin-left: -10px;
            border: 2px solid white;
           /* border-radius:12px; */
            height: 500px;
            width: 450px;
            padding-bottom: 200px;
           opcaity:1.0;
            background-color: transparent;
           transition: width 4s;
          -webkit-transition: width 4s;

        }


      .sec1:hover{
          position: inherit;
          top: 30px;
          right: 30px;
          bottom: 30px;
          left: 30px;
          border: 2px solid #fff;
         /* box-shadow: 0 0 0 30px rgba(255,255,255,0.2); */
        /*  content: '';*/
          -webkit-transition: opacity 0.5s,
          -webkit-transform 0.5s;
          transition: opacity 0.5s, transform 0.5s;
          -webkit-transform: scale3d(1.0,1.1,1.0);
          transform: scale3d(1.0,1.1,1.0);
      }

       .sec2:hover{
           position: inherit;
           top: 30px;
           right: 30px;
           bottom: 30px;
           left: 30px;
           border: 2px solid #fff;
           /* box-shadow: 0 0 0 30px rgba(255,255,255,0.2); */
           /*  content: '';*/
           opacity: 1.0;
           -webkit-transition: opacity 0.5s,
           -webkit-transform 0.5s;
           transition: opacity 0.5s, transform 0.5s;
           -webkit-transform: scale3d(1.0,1.1,1.0);
           transform: scale3d(1.0,1.1,1.0);
       }


         .field{

             background-color: transparent;
             opacity: 1.0;
         }



       /*   .sec1:hover{

              opcaity:1.0px;
              border: 3px solid grey;
              width: 500px;
              height: 500px;

           /*   box-shadow: 10px 10px 5px #888888;
          }*/

        .sec2 {

            margin-top: 10px;
            border: 2px solid white;
            border-radius:0px;
            height: 500px;
            width: 450px;
            padding-bottom: 200px;
            background-color: transparent;
            transition: width 2s;
            -webkit-transition: width 2s;

        }

      /* .sec2:hover{

           opcaity:1.0px;
           border: 3px solid grey;
          /* box-shadow: 10px 10px 5px #888888;
       }






       /* Common style */
        .f1 {
           position: relative;
           float: left;
           overflow: hidden;
           margin: 10px 1%;
           min-width: 320px;
           max-width: 480px;
           max-height: 360px;
           width: 48%;
           height: auto;
           background: #3085a3;
           text-align: center;
           cursor: pointer;
            border: 2px solid grey;
       }

      /*  .bg {

      opacity:0.4; } */

      .vl {
          border-left: 1px solid green;
          height: 500px;
          position: absolute;
          left: 50%;
          margin-left: -3px;
          top: 0;
      }




      .row.vdivide [class*='col-']:not(:last-child):after {
          background: #e0e0e0;
          width: 1px;
          content: "";
          display:block;
          position: absolute;
          top:0;
          bottom: 0;
          right: 0;
          min-height: 70px;
      }

    </style>


      <!-- background-image: url('/images/jonatan-pie-260835.jpg');-->



</head>




<body style="
background-color: black;
background-size: cover;
background-position: inherit;
stroke-opacity: 0.4;
">

<nav style="opacity: 1.0;" class="navbar  navbar-fixed-top navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
        <img src="/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
        Bootstrap
    </a>
</nav>

    <div class="container-fluid bg">

     <!--   <div class="row">

            <div class="col-lg-12">  -->

                <!-- Image and text -->


         <!--    </div>

            </div> -->   <!-- row ends here -->




        <div style="padding-top: 100px;" class="row vdivide">



            <div style="margin-left: 115px;"  class="col-lg-4 sec1">
                <div style="margin-top: 180px;" class="input-group">
                    <input type="text" class="form-control" aria-label="Text input with segmented button dropdown">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-secondary">Action</button>
                        <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div role="separator" class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                </div>

                 <br>
                 <br>

            <div class="input-group">
                <input type="text" class="form-control" aria-label="Text input with segmented button dropdown">
                <div class="input-group-btn">
                    <button type="button" class="btn btn-secondary">Action</button>
                    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </div>
            </div>
                <br>
                <br>
                <br>

                <button style="margin-top: 35px;" class="btn btn-info btn-lg btn-block">Enter</button>

        </div>


            <div class="col-lg-1">


            </div>

            <div style="margin-left: 150px;" class="sec2 col-lg-4">

                <form style="margin-top: 100px;">
                    <div class="form-group">
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                        <br style="height: 5px;">


                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                        <br>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                        <br>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                        <br>
                    </div>
                </form>

                <button class="btn btn-info btn-lg btn-block">Enter</button>


            </div>
        </div>
    </div>


</div>








</div>


</body>
</html>
