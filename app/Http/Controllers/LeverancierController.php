<?php

namespace App\Http\Controllers;

use App\Models\LeverancierModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LeverancierController extends Controller
{

    private $leverancierModel;

    public function __construct()
    {
        $this->leverancierModel = new LeverancierModel();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $leverancierOverzicht = $this->leverancierModel->getAllLeverancierData();

            // NOTE: Blade template expects $leveranciers, not $levering
            return view('leverancier.index', [
                'title' => 'Leverancier Overzicht',
                'leveranciers' => $leverancierOverzicht,
            ]);
        } catch (\Exception $e) {
            // create a error log in case you have any erorrs
            Log::error('Error fechting Leverancier data :' . $e->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(LeverancierModel $leverancierModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LeverancierModel $leverancierModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LeverancierModel $leverancierModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LeverancierModel $leverancierModel)
    {
        //
    }
}
