<?php

namespace App;

use App\Contracts\Entities\ConnectionContracts;
use App\Contracts\Entities\LibraryContract;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Library extends Model
{
    protected $connection = ConnectionContracts::MONGO_DB_CONNECTION;
    protected $collection = 'libraries';
    protected $primaryKey = LibraryContract::FIELD_ID;
    protected $fillable   = LibraryContract::FIELD_LIST;
}
