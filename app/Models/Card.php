<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $primaryKey = "card";
    protected $fillable = ["card", "card_name", "img_name", "main_meaning_dir", "main_meaning_rev", "describe", "meaning_dir", "meaning_rev"];
}
