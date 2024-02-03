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
        Schema::create('booked_flights', function (Blueprint $table) {
            $table->id();
             // Foreign key reference to the 'users' table
             $table->unsignedBigInteger('user_id');
             $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

             // Foreign key reference to the 'flights' table
             $table->unsignedBigInteger('flight_id');
             $table->foreign('flight_id')->references('id')->on('flights')->onDelete('cascade');

 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booked_flights');
    }
};
