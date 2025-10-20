<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MagazijnModel extends Model
{   

    public function sp_GetAllProducts()
    {

        // fetching the data from the database
        return DB::select('CALL sp_GetAllProducts()');
    }

    public function sp_GetLeverancierById($id)
    {
        // fetching the data from the database  by id 
        return DB::select('CALL sp_GetLeverancierInfo(?)', [$id]);
    }

    public function sp_GetProductById($id)
    {
        // fetching the data from the database  by id
        return DB::select('CALL sp_GetProductById(?)', [$id]);
    }

    public function sp_GetAllergeenById($id)
    {
        // fetching the data from the database  by id
        return DB::select('CALL sp_GetAllergeenById(?)', [$id]);
    }
    
    public function ProductPerLeverancier($id)
    {
        // fetching the data from the database  by id
        return DB::select('CALL sp_GetProductPerLeverancier(?)', [$id]);
    }
}
