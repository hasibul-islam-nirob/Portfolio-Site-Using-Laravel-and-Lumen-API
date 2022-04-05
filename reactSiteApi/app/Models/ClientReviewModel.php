<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientReviewModel extends Model
{
    public $table = "client_reviews";
    public $primaryKey = "id";
    public $incrementing = true;
    public $keyType = "int";
    public $timestamps = false;
}
