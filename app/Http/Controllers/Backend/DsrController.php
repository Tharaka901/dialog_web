<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DsrController extends Controller
{
    public function loadPendingDsr(){
        return view('backend.dsr.pendin_dsr');

    }

    public function completeDsr(){
        return view('backend.dsr.complete_dsr');
    }

    public function approveDsr(){
        return view('backend.dsr.approve');
    }
}
