<?php

namespace App\Http\Controllers;

use App\Medicine;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class MedicineController extends Controller
{

    public function index()
    {
        $medicines = \App\Medicine::paginate(50);
        return view('index',compact('medicines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
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
        $img = Image::make($image)->resize(90, 90);


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
            'image'=> $image ? base64_encode($img->response('png')->content()) : '',
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
        return view('edit',compact('medicine'));
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
        $image = $request->file('image');
        $img = Image::make($image)->resize(90, 90);
        $medicine->update([
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
            'image'=> $image ? base64_encode($img->response('png')->content()) : $medicine->image,
        ]);

        return redirect()->back();
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
