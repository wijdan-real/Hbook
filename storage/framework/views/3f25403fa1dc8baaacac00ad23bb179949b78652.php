<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo e($hotelid->username); ?></title>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!--<link href="mdbootstrap/bootstrap.min.css" rel="stylesheet" /> -->

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link href="bootstrap-datetimepicker.min.css" rel="stylesheet">
  <link href="modalform.css" rel="stylesheet">

  <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>

  <link rel="stylesheet" href="star-rating/star-rating.css" media="all" type="text/css"/>
  <link rel="stylesheet" href="krajee-svg/theme.css" media="all" type="text/css"/>

  <link href="insideElementDemo.css" rel="stylesheet" type="text/css">

  <link href="socialbutton.css" rel="stylesheet">

  <!--<link href="star-rating.css" rel="stylesheet" type="text/css">
  <link href="theme.css">

  <script src="star-rating.js"></script>
  <script src="theme.js"></script>  -->


  <style>
   /* .container {
      width: 1000px;
      margin: 100px auto;
      font-family: sans-serif;
    } */


   .container{
       width: 1150px;
   }


   /* Style the tab */
   a:hover,a:focus{
     text-decoration: none;
     color: #c44569;
     outline: none;
   }
   .tab .nav-tabs{
     /*border: 1px solid #b6367f; */
     height: 50px;
     box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
     /*color: #6f2232; */
    /* color: #59253a; */

    /* background-color:white; */
     /*border-color:
             #c44569;
     border: 1.5px solid #c44569 ;
     color:
             #c44569;
    /* border-top: 2px solid #c44569;
     border-bottom: px solid #c44569;
     border-right: 1.5px solid #c44569;
     border-left:1.5px solid #c44569; */

   }
   .tab .nav-tabs li{
     /*margin: 0px 15px 10px 0px; */
     margin-bottom: 2px;
     margin-right:0px;

     font-kerning: auto;
     font-weight: 400;
     margin-left: 0px;
     font-size: 28px;
     margin-top:1px;
     position: relative;
     color: #c44569;


   }
   .tab .nav-tabs li.active:before{
     content: "";
     position: absolute;
     bottom: -28px;
     left: 51px;
     border: 0px solid transparent;
     /*border-top-color: #b6367f;
     border-color: #59253a ; */
     color: #c44569;

   }
   .tab .nav-tabs li.active:after{
     content: "";
     position: absolute;
     bottom: -6px;
     left: 53px;
     border: 10px solid transparent;
     border-top-color: #fff;
     color:white;
     /*border-color:#c44569; */
   }
   .tab .nav-tabs li a{
     border: none;
     padding:0px 34px;
     padding-right: 5px;
     text-align: justify;
     font-size: 20px;
     /*color: #777; */
     color: #c44569;
    /* background: transparent; */
     font-family: "Lato";
     border-radius: 0;
     margin-bottom: 0px;
   }

  /* .tab .nav-tabs li a:hover{
     color: #b6367f;
     color: #c44569;
     margin-bottom: 0px;
     background-color: #c44569;

     color:white;
     border-color:#c44569;
   }

   .tab .nav-tabs li a:active{
      color: #b6367f;
      color: #c44569;
     margin-bottom: 0px;
     background-color: #c44569;

     color:white;
     border-color:#c44569;
   } */


   .tab .nav-tabs li a i{
     display: block;
     text-align: center;
     color: #c44569;
     margin-bottom: 0px;
   }
   .tab .nav-tabs li.active a,
   .tab .nav-tabs li.active a:focus,
   .tab .nav-tabs li.active a:hover{
     border: none;
     background: transparent;
    /* color: #b6367f; */
    /* color: #c44569; */
     color: #c44569;
     transition: background 0.20s linear 0s;
   }
   .tab .tab-content{
     /*border: 1.5px solid #c44569 ; */
     border-top:none ;
     box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
     padding: 3px;
     font-size: 14px;
     color: #777;
     line-height: 25px;
   /*  background-color: #59253a;

     background-color: white; */

     margin-top: -10px;
     width: 670px;
     height: 350px;
     padding: 10px;
     overflow-y:scroll;
     overflow-x: hidden;
     width:100%;


   }
   .tab .tab-content h3{
     font-size: 26px;
   }
   @media  only screen and (max-width: 479px) {
     .tab .nav-tabs li a{
       padding: 2px;
     }
     .tab .nav-tabs li.active:before{
       left: 28px;
       bottom: -24px;
       border-width: 12px;
     }
     .tab .nav-tabs li.active:after{
       left: 30px;
       bottom: -20px;
       border-width: 10px;
     }
   }




   .sidenav {
     height: 700px;
     width: 0px;
     position: fixed;
     z-index: 1;
     top: 0;
     left: -5px;
     background-color: black;
     overflow-x: hidden;
     transition: 0.5s;
     padding-top: 60px;
     min-height: 100%;
     top:75px;

     background-color: white;
     border: 0.28rem solid #c44569;
     border-left: none;

   }

   #scroller {
     position: absolute;
     top: 0;
     left: 0;
     bottom: 0;
     right: -20px;
     overflow-y: scroll;
   }

   .sidenav a {
     padding: 8px 8px 8px 32px;
     text-decoration: none;
     font-size: 12px;
     color: #818181;
     display: block;
     transition: 0.3s;
   }

   .sidenav a:hover {
     color: #f1f1f1;
   }

   .sidenav .closebtn {
     position: absolute;
     top: 0;
     right: 25px;
     font-size: 36px;
     margin-left: 50px;
   }

   @media  screen and (max-height: 450px) {
     .sidenav {padding-top: 15px;}
     .sidenav a {font-size: 18px;}
   }

   #feedback {
     position: fixed;
     left: 0;
     bottom: 0;
     height: 160px;
     width: 55px;
     margin-left: -1px;
     margin-bottom: 200px;
     overflow-x: hidden;
     transition: 0.5s;
   /*  background-color: #2d4159;

     border-color:#2d4159 ; */

     border: 1.5px solid;
     color:#c44569;
     border-left: white;
     font-size: 28px;
     background-color:white;

     line-height: 2.0;
     border-radius: .20rem;


   }

   #fd1{vertical-align:top;
     margin-top:23px;
     width:50px;height:160px;
     transform:rotate(7deg);
     -ms-transform:rotate(90deg); /* IE 9 */
     -moz-transform:rotate(90deg); /* Firefox */
     -webkit-transform:rotate(90deg); /* Safari and Chrome */
     -o-transform:rotate(90deg); /* Opera */
   }

   /* Right side bar  */


   /* left sidenav starts here  */

   #feedback1 {
     position: fixed;
     right: 0;
     bottom: 0;
     height: 160px;

     width: 55px;
     margin-left: -1px;
     margin-bottom: 200px;
     overflow-x: hidden;
     transition: 0.5s;
     border: 1.5px solid;
     color:#c44569;
     border-right: white;
     font-size: 28px;
     background-color:white;

     line-height: 2.0;
     border-radius: .20rem;
     /*white-space: nowrap;
     background-color: #2d4159;
     border-color:#2d4159 ; */
   }


   .sidenav1 {
     height: 500px;
     width: 0;
     position: fixed;
     z-index: 1;
     top: 0;
     right: -10px;
     background-color: white;
     border: 0.28rem solid #c44569;
     border-right: none;
     overflow-x: hidden;
     transition: 0.5s;
     padding-top: 60px;
     top:120px;
   }

   .sidenav1 a {
     padding: 8px 8px 8px 32px;
     text-decoration: none;
     font-size: 25px;
     color: #818181;
     display: block;
     transition: 0.3s;
   }

   .sidenav1 a:hover {
     color: #f1f1f1;
   }

   .sidenav1 .closebtn {
     position: absolute;
     top: 0;
     right: 25px;
     font-size: 36px;
     margin-left: 50px;
   }

   @media  screen and (max-height: 450px) {
     .sidenav1 {padding-top: 15px;}
     .sidenav1 a {font-size: 18px;}
   }




   /* left sidenav terminates here */

   .fb{

     transform-origin: left;
     transform: translate(73%, 250%) rotate(90deg) ;

   }
   #rotate{

     vertical-align:top;
     margin-top:23px;
     width:80px;height:30px;
     transform:rotate(7deg);
     -ms-transform:rotate(90deg); /* IE 9 */
     -moz-transform:rotate(90deg); /* Firefox */
     -webkit-transform:rotate(90deg); /* Safari and Chrome */
     -o-transform:rotate(90deg); /* Opera */ }


   body{
    /* background-color: #1a1a1d;*/
     background-color: white;
     font-family: Lato;
   }

   .txtcol{
     color: #353b48;
   }
   .sitcolor{
     color: #c44569;
   }



   .btn2{

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

     background-color:white;
     border-color:
             #c44569;
     border: 1.5px solid;
     color:
             #c44569;

     /*  border-color: #353b48;
       color:#353b48; */


     line-height: 1.5;
     border-radius: .25rem;
     /*padding-top: 15px;
     padding-bottom: 15px;
     padding-left: 60px;
     padding-right: 60px; */
     /* font-size: 2.20rem;
      font-weight: 500; */
     font-size: large;
     font-weight: 400;
   }


   .btn2:active ,.btn2:hover {

     /* background-color: #7952b3;
      color: white; */

     background-color: #c44569;

     color:white;
     border-color:#c44569;
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
     width: 170px;
     vertical-align: middle;
     font-kerning: none;
     white-space: nowrap;
     /*  color: #7952b3;
       border-color: #7952b3;
       background-color: white; */

     background-color:white;
     border-color:
             #c44569;
     border: 1.5px solid;
     color:
             #c44569;

     /*  border-color: #353b48;
       color:#353b48; */


     line-height: 1.5;
     border-radius: .25rem;
     /*padding-top: 15px;
     padding-bottom: 15px;
     padding-left: 60px;
     padding-right: 60px; */
     /* font-size: 2.20rem;
      font-weight: 500; */
     font-size: large;
     font-weight: 400;
   }


   .btn1:active ,.btn1:hover {

     /* background-color: #7952b3;
      color: white; */

     background-color: #c44569;

     color:white;
     border-color:#c44569;
   }




   .container {
      position: relative;
      clear: both;
      margin: 0 auto;
      padding: 1em 0 4em;
      max-width: 1300px;
      list-style: none;
      text-align: center;
    }

    .slider {
      position: relative;
      overflow: hidden;
      border: 1px dashed blue;

      margin-bottom: 100px;
    }

    .slider ul {
      list-style: outside none;
      padding: 0;
      margin: 0;
      width: 10000%;
      position: relative;
      top: 0;
      right: 0;
      transition: all 0.6s ease;
    }

    .slider li {
      float: left;
    }

    .box {
      width: 200px;
      height: 200px;
      background-color: #888;
      color: #fff;
      text-align: center;
      line-height: 200px;
      font-size: 32px;

    }


    .vertical-slider {
      width: 320px;
      margin: auto;
      height: 510px;
      border: 1px solid;
      top:-60px;
      position: relative;
      overflow: hidden;
    }

    .vertical-slider ul {
      list-style: outside none;
      padding: 0;
      margin: 0;
      position: relative;
      top: 0;
      right: 0;
      transition: all 0.6s ease;
    }

    .box-vertical {

      width: 97%;
      height: 250px;
      margin-left: 5px;
      margin-top: 5px;
      margin-right: 5px;
      margin-bottom: 7px;
      border-radius: 5px;
      border:1px solid transparent;
      border-radius:1px; ;
      /* background-color:white; */
      color: #353b48;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

    }


    .single, .single-vertical {
      width: 500px;
      height: 300px;
      margin: 0 auto;
      position: relative;
      overflow: hidden;
      margin-bottom: 100px;
    }

    .single ul, .single-vertical ul {
      list-style: outside none;
      width: 10000%;
      position: relative;
      top: 0;
      right: 0;
      transition: all 0.6s ease;
      padding: 0;
      margin: 0;
    }

    .single li {
      float: left;
    }

    .single-box {
      background-color: #22c3bc;
      width: 500px;
      height: 300px;
      text-align: center;
      line-height: 300px;
      font-size: 50px;
      color: #fff;
    }

   .positioned {

   }



   /* Main carousel style */
   .carousel {
     width: 600px;
     height: 300px;
     margin-left: 30px;
     top: 20px;
   }

   /* Indicators list style */
   .article-slide .carousel-indicators {
     bottom: 0;
     left: 0;
     margin-left: 5px;
     width: 100%;
   }
   /* Indicators list style */
   .article-slide .carousel-indicators li {
     border: medium none;
     border-radius: 0;
     float: left;
     height: 54px;
     margin-bottom: 5px;
     margin-left: 0;
     margin-right: 5px !important;
     margin-top: 0;
     width: 100px;
   }
   /* Indicators images style */
   .article-slide .carousel-indicators img {
     border: 2px solid #FFFFFF;
     float: left;
     height: 54px;
     left: 0;
     width: 100px;
   }
   /* Indicators active image style */
   .article-slide .carousel-indicators .active img {
     border: 2px solid #428BCA;
     opacity: 0.7;

   }

   .carousel-inner{

     bottom: 30px;
     right: 40px;
     width: 670px;
     height: 350px;
   }



   .glyphicon { margin-right:5px;}
   .rating .glyphicon {font-size: 18px;}
   .rating-num { margin-top:0px;font-size: 32px; }
   .progress { margin-bottom: 5px;}
   .progress-bar { text-align: center; }
   .rating-desc  {padding-right: 0px; }
   .sr-only { margin-left: 5px;overflow: visible;clip: auto; }
   .progresswidth {width:250px;}





   #author-img {

     width: 55px;
     height: 55px;
     float: left;
     margin-top: 5px;
     margin-left: 5px;
     margin-bottom: 5px;
     border: 1px solid #353b48;;
   }

   .comment {

     margin-bottom: 45px;
   }

   .author-name {

     float:left ;
     margin-left: 15px;

   }


   .author-name>h3 {
     margin: 5px 0px;
   }

   .comment-content {

     clear: both;
     margin-left: 25px;
     margin-top: 0px;
     width: 280px;
     font-size: 15px;
     line-height: 1.0em;
     color: #353b48;
   }
   .comment-title {

     margin-bottom: 40px;
   }

   .comment-title>span {

     margin-right: 10px;
   }


    .inline {

      display: inline;
      margin-bottom: 25px;
    }

   hr.divider {
     margin: 0em;
     margin-top:-6px;
     margin-bottom:7px;
     border-width: 1px;
   }

   /* enable absolute positioning */
   .inner-addon {
     position: relative;
   }

   /* style glyph */
   .inner-addon .glyphicon {
     position: absolute;
     padding: 10px;
     pointer-events: none;
   }

   /* align glyph */
   .left-addon .glyphicon  { left:  0px;}
   .right-addon .glyphicon { right: 0px;}

   /* add padding  */
   .left-addon input  { padding-left:  30px; }
   .right-addon input { padding-right: 30px; }


   .input-w{
      width:280px;
   }

  /* input-w label {
     display: inline-block;
     vertical-align: middle;

   }*/


   .pdbtwbars{
     margin-top: 10px;
     background: white;
     border-radius: 1px;
     font-size: 16px;
   }


   .grow80{
     background-color: #c44569; color: white; border: 1px solid #c44569; border-radius:2px; width: 30px;
     top:12px;
   }
   .grow81{  background-color: #c44569; color: white ; border: 1px solid #c44569; border-radius: 2px;      top:2px;
   }
   .grow82{  background-color: #c44569; color: white; border: 1px solid #c44569; border-radius: 2px;      top:2px;
   }
   .grow83{  background-color: #c44569; color:  white; border: 1px solid #c44569; border-radius: 2px;     top:2px;
   }
   .grow84{  background-color: #c44569; color: white; border: 1px solid #c44569; border-radius: 2px;     top:2px;
   }


   .progtxtcol{

     color: #353b48;
     font-size:medium ;
     font-family: 'Lato';
     padding-top: 2px;
     padding-bottom: 2px;
     padding-left:20px;
   }

   .progtxt1{
     padding-left: 64px;
   }


   .input-w input {
     display: inline-block;
     float: right;
   }

   .wrapper {
     /*width: 220px; */

     border: 0px solid #ccc;
     margin: 0px auto;
     padding-bottom: 10px;
     padding-left: 20px;
   }

   /* This stops the normal animation enabled on the bootstrap progress bars */
   .progress.active .progress-bar {
     -webkit-transition: none !important;
     transition: none !important;
     padding-left: 25px;
   }


   .faclist {
     /*padding-right: 5px; */

     width: 200px;
     font-size: 16px;

     background-color: #eee;
     display: inline-block;

   }

    .facli{
      float: left;
      clear:left;
    }

    .divsty{
      text-align: left;
    }
   .divsty1{
     text-align: center;
   }
   .divsty2{
     text-align: right;

   }


   .bs-example1{
     margin: 20px;
     display:inline;
     padding:3px;
   }

   dt{
     padding-left: 10px;
     padding-bottom: 10px;
   }
   dd{
     padding-left:10px;
     padding-bottom: 10px;
   }


    .descriptiontext{
      text-align: justify;
      text-justify: inter-word;
      width: 600px;
      padding-left: 50px;
    }


   .bouton-image:before {
     content: "";
     width: 16px;
     height: 16px;
     display: inline-block;
     margin-right: 5px;
     vertical-align: text-top;
     background-color: white;
     background-position : center center;
     background-repeat:no-repeat;
   }

   .monBouton:before{

     background-image: url("careem1.jpg");
     width: 20px;
     height: 30px;
   }





  </style>
