<?php

namespace App\Http\Controllers;
use App\Models\Curricolumn;

use Illuminate\Http\Request;

class CurricolumnController extends Controller
{
    public function showCurricolumn(){
        $curricolumn = Curricolumn::where('status','=','on')->get();


        return view('Admin.tables.curricolumn',compact('curricolumn'));
    }
    public function create(Request $request){

        $validate = $request->validate([
            'curricolumn_name' => 'required',
            'curricolumn_description' => 'required',
            'status' => 'required',
        ]);

        $insert = Curricolumn::create($validate);
        if($insert){
            return redirect()->back()->with('message_success', 'Create success!');
        }else{
            return redirect()->back()->with('message_error', 'Create not success!');
        }
    }
    public function update(Request $request){
        $validate = $request->validate([
            'curricolumn_id' => 'required',
            'curricolumn_name' => 'required',
            'curricolumn_description' => 'required',

        ]);
        $update = Curricolumn::find($request->curricolumn_id)->update($validate);

        if($update){
            return redirect()->back()->with('message_success', 'Update success!');
        }else{
            return redirect()->back()->with('message_error', 'Update not success!');
        }
    }
    public function delete(Request $request){
        $validate = $request->validate([
            'curricolumn_id' => 'required',
        ]);
        $delete = Curricolumn::find($request->curricolumn_id)->update([
            'status' => 'off'
        ]);
        if($delete){
            return redirect()->route('show_curricolumn')->with('message_success', 'delete success!');
        }else{
            return redirect()->route('show_curricolumn')->with('message_error', 'delete not success!');
        }
    }
}
