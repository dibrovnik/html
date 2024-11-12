<?php namespace Dibro\SportTech\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDibroSporttechRating extends Migration
{
    public function up()
    {
        Schema::create('dibro_sporttech_rating', function($table)
        {
            $table->increments('id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('exercise');
            $table->string('value');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dibro_sporttech_rating');
    }
}
