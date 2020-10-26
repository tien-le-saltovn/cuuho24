<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head() ?>
    <link
      href="<?php bloginfo('template_directory') ?>/Content/cssv=12JkPYPKX3wQH8tFtbzXogCGLnH_m-twCaPsDOu-sJg1.css"
      rel="stylesheet"
    />

    <script src="<?php bloginfo('template_directory') ?>/bundles/modernizrv=inCVuEFe6J4Q07A0AcRsbJic_UE5MwpRMNGcOtk94TE1.js"></script>

    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/Content/Home/bootstrap.min.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="<?php bloginfo('template_directory') ?>/Content/Home/font-awesome.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,600|Raleway:600,300|Josefin+Slab:400,700,600italic,600,400italic"
      rel="stylesheet"
      type="text/css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="<?php bloginfo('template_directory') ?>/Content/Home/slick-team-slider.css"
    />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/Content/Home/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/Content/Home/global.css" />

    <link
      href="https://fonts.googleapis.com/css?family=Poppins"
      rel="stylesheet"
    />
    <link href="<?php bloginfo('template_directory') ?>/Content/Home/searchform/css/main.css" rel="stylesheet" />

    <link href="<?php bloginfo('template_directory') ?>/Content/OwlCarousel/owl.carousel.min.css" rel="stylesheet" />
    <link
      href="<?php bloginfo('template_directory') ?>/Content/OwlCarousel/owl.theme.default.min.css"
      rel="stylesheet"
    />
    <link href="<?php bloginfo('template_directory') ?>/Content/OwlCarousel/owl.theme.green.min.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/Content/Home/mystyle.css" />

    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="<?php bloginfo('template_directory') ?>/Content/Images/Common/logo.ico"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
      window.fbAsyncInit = function () {
        FB.init({
          xfbml: true,
          version: "v6.0",
        });
      };

      (function (d, s, id) {
        var js,
          fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js";
        fjs.parentNode.insertBefore(js, fjs);
      })(document, "script", "facebook-jssdk");
    </script>

    <!-- Your customer chat code -->
    <div
      class="fb-customerchat"
      attribution="setup_tool"
      page_id="2052671961707850"
      logged_in_greeting="24/7 xin chào! Quý khách cần trợ giúp gì không?"
      logged_out_greeting="24/7 xin chào! Quý khách cần trợ giúp gì không?"
    ></div>
    <script
      async
      defer
      crossorigin="anonymous"
      src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0&appId=501933887353583&autoLogAppEvents=1"
    ></script>

    <header>
      <div class="main-navigation navbar-fixed-top">
        <nav class="navbar navbar-default">
          <div class="container">
            <div class="navbar-header">
              <button
                type="button"
                class="navbar-toggle"
                data-toggle="collapse"
                data-target="#myNavbar"
              >
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

              <a class="navbar-brand" href="<?php bloginfo('url') ?>"
                ><img src="<?php bloginfo('template_directory') ?>/Content/Images/Header/logo.png"
              /></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
				<?php wp_nav_menu( 
				  array( 
					'theme_location' => 'topmenu', 
					'container' => 'false', 
					'menu_id' => 'top-menu', 
					'menu_class' => 'nav navbar-nav navbar-right'
				  ) 
				); ?>
				
            </div>
          </div>
        </nav>
      </div>
    </header>