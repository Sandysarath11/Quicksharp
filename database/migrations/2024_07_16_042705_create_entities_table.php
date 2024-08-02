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
        Schema::create('entities', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->string('alias',255);
            $table->string('url',255);
            $table->string('api',255);
            $table->string('email',255);
            $table->string('address_1',255);
            $table->string('address_2',255);
            $table->string('city',255);
            $table->string('state',255);
            $table->integer('dev_mode');
            $table->string('payment_mode',255);
            $table->integer('paid_status')->default('1');
            $table->integer('is_active')->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entities');
    }
};
