<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'mobile_no', 'image', 'address', 'short_details', 'facebook_link', 'twitter_link', 'linkedin_link', 'youtube_link', 'map_link'];
}
