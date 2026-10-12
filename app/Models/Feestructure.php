<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feestructure extends Model
{
    use HasFactory;
    protected $table = 'feestructures';
    protected $fillable = [
        'id', 
        'title',
        'description'
    ];     
}
