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
    <link rel="stylesheet" href="{{asset('assets/plugins/tiny-slider/tiny-slider.css')}}">

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="{{asset('assets/css/theme.css')}}">
    <link href="{{asset('assets/css/heroes.css')}}" rel="stylesheet">
    <script src="{{asset('js/axios.min.js')}}"></script>

</head>

<body>

    <div class="main-wrapper">


        <article class="blog-post px-3 py-5 p-md-5">
            <div class="container single-col-max-width">
                <header class="blog-post-header">
                    <h2 class="title mb-2">{{ $post->title }}</h2>
                </header>

                <div class="blog-post-body">

                    <p>{{ $post->content }}</p>

                </div>
                <!--//blog-comments-section-->
                <div class="blog-comments-section">
                    <div id="disqus_thread"></div>
                    <script>
                        /**
				 *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT 
				 *  THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR 
				 *  PLATFORM OR CMS.
				 *  
				 *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: 
				 *  https://disqus.com/admin/universalcode/#configuration-variables
				 */
				/*
				var disqus_config = function () {
				    // Replace PAGE_URL with your page's canonical URL variable
				    this.page.url = PAGE_URL;  
				    
				    // Replace PAGE_IDENTIFIER with your page's unique identifier variable
				    this.page.identifier = PAGE_IDENTIFIER; 
				};
				*/

				(function() { // REQUIRED CONFIGURATION VARIABLE: EDIT THE SHORTNAME BELOW
					var d = document,
						s = d.createElement('script');

					// IMPORTANT: Replace 3wmthemes with your forum shortname!
					s.src = 'https://3wmthemes.disqus.com/embed.js';

					s.setAttribute('data-timestamp', +new Date());
					(d.head || d.body).appendChild(s);
				})();
                    </script>
                    <noscript>
                        Please enable JavaScript to view the
                        <a href="https://disqus.com/?ref_noscript" rel="nofollow">
                            comments powered by Disqus.
                        </a>
                    </noscript>
                </div>
            </div>
            <!--//container-->
        </article>

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
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('assets/plugins/popper.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

    <script src="assets/plugins/tiny-slider/min/tiny-slider.js"></script>
    <script src="assets/js/testimonials.js"></script>

    <!-- Style Switcher (REMOVE ON YOUR PRODUCTION SITE) -->
    <!-- <script src="assets/js/demo/style-switcher.js"></script> -->

    <!-- Dark Mode -->
    <script src="assets/plugins/js-cookie.min.js"></script>
    <script src="assets/js/dark-mode.js"></script>

</body>

</html>