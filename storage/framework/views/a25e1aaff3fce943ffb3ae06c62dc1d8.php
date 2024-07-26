<?php echo $__env->make('shared.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('shared.navBar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container py-4">
    <?php echo $__env->make('shared.navList', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="col-6">
        <?php echo $__env->yieldContent('pageContent'); ?>
    </div>
    <div class="col-3">
        <?php echo $__env->make('shared.searchBox', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('shared.follow', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
</div>
<?php echo $__env->make('shared.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /home/end/projects/Implementazione-CRUD-main/resources/views/shared/layout.blade.php ENDPATH**/ ?>