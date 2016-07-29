<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


class addUserController extends Controller
{
  public function index()
  {
    return view('AtalanViews/view4');
  }

  public function addUp()
  {
    include(app_path().'/phpScripts/createUser.php');
    return redirect()->action('WelcomeController@index');
  }
}
