<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('admin_name');
            $table->string('email')->nullable();
            $table->string('web_name')->nullable();
            $table->text('logo')->nullable();
            $table->string('mandrill_key')->nullable();
            $table->string('mail_chimp_key')->nullable();

            $table->string('paysafe')->nullable();
            $table->string('paysafe_token_sandbox')->nullable();
            $table->string('paysafe_payment_sandbox')->nullable();

            $table->string('paysafe_token_live')->nullable();
            $table->string('paysafe_payment_live')->nullable();

            $table->string('email_chaser_crob_job')->nullable();
            $table->string('phone_verification_api')->nullable();

            $table->string('active_verification')->nullable();
            $table->string('active_verification2')->nullable();

            $table->string('send_payment_link')->nullable();
            $table->string('send_payment_link2')->nullable();

            $table->string('tas_endpoint')->nullable();
            $table->string('approval_email')->nullable();
            $table->string('sms_api_key')->nullable();
            $table->string('sms_username')->nullable();

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
        Schema::dropIfExists('settings');
    }
}
