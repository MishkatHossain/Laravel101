<?php

use App\Models\Course;
use App\Models\Student;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->date('date_of_birth');
            $table->integer('enrollment_year');
            $table->timestamps();
        });

        Schema::create('courses', function(Blueprint $table){
            $table->id();
            $table->string('title');
            $table->string('code');
            $table->text('description');
            $table->integer('credit_hours');
            $table->timestamps();
        });

        Schema::create('course_student', function(Blueprint $table){
            $table->id();
            $table->foreignId('student_id')->constrained()->cascadeOnDelete();
            $table->foreignId('course_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
        Schema::dropIfExists('courses');
        Schema::dropIfExists('course_student');
    }
};
