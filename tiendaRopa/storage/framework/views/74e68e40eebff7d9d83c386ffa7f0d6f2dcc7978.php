<?php $__env->startSection('title', $viewData["title"]); ?>
<?php $__env->startSection('content'); ?>
<div class="card">
  <div class="card-header">
    Admin Panel - Home Page
  </div>
  <div class="card-body">
    Bienvenido al Panel de administración, use la barra lateral para navegar entre las diferentes opciones.
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\tiendaRopa\resources\views/admin/home/index.blade.php ENDPATH**/ ?>