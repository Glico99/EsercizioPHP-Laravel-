<?php $__currentLoopData = $ideas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="mt-3">
        <div class="card">
            <div class="px-3 pt-4 pb-2">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <img style="width:50px" class="me-2 avatar-sm rounded-circle"
                            src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=<?php echo e($idea->user->name); ?>"
                            alt="<?php echo e($idea->user->name); ?>">
                        <div>
                            <h5 class="card-title mb-0"><a href="#"> <?php echo e($idea->user->name); ?>

                                </a></h5>
                        </div>
                    </div>
                    <?php if(auth()->guard()->check()): ?>
                        <a href=" <?php echo e(route('showIdea', $idea->id)); ?> ">Show</a>
                        <a href=" <?php echo e(route('editIdea', $idea->id)); ?> ">Edit</a>
                        <form action=" <?php echo e(route('deleteIdea', $idea->id)); ?> " method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('delete'); ?>
                            <button class="btn btn-danger">X</button>
                        </form>
                    <?php endif; ?>
                </div>
            </div>
            <div class="card-body">
                <p class="fs-6 fw-light text-muted">
                    <?php echo e($idea->content); ?>

                </p>
                <div class="d-flex justify-content-between">
                    <div>
                        <a href="#" class="fw-light nav-link fs-6"> <span class="fas fa-heart me-1">
                            </span> 100 </a>
                    </div>
                    <div>
                        <span class="fs-6 fw-light text-muted"> <span class="fas fa-clock"> </span>
                            <?php echo e($idea->created_at); ?> </span>
                    </div>
                </div>
                <!-- COMMENTI -->
                <?php echo $__env->make('dashboardElements.comments', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php echo e($ideas->links()); ?>

<?php /**PATH /home/end/projects/Implementazione-CRUD-main/resources/views/dashboardElements/ideas.blade.php ENDPATH**/ ?>