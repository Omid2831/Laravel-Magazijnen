<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MagazijnModel extends Model
{   

    public function sp_getAllMagazijnen()
    {

        // fetching the data from the database
        return DB::select('CALL sp_GetAllMagazijnen()');
    }
}
