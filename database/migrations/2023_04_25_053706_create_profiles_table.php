<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('CASCADE');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->text('bio')->nullable();
            $table->string('profile_pic')->nullable();
            $table->integer('years_xp')->nullable();
            $table->text('availability')->nullable();
            $table->unsignedBigInteger('craft_id')->nullable();
            $table->unsignedBigInteger('locality_id')->nullable();
            $table->string('facebook')->nullable();
            $table->string('phone', 8)->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('locality_id')->references('id')->on('localities')->onDelete('SET NULL')->nullable();
            $table->foreign('craft_id')->references('id')->on('crafts')->onDelete('SET NULL')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
