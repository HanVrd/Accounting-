<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModulForm extends Model
{
    protected $table = 'modul_form'; // Specify the name of your table

    // If your table has timestamps (created_at, updated_at) fields, set this to true
    public $timestamps = false;

    // Specify the columns that are fillable
    protected $fillable = [
        'modul_code',
        'grou_modul_code',
        'group_modul_name',
        'modul_name',
        'modul_url',
        'modul_desc',
        'modul_status',

    ];

    // You can define relationships, accessors, mutators, etc. here as needed
}
