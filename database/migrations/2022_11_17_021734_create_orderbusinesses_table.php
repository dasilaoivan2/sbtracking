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
        Schema::create('orderbusinesses', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->text('number_order_sb');
            $table->text('number_order_session');
            $table->date('session_date');
            $table->text('invocation');
            $table->foreignId('ordercategory_id');
            $table->longText('other_matter')->nullable();
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
        Schema::dropIfExists('orderbusinesses');
    }
};
