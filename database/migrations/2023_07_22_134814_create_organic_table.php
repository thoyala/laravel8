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
        Schema::create('organic', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->date('date')->nullable();
            $table->string('type')->nullable();
            $table->integer('quantity')->nullable();
            $table->float('cost')->nullable();
            $table->text('remark')->nullable();ฟีะ้

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organic');
    }
};
