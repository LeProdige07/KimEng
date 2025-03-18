<?php

namespace App\Http\Controllers;

use App\Models\Logette;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LogetteController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $logettes = Logette::all();
        return view('admin.logettes.index',compact('logettes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.logettes.create');
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
            'logette_image1' => 'image|nullable|max:5999',
            'logette_image2' => 'image|nullable|max:5999',
            'logette_image3' => 'image|nullable|max:5999',
            'logette_image4' => 'image|nullable|max:5999',
        ]);

        if ($request->hasFile('logette_image1') && $request->hasFile('logette_image2')
        && $request->hasFile('logette_image3') && $request->hasFile('logette_image4') ) {
            //nom de l'image avec extension
            $fileNameWithExt1 = $request->file('logette_image1')->getClientOriginalName();
            $fileNameWithExt2 = $request->file('logette_image2')->getClientOriginalName();
            $fileNameWithExt3 = $request->file('logette_image3')->getClientOriginalName();
            $fileNameWithExt4 = $request->file('logette_image4')->getClientOriginalName();
            //nom  du fichier
            $filename1 = pathinfo($fileNameWithExt1, PATHINFO_FILENAME);
            $filename2 = pathinfo($fileNameWithExt2, PATHINFO_FILENAME);
            $filename3 = pathinfo($fileNameWithExt3, PATHINFO_FILENAME);
            $filename4 = pathinfo($fileNameWithExt4, PATHINFO_FILENAME);
            //extension
            $ext1 = $request->file('logette_image1')->getClientOriginalExtension();
            $ext2 = $request->file('logette_image2')->getClientOriginalExtension();
            $ext3 = $request->file('logette_image3')->getClientOriginalExtension();
            $ext4 = $request->file('logette_image4')->getClientOriginalExtension();
            //nom de l'image to store
            $fileNameToStrore1 = $filename1 . '_' . time() . '.' . $ext1;
            $fileNameToStrore2 = $filename2 . '_' . time() . '.' . $ext2;
            $fileNameToStrore3 = $filename3 . '_' . time() . '.' . $ext3;
            $fileNameToStrore4 = $filename4 . '_' . time() . '.' . $ext4;
            //upload image et creation du dossier de stockage
            $path1 = $request->file('logette_image1')->storeAs('public/logette_images', $fileNameToStrore1);
            $path2 = $request->file('logette_image2')->storeAs('public/logette_images', $fileNameToStrore2);
            $path3 = $request->file('logette_image3')->storeAs('public/logette_images', $fileNameToStrore3);
            $path4 = $request->file('logette_image4')->storeAs('public/logette_images', $fileNameToStrore4);
        } else {
            $fileNameToStrore1 = 'noimage.jpg';
            $fileNameToStrore2 = 'noimage.jpg';
            $fileNameToStrore3 = 'noimage.jpg';
            $fileNameToStrore4 = 'noimage.jpg';
        }


        $logette = new Logette();
        $logette->logette_name = $request->input('name');
        $logette->logette_description = $request->input('description');
        $logette->logette_image1 = $fileNameToStrore1;
        $logette->logette_image2 = $fileNameToStrore2;
        $logette->logette_image3 = $fileNameToStrore3;
        $logette->logette_image4 = $fileNameToStrore4;

        $logette->status = 1;

        $logette->save();
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
        $logette = Logette::find($id);
        return view('admin.logettes.edit', compact('logette'));
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
            'logette_name' => 'required',
            'logette_description' => 'required',
            'logette_image1' => 'image|nullable|max:5999',
            'logette_image2' => 'image|nullable|max:5999',
            'logette_image3' => 'image|nullable|max:5999',
            'logette_image4' => 'image|nullable|max:5999',
        ]);

        $logette = Logette::find($id);
        $logette->logette_name = $request->input('logette_name');
        $logette->logette_description = $request->input('logette_description');

        if ($request->hasFile('logette_image1') && $request->hasFile('logette_image2')
        && $request->hasFile('logette_image3') && $request->hasFile('logette_image4')) {
            //nom de l'image avec extension
            $fileNameWithExt1 = $request->file('logette_image1')->getClientOriginalName();
            $fileNameWithExt2 = $request->file('logette_image2')->getClientOriginalName();
            $fileNameWithExt3 = $request->file('logette_image3')->getClientOriginalName();
            $fileNameWithExt4 = $request->file('logette_image4')->getClientOriginalName();
            //nom  du fichier
            $filename1 = pathinfo($fileNameWithExt1, PATHINFO_FILENAME);
            $filename2 = pathinfo($fileNameWithExt2, PATHINFO_FILENAME);
            $filename3 = pathinfo($fileNameWithExt3, PATHINFO_FILENAME);
            $filename4 = pathinfo($fileNameWithExt4, PATHINFO_FILENAME);
            //extension
            $ext1 = $request->file('logette_image1')->getClientOriginalExtension();
            $ext2 = $request->file('logette_image2')->getClientOriginalExtension();
            $ext3 = $request->file('logette_image3')->getClientOriginalExtension();
            $ext4 = $request->file('logette_image4')->getClientOriginalExtension();
            //nom de l'image to store
            $fileNameToStrore1 = $filename1 . '_' . time() . '.' . $ext1;
            $fileNameToStrore2 = $filename2 . '_' . time() . '.' . $ext2;
            $fileNameToStrore3 = $filename3 . '_' . time() . '.' . $ext3;
            $fileNameToStrore4 = $filename4 . '_' . time() . '.' . $ext4;
            //upload image et creation du dossier de stockage
            $path1 = $request->file('logette_image1')->storeAs('public/logette_images', $fileNameToStrore1);
            $path2 = $request->file('logette_image2')->storeAs('public/logette_images', $fileNameToStrore2);
            $path3 = $request->file('logette_image3')->storeAs('public/logette_images', $fileNameToStrore3);
            $path4 = $request->file('logette_image4')->storeAs('public/logette_images', $fileNameToStrore4);

            if ($logette->logette_image1 != 'noimage.jpg' && $logette->logette_image2 != 'noimage.jpg'
            && $logette->logette_image3 != 'noimage.jpg' && $logette->logette_image4 != 'noimage.jpg') {
                Storage::delete('public/logette_images/' . $logette->logette_image1);
                Storage::delete('public/logette_images/' . $logette->logette_image2);
                Storage::delete('public/logette_images/' . $logette->logette_image3);
                Storage::delete('public/logette_images/' . $logette->logette_image4);
            }

            $logette->logette_image1 = $fileNameToStrore1;
            $logette->logette_image2 = $fileNameToStrore2;
            $logette->logette_image3 = $fileNameToStrore3;
            $logette->logette_image4 = $fileNameToStrore4;
        }

        $logette->update();

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
        $logette = Logette::find($id);

        if ($logette->logette_image1 != 'noimage.jpg' && $logette->logette_image2 != 'noimage.jpg'
        && $logette->logette_image3 != 'noimage.jpg' && $logette->logette_image4 != 'noimage.jpg') {
            Storage::delete('public/logette_images/' . $logette->logette_image1);
            Storage::delete('public/logette_images/' . $logette->logette_image2);
            Storage::delete('public/logette_images/' . $logette->logette_image3);
            Storage::delete('public/logette_images/' . $logette->logette_image4);
        }

        $logette->delete();

        return back()->with('status', 'Le projet a été supprimé avec succès !!');
    }

    public function activer_logette($id)
    {

        $logette = Logette::find($id);

        $logette->status = 1;

        $logette->save();

        return back();
    }
    public function desactiver_logette($id)
    {

        $logette = Logette::find($id);

        $logette->status = 0;

        $logette->save();

        return back();
    }
}
