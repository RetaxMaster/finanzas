<?php

use App\Models\PaymentMethods;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('constant_spends', function (Blueprint $table) {

            $table->id();

            $table
                ->foreignIdFor(PaymentMethods::class)
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
                
            $table->string("type", 20)->nullable(false);
            $table->date("initial_date")->nullable(false);
            $table->date("deactivation_date")->nullable(false);
            $table->float("spend_limit")->nullable(false);
            $table->boolean("status")->nullable(false);

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('constant_spends');
    }
};
