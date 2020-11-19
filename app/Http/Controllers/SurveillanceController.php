<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Surveillance;

class SurveillanceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // offender & stolen cars will be reason surveiilance
    public function surveillance()
    {
        return view('surveillance');
    }

    
    public function save(Request $request)
    {
        $request->validate([
            'name_of_vehicle'   => 'required|string',
            'license_plate'   => 'required|string',
            'model'   => 'required|string',
            'color'   => 'required|string',
            'owner'    => 'required|string',
            'phone_no'   => 'required|string',
            'reason'   => 'required|string',
            'priority' => 'required|string',
            // 'image' => 'required|string',
        ]);
        $surveillance = Surveillance::create($request->all());
        return redirect ('home')->with('success', 'You have successfully created a surveillance check!') ;
    }

    public function update($id)
    {
        //getting and passing the data by id
        $surveillances = Surveillance::find($id); 
        return view ('update_surveillance', ['surveillances' => $surveillances]);
    }

        public function edit (Request $request, $id)
    {
       // validating form input
       $this->validate($request, [
           'name_of_vehicle'   => 'required|string',
            'license_plate'   => 'required|string',
            'model'   => 'required|string',
            'color'   => 'required|string',
            'owner'    => 'required|string',
            'phone_no'   => 'required|string',
            'reason'   => 'required|string',
            'priority' => 'required|string',
    ]);
    
    $data = array (
         'name_of_vehicle' => $request->input('name_of_vehicle'),
         'license_plate' => $request->input('license_plate'),
         'model' => $request->input('model'),
         'color' => $request->input('color'),
         'owner' => $request->input('owner'),
         'phone_no' => $request->input('phone_no'),
         'reason' => $request->input('reason'),
         'priority' => $request->input('priority')
    );
    //update data by id n redirect
    Surveillance::where('id', $id)->update($data);
    return redirect ('home')->with('success', 'Surveillance details has been updated successfully!') ;
    }

    //read method
    public function read (Request $request, $id)
    {
        $surveillances = Surveillance::find($id); 
        return view ('surveillance_read', ['surveillances' => $surveillances]);
  }

  //delete method
        public function delete (Request $request, $id)
        {
            Surveillance::where('id', $id)->delete();
    return redirect ('admin')->with('success', 'Surveillance details Deleted successfully!') ;
        }
}
