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
        Schema::create('alumni_employment_infos', function (Blueprint $table) {
            $table->id();
            $table->string('astudent_id');
            $table->integer('empstatus_id')->nullable();
            $table->string('emp_jobtype')->nullable();
            $table->string('emp_type')->nullable();
            $table->string('emp_orgtype')->nullable();
            $table->string('emp_orgname')->nullable();
            $table->string('emp_classification')->nullable();
            $table->string('emp_jobrelated')->nullable();
            $table->string('emp_designation')->nullable();
            $table->string('emp_nyearjob')->nullable();
            $table->string('emp_placeofwork')->nullable();
            $table->string('emp_firstjob')->nullable();
            $table->string('emp_income')->nullable();
            $table->string('emp_selfemp')->nullable();
            $table->string('emp_unemp')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumni_employment_infos');
    }
};
