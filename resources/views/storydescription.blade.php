<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Post - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="/css/storydescription/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.css">

    <!-- Custom CSS -->
    <link href="/css/storydescription//blog-post.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


    <style>


        body{
            background-color: white;
            overflow-x: hidden; /*for hiding horizontal scroll bar*/
            overflow-y: auto; /*for vertical scroll bar*/
            font-family: 'Lato';

            /*  Other Fonts are lato, roboto , droid ,  poiret one..  */



        }

        .coverimg{

            height: 450px;
            width: 850px;
        }

       /* #userimg{

            border:1px solid black;
            width: 30px;
            height: 30px;

        } */

        .stimg1{

            text-align: center;
            height: 350px;
            width: 450px;

        }

        .stimg2{

            text-align: center;
            height: 350px;
            width: 420px;
        }

        .fblogo {
            display: inline;
            margin-left: auto;
            margin-right: auto;
            height: 350px;
            width: 400px;
        }

        #images{

        }

        .gallery{
            margin-top: 50px;
        }
        .gallery-item{
            margin-bottom: 30px;
        }
        .modal-footer{
            text-align: center;
        }
        .pagination{
            margin: 0;
        }


    </style>


</head>


<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">

                <!-- Blog Post -->

                <!-- Title -->
                <h1>Blog Post Title</h1>

                <!-- Author -->
                <p class="lead">
                    by <a href="#">Start Bootstrap</a>
                </p>

                <hr>

                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span> Posted on August 24, 2013 at 9:00 PM</p>

                <hr>

                <!-- Preview Image -->
                <img class="img-responsive img-thumbnail coverimg" src="3.jpg" alt="">

                <hr>

                <!-- Post Content -->
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati, aut, error quam sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi eos magni recusandae laborum minus inventore?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, doloribus, dolorem iusto blanditiis unde eius illum consequuntur neque dicta incidunt ullam ea hic porro optio ratione repellat perspiciatis. Enim, iure!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p>

                <hr>
                <div class="gallery">
                    <div class="container">

                        <div class="row">

                            <div class="col-md-4 gallery-item">
                                <a href="#galleryImg1" class="link-gallery" data-toggle="modal" data-target="#modalGallery"1>
                                    <img src="http://placehold.it/558x286&text=Third image" class="img-responsive img-gallery img-thumbnail" alt="Third image">
                                </a>
                            </div> <!-- /.col -->

                            <div class="col-md-4 gallery-item">
                                <a href="#galleryImg1" class="link-gallery" data-toggle="modal" data-target="#modalGallery2">
                                    <img src="http://placehold.it/558x286&text=Fourth image" class="img-responsive img-gallery img-thumbnail" alt="Fourth image">
                                </a>
                            </div> <!-- /.col -->
                        </div> <!--/.row  -->



                        <div class="row">

                            <div class="col-md-4 gallery-item">
                                <a href="#galleryImg1" class="link-gallery" data-toggle="modal" data-target="#modalGallery3">
                                    <img src="http://placehold.it/558x286&text=Third image" class="img-responsive img-gallery img-thumbnail" alt="Third image">
                                </a>
                            </div> <!-- /.col -->

                            <div class="col-md-4 gallery-item">
                                <a href="#galleryImg1" class="link-gallery" data-toggle="modal" data-target="#modalGallery4">
                                    <img src="http://placehold.it/558x286&text=Fourth image" class="img-responsive img-gallery img-thumbnail" alt="Fourth image">
                                </a>
                            </div> <!-- /.col -->
                        </div> <!--/.row  -->


                    </div> <!-- /.container -->
                </div> <!-- /.gallery -->

                <hr>


                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, doloribus, dolorem iusto blanditiis unde eius illum consequuntur neque dicta incidunt ullam ea hic porro optio ratione repellat perspiciatis. Enim, iure!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p>


                <hr>




                <div class="modal fade" id="modalGallery" tabindex="-1" role="dialog" aria-labelledby="modalGalleryLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title" id="modalGalleryLabel">Gallery</h4>
                            </div> <!-- /.modal-header -->

                            <div class="modal-body">
                                <div id="carouselGallery" class="carousel slide" data-ride="carousel" data-interval="false">
                                    <div class="carousel-inner">
                                    </div> <!-- /.carousel-inner -->
                                </div> <!-- /.carousel -->
                            </div> <!-- /.modal-body -->

                            <div class="modal-footer">
                                <ul class="pagination">
                                </ul>
                            </div> <!-- /.modal-footer -->
                        </div> <!-- /.modal-content -->
                    </div> <!-- /.modal-dialog -->
                </div> <!-- /.modal -->

                <br><br>


                <!-- Blog Comments -->

                <!-- Comments Form -->
                <div class="well">
                    <h4>Leave a Comment:</h4>
                    <form role="form">
                        <div class="form-group">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <hr>

                <!-- Posted Comments -->

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </div>

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        <!-- Nested Comment -->
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="http://placehold.it/64x64" alt="">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Nested Start Bootstrap
                                    <small>August 25, 2014 at 9:30 PM</small>
                                </h4>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            </div>
                        </div>
                        <!-- End Nested Comment -->
                    </div>
                </div>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="/js/storydescription/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/js/storydescription//bootstrap.min.js"></script>


