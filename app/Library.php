<?php

namespace App;

use App\Contracts\Entities\ConnectionContracts;
use App\Contracts\Entities\LibraryContracts;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Library extends Model
{
    protected $connection = ConnectionContracts::MONGO_DB_CONNECTION;

    protected $collection = 'libraries';

    protected $fillable = LibraryContracts::FIELD_LIST;
}
