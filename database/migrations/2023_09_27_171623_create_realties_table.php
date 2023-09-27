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
        Schema::create('realties', function (Blueprint $table) {
            $table->id();
            $table->text('address');
            $table->boolean('offer_type');
            $table->integer('rooms_qt');
            $table->integer('suite_qt');
            $table->integer('toilet_qt');
            $table->integer('parkingspace_qt');
            $table->float('value');
            $table->text('comments');
            $table->foreignIdFor(\App\Models\State::class);
            $table->foreignIdFor(\App\Models\City::class);
            $table->foreignIdFor(\App\Models\Neighborhood::class);
            $table->foreignIdFor(\App\Models\RealtyType::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('realties');
    }
};
