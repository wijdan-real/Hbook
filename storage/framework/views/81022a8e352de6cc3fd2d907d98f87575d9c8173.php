<?php $__env->startSection('title','songs edit'); ?>
<?php $__env->startSection('body'); ?>

        <?php echo e($song->title); ?><br>
      <?php echo e($song->artist); ?>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>