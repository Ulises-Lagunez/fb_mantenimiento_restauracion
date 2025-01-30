<?php

namespace App\Http\Controllers;
use App\Models\Media;
use Illuminate\Http\Request;

class MediaController extends Controller
{

    // FUNCIÓN INDEX PARA ENVIAR MEDIOS A DASHBOARD

    public function index()
    {
        $media = Media::all();
        return view('dashboard',compact('media'));
    }

    // FUNCIÓN PARA CREAR UN NUEVO MEDIO

    public function create()
    {
        $media = new Media();
        return view('media_new', compact('media'));
    }

    // FUNCIÓN PARA ALMACENAR NUEVO MEDIO EN BASE DE DATOS
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:media',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|unique:media',
            'section' => 'required',
            'description' => 'required'
        ],
        [
            'name.required' => 'Se requiere un nombre para el registro.',
            'name.unique' => 'El nombre ya existe.',
            'image.required' => ' No se selecciono ningun archivo.',
            'image.image' => 'Debe de ser un archivo de tipo imagen.',
            'image.mimes' => 'El archcivo no tiene extencion de imagen (jpg, png, gif, jpeg, svg).',
            'image.max' => 'El archivo es demaciado grande',
            'section.required' => 'La imagen es requerida',
            'description.required' => 'Se requiere una descripción para el medio'
        ]);

        $medio = Media::create($request->all());
        if($request->hasFile('image')){
            $imagenUpload = $request->file('image')->store('media'); # medios/nombre_imagen.jpg
            $imagenUpload = explode('/', $imagenUpload)[1]; # nombre_imagen.jpg
            $medio->image = $imagenUpload;
            $medio->save();
            return redirect()->route('dashboard')->with('succes','Imagen guardada con exito');
        }
        
    }

    // FUNCIÓN PARA EDITAR UN MEDIO

    public function edit($id){
        // RECUPERA EL OBJETO A EDITAR DE LA BASE DE DATOS
        $media = Media::find($id);

        return view('edit-media', compact('media'));

    }
    //FUNCIÓN PARA ACTUALIZAR UN MEDIO
    public function update(Request $request, $id){
        echo('Aqui se actualizara el medio');
    }

    // FUNCIÓN PARA ELIMINAR UN REGISTRO

    public function delete($id){
        echo('Se eliminara un registro');
    }
}
