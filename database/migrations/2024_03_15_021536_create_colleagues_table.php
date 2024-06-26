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
        Schema::create('colleagues', function (Blueprint $table) {
            $table->string('slug');
            $table->string('secondName');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('jobTitle');
            $table->string('socialLinkName')->nullable();;
            $table->string('socialLink')->nullable();;
            $table->string('avatar')->nullable();;
            $table->string('cover')->nullable();;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('colleagues');
    }
};
