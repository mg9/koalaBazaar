<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="author" content="SemiColonWeb"/>

    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic"
          rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{asset('/user')}}/css/bootstrap.css" type="text/css"/>
    <link rel="stylesheet" href="{{asset('/user')}}/style.css" type="text/css"/>
    <link rel="stylesheet" href="{{asset('/user')}}/css/dark.css" type="text/css"/>
    <link rel="stylesheet" href="{{asset('/user')}}/css/font-icons.css" type="text/css"/>
    <link rel="stylesheet" href="{{asset('/user')}}/css/animate.css" type="text/css"/>
    <link rel="stylesheet" href="{{asset('/user')}}/css/magnific-popup.css" type="text/css"/>

    <link rel="stylesheet" href="{{asset('/user')}}/css/responsive.css" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <!-- External JavaScripts
    ============================================= -->
    <script type="text/javascript" src="{{asset('/user')}}/js/jquery.js"></script>
    <script type="text/javascript" src="{{asset('/user')}}/js/plugins.js"></script>

    <!-- Document Title
    ============================================= -->
    <title>@yield('title')</title>

</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Top Bar
    ============================================= -->
    <div id="top-bar">

        <div class="container clearfix">

            <div class="col_half nobottommargin hidden-xs">

                <p class="nobottommargin"><strong>Call:</strong> 1800-547-2145 | <strong>Email:</strong> info@canvas.com
                </p>

            </div>

            <div class="col_half col_last fright nobottommargin">

                <!-- Top Links
                ============================================= -->
                <div class="top-links">
                    <ul>
                        <li>
                            <a href="#">Giris Yap</a>

                            <div class="top-link-section">
                                <form id="top-login" role="form"
                                      action="{{ action('AuthenticationController@doLogin')}}" method="post">
                                    <div class="input-group" id="top-login-username">
                                        <span class="input-group-addon">
                                            <i class="icon-user"></i></span>
                                        <input type="email" class="form-control" placeholder="Email address" required=""
                                               name="email">
                                    </div>
                                    <div class="input-group" id="top-login-password">
                                        <span class="input-group-addon"><i class="icon-key"></i></span>
                                        <input type="password" class="form-control" placeholder="Password" required=""
                                               name="pass">
                                    </div>
                                    <button class="btn btn-danger btn-block" type="submit">Sign in</button>
                                    <a href="{{ action('AuthenticationController@loginviainstagram') }}"
                                       class="btn btn-primary btn-block" name="login-with-instagram">Instagram
                                    </a>

                                </form>
                            </div>
                        </li>
                        <li>
                            <a href="{{ action('AuthenticationController@showRegister') }}">Kayıt Ol</a>
                        </li>
                    </ul>
                </div>
                <!-- .top-links end -->

            </div>

        </div>

    </div>
    <!-- #top-bar end -->

    <!-- Header
    ============================================= -->
    <header id="header" class="sticky-style-2">

        <div class="container clearfix">

            <!-- Logo
            ============================================= -->
            <div id="logo">
                <a href="index.html" class="standard-logo" data-dark-logo="{{asset('/user')}}/images/logo-dark.png"><img
                            src="{{asset('/user')}}/images/logo.png" alt="Canvas Logo"></a>
                <a href="index.html" class="retina-logo"
                   data-dark-logo="{{asset('/user')}}/images/logo-dark@2x.png"><img
                            src="{{asset('/user')}}/images/logo@2x.png" alt="Canvas Logo"></a>
            </div>
            <!-- #logo end -->

            <ul class="header-extras">
                <li>
                    <i class="i-medium i-circled i-bordered icon-thumbs-up2 nomargin"></i>

                    <div class="he-text">
                        Original Brands
                        <span>100% Guaranteed</span>
                    </div>
                </li>
                <li>
                    <i class="i-medium i-circled i-bordered icon-truck2 nomargin"></i>

                    <div class="he-text">
                        Free Shipping
                        <span>for $20 or more</span>
                    </div>
                </li>
                <li>
                    <i class="i-medium i-circled i-bordered icon-undo nomargin"></i>

                    <div class="he-text">
                        30-Day Returns
                        <span>Completely Free</span>
                    </div>
                </li>
            </ul>

        </div>

        <div id="header-wrap">

            <!-- Primary Navigation
            ============================================= -->
            <nav id="primary-menu" class="style-2">

                <div class="container clearfix">

                    <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                    <ul>
                        <li class="current"><a href="#">
                                <div>Home</div>
                                <span>Lets Start</span></a>
                            <ul>
                                <li><a href="index-corporate.html">
                                        <div>Home - Corporate</div>
                                    </a>
                                    <ul>
                                        <li><a href="index-corporate.html">
                                                <div>Corporate - Layout 1</div>
                                            </a></li>
                                        <li><a href="index-corporate-2.html">
                                                <div>Corporate - Layout 2</div>
                                            </a></li>
                                        <li><a href="index-corporate-3.html">
                                                <div>Corporate - Layout 3</div>
                                            </a></li>
                                        <li><a href="index-corporate-4.html">
                                                <div>Corporate - Layout 4</div>
                                            </a></li>
                                    </ul>
                                </li>
                                <li><a href="index-portfolio.html">
                                        <div>Home - Portfolio</div>
                                    </a>
                                    <ul>
                                        <li><a href="index-portfolio.html">
                                                <div>Portfolio - Layout 1</div>
                                            </a></li>
                                        <li><a href="index-portfolio-2.html">
                                                <div>Portfolio - Layout 2</div>
                                            </a></li>
                                        <li><a href="index-portfolio-3.html">
                                                <div>Portfolio - Masonry</div>
                                            </a></li>
                                        <li><a href="index-portfolio-4.html">
                                                <div>Portfolio - AJAX</div>
                                            </a></li>
                                    </ul>
                                </li>
                                <li><a href="index-blog.html">
                                        <div>Home - Blog</div>
                                    </a>
                                    <ul>
                                        <li><a href="index-blog.html">
                                                <div>Blog - Layout 1</div>
                                            </a></li>
                                        <li><a href="index-blog-2.html">
                                                <div>Blog - Layout 2</div>
                                            </a></li>
                                        <li><a href="index-blog-3.html">
                                                <div>Blog - Layout 3</div>
                                            </a></li>
                                    </ul>
                                </li>
                                <li><a href="index-shop.html">
                                        <div>Home - Shop</div>
                                    </a>
                                    <ul>
                                        <li><a href="index-shop.html">
                                                <div>Shop - Layout 1</div>
                                            </a></li>
                                        <li><a href="index-shop-2.html">
                                                <div>Shop - Layout 2</div>
                                            </a></li>
                                    </ul>
                                </li>
                                <li><a href="index-magazine.html">
                                        <div>Home - Magazine</div>
                                    </a>
                                    <ul>
                                        <li><a href="index-magazine.html">
                                                <div>Magazine - Layout 1</div>
                                            </a></li>
                                        <li><a href="index-magazine-2.html">
                                                <div>Magazine - Layout 2</div>
                                            </a></li>
                                        <li><a href="index-magazine-3.html">
                                                <div>Magazine - Layout 3</div>
                                            </a></li>
                                    </ul>
                                </li>
                                <li><a href="landing.html">
                                        <div>Home - Landing Page</div>
                                    </a>
                                    <ul>
                                        <li><a href="landing.html">
                                                <div>Landing Page - Layout 1</div>
                                            </a></li>
                                        <li><a href="landing-2.html">
                                                <div>Landing Page - Layout 2</div>
                                            </a></li>
                                        <li><a href="landing-3.html">
                                                <div>Landing Page - Layout 3</div>
                                            </a></li>
                                        <li><a href="landing-4.html">
                                                <div>Landing Page - Layout 4</div>
                                            </a></li>
                                        <li><a href="landing-5.html">
                                                <div>Landing Page - Layout 5</div>
                                            </a></li>
                                    </ul>
                                </li>
                                <li><a href="index-fullscreen-image.html">
                                        <div>Home - Full Screen</div>
                                    </a>
                                    <ul>
                                        <li><a href="index-fullscreen-image.html">
                                                <div>Full Screen - Image</div>
                                            </a></li>
                                        <li><a href="index-fullscreen-slider.html">
                                                <div>Full Screen - Slider</div>
                                            </a></li>
                                        <li><a href="index-fullscreen-video.html">
                                                <div>Full Screen - Video</div>
                                            </a></li>
                                    </ul>
                                </li>
                                <li><a href="index-onepage.html">
                                        <div>Home - One Page</div>
                                    </a>
                                    <ul>
                                        <li><a href="index-onepage.html">
                                                <div>One Page - Default</div>
                                            </a></li>
                                        <li><a href="index-onepage-2.html">
                                                <div>One Page - Submenu</div>
                                            </a></li>
                                        <li><a href="index-onepage-3.html">
                                                <div>One Page - Dots Style</div>
                                            </a></li>
                                    </ul>
                                </li>
                                <li><a href="index-wedding.html">
                                        <div>Home - Wedding</div>
                                    </a></li>
                                <li><a href="index-restaurant.html">
                                        <div>Home - Restaurant</div>
                                    </a></li>
                                <li><a href="index-events.html">
                                        <div>Home - Events</div>
                                    </a></li>
                                <li><a href="index-parallax.html">
                                        <div>Home - Parallax</div>
                                    </a></li>
                                <li><a href="index-app-showcase.html">
                                        <div>Home - App Showcase</div>
                                    </a></li>
                            </ul>
                        </li>
                        <!-- Mega Menu
                        ============================================= -->
                        <li class="mega-menu"><a href="{{ action('Frontend\HomeController@category') }}">
                                <div>Ürünler</div>
                                <span>Out of the Box</span></a>
                            <ul>
                                @foreach(\App\Category::all() as $category)

                                    <li><a href="{{ action('Frontend\HomeController@category',$category->slug) }}">
                                            <div>{{ $category->title }}</div>
                                        </a></li>

                                @endforeach
                            </ul>
                        </li>
                        <!-- .mega-menu end -->

                        <li><a href="{{ action('Frontend\HomeController@shopList') }}">
                                <div>Mağazalar</div></a></li>
                    </ul>

                    <!-- Top Cart
                    ============================================= -->
                    <div id="top-cart">
                        <a href="#" id="top-cart-trigger"><i class="icon-shopping-cart"></i><span>5</span></a>

                        <div class="top-cart-content">
                            <div class="top-cart-title">
                                <h4>Shopping Cart</h4>
                            </div>
                            <div class="top-cart-items">
                                <div class="top-cart-item clearfix">
                                    <div class="top-cart-item-image">
                                        <a href="#"><img src="{{asset('/user')}}/images/shop/small/1.jpg"
                                                         alt="Blue Round-Neck Tshirt"/></a>
                                    </div>
                                    <div class="top-cart-item-desc">
                                        <a href="#">Blue Round-Neck Tshirt</a>
                                        <span class="top-cart-item-price">$19.99</span>
                                        <span class="top-cart-item-quantity">x 2</span>
                                    </div>
                                </div>
                                <div class="top-cart-item clearfix">
                                    <div class="top-cart-item-image">
                                        <a href="#"><img src="{{asset('/user')}}/images/shop/small/6.jpg"
                                                         alt="Light Blue Denim Dress"/></a>
                                    </div>
                                    <div class="top-cart-item-desc">
                                        <a href="#">Light Blue Denim Dress</a>
                                        <span class="top-cart-item-price">$24.99</span>
                                        <span class="top-cart-item-quantity">x 3</span>
                                    </div>
                                </div>
                            </div>
                            <div class="top-cart-action clearfix">
                                <span class="fleft top-checkout-price">$114.95</span>
                                <button class="button button-3d button-small nomargin fright">View Cart</button>
                            </div>
                        </div>
                    </div>
                    <!-- #top-cart end -->

                    <!-- Top Search
                    ============================================= -->
                    <div id="top-search">
                        <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>

                        <form action="search.html" method="get">
                            <input type="text" name="q" class="form-control" value=""
                                   placeholder="Type &amp; Hit Enter..">
                        </form>
                    </div>
                    <!-- #top-search end -->

                </div>

            </nav>
            <!-- #primary-menu end -->

        </div>

    </header>
    <!-- #header end -->


    @section('content')
    @show

            <!-- Footer
    ============================================= -->
    <footer id="footer" class="dark">

        <div class="container">

            <!-- Footer Widgets
            ============================================= -->
            <div class="footer-widgets-wrap clearfix">

                <div class="col_two_third">

                    <div class="col_one_third">

                        <div class="widget clearfix">

                            <img src="images/footer-widget-logo.png" alt="" class="footer-logo">

                            <p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp;
                                <strong>Flexible</strong> Design Standards.</p>

                            <div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
                                <address>
                                    <strong>Headquarters:</strong><br>
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                </address>
                                <abbr title="Phone Number"><strong>Phone:</strong></abbr> (91) 8547 632521<br>
                                <abbr title="Fax"><strong>Fax:</strong></abbr> (91) 11 4752 1433<br>
                                <abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com
                            </div>

                        </div>

                    </div>

                    <div class="col_one_third">

                        <div class="widget widget_links clearfix">

                            <h4>Blogroll</h4>

                            <ul>
                                <li><a href="http://codex.wordpress.org/">Documentation</a></li>
                                <li><a href="http://wordpress.org/support/forum/requests-and-feedback">Feedback</a></li>
                                <li><a href="http://wordpress.org/extend/plugins/">Plugins</a></li>
                                <li><a href="http://wordpress.org/support/">Support Forums</a></li>
                                <li><a href="http://wordpress.org/extend/themes/">Themes</a></li>
                                <li><a href="http://wordpress.org/news/">WordPress Blog</a></li>
                                <li><a href="http://planet.wordpress.org/">WordPress Planet</a></li>
                            </ul>

                        </div>

                    </div>

                    <div class="col_one_third col_last">

                        <div class="widget clearfix">
                            <h4>Recent Posts</h4>

                            <div id="post-list-footer">
                                <div class="spost clearfix">
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li>10th July 2014</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="spost clearfix">
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li>10th July 2014</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="spost clearfix">
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li>10th July 2014</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="col_one_third col_last">

                    <div class="widget clearfix" style="margin-bottom: -20px;">

                        <div class="row">

                            <div class="col-md-6 bottommargin-sm">
                                <div class="counter counter-small"><span data-from="50" data-to="15065421"
                                                                         data-refresh-interval="80" data-speed="3000"
                                                                         data-comma="true"></span></div>
                                <h5 class="nobottommargin">Total Downloads</h5>
                            </div>

                            <div class="col-md-6 bottommargin-sm">
                                <div class="counter counter-small"><span data-from="100" data-to="18465"
                                                                         data-refresh-interval="50" data-speed="2000"
                                                                         data-comma="true"></span></div>
                                <h5 class="nobottommargin">Clients</h5>
                            </div>

                        </div>

                    </div>

                    <div class="widget subscribe-widget clearfix">
                        <h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp;
                            Inside Scoops:</h5>

                        <div id="widget-subscribe-form-result" data-notify-type="success" data-notify-msg=""></div>
                        <form id="widget-subscribe-form" action="include/subscribe.php" role="form" method="post"
                              class="nobottommargin">
                            <div class="input-group divcenter">
                                <span class="input-group-addon"><i class="icon-email2"></i></span>
                                <input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email"
                                       class="form-control required email" placeholder="Enter your Email">
									<span class="input-group-btn">
										<button class="btn btn-success" type="submit">Subscribe</button>
									</span>
                            </div>
                        </form>
                        <script type="text/javascript">
                            $("#widget-subscribe-form").validate({
                                submitHandler: function (form) {
                                    $(form).find('.input-group-addon').find('.icon-email2').removeClass('icon-email2').addClass('icon-line-loader icon-spin');
                                    $(form).ajaxSubmit({
                                        target: '#widget-subscribe-form-result',
                                        success: function () {
                                            $(form).find('.input-group-addon').find('.icon-line-loader').removeClass('icon-line-loader icon-spin').addClass('icon-email2');
                                            $('#widget-subscribe-form').find('.form-control').val('');
                                            $('#widget-subscribe-form-result').attr('data-notify-msg', $('#widget-subscribe-form-result').html()).html('');
                                            SEMICOLON.widget.notifications($('#widget-subscribe-form-result'));
                                        }
                                    });
                                }
                            });
                        </script>
                    </div>

                    <div class="widget clearfix" style="margin-bottom: -20px;">

                        <div class="row">

                            <div class="col-md-6 clearfix bottommargin-sm">
                                <a href="#" class="social-icon si-dark si-colored si-facebook nobottommargin"
                                   style="margin-right: 10px;">
                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>
                                <a href="#">
                                    <small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on
                                        Facebook
                                    </small>
                                </a>
                            </div>
                            <div class="col-md-6 clearfix">
                                <a href="#" class="social-icon si-dark si-colored si-rss nobottommargin"
                                   style="margin-right: 10px;">
                                    <i class="icon-rss"></i>
                                    <i class="icon-rss"></i>
                                </a>
                                <a href="#">
                                    <small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to RSS
                                        Feeds
                                    </small>
                                </a>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
            <!-- .footer-widgets-wrap end -->

        </div>

        <!-- Copyrights
        ============================================= -->
        <div id="copyrights">

            <div class="container clearfix">

                <div class="col_half">
                    Copyrights &copy; 2014 All Rights Reserved by Canvas Inc.<br>

                    <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
                </div>

                <div class="col_half col_last tright">
                    <div class="fright clearfix">
                        <a href="#" class="social-icon si-small si-borderless si-facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-twitter">
                            <i class="icon-twitter"></i>
                            <i class="icon-twitter"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-gplus">
                            <i class="icon-gplus"></i>
                            <i class="icon-gplus"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-pinterest">
                            <i class="icon-pinterest"></i>
                            <i class="icon-pinterest"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-vimeo">
                            <i class="icon-vimeo"></i>
                            <i class="icon-vimeo"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-github">
                            <i class="icon-github"></i>
                            <i class="icon-github"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-yahoo">
                            <i class="icon-yahoo"></i>
                            <i class="icon-yahoo"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-linkedin">
                            <i class="icon-linkedin"></i>
                            <i class="icon-linkedin"></i>
                        </a>
                    </div>

                    <div class="clear"></div>

                    <i class="icon-envelope2"></i> info@canvas.com <span class="middot">&middot;</span> <i
                            class="icon-headphones"></i> +91-11-6541-6369 <span class="middot">&middot;</span> <i
                            class="icon-skype2"></i> CanvasOnSkype
                </div>

            </div>

        </div>
        <!-- #copyrights end -->

    </footer>
    <!-- #footer end -->

</div>
<!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- Footer Scripts
============================================= -->
<script type="text/javascript" src="{{asset('/user')}}/js/functions.js"></script>

</body>
</html>