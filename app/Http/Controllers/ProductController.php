<?php


namespace App\Http\Controllers;


class ProductController extends Controller
{
    public function product($id)
    {
        return "Liste des produits ".$id;
    }
    public function allProduct()
    {
        return "Liste des produits";
    }
}




// use App\Models\User;


