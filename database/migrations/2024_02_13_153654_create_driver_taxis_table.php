<?php

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
        Schema::create('driver_taxis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('User_id')->constrained('users');
            $table->unique('User_id');
            $table->enum('status', ['disponible', 'in trip', 'out of service'])->default('out of service');
            $table->integer('number_seets');
            $table->string('image');
            $table->string('typ_veicl');
            $table->integer('matricule');
            $table->enum('method_payment',['cart','espase']);
            $table->text('description');
            $table->softDeletes();
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
        Schema::dropIfExists('driver_taxis');
    }
};
