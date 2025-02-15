<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitutionTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Institution', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Institution_id')->primary();
            $table->string('Name_of_institution');
            $table->integer('Pincode');
            $table->string('Street_Address');
            $table->string('District');
            $table->string('State');
            $table->string('Email');
            $table->string('Category_of_Institution');
            $table->string('Type_of_Institution');
            $table->string('Affiliation');
            $table->binary('Institution_logo')->nullable();
            $table->string('Instagram_handle');
            $table->string('Facebok_handle');
            $table->string('Youtube_channel');
            $table->integer('Year_of_establishment_of_college');
            $table->integer('Contact_number');
            $table->timestamps();

        });
        Schema::create('machines', function (Blueprint $table) {
            $table->increments('Machine_ID')->primary();
            $table->string('Institution_id')->unsigned()->index()->nullable();
            $table->foreign('Institution_id')->references('Institution_id')->on('Institution');
            $table->string('Machine_name');
            $table->string('Category');
            $table->string('Model')->unique();
            $table->string('Location');
            $table->date('Date_of_manufacture');
            $table->integer('rate');
            $table->integer('count');
            $table->boolean('Available');
            $table->string('Description')->nullable();
            $table->jsonb('Specification')->nullable();
            $table->jsonb('image')->nullable();
            $table->timestamps();
    });
    Schema::create('iedc', function (Blueprint $table) {
        $table->increments('id');
        $table->string('iedc_id')->primary();
        $table->date('Date_of_establishment_of_KSUM_IEDC');
        $table->float('IEDC_room_area');
        $table->binary('Images_of_IEDC_room')->nullable();
        $table->string('Instagram_handle');
        $table->string('Facebook_handle');
        $table->string('Youtube_channel');
        $table->date('Date_of_establishment')->nullable();
        $table->timestamps();
    
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
class UpdateMachinesTable extends Migration
{
    public function up()
    {
        Schema::table('machines', function (Blueprint $table) {
            $table->jsonb('image')->change();
        });
    }

    public function down()
    {
        Schema::table('machines', function (Blueprint $table) {
            // If you need to revert this change
            $table->binary('image')->change();
        });
    }
}
