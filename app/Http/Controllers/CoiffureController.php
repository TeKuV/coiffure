<?php

namespace App\Http\Controllers;

use App\Models\Coiffure;
use Illuminate\Http\Request;

class CoiffureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('coiffures.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('coiffures.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Coiffure::create($request->all());

        return redirect()->route('coiffures.index')
                         ->with('success', 'Coiffure added successfuly !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coiffure  $coiffure
     * @return \Illuminate\Http\Response
     */
    public function show(Coiffure $coiffure)
    {
        return view('coiffures.show', compact('coiffure'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coiffure  $coiffure
     * @return \Illuminate\Http\Response
     */
    public function edit(Coiffure $coiffure)
    {
        return view('coiffures.edit', compact('coiffure'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coiffure  $coiffure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coiffure $coiffure)
    {
        $coiffure->update($request->all());

        return redirect()->route('coiffures.show', $coiffure->id)
                        ->with('success', 'La coiffure a été mis a jour !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coiffure  $coiffure
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coiffure $coiffure)
    {
        $coiffure->delete();

        return redirect()->route('coiffures.index')
                         ->with('success', "Coiffure supprimé avec succès !");
    }
}
