<?php namespace Dibro\SportTech\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDibroSporttechLocations extends Migration
{
    public function up()
    {
        Schema::create('dibro_sporttech_locations', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('address')->nullable();
            $table->text('content')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dibro_sporttech_locations');
    }
}
