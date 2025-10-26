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

        try {
            // get the feched data from the store procedure
            $allergeen = $this->allergeenModel->getAllAllergenenData();


            // set the metadata for the view here and pass the fetcched data to the view
            $Metadata = [
                'title' => 'Allergenen Overzicht',
            ];

            // return the view with the data and metadata
            return view('allergeen.index', compact('Metadata', 'allergeen'));
        } catch (\Exception $e) {
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
        return view('allergeen.create', [
            'title' => 'Nieuwe Record aanmaken',
            'description' => 'Hier kunt u een nieuwe allergeen aanmaken.'
        ]);
    }

    /**
     * Store a newly created allergen in storage.
     */
    public function store(Request $request)
    {
        // Validate incoming form data
        $validatedData = $request->validate([
            'naam' => 'required|string|max:50',
            'omschrijving' => 'required|string|max:255',
        ]);

        try {
            $newId = AllergeenModel::createAllergeen($validatedData['naam'], $validatedData['omschrijving']);

            if ($newId) {
                return redirect()->back()
                    ->with('success', 'Allergeen succesvol aangemaakt! (ID: ' . $newId . ')');
            } else {
                Log::error('Error creating allergen: ' . json_encode($validatedData));
                return redirect()->back()
                    ->withInput()
                    ->with('error', 'Er ging iets mis bij het aanmaken van het allergeen.');
            }
        } catch (\Exception $e) {
            Log::error('Error storing allergen: ' . $e->getMessage());
            return redirect()->back()
                ->withInput()
                ->with('error', 'Er is een onverwachte fout opgetreden. Probeer het later opnieuw.');
        }
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
    public function edit($id)
    {
        try {
            // Fetch the allergen by Id
            $allergeen = collect($this->allergeenModel->getAllAllergenenData())->firstWhere('Id', $id);

            if (!$allergeen) {
                return redirect()->route('allergeen.index')->with('error', 'Allergeen niet gevonden.');
            }

            $Metadata = [
                'title' => 'Allergeen Bewerken',
            ];

            return view('allergeen.edit', compact('Metadata', 'allergeen'));
        } catch (\Exception $e) {
            Log::error('Error loading allergen for edit: ' . $e->getMessage());
            return redirect()->route('allergeen.index')->with('error', 'Fout bij het laden van de bewerkingspagina.');
        }
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
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AllergeenModel $allergeenModel, $id)
    {
        try {
            $allergeen = AllergeenModel::find($id);

            if (!$allergeen) {
                return redirect()->back()->with('error', 'Allergeen niet gevonden.');
            }

            $naam = $allergeen->Naam;

            $deleted = AllergeenModel::DeleteAllergeenById($id);

            if ($deleted) {
                return redirect()->back()->with('success', "Allergeen '$naam' is succesvol verwijderd.");
            } else {
                return redirect()->back()->with('error', "Kon allergeen '$naam' niet verwijderen.");
            }
        } catch (\Exception $e) {
            Log::error('Error deleting allergen: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Er is een fout opgetreden bij het verwijderen.');
        }
    }
}
