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
        Schema::create('clients', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('address');
            $table->string('phone');
            $table->string('email')->unique();
            $table->text('description')->nullable();
            $table->text('image')->nullable();
            $table->text('image_office')->nullable();
            $table->boolean('is_active')->default(true);
            $table->text('testimoni')->nullable();
            $table->boolean('testimoni_show')->default(false);
            $table->enum('star', [1, 2, 3, 4, 5])->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
