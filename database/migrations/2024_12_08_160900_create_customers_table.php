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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->foreignId("patient_id")->constrained("users");
            $table->foreignId("hospital_id")->constrained("users");
            $table->foreignId("vaccine_id")->constrained("vaccines");
            $table->string("Status")->default("Pending");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_customers');
    }
};
