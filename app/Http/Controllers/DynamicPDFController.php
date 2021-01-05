<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DynamicPDFController extends Controller
{
    function index()
    {
        $delivery_data = $this->get_delivery_data()
        retrun view('dynamic_pdf')->with('delivery', $delivery_data);
    }
    function get_delivery_data()
    {
        $delivery_data = DB::table('deliveries')
                        ->limit(10)
                        ->get();
        return $delivery_data;
    }
}
