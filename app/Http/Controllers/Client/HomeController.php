<?php

namespace App\Http\Controllers\Client;

use App\Models\Home;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
  public function index()
  {
      $dataHome = Home::all();
  
      $dataKegiatan = [
        [
            "name" => "expo",
            "date" => "25 nov 2023",
            "img" => "values-3.png",
            "description" => "adalah kegiatan yang sangat bermanfaat"
        ],
        [
            "name" => "kunjungan teknologi",
            "date" => "10 des 2023",
            "img" => "values-1.png",
            "description" => "untuk mengunjungi museum teknologi"
        ],
        [
            "name" => "Bakar-bakar",
            "date" => "31 des 2023",
            "img" => "values-2.png",
            "description" => "Bakar jagung untuk merayakan tahun baru"
        ],
    ];    
  
      // @dd($dataHome);
      return view('clients.home', compact('dataHome', 'dataKegiatan'));
  }
  
  
}
