<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectTableModel extends Model
{
    public $table = "projects";
    public $primaryKey = "id";
    public $incrementing = true;
    public $keyType = "int";
    public $timestamps = false;
}
