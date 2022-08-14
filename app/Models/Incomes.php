<?php

namespace App\Models;

use App\Enums\IncomeType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incomes extends Model {

    use HasFactory;

    protected $fillable = [
        "type",
        "date",
        "amount",
        "description",
    ];

    protected $casts = [
        "type" => IncomeType::class,
        "date" => "datetime",
        "amount" => "float",
        "description" => "string",
    ];

}
