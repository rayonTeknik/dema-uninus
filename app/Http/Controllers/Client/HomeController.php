<?php

namespace App\Http\Controllers\Client;

use App\Models\Home;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Agenda;

class HomeController extends Controller
{
  public function index()
  {
      $dataHome = Home::all();
      $dataKegiatan = Agenda::latest()->get();    
  
      // @dd($dataHome);
      return view('clients.home', compact('dataHome', 'dataKegiatan'));
  }
  
  
}
