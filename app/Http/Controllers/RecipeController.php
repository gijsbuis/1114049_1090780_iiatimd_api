<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

        $validator = $this->validateNewRecipe();
        if ($validator->fails()){
            return response()->json(['message'=>$validator->messages(),'data'=>'null'], 400);
        }

        $recipe = new Recipe($validator->validate());
        if ($recipe->save()){
            return response()->json(['message'=>'Recept opgeslagen','data'=>$recipe], 200);
        }
        return response()->json(['message'=>'Er gings iets fout','data'=>'null'], 400);
        
    }

    public function update(Request $request, $id){
        $validator = $this->validateUpdateRecipe();
        if ($validator->fails()){
            return response()->json(['message'=>$validator->messages(),'data'=>'null'], 400);
        }

        $updateRecipe = Recipe::find($id);
        if ($updateRecipe->update($request->all())){
            return response()->json(['message'=>'Recept geupdate','data'=>$updateRecipe], 200);
        }
        return response()->json(['message'=>'Er gings iets fout','data'=>'null'], 400);
    }

    public function show_instructions(Recipe $recipe){
        $instructions = $recipe->instructions;
        if(count($instructions) >0){
            return response()->json(['message'=>'Success', 'data'=>$instructions], 200);
        }

        return response()->json(['message'=>'Geen instructies beschikbaar', 'data'=>null], 200);
    }

    public function show_ingredients(Recipe $recipe){
        $ingredients = $recipe->ingredients;
        if(count($ingredients) >0){
            return response()->json(['message'=>'Success', 'data'=>$ingredients], 200);
        }

        return response()->json(['message'=>'Geen ingredienten beschikbaar', 'data'=>null], 200);
    }

    public function validateNewRecipe(){
        return Validator::make(request()->all(),[
            'title'             => 'required|string|min:3|max:255', 
            'description_short' => 'required|string|min:3|max:255',
            'description'       => 'required|string|min:3|max:255',
            'prep_time_min'     => 'required|integer|min:3|max:255'
        ]);
    }
    public function validateUpdateRecipe(){
        return Validator::make(request()->all(),[
            'title'             => 'string|min:3|max:255',
            'description_short' => 'string|min:3|max:255',
            'description'       => 'string|min:3|max:255',
            'prep_time_min'     => 'integer|min:3|max:255'
        ]);
    }
}
