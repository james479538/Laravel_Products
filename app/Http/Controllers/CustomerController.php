<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class CustomerController extends Controller
{
    public function index()
    {
        $data = DB::table("customers")->get();
        return view('customer.index',['customers'=>$data]);
    } 

    public function delete($id)
    {
        $delete=DB::table("customers")->where("id", "=", $id)->delete();
        return redirect('/')->with("success", "Customer deleted successfully");
    }

    public function addCustomer()
    {
        return view('customer.add');
    }

    public function saveCustomer(Request $req)
    {
        //dd($req);
        $validated=$req->validate([
            "lastName"=>['required','min:4'],
            "firstName"=>['required','min:4'],
            "email"=>['required','email', Rule::unique('users','email'),],
            "contactNumber"=>['required','min:11'],
            "address"=>['required','min:4']
        ]);

        $data=Customer::create($validated);
        return redirect("/")->with('success', 'Customer addedd successfully!');
    }

    public function edit($id)
    {
        $data=Customer::findOrFail($id);
        return view('customer.edit',['customer'=>$data]);
    }

    public function updateCustomer(Request $req){
        $req->validate([
            "lastName"=>['required','min:4'],
            "firstName"=>['required','min:4'],
            "email"=>['required','email',],
            "contactNumber"=>['required','min:11'],
            "address"=>['required','min:4']
        ]);

    $data=Customer::find($req->id);
    $data->lastName=$req->lastName;
    $data->firstName=$req->firstName;
    $data->email=$req->email;
    $data->address=$req->address;
    $data->contactNumber=$req->contactNumber;
    $data->save();
    return redirect("/")->with('success', 'Customer edited successfully!');
    }
}