</head>
<body>


<div id="mySidenav" class="sidenav">
  <!--<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>  -->



    <a style="" href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="material-icons">close</i></a>



  <!--<a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a> -->

  <!--<h1>Vertical Carousel</h1> -->
  <a style="text-align: center; margin-bottom: 40px; color: #353b48;" class="v-next"><i class="fa fa-arrow-up fa-3x" aria-hidden="true"></i></a>
  <br>

  <div style="border: none;" class="vertical-slider">
    <ul>
      <li>
        <div class="box-vertical well well-sm">

          <div style=" display: inline;">

            <img class="img-responsive img-thumbnail" id="author-img" src="axel-van-der-donk-110936.jpg">


            <div class="comment-content">
              <p>lwe reoore reooer oreog erohreo eroor erohbore erohbmre reero eroer roeeore reoebr erbore
                reoore reooer oreog erohreo eroor erohbore erohbmre reero eroer roeeore
                reoebr erbore reoore reooer oreog erohreo eroor erohbore erohbmre reero eroer roeeore reoebr erbore</p>
            </div>


            <div class="inline" style="clear: both;">
              <p style="float: left; margin-left: 22px; font-size: 16px; bottom: 15px;">Heading 1</p>
              <p style="float: right; margin-right: 20px; font-size: 16px; bottom: 10px;">Heading 2</p>
            </div>


          </div>

         <!--<div>
          <span>
            <h5 class="" style="float: left; margin-left: 20px; bottom:10px; ">Star Rating</h5>

          <h5 style="margin-top: 0px; margin-right: 20px; float: right;">User Name</h5> </span>
        </div> -->





         <!-- <p class="inline" style="float: right; left: 35px;">First Name</p>
          <p class="inline" style="float: left; right: 35px;" id="name">Ram.</p>  -->


        </div>
      </li>

      <li>
          <div class="box-vertical well well-sm">

            <div style=" display: inline;">

              <img class="img-responsive img-thumbnail" id="author-img" src="axel-van-der-donk-110936.jpg">


              <div class="comment-content">
                <p>lwe reoore reooer oreog erohreo eroor erohbore erohbmre reero eroer roeeore reoebr erbore
                  reoore reooer oreog erohreo eroor erohbore erohbmre reero eroer roeeore
                  reoebr erbore reoore reooer oreog erohreo eroor erohbore erohbmre reero eroer roeeore reoebr erbore</p>
              </div>


              <div class="inline" style="clear: both;">
                <p style="float: left; margin-left: 22px; font-size: 16px; bottom: 15px;">Heading 1</p>
                <p style="float: right; margin-right: 20px; font-size: 16px; bottom: 10px;">Heading 2</p>
              </div>


            </div>
        </div>
      </li>
      <li>
        <div class="box-vertical well well-sm">

          <div style=" display: inline;">

            <img class="img-responsive img-thumbnail" id="author-img" src="axel-van-der-donk-110936.jpg">


            <div class="comment-content">
              <p>lwe reoore reooer oreog erohreo eroor erohbore erohbmre reero eroer roeeore reoebr erbore
                reoore reooer oreog erohreo eroor erohbore erohbmre reero eroer roeeore
                reoebr erbore reoore reooer oreog erohreo eroor erohbore erohbmre reero eroer roeeore reoebr erbore</p>
            </div>


            <div class="inline" style="clear: both;">
              <p style="float: left; margin-left: 22px; font-size: 16px; bottom: 15px;">Heading 1</p>
              <p style="float: right; margin-right: 20px; font-size: 16px; bottom: 10px;">Heading 2</p>
            </div>


          </div>
        </div>
      </li>
      <li>
        <div class="box-vertical well well-sm">

          <div style=" display: inline;">

            <img class="img-responsive img-thumbnail" id="author-img" src="axel-van-der-donk-110936.jpg">


            <div class="comment-content">
              <p>lwe reoore reooer oreog erohreo eroor erohbore erohbmre reero eroer roeeore reoebr erbore
                reoore reooer oreog erohreo eroor erohbore erohbmre reero eroer roeeore
                reoebr erbore reoore reooer oreog erohreo eroor erohbore erohbmre reero eroer roeeore reoebr erbore</p>
            </div>


            <div class="inline" style="clear: both;">
              <p style="float: left; margin-left: 22px; font-size: 16px; bottom: 15px;">Heading 1</p>
              <p style="float: right; margin-right: 20px; font-size: 16px; bottom: 10px;">Heading 2</p>
            </div>


          </div>
        </div>
      </li>
      <li>
        <div class="box-vertical well well-sm">

          <div style=" display: inline;">

            <img class="img-responsive img-thumbnail" id="author-img" src="axel-van-der-donk-110936.jpg">


            <div class="comment-content">
              <p>lwe reoore reooer oreog erohreo eroor erohbore erohbmre reero eroer roeeore reoebr erbore
                reoore reooer oreog erohreo eroor erohbore erohbmre reero eroer roeeore
                reoebr erbore reoore reooer oreog erohreo eroor erohbore erohbmre reero eroer roeeore reoebr erbore</p>
            </div>


            <div class="inline" style="clear: both;">
              <p style="float: left; margin-left: 22px; font-size: 16px; bottom: 15px;">Heading 1</p>
              <p style="float: right; margin-right: 20px; font-size: 16px; bottom: 10px;">Heading 2</p>
            </div>


          </div>
        </div>
      </li>
      <li>
        <div class="box-vertical well well-sm">

          <div style=" display: inline;">

            <img class="img-responsive img-thumbnail" id="author-img" src="axel-van-der-donk-110936.jpg">


            <div class="comment-content">
              <p>lwe reoore reooer oreog erohreo eroor erohbore erohbmre reero eroer roeeore reoebr erbore
                reoore reooer oreog erohreo eroor erohbore erohbmre reero eroer roeeore
                reoebr erbore reoore reooer oreog erohreo eroor erohbore erohbmre reero eroer roeeore reoebr erbore</p>
            </div>


            <div class="inline" style="clear: both;">
              <p style="float: left; margin-left: 22px; font-size: 16px; bottom: 15px;">Heading 1</p>
              <p style="float: right; margin-right: 20px; font-size: 16px; bottom: 10px;">Heading 2</p>
            </div>


          </div>
        </div>
      </li>
    </ul>
  </div>
  <a style=" margin-top: -60px; text-align: center; color: #353b48;" href="#" class="v-prev"><i class="fa fa-arrow-down fa-3x" aria-hidden="true"></i></a>
