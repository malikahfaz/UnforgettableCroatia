<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserinformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userinformations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');

            $table->string('utcl_other_currency_phone');
            $table->string('utcl_usa_phone');
            $table->string('utcl_usd_agent_phone');

            $table->string('cc_other_currency_phone');
            $table->string('cc_usa_phone');
            $table->string('cc_usd_agent_phone');

            $table->string('user_role');
            $table->string('user_currency');
            $table->string('payment_option');
            $table->string('destination_type');
            $table->string('holiday_type');
            $table->string('holiday_country');
            $table->string('brand');

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
        Schema::dropIfExists('userinformations');
    }
}
