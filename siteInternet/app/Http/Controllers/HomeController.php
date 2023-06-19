<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\User;
use App\Models\Online;
use App\Models\Project;
use App\Models\Service;
use App\Models\Nouvelle;
use App\Models\Personnel;
use App\Models\Temoignage;
use Illuminate\Http\Request;
use App\Models\ClientSatisfait;
use App\Models\LogetteInfo;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Online $online)
    {
        $nbr_users = count(User::all());
        $nbr_services = count(Service::all());
        $nbr_user_online =  $online->visiteurs_online();
        $nbr_projects = count(Project::all());
        $nbr_partenaires = count(ClientSatisfait::all());
        $nbr_faqs = count(Faq::all());
        $nbr_news = count(Nouvelle::all());
        $nbr_personnel = count(Personnel::all());
        $nbr_temoignages = count(Temoignage::all());
        $nbr_precommandes = count(LogetteInfo::all());
        
        return view('home',compact('nbr_user_online', 'nbr_services',
        'nbr_projects', 'nbr_users', 'nbr_partenaires','nbr_faqs', 'nbr_news',
        'nbr_personnel','nbr_temoignages','nbr_precommandes'));
    }
}
