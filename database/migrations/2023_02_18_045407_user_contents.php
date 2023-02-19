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
        Schema::create('user_contents', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('photo');
            $table->text('description')->nullable();
            $table->integer('likes')->default(0);
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
        Schema::dropIfExists('user_contents');
    }
};
