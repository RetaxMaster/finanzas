<?php

namespace App\Models;

use App\Enums\WithdrawalType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdrawals extends Model {

    use HasFactory;

    protected $fillable = [
        "payment_methods_id",
        "type",
        "date",
        "amount",
        "description",
    ];

    protected $casts = [
        "type" => WithdrawalType::class,
        "date" => "datetime",
        "amount" => "float",
        "description" => "string",
    ];

}
