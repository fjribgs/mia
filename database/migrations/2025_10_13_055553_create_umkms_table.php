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
        Schema::create('umkms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('province_id')->constrained('indonesia_provinces');
            $table->foreignId('city_id')->constrained('indonesia_cities');
            $table->foreignId('district_id')->constrained('indonesia_districts');
            $table->foreignId('village_id')->constrained('indonesia_villages');
            $table->text('description');
            $table->enum('type', ['tetap', 'keliling']);
            $table->text('gmaps_link');
            $table->text('address');
            $table->char('phone_number', 15);
            $table->string('open_days'); //note: dropdown hardcode value
            $table->string('open_time');
            $table->string('close_time');
            $table->float('average_rating')->default(0);
            $table->boolean('is_open_for_collaboration')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('umkms');
    }
};
