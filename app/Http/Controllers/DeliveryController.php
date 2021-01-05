<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use Illuminate\Http\Request;
//use DataTables;
use DB;
use PDF;

class DeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('delivery.index');
        $deliveries = Delivery::all();
        return view('delivery.index')->with('deliveries',$deliveries);
    }

    public function exportPdf(){
        $deliveries = Delivery::all();
        //$pdf = PDF::loadView('delivery.index', compact('deliveries'));
        $pdfSettings = [
            'defaultFont' => 'sans-serif',
        ];
        $pdf = \PDF::loadView('report.pdf', compact('deliveries'))->setPaper('a4', 'landscape')->setOptions($pdfSettings);
        return $pdf->download('delivery.pdf');
    }

    public function table()
    {
        //return view('delivery.show',compact('delivery'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function show(Delivery $delivery)
    {
        //return view('delivery.show');
        //$delivery = Delivery::latest()->paginate(10);

        //return view('delivery.show',compact('delivery'))->with('i', (request()->input('page', 1) - 1) * 5);
        //return view("delivery.index")->with("Deliveries",$deliveries);
        return $delivery;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function edit(Delivery $delivery)
    {
        return view('delivery.edit',compact('delivery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Delivery $delivery)
    {
        $request->validate([
            'address' => 'required',
            'status' => 'required',
            'report' => 'required',
        ]);

        $delivery->update($request->all());

        return redirect()->route('delivery.index')
                        ->with('success','Delivery updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Delivery $delivery)
    {
        $delivery->delete();

        return redirect()->route('delivery.index')
                        ->with('success','Delivery deleted successfully');
    }


}
