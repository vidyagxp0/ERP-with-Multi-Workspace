<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatifyFavoritesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('ch_favorites'))
        {
            Schema::create('ch_favorites', function (Blueprint $table) {
                $table->bigInteger('id');
                $table->bigInteger('user_id');
                $table->bigInteger('favorite_id');
                $table->timestamps();

                $table->primary('id');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ch_favorites');
    }
}
