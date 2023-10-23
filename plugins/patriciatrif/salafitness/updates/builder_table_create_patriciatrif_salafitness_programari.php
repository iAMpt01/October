<?php namespace Patriciatrif\Salafitness\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePatriciatrifSalafitnessProgramari extends Migration
{
    public function up()
    {
        Schema::create('patriciatrif_salafitness_programari', function($table)
        {
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('name', 255);
            $table->string('email', 255);
            $table->string('phone', 255);
            $table->date('appointment_date');
            $table->integer('service_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('patriciatrif_salafitness_programari');
    }
}
