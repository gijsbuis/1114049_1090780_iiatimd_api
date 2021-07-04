<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

use App\Models\Recipe;

class SearchController extends Controller
{
    public function search(Request $request) {
        $fields = $request->validate([
            'search' => 'required|string'
        ]);

        $recipes = Recipe::where('description', 'LIKE', '%'.$request->search.'%')->get();

        if (count($recipes) > 0 ) {
            return response($recipes);
        } else {
            return response('Geen recepten gevonden');
        }
    }
}
