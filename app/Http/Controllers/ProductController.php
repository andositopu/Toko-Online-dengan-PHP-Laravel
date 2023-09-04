<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // public static $products = [
    //     ["id" => "1", "name" => "Realme 8i", "description" => "Best HP for Game", "image" => "handphone.png", "price" => "3.500.000"],
    //     ["id" => "2", "name" => "Lenovo", "description" => "Best Laptop Programming", "image" => "laptop.png", "price" => "15.000.000"],
    //     ["id" => "3", "name" => "R25", "description" => "Motor Tidak laku", "image" => "motor.png", "price" => "30.000.000"],
    //     ["id" => "4", "name" => "Iphone", "description" => "Best HP Seller", "image" => "handphone.png", "price" => "12.000.000"]
    // ];
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Products - Online Store";
        $viewData["subtitle"] = "List of products";
        $viewData["products"] = Product::all();
        return view('product.index')->with("viewData", $viewData);
    }
    public function show($id)
    {
        $viewData = [];
        $product = Product::findOrFail($id);
        $viewData["title"] = $product->getName(). "- Online Store";
        $viewData["subtitle"] = $product->getName(). " - Product information";
        $viewData["product"] = $product;
        return view('product.show')->with("viewData", $viewData);
    }
}