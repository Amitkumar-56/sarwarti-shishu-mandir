<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admissionprocess extends Model
{
    use HasFactory;
    protected $table ='admissionprocesses';
    protected $fillable = [
        'id', 
        'title',
        'description'];     
}
