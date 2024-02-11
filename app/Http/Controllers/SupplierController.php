<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::all();

        return response()->json([
            'suppliers' => $suppliers
        ]);
    }

    public function show($slug)
    {
        $supplier = Supplier::with(['contacts', 'contacts.phones', 'endpoints', 'dist_supplier'])->where('slug', $slug)->first();

        return response()->json([
            'supplier' => $supplier
        ]);
    }
}
