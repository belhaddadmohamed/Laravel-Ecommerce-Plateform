<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComputersController extends Controller
{
    // Array of static data
    private static function getData(){
        return [
            ['id' => 1, 'name' => 'HP', 'origin' => 'USA'],
            ['id' => 2, 'name' => 'DELL', 'origin' => 'China'],
            ['id' => 3, 'name' => 'TOSHIBA', 'origin' => 'HonKong'],
        ];
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $computers = self::getData();

        return view('computers.index', ['computers' => $computers]);     // Template: computers/index.blade.php
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('computers.create_computer');
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
    public function show(string $id)
    {
        $computers = self::getData();
        $index = array_search($id, array_column($computers, 'id'));

        if($index === false){
            abort(404);
        }

        return view('computers.single_computer', ['computer'=>$computers[$index]]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
