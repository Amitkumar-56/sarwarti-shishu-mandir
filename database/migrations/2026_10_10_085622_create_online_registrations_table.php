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
        Schema::create('online_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('registration_no')->nullable();
            $table->string('student_name_hi')->nullable();
            $table->string('student_name_en')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('admission_class')->nullable();
            $table->string('dob')->nullable();
            $table->longText('form_data')->nullable(); // For all other fields
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
        Schema::dropIfExists('online_registrations');
    }
};
