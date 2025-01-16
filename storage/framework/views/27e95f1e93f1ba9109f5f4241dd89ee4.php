

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Welcome to Admin Dashboard</h1>

    <div class="row">
        <!-- Catalog Count -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Catalog</h5>
                    <p class="card-text">Total Books in Catalog: <?php echo e($catalogCount); ?></p>
                </div>
            </div>
        </div>

        <!-- Order Count -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Orders</h5>
                    <p class="card-text">Total Orders: <?php echo e($orderCount); ?></p>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tokobuku2\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>