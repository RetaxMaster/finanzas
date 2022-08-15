<?php

namespace App\Models;

use App\Enums\PaymentMethod;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
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

    // Relaciones
    
    /**
     * Get all of the withdrawals for the PaymentMethods
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function withdrawals(): HasMany {
        return $this->hasMany(Withdrawals::class);
    }

    /**
     * Get all of the incomes for the PaymentMethods
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function incomes(): HasMany {
        return $this->hasMany(Incomes::class);
    }

    /**
     * Get all of the constant spends for the PaymentMethods
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function constant_spends(): HasMany {
        return $this->hasMany(ConstantSpends::class);
    }

    /**
     * Get all of the MSI for the PaymentMethods
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function msi(): HasMany {
        return $this->hasMany(MSI::class);
    }
    
    // -> Relaciones

}
