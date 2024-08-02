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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('part_no')->nullable();
            $table->string('product_type')->nullable();
            $table->integer('uom_id')->nullable();
            $table->integer('hsn_code')->nullable();
            $table->integer('sales_price')->nullable();
            $table->integer('purchase_price')->nullable();
            $table->integer('quantity')->nullable();
            $table->string('tax_type')->nullable();
            $table->string('tax')->nullable();
            $table->integer('status')->default('1');
            $table->integer('company_id');
            $table->integer('created_by');
            $table->integer('modified_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
