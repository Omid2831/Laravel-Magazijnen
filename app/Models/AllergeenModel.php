<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

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
    try {
        // Call the stored procedure safely
        $result = DB::select('CALL sp_CreateAllergenen(?, ?)', [$naam, $omschrijving]);

        // Check if we got a result
        if (!empty($result) && isset($result[0]->new_id)) {
            return (int) $result[0]->new_id;
        }

        Log::error('Failed to create allergen or no new_id returned.');
        return null; // return null instead of raw $result to keep type consistent

    } catch (\Exception $e) {
        Log::error('Error creating allergen: ' . $e->getMessage());
        return null;
    }
}
}
