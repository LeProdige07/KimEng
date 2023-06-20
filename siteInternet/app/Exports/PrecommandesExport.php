<?php

namespace App\Exports;

use App\Models\LogetteInfo;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;

class PrecommandesExport implements FromView
{
    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    public $logette_infos;
    public function __construct($logette_infos){
        $this->logette_infos = $logette_infos;
    }
    public function view(): View
    {
        return view('exports.precommandes', [
            'logette_infos' => $this->logette_infos
        ]);
    }
}
