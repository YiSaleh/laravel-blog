<?php $__env->startSection('content'); ?>


<form method="post" action="<?php echo e(route('posts.store')); ?>"style="margin:3em">
<?php echo csrf_field(); ?> 
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">description</label>
    <textarea name="discription" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">post Creator</label>
    <input type="text" name="creator" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary">create</button>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/yara/laravel-v2/laravel-blog/resources/views/create.blade.php ENDPATH**/ ?>