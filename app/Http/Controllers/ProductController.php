<?php

namespace App\Http\Controllers;
use App\Http\Requests\SaveProductRequest;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function home() {
        return view('welcome');
    }

    public function save(SaveProductRequest $request) {
        $products = json_decode(file_get_contents('json/products.json', true));
        $products[] = [
            'productName' => $request['productName'],
            'quantityInStock' => $request['quantityInStock'],
            'pricePerItem' => $request['pricePerItem'],
            'dateTime' => $request['dateTime']  
        ];
        file_put_contents('json/products.json', json_encode($products));
        return 'Product saved successfully!';
    }

    public function products() {
        $products = file_get_contents('json/products.json', true);
        return $products;
    }
}
