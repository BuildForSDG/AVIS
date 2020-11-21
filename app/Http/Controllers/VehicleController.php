<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle;

class VehicleController extends Controller
{
    public function __construct()
    {
         $this->middleware('auth');
    } 
    
    public function vehicle()
    {
        return view('vehicle');
    }

    public function save_vehicle(Request $request)
    {
        $request->validate([
            'name_of_vehicle'   => 'required|string',
            'license_plate'   => 'required|string|unique:vehicles',
            'chasis_no'       => 'required|string',
            'engine_no'       => 'required|string',
            'model'   => 'required|string',
            'color'   => 'required|string',
            'owner'    => 'required|string',
            'phone_no'   => 'required|string',
            'address'   => 'required|string',
            'email' => 'required|string|email|unique:vehicles',
            'gender'     => 'required|string',
            'id_means'   => 'required|string',
            'id_means_no'   => 'required|string',
        ]);
        $vehicles = Vehicle::create($request->all());
        return redirect ('home')->with('success', 'You have successfully registered a Vehicle!') ;
    }

    public function update($id)
    {
        //getting and passing the data by id
        $vehicles = Vehicle::find($id); 
        return view ('vehicle_update', ['vehicles' => $vehicles]);
    }

        public function edit (Request $request, $id)
    {
       // validating form input
       $this->validate($request, [
        'name_of_vehicle'   => 'required|string',
        'chasis_no'       => 'required|string',
        'engine_no'       => 'required|string',
        'model'   => 'required|string',
        'color'   => 'required|string',
        'owner'    => 'required|string',
        'phone_no'   => 'required|string',
        'address'   => 'required|string',
        'gender'     => 'required|string',
        'id_means'   => 'required|string',
        'id_means_no'   => 'required|string',
    ]);

    $data = array (
        'name_of_vehicle' => $request->input('name_of_vehicle'),
        'chasis_no' => $request->input('chasis_no'),
        'engine_no' => $request->input('engine_no'),
         'model' => $request->input('model'),
         'color' => $request->input('color'),
         'owner' => $request->input('owner'),
          'phone_no' => $request->input('phone_no'),
          'address' => $request->input('address'),
           'gender' => $request->input('gender'),
           'id_means' => $request->input('id_means'),
           'id_means_no' => $request->input('id_means_no')
    );
    //update data by id n redirect
    Vehicle::where('id', $id)->update($data);
    return redirect ('home')->with('success', 'Vehicle details hs been updated successfully!') ;
    }

    //read method
    public function read (Request $request, $id)
    {
        $vehicles = Vehicle::find($id); 
        return view ('vehicle_read', ['vehicles' => $vehicles]);
  }

  //delete method
        public function delete (Request $request, $id)
        {
            Vehicle::where('id', $id)->delete();
    return redirect ('admin')->with('success', 'Vehicle details Deleted successfully!') ;
        }
}
