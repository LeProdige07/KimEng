<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use App\Models\ClientSatisfait;
use App\Models\Formation;
use App\Models\Logette;
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
        $count_partenaires = count(ClientSatisfait::all());
        $count_projets = count(Project::all());
        $count_formations = count(Formation::all());

        return view('client.home', compact('services','temoignages', 'nouvelles','count_partenaires','count_formations','count_projets'));
    }

    public function about(){
        $personnels = Personnel::where('status', 1)->limit(3)->get();
        $services = Service::where('status', 1)->limit(6)->get();
        $galeries = Galery::all();
        $count_partenaires = count(ClientSatisfait::all());
        $count_projets = count(Project::all());
        $count_formations = count(Formation::all());

        return view('client.about', compact('services','personnels','galeries','count_partenaires','count_formations','count_projets'));
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
    public function formations_us(){
        $services = Service::where('status', 1)->limit(6)->get();
        $formations = Formation::all()->where('status', 1);
        return view('client.formations',compact('services','formations'));
    }

    public function team(){
        $services = Service::where('status', 1)->limit(6)->get();
        $personnels = Personnel::all()->where('status', 1);
        return view('client.team',compact('services','personnels'));
    }

    public function logette(){
        $services = Service::where('status', 1)->limit(6)->get();
        $logettes = Logette::where('status', 1)->limit(6)->get();
        return view('client.logette',compact('services','logettes'));
    }

    public function precommandes_logettes(){
        $services = Service::where('status', 1)->limit(6)->get();
        return view('client.precommandes',compact('services'));
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

    public function single_projet($id){
        $services = Service::where('status', 1)->limit(6)->get();
        $project = Project::find($id);

        return view('client.single-projet',compact('services','project'));
    }
    public function single_formation($id){
        $services = Service::where('status', 1)->limit(6)->get();
        $formation = Formation::find($id);

        return view('client.single-formation',compact('services','formation'));
    }
}
