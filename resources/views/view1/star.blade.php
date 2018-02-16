<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Fixed Top Navbar Example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="{{assets}}">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="css/navbar-fixed-top.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>



    <style>


    </style>


    <![endif]-->
</head>

<body>

<form action="">
    <!--  General -->
    <div class="form-group">
        <h2 class="heading">Booking & contact</h2>
        <div class="controls">
            <input type="text" id="name" class="floatLabel" name="name">
            <label for="name">Name</label>
        </div>
        <div class="controls">
            <input type="text" id="email" class="floatLabel" name="email">
            <label for="email">Email</label>
        </div>
        <div class="controls">
            <input type="tel" id="phone" class="floatLabel" name="phone">
            <label for="phone">Phone</label>
        </div>
        <div class="grid">
            <div class="col-2-3">
                <div class="controls">
                    <input type="text" id="street" class="floatLabel" name="street">
                    <label for="street">Street</label>
                </div>
            </div>
            <div class="col-1-3">
                <div class="controls">
                    <input type="number" id="street-number" class="floatLabel" name="street-number">
                    <label for="street-number">Number</label>
                </div>
            </div>
        </div>
        <div class="grid">
            <div class="col-2-3">
                <div class="controls">
                    <input type="text" id="city" class="floatLabel" name="city">
                    <label for="city">City</label>
                </div>
            </div>
            <div class="col-1-3">
                <div class="controls">
                    <input type="text" id="post-code" class="floatLabel" name="post-code">
                    <label for="post-code">Post Code</label>
                </div>
            </div>
        </div>
        <div class="controls">
            <input type="text" id="country" class="floatLabel" name="country">
            <label for="country">Country</label>
        </div>
    </div>
    <!--  Details -->
    <div class="form-group">
        <h2 class="heading">Details</h2>
        <div class="grid">
            <div class="col-1-4 col-1-4-sm">
                <div class="controls">
                    <input type="date" id="arrive" class="floatLabel" name="arrive" value="<?php echo date('Y-m-d'); ?>">
                    <label for="arrive" class="label-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Arrive</label>
                </div>
            </div>
            <div class="col-1-4 col-1-4-sm">
                <div class="controls">
                    <input type="date" id="depart" class="floatLabel" name="depart" value="<?php echo date('Y-m-d'); ?>" />
                    <label for="depart" class="label-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Depart</label>
                </div>
            </div>
        </div>
        <div class="grid">
            <div class="col-1-3 col-1-3-sm">
                <div class="controls">
                    <i class="fa fa-sort"></i>
                    <select class="floatLabel">
                        <option value="blank"></option>
                        <option value="1">1</option>
                        <option value="2" selected>2</option>
                        <option value="3">3</option>
                    </select>
                    <label for="fruit"><i class="fa fa-male"></i>&nbsp;&nbsp;People</label>
                </div>
            </div>
            <div class="col-1-3 col-1-3-sm">
                <div class="controls">
                    <i class="fa fa-sort"></i>
                    <select class="floatLabel">
                        <option value="blank"></option>
                        <option value="deluxe" selected>With Bathroom</option>
                        <option value="Zuri-zimmer">Without Bathroom</option>
                    </select>
                    <label for="fruit">Room</label>
                </div>
            </div>

            <div class="col-1-3 col-1-3-sm">
                <div class="controls">
                    <i class="fa fa-sort"></i>
                    <select class="floatLabel">
                        <option value="blank"></option>
                        <option value="single-bed">Zweibett</option>
                        <option value="double-bed" selected>Doppelbett</option>
                    </select>
                    <label for="fruit">Bedding</label>
                </div>
            </div>

        </div>
        <div class="grid">
            <p class="info-text">Please describe your needs e.g. Extra beds, children's cots</p>
            <br>
            <div class="controls">
                <textarea name="comments" class="floatLabel" id="comments"></textarea>
                <label for="comments">Comments</label>
            </div>
            <button type="submit" value="Submit" class="col-1-4">Submit</button>
        </div>
    </div> <!-- /.form-group -->
</form>





<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>
</body>

<script>

    (function($){
        function floatLabel(inputType){
            $(inputType).each(function(){
                var $this = $(this);
                // on focus add cladd active to label
                $this.focus(function(){
                    $this.next().addClass("active");
                });
                //on blur check field and remove class if needed
                $this.blur(function(){
                    if($this.val() === '' || $this.val() === 'blank'){
                        $this.next().removeClass();
                    }
                });
            });
        }
        // just add a class of "floatLabel to the input field!"
        floatLabel(".floatLabel");
    })(jQuery);

</script>

</html>
