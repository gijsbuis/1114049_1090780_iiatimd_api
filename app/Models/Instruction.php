<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Instruction extends Model
{

    protected $fillable = ['step_number', 'description'];

    public function recipe(){
        return $this->belongsTo(Recipe::class);
    }
}
