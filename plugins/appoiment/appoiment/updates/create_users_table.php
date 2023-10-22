use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

return new class extends Migration
{
    public function up()
    {
        Schema::create('appoiment_appoiments', function(Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->date('appointment_date');
            $table->string('desired_service');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('appoiment_appoiments');
    }
};
