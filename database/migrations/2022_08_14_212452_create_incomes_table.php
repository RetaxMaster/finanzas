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
        Schema::create('incomes', function (Blueprint $table) {
            
            $table->id();

            $table
                ->foreignIdFor(PaymentMethods::class)
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
                
            $table->tinyInteger("type")->nullable(false);
            $table->timestamp('date')->nullable(false)->default(now());
            $table->float("amount")->nullable(false);
            $table->text("description")->nullable(false);

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
        Schema::dropIfExists('incomes');
    }
};
