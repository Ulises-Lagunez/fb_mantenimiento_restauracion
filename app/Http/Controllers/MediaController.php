<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    /** funcion para desplegar todos los datos de la tabla */
    public function show()
    {
        $media = Media::all();
        print_r($media);
        return view('dashboard');
    }

   /** funcion para crear un registro en la tabla*/
    public function create(Request $request)    
    {
        $media = new Media();
        $media->name = $request->name; 
        $media->image = $request->image;     
        $media->description = $request->description;  
        $media->save();
        return view('dashboard');
    }

    /** funcion para actualizar un registro en la tabla*/
    public function update(Request $request, $id)
    {
        $media = Media::find($id);
        $media->name = $request->name;
        $media->image = $request->image;      
        $media->description = $request->description;  
        $media->save();
        return view('dashboard');
    }

    /** funcion para eliminar un registro en la tabla*/
    public function delete($id)
    {
        $media = Media::find($id);
        $media->delete();
        return view('dashboard');
    }

    /** funcion para buscar un registro en la tabla*/
    public function search($id)
    {
        $media = Media::find($id);
        print_r($media);
        return view('dashboard');
    }
}
