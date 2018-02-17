<!DOCTYPE HTML>
<html>
  <head>

    <!-- Latest compiled and minified CSS
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->

  <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"> -->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link href="/css/customerbookingform/bootstrap-datetimepicker.min.css" rel="stylesheet">


    <style>

      /*custom font*/
      @import  url(https://fonts.googleapis.com/css?family=Montserrat);

      /*basic reset*/
      * {
        margin: 0;
        padding: 0;
      }

      html {
        height: 100%;
        background: #6441A5; /* fallback for old browsers */
        background: -webkit-linear-gradient(to left, #6441A5, #2a0845); /* Chrome 10-25, Safari 5.1-6 */
      }

      body {
        font-family: montserrat, arial, verdana;
        background: transparent;
      }

      /*form styles*/
      #msform {
        text-align: center;
        position: relative;
        margin-top: 30px;
      }

      #msform fieldset {
        background: white;
        border: 0 none;
        border-radius: 0px;
        box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
        padding: 20px 30px;
        box-sizing: border-box;
        width: 80%;
        margin: 0 10%;

        /*stacking fieldsets above each other*/
        position: relative;
      }

      /*Hide all except first fieldset*/
      #msform fieldset:not(:first-of-type) {
        display: none;
      }

      /*inputs*/
      #msform input, #msform textarea, #msform select, #msform option,#msform textarea , #msform input-group-addon, #example, #example1,form-control{
        padding: 15px;
        border: 1px solid #ccc;
        border-radius: 0px;
        margin-bottom: 10px;
        width: 100%;
        box-sizing: border-box;
        font-family: montserrat;
        color: #2C3E50;
        font-size: 13px;
      }

      #msform input:focus, #msform textarea:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        border: 1px solid #ee0979;
        outline-width: 0;
        transition: All 0.5s ease-in;
        -webkit-transition: All 0.5s ease-in;
        -moz-transition: All 0.5s ease-in;
        -o-transition: All 0.5s ease-in;
      }

      /*buttons*/
      #msform .action-button {
        width: 100px;
        background: #ee0979;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 25px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 5px;
      }

      #msform .action-button:hover, #msform .action-button:focus {
        box-shadow: 0 0 0 2px white, 0 0 0 3px #ee0979;
      }

      #msform .action-button-previous {
        width: 100px;
        background: #C5C5F1;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 25px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 5px;
      }

      #msform .action-button-previous:hover, #msform .action-button-previous:focus {
        box-shadow: 0 0 0 2px white, 0 0 0 3px #C5C5F1;
      }

      /*headings*/
      .fs-title {
        font-size: 18px;
        text-transform: uppercase;
        color: #2C3E50;
        margin-bottom: 10px;
        letter-spacing: 2px;
        font-weight: bold;
      }

      .fs-subtitle {
        font-weight: normal;
        font-size: 13px;
        color: #666;
        margin-bottom: 20px;
      }

      /*progressbar*/
      #progressbar {
        margin-bottom: 30px;
        overflow: hidden;
        /*CSS counters to number the steps*/
        counter-reset: step;
      }

      #progressbar li {
        list-style-type: none;
        color: white;
        text-transform: uppercase;
        font-size: 9px;
        width: 33.33%;
        float: left;
        position: relative;
        letter-spacing: 1px;
      }

      #progressbar li:before {
        content: counter(step);
        counter-increment: step;
        width: 24px;
        height: 24px;
        line-height: 26px;
        display: block;
        font-size: 12px;
        color: #333;
        background: white;
        border-radius: 25px;
        margin: 0 auto 10px auto;
      }

      /*progressbar connectors*/
      #progressbar li:after {
        content: '';
        width: 100%;
        height: 2px;
        background: white;
        position: absolute;
        left: -50%;
        top: 9px;
        z-index: -1; /*put it behind the numbers*/
      }

      #progressbar li:first-child:after {
        /*connector not needed before the first step*/
        content: none;
      }

      /*marking active/completed steps green*/
      /*The number of the step and the connector before it = green*/
      #progressbar li.active:before, #progressbar li.active:after {
        background: #ee0979;
        color: white;
      }


      /* Not relevant to this form */
      .dme_link {
        margin-top: 30px;
        text-align: center;
      }
      .dme_link a {
        background: #FFF;
        font-weight: bold;
        color: #ee0979;
        border: 0 none;
        border-radius: 25px;
        cursor: pointer;
        padding: 5px 25px;
        font-size: 12px;
      }

      .dme_link a:hover, .dme_link a:focus {
        background: #C5C5F1;
        text-decoration: none;
      }

      .fa fa-calendar-check-o {

        height: 10px;
        background: transparent;
      }

      .add-on .input-group-btn > .btn {
        border-left-width:0;left:-2px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
      }
      /* stop the glowing blue shadow */
      .add-on .form-control:focus {
        box-shadow:none;
        -webkit-box-shadow:none;
        border-color:#cccccc;
      }





      /* CSS for Credit Card Payment form */
      .credit-card-box .panel-title {
        display: inline;
        font-weight: bold;
      }
      .credit-card-box .form-control.error {
        border-color: red;
        outline: 0;
        box-shadow: inset 0 1px 1px rgba(0,0,0,0.075),0 0 8px rgba(255,0,0,0.6);
      }
      .credit-card-box label.error {
        font-weight: bold;
        color: red;
        padding: 2px 8px;
        margin-top: 2px;
      }
      .credit-card-box .payment-errors {
        font-weight: bold;
        color: red;
        padding: 2px 8px;
        margin-top: 2px;
      }
      .credit-card-box label {
        display: block;
      }
      /* The old "center div vertically" hack */
      .credit-card-box .display-table {
        display: table;
      }
      .credit-card-box .display-tr {
        display: table-row;
      }
      .credit-card-box .display-td {
        display: table-cell;
        vertical-align: middle;
        width: 50%;
      }
      /* Just looks nicer */
      .credit-card-box .panel-heading img {
        min-width: 180px;
      }




      .visa-mc-cvc-preview {
        background-image:url(data:image/png;base64,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);

      }

      .input-group-addon {
        background-color: transparent;
        height: 12px;
        border-left: 0;
      }

      .one-card > div {
        height: 150px;
        background-position: center center;
        background-repeat: no-repeat;
      }


    </style>

  </head>

  <body>

  <div class="row">
    <div class="col-md-6 col-md-offset-3">
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
      <!-- link to designify.me code snippets
      <div class="dme_link">
        <p><a href="http://designify.me/code-snippets-js/" target="_blank">More Code Snippets</a></p> -->
      </div>
      <!-- /.link to designify.me code snippets -->
    </div>
  </div>
  <!-- /.MultiStep Form -->



