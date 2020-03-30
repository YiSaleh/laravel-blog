<?php $__env->startSection('content'); ?>
<a href="<?php echo e(route('posts.create')); ?>" type="button" class="btn btn-success">create post</a>


<table class="table" style="margin: 2em">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">title</th>
      <th scope="col">posted by</th>
      <th scope="col">created at</th>
      <th scope="col">actions</th>
    </tr>
  </thead>
  <tbody>
     
      <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
  
      <td><?php echo e($post->id); ?></td>
      <td><?php echo e($post->title); ?></td>
      <td><?php echo e($post->posted_by); ?></td>
      <td><?php echo e($post->created_at); ?></td>
      <td>--</td>
      <td><a href="/posts/<?php echo e($post->id); ?>" type="button" class="btn btn-success">View</a>
      <a href="/posts/1" type="button" class="btn btn-warning">View</a>
      <a href="/posts/1" type="button" class="btn btn-warning">View</a></td>
      

</td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/yara/laravel-v2/laravel-blog/resources/views/posts.blade.php ENDPATH**/ ?>