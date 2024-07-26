<?php $__env->startSection('pageContent'); ?>
    <div class="mt-3">
        <div class="card">
            <div class="px-3 pt-4 pb-2">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <img style="width:50px" class="me-2 avatar-sm rounded-circle"
                            src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Mario" alt="Mario Avatar">
                        <div>
                            <h5 class="card-title mb-0"><a href="#"> Mario
                                </a></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <?php if($editing ?? false): ?>
                    <form action=" <?php echo e(route('updateIdea', $idea->id)); ?> " method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('put'); ?>
                        <div class="mb-3">
                            <textarea class="form-control" name="updated" id="idea" rows="3"> <?php echo e($idea->content); ?> </textarea>
                        </div>
                        <div class="">
                            <button class="btn btn-dark"> Update </button>
                        </div>
                    </form>
                <?php else: ?>
                    <p class="fs-6 fw-light text-muted">
                        <?php echo e($idea->content); ?>

                    </p>
                <?php endif; ?>
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
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('shared.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/end/projects/Implementazione-CRUD-main/resources/views/idea.blade.php ENDPATH**/ ?>