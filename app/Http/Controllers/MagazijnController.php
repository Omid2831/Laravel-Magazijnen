<?php

namespace App\Http\Controllers;

use App\Models\MagazijnModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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
        $magazijnen = $this->magazijnModel->sp_GetAllProducts();

        // Pass the data to the view
        return view('magazijn.index', [
            'title' => 'Overzicht Magazijn Jamin',
            'products' => $magazijnen
        ]);
    }

    /* Displaying our leverantieInfo from the model */
    public function leverantieInfo($id)
    {
        try {
            $leverancier = $this->magazijnModel->sp_GetLeverancierById($id);
            $producten = $this->magazijnModel->ProductPerLeverancier($id);

            $hasStock = false;

            // Check if any stock exists
            foreach ($producten as $product) {
                if (!is_null($product->AantalAanwezig) && $product->AantalAanwezig > 0) {
                    $hasStock = true;
                    break;
                }
            }

            // Set fixed no-stock message
            $errorMessage = null;
            if (!$hasStock) {
                // define the error message here to pass to the view if there is no stock
                $errorMessage = 'Er is van dit product op dit moment geen voorraad aanwezig, de verwachte eerstvolgende levering is: 30-04-2023';
                return view('magazijn.leverantieInfo', [
                    'title' => 'Leverantie Informatie',
                    'leverancier' => $leverancier,
                    'producten' => $producten,
                    'hasStock' => $hasStock,
                    'error' => $errorMessage
                ]);
            }
            // if there is a stock available, return the view successfully
            return view('magazijn.leverantieInfo', [
                'title' => 'Leverantie Informatie',
                'leverancier' => $leverancier,
                'producten' => $producten,
                'hasStock' => $hasStock
            ]);
        } catch (\Exception $e) {
            Log::error('Error fetching leverancier info: ' . $e->getMessage());
            return back()->with('error', 'Er is een fout opgetreden bij het ophalen van de leverancier informatie.');
        }
    }


    public function allergeenInfo($id)
    {

            $products = $this->magazijnModel->sp_GetProductById($id);
          //  $allergeen = $this->magazijnModel->sp_GetProductPerAlleergeen($id);
            
            /*
        Use for debugging purposes and see the data being fetched successfully
        
    */
            return view('magazijn.allergeenInfo', [
                'title' => 'Allergeen Informatie',
                'products' => $products,
               // 'allergeen' => $allergeen
               
            ]);
        
    }
}
