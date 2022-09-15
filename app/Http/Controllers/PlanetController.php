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
        $planet = new Planet;// 空のインスタンスを作るって意味
        $planet->name = $request->name;//左側が空の受け皿的な役割で､(下に続く)
        $planet->name2 = $request->name2;//右側が入力されたフォームが飛んできて､それを右側に代入する
        $planet->save();

        return redirect('/planets');
    }

}
