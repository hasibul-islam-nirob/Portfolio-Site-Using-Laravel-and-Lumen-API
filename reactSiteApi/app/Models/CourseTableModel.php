<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseTableModel extends Model
{
    public $table = "courses";
    public $primaryKey = "id";
    public $incrementing = true;
    public $keyType = "int";
    public $timestamps = false;
}
