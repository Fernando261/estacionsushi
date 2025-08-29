

<?php $__env->startSection('content'); ?>
<div class="grid-container">
    <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div>
            <h2 class="categoria-titulo"><?php echo e($categoria); ?></h2>
            <div class="platillos-grid">
                <?php $__currentLoopData = $platillos[$categoria] ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $platillo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <div class="platillo-card" x-data="{ open: false }">
    <!-- Tarjeta -->
    <div @click="open = true" class="platillo-content">
        <img src="data:image/png;base64,<?php echo e($platillo->imagen); ?>" 
             alt="Imagen de <?php echo e($platillo->nombre); ?>">
        <h3><?php echo e($platillo->nombre); ?></h3>
        <p>$<?php echo e(number_format($platillo->precio, 2)); ?></p>
    </div>

    <!-- Modal -->
    <template x-teleport="body">
        <div 
            x-show="open"
            x-transition.opacity
            x-cloak
            class="modal-overlay"
            x-init="$watch('open', val => document.body.style.overflow = val ? 'hidden' : '')"
        >
            <div class="modal" @click.away="open = false">
                <!-- Botón cerrar -->
                <button @click="open = false" class="modal-close">✖</button>
                
                <img src="data:image/png;base64,<?php echo e($platillo->imagen); ?>" 
                     alt="Imagen de <?php echo e($platillo->nombre); ?>">
                <h3><?php echo e($platillo->nombre); ?></h3>
                <p><?php echo e($platillo->descripcion); ?></p>
                <?php if(!empty($platillo->variedades)): ?>
                <div class="variedades">
                    <h3>Variedades:</h3>
                    <p><?php echo e($platillo->variedades); ?></p>
                </div>
            <?php endif; ?>
                <p class="precio">Precio: $<?php echo e(number_format($platillo->precio, 2)); ?></p>
            </div>
        </div>
    </template>
</div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\estacionsushi\resources\views/menu/index.blade.php ENDPATH**/ ?>