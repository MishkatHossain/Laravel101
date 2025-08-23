<?php

use App\Models\Doctor;
use App\Models\Patient;
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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('specialization');
            $table->timestamps();
        });

        Schema::create('patients', function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->integer('age');
            $table->timpstamps();
        });

        Schema::create('doctor_patient', function(Blueprint $table){
            $table->id();
            $table->foreignId(Doctor::class);
            $table->foreignId(Patient::class);
            $table->timpstamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
