<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_jobs', function (Blueprint $table) {
            $table->id(); 
            $table->string('user_id');
            $table->string('job_id');
            $table->string('job_author');
            $table->string('job_email');
            $table->string('job_number');
            $table->string('job_company');
            $table->string('job_location');
            $table->string('job_title');
            $table->string('job_type');
            $table->string('job_skill');
            $table->string('job_salary');
            $table->string('job_desc');
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
        Schema::dropIfExists('new_jobs');
    }
}
