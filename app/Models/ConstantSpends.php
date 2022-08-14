<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConstantSpends extends Model {

    use HasFactory;

    protected $fillable = [
        "type",
        "initial_date",
        "deactivation_date",
        "spend_limit",
        "status",
    ];

    protected $casts = [
        "type" => "string",
        "initial_date" => "date",
        "deactivation_date" => "date",
        "spend_limit" => "float",
        "status" => "boolean",
    ];

}
