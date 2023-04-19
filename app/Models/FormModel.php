<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormModel extends Model
{
    use HasFactory;

    protected $table="form";
    public $fillable=[
        "emp_name",
        "emp_image",
        "emp_email",
        "emp_designation",
        "emp_phone",
        "emp_status",
    ];
}
