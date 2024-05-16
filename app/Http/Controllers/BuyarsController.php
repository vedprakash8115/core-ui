<?php

namespace App\Http\Controllers;

use App\Models\Buyars;
use App\Http\Requests\StoreBuyarsRequest;
use App\Http\Requests\UpdateBuyarsRequest;

class BuyarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buyars = Buyars::all();
        return view('dashboard.buyars.index', compact('buyars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buyar = Buyars::all();
        return view('dashboard.buyars.create', compact('buyar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBuyarsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBuyarsRequest $request)
    {
        // $data = $request->all();
        // Buyars::create($request->all());
        // return redirect()->route('buyars.index');

        $data = $request->all();
        Buyars::create($request->all());
        toastr()->error('An error has occurred please try again later.');
        return redirect()->route('buyars.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Buyars  $buyars
     * @return \Illuminate\Http\Response
     */
    public function show(Buyars $buyar)
    {
        return view('dashboard.buyars.show', compact('buyar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Buyars  $buyars
     * @return \Illuminate\Http\Response
     */
    public function edit(Buyars $buyar)
    {
        return view('dashboard.buyars.edit', compact('buyar'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBuyarsRequest  $request
     * @param  \App\Models\Buyars  $buyars
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBuyarsRequest $request, Buyars $buyar)
    {
        $buyar->update($request->all());
        return redirect()->route('buyars.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buyars  $buyars
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buyars $buyars)
    {
        $buyars->delete();
        // return Response()->json(['data' => 'delete']);
        return redirect()->route('buyars.index');
    }
}
