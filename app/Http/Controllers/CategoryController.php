<?php

namespace App\Http\Controllers;

use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showCategory(){
        $category = Category::where('status','=','on')->get();
        return view('Admin.tables.Category',compact('category'));
    }
    public function create(Request $request){
        $validate = $request->validate([
            'category_name' => 'required',
            'category_description' => 'required'
        ]);

        $create = Category::create([
            'category_name' => $request->category_name,
            'category_description' => $request->category_description,
            'status' => 'on'
        ]);

        if($create){
            return redirect()->back()->with('message_success', 'Created success!');
        }else{
            return redirect()->back()->with('message_error', 'Create not success!');
        }
    }
    public function update(Request $request){
        $validate = $request->validate([
            'category_id' => 'required',
            'category_name' => 'required',
            'category_description' => 'required',
            'status' => 'required',
        ]);
        $update = Category::find($request->category_id)->update($validate);

        if($update){
            return redirect()->back()->with('message_success', 'Update success!');
        }else{
            return redirect()->back()->with('message_error', 'Update not success!');
        }
    }

    public function delete(Request $request){
        $validate = $request->validate([
            'category_id' => 'required',
        ]);
        $delete = Category::find($request->category_id)->update([
            'status' => 'off'
        ]);

        if($delete){
            return redirect()->back()->with('message_success', 'delete success!');
        }else{
            return redirect()->back()->with('message_error', 'delete not success!');
        }
    }
}
