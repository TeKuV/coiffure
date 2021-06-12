<?php

namespace App\Http\Controllers;

use App\Models\Coiffure;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function home(){
        $coiffures = Coiffure::take(4)->get();

        return view('pages.accueil', compact('coiffures'));
    }
}
