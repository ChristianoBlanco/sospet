<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class tipo_pet extends Model
{
    use HasFactory;
    use softDeletes;

    protected $table = "tipo_pets";

    protected $fillable = [
        "num_pet",
        "tipo_pet"

    ];

    protected $date = ['delete_at'];
}
