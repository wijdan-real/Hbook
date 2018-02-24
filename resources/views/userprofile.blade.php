<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
@if(Auth::check())
    <title> {{auth()->user()->name}}</title>

@endif
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--<link href="mdbootstrap/bootstrap.min.css" rel="stylesheet" /> -->

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">




    <link href="bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="modalform.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>

    <link rel="stylesheet" href="star-rating/star-rating.css" media="all" type="text/css"/>
    <link rel="stylesheet" href="krajee-svg/theme.css" media="all" type="text/css"/>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />

    <link href="insideElementDemo.css" rel="stylesheet" type="text/css">


    <style>


        body{
            font-family: Lato;
            background: white;
            overflow-x: hidden;
            overflow-y: scroll;
        }




        /*  bhoechie tab */
        div.bhoechie-tab-container{
            z-index: 10;
            background-color: #ffffff;
            padding: 0 !important;
            border-radius: 3px;
            -moz-border-radius: 4px;
            border:1px solid transparent;
            margin-top: 20px;
            margin-left: 0px;
            /*-webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
            box-shadow: 0 6px 12px rgba(0,0,0,.175);
            -moz-box-shadow: 0 6px 12px rgba(0,0,0,.175);
            background-clip: padding-box;
            opacity: 0.97;
            filter: alpha(opacity=97); */
            width: 800px;
            height: 350px;
            overflow-y:scroll;
            overflow-x: hidden;

        }
        div.bhoechie-tab-menu{
            padding-right: 0;
            padding-left: 0;
            padding-bottom: 0;
            text-align: center;

        }
        div.bhoechie-tab-menu div.list-group{
            margin-bottom: 0;
            padding-left: 15px;
        }
        div.bhoechie-tab-menu div.list-group>a{
            margin-bottom: 0;
        }
        div.bhoechie-tab-menu div.list-group>a .glyphicon,
        div.bhoechie-tab-menu div.list-group>a .fa {
            color: #5A55A3;
        }
        div.bhoechie-tab-menu div.list-group>a:first-child{
            border-top-right-radius: 0;
            -moz-border-top-right-radius: 0;
        }
        div.bhoechie-tab-menu div.list-group>a:last-child{
            border-bottom-right-radius: 0;
            -moz-border-bottom-right-radius: 0;
        }
        div.bhoechie-tab-menu div.list-group>a.active,
        div.bhoechie-tab-menu div.list-group>a.active .glyphicon,
        div.bhoechie-tab-menu div.list-group>a.active .fa{
            background-color: #5A55A3;
            background-image: #5A55A3;
            color: #ffffff;
        }
        div.bhoechie-tab-menu div.list-group>a.active:after{
            content: '';
            position: absolute;
            left: 100%;
            top: 50%;
            margin-top: -13px;
            border-left: 0;
            border-bottom: 13px solid transparent;
            border-top: 13px solid transparent;
            border-left: 10px solid #5A55A3;
        }

        div.bhoechie-tab-content{
            background-color: #ffffff;
            /* border: 1px solid #eeeeee; */
            padding-left: 85px;
            padding-top: 20px;
            padding-bottom: 20px;
            width: 670px;
            text-align: center;
            vertical-align: middle;
            horizontal-align:middle;

        }

        div.bhoechie-tab div.bhoechie-tab-content:not(.active){
            display: none;
            overflow-y:scroll;
            overflow-x: hidden;
            width:100%;

        }




        .list-group-horizontal .list-group-item {
            display: inline-block;
        }
        .list-group-horizontal .list-group-item {
            margin-bottom: 0;
            margin-left:-4px;
            margin-right: 0;
        }
        .list-group-horizontal .list-group-item:first-child {
            border-top-right-radius:0;
            border-bottom-left-radius:4px;
        }
        .list-group-horizontal .list-group-item:last-child {
            border-top-right-radius:4px;
            border-bottom-left-radius:0;
        }


        .image-preview-input {
            position: relative;
            overflow: hidden;
            margin: 0px;
            color: #333;
            background-color: #fff;
            border-color: #ccc;
        }
        .image-preview-input input[type=file] {
            position: absolute;
            top: 0;
            right: 0;
            margin: 0;
            padding: 0;
            font-size: 20px;
            cursor: pointer;
            opacity: 0;
            filter: alpha(opacity=0);
        }
        .image-preview-input-title {
            margin-left:2px;
        }


        #storyimages{
            overflow-y:scroll;
            overflow-x: hidden;
            width:100%;
        }

        .exte{
            overflow-y:scroll;
            overflow-x: hidden;
            width:100%;
        }



        #storytitle{}



        #storydesc{
            overflow-y:scroll;
            overflow-x: hidden;
            width:100%;
        }


        .navbar{
            width: 100%;
        }



        #userbio{
            left:10%;
            top:20%;
           /* width:500px;
            height:500px; */
        }



        .userbio{

            margin-bottom: 15px;
            width:570px;
        height:130px;}


        .userbiobtn{
            width:50px;
            height:30px;
            padding:5px;
            position:relative;
            background:transparent;
            border:none;
            border:hidden;
            outline-border:none;
        }


        .userbiobtn:hover,.userbiobtn:active {
            cursor: pointer;
            border:none;
            outline:none;
        }


        .profilepic {
           /* max-width: 360px; */
            margin: 10px auto;
            margin-left:0px;
            padding-left:50px;
            border-raduis:3%;
            width: 360px;

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
            right: 75px;
            z-index: 1;
            top: 40px;
        }
        .avatar-upload .avatar-edit input
        {
            display: none;

        }
        .avatar-upload .avatar-edit input + label
        {
            top: 87px;
            /*display: inline-block; */
            width: 170px;
            height: 40px;
            padding-left: 0px;
            padding-right:40px;
            position: absolute;
            left:5px;
            right:0;
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
            content: "\f040";
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
            width: 180px;
            height: 170px;
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

<nav class="navbar navbar-inverse container" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/homepage">HBook</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    @if(Auth::check())
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                            <li><a href="/user/info">Settings</a></li>
                        </ul>
                    </li>
                        @endif
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>


<hr class="">
<div class="container target">
    <div class="row">
        <div class="col-sm-5">
{{--}}
            <img src="/uploads/avatars/{{auth()->user()->avatar}}" style="width: 150px; height: 150px; float: left; border-radius:50%; margin-right: 10px">

            <form enctype="multipart/form-data" method="post" action="/userprofile">
                {{csrf_field()}}
                <label>Upload Your Profile Image</label>
                <input type="file " name="avatar">
                <input type="submit" class=" btn btn-sm btn-primary" >
            </form>

{{--}}
            <h2 class=""> {{auth()->user()->name}}</h2>
            <br>
        </div>
        <div class="col-sm-offset-5 col-sm-2">
           <!-- <a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="http://www.rlsandbox.com/img/profile.jpg"></a>-->

           <!-- <a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="http://www.rlsandbox.com/img/profile.jpg"></a>-->

                <div class="profilepic">

                    <div style="text-align: center;">
                        <div class="avatar-upload">
                            <div class="avatar-edit">
                                <img src="/uploads/avatars/{{auth()->user()->avatar}}" style="width: 150px; height: 150px; float: left; border-radius:50%; margin-right: 10px">

                                <form>
                                <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                <label for="imageUpload"></label>
                                </form>
                            </div>

                        </div>
                    </div>

                </div>




        </div>
    </div>
    <br>
    <div class="row">
        <div  class="col-sm-3">
            <!--left col-->
            <ul class="list-group">
                <li class="list-group-item text-muted" contenteditable="false">Profile</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Joined</strong></span> {{auth()->user()->created_at->diffForHumans()}}</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Last seen</strong></span> Yesterday</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Real name</strong></span>
                   {{auth()->user()->name.' '.auth()->user()->lastname}}
                    </li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Role: </strong></span> Pet Sitter

                </li>
            </ul>
            <div class="panel panel-default">
                <div class="panel-heading">Insured / Bonded?

                </div>
                <div class="panel-body"><i style="color:green" class="fa fa-check-square"></i> Yes, I am insured and bonded.

                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Website <i class="fa fa-link fa-1x"></i>

                </div>
                <div class="panel-body"><a href="http://bootply.com" class="">bootply.com</a>

                </div>
            </div>

            <ul class="list-group">
                <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i>

                </li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Shares</strong></span> 125</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Likes</strong></span> 13</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Posts</strong></span> 37</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Followers</strong></span> 78</li>
            </ul>
            <div class="panel panel-default">
                <div class="panel-heading">Social Media</div>
                <div class="panel-body">	<i class="fa fa-facebook fa-2x"></i>  <i class="fa fa-github fa-2x"></i>
                    <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i>  <i class="fa fa-google-plus fa-2x"></i>

                </div>
            </div>
        </div>
        <!--/col-3-->
        <div class="col-sm-9" contenteditable="false" style="">
            <div class="panel panel-default">
                <div class="panel-heading">{{auth()->user()->name}}bio <span style="float: right; margin-bottom:20px;"><button style=""  class="
                userbiobtn" data-toggle="modal" data-target="#userbio">
                            <i style="color: black;" class="fa fa-edit"></i></button></span></div>
                <div class="panel-body">
                    {{\Illuminate\Support\Facades\Auth::user()->userprofile->userbio}}
                </div>
            </div>
            <div class="panel panel-default target">
                <div class="panel-heading" contenteditable="false">My Stories - manage your stories here</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="thumbnail">
                                <img alt="300x200" src="http://lorempixel.com/600/200/people">
                                <div class="caption">
                                    <h3>
                                        Rover
                                    </h3>
                                    <p>
                                        Cocker Spaniel who loves treats.
                                    </p>
                                    <p>
                                        <button type="button" class="btn btn-info btn-md">
                                            <span class="glyphicon glyphicon-edit"></span>edit
                                        </button>

                                        <button type="button" class="btn btn-danger btn-md">
                                            <span class="glyphicon glyphicon-remove"></span>delete
                                        </button>

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="thumbnail">
                                <img alt="300x200" src="http://lorempixel.com/600/200/city">
                                <div class="caption">
                                    <h3>
                                        Marmaduke
                                    </h3>
                                    <p>
                                        Is just another friendly dog.
                                    </p>
                                    <p>
                                        <button type="button" class="btn btn-info btn-md">
                                            <span class="glyphicon glyphicon-edit"></span>edit
                                        </button>

                                        <button type="button" class="btn btn-danger btn-md">
                                            <span class="glyphicon glyphicon-remove"></span>delete
                                        </button>

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="thumbnail">
                                <img alt="300x200" src="http://lorempixel.com/600/200/sports">
                                <div class="caption">
                                    <h3>
                                        Rocky
                                    </h3>
                                    <p>
                                        Loves catnip and naps. Not fond of children.
                                    </p>
                                    <p>
                                        <button type="button" class="btn btn-info btn-md">
                                            <span class="glyphicon glyphicon-edit"></span>edit
                                        </button>

                                        <button type="button" class="btn btn-danger btn-md">
                                            <span class="glyphicon glyphicon-remove"></span>delete
                                        </button>

                                    </p>
                                </div>
                            </div>

                        </div>

                        <br>
                        <br>

                        <ul style="text-align: center; padding-left: 310px;" class="pagination">
                            <li><a href="#">«</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">»</a></li>
                        </ul>

                    </div>

                </div>

            </div>


            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-pen"></span> Create Your Story</div>
                <div class="panel-body">


            <div class="row">
                <div class="col-sm-8 text-center bhoechie-tab-container">


                    <div class="list-group list-group-horizontal bhoechie-tab-menu">
                        <a href="#" class="list-group-item active text-center">
                            <h4 class="glyphicon glyphicon-plane"></h4><br/>Story Title and Cover
                        </a>
                       <!-- <a href="#" class="list-group-item text-center">
                            <h4 class="glyphicon glyphicon-road"></h4><br/>Cover Image
                        </a>  -->
                        <a href="#" class="list-group-item text-center">
                            <h4 class="glyphicon glyphicon-home"></h4><br/>Story Description
                        </a>
                        <a href="#" class="list-group-item text-center">
                            <h4 class="glyphicon glyphicon-cutlery"></h4><br/>Story Images
                        </a>
                        <!--<a href="#" class="list-group-item text-center">
                            <h4 class="glyphicon glyphicon-credit-card"></h4><br/>Credit Card
                        </a> -->
                    </div>

                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 bhoechie-tab">
                        <!-- flight section -->
                        <div class="bhoechie-tab-content active">
                            <center>



                                    <div class="col-lg-12">

                                        <label for="storytitle">Story Title</label>
                                        <input type="text" class="form-control" id="storytitle" placeholder="Enter the title for your story" name="storytitle">

                                    </div>

                                    <div class=" col-lg-12">
                                        <label for="storycover">Story Cover Image</label>
                                        <div class="input-group image-preview">
                                            <input type="text" class="form-control image-preview-filename" id="storycover" disabled="disabled" placeholder="Enter Your Story's Cover Image"> <!-- don't give a name === doesn't send on POST/GET -->
                                            <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Clear
                    </button>
                                                <!-- image-preview-input -->
                    <div class="btn btn-primary image-preview-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="image-preview-input-title">Browse</span>
                        <input type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview"/> <!-- rename it -->
                    </div>
                </span>
                                        </div><!-- /input-group image-preview [TO HERE]-->

                                    </div>





                            </center>
                        </div>
                        <!-- train section -->
                        <div class="bhoechie-tab-content">
                            <center>

                                <div class="form-group">

                                    <div class="col-lg-12">

                                        <label for="storydesc">Story Description</label>
                                        <textarea  class="form-control" id="storydesc" rows="10" placeholder="Write your trip story here"></textarea>

                                    </div>

                                </div>

                                <button style="float: right" class="btn btn-lg btn-primary ">Create Story</button>


                            </center>
                        </div>

                        <!-- hotel search -->
                        <div class="bhoechie-tab-content">
                            <center>

                                <label for="storyimages">Story Images</label>

                                <div class="file-loading">
                                    <input id="input-44" name="input44[]" type="file" multiple>
                                </div>
                            </center>
                        </div>
                        <div class="bhoechie-tab-content">
                            <center>

                            </center>
                        </div>
                        <div class="bhoechie-tab-content">
                            <center>



                            </center>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            </div>




            <!-- Modal For User Bio -->
            <div class="modal fade" id="userbio" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <!--  <div style="border-top:none;" class="modal-header">
                           <!-- <button type="button" class="close" data-dismiss="modal">&times;</button>

                        </div> -->
                        <div style="border-top: none;" class="modal-body">

                            <h4 style="border-top:none;" class="modal-title">Edit Your Status</h4>
                            <br>

                            <form method="post">

                                    <textarea class="userbio" type="text" required></textarea>


                            </form>

                           <div style="display:inline; float: right; padding-right: 0px;">
                               <button type="button" class="btn btn-primary">Save</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                           </div>
                        </div>
                        <div style="border-top:none;" class="modal-footer">

                        </div>
                    </div>

                </div>
            </div>

        </div>

        <!-- Modal For User bio ends here -->




    <script src="/plugins/bootstrap-select.min.js"></script>
    <script src="/codemirror/jquery.codemirror.js"></script>
    <script src="/beautifier.js"></script>

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


        $(document).on('click', '#close-preview', function(){
            $('.image-preview').popover('hide');
            // Hover befor close the preview
            $('.image-preview').hover(
                function () {
                    $('.image-preview').popover('show');
                },
                function () {
                    $('.image-preview').popover('hide');
                }
            );
        });



        $(function() {
            // Create the close button
            var closebtn = $('<button/>', {
                type:"button",
                text: 'x',
                id: 'close-preview',
                style: 'font-size: initial;',
            });
            closebtn.attr("class","close pull-right");
            // Set the popover default content
            $('.image-preview').popover({
                trigger:'manual',
                html:true,
                title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
                content: "There's no image",
                placement:'bottom'
            });
            // Clear event
            $('.image-preview-clear').click(function(){
                $('.image-preview').attr("data-content","").popover('hide');
                $('.image-preview-filename').val("");
                $('.image-preview-clear').hide();
                $('.image-preview-input input:file').val("");
                $(".image-preview-input-title").text("Browse");
            });
            // Create the preview image
            $(".image-preview-input input:file").change(function (){
                var img = $('<img/>', {
                    id: 'dynamic',
                    width:250,
                    height:200
                });
                var file = this.files[0];
                var reader = new FileReader();
                // Set preview image into the popover data-content
                reader.onload = function (e) {
                    $(".image-preview-input-title").text("Change");
                    $(".image-preview-clear").show();
                    $(".image-preview-filename").val(file.name);
                    img.attr('src', e.target.result);
                    $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
                }
                reader.readAsDataURL(file);
            });
        });


    </script>





    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-40413119-1', 'bootply.com');
        ga('send', 'pageview');
    </script>
    <script>
        jQuery.fn.shake = function(intShakes, intDistance, intDuration, foreColor) {
            this.each(function() {
                if (foreColor && foreColor!="null") {
                    $(this).css("color",foreColor);
                }
                $(this).css("position","relative");
                for (var x=1; x<=intShakes; x++) {
                    $(this).animate({left:(intDistance*-1)}, (((intDuration/intShakes)/4)))
                        .animate({left:intDistance}, ((intDuration/intShakes)/2))
                        .animate({left:0}, (((intDuration/intShakes)/4)));
                    $(this).css("color","");
                }
            });
            return this;
        };
    </script>
    <script>
        $(document).ready(function() {

            $('.tw-btn').fadeIn(3000);
            $('.alert').delay(5000).fadeOut(1500);

            $('#btnLogin').click(function(){
                $(this).text("...");
                $.ajax({
                    url: "/loginajax",
                    type: "post",
                    data: $('#formLogin').serialize(),
                    success: function (data) {
                        //console.log('data:'+data);
                        if (data.status==1&&data.user) { //logged in
                            $('#menuLogin').hide();
                            $('#lblUsername').text(data.user.username);
                            $('#menuUser').show();
                            /*
                            $('#completeLoginModal').modal('show');
                            $('#btnYes').click(function() {
                                window.location.href="/";
                            });
                            */
                        }
                        else {
                            $('#btnLogin').text("Login");
                            prependAlert("#spacer",data.error);
                            $('#btnLogin').shake(4,6,700,'#CC2222');
                            $('#username').focus();
                        }
                    },
                    error: function (e) {
                        $('#btnLogin').text("Login");
                        console.log('error:'+JSON.stringify(e));
                    }
                });
            });
            $('#btnRegister').click(function(){
                $(this).text("Wait..");
                $.ajax({
                    url: "/signup?format=json",
                    type: "post",
                    data: $('#formRegister').serialize(),
                    success: function (data) {
                        console.log('data:'+JSON.stringify(data));
                        if (data.status==1) {
                            $('#btnRegister').attr("disabled","disabled");
                            $('#formRegister').text('Thanks. You can now login using the Login form.');
                        }
                        else {
                            prependAlert("#spacer",data.error);
                            $('#btnRegister').shake(4,6,700,'#CC2222');
                            $('#btnRegister').text("Sign Up");
                            $('#inputEmail').focus();
                        }
                    },
                    error: function (e) {
                        $('#btnRegister').text("Sign Up");
                        console.log('error:'+e);
                    }
                });
            });

            $('.loginFirst').click(function(){
                $('#navLogin').trigger('click');
                return false;
            });

            $('#btnForgotPassword').on('click',function(){
                $.ajax({
                    url: "/resetPassword",
                    type: "post",
                    data: $('#formForgotPassword').serializeObject(),
                    success: function (data) {
                        if (data.status==1){
                            prependAlert("#spacer",data.msg);
                            return true;
                        }
                        else {
                            prependAlert("#spacer","Your password could not be reset.");
                            return false;
                        }
                    },
                    error: function (e) {
                        console.log('error:'+e);
                    }
                });
            });

            $('#btnContact').click(function(){

                $.ajax({
                    url: "/contact",
                    type: "post",
                    data: $('#formContact').serializeObject(),
                    success: function (data) {
                        if (data.status==1){
                            prependAlert("#spacer","Thanks. We got your message and will get back to you shortly.");
                            $('#contactModal').modal('hide');
                            return true;
                        }
                        else {
                            prependAlert("#spacer",data.error);
                            return false;
                        }
                    },
                    error: function (e) {
                        console.log('error:'+e);
                    }
                });
                return false;
            });

            /*
            $('.nav .dropdown-menu input').on('click touchstart',function(e) {
                e.stopPropagation();
            });
            */





        });
        $.fn.serializeObject = function()
        {
            var o = {};
            var a = this.serializeArray();
            $.each(a, function() {
                if (o[this.name] !== undefined) {
                    if (!o[this.name].push) {
                        o[this.name] = [o[this.name]];
                    }
                    o[this.name].push(this.value || '');
                } else {
                    o[this.name] = this.value || '';
                }
            });
            return o;
        };
        var prependAlert = function(appendSelector,msg){
            $(appendSelector).after('<div class="alert alert-info alert-block affix" id="msgBox" style="z-index:1300;margin:14px!important;">'+msg+'</div>');
            $('.alert').delay(3500).fadeOut(1000);
        }
    </script>
    <!-- Quantcast Tag -->
    <script type="text/javascript">
        var _qevents = _qevents || [];

        (function() {
            var elem = document.createElement('script');
            elem.src = (document.location.protocol == "https:" ? "https://secure" : "http://edge") + ".quantserve.com/quant.js";
            elem.async = true;
            elem.type = "text/javascript";
            var scpt = document.getElementsByTagName('script')[0];
            scpt.parentNode.insertBefore(elem, scpt);
        })();

        _qevents.push({
            qacct:"p-0cXb7ATGU9nz5"
        });
    </script>
    <noscript>
        &amp;amp;amp;amp;amp;amp;amp;lt;div style="display:none;"&amp;amp;amp;amp;amp;amp;amp;gt;
        &amp;amp;amp;amp;amp;amp;amp;lt;img src="//pixel.quantserve.com/pixel/p-0cXb7ATGU9nz5.gif" border="0" height="1" width="1" alt="Quantcast"/&amp;amp;amp;amp;amp;amp;amp;gt;
        &amp;amp;amp;amp;amp;amp;amp;lt;/div&amp;amp;amp;amp;amp;amp;amp;gt;
    </noscript>
    <!-- End Quantcast tag -->
    <div id="completeLoginModal" class="modal hide">
        <div class="modal-header">
            <a href="#" data-dismiss="modal" aria-hidden="true" class="close">×</a>
            <h3>Do you want to proceed?</h3>
        </div>
        <div class="modal-body">
            <p>This page must be refreshed to complete your login.</p>
            <p>You will lose any unsaved work once the page is refreshed.</p>
            <br><br>
            <p>Click "No" to cancel the login process.</p>
            <p>Click "Yes" to continue...</p>
        </div>
        <div class="modal-footer">
            <a href="#" id="btnYes" class="btn danger">Yes, complete login</a>
            <a href="#" data-dismiss="modal" aria-hidden="true" class="btn secondary">No</a>
        </div>
    </div>
    <div id="forgotPasswordModal" class="modal hide">
        <div class="modal-header">
            <a href="#" data-dismiss="modal" aria-hidden="true" class="close">×</a>
            <h3>Password Lookup</h3>
        </div>
        <div class="modal-body">
            <form class="form form-horizontal" id="formForgotPassword">
                <div class="control-group">
                    <label class="control-label" for="inputEmail">Email</label>
                    <div class="controls">
                        <input name="_csrf" id="token" type="hidden" value="CkMEALL0JBMf5KSrOvu9izzMXCXtFQ/Hs6QUY=">
                        <input type="email" name="email" id="inputEmail" placeholder="you@youremail.com" required="">
                        <span class="help-block"><small>Enter the email address you used to sign-up.</small></span>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer pull-center">
            <a href="#" data-dismiss="modal" aria-hidden="true" class="btn">Cancel</a>
            <a href="#" data-dismiss="modal" id="btnForgotPassword" class="btn btn-success">Reset Password</a>
        </div>

    </div>
    <div id="upgradeModal" class="modal hide">
        <div class="modal-header">
            <a href="#" data-dismiss="modal" aria-hidden="true" class="close">×</a>
            <h4>Would you like to upgrade?</h4>
        </div>
        <div class="modal-body">
            <p class="text-center"><strong></strong></p>
            <h1 class="text-center">$4<small>/mo</small></h1>
            <p class="text-center"><small>Unlimited plys. Unlimited downloads. No Ads.</small></p>
            <p class="text-center"><img src="/assets/i_visa.png" width="50" alt="visa"> <img src="/assets/i_mc.png" width="50" alt="mastercard"> <img src="/assets/i_amex.png" width="50" alt="amex"> <img src="/assets/i_discover.png" width="50" alt="discover"> <img src="/assets/i_paypal.png" width="50" alt="paypal"></p>
        </div>
        <div class="modal-footer pull-center">
            <a href="/upgrade" class="btn btn-block btn-huge btn-success"><strong>Upgrade Now</strong></a>
            <a href="#" data-dismiss="modal" class="btn btn-block btn-huge">No Thanks, Maybe Later</a>
        </div>
    </div>
    <div id="contactModal" class="modal hide">
        <div class="modal-header">
            <a href="#" data-dismiss="modal" aria-hidden="true" class="close">×</a>
            <h3>Contact Us</h3>
            <p>suggestions, questions or feedback</p>
        </div>
        <div class="modal-body">
            <form class="form form-horizontal" id="formContact">
                <input name="_csrf" id="token" type="hidden" value="CkMEALL0JBMf5KSrOvu9izzMXCXtFQ/Hs6QUY=">
                <div class="control-group">
                    <label class="control-label" for="inputSender">Name</label>
                    <div class="controls">
                        <input type="text" name="sender" id="inputSender" class="input-large" placeholder="Your name">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputMessage">Message</label>
                    <div class="controls">
                        <textarea name="notes" rows="5" id="inputMessage" class="input-large" placeholder="Type your message here"></textarea>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputEmail">Email</label>
                    <div class="controls">
                        <input type="text" name="email" id="inputEmail" class="input-large" placeholder="you@youremail.com (for reply)" required="">
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer pull-center">
            <a href="#" data-dismiss="modal" aria-hidden="true" class="btn">Cancel</a>
            <a href="#" data-dismiss="modal" aria-hidden="true" id="btnContact" role="button" class="btn btn-success">Send</a>
        </div>
    </div>




    <script src="/plugins/bootstrap-pager.js"></script>
</div>



<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://thecodeplayer.com/uploads/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>-->

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>


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


<script>
    $(document).ready(function() {
        $("#input-44").fileinput({
            uploadUrl: '/file-upload-batch/2',
            maxFilePreviewSize: 10240
        });
    });
</script>




<script>

    $(document).ready(function() {
        window.alert('this is shit');

        $("div.list-group>a").click(function(e) {
            e.preventDefault();
            $(this).siblings('a.active').removeClass("active");
            $(this).addClass("active");
            var index = $(this).index();
            $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
            $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
        });
    });


</script>



<script>

    /* pagination */
    $.fn.pageMe = function(opts){
        var $this = this,
            defaults = {
                perPage: 7,
                showPrevNext: false,
                numbersPerPage: 1,
                hidePageNumbers: false
            },
            settings = $.extend(defaults, opts);

        var listElement = $this;
        var perPage = settings.perPage;
        var children = listElement.children();
        var pager = $('.pagination');

        if (typeof settings.childSelector!="undefined") {
            children = listElement.find(settings.childSelector);
        }

        if (typeof settings.pagerSelector!="undefined") {
            pager = $(settings.pagerSelector);
        }

        var numItems = children.size();
        var numPages = Math.ceil(numItems/perPage);

        pager.data("curr",0);

        if (settings.showPrevNext){
            $('<li><a href="#" class="prev_link">«</a></li>').appendTo(pager);
        }

        var curr = 0;
        while(numPages > curr && (settings.hidePageNumbers==false)){
            $('<li><a href="#" class="page_link">'+(curr+1)+'</a></li>').appendTo(pager);
            curr++;
        }

        if (settings.numbersPerPage>1) {
            $('.page_link').hide();
            $('.page_link').slice(pager.data("curr"), settings.numbersPerPage).show();
        }

        if (settings.showPrevNext){
            $('<li><a href="#" class="next_link">»</a></li>').appendTo(pager);
        }

        pager.find('.page_link:first').addClass('active');
        if (numPages<=1) {
            pager.find('.next_link').hide();
        }
        pager.children().eq(1).addClass("active");

        children.hide();
        children.slice(0, perPage).show();

        pager.find('li .page_link').click(function(){
            var clickedPage = $(this).html().valueOf()-1;
            goTo(clickedPage,perPage);
            return false;
        });
        pager.find('li .prev_link').click(function(){
            previous();
            return false;
        });
        pager.find('li .next_link').click(function(){
            next();
            return false;
        });

        function previous(){
            var goToPage = parseInt(pager.data("curr")) - 1;
            goTo(goToPage);
        }

        function next(){
            goToPage = parseInt(pager.data("curr")) + 1;
            goTo(goToPage);
        }

        function goTo(page){
            var startAt = page * perPage,
                endOn = startAt + perPage;

            children.css('display','none').slice(startAt, endOn).show();

            if (page>=1) {
                pager.find('.prev_link').show();
            }
            else {
                pager.find('.prev_link').hide();
            }

            if (page<(numPages-1)) {
                pager.find('.next_link').show();
            }
            else {
                pager.find('.next_link').hide();
            }

            pager.data("curr",page);

            if (settings.numbersPerPage>1) {
                $('.page_link').hide();
                $('.page_link').slice(page, settings.numbersPerPage+page).show();
            }

            pager.children().removeClass("active");
            pager.children().eq(page+1).addClass("active");
        }
    };

    $('#items').pageMe({pagerSelector:'#myPager',childSelector:'tr',showPrevNext:true,hidePageNumbers:false,perPage:5});
    /****/

</script>

</body>


</html>