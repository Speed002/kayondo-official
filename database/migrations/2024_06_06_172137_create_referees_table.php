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
        Schema::create('referees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained();
            $table->string('referee1name');
            $table->string('referee1relation');
            $table->string('referee1contact');
            $table->string('referee2name');
            $table->string('referee2relation');
            $table->string('referee2contact');
            $table->string('st_chairname');
            $table->string('st_chaircontact');
            $table->string('lc_chairname');
            $table->string('lc_chaircontact');
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
        Schema::dropIfExists('referees');
    }
};
