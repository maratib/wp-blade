<?php if($tags = get_the_tags()): ?>
    <p><?php echo e(__('Tags:', 'your-blade-theme')); ?> <?php echo get_the_tag_list('', ', ', ''); ?></p>
<?php endif; ?><?php /**PATH /Users/maratib/iwork/learn/php/wp1/wp-content/themes/wp-blade/views/partials/entry-tags.blade.php ENDPATH**/ ?>