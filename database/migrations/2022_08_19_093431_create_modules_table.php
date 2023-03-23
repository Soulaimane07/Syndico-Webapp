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
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->string('title_Fr');
            $table->string('para_Fr');
            $table->string('button_Fr');
            
            $table->string('title_An');
            $table->string('para_An');
            $table->string('button_An');

            $table->string('title_Ar');
            $table->string('para_Ar');
            $table->string('button_Ar');
            
            $table->string('color');
            $table->string('image');
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
        Schema::dropIfExists('modules');
    }
};
