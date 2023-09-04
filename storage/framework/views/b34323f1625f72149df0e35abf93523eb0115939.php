
	<?php $__env->startSection('title', $viewData["title"]); ?>
	<?php $__env->startSection('content'); ?>
	<div class="row">
	<div class="col-md-6 col-lg-4 mb-2">
	<img src="<?php echo e(asset('/img/handphone.png')); ?>" class="img-fluid rounded">
	</div>
	<div class="col-md-6 col-lg-4 mb-2">
	<img src="<?php echo e(asset('/img/motor.png')); ?>" class="img-fluid rounded">
	</div>
	<div class="col-md-6 col-lg-4 mb-2">
	<img src="<?php echo e(asset('/img/laptop.png')); ?>" class="img-fluid rounded">
	</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Lenovo\Documents\New_folder\onlineStore\resources\views/home/index.blade.php ENDPATH**/ ?>