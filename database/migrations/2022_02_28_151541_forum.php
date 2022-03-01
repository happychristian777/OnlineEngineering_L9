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
        Schema::create('forum', function (Blueprint $table) {
            $table->id('id');
            $table->integer('user_id')->unsigned();
            $table->morphs('tokenable');
            $table->string('title');
            $table->string('description');
            $table->string('image')->nullable();
            $table->dateTime('date');
            $table->enum('isApproved', ['Y', 'N'])->default('N');
            $table->string('token', 64)->unique();
            $table->timestamp('last_used_at')->nullable();
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
        //
    }
};
