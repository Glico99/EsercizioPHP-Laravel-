<?php $__env->startSection('pageContent'); ?>
        <?php echo $__env->make('dashboardElements.flashMessage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('dashboardElements.shareBox', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <hr>
        <?php echo $__env->make('dashboardElements.ideas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('shared.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/end/projects/Implementazione-CRUD-main/resources/views/dashboard.blade.php ENDPATH**/ ?>