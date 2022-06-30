<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function SalesSummery(){
        return view('backend.report.sales_summery');
    }

    public function CollectionReport(){
        return view('backend.report.collection');
    }

}
