<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Student extends Model
{
    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'email', 'date_of_birth', 'enrollment_year'];

    public function courses(){
        return $this->BelongsToMany(Course::class);
    }



}
