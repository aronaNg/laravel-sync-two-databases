<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewTableModel extends Model
{
    protected $connection = 'new_db';
    protected $table = 'new_table';
    protected $fillable = ['id', 'name', 'mobile'];
}