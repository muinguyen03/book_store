<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::connection('mongodb')->create('orders', function ($table) {
            $table->id();
            $table->string('oder_code')->nullable();
            $table->string('user_id')->nulable();
            $table->string('user')->nullable();
            $table->string('address', 255)->nullable();
            $table->date('order_date')->nullable();
            $table->integer('subtotal')->nullable();
            $table->integer('total')->nullable();
            $table->integer('ship')->nullable();
            $table->tinyinteger('status_payment')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('promotion')->nullable();
            $table->tinyInteger('tracking')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
