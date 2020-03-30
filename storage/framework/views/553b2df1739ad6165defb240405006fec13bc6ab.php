<?php $__env->startSection('content'); ?>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo e($post->title); ?></h5>
    <p class="card-text">descriptions</p>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/yara/laravel-v2/laravel-blog/resources/views/show.blade.php ENDPATH**/ ?>