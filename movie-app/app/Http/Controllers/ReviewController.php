<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function review()
    {
        $reviews = Review::all();

       return view('review.review', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $review = Review::all();
        return view('review.create',compact('review'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
             'movie' => 'required' ,
             'user' => 'required' ,
             'rating' => 'required' ,
             'comment' => 'required',
         ]);
 
         Review::create( $validateData);
         return redirect('/review')->with('succes', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
{
    
    return view('review.edit', compact('review', 'review'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        $validatedData = $request->validate([
            'movie' => 'required' ,
            'user' => 'required' ,
            'rating' => 'required' ,
            'comment' => 'required',
            'tanggal' => 'required',
        ]);

    $review->update($validatedData);

    return redirect('/review')->with('success', 'review updated successfully!');

    }

    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        $review->delete();
        return redirect('/review')->with('success', 'Data berhasil dihapus');
    }
}
