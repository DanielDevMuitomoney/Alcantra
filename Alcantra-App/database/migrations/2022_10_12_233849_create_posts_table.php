<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id('id_post');
            $table->unsignedBigInteger('fk_user');
            $table->string('nm_title', 25);
            $table->string('txt', 120);
            $table->integer('num_likes')->default(0);
            $table->enum('mark', [0,1])->default(0);
            $table->string('img_path',180);
            //fk s
            $table->foreign('fk_user')->references('id')->on('users');
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
        Schema::dropIfExists('posts');
    }
};
