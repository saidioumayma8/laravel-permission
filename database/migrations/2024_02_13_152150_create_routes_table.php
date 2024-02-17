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
        Schema::create('routes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('startcity_id')
                  ->constrained('cities')
                  ->onDelete('cascade');

            $table->foreignId('endcity_id')
                  ->constrained('cities')
                  ->onDelete('cascade');

            $table->unique(['startcity_id', 'endcity_id']);
            $table->integer('distance');
            $table->time('duration');
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
        Schema::dropIfExists('routes');
    }
};
