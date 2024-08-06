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
        Schema::create('quote_forms', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("email")->unique();
            $table->string("phone");
            $table->string("country");
            $table->enum("service",['MobileApp','Website','UI/UX','IoT','QA']);
            $table->enum("budget",['<$5k','$5k-$10k','$10k-$20k','$20k-$30k','>$30k']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quote_forms');
    }
};
