

<html>
<head>
    <title>Bootstrap Modal</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap-theme.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">



    <style>


        .grid {
            position: relative;
            clear: both;
            margin: 0 auto;
            padding: 1em 0 4em;
            max-width: 1400px;
            list-style: none;
            text-align: center;
        }

        .up{
            background-image: url('/images/runnyrem-263132.jpg');
            background-size: cover;
            background-position: inherit;
            stroke-opacity: 0.4;
        }



       .modal-dialog{

           border-radius: 0px;
       }

        .modal-content{  border-radius: 1px;

                         margin-top:5px;
                         margin-bottom:5px;
                         margin-left: 25px;
                         margin-right: 25px;
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



<button type="button" class="btn btn-primary btn-large" data-toggle="modal" data-target="#myModal">Launch demo modal</button>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="purchaseLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="purchaseLabel">Dani Hotel Facilities</h4>
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




</body>
</html>