<nav class="navbar navbar-expand-lg bg-dark border-bottom border-bottom-dark ticky-top bg-body-tertiary"
    data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand fw-light" href="/"><span class="fas fa-brain me-1"> </span>Ideas</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <?php if(auth()->guard()->guest()): ?>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Register</a>
                    </li>
                <?php endif; ?>
                <?php if(auth()->guard()->check()): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/profile"> <?php echo e(Auth::user()->name); ?> </a>
                    </li>
                    <li class="nav-item">
                        <form action=" <?php echo e(route('logoutUser')); ?> " method="post">
                            <?php echo csrf_field(); ?>
                            <button class="btn btn-danger">Log Out</button>
                        </form>
                    </li>

                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH /home/end/projects/Implementazione-CRUD-main/resources/views/shared/navBar.blade.php ENDPATH**/ ?>