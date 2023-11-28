<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Profil;


return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historiques', function (Blueprint $table) {
            $table->uuid('id', 36)->primary();
            $table->foreignIdFor(Profil::class);
            $table->string('service');
            $table->string('vehicle_make');
            $table->string('vehicle_model');
            $table->integer('vehicle_year');
            $table->string('vehicle_vin');
            $table->string('pieces')->nullable();
            $table->date('date');
            $table->integer('odometer');
            $table->integer('next_service_odometer');
            $table->integer('price')->nullable();
            $table->timestamps();
        });
    }

   /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('combined_data');
    }
};
