<?php

namespace App\Http\Controllers;

use App\Models\Formuler;
use Illuminate\Http\Request;

class FormulerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $form = Formuler::orderBy('id')->get();

        return view('welcome',[
            'form'=>$form
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Formuler  $formuler
     * @return \Illuminate\Http\Response
     */
    public function show(Formuler $formuler)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Formuler  $formuler
     * @return \Illuminate\Http\Response
     */
    public function edit(Formuler $formuler)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Formuler  $formuler
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Formuler $formuler)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Formuler  $formuler
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formuler $formuler)
    {
        //
    }
}
