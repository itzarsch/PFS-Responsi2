

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Profile</h1>
    <p>Name: <?php echo e($user->name); ?></p>
    <p>Email: <?php echo e($user->email); ?></p>
    <a href="<?php echo e(route('password.change')); ?>" class="btn btn-primary">Change Password</a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tokobuku2\resources\views/profile.blade.php ENDPATH**/ ?>