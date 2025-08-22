<time class="updated" datetime="<?php echo e(get_post_modified_time('c')); ?>"><?php echo e(get_the_date()); ?></time>
<p class="byline author vcard">
    <?php echo e(__('By', 'your-blade-theme')); ?> <a href="<?php echo e(get_author_posts_url(get_the_author_meta('ID'))); ?>" rel="author" class="fn"><?php echo e(get_the_author()); ?></a>
</p><?php /**PATH /Users/maratib/iwork/learn/php/wp1/wp-content/themes/wp-blade/views/partials/entry-meta.blade.php ENDPATH**/ ?>