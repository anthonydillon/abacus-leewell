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

        <?php
        // If the page has children, display the children in the nav.
        // If the page has a parent, display the children of the parent in the nav.
        // If the page doesn't have children, or a parent, don't display the nav.
        // If the page is 'resources', or a descendant, don't display the nav.
        // If the page is 'search', don't display the nav.
        $pages = get_pages("sort_column=menu_order&depth=1&child_of=" . $post->ID) ? $post->ID : $post->post_parent;
        $current = $post;
        $output = '';
        $active = '';
        $parents = array();
        if ($pages && !is_search()) { ?>
      		<nav role="navigation" class="nav-secondary">
      			<ul class="nav-secondary__breadcrumb">
      				<?php
      					while($current->post_parent) {
      						$current = get_post($current->post_parent);
      						$output = '<li><a href="' . get_permalink($current) . '">'.get_the_title($current).'</a> &rsaquo;</li>' . $output;
      					}
      					$children = get_pages('child_of='.$post->ID);
      					if(count( $children ) != 0) {
      						$active = '<li class="active"><a href="' . get_permalink($post->ID) . '">'.get_the_title($post->ID).'</a> &rsaquo;</li>';
      					}
      					echo $output . $active;
      				?>
      			</ul>
      			<ul class="nav-secondary__list">
      				<?php wp_list_pages('sort_column=menu_order&title_li=&depth=1&child_of=' . $pages .'&current_page_item=active'); ?>
      			</ul>
      		</nav>
        <?php } ?>

    </header>