</div>

<span style="font-size:30px;cursor:pointer" onclick="openNav()"><button id="feedback" class="btn btn-lg"><p style="transform: rotate(90deg); font-size:20px; font-weight: 400; text-indent: 1px; letter-spacing: 1px; text-align: center; margin-bottom: 65px;">Check out</p></button></span>



<div id="mySidenav1" class="sidenav1">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav1()"><i class="material-icons">close</i></a>

  <!--<a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a> -->


  <div class="row">

      <div class="col-md-1"></div>

      <div class="col-md-10">

        <h2 style="text-align: center" class="text-centered">Write Review</h2>

        <form class="txtcol" style="">

          <br>


          <div class="inner-addon left-addon">
            <i class="glyphicon glyphicon-user"></i>
            <input type="text" class="form-control" placeholder="Username" />
          </div>

          <br>

          <div class="inner-addon left-addon">
            <i class="glyphicon glyphicon-lock"></i>
            <input type="text" class="form-control" placeholder="Password" />
          </div>

          <br>



          <div class="form-group">

            <textarea class="form-control" rows="7" id="comment"></textarea>
          </div>


          <div class="input-w">
            <label for="input-2" class="control-label"></label>
            <input id="input-2" name="input-2" value="2.5" class="rating-loading" data-size="xs" title="">
          </div>

          <div class="clearfix"></div>

          <br>

          <button type="submit" class="btn btn2 btn-block">Submit</button>
        </form>




      </div>

      <div class="col-md-1"></div>

  </div>



