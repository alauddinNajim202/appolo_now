<?php

namespace App\Http\Controllers\Web\Backend\Artist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubscriptionPlansController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('web.backend.artist.subscription-plans');
    }


    /**
     * Display a listing of the plans checkout.
     */
    public function checkout()
    {
        return view('web.backend.artist.subscription-plans-checkout');
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
