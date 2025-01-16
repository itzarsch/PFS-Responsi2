

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Welcome to Admin Dashboard</h1>

    <div class="row">
        <!-- Views Count -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Views</h5>
                    <p class="card-text">Total Views: <?php echo e($viewCount); ?></p>
                    <a href="<?php echo e(route('admin.views')); ?>" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>

        <!-- Catalog Count -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Catalog</h5>
                    <p class="card-text">Total Books in Catalog: <?php echo e($catalogCount); ?></p>
                    <a href="<?php echo e(route('admin.catalog')); ?>" class="btn btn-primary">View Catalog</a>
                </div>
            </div>
        </div>

        <!-- Orders Count -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Orders</h5>
                    <p class="card-text">Total Orders: <?php echo e($orderCount); ?></p>
                    <a href="#" class="btn btn-primary">View Orders</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Income Count -->
    <div class="row mt-4">
        <div class="col-md-4 offset-md-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Income</h5>
                    <p class="card-text">Monthly Income: $<?php echo e($monthlyIncome); ?></p>
                    <p class="card-text">Yearly Income: $<?php echo e($yearlyIncome); ?></p>
                    <a href="<?php echo e(route('admin.income')); ?>" class="btn btn-primary">View Income</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Latest Orders -->
    <h3 class="mt-4">Latest Orders</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>User</th>
                <th>Status</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $latestOrders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($order->id); ?></td>
                    <td><?php echo e($order->user->name); ?></td>
                    <td><?php echo e($order->status); ?></td>
                    <td><?php echo e($order->created_at->format('d-m-Y H:i')); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tokobuku3\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>