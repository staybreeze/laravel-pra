<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // $url = 'http://localhost/css/style.css';
        // $url = asset('css/style.css');
        // dd($url);
        // dd('hello cat index');
        // return view('cat.index');
        // $data =view('cat.index');
        // $data =route('cats.index');
        // dd($data);
        // return route('cats.index');
        $url = route('cats.edit', ['cat' => 1]);
        dd($url);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // dd('hello cat create');
        // $url=route('cats.store');
        // dd($url);
        return view('cat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {     $input = $request->except('_token');
        return redirect()->route('cats.index');
        dd($input);
        dd('hello cat store');
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
        $url = action([CatController::class, 'profile'], ['id' => 1]);
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

    public function excel()
    {
        dd('hello cats excel');
    }
}
