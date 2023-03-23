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
        Schema::create('headers', function (Blueprint $table) {
            $table->id();
            $table->string('title1_Fr');
            $table->string('title1_An');
            $table->string('title1_Ar');
            $table->string('title2_Fr');
            $table->string('title2_An');
            $table->string('title2_Ar');
            $table->string('para_Fr');
            $table->string('para_An');
            $table->string('para_Ar');
            $table->string('image');
            $table->string('button_Fr');
            $table->string('button_An');
            $table->string('button_Ar');
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
        Schema::dropIfExists('headers');
    }
};
