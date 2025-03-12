<?php

namespace App\Http\Controllers;

use App\Models\Orange;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrangeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $oranges = Orange::all();
        return view('oranges.index', compact('oranges'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Orange $orange)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Orange $orange)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Orange $orange)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Orange $orange)
    {
        //
    }
}
