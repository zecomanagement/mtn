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
        Schema::create('travel_applications', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('passport')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->date('dob')->nullable();
            $table->string('name_nok')->nullable();
            $table->string('mobile_nok')->nullable();
            $table->string('address_nok')->nullable();
            $table->date('travel_date')->nullable();
            $table->date('return_date')->nullable();
            $table->string('departure')->nullable();
            $table->string('destination')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('travel_applications');
    }
};
