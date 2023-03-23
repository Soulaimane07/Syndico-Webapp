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
        Schema::create('forms', function (Blueprint $table) {
            $table->id();

            $table->string('image');

            $table->string('title_Fr');
            $table->string('title_An');
            $table->string('title_Ar');

            $table->string('label1_Fr');
            $table->string('label1_An');
            $table->string('label1_Ar');

            $table->string('label2_Fr');
            $table->string('label2_An');
            $table->string('label2_Ar');

            $table->string('label3_Fr');
            $table->string('label3_An');
            $table->string('label3_Ar');

            $table->string('label4_Fr');
            $table->string('label4_An');
            $table->string('label4_Ar');

            $table->string('label5_Fr');
            $table->string('label5_An');
            $table->string('label5_Ar');

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
        Schema::dropIfExists('forms');
    }
};
