<?php

use App\Contracts\Entities\ConnectionContracts;
use App\Contracts\Entities\LibraryContracts;
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
            ->create('libraries', function (Blueprint $table) {

            $table->bigIncrements('id');

            $table->string(LibraryContracts::FIELD_NAME);
            $table->string(LibraryContracts::FIELD_NAME_KZ);
            $table->string(LibraryContracts::FIELD_ADDRESS);
            $table->string(LibraryContracts::FIELD_ADDRESS_KZ);
            $table->string(LibraryContracts::FIELD_RUKOVODITEL_KZ);
            $table->string(LibraryContracts::FIELD_RUKOVODITEL);
            $table->string(LibraryContracts::FIELD_SCHEDULE_KZ);
            $table->string(LibraryContracts::FIELD_SCHEDULE);
            $table->string(LibraryContracts::FIELD_VIDY_USLUG_KZ);
            $table->string(LibraryContracts::FIELD_VIDY_USLUG);
            $table->string(LibraryContracts::FIELD_GEOPOSITION);
            $table->string(LibraryContracts::FIELD_CONTACT_TELEFON);
            $table->string(LibraryContracts::FIELD_EMAIL);
            $table->string(LibraryContracts::FIELD_OFFICIAL_SITE);

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
        Schema::dropIfExists('libraries');
    }
}
