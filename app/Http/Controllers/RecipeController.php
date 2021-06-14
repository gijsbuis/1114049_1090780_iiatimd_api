<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\Instruction;

class RecipeController extends Controller
{
    public function index(){
        $recipes = Recipe::all();
        return response()->json(['message'=>'Success', 'data'=>$recipes], 200);
    }
    public function show(Recipe $recipe){
        return response()->json(['message'=>'Success', 'data'=>$recipe], 200);
    }
    public function store(Request $request){
        // needs validation still
        $recipe = new Recipe;

        $recipe->title = $request->title;
        $recipe->description_short = $request->description_short;
        $recipe->description = $request->description;
        $recipe->prep_time_min = $request->prep_time_min;

        $recipe->save();
    }

    public function show_instructions(Recipe $recipe){
        $instructions = $recipe->instructions;
        if(count($instructions) >0){
            return response()->json(['message'=>'Success', 'data'=>$instructions], 200);
        }

        return response()->json(['message'=>'Geen instructies beschikbaar', 'data'=>null], 200);
    }
}
