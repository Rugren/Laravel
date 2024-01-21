<?php $__env->startSection('title', $viewData["title"]); ?>
<?php $__env->startSection('subtitle', $viewData["subtitle"]); ?>
<?php $__env->startSection('content'); ?>
<div class="card">
  <div class="card-header">
    Productos en el carrito
  </div>
  <div class="card-body">
    <table class="table table-bordered table-striped text-center">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nombre del producto</th>
          <th scope="col">Precio</th>
          <th scope="col">Cantidad</th>
        </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $viewData["products"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($product->getId()); ?></td>
          <td><?php echo e($product->getName()); ?></td>
          <td>$<?php echo e($product->getPrice()); ?></td>
          <td><?php echo e(session('products')[$product->getId()]); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
    <div class="row">
      <div class="text-end">
        <a class="btn btn-outline-secondary mb-2"><b>Total a pagar: </b><?php echo e($viewData["total"]); ?>€</a>
        <?php if(count($viewData["products"]) > 0): ?>
        <a href="<?php echo e(route('cart.purchase')); ?>" class="btn bg-primary text-white mb-2">Purchase</a>
        <a href="<?php echo e(route('cart.delete')); ?>">
          <button class="btn btn-danger mb-2">
            Eliminar todos los productos del carrito
          </button>
        </a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\tiendaRopa\resources\views/cart/index.blade.php ENDPATH**/ ?>