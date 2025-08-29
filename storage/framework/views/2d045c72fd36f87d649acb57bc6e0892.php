

<?php $__env->startSection('content'); ?>
<br><br>
<div class="login-container">
    <div class="login-card">
        <h1 class="login-title">Estación Sushi</h1>
        <p class="login-subtitle">Bienvenido al panel</p>

        <?php if(session('error')): ?>
            <div class="alert-error"><?php echo e(session('error')); ?></div>
        <?php endif; ?>

        <form method="POST" action="<?php echo e(route('admin.login')); ?>">
            <?php echo csrf_field(); ?>

            <div class="form-group">
                <label for="email">Correo</label>
                <input id="email" type="email" name="email" required autofocus>
            </div>

            <div class="form-group">
                <label for="password">Contraseña</label>
                <input id="password" type="password" name="password" required>
            </div>

            <button type="submit" class="btn-login">Iniciar Sesión</button>

        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\estacionsushi\resources\views/admin/login.blade.php ENDPATH**/ ?>