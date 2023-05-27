<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galeries = Galery::all();
        return view('admin.galery.index',compact('galeries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'galery_image' => 'image|nullable|max:5999'
        ]);

        if ($request->hasFile('galery_image')) {
            //nom de l'image avec extension
            $fileNameWithExt = $request->file('galery_image')->getClientOriginalName();
            //nom  du fichier
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //extension
            $ext = $request->file('galery_image')->getClientOriginalExtension();
            //nom de l'image to store
            $fileNameToStrore = $filename . '_' . time() . '.' . $ext;
            //upload image et creation du dossier de stockage
            $path = $request->file('galery_image')->storeAs('public/galery_images', $fileNameToStrore);
        } else {
            $fileNameToStrore = 'noimage.jpg';
        }


        $galery = new Galery();
        $galery->image = $fileNameToStrore;
        $galery->status = 1;

        $galery->save();
        return back()->with('status', 'L\'image a été enregistrée avec succès !!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $galery = Galery::find($id)->delete();
        return back()->with('status','Image supprimée avec succès');
    }
}
