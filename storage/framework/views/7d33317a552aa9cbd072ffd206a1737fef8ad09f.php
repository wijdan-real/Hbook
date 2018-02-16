<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Vanilla Slider Demo</title>

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

  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />

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


  /* .bouton-image:before {
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



   .feedback3 {
     background-color : #31B0D5;
     color: white;
     padding: 10px 20px;
     border-radius: 4px;
     border-color: #46b8da;
   }

   #mybutton3 {
     position: fixed;
     bottom: -4px;
     right: 10px;
   }


   img{
     margin-bottom: 60%;
     width:960px;
     height: 250px;
   }
   input[type=file]{
     top:160px;
     background:#2d2d2d;}

     */


   .money{
     display:inline-block;
     border:1px solid #ababab;
     -moz-border-radius:3px;
     -webkit-border-radius:3px;
     border-radius:3px;
   }

   .money > div {
     display:inline-block;
     padding:8px 8px 8px 8px;
     font-size:14px;
     cursor:text;
     color:#666;
     /*     pointer-events: none; */
   }

   .money > input{
     width:200px;
     border:0;
     padding:8px 4px 8px 8px;
     margin:0;
     font-size:14px;
     color:#666;
     cursor:text;
     text-align:left;
     outline:none;
   }

   .money > input::-ms-clear{
     display: none;
   }

    .navbar
    {
      width:100%;
      height: 50px;
      font-family: Lato;
      font-size: 20px;
      top:-10px;

    }


   .nav-pills .nav-link.active, .nav-pills .show > .nav-link{
     background-color: #17A2B8;
   }
   .dropdown-menu{
     top: 60px;
     right: 0px;
     left: unset;
     width: 330px;
     box-shadow: 0px 5px 7px -1px #c1c1c1;
     padding-bottom: 0px;
     padding: 0px;
   }
   .dropdown-menu:before{
     content: "";
     position: absolute;
     top: -20px;
     right: 12px;
     border:10px solid #343A40;
     border-color: transparent transparent #343A40 transparent;
   }
   .head{
     padding:5px 15px;
     border-radius: 3px 3px 0px 0px;
   }
   .footer{
     padding:5px 15px;
     border-radius: 0px 0px 3px 3px;
   }
   .notification-box{
     padding: 10px 0px;
   }
   .bg-gray{
     background-color: #eee;
   }
   @media (max-width: 640px) {
     .dropdown-menu{
       top: 50px;
       left: -16px;
       width: 290px;
     }
     .nav{
       display: block;
     }
     .nav .nav-item,.nav .nav-item a{
       padding-left: 0px;
     }
     .message{
       font-size: 13px;
     }
   }


   .container {
       max-width: 960px;
       margin: 10px auto;
       padding: 10px;
       width: 960px;

   }
   h1
   {
       font-size: 20px;
       text-align: center;
       margin: 20px 0 20px;
   }
   h1 small
   {
       display: block;
       font-size: 15px;
       padding-top: 8px;
       color: gray;
   }
   .avatar-upload
   {
       position: relative;
       max-width: 205px;
       margin-top: 50px auto;
       margin-bottom: 0px;
       margin-left: 0px;
       margin-right: 0px;
       right:70px;
   }
   .avatar-upload .avatar-edit
   {
       position: absolute;
       right: -850px;
       z-index: 1;
       top: 240px;
   }
   .avatar-upload .avatar-edit input
   {
       display: none;

   }
   .avatar-upload .avatar-edit input + label
   {
       top: 30px;
       display: inline-block;
       width: 120px;
       height: 40px;
       margin-bottom:0;
       border-radius: 2%;
       background: #FFFFFF;
       border: 1px solid transparent;
       box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
       cursor: pointer;
       font-weight: normal;
       transition: all 0.2s ease-in-out;
   }
   .avatar-upload .avatar-edit input + label:hover
   {
       background: #f1f1f1;
       border-color: #d6d6d6;
   }
   .avatar-upload .avatar-edit input + label:after
   {
       content: "\f040  Change Cover";
       font-family: 'FontAwesome';
       color: #757575;
       position: absolute;
       top: 10px;
       left: 0;
       right: 0;
       text-align: center;
       margin: auto;
   }
   .avatar-upload .avatar-preview
   {
       width: 1100px;
       height: 300px;
       position: relative;
       border-radius:0%;
       border: 3px solid #F8F8F8;
       box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
   }
   .avatar-upload .avatar-preview > div
   {
       width: 100%;
       height: 100%;
       border-radius: 0%;
       background-size: cover;
       background-repeat: no-repeat;
       background-position: center;
   }



  </style>