<script>


    $(document).ready(function(){
        $('.link-gallery').click(function(){
            var galleryId = $(this).attr('data-target');
            var currentLinkIndex = $(this).index('a[data-target="'+ galleryId +'"]');

            createGallery(galleryId, currentLinkIndex);
            createPagination(galleryId, currentLinkIndex);

            $(galleryId).on('hidden.bs.modal', function (){
                destroyGallry(galleryId);
                destroyPagination(galleryId);
            });

            $(galleryId +' .carousel').on('slid.bs.carousel', function (){
                var currentSlide = $(galleryId +' .carousel .item.active');
                var currentSlideIndex = currentSlide.index(galleryId +' .carousel .item');

                setTitle(galleryId, currentSlideIndex);
                setPagination(++currentSlideIndex, true);
            })
        });

        function createGallery(galleryId, currentSlideIndex){
            var galleryBox = $(galleryId + ' .carousel-inner');

            $('a[data-target="'+ galleryId +'"]').each(function(){
                var img = $(this).html();
                var galleryItem = $('<div class="item">'+ img +'</div>');

                galleryItem.appendTo(galleryBox);
            });

            galleryBox.children('.item').eq(currentSlideIndex).addClass('active');
            setTitle(galleryId, currentSlideIndex);
        }

        function destroyGallry(galleryId){
            $(galleryId + ' .carousel-inner').html("");
        }

        function createPagination(galleryId, currentSlideIndex){
            var pagination = $(galleryId + ' .pagination');
            var carouselId = $(galleryId).find('.carousel').attr('id');
            var prevLink = $('<li><a href="#'+ carouselId +'" data-slide="prev">«</a></li>');
            var nextLink = $('<li><a href="#'+ carouselId +'" data-slide="next">»</a></li>');

            prevLink.appendTo(pagination);
            nextLink.appendTo(pagination);

            $('a[data-target="'+ galleryId +'"]').each(function(){
                var linkIndex = $(this).index('a[data-target="'+ galleryId +'"]');
                var paginationLink = $('<li><a data-target="#carouselGallery" data-slide-to="'+ linkIndex +'">'+ (linkIndex+1) +'</a></li>');

                paginationLink.insertBefore('.pagination li:last-child');
            });

            setPagination(++currentSlideIndex);
        }

        function setPagination(currentSlideIndex, reset=false){
            if (reset){
                $('.pagination li').removeClass('active');
            }

            $('.pagination li').eq(currentSlideIndex).addClass('active');
        }

        function destroyPagination(galleryId){
            $(galleryId + ' .pagination').html("");
        }

        function setTitle(galleryId, currentSlideIndex){
            var imgAlt = $(galleryId + ' .item').eq(currentSlideIndex).find('img').attr('alt');

            $('.modal-title').text(imgAlt);
        }
    });


</script>



</body>

</html>
