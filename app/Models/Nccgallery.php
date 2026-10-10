<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nccgallery extends Model
{
    use HasFactory;
    protected $table ='nccgalleries';
    protected $fillable = [
        'id', 
        'title', 
        'description', 
        'image'];       
}
