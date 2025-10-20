<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MagazijnModel extends Model
{

    // fetching all products from the database on magazijn
    
    public function sp_GetAllProducts()
    {

        // fetching the data from the database
        return DB::select('CALL sp_GetAllProducts()');
    }

    // fetching the leverancier info

    public function sp_GetLeverancierById($id)
    {
        // fetching the data from the database  by id
        return DB::select('CALL sp_GetLeverancierInfo(?)', [$id]);
    }
    
    public function ProductPerLeverancier($id)
    {
        // fetching the data from the database  by id
        return DB::select('CALL sp_GetProductPerLeverancier(?)', [$id]);
    }

    // fetching the allergeen info

    public function sp_GetProductById($id)
    {
        // fetching the data from the database  by id
        return DB::select('CALL sp_GetProductById(?)', [$id]);
    }

    public function sp_GetProductPerAlleergeen($id)
    {
        // fetching the data from the database by id
        return DB::select('CALL sp_GetProductPerAlleergeen(?)', [$id]);
    }
}
