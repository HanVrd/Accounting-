<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditTerm extends Model
{

    public $timestamps = false;

    protected $table = 'credit_term';
    protected $fillable = ['credit_term_code', 'credit_term_name', 'credit_term_value', 'credit_term_status', 'modul_code'];
}
