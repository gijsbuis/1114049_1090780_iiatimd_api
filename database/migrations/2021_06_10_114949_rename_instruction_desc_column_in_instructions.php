<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameInstructionDescColumnInInstructions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('instructions', function (Blueprint $table) {
            
            $table->renameColumn('`instruction-desc`', 'description');
            $table->renameColumn('instruction_number', 'step_number');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('instructions', function (Blueprint $table) {
            $table->renameColumn('description', '`instruction-desc`');
            $table->renameColumn('step_number', 'instruction_number');
        });
    }
}
