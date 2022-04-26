<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class DemoRequestsController extends Controller
{
    protected $guarded = [];
    
    //Demo
    public function store(){
        $data = request()->validate([
            'hospital_name' => ['required', 'string'],
            'hospital_address' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'string'],
        ]);

        DB::table('demo_requests')->insert([
            'hospital_name' => $data['hospital_name'],
            'hospital_address' => $data['hospital_address'],
            'email' => $data['email'],
            'phone' => $data['phone'],
        ]);
        
        return redirect('/')->with('status', 'Request Sent Successfully!!');
    }
}