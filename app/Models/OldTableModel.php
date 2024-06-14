<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OldTableModel extends Model
{
    protected $connection = 'old_db';
    protected $table = 'old_table';
    protected $fillable = ['id', 'ne', 'phone'];
}
