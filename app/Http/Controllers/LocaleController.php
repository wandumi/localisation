<?php

namespace App\Http\Controllers;

use App\Models\locale;
use Illuminate\Http\Request;
use App;

class LocaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($locale)
    {
        $locale = locale::all();
        return view('locale.index', compact('locale'));
        // App::setlocale($locale);
        // session()->put('locale', $locale);
        // return redirect()->back();
        //return view('welcome', compact('locale'));
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
     * @param  \App\Models\locale  $locale
     * @return \Illuminate\Http\Response
     */
    public function show(locale $locale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\locale  $locale
     * @return \Illuminate\Http\Response
     */
    public function edit(locale $locale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\locale  $locale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, locale $locale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\locale  $locale
     * @return \Illuminate\Http\Response
     */
    public function destroy(locale $locale)
    {
        //
    }
}