</div>

<span style="font-size:30px;cursor:pointer; float: right;" onclick="openNav1()"><button id="feedback1" class="btn btn-lg"><p style="transform: rotate(270deg); font-size:20px; font-weight: 400; text-indent: 1px; letter-spacing: 1px; text-align: center; margin-top: 70px;">Feedback</p></button></span>



  <div class="container">




    <div class="row">
      <div class="col-md-12">

           <!-- <h1 class="display3">Fluid jumbotron</h1>
            <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>  -->


          <!--  <section style="margin-top: 0px;" class="section-first" data-vidbg-bg="mp4:video.mp4, webm: webm_video.webm, poster:fallback.jpg" data-vidbg-options="loop: true,muted: false, overlay: false">

            </section> -->


        <div id="block2" style=" height: 300px; margin-bottom: 25px;"
             data-vide-bg="mp4:dash, webm:dash, ogv: http://vodkabears.github.io/vide/video/ocean, poster: video/ocean"
             data-vide-options="position: 0% 50%, muted:false">
        </div>

      </div>
    </div>





    <div class="row">

      <!--Grid column-->

        <!--
        <div class="card card-cascade narrower">



          <div class="card-body text-center">




          </div>


        </div> -->
        <!--/.Card-->

        <div style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" class="col-md-3">

          <div style=" border-radius: 2px; border:1px white solid; " class="well well-sm sitcolor">

            <h1 class="rating-num sitcolor">
              4.0</h1>
            <div class="rating">
              <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star">
                            </span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star">
                            </span><span class="glyphicon glyphicon-star-empty"></span>
            </div>
            <div>
              <span class="glyphicon glyphicon-user"></span>1,050,008 total
            </div>
          </div>

          <div class="wrapper well well-sm">
            <h4><strong>Customer Rating by Percentage</strong></h4>
           <!-- <small><span class="label rounded label-primary pull-right">3<sup>rd</sup></span></small><p />  -->
            <div class="progress progress-u pdbtwbars">
                 <span class="progtxtcol">Excellent</span>
              <div style="" aria-valuemax="100" aria-valuemin="0" aria-valuenow="21.5" role="progressbar" class="progress-bar grow80">
                37%
              </div>
            </div>

            <div class="progress progress-u pdbtwbars">
              <span class="progtxtcol">Very Good</span>
              <div style="" aria-valuemax="100" aria-valuemin="0" aria-valuenow="21.5" role="progressbar" class="progress-bar grow81">
                33%
              </div>
            </div>

            <div class="progress progress-u pdbtwbars">
              <span class="progtxtcol progtxt1">Average</span>
              <div style="" aria-valuemax="100" aria-valuemin="0" aria-valuenow="21.5" role="progressbar" class="progress-bar grow82">
                15%
              </div>
            </div>

            <div class="progress progress-u pdbtwbars">
              <span class="progtxtcol progtxt1">Poor</span>
              <div style="" aria-valuemax="100" aria-valuemin="0" aria-valuenow="21.5" role="progressbar" class="progress-bar grow83">
                10%
              </div>
            </div>

            <div class="progress progress-u pdbtwbars">
              <span class="progtxtcol progtxt1">Terrible</span>
              <div style="" aria-valuemax="100" aria-valuemin="0" aria-valuenow="3" role="progressbar" class="progress-bar grow84">
                5%
              </div>
            </div>

            <hr>
            <span><h4 style="text-align: center;"><strong>Need a Ride <i class="fa fa-car"></i></strong></h4></span>
            <button class="btn btn-block btn-md btn2" style="font-size:18px">Get Careem</button>

          </div>


          <!--<div class="well well-sm">

          <span><h4 style="text-align: center;"><strong>Need a Ride <i class="fa fa-car"></i></strong></h4></span>
            <button class="btn btn-block btn-md btn2" style="font-size:18px">Get Careem</button>
          </div>
          <!--<a style="border:1.5px solid #c44569; font-size: 34px; padding-left: 25px; padding-right: 25px; color: white; display: inline;position: relative; " class="sitcolor btn2" href="#" target="_blank">
            <b style="color: #c44569;">Get</b><img style="padding-left: 12px; padding-bottom: 6px; " src="careem5.png">
          </a>  -->





        </div>
        <!-- end 5 -->







        <div class="col-md-7">


        <div class="tab" role="tabpanel">
          <!-- Nav tabs -->
          <ul class="well well-sm nav nav-tabs" role="tablist">
            <li role="presentation" class=""><a href="#Section4" aria-controls="gallery" role="tab" data-toggle="tab"><!--<i class="fa fa-file-image-o fa-1x" aria-hidden="true">--> <b>Gallery</b></a></li>
            <li role="presentation" ><a href="#Section1" aria-controls="facilities" role="tab" data-toggle="tab"><!--<i class="fa fa-tasks fa-1x">--> <b>Facilities</b></a></li>
            <li role="presentation"><a href="#Section2" aria-controls="rooms" role="tab" data-toggle="tab"><!--<i class="fa fa-key fa-1x" aria-hidden="true">  --> <b>Rooms</b></a></li>
            <li role="presentation"><a href="#Section3" aria-controls="hotelrules" role="tab" data-toggle="tab"><!-- <i class="fa fa-sticky-note fa-1x" aria-hidden="true">--> <b>Hotel Rules</b></a></li>
            <li role="presentation"><a href="#Section5" aria-controls="description" role="tab" data-toggle="tab"><!-- <i class="fa fa-sticky-note fa-1x" aria-hidden="true">--> <b>Description</b></a></li>
          </ul>


          <!-- Tab panes -->
          <div style=""  class="tab-content well well-sm">

            <div role="tabpanel" class="tab-pane fade in active" id="Section1">

              <div class="faclist">
                <h3><i class="material-icons">wifi</i> HelvetiList</h3>
              <ul>
                <li class="facli">Hi</li>
                <li class="facli">Second item</li>
                <li class="facli">Third item</li>
                <li class="facli">Second item</li>
                <li class="facli">Third item</li>
              </ul>
              </div>

              <div class="faclist">
                <h3><i class="material-icons">spa</i> HelvetiList</h3>
                <ul>
                  <li class="facli">Hi</li>
                  <li class="facli">Second item</li>
                  <li class="facli">Third item</li>
                  <li class="facli">Second item</li>
                  <li class="facli">Third item</li>
                </ul>
              </div>
              <div class="faclist">
                <h3><i class="material-icons">pool</i> HelvetiList</h3>
                <ul>
                  <li class="facli">Hi</li>
                  <li class="facli">Second item</li>
                  <li class="facli">Third item</li>
                  <li class="facli">Second item</li>
                  <li class="facli">Third item</li>
                </ul>
              </div>


              <div class="faclist">
                <h3><i class="material-icons">pets</i> HelvetiList</h3>
                <ul>
                  <li class="facli">Hi</li>
                  <li class="facli">Second item</li>
                  <li class="facli">Third item</li>
                  <li class="facli">Second item</li>
                  <li class="facli">Third item</li>
                </ul>
              </div>


              <div class="faclist">
                <h3><i class="material-icons">local_parking</i> HelvetiList</h3>
                <ul>
                  <li class="facli">Hi</li>
                  <li class="facli">Second item</li>
                  <li class="facli">Third item</li>
                  <li class="facli">Second item</li>
                  <li class="facli">Third item</li>
                </ul>
              </div>


              <div class="faclist">
                <h3><i class="material-icons">local_dining</i> HelvetiList</h3>
                <ul>
                  <li class="facli">Hi</li>
                  <li class="facli">Second item</li>
                  <li class="facli">Third item</li>
                  <li class="facli">Second item</li>
                  <li class="facli">Third item</li>
                </ul>
              </div>


              <div class="faclist">
                <h3><i class="material-icons">business_center</i> HelvetiList</h3>
                <ul>
                  <li class="facli">Hi</li>
                  <li class="facli">Second item</li>
                  <li class="facli">Third item</li>
                  <li class="facli">Second item</li>
                  <li class="facli">Third item</li>
                </ul>
              </div>

              <div class="faclist">
                <h3><i class="material-icons">games</i> HelvetiList</h3>
                <ul>
                  <li class="facli">Hi</li>
                  <li class="facli">Second item</li>
                  <li class="facli">Third item</li>
                  <li class="facli">Second item</li>
                  <li class="facli">Third item</li>
                </ul>
              </div>


              <div class="faclist">
                <h3><i class="material-icons">room_service</i> HelvetiList</h3>
                <ul>
                  <li class="facli">Hi</li>
                  <li class="facli">Second item</li>
                  <li class="facli">Third item</li>
                  <li class="facli">Second item</li>
                  <li class="facli">Third item</li>
                </ul>
              </div>

              <div class="faclist">
                <h3><i class="material-icons">hot_tub</i> HelvetiList</h3>
                <ul>
                  <li class="facli">Hi</li>
                  <li class="facli">Second item</li>
                  <li class="facli">Third item</li>
                  <li class="facli">Second item</li>
                  <li class="facli">Third item</li>
                </ul>
              </div>



              <!--   <div class=faclist>
                   <h2>HelvetiList</h2>
                   <ul>
                     <li class="facli">Hi</li>
                     <li class="facli">Second item</li>
                     <li class="facli">Third item</li>
                     <li class="facli">Second item</li>
                     <li class="facli">Third item</li>
                   </ul>
                 </div>


                 <div class=faclist>
                   <h2>HelvetiList</h2>
                   <ul>
                     <li class="facli">Hi</li>
                     <li class="facli">Second item</li>
                     <li class="facli">Third item</li>
                     <li class="facli">Second item</li>
                     <li class="facli">Third item</li>
                   </ul>
                 </div>


                 <div class=faclist>
                   <h2>HelvetiList</h2>
                   <ul>
                     <li class="facli">Hi</li>
                     <li class="facli">Second item</li>
                     <li class="facli">Third item</li>
                     <li class="facli">Second item</li>
                     <li class="facli">Third item</li>
                   </ul>
                 </div>  -->


            </div>

            <div role="tabpanel" class="tab-pane fade" id="Section2">
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
                  <td><button style="margin-top: 18px;" class="btn btn2 btn-sm">Room Info & Prices</button></td>
                </tr>
                <tr>
                  <th scope="row"> <i class="fa fa-user"></i> <i class="fa fa-user"></i> </th>
                  <td><p>Standard Double or Twin Room</p>
                    <span><p><i class="fa fa-bed"><b style="margin-left: 5px; margin-right: 10px;
            font-family: 'Convergence';">1 small bed</b></i></p></span>
                  </td>
                  <td><button style="margin-top: 18px;" class="btn btn2 btn-sm">Room Info & Prices</button></td>
                </tr>
                <tr>
                  <th scope="row"><i class="fa fa-user"></i> <i class="fa fa-user"></i> + <i class="fa fa-user"></i></th>
                  <td><p>Luxry Deluxe Double or Twin Rooms</p>
                    <span><p><i class="fa fa-bed"><b style="margin-left: 5px; margin-right: 10px;
            font-family: 'Convergence';">2 deluxe bed</b></i></p></span>
                  </td>
                  <td><button style="margin-top: 18px;" class="btn btn2 btn-sm">Room Info & Prices</button></td>
                </tr>

                <tr>
                  <th scope="row"><i class="fa fa-users"></i></th>
                  <td><p>Connecting Family Rooms</p>
                    <span><p><i class="fa fa-bed"><b style="margin-left: 5px; margin-right: 10px;
            font-family: 'Convergence';">Beds for multiple person</b></i></p></span>
                  </td>
                  <td><button style="margin-top: 18px;" class="btn btn2 btn-sm">Room Info & Prices</button></td>
                </tr>

                <tr>
                  <th scope="row"><i class="fa fa-user"></i> <i class="fa fa-user"></i> + <i class="fa fa-user"></i> <i class="fa fa-user"></i></th>
                  <td><p>Economy Double Room without Window</p>
                    <span><p><i class="fa fa-bed"><b style="margin-left: 5px; margin-right: 10px;
            font-family: 'Convergence';">Double bed for couple</b></i></p></span>
                  </td>
                  <td><button style="margin-top: 18px;" class="btn btn2 btn-sm">Room Info & Prices</button></td>
                </tr>

                </tbody>
              </table>
            </div>

            <div role="tabpanel" class="tab-pane fade" id="Section3">

              <div class="bs-example1">
                <h2>Horizontal Definition Lists</h2>
                <dl class="dl-horizontal">
                  <dt>User Agent</dt>
                  <dd>An HTML user agent is any device that interprets HTML documents.</dd>
                  <dt>Client-side Scripting</dt>
                  <dd>Client-side scripting generally refers to the category of computer programs on the web that are executed client-side i.e. by the user's web browser.</dd>
                  <dt>Document Tree</dt>
                  <dd>The tree of elements encoded in the source document.</dd>
                </dl>
              </div>

            </div>

            <div role="tabpanel" class="tab-pane fade" id="Section5">

              <div class="descriptiontext" >
                <h4>The Golders Green Hotel is in a quiet area, 700 m from Golders Green London Underground Station. It has free Wi-Fi, free off-street parking and good-value en suite rooms.

                  The Golders Green Hotel is in North London, a short walk from Hampstead Heath. There are shops, restaurants and bars a short walk away and Brent Cross Shopping Centre is 2.4 km (2.4 km) from the hotel.
                  Local buses and national coaches run regularly from Golders Green Station to all of London's airports and all around the city. Central London is 15 minutes away by Tube.
                  The rooms have TVs, telephones and hairdryers. Tea/coffee making facilities are available 24 hours a day in the dining room.
                  We speak your language!
                  Golders Green Hotel has been welcoming Booking.com guests since 5 Feb 2010.</h4>
              </div>

            </div>





            <div role="tabpanel" class="tab-pane fade" id="Section4">

              <div class="carousel slide article-slide" id="article-photo-carousel">

                <!-- Wrapper for slides -->
                <div class="carousel-inner cont-slider">

                  <div class="item active">
                    <img alt="" title="" src="david-marcu-125458.jpg">
                  </div>
                  <div class="item">
                    <img alt="" title="" src="jake-melara-6771.jpg">
                  </div>
                  <div class="item">
                    <img alt="" title="" src="axel-van-der-donk-110936.jpg">
                  </div>
                  <div class="item">
                    <img alt="" title="" src="http://placehold.it/600x400">
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
                </ol>
              </div>


            </div>

          </div>
        </div>



      </div>



      <!--Grid column-->
      <div style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" class="col-md-2">
        <!--Card-->
        <div class="card card-cascade narrower">

          <!--Card image-->
          <div class="view gradient-card-header peach-gradient">
            <!-- <h5 class="mb-0">Custom map</h5> -->
          <!--  <button style="padding-left: 26px; padding-right: 24px; background-color: #2c4762;
            border-radius:2px; font-size: 18px;" type="button" class="btn btn-lg"><a href="test2.html" target="_blank"> <span style="color: white">
              <i class="fa fa-h-square" aria-hidden="true"></i> BOOK NOW</span></a></button>  -->

            <a href="test2.html" target="_blank" class="btn btn-block btn-lg btn2">BOOK NOW</a>



          </div>
          <!--/Card image-->

          <br>
          <!--Card content-->
          <div class="well well-sm card-body text-center">



            <!--Google map-->
            <div id="map-container-6" class="z-depth-1" style="height: 230px"></div>

              <span><h4 style="text-align: center;"><strong>Get Directions on Mobile <i class="fa fa-mobile-phone"></i> </strong></h4></span>
              <button class="btn btn-block btn2" style="font-size:18px">Send Direction<i style="padding-left: 3px;" class="fa fa-map"></i></button>


            <!--  <a style=" top: -10px;" class="btn btn-block btn-social btn-facebook">
              <i class="fa fa-facebook"></i>
              Sign in with Facebook
            </a>

            <hr class="divider"/>

            <a style="top: -3px;" class="btn btn-block btn-social btn-google-plus">
              <i class="fa fa-google-plus"></i>
              Sign in with Google
            </a>  -->


          </div>
          <!--/.Card content-->

        </div>
        <!--/.Card-->

      </div>
    </div>
    <!--Grid column-->


    <div class="row">

      <div class="col-md-2">

      </div>


      </div>

      <div class="col-md-2">


      </div>

    </div>
  </div>




