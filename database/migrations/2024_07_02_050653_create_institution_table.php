<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('institution', function (Blueprint $table) {
            $table->id();
            $table->uuid('Institution id')->primary();
            $table->string('Institution Name')->unique();
            $table->integer('Pincode');
            $table->string('Street Address');
            $table->string('District');
            $table->string('State');
            $table->string('Email');
            $table->string('Category of Institution');
            $table->string('Type of Institution');
            $table->string('Affiliation');
            $table->blob('Institution logo');
            $table->string('Instagram handle');
            $table->string('Facebok handle');
            $table->string('Youtube channel');
            $table->integer('Year of establishment of college');
            $table->integer('Contact number');
            $table->timestamps();

        });
        Schema::create('machines', function (Blueprint $table) {
            $table->id();
            $table->foreign('Institution id')->references('Institution id')->on('Institution');
            $table->foreign('Name of institution')->references('Name of institution')->on('Institution');
            $table->uuid('Machine ID')->primary();
            $table->string('Machine name');
            $table->string('Category');
            $table->string('Model')->unique();
            $table->string('Location');
            $table->date('Date of manufacture');
            $table->integer('rate');
            $table->integer('count');
            $table->boolean('Available');
            $table->blob('image')->nullable;
    });
    Schema::create('iedc', function (Blueprint $table) {
        $table->uuid('iedc id')->primary();
        $table->date('Date of establishment of KSUM IEDC');
        $table->float('IEDC room area (sqft)');
        $table->blob('Images of IEDC room');
        $table->string('Instagram handle');
        $table->string('Facebook handle');
        $table->string('Youtube channel');
        $table->date('Date of establishment')->nullable();
       
    
    });


}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('institution');
        Schema::dropIfExists('iedc');
        Schema::dropIfExists('machines');
    }
    
       
    
};
