<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration {
    public function up() {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('professional_id')->constrained('professionals')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->dateTime('appointment_date');
            $table->string('status')->default('pending'); // pending, confirmed, cancelled
            $table->timestamps();
        });
    }


    public function down() {
        Schema::dropIfExists('appointments');
    }
};







