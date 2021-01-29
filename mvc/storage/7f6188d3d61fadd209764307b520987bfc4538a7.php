;
<?php $__env->startSection('title','danh sach san pham'); ?>;

<?php $__env->startSection('main-content'); ?>
<table class="table table-stripped">
    <thead>
        <th>stt</th>
        <th>Tên sản phẩm</th>
        <th>tên danh mục va id danh muc</th>
    </thead>
    <tbody>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($p->name); ?></td>
            <td><?php echo e($p->category->cate_name); ?> . <?php echo e($p->cate_id); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\pt15312-web-php2\mvc\app\views/product/index.blade.php ENDPATH**/ ?>