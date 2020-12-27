<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\gallery\Mgallery;

class PagesController extends Controller
{
    public function __construct(){
        $this->gallery = new Mgallery;
    }
    // views
    public function ShowHome(){

        return view('index');
    }
    public function ShowGallery(){

        return view('gallery.gallery');
    }
    public function ShowContact(){

        return view('contact.contact');
    }
    public function ShowProduct(){

        return view('product.product');
    }
    public function ShowFranchise(){

        return view('franchise.franchise');
    }
}
