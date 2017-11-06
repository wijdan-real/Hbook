<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Registration Hotel</title>

    <!-- embedding bootstrap 4 cdn and google icons and awesome font -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/intlTelInput.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!--<script type="text/javascript" src="/public/js/countries.js"></script> -->



    <style>

        .grid {
            position: relative;
            clear: both;
            margin: 0 auto;
            padding: 1em 0 4em;
            max-width: 1200px;
            list-style: none;
            text-align: center;
        }

        .center-block1 {

            display: block;
            margin-right: 120px;
            margin-left: auto;
        }

    </style>

</head>


<body>

    <br>

   <div class="grid">

       <!--  <section> -->
                   <div class="wizard">
                       <div class="wizard-inner">
                           <div class="connecting-line"></div>
                           <ul class="nav nav-tabs" role="tablist">

                               <li role="presentation" class="active">
                                   <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-folder-open"></i>
                            </span>
                                   </a>
                               </li>

                               <li role="presentation" class="disabled">
                                   <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </span>
                                   </a>
                               </li>
                               <li role="presentation" class="disabled">
                                   <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-picture"></i>
                            </span>
                                   </a>
                               </li>

                               <li role="presentation" class="disabled">
                                   <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-ok"></i>
                            </span>
                                   </a>
                               </li>
                           </ul>
                       </div>



                       <br>

                        <!-- 1st tab content area -->
                       <div class="center-block1">

                       <form  class="form-horizontal">


                           <div class="form-group">
                               <label class="control-label col-md-2" for="name">Full Name:</label>

                               <div class="col-md-4">
                                       <input type="name" class="form-control" id="name" placeholder="Enter Full Name">
                               </div>

                               <label class="control-label col-md-2" for="password">Confirm Password:</label>
                               <div class="col-md-4">
                                       <input type="password" class="form-control" id="password" placeholder="Confirm your password">
                                   </div>
                               </div>


                           <div class="form-group">
                               <label class="control-label col-md-2" for="email">Confirm Email:</label>
                               <div class="col-md-4">
                                   <div class="input-group">
                                   <div class="input-group-btn">
                                       <button class="btn btn-default" type="submit"><i class="fa fa-envelope"></i></button>
                                   </div>
                                   <input type="email" class="form-control" id="email" placeholder="Enter Primary email">
                               </div>

                               </div>

                               <label class="control-label col-md-2" for="email">Secondary Email:</label>
                               <div class="col-md-4">
                                   <div class="input-group">
                                       <div class="input-group-btn">
                                           <button class="btn btn-default" type="submit"><i class="fa fa-envelope-o"></i></button>
                                       </div>
                                   <input type="email" class="form-control" id="email" placeholder="Enter Secondary email">
                               </div>
                           </div>
                           </div>

                           <div class="form-group">
                               <label class="control-label col-md-2" for="tel">Enter Number:</label>
                               <div class="col-md-2">
                                   <input style="padding-right: 10px;" type="tel" id="tel" name="tel" placeholder="Enter your Number">
                                   </div>

                           </div>




                           <div class="form-group">
                               <label class="control-label col-md-2" for="sel1">Select One:</label>
                               <div class="col-md-4">
                               <select class="form-control" id="sel1">
                                   <option>5 star</option>
                                   <option>4 star</option>
                                   <option>3 star</option>
                                   <option>2 star</option>
                                   <option>1 star</option>
                               </select>
                               </div>

                               <label class="control-label col-md-2" for="sel2">Select your type:</label>
                               <div class="col-md-4">
                               <select class="form-control" id="sel2">
                                   <option>Budget</option>
                                   <option>Suite</option>
                                   <option>Boutique</option>
                                   <option>Luxury</option>
                                   <option>Resorts and Spa Resorts</option>
                                   <option>Extended Stay</option>
                               </select>
                           </div>
                           </div>



                           <div class="form-group">
                               <label class="control-label col-md-2" for="desc">Description:</label>
                               <br>
                               <div class="col-md-10">
                                       <input style=" height:150px;" type="text" class="form-control" id="desc" placeholder="Enter Description (No more than 500 words)">
                                   </div>
                               </div>






                           <div class="form-group">
                               <!--<label class="control-label col-md-2" for="country">Enter Your Country:</label>-->
                               <span style="display: inline-block">

		                        <label class="control-label col-md-2" for="country">Select Country (with states):</label>
	                            <div class="col-md-4">
	                         	<select class="form-control" id="country" name ="country"></select>
	                            </div>

		                        <label class="control-label col-md-2" for="state">Enter Your State:</label>
		                        <div class="col-md-4">
		                      	<select class="form-control" name ="state" id ="state"></select>
	                        	</div>

	                           </span>
                           </div>




                           <div class="form-group">
                               <div class="col-sm-offset-2 col-sm-10">
                                   <div class="checkbox">
                                       <label><input type="checkbox"> Remember me</label>
                                   </div>
                               </div>
                           </div>
                           <div class="form-group">
                               <div class="col-sm-offset-2 col-sm-10">
                                   <button type="submit" class="btn btn-default">Submit</button>
                               </div>
                           </div>


                       </form>    <!-- Form ends here -->
                        <!-- 1st tab content area -->


                       <ul class="list-inline pull-right">
                                       <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                       <li><button type="button" class="btn btn-default next-step">Skip</button></li>
                                       <li><button type="button" class="btn btn-primary btn-info-full next-step">Save and continue</button></li>
                                   </ul>





   </div>   <!-- center -block1 class ends here -->

   </div>    <!-- grid class terminates here -->
   <!--<script src="/public/js/jquery-3.2.1.js"></script> -->
   </div>

