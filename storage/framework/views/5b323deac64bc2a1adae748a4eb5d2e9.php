<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo e($title ?? 'Dagboek'); ?></title>

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="/dist/app.css">
    <script src="/dist/app.js" defer></script>
</head>

<body>
    <header>
        <section class="header">
            <div class="container">
                <div class="row justify-content-between align-items-center padding-y-1">
                    <a class="col-auto flex-column align-items-center gap-3 transparent" href="<?php echo e(route('home')); ?>">
                        <i class="ti ti-book-2"></i>
                        <h3 class="m-0">Dagboek</h3>
                    </a>

                    <div class="col-auto flex-column align-items-center gap-3">
                        <?php if(auth()->guard()->check()): ?>
                            <div class="row align-items-center gap-2">
                                
                                <a href="<?php echo e(route('profile.edit')); ?>" class="d-flex align-items-center gap-2">
                                    <i class="ti ti-user"></i>
                                    <?php echo e(Auth::user()->name); ?>

                                </a>
                                <a href="<?php echo e(route('logout')); ?>" class="d-flex align-items-center gap-3"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="ti ti-logout"></i>

                                </a>
                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </div>
                        <?php endif; ?>

                        <?php if(auth()->guard()->guest()): ?>
                            <div class="row align-items-center">
                                <a href="<?php echo e(route('login')); ?>" class="d-flex align-items-center gap-2 login">
                                    <i class="ti ti-login"></i>
                                    Inloggen
                                </a>
                                <a href="<?php echo e(route('register')); ?>" class="d-flex align-items-center gap-2 register">
                                    <i class="ti ti-user-plus"></i>
                                    Registreren
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

            </div>
        </section>

    </header>

    <main>
        <section class="button-bar">
            <?php if (isset($component)) { $__componentOriginala7c739352c87300d9b3203c96acc5d3e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala7c739352c87300d9b3203c96acc5d3e = $attributes; } ?>
<?php $component = App\View\Components\ButtonBar::resolve(['url' => request()->path()] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button-bar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ButtonBar::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala7c739352c87300d9b3203c96acc5d3e)): ?>
<?php $attributes = $__attributesOriginala7c739352c87300d9b3203c96acc5d3e; ?>
<?php unset($__attributesOriginala7c739352c87300d9b3203c96acc5d3e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala7c739352c87300d9b3203c96acc5d3e)): ?>
<?php $component = $__componentOriginala7c739352c87300d9b3203c96acc5d3e; ?>
<?php unset($__componentOriginala7c739352c87300d9b3203c96acc5d3e); ?>
<?php endif; ?>
        </section>

        <?php echo $__env->yieldContent('content'); ?>
    </main>
</body>

</html>
<?php /**PATH C:\laragon\www\nielskoomans\resources\views/base/layout.blade.php ENDPATH**/ ?>