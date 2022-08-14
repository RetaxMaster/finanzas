<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MSI extends Model {

    use HasFactory;

    protected $fillable = [
        "payment_methods_id",
        "months",
        "paid_months",
        "init_date",
        "paid",
    ];

    protected $casts = [
        "months" => "integer",
        "paid_months" => "integer",
        "init_date" => "date",
        "paid" => "boolean",
    ];

}
