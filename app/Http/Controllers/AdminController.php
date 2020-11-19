<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle;
use App\Help;
use App\Surveillance;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function vehicle ()
   { 
    $vehicles = Vehicle::all();
    return view ('vehicle_admin', ['vehicles' => $vehicles]);
   }
    
   public function surveillance ()
   { 
    $surveillances = Surveillance::all();
    return view ('surveillance_admin', ['surveillances' => $surveillances]);
   }
    
    public function request()
      { 
        $helps = Help::all();
        return view ('request', ['helps' => $helps]); 
      }

      public function capture()
      {
        return view ('imagecapture');
      }
}
