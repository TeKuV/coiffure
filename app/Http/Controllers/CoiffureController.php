<?php

// require 'vendor/autoload.php';  

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Coiffure;
use App\Models\Image;
use Illuminate\Http\Request;

use Intervention\Image\ImageManagerStatic as ImageManager;

class CoiffureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coiffures = Coiffure::all();

        return view('coiffures.index', compact('coiffures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('coiffures.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'intitule' => ['required', 'unique:coiffures'],
        ]);
        $coiffure = new Coiffure([
            'intitule' => $request->intitule,
            'details' => $request->details,
            'prix' => $request->prix,
            'id_category' => $request->category
        ]);

        $coiffure->save();

        if ($request->hasFile('images')) {
            $medias = $request->file('images');
            
            foreach($medias as $i => $media){
                
                $destinationPath = "uploads/images/";
                $extention = $media->getClientOriginalExtension();

                $profileImage = date('YmdHis') . $i ."." . $extention;
                $media->move($destinationPath, $profileImage);
                $image_name = "$profileImage";
                $path = $destinationPath . $image_name;

                if(ImageManager::make($path)->resize(100, 100)){
                    $image = new Image();
                    $image->path = $path;
                    $image->id_coiffure = $coiffure->id;
                    $image->save();
                }

                
            
            }
            // dd($tab_name);
        }

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
