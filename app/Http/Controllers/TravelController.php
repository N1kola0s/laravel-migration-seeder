<?php

namespace App\Http\Controllers;

use App\Travel;
use Illuminate\Http\Request;

class TravelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $travels = Travel::all();
        /* dd($travels); */
        return view('travels.index', compact('travels'));
    }



    /**
     * Display the specified resource.s
     *
     * @param  \App\Travel  $travel
     * @return \Illuminate\Http\Response
     */
    public function show(Travel $travel)
    {
        /* dd($travel); */
        return view ('travels.show', compact('travel'));
    }
  
}
