<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteCourse extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $guarded = ['id'];
}
