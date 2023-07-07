<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FormationController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $formations = Formation::all();
        return view('admin.formations.index',compact('formations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.formations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'formation_image1' => 'image|nullable|max:5999',
            'formation_image2' => 'image|nullable|max:5999',
            'formation_image3' => 'image|nullable|max:5999',
            'formation_image4' => 'image|nullable|max:5999',
        ]);

        if ($request->hasFile('formation_image1') && $request->hasFile('formation_image2')
        && $request->hasFile('formation_image3') && $request->hasFile('formation_image4') ) {
            //nom de l'image avec extension
            $fileNameWithExt1 = $request->file('formation_image1')->getClientOriginalName();
            $fileNameWithExt2 = $request->file('formation_image2')->getClientOriginalName();
            $fileNameWithExt3 = $request->file('formation_image3')->getClientOriginalName();
            $fileNameWithExt4 = $request->file('formation_image4')->getClientOriginalName();
            //nom  du fichier
            $filename1 = pathinfo($fileNameWithExt1, PATHINFO_FILENAME);
            $filename2 = pathinfo($fileNameWithExt2, PATHINFO_FILENAME);
            $filename3 = pathinfo($fileNameWithExt3, PATHINFO_FILENAME);
            $filename4 = pathinfo($fileNameWithExt4, PATHINFO_FILENAME);
            //extension
            $ext1 = $request->file('formation_image1')->getClientOriginalExtension();
            $ext2 = $request->file('formation_image2')->getClientOriginalExtension();
            $ext3 = $request->file('formation_image3')->getClientOriginalExtension();
            $ext4 = $request->file('formation_image4')->getClientOriginalExtension();
            //nom de l'image to store
            $fileNameToStrore1 = $filename1 . '_' . time() . '.' . $ext1;
            $fileNameToStrore2 = $filename2 . '_' . time() . '.' . $ext2;
            $fileNameToStrore3 = $filename3 . '_' . time() . '.' . $ext3;
            $fileNameToStrore4 = $filename4 . '_' . time() . '.' . $ext4;
            //upload image et creation du dossier de stockage
            $path1 = $request->file('formation_image1')->storeAs('public/formation_images', $fileNameToStrore1);
            $path2 = $request->file('formation_image2')->storeAs('public/formation_images', $fileNameToStrore2);
            $path3 = $request->file('formation_image3')->storeAs('public/formation_images', $fileNameToStrore3);
            $path4 = $request->file('formation_image4')->storeAs('public/formation_images', $fileNameToStrore4);
        } else {
            $fileNameToStrore1 = 'noimage.jpg';
            $fileNameToStrore2 = 'noimage.jpg';
            $fileNameToStrore3 = 'noimage.jpg';
            $fileNameToStrore4 = 'noimage.jpg';
        }


        $formation = new formation();
        $formation->formation_name = $request->input('name');
        $formation->formation_description = $request->input('description');
        $formation->formation_image1 = $fileNameToStrore1;
        $formation->formation_image2 = $fileNameToStrore2;
        $formation->formation_image3 = $fileNameToStrore3;
        $formation->formation_image4 = $fileNameToStrore4;

        $formation->status = 1;

        $formation->save();
        return back()->with('status', 'Le projet a été enregistré avec succès !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $formation = formation::find($id);
        return view('admin.formations.edit', compact('formation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'formation_name' => 'required',
            'formation_description' => 'required',
            'formation_image1' => 'image|nullable|max:5999',
            'formation_image2' => 'image|nullable|max:5999',
            'formation_image3' => 'image|nullable|max:5999',
            'formation_image4' => 'image|nullable|max:5999',
        ]);

        $formation = formation::find($id);
        $formation->formation_name = $request->input('formation_name');
        $formation->formation_description = $request->input('formation_description');

        if ($request->hasFile('formation_image1') && $request->hasFile('formation_image2')
        && $request->hasFile('formation_image3') && $request->hasFile('formation_image4')) {
            //nom de l'image avec extension
            $fileNameWithExt1 = $request->file('formation_image1')->getClientOriginalName();
            $fileNameWithExt2 = $request->file('formation_image2')->getClientOriginalName();
            $fileNameWithExt3 = $request->file('formation_image3')->getClientOriginalName();
            $fileNameWithExt4 = $request->file('formation_image4')->getClientOriginalName();
            //nom  du fichier
            $filename1 = pathinfo($fileNameWithExt1, PATHINFO_FILENAME);
            $filename2 = pathinfo($fileNameWithExt2, PATHINFO_FILENAME);
            $filename3 = pathinfo($fileNameWithExt3, PATHINFO_FILENAME);
            $filename4 = pathinfo($fileNameWithExt4, PATHINFO_FILENAME);
            //extension
            $ext1 = $request->file('formation_image1')->getClientOriginalExtension();
            $ext2 = $request->file('formation_image2')->getClientOriginalExtension();
            $ext3 = $request->file('formation_image3')->getClientOriginalExtension();
            $ext4 = $request->file('formation_image4')->getClientOriginalExtension();
            //nom de l'image to store
            $fileNameToStrore1 = $filename1 . '_' . time() . '.' . $ext1;
            $fileNameToStrore2 = $filename2 . '_' . time() . '.' . $ext2;
            $fileNameToStrore3 = $filename3 . '_' . time() . '.' . $ext3;
            $fileNameToStrore4 = $filename4 . '_' . time() . '.' . $ext4;
            //upload image et creation du dossier de stockage
            $path1 = $request->file('formation_image1')->storeAs('public/formation_images', $fileNameToStrore1);
            $path2 = $request->file('formation_image2')->storeAs('public/formation_images', $fileNameToStrore2);
            $path3 = $request->file('formation_image3')->storeAs('public/formation_images', $fileNameToStrore3);
            $path4 = $request->file('formation_image4')->storeAs('public/formation_images', $fileNameToStrore4);

            if ($formation->formation_image1 != 'noimage.jpg' && $formation->formation_image2 != 'noimage.jpg'
            && $formation->formation_image3 != 'noimage.jpg' && $formation->formation_image4 != 'noimage.jpg') {
                Storage::delete('public/formation_images/' . $formation->formation_image1);
                Storage::delete('public/formation_images/' . $formation->formation_image2);
                Storage::delete('public/formation_images/' . $formation->formation_image3);
                Storage::delete('public/formation_images/' . $formation->formation_image4);
            }

            $formation->formation_image1 = $fileNameToStrore1;
            $formation->formation_image2 = $fileNameToStrore2;
            $formation->formation_image3 = $fileNameToStrore3;
            $formation->formation_image4 = $fileNameToStrore4;
        }

        $formation->update();

        return back()->with('status', 'Le projet a été modifié avec succès !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $formation = formation::find($id);

        if ($formation->formation_image1 != 'noimage.jpg' && $formation->formation_image2 != 'noimage.jpg'
        && $formation->formation_image3 != 'noimage.jpg' && $formation->formation_image4 != 'noimage.jpg') {
            Storage::delete('public/formation_images/' . $formation->formation_image1);
            Storage::delete('public/formation_images/' . $formation->formation_image2);
            Storage::delete('public/formation_images/' . $formation->formation_image3);
            Storage::delete('public/formation_images/' . $formation->formation_image4);
        }

        $formation->delete();

        return back()->with('status', 'Le projet a été supprimé avec succès !!');
    }

    public function activer_formation($id)
    {

        $formation = Formation::find($id);

        $formation->status = 1;

        $formation->save();

        return back();
    }
    public function desactiver_formation($id)
    {

        $formation = Formation::find($id);

        $formation->status = 0;

        $formation->save();

        return back();
    }
}
