
<?php $__env->startSection('title', $viewData["title"]); ?>
<?php $__env->startSection('subtitle', $viewData["subtitle"]); ?>
<?php $__env->startSection('content'); ?>
<div class="card mb-3">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="<?php echo e(asset('/storage/'.$viewData["product"]->getImage())); ?>" class="img-fluid rounded-start">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">
                    <?php echo e($viewData["product"]["name"]); ?> (Rp <?php echo e($viewData["product"]->getPrice()); ?>)
                </h5>
                <p class="card-text"><?php echo e($viewData["product"]->getDescription()); ?></p>
                <p class="card-text"><small class="text-muted">Tambahkan ke Keranjang</small></p>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Lenovo\Documents\New_folder\onlineStore\resources\views/product/show.blade.php ENDPATH**/ ?>