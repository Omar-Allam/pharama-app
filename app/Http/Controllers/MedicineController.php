<?php

namespace App\Http\Controllers;

use App\Medicine;
use Illuminate\Http\Request;
use Imagick;
class MedicineController extends Controller
{

    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add-medicine');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('image');
        Medicine::create([
            'name'=>$request->name,
            'active_constituent'=>$request->active_constituent,
            'ar_name'=>$request->ar_name,
            'dose'=>$request->dose,
            'type'=>$request->type_id,
            'usage'=>$request->usage,
            'company'=>$request->company_id,
            'price'=>$request->price,
            'capacity'=>$request->capacity,
            'dose_arabic'=>$request->dose_arabic,
            'usage_arabic'=>$request->usage_arabic,
            'image'=>base64_encode(file_get_contents($image->getRealPath())),
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function show(Medicine $medicine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicine $medicine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicine $medicine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicine $medicine)
    {
        //
    }
}
