<?php

use App\Models\Profil;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entretiens', function (Blueprint $table) {
            $table->uuId('id',36)->primary();
            $table->string('service');
            $table->foreignIdFor(Profil::class);
            $table->string('pieces')->nullable(); // Utilisation de nullable au lieu de default('null')
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
        Schema::dropIfExists('entretiens');
    }
};