</head>
<body>


<nav class="navbar navbar" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a style="font-family: Lato; font-size: 22px; right: 40px;" class="navbar-brand" href="#">Aplication</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav navbar-right">




        <li class="nav-item dropdown">
          <a class="nav-link text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-envelope-o"></i>
          </a>
          <ul class="dropdown-menu">
            <li class="head text-light bg-dark">
              <div class="row">
                <div class="col-lg-12 col-sm-12 col-12">
                  <span>Notifications (3)</span>
                  <a href="" class="float-right text-light">Mark all as read</a>
                </div>
              </div>
            </li>
            <li class="notification-box">
              <div class="row">
                <div class="col-lg-3 col-sm-3 col-3 text-center">
                  <img src="/demo/man-profile.jpg" class="w-50 rounded-circle">
                </div>
                <div class="col-lg-8 col-sm-8 col-8">
                  <strong class="text-info">David John</strong>
                  <div>
                    Lorem ipsum dolor sit amet, consectetur
                  </div>
                  <small class="text-warning">27.11.2015, 15:00</small>
                </div>
              </div>
            </li>
            <li class="notification-box bg-gray">
              <div class="row">
                <div class="col-lg-3 col-sm-3 col-3 text-center">
                  <img src="/demo/man-profile.jpg" class="w-50 rounded-circle">
                </div>
                <div class="col-lg-8 col-sm-8 col-8">
                  <strong class="text-info">David John</strong>
                  <div>
                    Lorem ipsum dolor sit amet, consectetur
                  </div>
                  <small class="text-warning">27.11.2015, 15:00</small>
                </div>
              </div>
            </li>
            <li class="notification-box">
              <div class="row">
                <div class="col-lg-3 col-sm-3 col-3 text-center">
                  <img src="/demo/man-profile.jpg" class="w-50 rounded-circle">
                </div>
                <div class="col-lg-8 col-sm-8 col-8">
                  <strong class="text-info">David John</strong>
                  <div>
                    Lorem ipsum dolor sit amet, consectetur
                  </div>
                  <small class="text-warning">27.11.2015, 15:00</small>
                </div>
              </div>
            </li>
            <li class="footer bg-dark text-center">
              <a href="" class="text-light">View All</a>
            </li>
          </ul>
        </li>







        <li class="nav-item dropdown">
          <a class="nav-link text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-bell"></i>
          </a>
          <ul class="dropdown-menu">
            <li class="head text-light bg-dark">
              <div class="row">
                <div class="col-lg-12 col-sm-12 col-12">
                  <span>Notifications (3)</span>
                  <a href="" class="float-right text-light">Mark all as read</a>
                </div>
              </div>
            </li>
            <li class="notification-box">
              <div class="row">
                <div class="col-lg-3 col-sm-3 col-3 text-center">
                  <img src="/demo/man-profile.jpg" class="w-50 rounded-circle">
                </div>
                <div class="col-lg-8 col-sm-8 col-8">
                  <strong class="text-info">David John</strong>
                  <div>
                    Lorem ipsum dolor sit amet, consectetur
                  </div>
                  <small class="text-warning">27.11.2015, 15:00</small>
                </div>
              </div>
            </li>
            <li class="notification-box bg-gray">
              <div class="row">
                <div class="col-lg-3 col-sm-3 col-3 text-center">
                  <img src="/demo/man-profile.jpg" class="w-50 rounded-circle">
                </div>
                <div class="col-lg-8 col-sm-8 col-8">
                  <strong class="text-info">David John</strong>
                  <div>
                    Lorem ipsum dolor sit amet, consectetur
                  </div>
                  <small class="text-warning">27.11.2015, 15:00</small>
                </div>
              </div>
            </li>
            <li class="notification-box">
              <div class="row">
                <div class="col-lg-3 col-sm-3 col-3 text-center">
                  <img src="/demo/man-profile.jpg" class="w-50 rounded-circle">
                </div>
                <div class="col-lg-8 col-sm-8 col-8">
                  <strong class="text-info">David John</strong>
                  <div>
                    Lorem ipsum dolor sit amet, consectetur
                  </div>
                  <small class="text-warning">27.11.2015, 15:00</small>
                </div>
              </div>
            </li>
            <li class="footer bg-dark text-center">
              <a href="" class="text-light">View All</a>
            </li>
          </ul>
        </li>




        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Username <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li align="center" class="well">
              <div><img class="img-responsive" style="padding:2%;" src="https://bootdey.com/img/Content/avatar/avatar1.png"/><a class="change" href="">Change Picture</a></div>
              <a href="#" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-lock"></span> Security</a>
              <a href="#" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
            </li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



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

    <div style="text-align: center">
        <div class="avatar-upload">
            <div class="avatar-edit">
                <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                <label for="imageUpload"></label>
            </div>
            <div class="avatar-preview">
                <div id="imagePreview" style="background-image: url(http://i.pravatar.cc/500?img=7);">
                </div>
            </div>
        </div>
    </div>

