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
        Schema::create('modulesextras', function (Blueprint $table) {
            $table->id();
            
            $table->string('title_Fr');
            $table->string('title_An');
            $table->string('title_Ar');
            
            $table->string('para1_Fr');
            $table->string('para1_An');
            $table->string('para1_Ar');

            $table->string('para2_Fr');
            $table->string('para2_An');
            $table->string('para2_Ar');

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
        Schema::dropIfExists('modulesextras');
    }
};
