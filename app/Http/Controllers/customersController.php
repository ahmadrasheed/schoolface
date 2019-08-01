<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Company;

class customersController extends Controller
{
    public function __construct(){
        //$this->middleware('auth')->except('list');
    }

 public function list(){
     //$this->authorize('create',App\Customer::class);

    //$customers=['Ahmad rasheed2','ali Mokeem','Omar al iraqi','hussain 2019'];
    //$customers=Customer::all();
    $companies=Company::all();
    

    
    //dd($companies[0]);

    $customers=Customer::paginate(5);
    
    return view('customers',['customers'=>$customers,'companies'=>$companies]);

 }
 public function store(){

        //$this->authorize('create',Customer::class);

        $c=Customer::create($this->validatedata());
        $this->storeImage($c);
        

    /*  $c=new Customer();
     $c->name=request('name');
     $c->email=request('email');
     $c->age=30;
     $c->active=request('active');
     $c->save(); */
     session()->flash('message','new is added');
     //return Back()->with('message','new student has been created!');
     return Back();
 }

 public function show(Customer $customer){

    //$this->authorize('view',$customer);
     //$customer=Customer::findOrfail($customer);
     //dd($customer);
     
     return view('customers.show',compact('customer'));
 }

 public function validatedata(){
    $data=request()->validate([
        'name'=>'required|min:3',
        'email'=>'required|email',
        'age'=>'',
        'company_id'=>'',
        'active'=>'',
    ]);
    if(request()->has('image')){
        request()->validate([
            'image'=>'file|image|max:5000',
        ]);
    }

    return $data;
 }

 public function storeImage($customer){
    if(request()->has('image')){
        $customer->update([
            'image'=>request()->image->store('uploads','app/public/'),
        ]);
    }
 }

}// end class
