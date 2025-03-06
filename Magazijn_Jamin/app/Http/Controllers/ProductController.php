<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        try {
            $startDate = $request->input('start_date');
            $endDate = $request->input('end_date');

            if ($startDate && $endDate) {
                // Validate dates
                if (!strtotime($startDate) || !strtotime($endDate)) {
                    return redirect()->back()->with('error', 'Invalid date format');
                }
                if (strtotime($startDate) > strtotime($endDate)) {
                    return redirect()->back()->with('error', 'Start date cannot be later than end date');
                }
                
                $producten = DB::select('CALL spGetProductsByDateRange(?, ?)', [$startDate, $endDate]);
            } else {
                $producten = DB::select('CALL spGetProducts()');
            }

            return view('product.index', compact('producten'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Error fetching products: ' . $e->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $products = DB::select('CALL spGetProductDetails(?)', [$id]);
            
            if (empty($products)) {
                return redirect()->route('product.index')->with('error', 'Product not found');
            }

            // Convert to collection and handle duplicates
            $products = collect($products);
            $uniqueDeliveries = $products->unique(function ($item) {
                return $item->DatumLevering . $item->Aantal;
            });
            
            $uniqueAllergenen = $products->unique('AllergeenNaam');
            $productName = $products->first()->ProductNaam;

            return view('product.show', [
                'products' => $products,
                'uniqueDeliveries' => $uniqueDeliveries,
                'uniqueAllergenen' => $uniqueAllergenen,
                'startDate' => request('start_date'),
                'endDate' => request('end_date'),
                'productName' => $productName
            ]);
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Error fetching product details: ' . $e->getMessage());
        }
    }
}