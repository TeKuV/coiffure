<?php

namespace App\Http\Controllers;

use App\Models\Coiffure;
use Illuminate\Http\Request;

class CatalogueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coiffures = Coiffure::all();

        return view('pages.catalogue', compact('coiffures'));
    }
}
