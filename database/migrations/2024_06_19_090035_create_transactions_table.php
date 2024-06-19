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
            $table->id();

            $table->string('name');
            $table->string('email');
            $table->string('no_hp');
            $table->string('amount');
            $table->string('reference');
            $table->string('merchant_code');
            $table->string('qr')->nullable();
            $table->string('method_name');
            $table->string('vaNumber')->nullable();
            $table->string('paymentUrl')->nullable();
            $table->enum('type',['DIGITAL','FISIK'])->nullable();
            $table->json('data');
            $table->datetime('date_expired');
            $table->enum('status_message',['PROCESS','SUCCESS','UNPAID','FAILED ']);
            $table->datetime('date_success')->nullable();

            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');

            $table->timestamps();
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
