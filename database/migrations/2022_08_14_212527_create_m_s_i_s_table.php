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
        Schema::create('m_s_i_s', function (Blueprint $table) {

            $table->id();

            $table
                ->foreignIdFor(PaymentMethods::class)
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
                
            $table->tinyInteger("months")->nullable(false);
            $table->tinyInteger("paid_months")->nullable(false);
            $table->date("init_date")->nullable(false);
            $table->boolean("paid")->nullable(false);

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
        Schema::dropIfExists('m_s_i_s');
    }
};
