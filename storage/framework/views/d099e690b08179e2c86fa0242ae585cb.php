

<?php $__env->startSection('content'); ?>
<div class="container">  
    <h1><?php echo e($book->title); ?></h1>
    <div class="row">
        <div class="col-md-6">
            <img src="<?php echo e($book->cover_image); ?>" class="img-fluid" alt="<?php echo e($book->title); ?>">
        </div>
        <div class="col-md-6">
            <h5>Genre: <?php echo e($book->genre); ?></h5>
            <h5>Author: <?php echo e($book->author); ?></h5>
            <p><?php echo e($book->description); ?></p>
            <h5>Price: $<?php echo e($book->price); ?></h5>
            <form action="<?php echo e(route('shop.addToCart', $book->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="quantity">Quantity:</label>
                    <input type="number" id="quantity" name="quantity" class="form-control" value="1" min="1">
                </div>
                <button type="submit" class="btn btn-primary mt-3">
                    <i class="bi bi-cart"></i> Add to Cart
                </button>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tokobuku3\resources\views/shop/show.blade.php ENDPATH**/ ?>