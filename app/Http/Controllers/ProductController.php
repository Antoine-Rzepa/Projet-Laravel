<?php


namespace App\Http\Controllers;


class ProductController extends Controller
{
    public function product($id)
    {
        return view("product-details", ["id" => $id]);
    }
    public function allProduct()
    {
        return view("product-list");
    }
}




// use App\Models\User;


