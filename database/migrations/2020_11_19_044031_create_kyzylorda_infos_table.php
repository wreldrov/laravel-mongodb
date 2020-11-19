<?php

use App\Contracts\Entities\KyzylordaInfoContract;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKyzylordaInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kyzylorda_infos', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string(KyzylordaInfoContract::FIELD_YAZIK);
            $table->string(KyzylordaInfoContract::FIELD_NAME_KZ);
            $table->string(KyzylordaInfoContract::FIELD_NAME_RU);
            $table->string(KyzylordaInfoContract::FIELD_NAMES_RU);
            $table->string(KyzylordaInfoContract::FIELD_NAMES_KZ);
            $table->string(KyzylordaInfoContract::FIELD_ADDRESS_KZ);
            $table->string(KyzylordaInfoContract::FIELD_ADDRESS_RU);
            $table->string(KyzylordaInfoContract::FIELD_PERIOD_KZ);
            $table->string(KyzylordaInfoContract::FIELD_PERIOD_RU);
            $table->string(KyzylordaInfoContract::FIELD_TERRITORIA_KZ);
            $table->string(KyzylordaInfoContract::FIELD_TERRITORIA_RU);
            $table->string(KyzylordaInfoContract::FIELD_FIO_RUK);
            $table->string(KyzylordaInfoContract::FIELD_NAPRAVLENIE_KZ);
            $table->string(KyzylordaInfoContract::FIELD_NAPRAVLENIE_RU);

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
        Schema::dropIfExists('kyzylorda_infos');
    }
}
