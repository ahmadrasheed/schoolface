<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class testvueController extends Controller
{


    
    public function list(){
        

        $companies=Company::all();
        //dd($companies);
        return $companies;

    }
}
