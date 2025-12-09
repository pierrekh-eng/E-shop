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
            $table->string('name',40);
            $table->text('description')->nullable();
            $table->decimal('price',10,2);
            $table->decimal('sale_price',10,2)->nullable();
            $table->integer('quantity')->default(0);
            $table->string('sku')->unique();/*Product unique code. */
            $table->string('image')->nullable();
            $table->float('rating')->default(0);
            $table->string('brand')->nullable();
            $table->string('color')->nullable();
            $table->string('size')->nullable();
            $table->foreignId('category_id')->constrained()->onDelete('cascade');

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
