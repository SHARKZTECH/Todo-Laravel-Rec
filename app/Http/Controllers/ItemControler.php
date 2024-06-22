<?php

namespace App\Http\Controllers;

use App\Models\TodoItems;
use Illuminate\Http\Request;

class ItemControler extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allItems=TodoItems::all();
        return view('welcome',["allItems"=>$allItems]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $todoitem=new TodoItems();
        $todoitem->name=$request->name;
        $todoitem->description=$request->description;
        $todoitem->completed=0;
        $todoitem->complete=0;
        $todoitem->save();
        redirect('index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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