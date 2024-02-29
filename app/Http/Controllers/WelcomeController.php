<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function greeting(){
        return view('home');
    }
    
    public function beverage(){
        return view('category.food-beverage');
    }    

    public function beauty(){
        return view('category.beauty-health');
    }

    public function homecare(){
        return view('category.home-care');
    }
    
    public function baby(){
        return view('category.baby-kid');
    }

    public function sales(){
        return view('sales');
    }
    
    public function showProfile($id, $name)
    {
        return view('user.profile', ['id' => $id, 'name' => $name]);
    }

}
