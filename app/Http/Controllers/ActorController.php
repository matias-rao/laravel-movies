<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use App\Http\Requests\ActorRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actors = Actor::all();

        return view('actors.index')
//            ->withActors($actors) // En actors.index vas a tener una variable $actors
            ->with('actors' , $actors); // Lo mismo
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('actors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //TODO: Agregar FormRequest en metodo store de ActorsController
    public function store(ActorRequest $request)
    {
        $data = $request->validated();

        $actor = Actor::create($data);

        return redirect()->route('actors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function show(Actor $actor)
    {
        return view('actors.show', compact('actor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function edit(Actor $actor)
    {
        return view('actors.edit', compact('actor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    //TODO: Agregar FormRequest en metodo update de ActorsController
    public function update(ActorRequest $request, Actor $actor)
    {
        $data = $request->validated();

        if(array_key_exists('picture', $data)){
            $picture = $data['picture']->store('pictures', 'public');
            Image::make(public_path("storage/$picture"))->fit(100,100)->save();
            $data['picture'] = "storage/$picture";
        }

        $actor->update($data);

        return redirect()->route('actors.show', $actor->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    //TODO: ActorsControllers: eliminar un actor.
    public function destroy(Actor $actor)
    {
        $actor->delete();

        return redirect()->route('actors.index');
    }
}
