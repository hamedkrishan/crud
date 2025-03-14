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
        return view("oranges.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $hamed = new Orange();
        $hamed ->name = $request->name;
        $hamed ->email = $request->email;
        $hamed ->save();
        return redirect()->route('oranges.index');


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
    public function edit($id)
    {
        $hamed = orange::findorFail($id);
        return view('oranges.edit', compact('hamed'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
         $student = orange::findOrFail($id);

    $student->name = $request->name;
    $student->email = $request->email;
    $student->save();

    return redirect()->route('oranges.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        orange::destroy($id);
        return redirect()->route('oranges.index');
    }
}