</div>






  <div class="container">




   <!-- <div class="row">
      <div class="col-md-12">

           <!-- <h1 class="display3">Fluid jumbotron</h1>
            <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>  -->


          <!--  <section style="margin-top: 0px;" class="section-first" data-vidbg-bg="mp4:video.mp4, webm: webm_video.webm, poster:fallback.jpg" data-vidbg-options="loop: true,muted: false, overlay: false">

            </section>


        <div id="block2" style=" height: 300px; margin-bottom: 25px;"
             data-vide-bg="mp4:dash, webm:dash, ogv: http://vodkabears.github.io/vide/video/ocean, poster: video/ocean"
             data-vide-options="position: 0% 50%, muted:false">
        </div>

      </div>
    </div>  ->




    <!--<div class="row">


      <div class="col-lg-10 well well-sm" style="padding: 0px; border-width:5px; height: 250px;
    border-style:dashed;">


        <h4 style="  position: absolute; vertical-align: middle; text-align: center;
    top: 50%;
    left: 50%;
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%); " class="alert">Upload Cover Image For Hotel Here</h4>


           <div style="float: left; padding-left: 20px; padding-top: 160px;">

          <button  class="feedback"><input type='file' onchange="readURL(this);" />
            <img id="blah" src="" alt="" />Feedback</button>

           </div>


      </div>


    </div>  -->

