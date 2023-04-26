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
        Schema::create('alumni_student_infos', function (Blueprint $table) {
            $table->id();
            $table->string('astudent_id');
            $table->string('asex')->nullable();
            $table->string('abirthdate')->nullable();
            $table->string('acivilstatus')->nullable();
            $table->string('acaddress')->nullable();
            $table->string('apaddress')->nullable();
            $table->string('amobile')->nullable();
            $table->string('afb')->nullable();
            $table->integer('adegree_id')->nullable();
            $table->string('ayearbatch')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumni_student_infos');
    }
};
