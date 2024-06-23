<! DOCTYPE html>
<html <?php language_attributes();?>>
    <head>
        <meta charset='<?php bloginfo('charset'); ?>'>
        <meta name = "viewport" content = "width=device-width", initial-scale=1>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    <header>
        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
        <span id="mode">mode</span>      
        <div id="menu">
            <a href="<?php echo esc_url(site_url('/books'));?>"><span>Books</span></a>
            <a href="<?php echo esc_url(site_url('/bio'));?>"><span>Bio</span></a>
            <a href="<?php echo esc_url(site_url('/blog'));?>"><span>Blog</span></a>
        </div>
    </header>

<div class="menu-overlay">
    <ul>
        <li><a href="<?php echo esc_url(site_url('/books'));?>"><span>Books</span></a></li>
        <li><a href="<?php echo esc_url(site_url('/bio'));?>">Bio</a></li>
        <li><a href="<?php echo esc_url(site_url('/blog'));?>">Blog</a></li>
    </ul>
</div>