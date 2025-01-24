<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class MediaController extends BaseController
{
    public function __construct()
    {
        $this->middleware('auth');
    } 

    /** funcion para get create*/
    public function create()
    {
        return view('media_new');
    }
    /** funcion para desplegar todos los datos de la tabla */
    public function show()
    {
        $media = Media::all();
        print_r($media);
        return view('dashboard');
    }

   /** funcion para crear un registro en la tabla*/
    public function storage(Request $request)    
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'description' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $media = new Media;
    
        if ($image = $request->file('image')) {
            $media->name = $request->name;
            $destinationPath = 'storage/';
            $profileImage = $request->name . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $media->image = "$profileImage";
            $media->description = $request->description;
            $media->save();
            return redirect()->route('dashboard')
                         ->with('success', 'Product created successfully.');
        }
        else{
            return redirect('dashboard')    
                ->with('error','Error al subir la imagen');
        }   
        
       
        
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
