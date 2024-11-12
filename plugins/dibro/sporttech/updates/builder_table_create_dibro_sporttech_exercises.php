<?php namespace Dibro\SportTech\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDibroSporttechExercises extends Migration
{
    public function up()
    {
        Schema::create('dibro_sporttech_exercises', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('photo_url');
            $table->string('link');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dibro_sporttech_exercises');
    }
}
