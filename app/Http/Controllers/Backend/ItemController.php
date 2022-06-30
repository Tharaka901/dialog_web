<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function Item(){
        return view('backend.item.item');
    }

    public function ItemRegistor(){
        return view('backend.item.item_registor');
    }

    public function ItemUpdate(){
        return view ('backend.item.item_update');
    }
}
