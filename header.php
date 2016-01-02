<?php
    global $post;
    $post_slug = $post->post_name;
?>
<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Anthony Dillon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Abacus Leewell</title>

    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />

    <!-- stylesheets -->
    <link rel="stylesheet" type="text/css" media="screen" href="https://assets.ubuntu.com/v1/vanilla-framework-version-0.0.55.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_directory'); ?>/style.css" />
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,700,700italic%7CUbuntu+Mono' rel='stylesheet' type='text/css' />
</head>

<body class="<?php echo $post_slug; ?>">
    <header class="wrapper inner-wrapper">
        <div class="twelve-col">
            <div class="logo">
                <a href="<?php echo site_url(); ?>/">
                  <img src="<?php bloginfo('template_directory'); ?>/img/abacus-leewell-logo.png" alt="Abacus Leewell" />
                </a>
            </div>
            <div class="contact-info right">
                <p>T: <span>01462 700229</span></p>
            </div>
        </div>
            <nav role="navigation" class="nav-primary">
                <ul class="inline-list">
                    <li><a href="<?php echo site_url(); ?>/about-us" <?php echo ($post_slug == 'about-us' ? 'class="is-active"': '')?>>About us</a></li>
                    <li><a href="<?php echo site_url(); ?>/services" <?php echo ($post_slug == 'services' ? 'class="is-active"': '')?>>Services</a></li>
                    <li><a href="<?php echo site_url(); ?>/products" <?php echo ($post_slug == 'products' ? 'class="is-active"': '')?>>Products</a></li>
                    <li><a href="<?php echo site_url(); ?>/solutions" <?php echo ($post_slug == 'solutions' ? 'class="is-active"': '')?>>Solutions</a></li>
                    <li><a href="<?php echo site_url(); ?>/news-centre" <?php echo ($post_slug == 'news-centre' ? 'class="is-active"': '')?>>News centre</a></li>
                    <li><a href="<?php echo site_url(); ?>/contact" <?php echo ($post_slug == 'contact' ? 'class="is-active"': '')?>>Contact</a></li>
                </ul>
            </nav>
    </header>
