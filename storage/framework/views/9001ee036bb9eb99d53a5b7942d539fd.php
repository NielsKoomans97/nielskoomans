<div class="container py-3">
    <div class="row align-items-center">
        <?php
            $url = '';
        ?>

        <?php if($_SERVER['REQUEST_URI'] === '/'): ?>
            <i class="ti ti-chevron-right col-auto pe-0"></i>
            <div class="col-auto">
                <a href="<?php echo e(route('home')); ?>">Home</a>
            </div>
        <?php else: ?>
            <?php $__currentLoopData = $parts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $part): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <i class="ti ti-chevron-right col-auto pe-0"></i>
                <div class="col-auto">
                    <?php
                        $url .= '/' . $part;
                    ?>

                    <a href="<?php echo e($url); ?>"><?php echo e(__('common.'.$part)); ?></a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>


    </div>
</div>
<?php /**PATH C:\laragon\www\nielskoomans\resources\views/components/button-bar.blade.php ENDPATH**/ ?>