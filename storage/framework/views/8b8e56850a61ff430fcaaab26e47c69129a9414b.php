
<?php $__env->startSection('title', $viewData['title']); ?>
<?php $__env->startSection('content'); ?>
    <div class="card mb-4">
        <div class="card-header">
            Edit Product
        </div>
        <div class="card-body">
            <?php if($errors->any()): ?>
                <ul class="alert alert-danger list-unstyled">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>- <?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            <?php endif; ?>

            <form method="POST" action="<?php echo e(route('admin.product.update', ['id' => isset($viewData['product']) ? $viewData['product']->getId() : 0])); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Nama</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input name="name" value="<?php echo e(isset($viewData['product']) ? $viewData['product']->getName() : ''); ?>" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Harga</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input name="price" value="<?php echo e(isset($viewData['product']) ? $viewData['product']->getPrice() : 0); ?>" type="number" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Image</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input class="form-control" type="file" name="image">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        &nbsp;
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea class="form-control" name="description" rows="3"><?php echo e(isset($viewData['product']) ? $viewData['product']->getDescription() : ''); ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Lenovo\Documents\New_folder\onlineStore\resources\views/admin/product/edit.blade.php ENDPATH**/ ?>