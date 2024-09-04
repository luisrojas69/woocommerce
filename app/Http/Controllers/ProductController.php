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
    //Funcion para listar n formato JSON los productos de la ApiLocal
    public function localjson()
    {
        return Product::all();        
    }

    public function syncProduct(Request $request)
    {
        // $data = $request->id;
        // return $data;

        $product_id = $request->id;
        $data       = [
            'name' => $request->name,
            'regular_price' => $request->price,
            'stock_quantity' => $request->qty,
        ];

        $product = ProductWeb::update($product_id, $data);

      //  return "El producto fue actualizado correctamente: Nuevos datos-> ".$product;
                            
    }


    public function async()
    {
        
        if(request()->ajax()) {
            $ok = Product::all();
        //return $ok;
        
        $items_origin = json_decode(Product::all(), true);
        $param_sku ='';
        foreach ($items_origin as $item2){
            $param_sku .= $item2['sku'] . ',';
        }

        $products_web= ProductWeb::paginate(100);
        $totalPages = $products_web['meta']['total_pages'];
        $item_data =[];
       for ($i=1; $i <= $totalPages ; $i++) { 
            $products= ProductWeb::paginate(100, $i);
                foreach($products['data'] as $product){
                $sku = $product->sku;
                $name = $product->name;
                $regular_price = $product->regular_price;
                $qty = $product->stock_quantity;
                $search_item = array_filter($items_origin, function($item) use($sku, $regular_price, $name, $qty) {
                    return  $item['sku'] == $sku and ($item['price'] != $regular_price or $item['qty'] != $qty or $item['name'] != $name);                    
                });

                // $search_item = array_filter($items_origin, function($item) use($sku) {
                //     return  $item['sku'] != $sku;                    
                // });


                $search_item = reset($search_item);
                if ($search_item) {
                    $item_data [] = [
                        'id' => $product->id,
                        'sku' => $product->sku,
                        'name' => $search_item['name'],
                        'name_web' => $product->name,
                        'images' => $product->images,
                        'price' => $search_item['price'],
                        'price_web' => $product->regular_price,
                        'qty' => $search_item['qty'],
                        'qty_web' => $product->stock_quantity,
                    ];
                }
            }
       }
            return datatables()->of($item_data)
            ->addColumn('action', 'contents.backend.admin.product.product-async-action')
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

        return view('contents.backend.admin.product.main-async', compact('products_web', 'products_local'));      

    }


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






    public function indexweb()
    {
        $procache= Cache::remember('procache', 7200, function () {
            return ProductWeb::paginate(100);
        });

        return $procache;

        return $procache;
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


    public function home()
    {
        $products_local = Cache::remember('products_local', 7200, function () {
            return Product::count();
        });

        $products_web = Cache::remember('products_web', 7200, function () {
            return ProductWeb::count();
        });

        return view('contents.backend.admin.home.main', compact('products_local', 'products_web'));
    }

}
