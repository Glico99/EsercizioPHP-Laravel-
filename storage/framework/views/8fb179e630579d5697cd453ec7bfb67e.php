<div>
    <form action=" <?php echo e(route('submitComment', $idea->id)); ?> " method="post">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <textarea class="fs-6 form-control" name="comment" rows="1"></textarea>
        </div>
        <div>
            <button class="btn btn-primary btn-sm"> Post Comment </button>
        </div>
    </form>
    <hr>
    <?php $__currentLoopData = $idea->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="d-flex align-items-start">
            <img style="width:35px" class="me-2 avatar-sm rounded-circle"
                src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Luigi" alt="Luigi Avatar">
            <div class="w-100">
                <div class="d-flex justify-content-between">
                    <h6 class="">Luigi
                    </h6>
                    <small class="fs-6 fw-light text-muted"> <?php echo e($comment->created_at); ?> </small>
                </div>
                <p class="fs-6 mt-3 fw-light">
                    <?php echo e($comment->content); ?>

                </p>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div>
<?php /**PATH /home/end/projects/Implementazione-CRUD-main/resources/views/dashboardElements/comments.blade.php ENDPATH**/ ?>