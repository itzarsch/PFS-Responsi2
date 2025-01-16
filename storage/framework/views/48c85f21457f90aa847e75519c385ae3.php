

<?php $__env->startSection('content'); ?>
<div class="container">
    <?php if($cart->items->isEmpty()): ?>
        <h2>Your cart is empty!</h2>
    <?php else: ?>
        <h2>Your Cart</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Book Title</th>
                    <th>Genre</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $cart->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item->book->title); ?></td>
                        <td><?php echo e($item->book->genre); ?></td>
                        <td><?php echo e($item->quantity); ?></td>
                        <td>$<?php echo e($item->book->price * $item->quantity); ?></td>
                        <td>
                            <form action="<?php echo e(route('shop.removeItem', $item->id)); ?>" method="POST" style="display:inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger">Remove</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <div class="text-center">
            <a href="<?php echo e(route('shop.orderNow')); ?>" class="btn btn-primary">Order Now</a>
        </div>
    <?php endif; ?>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tokobuku2\resources\views/shop/cart.blade.php ENDPATH**/ ?>