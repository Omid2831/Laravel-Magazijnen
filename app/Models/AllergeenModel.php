<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AllergeenModel extends Model
{
    public function getAllAllergenenData()
    {
        return DB::select('CALL sp_GetAllergenen()');
    }

    /*
     * Create a new allergen
     */
    public static function createAllergeen($naam, $omschrijving)
    {
        // Calls the procedure and returns the result (new_id)
        return DB::selectOne('CALL sp_CreateAllergenen(?, ?)', [
            $naam,
            $omschrijving
        ]);
    }
}
