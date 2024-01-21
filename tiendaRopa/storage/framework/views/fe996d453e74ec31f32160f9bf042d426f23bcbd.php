<?php $__env->startSection('title', $viewData["title"]); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-md-6 col-lg-4 mb-2">
    <img src="<?php echo e(asset('/img/game.png')); ?>" class="img-fluid rounded">
  </div>
  <div class="col-md-6 col-lg-4 mb-2">
    <img src="<?php echo e(asset('/img/safe.png')); ?>" class="img-fluid rounded">
  </div>
  <div class="col-md-6 col-lg-4 mb-2">
    <img src="<?php echo e(asset('/img/submarine.png')); ?>" class="img-fluid rounded">
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\tiendaRopa\resources\views/home/index.blade.php ENDPATH**/ ?>