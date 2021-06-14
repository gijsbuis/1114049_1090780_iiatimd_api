<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeTableNames extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('recipes', function(Blueprint $table){
            $table->renameColumn('`recipe-title`', 'title');
            $table->renameColumn('`recipe-desc-short`', 'description_short');
            $table->renameColumn('`recipe-desc`', 'description');
            $table->renameColumn('`prep-time-minutes`', 'prep_time_min');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('recipes', function(Blueprint $table){
            $table->renameColumn('title', '`recipe-title`');
            $table->renameColumn('description_short', '`recipe-desc-short`');
            $table->renameColumn('description', '`recipe-desc`');
            $table->renameColumn('prep_time_min', '`prep-time-minutes`');
        });
    }
}
