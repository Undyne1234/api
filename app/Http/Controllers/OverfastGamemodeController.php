<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OverfastGamemodeController extends Controller
{
    public function index()
    {
        $response = Http::withOptions(['verify' => false])->get('https://overfast-api.tekrop.fr/gamemodes');
        $gamemodes = $response->json();

        return view('overfast.gamemodes', ['gamemodes' => $gamemodes]);
    }
}
