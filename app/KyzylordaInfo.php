<?php

namespace App;

use App\Contracts\Entities\ConnectionContracts;
use App\Contracts\Entities\KyzylordaInfoContract;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class KyzylordaInfo extends Model
{
    protected $connection = ConnectionContracts::MONGO_DB_CONNECTION;
    protected $collection = 'kyzylorda_infos';
    protected $primaryKey = KyzylordaInfoContract::FIELD_ID;
    protected $fillable   = KyzylordaInfoContract::FIELD_LIST;
}
