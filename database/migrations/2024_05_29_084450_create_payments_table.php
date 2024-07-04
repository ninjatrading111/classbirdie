<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('pay_intent');
            $table->string('pay_amount');
            $table->string('pay_method_type');
            $table->string('pay_currency');
            $table->string('pay_type');
            $table->string('pay_created');
            $table->string('pay_ended');
            $table->string('pay_status')->default(1);
            $table->string('flag')->default(0);
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
        Schema::dropIfExists('payments');
    }
}
