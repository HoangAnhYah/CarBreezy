<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createcar(Request $request)
    {
        $car_name = $request -> car_name;
        $car_company = $request -> car_company;
        $car_model = $request -> car_model;
        $car_price_in = $request -> car_price_in;
        $car_price_out = $request -> car_price_out;
        $car_status = $request -> car_status;
        $isExist = Car::select()->where('car_name', $car_name)->exists();
        if($isExist){
            return redirect()->back()->with('fail-msg','Car Name is already exist');
        }
        else{
            $car = new Car;
            $car->car_name = $car_name;
            $car->car_company = $car_company;
            $car->car_model = $car_model;
            $car->car_price_in = $car_price_in;
            $car->car_price_out = $car_price_out;
            $car->car_status = $car_status;
            $car->save();
            return redirect()->back()->with('succ-msg','Create new car successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $car_name = $request -> car_name;
        $car_engine = $request -> car_engine;
        $car_fuel_type = $request -> car_fuel_type;
        $car_weight = $request -> car_weight;
        $car_color = $request -> car_color;
        $car_gear = $request -> car_gear;
        $car_drive_system = $request -> car_drive_system;
        $car_brake = $request -> car_brake;
        $car_cylinder_capacity = $request -> car_cylinder_capacity;
        $car_hp = $request -> car_hp;
        $car_content = $request -> car_content;
        $car_manufacturer_year = $request -> car_manufacturer_year;
        $car_emission_level = $request -> car_emission_level;
        $car_drive_system = $request -> car_drive_system;

        Car::where('car_name', $car_name)
        ->update(['car_engine' => $car_engine,
        'car_fuel_type' => $car_fuel_type,
        'car_weight' => $car_weight,
        'car_color' => $car_color,
        'car_gear' => $car_gear,
        'car_drive_system' => $car_drive_system,
        'car_brake' => $car_brake,
        'car_cylinder_capacity' => $car_cylinder_capacity,
        'car_hp' => $car_hp,
        'car_content' => $car_content,
        'car_manufacturer_year' => $car_manufacturer_year,
        'car_emission_level' => $car_emission_level,
        'car_drive_system' => $car_drive_system
        ]);
        return view('car')->with('succ-msg','Edit car successfully');
    }

    public function show(Request $request)
    {
        $car_name = $request->car_name;
        $car_show = Car::where('car_name', $car_name)->get();
        return view('detail', compact('car_show'));
            
            //->with('car_fuel_type_show',$car_fuel_type_show);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
