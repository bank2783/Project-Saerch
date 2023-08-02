<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;


use App\Models\Projects;
use App\Models\Project_author;
use App\Models\Category;
use App\Models\Curricolumn;
use App\Models\Advisor;
use App\Models\Author;

class AdminController extends Controller
{
    public function index(){

     return view('Admin.index');
    }
    public function ProjectList(){
        $Project_data = Projects::where('status','=','on')->get();
        return view('Admin.edit.project_list',compact('Project_data'));
    }
    public function ProjectEditListById($id){
        $project_data = Projects::where('id','=',$id)->first();
        $category = Category::all();
        $curri = Curricolumn::all();
        $advisor = Advisor::all();

        return view('Admin.edit.edit_project',compact('project_data','category','curri','advisor'));
    }

    public function ProjectEditListByIdPost(Request $request){
        $project_id = $request -> project_id;

        $project_data = Projects::where('id','=',$project_id)->first();

        if ($request->hasFile('project_file')) {
            $destination_path = 'file/project'; // เส้นทางไปยังโฟลเดอร์ที่ต้องการใน storage
            $project_file = $request->file('project_file');
            $project_name = $project_file->getClientOriginalName();
            $project_file->store($destination_path);
        }else{
            $project_name = $project_data -> project_bookfile;

        }
        Projects::where('id',$project_id)->update([
            'project_name_th' => $request -> project_name_th,
            'project_name_en' => $request -> project_name_en,
            'project_abstract_th' => $request -> abstract_th,
            'project_abstract_en' => $request -> abstract_en,
            'project_keyword_th' => $request -> keyword_th,
            'project_keyword_en' => $request -> keyword_en,
            'project_bookfile' => $project_name,
            'category_id' => $request -> category,
            'curricolumn_id' => $request -> curricolumn,

        ]);
        return redirect()->back()->with('message', 'แก้ไขข้อมูลสำเร็จ!');
    }

    public function ProjectlistSearchPost(Request $request){

        $author = Author::where('author_sid','=',$request -> sid_search)->first();

        $Project_data = Projects::where('author_id','=',$author -> id)->get();

        $sid_search = $request-> sid_search;



        return view('Admin.edit.project_list',compact('Project_data'))->with('sid_search',$sid_search);
    }

    public function showTables(){

        return view('Admin.tables.tables');
    }
}
