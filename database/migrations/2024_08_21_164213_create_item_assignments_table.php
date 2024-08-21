<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemAssignmentsTable extends Migration
{
    public function up()
    {
        Schema::create('inv_item_assignments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('item_id')->constrained('inv_items')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('serial_number')->nullable(); // Serial number or code of the item
            $table->string('photo')->nullable(); // Serial number or code of the item
            $table->date('assigned_at'); // Date when the item was assigned
            $table->enum('status', ['assigned', 'in_use', 'returned', 'in_repair', 'damaged'])->default('assigned'); // Status of the item assignment
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('inv_item_assignments');
    }
}
