<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employer extends Model
{
    /** @use HasFactory<intr\Database\Factories\EmployerFactory> */
    use HasFactory;

    public $fillable = ['name'];

    public function jobs(){
        return $this->hasMany(Job::class);
    }
}
