<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('phone');
            $table->text('logo');
            $table->text('color');
            $table->string('prefix');
            $table->string('from_name');
            $table->string('email');
            $table->string('booking_cc_email');
            $table->string('payment_cc_email');
            $table->string('term_link');
            $table->string('privacy_link');
            $table->string('term_usa_link');
            $table->string('privacy_usa_link');
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
        Schema::dropIfExists('brands');
    }
}
