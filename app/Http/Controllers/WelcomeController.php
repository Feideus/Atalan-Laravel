<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Utilisateur;

class WelcomeController extends Controller
{
  public function index()
  {
    $data = Utilisateur::all()->toArray();
    return view('AtalanViews/view2', compact('data'));
    
  }
}
