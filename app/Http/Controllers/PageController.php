<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index()
    {

        $datacorrente = '2024-01-23';


        $trains = Train::whereDate('orario_di_partenza', $datacorrente)->get();

        return view('home', compact("trains"));
    }
}
