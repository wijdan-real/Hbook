
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Socialziing</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.css">
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>

    <link rel="stylesheet" type="text/css" href="normalize.css" />
    <link rel="stylesheet" type="text/css" href="demo.css" />
    <link rel="stylesheet" type="text/css" href="set1.css" />

    <!-- Optional theme -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <style>

        *,
        *::before,
        *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

      /*  body {
            font: normal 16px/1.5 "Helvetica Neue", sans-serif;
            background: #456990;
            color: #fff;
            overflow-x: hidden;
            padding-bottom: 50px;
        }  /* INTRO SECTION
–––––––––––––––––––––––––––––––––––––––––––––––––– */

        /*.intro {
            background: #F45B69;
            padding: 100px 0;
        } */

        body{
            background-color: white;
            overflow-x: hidden; /*for hiding horizontal scroll bar*/
            overflow-y: auto; /*for vertical scroll bar*/
           /* color:rgba(142, 68, 173,1.0); */
            color:#353b48;
            font-family: 'Lato';
            font-size: 22px;
            padding-bottom: 20px;

            /*  Other Fonts are lato, roboto , droid ,  poiret one..  */



        }

        .brand1 {
            /*color: white; */
            float: left;
            color: #353b48;
        }
        .brand2 {
            /*  hsl(215,100,25); */
            float: right;
            color:  #c44569;

        }


        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
        }

        h1 {
            font-size: 2.5rem;
        }


        /* TIMELINE
        –––––––––––––––––––––––––––––––––––––––––––––––––– */

        .timeline ul {
            background: white ;
            padding: 50px 0;
        }

        .timeline ul li {
            list-style-type: none;
            position: relative;
            width: 6px;
            margin: 0 auto;
            padding-top: 50px;
            background: #353b48;
        }

        .timeline ul li::after {
            content: '';
            position: absolute;
            left: 50%;
            bottom: 0;
            transform: translateX(-50%);
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: inherit;
        }

        .timeline ul li div {
            position: relative;
            bottom: 0;
            width: 400px;
            padding: 15px;
           /* background: #F45B69; */
            background:  #c44569;
        }

        .timeline ul li div::before {
            content: '';
            position: absolute;
            bottom: 7px;
            width: 0;
            height: 0;
            border-style: solid;
        }

        .timeline ul li:nth-child(odd) div {
            left: 45px;
        }

        .timeline ul li:nth-child(odd) div::before {
            left: -15px;
            border-width: 8px 16px 8px 0;
            border-color: transparent #c44569 transparent transparent;
        }

        .timeline ul li:nth-child(even) div {
            left: -439px;
        }

        .timeline ul li:nth-child(even) div::before {
            right: -15px;
            border-width: 8px 0 8px 16px;
            border-color: transparent transparent transparent #c44569;
        }

        time {
            display: block;
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 8px;
        }


        /* EFFECTS
        –––––––––––––––––––––––––––––––––––––––––––––––––– */

        .timeline ul li::after {
            transition: background .5s ease-in-out;
        }

        .timeline ul li.in-view::after {
           /* background: #F45B69; */
               background:  #c44569;
        }

        .timeline ul li div {
            visibility: hidden;
            opacity: 0;
            transition: all .5s ease-in-out;
        }

        .timeline ul li:nth-child(odd) div {
            transform: translate3d(200px, 0, 0);
        }

        .timeline ul li:nth-child(even) div {
            transform: translate3d(-200px, 0, 0);
        }

        .timeline ul li.in-view div {
            transform: none;
            visibility: visible;
            opacity: 1;
        }


        /* GENERAL MEDIA QUERIES
        –––––––––––––––––––––––––––––––––––––––––––––––––– */

        @media screen and (max-width: 900px) {
            .timeline ul li div {
                width: 250px;
            }
            .timeline ul li:nth-child(even) div {
                left: -289px;
                /*250+45-6*/
            }
        }

        @media screen and (max-width: 600px) {
            .timeline ul li {
                margin-left: 20px;
            }
            .timeline ul li div {
                width: calc(100vw - 91px);
            }
            .timeline ul li:nth-child(even) div {
                left: 45px;
            }
            .timeline ul li:nth-child(even) div::before {
                left: -15px;
                border-width: 8px 16px 8px 0;
                border-color: transparent #c44569 transparent transparent;
            }
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


<section class="intro">
    <div class="container">
        <h1>Vertical Timeline &darr;</h1>
    </div>
</section>

<section class="timeline">
    <ul>
        <li>
            <div>
                <time>1934</time> At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
            </div>
        </li>
        <li>
            <div>
                <time>1937</time> Proin quam velit, efficitur vel neque vitae, rhoncus commodo mi. Suspendisse finibus mauris et bibendum molestie. Aenean ex augue, varius et pulvinar in, pretium non nisi.
            </div>
        </li>
        <li>
            <div>
                <time>1940</time> Proin iaculis, nibh eget efficitur varius, libero tellus porta dolor, at pulvinar tortor ex eget ligula. Integer eu dapibus arcu, sit amet sollicitudin eros.
            </div>
        </li>
        <li>
            <div>
                <time>1943</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
            </div>
        </li>
        <li>
            <div>
                <time>1946</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
            </div>
        </li>
        <li>
            <div>
                <time>1956</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
            </div>
        </li>
        <li>
            <div>
                <time>1957</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
            </div>
        </li>
        <li>
            <div>
                <time>1967</time> Aenean condimentum odio a bibendum rhoncus. Ut mauris felis, volutpat eget porta faucibus, euismod quis ante.
            </div>
        </li>
        <li>
            <div>
                <time>1977</time> Vestibulum porttitor lorem sed pharetra dignissim. Nulla maximus, dui a tristique iaculis, quam dolor convallis enim, non dignissim ligula ipsum a turpis.
            </div>
        </li>
        <li>
            <div>
                <time>1985</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
            </div>
        </li>
        <li>
            <div>
                <time>2000</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
            </div>
        </li>
        <li>
            <div>
                <time>2005</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
            </div>
        </li>
    </ul>
</section>




<!-- jQuery -->

<!-- Latest compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<script>

    (function() {

        'use strict';

        // define variables
        var items = document.querySelectorAll(".timeline li");

        // check if an element is in viewport
        // http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
        function isElementInViewport(el) {
            var rect = el.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }

        function callbackFunc() {
            for (var i = 0; i < items.length; i++) {
                if (isElementInViewport(items[i])) {
                    items[i].classList.add("in-view");
                }
            }
        }

        // listen for events
        window.addEventListener("load", callbackFunc);
        window.addEventListener("resize", callbackFunc);
        window.addEventListener("scroll", callbackFunc);

    })();


</script>


</body>

</html>









