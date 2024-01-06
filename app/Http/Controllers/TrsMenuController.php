<?php

namespace App\Http\Controllers;

use App\Models\trs_menu;
use Illuminate\Http\Request;

class TrsMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
        $trsMenu=new trs_menu;

        $trsMenu->id_menu=$request->id_menu;
        $trsMenu->id_otoritas=$request->id_otoritas;
    }

    /**
     * Display the specified resource.
     */
    public function show(trs_menu $trs_menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(trs_menu $trs_menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, trs_menu $trs_menu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(trs_menu $trs_menu)
    {
        //
    }
}