<!--  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->


  <!-- jQuery -->
  <script src="http://thecodeplayer.com/uploads/js/jquery-1.9.1.min.js" type="text/javascript"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>-->
  <!-- Latest compiled and minified JavaScript
   <!-- jQuery easing plugin -->

  <script src="/js/customerbookingform/moment.min.js"></script>

  <script src="/js/customerbookingform/bootstrap-datetimepicker.min.js"></script>

  <script src="/js/customerbookingform/jquery.validate.min.js"></script>
  <script src="/js/customerbookingform/jquery.payment.min.js"></script>

  <!-- If you're using Stripe for payments -->
  <script type="text/javascript" src="https://js.stripe.com/v3/"></script>


  <script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>




  <script>

      $('#example').datetimepicker();

      $('#example1').datetimepicker();

  </script>

<script>


    $(document).ready(function() {
        //jQuery time
        var current_fs, next_fs, previous_fs; //fieldsets
        var left, opacity, scale; //fieldset properties which we will animate
        var animating; //flag to prevent quick multi-click glitches

        $(".next").click(function () {
            if (animating) return false;
            animating = true;

            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

            //activate next step on progressbar using the index of next_fs
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({opacity: 0}, {
                step: function (now, mx) {
                    //as the opacity of current_fs reduces to 0 - stored in "now"
                    //1. scale current_fs down to 80%
                    scale = 1 - (1 - now) * 0.2;
                    //2. bring next_fs from the right(50%)
                    left = (now * 50) + "%";
                    //3. increase opacity of next_fs to 1 as it moves in
                    opacity = 1 - now;
                    current_fs.css({
                        'transform': 'scale(' + scale + ')',
                        'position': 'absolute'
                    });
                    next_fs.css({'left': left, 'opacity': opacity});
                },
                duration: 800,
                complete: function () {
                    current_fs.hide();
                    animating = false;
                },
                //this comes from the custom easing plugin
                easing: 'easeInOutBack'
            });
        });

        $(".previous").click(function () {
            if (animating) return false;
            animating = true;

            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

            //de-activate current step on progressbar
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

            //show the previous fieldset
            previous_fs.show();
            //hide the current fieldset with style
            current_fs.animate({opacity: 0}, {
                step: function (now, mx) {
                    //as the opacity of current_fs reduces to 0 - stored in "now"
                    //1. scale previous_fs from 80% to 100%
                    scale = 0.8 + (1 - now) * 0.2;
                    //2. take current_fs to the right(50%) - from 0%
                    left = ((1 - now) * 50) + "%";
                    //3. increase opacity of previous_fs to 1 as it moves in
                    opacity = 1 - now;
                    current_fs.css({'left': left});
                    previous_fs.css({'transform': 'scale(' + scale + ')', 'opacity': opacity});
                },
                duration: 800,
                complete: function () {
                    current_fs.hide();
                    animating = false;
                },
                //this comes from the custom easing plugin
                easing: 'easeInOutBack'
            });
        });

        $(".submit").click(function () {
            return false;
        })

    });


