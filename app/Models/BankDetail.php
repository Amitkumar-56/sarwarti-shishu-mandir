<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankDetail extends Model
{
    use HasFactory;
    protected $table = 'bank_details';
    protected $fillable = [
        'id', 
        'account_holder',
        'bank_name',
        'account_number',
        'ifsc_code',
        'branch',
        'qr_code',
        'note'
    ];     
}
