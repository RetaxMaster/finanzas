<?php

namespace App\Models;

use App\Enums\WithdrawalType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
        "date" => "date",
        "amount" => "float",
        "description" => "string",
    ];

    // Relaciones
    
    /**
     * Get the payment_method that owns the Withdrawals
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function payment(): BelongsTo {
        return $this->belongsTo(PaymentMethods::class, "payment_methods_id", "id");
    }
    
    // -> Relaciones

}
