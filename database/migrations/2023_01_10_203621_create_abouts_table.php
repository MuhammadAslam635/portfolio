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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string("title")->default("Laravel Developer");
            $table->date('dob')->default("2023-01-10");
            $table->string('website')->default("masolutiontech.net");
            $table->string("phone")->default("(+92)");
            $table->string("city")->default("multan");
            $table->string("email")->default("info@masolutiontech.net");
            $table->string("degree")->default("Bs");
            $table->integer("age")->default(30);
            $table->string("profession")->default("Freelancer");
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
        Schema::dropIfExists('abouts');
    }
};
