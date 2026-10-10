<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialactivitiesImage extends Model
{
    use HasFactory;
    protected $table = 'socialactivities_images';
    protected $fillable = [
        'socialactivities_id',
        'image'
    ];        
}
