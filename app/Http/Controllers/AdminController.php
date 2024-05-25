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
       $data=eReject::all();
           
        return view('admin.eReject',compact('data'));  

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
      public function eReject_delete($id){
        $data=eReject::find($id);
        $data->delete();
        return redirect()->back()->with('message','eReject Data Deleted Successfully');
      }
      public function eReject_edit($id){
        $data=eReject::find($id);
        return view('admin.eReject_edit',compact('data'));
      }
      public function update_eReject(Request $request, $id){
        $data=eReject::find($id);
        $data->sub_code=$request->sub_code;
        $data->litho=$request->litho;
        $data->roll_no=$request->roll_no;
        $data->reg_no=$request->reg_no;
        $data->addl=$request->addl;
        $data->save();
        return redirect('/eReject_page')->with('message','Data Updated Successfully');
        //return redirect()->back()->with('message','Data Updated Successfully');
      }
      public function eReject_print(){
        $erejects=eReject::all();
        return view('admin.eReject_print');  
      }
      
}
