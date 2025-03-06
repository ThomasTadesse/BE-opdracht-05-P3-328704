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
            $productDetails = DB::select('CALL spGetProductDetails(?)', [$id]);
            
            if (empty($productDetails)) {
                return redirect()->route('product.index')->with('error', 'Product not found');
            }

            return view('product.show', compact('productDetails'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Error fetching product details: ' . $e->getMessage());
        }
    }
}