<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;


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
        // $url = route('cats.edit', ['cat' => 1]);
        // dd($url);

        // #SAVE
        // $data['cats'] = DB::select('SELECT * FROM cats');
        // return view('cat.index', ['data'=>$data['cats']]);
        
        $cats = DB::table('cats')->get();
        return view('cat.index', ['users' => $cats]);

        // #INSERT
        //    $res= DB::table('cats')->insert([
        //         'name' => 'kai',
        //         'address' => 999,
        //     ]);
        //     dd($res);

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
    {
     
        $input = $request->except('_token');
    
    
        $res = DB::table('cats')->insert([
            'name' => $input['name'], 
     
        ]);
    

        dd($res);
    
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
