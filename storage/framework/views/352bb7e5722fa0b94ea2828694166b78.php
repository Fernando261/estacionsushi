

<?php $__env->startSection('content'); ?>
<div class="menu-container">

    <div class="menu-header">
        <h1>Administrar Menú</h1>
        <a href="<?php echo e(route('admin.menu.create')); ?>" class="btn-add">
           + Agregar Platillo
        </a>

        <form action="<?php echo e(route('admin.logout')); ?>" method="POST" style="display:inline;">
            <?php echo csrf_field(); ?>
            <button type="submit" class="btn-logout" onclick="return confirm('¿Cerrar sesión?')">
                Cerrar Sesión
            </button>
        </form>
    </div>

    <?php if(session('success')): ?>
        <div class="alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <div class="menu-grid">
        <?php $__currentLoopData = $platillos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $platillo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="menu-card">
                <img src="data:image/png;base64,<?php echo e($platillo->imagen); ?>" alt="Imagen de <?php echo e($platillo->nombre); ?>">
                <h2><?php echo e($platillo->nombre); ?></h2>
                <p class="descripcion"><?php echo e($platillo->descripcion); ?></p>
                <p class="precio">$<?php echo e($platillo->precio); ?></p>
                <p class="categoria">Categoría: <?php echo e($platillo->categoria); ?></p>
                <?php if(!empty($platillo->variedades)): ?>
                <div class="variedades">
                    <h3>Variedades:</h3>
                    <p><?php echo e($platillo->variedades); ?></p>
                </div>
            <?php endif; ?>

                <div class="acciones">
                    <a href="<?php echo e(route('admin.menu.edit', $platillo->id)); ?>" class="btn-edit">
                        Editar
                    </a>
                    <form action="<?php echo e(route('admin.menu.destroy', $platillo->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn-delete"
                                onclick="return confirm('¿Seguro que quieres eliminar este platillo?')">
                            Eliminar
                        </button>
                    </form>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminapp', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\estacionsushi\resources\views/admin/menu/index.blade.php ENDPATH**/ ?>