<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle;
use App\Help;

class RequestController extends Controller
{
    //

    public function profile()
    {
        return view ('profile');
    }

       public function ownerprofile (Request $license_plate){
       $license_plate = Request::get( 'license_plate');
       if($license_plate != ""){
   
       $user = Vehicle::where( 'license_plate', 'LIKE', '%' . $license_plate . '%' )->get();
                        // ->where('email', 'LIKE', '%' . $email . '%')
        if (count ( $user ) > 0)
        return view('profile')->withDetails( $user )->withQuery($license_plate);
         }
   
        return view ('profile')->withMessage ("No Details found for this Vehicle!");
        }

        public function request()
        { 
        $helps = Help::all();
        return view ('request', ['helps' => $helps]); 
        }

        public function help ()
        {
            return view ('help');
        }
    
    
        public function insert_help (Request $request)
        {
            
           // validating form input
            $this->validate($request, [
                'name' =>'required',
                'complaint' => 'required',
                'email' => 'required',
                'phone_no' => 'required'
    
            ]);
                //saving the data
                $helps = new Help;
                $helps-> name = $request->input('name');
                $helps-> complaint = $request->input('complaint');
                $helps-> email = $request->input('email');
                $helps-> phone = $request->input('phone_no');
    
                $helps->save();
            return redirect ('welcome')->with('success', 'Your complaint has been sent successfully!, we will get back to you ASAp') ;
        }
}