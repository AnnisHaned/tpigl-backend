<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Bienvenue à TPIGL';
        return view('pages.accueil')->with('title', $title);
    }

    public function profil(){
        $data = array(
            'title' => 'Annis',
            'nom' => 'Annis',
            'prenom' => 'Annis',
            'groupe' => 'Annis',
            'email' => 'Annis',

        );
        return view('pages.profil')->with($data);
    }
}
