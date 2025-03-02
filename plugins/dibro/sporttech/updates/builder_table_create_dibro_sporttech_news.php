<?php namespace Dibro\SportTech\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDibroSporttechNews extends Migration
{
    public function up()
    {
        Schema::create('dibro_sporttech_news', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->text('content');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dibro_sporttech_news');
    }
}
