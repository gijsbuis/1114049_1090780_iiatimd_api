<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Recipe;
use App\Models\Ingredient;

class IngredientController extends Controller
{
    public function index(){
        $ingredients = Ingredient::all();
        return response()->json(['message'=>'Success', 'data'=>$ingredients], 200);
    }

    public function show($id){
        $ingredient = Ingredient::find($id);
        return response()->json(['message'=>'Success','data'=>$ingredient], 200);
    }
    public function store(Request $request, Recipe $recipe){
        
        $validator = $this->validateIngredient();
        if($validator->fails()){
            return response()->json(['message'=>$validator->messages(),'data'=>null], 400);
        }

        $ingredient = new Ingredient($validator->validate());
        if($recipe->ingredients()->save($ingredient)){
            return response()->json(['message'=>'Ingredient opgeslagen','data'=>$ingredient], 200);
        }

        return response()->json(['message'=>'Er gings iets fout','data'=>null], 400);
    }

    public function update(Request $request, $id){
        $validator = $this->validateUpdateIngredient();
        if ($validator->fails()){
            return response()->json(['message'=>$validator->messages(),'data'=>'null'], 400);
        }

        $updateIngredient = Ingredient::find($id);
        if ($updateIngredient->update($request->all())){
            return response()->json(['message'=>'Ingrediënt geupdate','data'=>$updateIngredient], 200);
        }
        return response()->json(['message'=>'Er gings iets fout','data'=>'null'], 400);
    }


    public function validateIngredient(){
        return Validator::make(request()->all(),[
            'name'      => 'required|string|min:1|max:255',
            'amount'    => 'required|string|min:1|max:255'
        ]);
    }
    public function validateUpdateIngredient(){
        return Validator::make(request()->all(),[
            'name'      => 'string|min:1|max:255',
            'amount'    => 'string|min:1|max:255'
        ]);
    }
}