<?php

namespace App\Http\Controllers;

use App\Models\MagazijnModel;
use Illuminate\Http\Request;

class MagazijnController extends Controller
{
    private $magazijnModel;
    public function __construct()
    {
        $this->magazijnModel = new MagazijnModel();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all magazijnen from the model
        $magazijnen = $this->magazijnModel->sp_getAllMagazijnen();

        // Pass the data to the view
        return view('magazijnen.index', [
            'Magazijnen' => $magazijnen
        ]);

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
    public function show(MagazijnModel $magazijnModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MagazijnModel $magazijnModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MagazijnModel $magazijnModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MagazijnModel $magazijnModel)
    {
        //
    }
}
