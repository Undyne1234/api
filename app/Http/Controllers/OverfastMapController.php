<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OverfastMapController extends Controller
{
    public function index()
    {
        $response = Http::withOptions(['verify' => false])->get('https://overfast-api.tekrop.fr/maps');
        $maps = $response->json();

        return view('overfast.maps', ['maps' => $maps]);
    }
}
