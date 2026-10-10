<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Socialactivities extends Model
{
    use HasFactory;
    protected $table ='socialactivities';
    protected $fillable = [
        'id', 
        'title',
        'slug',
        'description',];     
}
