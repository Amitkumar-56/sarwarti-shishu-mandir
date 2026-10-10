<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfrastructureImage extends Model
{
    use HasFactory;
    protected $table = 'infrastructure_images';
    protected $fillable = [
        'infrastructure_id',
        'image'
    ];    
}
