<!DOCTYPE html>
<html lang="en">

<head>
    <title>DevCard - Bootstrap 5 vCard &amp; Portfolio Template For Developers</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="DevCard Bootstrap 5 Template">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">

    <link id="theme-style" rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- FontAwesome JS -->
    <script defer src="assets/fontawesome/js/all.js"></script>

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="assets/plugins/tiny-slider/tiny-slider.css">

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/theme-1.css">
    <link href="assets/css/heroes.css" rel="stylesheet">
    <script src="{{asset('js/axios.min.js')}}"></script>

</head>

<body>

    <div class="main-wrapper">


        <section class="cta-section theme-bg-light py-5">
            <div class="container text-center">
                <h2 class="heading">A Blog About Software Development And Life</h2>
                <div class="intro">Welcome to my blog. Subscribe and get my latest blog post in your inbox.</div>
                <div class="single-form-max-width pt-3 mx-auto">
                    <form class="signup-form row g-2 g-lg-2 align-items-center">
                        <div class="col-12 col-md-9">
                            <label class="sr-only" for="semail">Your email</label>
                            <input type="email" id="semail" name="semail1" class="form-control me-md-1 semail"
                                placeholder="Enter email">
                        </div>
                        <div class="col-12 col-md-2">
                            <button type="submit" class="btn btn-primary">Subscribe</button>
                        </div>
                    </form>
                    <!--//signup-form-->
                </div>
                <!--//single-form-max-width-->
            </div>
            <!--//container-->
        </section>

        <section class="blog-list px-3 py-5 p-md-5">
            <div class="container">
                <div class="row">
                    @foreach ($posts as $post)
                    <div class="col-md-4 mb-3">
                        <div class="card blog-post-card">
                            <img class="card-img-top" src="assets/images/blog/blog-post-thumb-card-1.jpg" alt="image">
                            <div class="card-body">
                                <h5 class="card-title"><a class="theme-link"
                                        href="posts/{{ $post->id }}">{{ $post->title }}</a>
                                </h5>
                                <p class="card-text">{{ $post->content }}</p>
                                <p class="mb-0"><a class="text-link" href="posts/{{ $post->id }}">Read more &rarr;</a>
                                </p>
                            </div>
                        </div>
                        <!--//card-->
                    </div>
                    @endforeach
                </div>
                <!--//row-->


                <nav class="blog-nav nav nav-justified my-5">
                    <a class="nav-link-prev nav-item nav-link d-none rounded-left" href="#">Previous<i
                            class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
                    <a class="nav-link-next nav-item nav-link rounded" href="#">Next<i
                            class="arrow-next fas fa-long-arrow-alt-right"></i></a>
                </nav>

            </div>
        </section>

        <footer class="footer text-center py-4">
            <small class="copyright">Copyright &copy; <a href="https://www.rafsanjane.com/" target="_blank">Rafsan The
                    Developer</a></small>
        </footer>

    </div>
    <!--//main-wrapper-->

    <!-- *****CONFIGURE STYLE (REMOVE ON YOUR PRODUCTION SITE)****** -->
    <!-- <div id="config-panel" class="config-panel config-panel-hide d-none d-lg-block">
            <div class="panel-inner">
                <a id="config-trigger" class="config-trigger text-center" href="#"><i class="fas fa-cog mx-auto" data-fa-transform="down-6"></i></a>
                <h5 class="panel-title">Choose Colour</h5>
                <ul id="color-options" class="list-inline mb-0">
                    <li class="theme-1 active list-inline-item"><a data-style="assets/css/theme-1.css" href="#"></a></li>
                    <li class="theme-2  list-inline-item"><a data-style="assets/css/theme-2.css" href="#"></a></li>
                    <li class="theme-3  list-inline-item"><a data-style="assets/css/theme-3.css" href="#"></a></li>
                    <li class="theme-4  list-inline-item"><a data-style="assets/css/theme-4.css" href="#"></a></li>
                    <li class="theme-5  list-inline-item"><a data-style="assets/css/theme-5.css" href="#"></a></li>
                    <li class="theme-6  list-inline-item"><a data-style="assets/css/theme-6.css" href="#"></a></li>
                    <li class="theme-7  list-inline-item"><a data-style="assets/css/theme-7.css" href="#"></a></li>
                    <li class="theme-8  list-inline-item"><a data-style="assets/css/theme-8.css" href="#"></a></li>
                    <li class="theme-9  list-inline-item"><a data-style="assets/css/theme-9.css" href="#"></a></li>
                    <li class="theme-10  list-inline-item"><a data-style="assets/css/theme-10.css" href="#"></a></li>
                </ul>
                <a id="config-close" class="close" href="#"><i class="fa fa-times-circle"></i></a>
            </div>
            //panel-inner
        </div> -->
    <!--//configure-panel-->

    <!-- Main Javascript -->
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <script src="assets/plugins/tiny-slider/min/tiny-slider.js"></script>
    <script src="assets/js/testimonials.js"></script>

    <!-- Style Switcher (REMOVE ON YOUR PRODUCTION SITE) -->
    <!-- <script src="assets/js/demo/style-switcher.js"></script> -->

    <!-- Dark Mode -->
    <script src="assets/plugins/js-cookie.min.js"></script>
    <script src="assets/js/dark-mode.js"></script>

</body>

</html>