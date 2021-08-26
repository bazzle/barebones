<header class="o-header">
    <a href="<?php echo get_option('home'); ?>">
        <img src="<?php echo get_template_directory_uri() ?>/assets/src/img/logo.svg" alt="logo" />
    </a>
    <nav role="navigation" aria-label="Main" class="header__menu">
    <?php
        $args = array(
            'theme_location'=> 'navigation_primary',
            'menu_class'=> 'header__menu__list',
            'container'=> false
        );
        ?>
        <?php wp_nav_menu( $args ) ?>
    </nav>
</header>