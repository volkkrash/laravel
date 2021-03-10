<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CompanyContactData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_contact_data', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_address')->default('address');
            $table->string('company_phone')->default('+38(095)123-123-12');
            $table->string('company_email')->default('example@mail.ex');
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
        Schema::dropIfExists('company_contact_data');
    }
}