<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-body">

        <form id="msform">
          <!-- progressbar -->
          <ul id="progressbar">
            <li class="active">Personal Details</li>
            <li>Social Profiles</li>
            <li>Account Setup</li>
          </ul>
          <!-- fieldsets -->

          <fieldset>
            <h2 class="fs-title">Personal Details</h2>
            <h3 class="fs-subtitle">Tell us something more about you</h3>
            <input type="text" name="fname" placeholder="First Name"/>
            <input type="text" name="lname" placeholder="Last Name"/>
            <input type="email" name="email" placeholder="Email"/>
            <textarea name="address" placeholder="Address"></textarea>
            <input type="text" name="job" placeholder="profession"/>
            <input type="text" name="phone" placeholder="Phone"/>

            <select placeholder="Select Gender">
              <option>Male</option>
              <option>Female</option>
            </select>


            <input type="button" name="next" class="next action-button" value="Next"/>
          </fieldset>

          <fieldset>
            <h2 class="fs-title">Social Profiles</h2>
            <h3 class="fs-subtitle">Your presence on the social network</h3>

            <select placeholder="Select Province">
              <option>Punjab</option>
              <option>Pakhtoon Khuwah</option>
              <option>Balouchistan</option>
              <option>Sindh</option>
              <option>Sindh</option>
              <option>Gilgit Baltistan</option>
            </select>

            <input type="text" name="city" placeholder="City"/>


            <!-- <div class="input-group date" >
               <input id="example2"  type="text"  placeholder="Check-in-Date" />
               <span class="input-group-addon">
               <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
          </span>
             </div>

             <div class="input-group date" >
               <input id="example1"  type="text"  placeholder="Check-in-Date" />
               <span class="input-group-addon">
               <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
          </span>
             </div>

             <div class="form-group has-feedback">
               <label class="control-label">Username</label>
               <input type="text" class="form-control" placeholder="Username" />
               <i class="form-control-feedback glyphicon glyphicon-user"></i>
             </div>  -->


            <div style=" float: left; width: 265px;" class="input-group date">
              <input id="example" type="text" placeholder="Check-in-Date" />
              <i  style="margin-top: 10px;" class="form-control-feedback glyphicon glyphicon-calendar"></i>
            </div>

            <div style="  float: right; width: 265px;"  class="input-group date">
              <input id="example1" type="text" placeholder="Check-out-Date" />
              <i  style="margin-top: 10px;" class="form-control-feedback glyphicon glyphicon-calendar"></i>
            </div>

            <select placeholder="Adult">

              <option value="" disabled selected>Adult</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
            </select>

            <select placeholder="Childern">

              <option value="" disabled selected> Childern</option>
              <option>0</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>


            <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
            <input type="button" name="next" class="next action-button" value="Next"/>

          </fieldset>



          <fieldset>
            <!--<h2 class="fs-title">Create your account</h2>
            <h3 class="fs-subtitle">Fill in your credentials</h3>
            <input type="text" name="email" placeholder="Email"/>
            <input type="password" name="pass" placeholder="Password"/>
            <input type="password" name="cpass" placeholder="Confirm Password"/>
            <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
            <input type="submit" name="submit" class="submit action-button" value="Submit"/> -->



            <!-- CREDIT CARD FORM STARTS HERE -->
            <div class="panel panel-default credit-card-box">
              <!-- <div class="panel-heading display-table" >
                <div class="row display-tr" >
                   <h3 class="panel-title display-td" >Payment Details</h3>
                   <div class="display-td" >
                     <!--<img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
                   </div>
                 </div>
               </div>  -->

              <div class="form-group text-center">
                <ul class="list-inline">
                  <li class="list-inline-item"><i class="text-muted fa fa-cc-visa fa-3x"></i></li>
                  <li class="list-inline-item"><i class="fa fa-cc-mastercard fa-3x"></i></li>
                  <li class="list-inline-item"><i class="fa fa-cc-amex fa-3x"></i></li>
                  <li class="list-inline-item"><i class="fa fa-cc-discover fa-3x"></i></li>
                </ul>
              </div>

              <div class="panel-body">
                <form role="form" id="payment-form" method="POST" action="javascript:void(0);">

                  <div class="row">
                    <div class="col-xs-12">
                      <div class="form-group">

                        <label for="cc-payment" class="control-label mb-1">Payment amount in PKR</label>


                        <input  id="cc-pament" name="cc-payment" type="text" class="form-control" aria-required="true" aria-invalid="false" value="100.00">

                      </div>
                    </div>
                  </div>





                  <div class="row">
                    <div class="col-xs-12">
                      <div class="form-group">
                        <label for="cardNumber">CARD NUMBER</label>
                        <input
                                type="tel"
                                class="form-control"
                                name="cardNumber"
                                placeholder="Valid Card Number"
                                autocomplete="cc-number"
                                required autofocus
                        />
                        <!--  <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>  -->

                      </div>
                    </div>
                  </div>



                  <div class="row">
                    <div class="col-xs-12">
                      <label for="username">NAME ON THE CARD</label>
                      <input
                              type="text"
                              class="form-control"
                              name="username"
                              placeholder="NAME"
                              autocomplete="cc-number"
                              required autofocus
                      />
                    </div>
                  </div>


                  <div class="row">
                    <div class="col-xs-7 col-md-7">
                      <div class="form-group">
                        <label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                        <input
                                type="tel"
                                class="form-control"
                                name="cardExpiry"
                                placeholder="MM / YY"
                                autocomplete="cc-exp"
                                required
                        />
                      </div>
                    </div>
                    <div class="col-xs-5 col-md-5 pull-right">
                      <div class="form-group">
                        <label for="cardCVC">CV CODE</label>
                        <div class="input-group">
                          <input
                                  type="tel"
                                  class="form-control"
                                  name="cardCVC"
                                  placeholder="CVC"
                                  autocomplete="cc-csc"
                                  required
                          />
                          <div class="input-group-addon">

                          <span class="fa fa-question-circle fa-lg" data-toggle="popover" data-container="body" data-html="true" data-title="Security Code"
                                data-content="<div class='text-center one-card'>The 3 digit code on back of the card..<div class='visa-mc-cvc-preview'></div></div>"
                                data-trigger="hover"></span>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="row">
                    <div class="col-xs-12">
                      <div class="form-group">
                        <label for="couponCode">COUPON CODE</label>
                        <input type="text" class="form-control" name="couponCode" />
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      <input type="submit" name="submit" class="submit action-button" value="Submit"/>
                      <!-- <button class="subscribe btn btn-success btn-lg btn-block" type="button">Start Subscription</button> -->

                    </div>
                  </div>
                  <div class="row" style="display:none;">
                    <div class="col-xs-12">
                      <p class="payment-errors"></p>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- CREDIT CARD FORM ENDS HERE -->




          </fieldset>
        </form>


      </div>

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->




