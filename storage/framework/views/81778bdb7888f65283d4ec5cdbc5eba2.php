

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="<?php echo e($book->cover_image); ?>" class="card-img-top" alt="<?php echo e($book->title); ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($book->title); ?></h5>
                    <p class="card-genre"><?php echo e($book->genre); ?></p>
                    <h5 class="card-price">$<?php echo e($book->price); ?></h5>
                </div>
                <div class="card-footer text-center">
                    <form action="<?php echo e(route('shop.addToCart', $book->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-cart"></i> Add to Cart
                        </button>
                        <a href="<?php echo e(route('shop.show', $book->id)); ?>" class="btn btn-primary">
                        View Details
                        </a>
                    </form>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tokobuku\resources\views/shop/index.blade.php ENDPATH**/ ?>