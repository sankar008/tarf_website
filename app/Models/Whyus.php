<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Whyus extends Model
{
    use HasFactory;
    protected $fillable = ['title_1', 'details_1', 'image_1'];
}
