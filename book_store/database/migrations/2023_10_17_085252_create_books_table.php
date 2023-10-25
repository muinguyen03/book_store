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
        Schema::connection('mongodb')->create('books', function ($table) {
            $table->id();
            $table->string('book_type_id')->nullable();
            $table->string('book_name', 255)->nullable();
            $table->string('description')->nullable();
            $table->tinyinteger('status')->default(0);
            $table->integer('price')->nullable();
            $table->string('publishing_company')->nullable();
            $table->string('publisher')->nullable();
            $table->string('author', 255)->nullable();
            $table->string('language', 255)->nullable();
            $table->date('date_release')->nullable();
            $table->integer('number_of_pages')->nullable();
            $table->integer('quantity')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
