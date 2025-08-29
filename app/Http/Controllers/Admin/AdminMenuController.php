<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Platillo;
use Illuminate\Http\Request;

class AdminMenuController extends Controller
{
    // Mostrar lista de platillos
    public function index()
    {
        $platillos = Platillo::all();
        return view('admin.menu.index', compact('platillos'));
    }

    // Formulario de creación
    public function create()
    {
        return view('admin.menu.create');
    }

    // Guardar un platillo nuevo
    public function store(Request $request)
    {
        // Validación de datos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'precio' => 'required|numeric',
            'variedades' => 'nullable|string',
            'categoria' => 'required|string',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $menu = new Platillo();
        $menu->nombre = $request->nombre;
        $menu->descripcion = $request->descripcion;
        $menu->precio = $request->precio;
        $menu->variedades = $request->variedades;
        $menu->categoria = $request->categoria;

        // Guardar la imagen como Base64
        if ($request->hasFile('imagen')) {
            $archivo = $request->file('imagen');
            $menu->imagen = base64_encode(file_get_contents($archivo));
        }

        $menu->save();

        return redirect()->route('admin.menu.index')->with('success', 'Platillo agregado correctamente.');
    }

    // Formulario de edición
    public function edit($id)
    {
        $platillo = Platillo::findOrFail($id);
        return view('admin.menu.edit', compact('platillo'));
    }

    // Actualizar un platillo
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'precio' => 'required|numeric',
            'variedades' => 'nullable|string',
            'categoria' => 'required|string',
            'imagen' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $menu = Platillo::findOrFail($id);
        $menu->nombre = $request->nombre;
        $menu->descripcion = $request->descripcion;
        $menu->precio = $request->precio;
        $menu->variedades = $request->variedades;
        $menu->categoria = $request->categoria;

        // Si se sube nueva imagen, reemplazarla
        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $menu->imagen = file_get_contents($file->getRealPath());
        }

        $menu->save();

        return redirect()->route('admin.menu.index')->with('success', 'Platillo actualizado correctamente.');
    }

    // Eliminar un platillo
    public function destroy($id)
    {
        $platillo = Platillo::findOrFail($id);
        $platillo->delete();

        return redirect()->route('admin.menu.index')->with('success', 'Platillo eliminado correctamente.');
    }
}
