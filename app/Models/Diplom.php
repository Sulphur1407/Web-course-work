<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diplom extends Model
{
    protected $table = 'diploms';
    protected $fillable = ['doctor_id', 'name'];
}
