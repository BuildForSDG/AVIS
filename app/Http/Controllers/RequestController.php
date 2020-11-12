<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle;

class RequestController extends Controller
{
    //

    // public function profile()
    // {
    //     return view ('profile');
    // }

    // public function stdprofile (Request $student_id){
    //    $student_id = Request::get( 'student_id' );
    //    if($student_id != ""){
   
    //    $user = Course::where( 'student_id', 'LIKE', '%' . $student_id . '%' )->get();
    //                     // ->where('email', 'LIKE', '%' . $email . '%')
    //     if (count ( $user ) > 0)
    //     return view('/profile')->withDetails( $user )->withQuery($student_id);
    //      }
   
    //     return view ('/profile')->withMessage ("No Details found for this Student, Student is yet to do his / her course registration!");
    //     }
}
