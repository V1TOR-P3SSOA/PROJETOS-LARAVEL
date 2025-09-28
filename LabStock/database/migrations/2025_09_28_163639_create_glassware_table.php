<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('glassware', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("type");
            $table->string("capacity");
            $table->integer("quantity");
            $table->string("batch");
            $table->text("notes");
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('glassware');
    }
    
};
