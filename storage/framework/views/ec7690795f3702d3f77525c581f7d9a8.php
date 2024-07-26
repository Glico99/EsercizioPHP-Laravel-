<?php if(auth()->guard()->check()): ?>
<h4> Share yours ideas </h4>
<div class="row">
    <form action=" <?php echo e(route('submitIdea')); ?> " method="post">
    <?php echo csrf_field(); ?>
        <div class="mb-3">
            <textarea class="form-control" name="content" id="idea" rows="3"></textarea>
        </div>
        <?php $__errorArgs = ['idea'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="text-danger"> <?php echo e($message); ?> </span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <div class="">
            <button class="btn btn-dark"> Share </button>
        </div>
    </form>
</div>
<?php endif; ?>
<?php if(auth()->guard()->guest()): ?>
    <span class="text text-dark">Log in to submit ideas</span>
<?php endif; ?><?php /**PATH /home/end/projects/Implementazione-CRUD-main/resources/views/dashboardElements/shareBox.blade.php ENDPATH**/ ?>