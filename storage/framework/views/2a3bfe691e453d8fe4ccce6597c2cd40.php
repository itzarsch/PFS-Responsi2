

<?php $__env->startSection('content'); ?>
<section class=" text-black py-5" style="background-color: #CDC1FF;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="display-4">Books That Speak <br> to Your <b><i>Soul</i></b></h1>
                <p class="lead">Dive into a captivating collection of stories that resonate with your heart and ignite your imagination. From tales of love and adventure to journeys of self-discovery, each book is crafted to inspire and uplift.</p>
                <a href="<?php echo e(route('shop.index')); ?>" class="btn btn-light">Buy Now</a>
            </div>
            <div class="col-md-6 text-center">
                <img src="<?php echo e(asset ('images/1.1.png')); ?>" alt="Book Image" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">New Arrivals</h2>
        <div class="row">
            <!-- Display 3 new arrivals -->
            <?php $__currentLoopData = $newArrivals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 custom-card">
                        <div class="card-image-wrapper">
                            <img src="<?php echo e($book->cover_image); ?>" class="card-img-top" alt="<?php echo e($book->title); ?>">
                        </div>
                        <div class="card-body">
                            <span class="badge genre-badge"><?php echo e($book->genre); ?></span>
                            <h5 class="card-title"><?php echo e($book->title); ?></h5>
                            <h5 class="card-price">$<?php echo e($book->price); ?></h5>
                        </div>
                        <div class="card-footer">
                            <a href="<?php echo e(route('shop.show', $book->id)); ?>" class="btn btn-primary custom-btn">View Details</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tokobuku\resources\views/home.blade.php ENDPATH**/ ?>