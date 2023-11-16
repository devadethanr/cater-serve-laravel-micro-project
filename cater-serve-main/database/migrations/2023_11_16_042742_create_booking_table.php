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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('country');
            $table->string('city');
            $table->string('palace');
            $table->string('event_type');
            $table->integer('palace_number');
            $table->string('food_preference');
            $table->foreignId('user_id')->constrained();
            $table->string('contact_no');
            $table->string('event_date');
            $table->string('email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
