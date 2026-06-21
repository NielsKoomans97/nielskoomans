<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col flex-column">
            <?php if(auth()->guard()->check()): ?>
                <div class="row pt-2 toolstrip">
                    <a href="<?php echo e(route('chapters.create')); ?>">
                        <i class="ti ti-playlist-add"></i> Nieuw hoofdstuk
                    </a>
                </div>
            <?php endif; ?>

            <div class="row pt-3">
                <?php if(auth()->guard()->check()): ?>
                    <?php $__currentLoopData = $chapters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chapter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-4 mb-4">
                            <a href="<?php echo e(route('chapters.show', $chapter)); ?>" class="card h-100 text-decoration-none">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo e($chapter->title); ?></h5>
                                    <p class="card-text"><?php echo e(Str::limit($chapter->content, 100)); ?></p>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
                <?php if(auth()->guard()->guest()): ?>
                    <p>Log in om alle hoofdstukken te bekijken.</p>
                <?php endif; ?>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('base.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\nielskoomans\resources\views/home.blade.php ENDPATH**/ ?>