<!--
    <div class="row">

      <div class="col-lg-10 well well-sm" style="padding: 0px; border-width:5px; height:250px; border-style:dashed">


        <input type='file' onchange="readURL(this);" />
        <img id="blah" src="http://placehold.it/180" alt="your image" />

      </div>

    </div>  -->





    <div class="row">

      <!--Grid column-->

        <!--
        <div class="card card-cascade narrower">

          <div class="card-body text-center">

          </div>

        </div> -->
        <!--/.Card-->


        <div class="col-lg-offset-1 col-lg-10">


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
                  <li class="facli">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="">Option 1
                      </label>
                    </div>
                  </li>

                  <li class="facli">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="">Option 2
                      </label>
                    </div>
                  </li>

                  <li class="facli">

                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="">Option 3
                      </label>
                    </div>

                  </li>

                  <li class="facli">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="">Option 2
                      </label>
                    </div>
                  </li>

                  <li class="facli">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="">Option 3
                      </label>
                    </div>
                  </li>


                <li class="facli">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" value="">Option 3
                    </label>
                  </div>
                </li>



              </ul>
              </div>

              <div class="faclist">
                <h3><i class="material-icons">spa</i> HelvetiList</h3>
                <ul>
                    <li class="facli">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="">Option 1
                        </label>
                      </div>
                    </li>

                    <li class="facli">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="">Option 2
                        </label>
                      </div>
                    </li>

                    <li class="facli">

                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="">Option 3
                        </label>
                      </div>

                    </li>

                    <li class="facli">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="">Option 2
                        </label>
                      </div>
                    </li>

                    <li class="facli">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="">Option 3
                        </label>
                      </div>
                    </li>

                  </ul>
                </ul>
              </div>
              <div class="faclist">
                <h3><i class="material-icons">pool</i> HelvetiList</h3>
                <ul>
                    <li class="facli">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="">Option 1
                        </label>
                      </div>
                    </li>

                    <li class="facli">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="">Option 2
                        </label>
                      </div>
                    </li>

                    <li class="facli">

                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="">Option 3
                        </label>
                      </div>

                    </li>

                    <li class="facli">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="">Option 2
                        </label>
                      </div>
                    </li>

                    <li class="facli">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="">Option 3
                        </label>
                      </div>
                    </li>

                  </ul>
                </ul>
              </div>


              <div class="faclist">
                <h3><i class="material-icons">pets</i> HelvetiList</h3>
                <ul>
                    <li class="facli">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="">Option 1
                        </label>
                      </div>
                    </li>

                    <li class="facli">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="">Option 2
                        </label>
                      </div>
                    </li>

                    <li class="facli">

                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="">Option 3
                        </label>
                      </div>

                    </li>

                    <li class="facli">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="">Option 2
                        </label>
                      </div>
                    </li>

                    <li class="facli">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="">Option 3
                        </label>
                      </div>
                    </li>
                </ul>

              </div>


              <div class="faclist">
                <h3><i class="material-icons">local_parking</i> HelvetiList</h3>

                  <ul>
                    <li class="facli">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="">Option 1
                        </label>
                      </div>
                    </li>

                    <li class="facli">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="">Option 2
                        </label>
                      </div>
                    </li>

                    <li class="facli">

                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="">Option 3
                        </label>
                      </div>

                    </li>

                    <li class="facli">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="">Option 2
                        </label>
                      </div>
                    </li>

                    <li class="facli">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="">Option 3
                        </label>
                      </div>
                    </li>

                  </ul>
              </div>


              <div class="faclist">
                <h3><i class="material-icons">local_dining</i> HelvetiList</h3>
                <ul>
                    <li class="facli">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="">Option 1
                        </label>
                      </div>
                    </li>

                    <li class="facli">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="">Option 2
                        </label>
                      </div>
                    </li>

                    <li class="facli">

                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="">Option 3
                        </label>
                      </div>

                    </li>

                    <li class="facli">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="">Option 2
                        </label>
                      </div>
                    </li>

                    <li class="facli">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="">Option 3
                        </label>
                      </div>
                    </li>

                </ul>
              </div>


              <div class="faclist">
                <h3><i class="material-icons">business_center</i> HelvetiList</h3>
                <ul>
                    <li class="facli">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="">Option 1
                        </label>
                      </div>
                    </li>

                    <li class="facli">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="">Option 2
                        </label>
                      </div>
                    </li>

                    <li class="facli">

                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="">Option 3
                        </label>
                      </div>

                    </li>

                    <li class="facli">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="">Option 2
                        </label>
                      </div>
                    </li>

                    <li class="facli">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="">Option 3
                        </label>
                      </div>
                    </li>

                </ul>
              </div>

              <div class="faclist">
                <h3><i class="material-icons">games</i> HelvetiList</h3>
                <ul>

                    <li class="facli">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="">Option 1
                        </label>
                      </div>
                    </li>

                    <li class="facli">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="">Option 2
                        </label>
                      </div>
                    </li>

                    <li class="facli">

                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="">Option 3
                        </label>
                      </div>

                    </li>

                    <li class="facli">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="">Option 2
                        </label>
                      </div>
                    </li>

                    <li class="facli">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="">Option 3
                        </label>
                      </div>
                    </li>

                  </ul>
              </div>


              <div class="faclist">
                <h3><i class="material-icons">room_service</i> HelvetiList</h3>
                <ul>
                    <li class="facli">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="">Option 1
                        </label>
                      </div>
                    </li>

                    <li class="facli">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="">Option 2
                        </label>
                      </div>
                    </li>

                    <li class="facli">

                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="">Option 3
                        </label>
                      </div>

                    </li>

                    <li class="facli">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="">Option 2
                        </label>
                      </div>
                    </li>

                    <li class="facli">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="">Option 3
                        </label>
                      </div>
                    </li>

                  </ul>
              </div>

              <div class="faclist">
                <h3><i class="material-icons">hot_tub</i> HelvetiList</h3>
                <ul>
                  <li class="facli">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="">Option 1
                      </label>
                    </div>
                  </li>

                  <li class="facli">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="">Option 2
                      </label>
                    </div>
                  </li>

                  <li class="facli">

                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="">Option 3
                      </label>
                    </div>

                  </li>

                  <li class="facli">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="">Option 2
                      </label>
                    </div>
                  </li>

                  <li class="facli">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="">Option 3
                      </label>
                    </div>
                  </li>
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

              <h1>Hotel Rooms Types</h1>
              <p>Your Hotel Room Information.</p>



              <div class="form-group">
                <label for="usr">Room Name</label>
                <input type="text" class="form-control" id="usr">
              </div>

              <div class="form-group">
                <label for="usr">Room Description</label>
                <input type="text" class="form-control" id="usr">
              </div>

              <h6>Room Type</h6>

              <label class="radio-inline">
                <input type="radio" name="optradio">Option 1
              </label>
              <label class="radio-inline">
                <input type="radio" name="optradio">Option 2
              </label>
              <label class="radio-inline">
                <input type="radio" name="optradio">Option 3
              </label>

              <br>
              <h6>Per Night Room Charges</h6>

              <div class="money">
                <input type="text" class="numberOnly"  autocomplete="off" maxlength="50" /><div>PKR</div>
              </div>


              <h4>Room Services</h4>


              <label class="checkbox-inline">
                <input type="checkbox" value="">Option 1
              </label>
              <label class="checkbox-inline">
                <input type="checkbox" value="">Option 2
              </label>
              <label class="checkbox-inline">
                <input type="checkbox" value="">Option 3
              </label>

              <label class="checkbox-inline">
                <input type="checkbox" value="">Option 1
              </label>
              <label class="checkbox-inline">
                <input type="checkbox" value="">Option 2
              </label>
              <label class="checkbox-inline">
                <input type="checkbox" value="">Option 3
              </label>

              <label class="checkbox-inline">
                <input type="checkbox" value="">Option 1
              </label>
              <label class="checkbox-inline">
                <input type="checkbox" value="">Option 2
              </label>
              <label class="checkbox-inline">
                <input type="checkbox" value="">Option 3
              </label>

              <label class="checkbox-inline">
                <input type="checkbox" value="">Option 1
              </label>
              <label class="checkbox-inline">
                <input type="checkbox" value="">Option 2
              </label>
              <label class="checkbox-inline">
                <input type="checkbox" value="">Option 3
              </label>


              <div style="float: left;" id="container1">
                <input id="test1" type="text"  >
                <input value="add" type="button"  onClick="add()">
              </div>




            </div>

            <div role="tabpanel" class="tab-pane fade" id="Section3">

              <div class="bs-example1">
                <h2>Horizontal Definition Lists</h2>
                <dl class="dl-horizontal">


                  <form>


                    <h5> <i class="fa fa-clock-o" aria-hidden="true"></i> Check in Time</h5>
                    <div class="form-group">
                      <input type="time" class="form-control" />
                    </div>

                    <h5> <i class="fa fa-clock-o" aria-hidden="true"></i> Check out Time</h5>
                    <div class="form-group">
                      <input type="time" class="form-control" />
                    </div>



                    <!--   <div class="input-group bootstrap-timepicker timepicker">
                         <input id="timepicker1" type="text" class="form-control input-small">
                         <span class="input-group-addon"><i class="fa fa-camera"></i></span>
                       </div>


                    <div class="form-group">
                      <div class='input-group date' id='datetimepicker3'>
                        <input type='text' class="form-control" />
                        <span class="input-group-addon">
                                <i class="fa fa-camera"></i>
                            </span>
                      </div>
                    </div>


                    <div class="input-append bootstrap-timepicker-component">

                    <input type="text" class="timepicker-default input-small">

                    <span class="add-on"> <i class="fa fa-clock-o" aria-hidden="true"></i> </span>

                  </div>  -->



                    <div class="form-group">
                      <label for="usr"> <h5> <i class="fa fa-info-circle" aria-hidden="true"></i> Cancellation/Prepayment</h5></label>
                      <input type="text" class="form-control" id="usr">
                    </div>

                    <div class="form-group">
                      <label for="pwd">  <h5> <i class="fa fa-child" aria-hidden="true"> + <i class="fa fa-bed" aria-hidden="true"></i></i> Childern and extra beds</h5></label>
                      <input type="password" class="form-control" id="pwd">
                    </div>

                    <div class="form-group">
                      <label for="usr">          <h5> <i class="fa fa-paw" aria-hidden="true"></i> Pets</h5></label>
                      <input type="text" class="form-control" id="usr">
                    </div>

                    <div class="form-group">
                      <label for="pwd"><h5> <i class="fa fa-users" aria-hidden="true"></i> Groups</h5></label>
                      <input type="password" class="form-control" id="pwd">
                    </div>


                    <h5> <i class="fa fa-credit-card-alt" aria-hidden="true"></i> Cards accepted at this property</h5>


                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="">Option 1
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="">Option 2
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="">Option 2
                      </label>
                    </div>

                  </form>

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

              <div class="file-loading">
                <input id="input-44" name="input44[]" type="file" multiple>
              </div>

            </div>


      </div>

        </div>





    <div class="row">

     <!-- <div id="cblist">
        <input type="checkbox" value="first checkbox" id="cb1" /> <label for="cb1">first checkbox</label>
      </div>

      <input type="text" id="txtName" />
      <input type="button" value="ok" id="btnSave" />

      <script type="text/javascript">
          $(document).ready(function() {
              $('#btnSave').click(function() {
                  addCheckbox($('#txtName').val());
              });
          });

          function addCheckbox(name) {
              var container = $('#cblist');
              var inputs = container.find('input');
              var id = inputs.length+1;

              $('<input />', { type: 'checkbox', id: 'cb'+id, value: name }).appendTo(container);
              $('<label />', { 'for': 'cb'+id, text: name }).appendTo(container);
          }
      </script>  -->

    </div>


    <div id="container">
      <input id="test" type="text"  >
      <input value="add" type="button"  onClick="add()">
    </div>

    <script>
       var i=0;
        function add(){
            if (document.getElementById('test1').value!='')
            {
                i++;
                var title   =document.getElementById('test1').value;
                var node = document.createElement('div');
                node.innerHTML = '<input type="checkbox" id="check' + i + '" name="check' + i + '"><label for="check' + i + '">'+ title +'</label>';
                document.getElementById('container1').appendChild(node);
            }
        }
    </script>



    <script>

       /* var newlabel = document.createElement("Label");
        newlabel.setAttribute("for",id_from_input);
        newlabel.innerHTML = "Here goes the text";
        parentDiv.appendChild(newlabel); */

    </script>

