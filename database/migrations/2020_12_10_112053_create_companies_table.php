<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('company_name');
            $table->string('company_location');
            $table->string('company_from');
            $table->string('company_avatar')->nullable();
            $table->string('company_cover')->nullable();
            $table->string('company_desc')->nullable();
            $table->string('company_photos')->nullable();
            $table->string('company_email')->nullable();
            $table->string('company_phone')->nullable();
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
        Schema::dropIfExists('companies');
    }
}
