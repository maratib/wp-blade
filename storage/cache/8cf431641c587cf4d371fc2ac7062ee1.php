<!DOCTYPE html>
<html <?php echo e(language_attributes()); ?>>
<head>
    <meta charset="<?php echo e(get_bloginfo('charset')); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e(wp_title('|', true, 'right')); ?></title>
    <?php echo e(wp_head()); ?>

</head>
<body <?php echo e(body_class()); ?>>
    <a class="skip-link screen-reader-text" href="#content"><?php echo e(__('Skip to content', 'your-blade-theme')); ?></a>
    <header class="site-header">
        <div class="container">
            <div class="site-branding">
                <?php if(is_front_page() && is_home()): ?>
                    <h1 class="site-title"><a href="<?php echo e(home_url('/')); ?>" rel="home"><?php echo e(get_bloginfo('name')); ?></a></h1>
                <?php else: ?>
                    <p class="site-title"><a href="<?php echo e(home_url('/')); ?>" rel="home"><?php echo e(get_bloginfo('name')); ?></a></p>
                <?php endif; ?>
                <?php if(get_bloginfo('description', 'display')): ?>
                    <p class="site-description"><?php echo e(get_bloginfo('description')); ?></p>
                <?php endif; ?>
            </div>

            <nav id="site-navigation" class="main-navigation">
                <?php if(has_nav_menu('primary')): ?>
                    <?php echo wp_nav_menu(['theme_location' => 'primary', 'menu_class' => 'primary-menu']); ?>

                <?php endif; ?>
                <a href="/">Home</a> | <a href="/contact">Contact</a> 
            </nav></div>
    </header><div id="content" class="site-content">
        <div class="container"></div><?php /**PATH /Users/maratib/iwork/learn/php/wp1/wp-content/themes/wp-blade/views/partials/header.blade.php ENDPATH**/ ?>