<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class GroupModul extends Model
{
    protected $table = 'group_modul';
    protected $fillable = ['group_modul_code', 'group_modul_name', 'group_modul_desc'];
}
