<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'staff';
    protected $primarykey = 'id';
    protected $fillable = ['title','birthday','salary','photo','phone'];
}
