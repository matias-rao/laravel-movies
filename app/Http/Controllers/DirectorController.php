<?php

namespace App\Http\Controllers;

use App\Models\Director;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $directors = Director::all();
        return view('directors.index', compact('directors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('directors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $director = Director::where('name', $request->name)->first();

        if($director){
            return back()
                ->withErrors(['name' => 'Ya tiene un director con ese nombre'])
                ->withInput(['name' => $request->name]);
        }

        $director = Director::create([
            'name'=> $request['name'],
        ]);

        return redirect()->route('director_index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Director  $director
     * @return \Illuminate\Http\Response
     */
    public function show(Director $director)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Director  $director
     * @return \Illuminate\Http\Response
     */
    public function edit(Director $director)
    {
        return view('directors.edit', compact('director'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Director  $director
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Director $director)
    {
        $data = $request->validate([
            'name' => 'required|string'
        ]);

        $director->update($data);

        return redirect()->route('director_index')->with('alert',[
            'type' => 'success',
            'message' => "Director $director->name updated"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Director  $director
     * @return \Illuminate\Http\Response
     */
    public function destroy(Director $director)
    {
        $director->delete();

        return redirect()->route('director_index')->with('alert',[
            'type' => 'danger',
            'message' => "Director $director->name deleted"
        ]);
    }
}
