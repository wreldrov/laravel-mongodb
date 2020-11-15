<?php

use App\Contracts\Entities\ConnectionContracts;
use App\Contracts\Entities\LibraryContract;
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

            $table->string(LibraryContract::FIELD_NAME);
            $table->string(LibraryContract::FIELD_NAME_KZ);
            $table->string(LibraryContract::FIELD_ADDRESS);
            $table->string(LibraryContract::FIELD_ADDRESS_KZ);
            $table->string(LibraryContract::FIELD_RUKOVODITEL_KZ);
            $table->string(LibraryContract::FIELD_RUKOVODITEL);
            $table->string(LibraryContract::FIELD_SCHEDULE_KZ);
            $table->string(LibraryContract::FIELD_SCHEDULE);
            $table->string(LibraryContract::FIELD_VIDY_USLUG_KZ);
            $table->string(LibraryContract::FIELD_VIDY_USLUG);
            $table->string(LibraryContract::FIELD_GEOPOSITION);
            $table->string(LibraryContract::FIELD_CONTACT_TELEFON);
            $table->string(LibraryContract::FIELD_EMAIL);
            $table->string(LibraryContract::FIELD_OFFICIAL_SITE);

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
