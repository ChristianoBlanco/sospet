<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class status extends Model
{
    use HasFactory;
    use softDeletes;

    protected $table = "status";

    protected $fillable = [
        "num_status",
        "tipo_status"

    ];

    protected $date = ['delete_at'];
}
