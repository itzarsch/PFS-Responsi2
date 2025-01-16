

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Income</h1>

    <p>Monthly Income: $<?php echo e($monthlyIncome); ?></p>
    <p>Yearly Income: $<?php echo e($yearlyIncome); ?></p>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tokobuku3\resources\views/admin/income.blade.php ENDPATH**/ ?>