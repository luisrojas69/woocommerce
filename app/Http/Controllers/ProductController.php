<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Yajra\DataTables\Datatables;
use Codexshaper\WooCommerce\Models\Product as ProductWeb;
use Illuminate\Support\Facades\Cache;

class ProductController extends Controller
{
    //Funcion para listar en el Datatable todos los porductos de la ApiLocal
    public function index()
    {
        if(request()->ajax()) {
            return datatables()->of(Product::select('*'))
            ->addColumn('action', 'contents.backend.admin.product.product-action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }

        $products_local = Cache::remember('products_local', 7200, function () {
            return Product::count();
        });

        $products_web = Cache::remember('products_web', 7200, function () {
            return ProductWeb::count();
        });

        return view('contents.backend.admin.product.main', compact('products_local', 'products_web'));        
    }

    public function show ($request){
        $product= Product::findOrFail($request);
        return view('contents.backend.admin.product.show', compact('product'));
   }


    //Funcion para listar en el Datatable todos los porductos de la Web
    public function indexweb2()
    {
        $products = ProductWeb::paginate(100);
        //return $products;

        $products_local = Cache::remember('products_local', 7200, function () {
            return Product::count();
        });

        $products_web = Cache::remember('products_web', 7200, function () {
            return ProductWeb::count();
        });

        return view('contents.backend.admin.product.web', compact('products','products_local', 'products_web'));        
    }


    public function indexweb()
    {
        $procache= Cache::remember('procache', 7200, function () {
            return ProductWeb::paginate(100);
        });

        if(request()->ajax()) {
            return datatables()->of($procache['data'])
            ->addColumn('action', 'contents.backend.admin.product.product-web-action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }

        $products_local = Cache::remember('products_local', 7200, function () {
            return ;
        });

        $products_web = $procache['meta']['total_results'];

        return view('contents.backend.admin.product.main-web', compact('products_local', 'products_web'));        
    }

}
