<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Testing\Fluent\Concerns\Has;

class Job extends Model {

    use HasFactory;

    protected $table = 'job_listings';
    protected $fillable = ['title', 'salary'];
}
