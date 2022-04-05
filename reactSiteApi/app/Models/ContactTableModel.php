<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactTableModel extends Model
{
    public $table = "contacts";
    public $primaryKey = "id";
    public $incrementing = true;
    public $keyType = "int";
    public $timestamps = false;
}
