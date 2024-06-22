<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OverfastHeroController extends Controller
{
    public function index()
    {
        $response = Http::withOptions(['verify' => false])->get('https://overfast-api.tekrop.fr/heroes');
        $heroes = $response->json();

        return view('overfast.heroes', ['heroes' => $heroes]);
    }
}
