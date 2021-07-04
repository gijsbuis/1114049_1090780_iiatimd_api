<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Instruction;
use App\Models\Recipe;

class InstructionController extends Controller
{
    public function index(){
        $instructions = Instruction::all();
        return response()->json(['message'=>'Success', 'data'=>$instructions], 200);
    }
    public function show($id){
        $instruction = Instruction::find($id);
        return response()->json(['message'=>'Success','data'=>$instruction], 200);
    }
    public function store(Request $request, Recipe $recipe){
        
        $validator = $this->validateInstruction();
        if($validator->fails()){
            return response()->json(['message'=>$validator->messages(),'data'=>null], 400);
        }

        $instruction = new Instruction($validator->validate());
        if($recipe->instructions()->save($instruction)){
            return response()->json(['message'=>'Instructie opgeslagen','data'=>$instruction], 200);
        }

        return response()->json(['message'=>'Er gings iets fout','data'=>null], 400);
    }

    public function update(Request $request, $id){
        $validator = $this->validateUpdateInstruction();
        if ($validator->fails()){
            return response()->json(['message'=>$validator->messages(),'data'=>'null'], 400);
        }

        $updateInstruction = Instruction::find($id);
        if ($updateInstruction->update($request->all())){
            return response()->json(['message'=>'Instructie geupdate','data'=>$updateInstruction], 200);
        }
        return response()->json(['message'=>'Er gings iets fout','data'=>'null'], 400);
    }


    public function validateInstruction(){
        return Validator::make(request()->all(),[
            'step_number' => 'required|integer|min:1|max:255',
            'description' => 'required|string|min:3|max:255'
        ]);
    }
    public function validateUpdateInstruction(){
        return Validator::make(request()->all(),[
            'step_number' => 'integer|min:1|max:255',
            'description' => 'string|min:3|max:255'
        ]);
    }
}
