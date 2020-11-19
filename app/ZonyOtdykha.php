<?php

namespace App;

use App\Contracts\Entities\ConnectionContracts;
//use Illuminate\Database\Eloquent\Model;
use App\Contracts\Entities\ZonyOtdykhaContract;
use Jenssegers\Mongodb\Eloquent\Model;

class ZonyOtdykha extends Model
{
    protected $connection = ConnectionContracts::MONGO_DB_CONNECTION;
    protected $collection = 'zony_otdykhas';
    protected $primaryKey = ZonyOtdykhaContract::FIELD_ID;
    protected $fillable   = ZonyOtdykhaContract::FIELD_LIST;
}
