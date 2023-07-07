<?php

namespace App\Exports;

use App\Models\Contact;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;

class ContactsExport implements FromView
{
    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    public $contacts;
    public function __construct($contacts){
        $this->contacts = $contacts;
    }
    public function view(): View
    {
        return view('exports.contacts', [
            'contacts' => $this->contacts
        ]);
    }
}