</div>

  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://thecodeplayer.com/uploads/js/jquery-1.9.1.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>-->


  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<script src="star-rating/star-rating.js" type="text/javascript"></script>
<script src="krajee-svg/theme.js" type="text/javascript"></script>
<script src="LANG.js" type="text/javascript"></script>



 <script src="vidbg.min.js"></script>
 <script src="jquery.vide.js"></script>
 <script src="jquery.vide.min.js"></script>
 <script src="socialbutton.js"></script>



<script src="moment.min.js"></script>

<script src="bootstrap-datetimepicker.min.js"></script>
<script src="jquery.payment.min.js"></script>
<script src="jquery.validate.min.js"></script>

<script src="modalform.js"></script>


<!-- If you're using Stripe for payments -->
<script type="text/javascript" src="https://js.stripe.com/v3/"></script>


<script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>




<script src="../vanilla-slider.js"></script>


<script>

    $(document).ready(function() {

        $(".grow80").animate({
            width: "37%"
        }, 1100);

        $(".grow81").animate({
            width: "33%"
        }, 1100);

        $(".grow82").animate({
            width: "15%"
        }, 1100);

        $(".grow83").animate({
            width: "10%"
        }, 1100);

        $(".grow84").animate({
            width: "5%"
        }, 1100);

    });



