<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HBook</title>

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
    <link href="/css/userinfo/datepicker.css" rel="stylesheet" type="text/css">

<style>


</style>

</head>

<body>


<div class="container">
    <h1>Edit Profile</h1>
    <hr>
    <div class="row">
        <!-- left column
        <div class="col-md-3">
            <div class="text-center">
                <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
                <h6>Upload a different photo...</h6>

                <input type="file" class="form-control">
            </div>
        </div> -->

        <!-- edit form column -->
        <div class="col-md-9 personal-info">
            <div class="alert alert-info alert-dismissable">
                <a class="panel-close close" data-dismiss="alert">×</a>
                <i class="fa fa-coffee"></i>
                This is an <strong>.alert</strong>. Use this to show important messages to the user.
            </div>
            <h3>Personal info</h3>

            <form enctype="multipart/form-data"  class="form-horizontal"  method="post" action="/userprofile">
                {{csrf_field()}}
                <div class="form-group">
                    <label class="col-lg-3 control-label">User Bio:</label>
                    <div class="col-lg-8">
                        <input class="form-control" name="userbio" type="textarea" placeholder="Write your status" value="{{$userInfo->userbio}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Interests:</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="textarea" name="interest" placeholder="Interests" value="{{$userInfo->interest}}" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Occupation:</label>
                    <div class="col-md-8">
                        <input class="form-control" type="text" name="occupation" placeholder="Occupation" value="{{$userInfo->occupation}}" required>
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-lg-3 control-label">D-0-B</label>
                    <div class="col-lg-8">
                      <!--  <input class="form-control" type="date" placeholder="" required>  -->
                        <input type="date" datepicker data-date-format="yyyy.mm" name="dob" value="{{$userInfo->dob}}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-3 control-label">City</label>
                    <div class="col-lg-8">
                        <input class="form-control" name="city" type="text" placeholder="City" value="{{$userInfo->city}}"  required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Phone Number</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="tel" name="phonenumber" placeholder="Tel Number" value="{{$userInfo->phonenumber}}"  required>
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-lg-3 control-label">Gender</label>
                    <div class="col-lg-8">
                    <label class="radio-inline">
                        <input type="radio" name="gender" checked="checked" value="male">Male
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="gender" value="female">Female
                    </label>
                   </div>
                    </div>





                <!--<div class="form-group">
                    <label class="col-lg-3 control-label">Time Zone:</label>
                    <div class="col-lg-8">
                        <div class="ui-select">
                            <select id="user_time_zone" class="form-control" placeholder="Time Zone" required>
                                <option value="Hawaii">(GMT-10:00) Hawaii</option>
                                <option value="Alaska">(GMT-09:00) Alaska</option>
                                <option value="Pacific Time (US &amp; Canada)">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                                <option value="Arizona">(GMT-07:00) Arizona</option>
                                <option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
                                <option value="Central Time (US &amp; Canada)" selected="selected">(GMT-06:00) Central Time (US &amp; Canada)</option>
                                <option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
                                <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Username:</label>
                    <div class="col-md-8">
                        <input class="form-control" type="text" placeholder="User Name"required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Date of Birth:</label>
                    <div class="col-md-8">
                        <input class="form-control" type="date" placeholder="Date of Birth" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Password:</label>
                    <div class="col-md-8">
                        <input class="form-control" type="password" placeholder="Password" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Confirm password:</label>
                    <div class="col-md-8">
                        <input class="form-control" type="password" placeholder="Confirm Password" required>
                    </div>
                </div> -->


                <div class="form-group">
                    <label class="col-md-3 control-label"></label>
                    <div class="col-md-8">
                        <input type="submit" class="btn btn-primary" value="Save Changes">
                        <span></span>
                        <input type="reset" class="btn btn-default" value="Edit">
                    </div>
                </div>
            </form>
            @include('layout.errors')
        </div>
    </div>
</div>
<hr>



<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://thecodeplayer.com/uploads/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>-->

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src="/js/userinfo/datepicker.js"></script>

<script>

    $("input").datepicker();

</script>


<script>

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

</script>

</body>

</html>