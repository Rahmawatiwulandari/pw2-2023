<?php

namespace App\Http\Controllers;

use App\Models\Genres;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GenresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function genres()
    {
        $genres = Genres::all();

        return view('genres.genres', compact('genres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genres = Genres::all();
        return view('genres.create',compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
             'nama' => 'required' ,
             'deskripsi' => 'required' ,
         ]);
 
         Genres::create( $validateData);
         return redirect('/genres')->with('succes', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Genres $genres)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genres $genres)
{
    

    return view('genres.edit', compact('genres',));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Genres $genres)
    {
        $validateData = $request->validate([
            'nama' => 'required' ,
            'deskripsi' => 'required' ,
        ]);
        $genres->update($validateData);

    return redirect('/genres')->with('success', 'Movie updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genres $genres)
    {
        $genres->delete();
        return redirect('/genres')->with('success', 'Data berhasil dihapus');
    }
}
