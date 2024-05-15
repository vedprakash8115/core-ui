<?php

namespace App\Http\Controllers;

use App\Models\Sellers;
use App\Http\Requests\StoreSellersRequest;
use App\Http\Requests\UpdateSellersRequest;

class SellersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sellers = Sellers::all();
        return view('dashboard.sellers.index', compact('sellers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $seller = Sellers::all();
        return view('dashboard.sellers.create', compact('seller'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSellersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSellersRequest $request)
    {
        $data = $request->all();
        Sellers::create($request->all());
        return redirect()->route('sellers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sellers  $sellers
     * @return \Illuminate\Http\Response
     */
    public function show(Sellers $sellers)
    {
        return view('dashboard.sellers.show', compact('sellers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sellers  $sellers
     * @return \Illuminate\Http\Response
     */
    public function edit(Sellers $seller)
    {
        return view('dashboard.sellers.edit', compact('seller'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSellersRequest  $request
     * @param  \App\Models\Sellers  $sellers
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSellersRequest $request, Sellers $seller)
    {
        $seller->update($request->all());
        return redirect()->route('sellers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sellers  $sellers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sellers $seller)
    {
        $seller->delete();
        return redirect()->route('sellers.index');
    }
}
