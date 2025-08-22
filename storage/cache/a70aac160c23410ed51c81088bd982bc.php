<?php $__env->startSection('content'); ?>
<h1>Page</h1>
    <?php while(have_posts()): ?> <?php (the_post()); ?>
        <article <?php (post_class()); ?>>
            <header>
                <h1><?php echo e(the_title()); ?></h1>
            </header>
            <div class="entry-content">
                <?php echo the_content(); ?>

            </div>
            <footer>
                <?php echo wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'your-blade-theme'), 'after' => '</p></nav>']); ?>

            </footer>
            <?php (comments_template()); ?>
        </article>
    <?php endwhile; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/maratib/iwork/learn/php/wp1/wp-content/themes/wp-blade/views/page.blade.php ENDPATH**/ ?>