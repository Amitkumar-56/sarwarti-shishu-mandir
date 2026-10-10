<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AchievementImage extends Model
{
    use HasFactory;
    protected $table = 'achievement_images';
    protected $fillable = [
        'achievement_id',
        'image'
    ];     
}
