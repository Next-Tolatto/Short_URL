<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShortUrlLogsTable extends Migration
{
    public function up()
    {
        Schema::create('short_url_logs', function (Blueprint $table) {
            $table->id();
            $table->text('original_url');
            $table->string('short_url', 255);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('short_url_logs');
    }
}