</script>




<script>

        $(document).ready(function() {
        $('#input-2').rating({
            step: 1,
            starCaptions: {1:'Poor', 2:'Typical', 3:'Fair', 4:'Good', 5:'Superb'},
            starCaptionClasses: {1: 'text-danger', 2: 'text-warning', 3: 'text-info', 4: 'text-primary', 5: 'text-success'}
        });
    });
</script>


<script>
    // Stop carousel
    $('.carousel').carousel({
        interval: false
    });
</script>


<script>
    $(document).on('ready', function(){
        $('.kv-ltr-theme-svg-star').rating({
            hoverOnClear: false,
            theme: 'krajee-svg'
        });
    });
</script>

  <script>

      var verticalSlider = new Slider('.vertical-slider', {
          direction: 'vertical',
          visibles: 2,
          controlNext: '.v-next',
          controlPrev: '.v-prev'
      })



  </script>

  <script>
      function openNav() {
          document.getElementById("mySidenav").style.width = "350px";
        /*  document.getElementById("feedback").style.marginLeft="400px"; */
          document.getElementById("feedback").style.visibility="hidden";
      }

      function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
        /*  document.getElementById("feedback").style.marginLeft="0"; */
          document.getElementById("feedback").style.visibility="visible";
      }


      function openNav1() {
          document.getElementById("mySidenav1").style.width = "350px";
        /* document.getElementById("feedback1").style.marginRight="400px"; */
          document.getElementById("feedback1").style.visibility="hidden";
      }

      function closeNav1() {
          document.getElementById("mySidenav1").style.width = "0";
        /* document.getElementById("feedback1").style.marginRight="0";*/
          document.getElementById("feedback1").style.visibility="visible";

      }
  </script>