</script>


  <script>

      $(function () {
          $('[data-toggle="popover"]').popover()
      })

  </script>




  <script>



    /*
     The MIT License (MIT)

     Copyright (c) 2015 William Hilton

     Permission is hereby granted, free of charge, to any person obtaining a copy
     of this software and associated documentation files (the "Software"), to deal
     in the Software without restriction, including without limitation the rights
     to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
     copies of the Software, and to permit persons to whom the Software is
     furnished to do so, subject to the following conditions:

     The above copyright notice and this permission notice shall be included in
     all copies or substantial portions of the Software.

     THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
     IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
     FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
     AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
     LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
     OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
     THE SOFTWARE.
     */
    var $form = $('#payment-form');
    $form.find('.subscribe').on('click', payWithStripe);

    /* If you're using Stripe for payments */
    function payWithStripe(e) {
        e.preventDefault();

      /* Abort if invalid form data */
        if (!validator.form()) {
            return;
        }

      /* Visual feedback */
        $form.find('.subscribe').html('Validating <i class="fa fa-spinner fa-pulse"></i>').prop('disabled', true);

        var PublishableKey = 'pk_test_6pRNASCoBOKtIshFeQd4XMUh'; // Replace with your API publishable key
        Stripe.setPublishableKey(PublishableKey);

      /* Create token */
        var expiry = $form.find('[name=cardExpiry]').payment('cardExpiryVal');
        var ccData = {
            number: $form.find('[name=cardNumber]').val().replace(/\s/g,''),
            cvc: $form.find('[name=cardCVC]').val(),
            exp_month: expiry.month,
            exp_year: expiry.year
        };

        Stripe.card.createToken(ccData, function stripeResponseHandler(status, response) {
            if (response.error) {
              /* Visual feedback */
                $form.find('.subscribe').html('Try again').prop('disabled', false);
              /* Show Stripe errors on the form */
                $form.find('.payment-errors').text(response.error.message);
                $form.find('.payment-errors').closest('.row').show();
            } else {
              /* Visual feedback */
                $form.find('.subscribe').html('Processing <i class="fa fa-spinner fa-pulse"></i>');
              /* Hide Stripe errors on the form */
                $form.find('.payment-errors').closest('.row').hide();
                $form.find('.payment-errors').text("");
                // response contains id and card, which contains additional card details
                console.log(response.id);
                console.log(response.card);
                var token = response.id;
                // AJAX - you would send 'token' to your server here.
                $.post('/account/stripe_card_token', {
                    token: token
                })
                // Assign handlers immediately after making the request,
                    .done(function(data, textStatus, jqXHR) {
                        $form.find('.subscribe').html('Payment successful <i class="fa fa-check"></i>');
                    })
                    .fail(function(jqXHR, textStatus, errorThrown) {
                        $form.find('.subscribe').html('There was a problem').removeClass('success').addClass('error');
                      /* Show Stripe errors on the form */
                        $form.find('.payment-errors').text('Try refreshing the page and trying again.');
                        $form.find('.payment-errors').closest('.row').show();
                    });
            }
        });
    }
    /* Fancy restrictive input formatting via jQuery.payment library*/
    $('input[name=cardNumber]').payment('formatCardNumber');
    $('input[name=cardCVC]').payment('formatCardCVC');
    $('input[name=cardExpiry').payment('formatCardExpiry');

    /* Form validation using Stripe client-side validation helpers */
    jQuery.validator.addMethod("cardNumber", function(value, element) {
        return this.optional(element) || Stripe.card.validateCardNumber(value);
    }, "Please specify a valid credit card number.");

    jQuery.validator.addMethod("cardExpiry", function(value, element) {
      /* Parsing month/year uses jQuery.payment library */
        value = $.payment.cardExpiryVal(value);
        return this.optional(element) || Stripe.card.validateExpiry(value.month, value.year);
    }, "Invalid expiration date.");

    jQuery.validator.addMethod("cardCVC", function(value, element) {
        return this.optional(element) || Stripe.card.validateCVC(value);
    }, "Invalid CVC.");

    validator = $form.validate({
        rules: {
            cardNumber: {
                required: true,
                cardNumber: true
            },
            cardExpiry: {
                required: true,
                cardExpiry: true
            },
            cardCVC: {
                required: true,
                cardCVC: true
            }
        },
        highlight: function(element) {
            $(element).closest('.form-control').removeClass('success').addClass('error');
        },
        unhighlight: function(element) {
            $(element).closest('.form-control').removeClass('error').addClass('success');
        },
        errorPlacement: function(error, element) {
            $(element).closest('.form-group').append(error);
        }
    });

    paymentFormReady = function() {
        if ($form.find('[name=cardNumber]').hasClass("success") &&
            $form.find('[name=cardExpiry]').hasClass("success") &&
            $form.find('[name=cardCVC]').val().length > 1) {
            return true;
        } else {
            return false;
        }
    }

    $form.find('.subscribe').prop('disabled', true);
    var readyInterval = setInterval(function() {
        if (paymentFormReady()) {
            $form.find('.subscribe').prop('disabled', false);
            clearInterval(readyInterval);
        }
    }, 250);


  </script>


  </body>
<html>