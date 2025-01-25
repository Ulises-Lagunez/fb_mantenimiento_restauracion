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

    /** funcion para get index*/
    public function index()
    {
        $media = Media::all();
        return view('dashboard', compact('media'));
    }

    /** funcion para get create*/
    public function create()
    {
        return view('media_new');
    }
    

   /** funcion para crear un registro en la tabla*/
    public function storage(Request $request)    
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'description' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $nuevo = new Media();
        $nuevo = $request->all();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/storage');
            $image->move($destinationPath, $name);
            $nuevo['image'] = $name;
        }   
        Media::create($nuevo);
        return redirect()->route('dashboard', compact('media'))->with('success', 'Media created successfully.');
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
