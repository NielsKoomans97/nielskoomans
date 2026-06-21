<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col">
            <div class="row pt-3">
                <?php if(auth()->guard()->check()): ?>
                    <form action="<?php echo e(isset($chapter) ? route('chapters.update', $chapter) : route('chapters.store')); ?>"
                        class="background-less" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php if(isset($chapter)): ?>
                            <?php echo method_field('PUT'); ?>
                        <?php endif; ?>
                        <div class="mb-3">
                            <label for="title"><b>Titel</b></label>
                            <input type="text" class="inverted" id="title" name="title"
                                value="<?php echo e($chapter->title ?? ''); ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="content"><b>Inhoud</b></label>
                            <textarea class="inverted" id="content" name="content" rows="5" required><?php echo e($chapter->content ?? ''); ?></textarea>
                        </div>
                        <button type="submit"><?php echo e(isset($chapter) ? 'Bijwerken' : 'Aanmaken'); ?></button>
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('base.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\nielskoomans\resources\views/chapters/item.blade.php ENDPATH**/ ?>