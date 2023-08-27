<?php

namespace App\Http\Controllers;

use App\Models\Project_author;

use Illuminate\Http\Request;

class ProjectAuthorController extends Controller
{
    public function showProjectAuthor(){
        $project_author = Project_author::where('status','=','on')->get();
        return view('Admin.tables.project_author',compact('project_author'));
    }

    public function create(Request $request){
        $validate = $request -> validate([
            'project_id' => 'required',
            'user_id' => 'required',
            'status' => 'required',
        ]);

        $insert = Project_author::create($validate);

        if($insert){
            return redirect()->back()->with('message_success', 'Create success!');
        }else{
            return redirect()->back()->with('message_error', 'Create not success!');
        }
        // $insert = Project_author::create([
        //     'project_id' => $request -> project_author_id,
        //     'user_id' => $request -> user_id
        // ]);
    }
    public function update(Request $request){
        $validate = $request -> validate([
            'project_id' => 'required',
            'user_id' => 'required',
            'status' => 'required',
        ]);
        $update = Project_author::find($request->project_author_id)->update($validate);

        if($update){
            return redirect()->back()->with('message_success', 'Update success!');
        }else{
            return redirect()->back()->with('message_error', 'Update not success!');
        }
    }
    public function delete(Request $request){
        $validate = $request->validate([
            'project_author_id' => 'required'
        ]);
        $delete = Project_author::find($request->project_author_id)->update([
            'status' => 'off'
        ]);
        if($delete){
            return redirect()->back()->with('message_success', 'Delete success!');
        }else{
            return redirect()->back()->with('message_error', 'Delete not success!');
        }
    }
}
