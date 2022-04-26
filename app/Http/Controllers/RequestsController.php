<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RequestsController extends Controller
{ 

    protected $guarded = [];
    
    //Beta Store
    public function store(){
        $data = request()->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);

        DB::table('beta_requests')->insert([
            'email' => $data['email'],
        ]);
        
        return redirect('/bloodzone-beta-program')->with('status', 'Request Sent Successfully!!');
    }
}