<!--
    <script>

        ar checkbox = document.createElement('input');
        checkbox.type = "checkbox";
        checkbox.name = "name";
        checkbox.value = "value";
        checkbox.id = "id";

        var label = document.createElement('label')
        label.htmlFor = "id";
        label.appendChild(document.createTextNode('text for label after checkbox'));

        container.appendChild(checkbox);
        container.appendChild(label);

    </script>  -->




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



<!-- if using RTL (Right-To-Left) orientation, load the RTL CSS file after fileinput.css by uncommenting below -->
<!-- link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/css/fileinput-rtl.min.css" media="all" rel="stylesheet" type="text/css" /-->
<!-- optionally uncomment line below if using a theme or icon set like font awesome (note that default icons used are glyphicons and `fa` theme can override it) -->
<!-- link https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css media="all" rel="stylesheet" type="text/css" /-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/js/plugins/piexif.min.js" type="text/javascript"></script>
<!-- sortable.min.js is only needed if you wish to sort / rearrange files in initial preview.
    This must be loaded before fileinput.min.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/js/plugins/sortable.min.js" type="text/javascript"></script>
<!-- purify.min.js is only needed if you wish to purify HTML content in your preview for
    HTML files. This must be loaded before fileinput.min.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/js/plugins/purify.min.js" type="text/javascript"></script>
