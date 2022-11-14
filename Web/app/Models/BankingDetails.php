<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankingDetails extends Model
{
    use HasFactory;

    protected $table = 'banking_details';
    protected $guarded = [];
}
