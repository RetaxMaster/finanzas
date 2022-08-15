<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
