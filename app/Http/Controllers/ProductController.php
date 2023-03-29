<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    public function index()
    {
        $data = DB::table("products")->get();
        return view('product.index',['products'=>$data]);
    } 

    public function delete($prodID)
    {
        $delete=DB::table("products")->where("prodID", "=", $prodID)->delete();
        return redirect('/products')->with("success", "Product deleted successfully");
    }
    public function addProduct()
    {
        return view('product.add');
    }

    public function saveProduct(Request $req)
    {
        //dd($req);
        $validated=$req->validate([
            "description"=>['required'],
            "quantity"=>['required'],
            "price"=>['required'],
        ]);

        $data=Product::create($validated);
        return redirect("/products")->with('success', 'Product addedd successfully!');
    }
   

    public function updateProduct(Request $req){
        $req->validate([
            "description"=>['required'],
            "quantity"=>['required'],
            "price"=>['required'],
        ]);

    $data=Product::find($req->prodID);
    $data->description=$req->description;
    $data->quantity=$req->quantity;
    $data->price=$req->price;
    $data->save();
    return redirect("/products")->with('success', 'Product edited successfully!');
    }

    public function editProduct($prodID){

        $data=Product::findOrFail($prodID);
        return view('product.edit',['product'=>$data]);

    }
}
