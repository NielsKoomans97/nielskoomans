<?php $__env->startSection('content'); ?>
    <section class="content padding-y-5">
        <div class="container">
            <div class="col flex-column">
                <div class="row justify-content-center align-items-center">
                    <div class="col-4 col-md-6 col-sm-12 col-12">
                        <form method="POST" action="<?php echo e(route('register')); ?>" class="padding-2">
                            <?php echo csrf_field(); ?>

                            <div class="pb-3">
                                <p>
                                    <small>
                                        <b>Welkom!</b><br>
                                        Maak een account aan om verder te gaan.
                                    </small>
                                </p>
                            </div>

                            <div class="mb-4">
                                <label for="name" class="form-label">
                                    <small><b>Naam</b></small>
                                </label>
                                <input type="text" name="name" id="name" class="mb-1" required
                                    autofocus>
                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <label>
                                        <?php dump($message); ?>
                                        <small><i class="ti ti-info-circle me-2"></i><b><?php echo e($message); ?></b></small>
                                    </label>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="mb-4">
                                <label for="email" class="form-label">
                                    <small><b>E-mailadres</b></small>
                                </label>
                                <input type="email" name="email" id="email" class="mb-1" required
                                    autofocus>
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <label>
                                        <small><i class="ti ti-info-circle me-2"></i><b><?php echo e($message); ?></b></small>
                                    </label>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="mb-4">
                                <label for="password" class="form-label">
                                    <small><b>Wachtwoord</b></small>
                                </label>
                                <input type="password" name="password" id="password" class="mb-1" required>
                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <label>
                                        <small><i class="ti ti-info-circle me-2"></i><b><?php echo e($message); ?></b></small>
                                    </label>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="mb-4">
                                <label for="password_confirmation" class="form-label">
                                    <small><b>Bevestig Wachtwoord</b></small>
                                </label>
                                <input type="password" name="password_confirmation" id="password_confirmation"
                                    class="mb-1" required>
                                <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <label>
                                        <small><i class="ti ti-info-circle me-2"></i><b><?php echo e($message); ?></b></small>
                                    </label>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="row pt-5 m-0 gap-3 justify-content-end align-items-center">
                                <a href="<?php echo e(route('login')); ?>" class="d-flex align-items-center gap-2">
                                    <i class="ti ti-login"></i>
                                    Inloggen
                                </a>
                                <button type="submit" class="d-flex align-items-center align-self-end gap-2">
                                    <i class="ti ti-user-plus"></i>
                                    Registreren
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('base.layout', ['title' => 'Registreren'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\nielskoomans\resources\views/auth/register.blade.php ENDPATH**/ ?>