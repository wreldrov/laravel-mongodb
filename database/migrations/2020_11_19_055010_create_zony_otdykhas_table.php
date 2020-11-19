<?php

use App\Contracts\Entities\ZonyOtdykhaContract;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZonyOtdykhasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zony_otdykhas', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string(ZonyOtdykhaContract::FIELD_SEZON);
            $table->string(ZonyOtdykhaContract::FIELD_NAME_KZ);
            $table->string(ZonyOtdykhaContract::FIELD_NAME_RU);
            $table->string(ZonyOtdykhaContract::FIELD_ADDRESS_KZ);
            $table->string(ZonyOtdykhaContract::FIELD_ADDRESS_RU);
            $table->string(ZonyOtdykhaContract::FIELD_REJIM_KZ);
            $table->string(ZonyOtdykhaContract::FIELD_REJIM_RU);
            $table->string(ZonyOtdykhaContract::FIELD_USLUGI_KZ);
            $table->string(ZonyOtdykhaContract::FIELD_USLUGI_RU);
            $table->string(ZonyOtdykhaContract::FIELD_FIO_RUK);
            $table->unsignedInteger(ZonyOtdykhaContract::FIELD_GOD);
            $table->string(ZonyOtdykhaContract::FIELD_RAIGOR_KZ);
            $table->string(ZonyOtdykhaContract::FIELD_RAIGOR_RU);

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
        Schema::dropIfExists('zony_otdykhas');
    }
}
