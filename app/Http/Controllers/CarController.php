<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();
        //return Car::all();
        return view('cars.index',compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all(); for check
        
        $this->validate($request,[ //my own
            'name' => 'required',
            'color' => 'required',
            'company' => 'required',    
        ]);

        $car = new Car;
        $car->name = $request->input('name'); //my own format 
        $car->color = $request->input('color'); //default = request('color');
        $car->company = $request->input('company');

        $car->save();
        return redirect('cars/create')->with('response','Data saved successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //return $car;       
        return view('cars.show',compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
         return view('cars.edit',compact('car'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        //return 'update'; to check
        $car->name = $request->input('name'); //my own format 
        $car->color = $request->input('color'); //default = request('color');
        $car->company = $request->input('company');

        $car->save();
        return redirect('/cars')->with('response','Data saved successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return redirect('/cars')->with('response','Data deleted successfully');

    }
}

/*  
  1.normal crud like get post,route get,post etc.
  2.type resource in web for all operations in web.php
  3.check php artisan route::list in cmd
  4.check and type in url that you saw in cmd.
  5.first it check index blade page, pub func index(), there u can see list of cars
  6.if you click on index  blade page thn redirect to show page namely in 
    pub func show(), 
  7.then type cars/create in url you can see add car page namely create blade page, cont name is pub func create().
  8.then type the data and press submit it go through the cont namely
  pub func store(),it helps to save in db.
  9.then i got error in code perhaps follow that video
  10.so, watched other vid and changed some action in form
  11.namely, {{route('cars.update',$car->id)}}, it will work.

    */