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
            $table->id();
            $table->integer('reSeller_id');
            $table->string('reSeller_owner_name');
            $table->string('name');
            $table->string('user_id')->unique();
            $table->string('phone_number');
            $table->string('connection_month');
            $table->string('package');
            $table->string('package_rate');
            $table->text('nid_front_side')->nullable();
            $table->text('nid_back_side')->nullable();
            $table->text('address')->nullable();
            $table->string('status')->default('Active');
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
