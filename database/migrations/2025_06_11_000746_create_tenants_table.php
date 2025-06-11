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
        Schema::create('tenants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('uuid', 36)->unique();
            $table->string('name', 255);
            $table->string('slug', 100)->unique();
            $table->string('domain', 255)->unique()->nullable();
            $table->string('subdomain', 100)->unique()->nullable();
            $table->string('database_name', 100)->nullable();
            $table->enum('status', ['active', 'inactive', 'suspended'])->default('active');
            $table->string('subscription_plan', 50)->default('basic');
            $table->timestamp('subscription_expires_at')->nullable();
            $table->json('settings')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->index('slug');
            $table->index('domain');
            $table->index('status');
            $table->index(['subscription_plan', 'subscription_expires_at']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenants');
    }
};
