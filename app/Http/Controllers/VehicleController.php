<?php

namespace App\Http\Controllers;

use App\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //--------------------------------------------------------------------
      $vehicles = Vehicle::all();
      return view('vehicles.index', compact('vehicles'));
      //--------------------------------------------------------------------

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //--------------------------------------------------------------------
      return view('vehicles.create');
      //--------------------------------------------------------------------

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'vehicleName'=>'required',
             ]);
          $share = new Vehicle([
            'vehicleName' => $request->get('vehicleName'),
            'vehicleModel' => $request->get('vehicleModel'),
            'vehicleBuild' => $request->get('vehicleBuild')


          ]);
          $share->save();
          return redirect('/vehicles')->with('success', 'Vehicle has been added');
        //----------------------------------------------------------------

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {

        $products = \App\Product::where('vehicleId', $vehicle->id)->get();


        return view('vehicles.show', compact('vehicle', 'products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     //--------------------------------------------------------------------
     $vehicle = Vehicle::find($id);

     return view('vehicles.edit', compact('vehicle'));
     //--------------------------------------------------------------------

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
     //------------------------------------------------------------------------------------------------
    $request->validate([
        //'productName'=>'required',
        'vehicleName'=> 'required'
              ]);

        $vehicle = Vehicle::find($id);
        $vehicle->vehicleName = $request->get('vehicleName');
        $vehicle->vehicleModel = $request->get('vehicleModel');
        $vehicle->vehicleBuild = $request->get('vehicleBuild');


        $vehicle->save();

        return redirect('/vehicles')->with('success', 'vehicle has been updated');
     //------------------------------------------------------------------------------------------------

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vehicle  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        //------------------------------------------------------------------------------------------------
        $vehicle = Vehicle::find($id);
        $vehicle->delete();
        return redirect('/vehicles')->with('success', 'Vehicle has been deleted Successfully');
        //------------------------------------------------------------------------------------------------

    }

}
