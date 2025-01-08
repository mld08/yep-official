<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('surname');
            $table->string('first_name');
            $table->string('email')->unique();
            $table->date('dob');
            $table->enum('gender', ['male', 'female']);
            $table->enum('status', ['student', 'entrepreneur', 'employed', 'unemployed', 'other']);
            $table->string('other_status')->nullable();
            $table->string('token')->unique();
            $table->boolean('used')->default(false);
            $table->string('qr_code_path');
            $table->string('pdf_path')->nullable();;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registrations');
    }
};
