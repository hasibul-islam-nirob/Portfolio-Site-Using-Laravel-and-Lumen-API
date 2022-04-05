<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectTableModel extends Model
{
    public $table = "products";
    public $primaryKey = "id";
    public $incrementing = true;
    public $keyType = "int";
    public $timestamps = false;
}
