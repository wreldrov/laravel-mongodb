<?php

use App\Contracts\Entities\ConnectionContracts;
use App\Contracts\Entities\InfoContract;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibrariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection(ConnectionContracts::MONGO_DB_CONNECTION)
            ->create('infos', function (Blueprint $table) {

            $table->bigIncrements('id');

            $table->string(InfoContract::FIELD_TYPE);
            $table->string(InfoContract::FIELD_NAME);
            $table->string(InfoContract::FIELD_NAME_KZ);
            $table->string(InfoContract::FIELD_ADDRESS);
            $table->string(InfoContract::FIELD_ADDRESS_KZ);
            $table->string(InfoContract::FIELD_RUKOVODITEL_KZ);
            $table->string(InfoContract::FIELD_RUKOVODITEL);
            $table->string(InfoContract::FIELD_SCHEDULE_KZ);
            $table->string(InfoContract::FIELD_SCHEDULE);
            $table->string(InfoContract::FIELD_VIDY_USLUG_KZ);
            $table->string(InfoContract::FIELD_VIDY_USLUG);
            $table->string(InfoContract::FIELD_GEOPOSITION);
            $table->string(InfoContract::FIELD_CONTACT_TELEFON);
            $table->string(InfoContract::FIELD_EMAIL);
            $table->string(InfoContract::FIELD_OFFICIAL_SITE);

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
        Schema::dropIfExists('infos');
    }
}
