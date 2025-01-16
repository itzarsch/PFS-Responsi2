

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Catalog</h1>

    <a href="<?php echo e(route('admin.catalog.create')); ?>" class="btn btn-primary mb-3">Add New Book</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Author</th>
                <th>Stock</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($book->title); ?></td>
                    <td><?php echo e($book->description); ?></td>
                    <td><?php echo e($book->author); ?></td>
                    <td><?php echo e($book->stock); ?></td>
                    <td>
                        <a href="<?php echo e(route('admin.catalog.edit', $book->id)); ?>" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tokobuku3\resources\views/admin/catalog.blade.php ENDPATH**/ ?>