</body>



<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type= "text/javascript" src="/countries.js"></script>
<script type= "text/javascript" src="/intlTelInput.min.js"></script>
<script type= "text/javascript" src="/data.js"></script>



<script>
    $("#tel").intlTelInput();
    utilsScript: "/utils.js"
</script>


<script language="javascript" >
    populateCountries("country", "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
    populateCountries("country2");
    populateCountries("country2");
</script>



<script>

    $(document).ready(function () {
        //Initialize tooltips
        $('.nav-tabs > li a[title]').tooltip();

        //Wizard
        $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

            var $target = $(e.target);

            if ($target.parent().hasClass('disabled')) {
                return false;
            }
        });

        $(".next-step").click(function (e) {

            var $active = $('.wizard .nav-tabs li.active');
            $active.next().removeClass('disabled');
            nextTab($active);

        });
        $(".prev-step").click(function (e) {

            var $active = $('.wizard .nav-tabs li.active');
            prevTab($active);

        });
    });

    function nextTab(elem) {
        $(elem).next().find('a[data-toggle="tab"]').click();
    }
    function prevTab(elem) {
        $(elem).prev().find('a[data-toggle="tab"]').click();
    }


    //according menu

    $(document).ready(function()
    {
        //Add Inactive Class To All Accordion Headers
        $('.accordion-header').toggleClass('inactive-header');

        //Set The Accordion Content Width
        var contentwidth = $('.accordion-header').width();
        $('.accordion-content').css({});

        //Open The First Accordion Section When Page Loads
        $('.accordion-header').first().toggleClass('active-header').toggleClass('inactive-header');
        $('.accordion-content').first().slideDown().toggleClass('open-content');

        // The Accordion Effect
        $('.accordion-header').click(function () {
            if($(this).is('.inactive-header')) {
                $('.active-header').toggleClass('active-header').toggleClass('inactive-header').next().slideToggle().toggleClass('open-content');
                $(this).toggleClass('active-header').toggleClass('inactive-header');
                $(this).next().slideToggle().toggleClass('open-content');
            }

            else {
                $(this).toggleClass('active-header').toggleClass('inactive-header');
                $(this).next().slideToggle().toggleClass('open-content');
            }
        });

        return false;
    });

</script>


</html>
