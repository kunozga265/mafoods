<?php

namespace App\Http\Controllers;

use App\Http\Resources\RequestFormResource;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RecipeController extends Controller
{
    public function store(Request $request)
    {

        Redirect::back();
    }

    public function generatePDF(Request $request)
    {
        $request->validate([
           'recipe'         => 'required',
           'yieldFactor'    => 'required',
           'results'        => 'required'
        ]);

        $pdf = PDF::loadView('recipe', [
            'recipe'         => $request->recipe,
            'yieldFactor'    => $request->yieldFactor,
            'results'        => $request->results,
        ]);

        return $pdf->download(strtoupper($request->recipe)." RECIPE.pdf");
    }
}
