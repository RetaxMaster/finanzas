<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConstantSpends extends Model {

    use HasFactory;

    protected $fillable = [
        "payment_methods_id",
        "name",
        "initial_date",
        "deactivation_date",
        "status",
    ];

    protected $casts = [
        "name" => "string",
        "initial_date" => "date",
        "deactivation_date" => "date",
        "status" => "boolean",
    ];

}
