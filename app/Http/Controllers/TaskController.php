<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class TaskController extends Controller
{
    public function index()
    {
    $planets = Planet::all();
    return view('planets.index', compact('planets'));
    }
}
