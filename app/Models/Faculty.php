<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;
    protected $table ='faculties';
    protected $fillable = [
        'id', 
        'title',
        'gender',
        'faculty_id',
        'designation',];    
}
