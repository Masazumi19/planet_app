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
}
