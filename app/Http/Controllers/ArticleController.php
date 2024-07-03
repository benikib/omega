<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formation;
use App\Models\Autre;
use App\Models\Utilisateur;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){

        $formations = Formation::all();
        $autres = Autre::all();

        //dd($formations);  
        $i = 0;
        return view("pages.actualite",compact("formations","i","autres"));

    }
}
