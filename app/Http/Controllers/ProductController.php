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
        if (empty($request['id'])) {
            $products = json_decode(file_get_contents('json/products.json', true));
            $products[] = [
                'productName' => $request['productName'],
                'quantityInStock' => $request['quantityInStock'],
                'pricePerItem' => $request['pricePerItem'],
                'dateTime' => $request['dateTime'] ,
                'id' => str_random(20)
            ];
            file_put_contents('json/products.json', json_encode($products));
            return 'Product saved successfully!';
        }
        else {
            $product = $this->product($request['id']);
            $product['productName'] = $request['productName'];
            $product['quantityInStock'] = $request['quantityInStock'];
            $product['pricePerItem'] = $request['pricePerItem'];

            $products = json_decode(file_get_contents('json/products.json', true), true);
            for ($i = 0; $i < count($products); $i++) {
                if ($products[$i]['id'] == $request['id']) {
                    $products[$i] = $product;
                    break;
                }
            }
            file_put_contents('json/products.json', json_encode($products));

            return 'success';
        }
    }

    public function products() {
        $products = file_get_contents('json/products.json', true);
        return $products;
    }

    public function product($id) {
        $products = json_decode(file_get_contents('json/products.json', true), true);
        for ($i = 0; $i < count($products); $i++) {
            if ($products[$i]['id'] == $id) {
                return $products[$i];
            }
        }
        return $products;
    }
}
