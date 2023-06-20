<?php

namespace App\Http\Controllers;

use App\Exports\PrecommandesExport;
use App\Models\LogetteInfo;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class LogetteInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $logette_infos = LogetteInfo::all();

        return view('admin.precommandes.index', compact('logette_infos'));
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
            'commune' => 'required|string',

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

    public function precommandes_export_excel(){
        $logette_infos = LogetteInfo::orderBy('id','desc')->get();
        // return Excel::download(new PrecommandesExport($logette_infos), 'precommandes-logettes.csv', \Maatwebsite\Excel\Excel::CSV);
        return Excel::download(new PrecommandesExport($logette_infos), 'precommandes-logettes.xlsx');
    }
    public function precommandes_export_pdf(){
        $logette_infos = LogetteInfo::orderBy('id','desc')->get();
        $pdf = Pdf::loadView('pdf.precommandes',[
            'logette_infos' => $logette_infos
        ]);
        // return $pdf->stream();
        return $pdf->download('precommandes-logettes.pdf');
    }
}
