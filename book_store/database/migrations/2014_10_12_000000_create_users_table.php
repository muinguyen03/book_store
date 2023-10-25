<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('mongodb')->create('users', function ($table) {
            $table->id();
            $table->string('name',255)->nullable();
            $table->string('avatar',255)->nullable();
            $table->string('email',255)->nullable();
            $table->string('password',255)->nullable();
            $table->string('phone',255)->nullable();
            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('role')->default(0);
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
