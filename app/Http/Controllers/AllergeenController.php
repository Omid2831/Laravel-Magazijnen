<?php

namespace App\Http\Controllers;

use App\Models\AllergeenModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AllergeenController extends Controller
{
    private $allergeenModel;
    public function __construct()
    {
        $this->allergeenModel = new AllergeenModel();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

       try{
         // get the feched data from the store procedure
        $allergeen = $this->allergeenModel->getAllAllergenenData();

        
        // set the metadata for the view here and pass the fetcched data to the view
        $Metadata = [
            'title' => 'Allergenen Overzicht',
        ];

        // return the view with the data and metadata
        return view('allergeen.index', compact('Metadata', 'allergeen'));

       }catch(\Exception $e){
        // in case of error, return back with the error message
        Log::error('Error fetching allergenen data: ' . $e->getMessage());

        // return back with an error message
        return back()->withErrors('Er is een fout opgetreden bij het ophalen van de allergenen gegevens.');

       }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('allergeen.create');
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
    public function show(AllergeenModel $allergeenModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AllergeenModel $allergeenModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AllergeenModel $allergeenModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AllergeenModel $allergeenModel)
    {
        //
    }
}