<!-- popper.min.js below is needed if you use bootstrap 4.x. You can also use the bootstrap js
   3.3.x versions without popper.min.js. -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/js/fileinput.min.js"></script>
<!-- optionally uncomment line below for loading your theme assets for a theme like Font Awesome (`fa`) -->
<!-- script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/themes/fa/theme.min.js"></script -->
<!-- optionally if you need translation for your language then include  locale file as mentioned below -->



<script>

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreview').css('background-image', 'url('+e.target.result +')');
                $('#imagePreview').hide();
                $('#imagePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imageUpload").change(function() {
        readURL(this);
    });




</script>



<script>
    $(document).ready(function() {
        $("#input-44").fileinput({
            uploadUrl: '/file-upload-batch/2',
            maxFilePreviewSize: 10240
        });
    });
</script>


<!--<script>

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }


</script> -->


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



<script type="text/javascript">

    $(document).ready(function() {

        //here first get the contents of the div with name class copy-fields and add it to after "after-add-more" div class.
        $(".add-more").click(function(){
            var html = $(".copy-fields").html();
            $(".after-add-more").after(html);
        });
//here it will remove the current value of the remove button which has been pressed
        $("body").on("click",".remove",function(){
            $(this).parents(".form-check").remove();
        });

    });

</script>


<script>

    $('.money > div').click(function() {
        $('.money > input:eq('+$('.money > div').index(this)+')').focus();
    });

    $('.numberOnly').on('keydown', function(e) {

        if (this.selectionStart || this.selectionStart == 0) {
            // selectionStart won't work in IE < 9

            var key = e.which;
            var prevDefault = true;

            var thouSep = ",";  // your seperator for thousands
            var deciSep = ".";  // your seperator for decimals
            var deciNumber = 2; // how many numbers after the comma

            var thouReg = new RegExp(thouSep,"g");
            var deciReg = new RegExp(deciSep,"g");

            function spaceCaretPos(val, cPos) {
                /// get the right caret position without the spaces

                if (cPos > 0 && val.substring((cPos-1),cPos) == thouSep)
                    cPos = cPos-1;

                if (val.substring(0,cPos).indexOf(thouSep) >= 0) {
                    cPos = cPos - val.substring(0,cPos).match(thouReg).length;
                }

                return cPos;
            }

            function spaceFormat(val, pos) {
                /// add spaces for thousands

                if (val.indexOf(deciSep) >= 0) {
                    var comPos = val.indexOf(deciSep);
                    var int = val.substring(0,comPos);
                    var dec = val.substring(comPos);
                } else{
                    var int = val;
                    var dec = "";
                }
                var ret = [val, pos];

                if (int.length > 3) {

                    var newInt = "";
                    var spaceIndex = int.length;

                    while (spaceIndex > 3) {
                        spaceIndex = spaceIndex - 3;
                        newInt = thouSep+int.substring(spaceIndex,spaceIndex+3)+newInt;
                        if (pos > spaceIndex) pos++;
                    }
                    ret = [int.substring(0,spaceIndex) + newInt + dec, pos];
                }
                return ret;
            }

            $(this).on('keyup', function(ev) {

                if (ev.which == 8) {
                    // reformat the thousands after backspace keyup

                    var value = this.value;
                    var caretPos = this.selectionStart;

                    caretPos = spaceCaretPos(value, caretPos);
                    value = value.replace(thouReg, '');

                    var newValues = spaceFormat(value, caretPos);
                    this.value = newValues[0];
                    this.selectionStart = newValues[1];
                    this.selectionEnd   = newValues[1];
                }
            });

            if ((e.ctrlKey && (key == 65 || key == 67 || key == 86 || key == 88 || key == 89 || key == 90)) ||
                (e.shiftKey && key == 9)) // You don't want to disable your shortcuts!
                prevDefault = false;

            if ((key < 37 || key > 40) && key != 8 && key != 9 && prevDefault) {
                e.preventDefault();

                if (!e.altKey && !e.shiftKey && !e.ctrlKey) {

                    var value = this.value;
                    if ((key > 95 && key < 106)||(key > 47 && key < 58) ||
                        (deciNumber > 0 && (key == 110 || key == 188 || key == 190))) {

                        var keys = { // reformat the keyCode
                            48: 0, 49: 1, 50: 2, 51: 3,  52: 4,  53: 5,  54: 6,  55: 7,  56: 8,  57: 9,
                            96: 0, 97: 1, 98: 2, 99: 3, 100: 4, 101: 5, 102: 6, 103: 7, 104: 8, 105: 9,
                            110: deciSep, 188: deciSep, 190: deciSep
                        };

                        var caretPos = this.selectionStart;
                        var caretEnd = this.selectionEnd;

                        if (caretPos != caretEnd) // remove selected text
                            value = value.substring(0,caretPos) + value.substring(caretEnd);

                        caretPos = spaceCaretPos(value, caretPos);

                        value = value.replace(thouReg, '');

                        var before = value.substring(0,caretPos);
                        var after = value.substring(caretPos);
                        var newPos = caretPos+1;

                        if (keys[key] == deciSep && value.indexOf(deciSep) >= 0) {
                            if (before.indexOf(deciSep) >= 0) newPos--;
                            before = before.replace(deciReg, '');
                            after = after.replace(deciReg, '');
                        }
                        var newValue = before + keys[key] + after;

                        if (newValue.substring(0,1) == deciSep) {
                            newValue = "0"+newValue;
                            newPos++;
                        }

                        while (newValue.length > 1 && newValue.substring(0,1) == "0" && newValue.substring(1,2) != deciSep) {
                            newValue = newValue.substring(1);
                            newPos--;
                        }

                        if (newValue.indexOf(deciSep) >= 0) {
                            var newLength = newValue.indexOf(deciSep)+deciNumber+1;
                            if (newValue.length > newLength) {
                                newValue = newValue.substring(0,newLength);
                            }
                        }

                        newValues = spaceFormat(newValue, newPos);

                        this.value = newValues[0];
                        this.selectionStart = newValues[1];
                        this.selectionEnd   = newValues[1];
                    }
                }
            }

            $(this).on('blur', function(e) {

                if (deciNumber > 0) {
                    var value = this.value;

                    var noDec = "";
                    for (var i = 0; i < deciNumber; i++) noDec += "0";

                    if (value == "0" + deciSep + noDec) {
                        this.value = ""; //<-- put your default value here
                    } else if(value.length > 0) {
                        if (value.indexOf(deciSep) >= 0) {
                            var newLength = value.indexOf(deciSep) + deciNumber + 1;
                            if (value.length < newLength) {
                                while (value.length < newLength) value = value + "0";
                                this.value = value.substring(0,newLength);
                            }
                        }
                        else this.value = value + deciSep + noDec;
                    }
                }
            });
        }
    });

    $('.price > input:eq(0)').focus();

</script>





<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAA1750liR_-w6TfMTwnmQDk3Db17HXZXw&callback=custom_map"></script>

</body>
</html>
