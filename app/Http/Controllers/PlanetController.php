<?php

namespace App\Http\Controllers;

use App\Models\Planet;
use App\Http\Requests\PlanetRequest;

class PlanetController extends Controller
{
    public function index()
    {
        $planets = Planet::all();
        return view('planets.index', compact('planets'));
    }

    public function create()
    {
        return view('planets.create');
    }

    public function store(PlanetRequest $request)
    {
        $planet = new Planet; // 空のインスタンスを作るって意味
        $planet->name = $request->name; //左側が空の受け皿的な役割で､(下に続く)
        $planet->name_en = $request->name_en; //右側が入力されたフォームが飛んできて､それを右側に代入する
        $planet->radius = $request->radius; 
        $planet->weight= $request->weight; 
        $planet->save();

        return redirect('/planets');
    }

    public function edit($id)
    {
        $planet = Planet::find($id);
        return view('planets.edit', compact('planet'));
    }

        public function update(PlanetRequest $request, $id)
    {
        $planet = Planet::find($id);
        $planet->name = $request->name;
        $planet->name_en = $request->name_en;
        $planet->radius= $request->radius;
        $planet->weight= $request->weight;
        $planet->save();
        return redirect('/planets');
    }

    public function show($id)
    {
        $planet = Planet::find($id);
        return view('planets.show', compact('planet'));
    }

    public function destroy($id)
    {
        $planet = Planet::find($id);
        $planet->delete();

        return redirect('/planets');
        }
}
