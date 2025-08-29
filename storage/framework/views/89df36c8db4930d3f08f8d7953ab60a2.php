

<?php $__env->startSection('content'); ?>
<div class="max-w-lg mx-auto p-6 bg-white rounded-xl shadow mainn">
    <h1 class="text-xl font-bold mb-4">Agregar Platillo</h1>

        <div class="back-button-container">
        <button class="btn-back" onclick="window.history.back();">← Regresar</button>
    </div>

    <form action="<?php echo e(route('admin.menu.store')); ?>" method="POST" enctype="multipart/form-data" class="space-y-4">
        <?php echo csrf_field(); ?>
        <input type="text" name="nombre" placeholder="Nombre" class="w-full border p-2 rounded" required><br><br>
        <textarea name="descripcion" placeholder="Descripción" class="w-full border p-2 rounded"></textarea><br><br>
        <input type="number" name="precio" step="0.01" placeholder="Precio" class="w-full border p-2 rounded" required><br><br>

        <select name="categoria" class="w-full border p-2 rounded" required>
            <option value="">Seleccionar Categoría</option>
            <option>Handrolls</option>
            <option>Especialidades de la casa</option>
            <option>Entradas</option>
            <option>Snacks</option>
            <option>Selectos</option>
            <option>Premium</option>
            <option>Platillos</option>
            <option>Makis</option>
            <option>Tradicionales</option>
            <option>Infantiles</option>
            <option>Coctelería sin alcohol</option>
            <option>Refrescos</option>
            <option>Coctelería con alcohol</option>
            <option>Cerveza</option>
            <option>Postres</option>
            <option>Extras</option>
        </select>
<br><br>

        <textarea name="variedades" placeholder="Variedades (opcional, ej: con queso, sin picante, extra salsa...)" 
                  class="w-full border p-2 rounded"></textarea><br><br>

        <input type="file" name="imagen" class="w-full border p-2 rounded"><br><br>

        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
            Guardar
        </button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\estacionsushi\resources\views/admin/menu/create.blade.php ENDPATH**/ ?>