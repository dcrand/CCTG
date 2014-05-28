<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title(''); ?></title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]--> 

    <?php wp_head(); ?>   
</head>
<body <?php body_class(); ?>>
    <header data-stellar-background-ratio=".5">
        <div class="nav-wrap">
            <div class="wrap">
                <a id="logo" href="<?php echo home_url(); ?>"></a>
                              
                <nav id="nav" role="navigation">
                	<a class="nav-link" href="#nav" title="Show navigation">Show</a>
                	<a class="nav-link" href="#" title="Hide navigation">Hide</a>
					<?php wp_nav_menu(array(
					'container' => false,                           // remove nav container
					'container_class' => '',                 		// class of container (should you choose to use it)
					'menu' => __( 'The Main Menu', 'cctg' ),  		// nav name
					'menu_class' => '',              				// adding custom nav class
					'theme_location' => 'main-nav',                 // where it's located in the theme
					'before' => '',                                 // before the menu
	    			'after' => '',                                  // after the menu
	    			'link_before' => '',                            // before each link
	    			'link_after' => '',                             // after each link
	    			'depth' => 0,                                   // limit the depth of the nav
					'fallback_cb' => ''                             // fallback function (if there is one)
					)); ?>
				</nav>
            </div>
        </div>

        <?php if (is_home()) : ?>
            <div data-stellar-ratio=".8" class="hero">
                <h1>Through our grant review boards, we provide grants to area businesses, nonprofit organizations and local governments to improve energy efficiency; educate and retrain workers for the next generation of jobs; and fund energy technology projects that improve our environment.</h1>
            </div>
        <?php elseif (is_page_template( 'page-templates/info.php' ))  : ?>
        	 <div data-stellar-ratio=".7" class="page-hero">
                <h1><i class="icon-info"></i>Information</h1>
            </div>
        <?php elseif (is_single() || is_archive())  : ?>
        	 <div data-stellar-ratio=".7" class="page-hero">
                <h1><i class="icon-tower"></i>News</h1>
            </div>
        <?php else : ?>
            <div data-stellar-ratio=".7" class="page-hero">
                <h1><?php the_title(); ?></h1>
            </div>
        <?php endif; ?>

    </header>