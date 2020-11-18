<?php

namespace App;

use App\Contracts\Entities\ConnectionContracts;
use App\Contracts\Entities\InfoContract;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Info extends Model
{
    protected $connection = ConnectionContracts::MONGO_DB_CONNECTION;
    protected $collection = 'infos';
    protected $primaryKey = InfoContract::FIELD_ID;
    protected $fillable   = InfoContract::FIELD_LIST;
}
