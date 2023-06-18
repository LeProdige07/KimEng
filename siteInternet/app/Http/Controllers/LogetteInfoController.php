<?php

namespace App\Http\Controllers;

use App\Models\LogetteInfo;
use Illuminate\Http\Request;

class LogetteInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $request->validate([
            'nom' => 'required',
            'postnom' => 'required',
            'prenom' => 'required',
            'fonction' => 'required',
            'email' => 'required|email',
            'tel' => 'digits:10|numeric',
            'commune' => 'required|string',
            'quartier' => 'string',
            'rue' => 'string',
        ]);
  
        LogetteInfo::create($request->all());
  
        return redirect()->back()
                         ->with(['status' => 'Merci d\'avoir précommandé notre logette intelligente. Elle sera bientôt sur le marché.']);
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
        //
    }
}
