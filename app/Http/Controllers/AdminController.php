<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\eReject;

class AdminController extends Controller
{
    public function index(){
        if (Auth::id()){
            $usertype=Auth()->user()->usertype;  

            if($usertype=='admin'){
                return view('admin.index');
            }
            else if ($usertype=='user')
            {
                return view('home.index');  
            }
        }
        // if there is no auth
        else
        {
            return redirect()->back();
        }
    }
      public function eReject_page() {
        return view('admin.eReject');  
      }

      public function add_eReject(Request $request) {
        $data = new eReject;
        $data->sub_code = $request->sub_code; 
        $data->litho = $request->litho; 
        $data->roll_no = $request->roll_no; 
        $data->reg_no = $request->reg_no; 
        $data->addl = $request->addl; 
        $data->save();
        return redirect()->back()->with('message','Data added Successfully');
      }


}
