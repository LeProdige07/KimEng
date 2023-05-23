<?php

namespace App\Http\Controllers;

use App\Models\ClientSatisfait;
use App\Models\Nouvelle;
use App\Models\Personnel;
use App\Models\Project;
use App\Models\Service;
use App\Models\Temoignage;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function home(){

        $services = Service::where('status', 1)->limit(4)->get();
        $temoignages = Temoignage::all()->where('status', 1);
        $nouvelles = Nouvelle::all()->where('status', 1);

        return view('client.home', compact('services','temoignages', 'nouvelles'));
    }

    public function about(){

        $services = Service::where('status', 1)->limit(6)->get();

        return view('client.about', compact('services'));
    }

    public function services_us(){

        $services = Service::where('status', 1)->limit(6)->get();
        $clientsatisfaits = ClientSatisfait::all()->where('status', 1);
        $temoignages = Temoignage::all()->where('status', 1);
        return view('client.services', compact('services','clientsatisfaits','temoignages'));
    }

    public function projets_us(){
        $services = Service::where('status', 1)->limit(6)->get();
        $projects = Project::all()->where('status', 1);
        return view('client.projets',compact('services','projects'));
    }

    public function team(){
        $services = Service::where('status', 1)->limit(6)->get();
        $personnels = Personnel::all()->where('status', 1);
        return view('client.team',compact('services','personnels'));
    }

    public function logette(){
        $services = Service::where('status', 1)->limit(6)->get();
        return view('client.logette',compact('services'));
    }

    public function news(){

        $services = Service::where('status', 1)->limit(6)->get();
        $nouvelles = Nouvelle::all()->where('status', 1);

        return view('client.news',compact('services','nouvelles'));
    }

    public function contact(){
        $services = Service::where('status', 1)->limit(6)->get();

        return view('client.contact',compact('services'));
    }

    public function single_new($id){
        $services = Service::where('status', 1)->limit(6)->get();
        $nouvelle = Nouvelle::find($id);
        $recentnouvelles = Nouvelle::orderBy('id', 'desc')->where('status', 1)->limit(3)->get();
        return view('client.single-new',compact('services','nouvelle','recentnouvelles'));
    }
}
