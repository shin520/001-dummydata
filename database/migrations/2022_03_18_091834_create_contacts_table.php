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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('realname')->nullable();
            $table->string('nickname')->nullable();
            $table->integer('gener')->nullable();
            $table->string('marital')->nullable();
            $table->text('place_of_birth')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->text('hobby')->nullable();
            $table->text('talent')->nullable();
            $table->text('address')->nullable();
            $table->string('description')->nullable();
            $table->string('job')->nullable();
            $table->string('school')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->text('facebook')->nullable();
            $table->text('instagram')->nullable();
            $table->text('zalo')->nullable();
            $table->text('line')->nullable();
            $table->text('wechat')->nullable();
            $table->text('twitter')->nullable();
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
        Schema::dropIfExists('contacts');
    }
};
