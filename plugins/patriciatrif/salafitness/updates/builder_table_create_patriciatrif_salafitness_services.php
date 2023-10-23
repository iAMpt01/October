<?php namespace Patriciatrif\Salafitness\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePatriciatrifSalafitnessServices extends Migration
{
    public function up()
    {
        Schema::create('patriciatrif_salafitness_services', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('name', 255);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('patriciatrif_salafitness_services');
    }
}
