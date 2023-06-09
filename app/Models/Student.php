<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table='student';
    protected $fillable=[
        'id',
        'name',
        'father_name',
        'mother_name',
        'location',
    ];
}
