<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