<script>
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

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>

<script>
// Custom map
function custom_map() {

var var_location = new google.maps.LatLng(40.725118, -73.997699);

var var_mapoptions = {
center: var_location,
zoom: 14,
styles: [
{
"featureType": "administrative",
"elementType": "all",
"stylers": [
{
"visibility": "off"
}
]
},
{
"featureType": "poi",
"elementType": "all",
"stylers": [
{
"visibility": "simplified"
}
]
},
{
"featureType": "road",
"elementType": "all",
"stylers": [
{
"visibility": "simplified"
}
]
},
{
"featureType": "water",
"elementType": "all",
"stylers": [
{
"visibility": "simplified"
}
]
},
{
"featureType": "transit",
"elementType": "all",
"stylers": [
{
"visibility": "simplified"
}
]
},
{
"featureType": "landscape",
"elementType": "all",
"stylers": [
{
"visibility": "simplified"
}
]
},
{
"featureType": "road.highway",
"elementType": "all",
"stylers": [
{
"visibility": "off"
}
]
},
{
"featureType": "road.local",
"elementType": "all",
"stylers": [
{
"visibility": "on"
}
]
},
{
"featureType": "road.highway",
"elementType": "geometry",
"stylers": [
{
"visibility": "on"
}
]
},
{
"featureType": "road.arterial",
"elementType": "all",
"stylers": [
{
"visibility": "off"
}
]
},
{
"featureType": "water",
"elementType": "all",
"stylers": [
{
"color": "#5f94ff"
},
{
"lightness": 26
},
{
"gamma": 5.86
}
]
},
{
"featureType": "road.highway",
"elementType": "all",
"stylers": [
{
"weight": 0.6
},
{
"saturation": -85
},
{
"lightness": 61
}
]
},
{
"featureType": "landscape",
"elementType": "all",
"stylers": [
{
"hue": "#0066ff"
},
{
"saturation": 74
},
{
"lightness": 100
}
]
}
]
};

var var_map = new google.maps.Map(document.getElementById("map-container-6"),
var_mapoptions);

var var_marker = new google.maps.Marker({
position: var_location,
map: var_map,
title: "New York"
});
}

google.maps.event.addDomListener(window, 'load', regular_map);
google.maps.event.addDomListener(window, 'load', custom_map);

</script>







<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAA1750liR_-w6TfMTwnmQDk3Db17HXZXw&callback=custom_map"></script>

</body>
</html>
