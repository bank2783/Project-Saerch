<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advisor;

class AdvisorController extends Controller
{
    public function showAdvisorTable(){
        $advisor = Advisor::where('status','=','on')->get();
        return view('Admin.tables.Advisor',compact('advisor'));
    }

    public function insert_advisor(Request $request){
        $validate = $request -> validate([
            'advisor_name' => 'required',
            'advisor_email' => 'required|email',
            'advisor_tel' => 'required',
        ]);

        $insert = new Advisor();
        $insert -> advisor_name = $request -> advisor_name;
        $insert -> advisor_email = $request -> advisor_email;
        $insert -> advisor_tel = $request -> advisor_tel;
        $insert -> status =  'on';
        $insert -> save();

        if($insert){
            return redirect()->back()->with('message_success', 'เพิ่มข้อมูลสำเร็จ!');
        }else{
            return redirect()->back()->with('message_error', 'เพิ่มข้อมูลไม่สำเร็จ!');
        }
    }

    public function Update_advisor(Request $request){

        $validate = $request -> validate([
            'advisor_name' => 'required',
            'advisor_email' => 'required',
            'advisor_tel' => 'required',
        ]);

        $update = Advisor::find($request->advisor_id)->update([
            'advisor_name' => $request->advisor_name,
            'advisor_email' => $request->advisor_email,
            'advisor_tel' => $request->advisor_tel,
        ]);
        if($update){
            return redirect()->back()->with('message_success', 'อัพเดทมูลสำเร็จ!');
        }else{
            return redirect()->back()->with('message_error', 'อัพเดทข้อมูลไม่สำเร็จ!');
        }
    }



    public function delete_advisor(Request $request){

        $update = Advisor::find($request -> advisor_id)->update([
            'status' => 'off'
        ]);
        if($update){
            return redirect()->back()->with('message_success', 'Delete success!');
        }else{
            return redirect()->back()->with('message_error', 'Delete not success!');
        }
    }


}
