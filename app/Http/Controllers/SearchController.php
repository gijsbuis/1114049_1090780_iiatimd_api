<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request) {
        $fields = $request->validate([
            'search' => 'required|string'
        ]);

        $recipe = Recipe::where('search', 'LIKE', '%'.$request.'%')->get();
        if (count($recipe) > 0 ) {
            return response($recipe);
        } else {
            return response('Geen recepten gevonden');
        }
    }
}
