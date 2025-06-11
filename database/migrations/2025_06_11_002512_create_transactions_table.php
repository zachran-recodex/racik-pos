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
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('tenant_id');
            $table->string('transaction_number', 50);
            $table->unsignedBigInteger('user_id');
            $table->string('customer_name')->nullable();
            $table->string('customer_phone', 20)->nullable();
            $table->decimal('subtotal', 15, 2)->default(0);
            $table->decimal('tax_amount', 15, 2)->default(0);
            $table->decimal('discount_amount', 15, 2)->default(0);
            $table->decimal('total_amount', 15, 2)->default(0);
            $table->enum('payment_method', ['cash', 'card', 'digital_wallet', 'bank_transfer'])->default('cash');
            $table->decimal('payment_amount', 15, 2)->default(0);
            $table->decimal('change_amount', 15, 2)->default(0);
            $table->enum('status', ['pending', 'completed', 'cancelled', 'refunded'])->default('completed');
            $table->text('notes')->nullable();
            $table->timestamp('transaction_date')->useCurrent();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->unique(['tenant_id', 'transaction_number']);
            $table->index('tenant_id');
            $table->index('user_id');
            $table->index('transaction_date');
            $table->index('status');
            $table->index('payment_method');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
