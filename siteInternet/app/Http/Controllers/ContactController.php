<?php

namespace App\Http\Controllers;

use App\Exports\ContactsExport;
use App\Models\Contact;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::all();

        return view('admin.contacts.contact', compact('contacts'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:10|numeric',
            'subject' => 'required',
            'message' => 'required'
        ]);

        Contact::create($request->all());

        return redirect()->back()
            ->with(['success' => 'Merci d\'avoir contacté Kim Engineering . Nous allons vous recontacter sous peu.']);
    }

    public function contacts_export_excel(){
        $contacts = Contact::orderBy('id','desc')->get();
        // return Excel::download(new PrecommandesExport($logette_infos), 'precommandes-logettes.csv', \Maatwebsite\Excel\Excel::CSV);
        return Excel::download(new ContactsExport($contacts), 'mails-contact.xlsx');
    }
}
