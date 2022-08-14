<?php

namespace App\Models;

use App\Enums\PaymentMethod;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMethods extends Model {

    use HasFactory;

    protected $fillable = [
        "name",
        "type",
        "cutoff_date",
        "spend_limit",
    ];

    protected $casts = [
        "name" => "string",
        "type" => PaymentMethod::class,
        "cutoff_date" => "integer",
        "spend_limit" => "float",
    ];

}
