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
        Schema::create('inv_inventory_transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('item_id')->constrained('inv_items')->onDelete('cascade');
            $table->enum('transaction_type', ['purchase', 'sale', 'adjustment']);
            $table->integer('quantity');
            $table->decimal('price', 10, 2);
            $table->timestamp('date');
            $table->foreignId('supplier_id')->nullable()->constrained('inv_suppliers')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inv_inventory_transactions');
    }
};
