<?php if(session()->has('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo e(session('success')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php elseif(session()->has('updated')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo e(session('updated')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php elseif(session()->has('deleted')): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?php echo e(session('deleted')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?><?php /**PATH /home/end/projects/Implementazione-CRUD-main/resources/views/dashboardElements/flashMessage.blade.php ENDPATH**/ ?>