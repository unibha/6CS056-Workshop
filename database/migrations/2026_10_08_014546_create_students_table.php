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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string("name",100)
             ->nullable(false);
            $table->string("email", 250)
             ->nullable(false)
             ->unique(true);
             $table->string("phone", 20)
    ->nullable(true)
    ->unique(true);

$table->text("address")
    ->nullable(true);

$table->date("date_of_birth")
    ->nullable(false); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
