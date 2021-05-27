<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->decimal('available')->default(0);
            $table->decimal('replenished')->default(0);
            $table->decimal('withdrawn')->default(0);
            $table->decimal('transfered_fund')->default(0);
            $table->decimal('active_investments')->default(0);
            $table->decimal('active_deposits')->default(0);
            $table->decimal('deposit_income')->default(0);
            $table->decimal('fund_transfers_received')->default(0);
            $table->decimal('partners_turnover')->default(0);
            $table->decimal('daily_income')->default(0);
            $table->decimal('earned')->default(0);

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
        Schema::dropIfExists('funds');
    }
}
