

<?php $__env->startSection('content'); ?>
<div class="max-w-lg mx-auto p-6 mainn">
    <h1 class="text-xl font-bold mb-4">Editar Platillo</h1>

        <div class="back-button-container">
        <button class="btn-back" onclick="window.history.back();">← Regresar</button>
    </div>

    <form action="<?php echo e(route('admin.menu.update', $platillo->id)); ?>" method="POST" enctype="multipart/form-data" class="space-y-4">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <input type="text" name="nombre" value="<?php echo e(old('nombre', $platillo->nombre)); ?>" placeholder="Nombre" required><br><br>
        <textarea name="descripcion" placeholder="Descripción"><?php echo e(old('descripcion', $platillo->descripcion)); ?></textarea><br><br>
        <input type="number" name="precio" step="0.01" value="<?php echo e(old('precio', $platillo->precio)); ?>" placeholder="Precio" required><br><br>
        <select name="categoria" required>
            <option value="">Seleccionar Categoría</option>
            <option <?php if($platillo->categoria=='Handrolls'): ?> selected <?php endif; ?>>Handrolls</option>
            <option <?php if($platillo->categoria=='Especialidades de la casa'): ?> selected <?php endif; ?>>Especialidades de la casa</option>
            <option <?php if($platillo->categoria=='Entradas'): ?> selected <?php endif; ?>>Entradas</option>
            <option <?php if($platillo->categoria=='Snacks'): ?> selected <?php endif; ?>>Snacks</option>
            <option <?php if($platillo->categoria=='Selectos'): ?> selected <?php endif; ?>>Selectos</option>
            <option <?php if($platillo->categoria=='Premium'): ?> selected <?php endif; ?>>Premium</option>
            <option <?php if($platillo->categoria=='Platillos'): ?> selected <?php endif; ?>>Platillos</option>
            <option <?php if($platillo->categoria=='Makis'): ?> selected <?php endif; ?>>Makis</option>
            <option <?php if($platillo->categoria=='Tradicionales'): ?> selected <?php endif; ?>>Tradicionales</option>
            <option <?php if($platillo->categoria=='Infantiles'): ?> selected <?php endif; ?>>Infantiles</option>
            <option <?php if($platillo->categoria=='Coctelería sin alcohol'): ?> selected <?php endif; ?>>Coctelería sin alcohol</option>
            <option <?php if($platillo->categoria=='Refrescos'): ?> selected <?php endif; ?>>Refrescos</option>
            <option <?php if($platillo->categoria=='Coctelería con alcohol'): ?> selected <?php endif; ?>>Coctelería con alcohol</option>
            <option <?php if($platillo->categoria=='Cerveza'): ?> selected <?php endif; ?>>Cerveza</option>
            <option <?php if($platillo->categoria=='Postres'): ?> selected <?php endif; ?>>Postres</option>
            <option <?php if($platillo->categoria=='Extras'): ?> selected <?php endif; ?>>Extras</option>
        </select>
<br><br>
        <textarea name="variedades" placeholder="Variedades (opcional)"><?php echo e(old('variedades', $platillo->variedades)); ?></textarea>
<br><br>
        <input type="file" name="imagen">
        <br><br>
        <button type="submit">Guardar</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\estacionsushi\resources\views/admin/menu/edit.blade.php ENDPATH**/ ?>