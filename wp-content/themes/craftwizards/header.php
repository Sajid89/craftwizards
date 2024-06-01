<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="custom.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="h-screen bg-gradient-radial md:h-auto">
        <?php get_template_part( 'includes/header-components/hero' ); ?>
    </header>
</body>
</html>