<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Crypt;
use PDF;
use App\Models\Projects;
use App\Models\Project_author;
use App\Models\Category;
use App\Models\Curricolumn;
use App\Models\Advisor;
use App\Models\Author;
use App\Models\stat_counter;
use App\Models\User;
use Illuminate\Support\Facades\Redis;


class AdminController extends Controller
{
    public function Adminindex(){

        $project_data = Projects::where('status','=','on')->get();
        $project_sum = $project_data->count();
       
        $stat_counter_views = stat_counter::sum('views');
        $stat_counter_downloads = stat_counter::sum('downloads');
        
        $user_data = User::all();
        $user_counter = $user_data->count();
        
        
     return view('Admin.index',compact('project_sum','stat_counter_views','stat_counter_downloads','user_counter'));
    }
    public function ProjectList(){
        $Project_data = Projects::where('status','=','on')->get();
        $advisor = Advisor::all();
        $author = Author::all();
        $curricolumn = Curricolumn::all();
        $category = Category::all();
        return view('Admin.edit.project_list',compact('Project_data','advisor','author','curricolumn','category'));
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
            $project_path = $project_data -> project_bookfile;

        }
        $update = Projects::where('id',$project_id)->update([
            'project_name_th' => $request -> project_name_th,
            'project_name_en' => $request -> project_name_en,
            'project_abstract_th' => $request -> abstract_th,
            'project_abstract_en' => $request -> abstract_en,
            'project_keyword_th' => $request -> keyword_th,
            'project_keyword_en' => $request -> keyword_en,
            'project_bookfile' => $project_path,
            'category_id' => $request -> category,
            'curricolumn_id' => $request -> curricolumn,
            'advisor_id' => $request->advisor
        ]);
        if($update){
            return redirect()->back()->with('message_success', 'Update Success!');
        }else{
            return redirect()->back()->with('message_error', 'Update error');
        }
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

    public function projectUpload(Request $request){
        $validate = $request->validate([
            'project_name_th' => 'required',
            'project_name_en' => 'required',
            'abstract_th' => 'required',
            'abstract_eng' => 'required',
            'keyword_th' => 'required',
            'keyword_eng' => 'required',
            'curricolumn' => 'required',
            'advisor_name' => 'required',
            'advisor_tel' => 'required',
            'advisor_email' => 'required',
            'author_name' => 'required',
            'author_tel' => 'required',
            'author_email' => 'required',
            'author_gender' => 'required',
            'author_sid' => 'required',
        ]);

        $author_insert = Author::create([
            'author_name' => $request -> author_name,
            'author_sid' => $request -> author_sid,
            'author_gender' => $request -> author_gender,
            'author_tel' => $request -> author_tel,
            'author_email' => $request -> author_email,
            'status' => 'on',
            'curicolumn_id' =>$request -> curricolumn
        ]);



        $advisor_insert = Advisor::create([
            'advisor_name' => $request -> advisor_name,
            'advisor_tel' => $request -> advisor_tel,
            'advisor_email' => $request -> advisor_email,
            'status' => 'on'
        ]);

        // dd($res -> curricolumn);
        $project_name = 'mock up';

        $projects_insert = Projects::create([
            'project_name_th' => $request -> project_name_th,
            'project_name_en' => $request -> project_name_en,
            'project_abstract_th' => $request -> abstract_th,
            'project_abstract_en' => $request -> abstract_eng,
            'project_keyword_th' => $request -> keyword_th,
            'project_keyword_en' => $request -> keyword_eng,
            'project_bookfile' => $project_name,
            'status' => 'on',
            'advisor_id' => $advisor_insert -> id,
            'category_id' => $request -> category ,
            'user_id' => Auth::user()->id,
            'author_id' => $author_insert->id,
            'curriculum_id' => $request -> curricolumn
        ]);

        $project_author_insert = Project_author::create([
            'project_id' => $projects_insert->id,
            'user_id' => Auth::user()->id,
            'status' => 'on'
        ]);
    }

    public function Download($id){
        $project_data = Projects::where('id','=',$id)->first();
        
        $file_path = $project_data -> project_bookfile;
        $file_name = $project_data -> project_name_th;

        stat_counter::where('project_id','=',$id)->increment('downloads');
        return Storage::download($file_path);
    }

    public function DeleteProject($id){
        
        $delete = Projects::find($id)->update([
            'status' => 'off',
        ]);
        if($delete){
            return redirect()->back()->with('message_success', 'Delete Success!');
        }else{
            return redirect()->back()->with('message_error', 'Update error');
        }
    }

    public function addProjectByAdmin(Request $request){
        
        $author_insert = Author::create([
            'author_name' => $request->author_name,
            'curicolumn_id' => $request->curricolumn,
            'status' => 'on'
        ]);
        if ($request->hasFile('project_file')) {
            $destination_path = 'file/project'; // เส้นทางไปยังโฟลเดอร์ที่ต้องการใน storage
            $project_file = $request->file('project_file');
            $project_name = $project_file->getClientOriginalName();
            $path = $request->file('project_file')->store('file/project');
        }
        
        $insert = Projects::create([
            'project_name_th' => $request->project_name_th,
            'project_name_en' => $request->project_name_en,
            'project_abstract_th' => $request->abstract_th,
            'project_abstract_en' => $request->abstract_en,
            'project_keyword_th' => $request->keyword_th,
            'project_keyword_en' => $request->keyword_en,
            'project_bookfile' => $path,
            'author_id' => $author_insert->id,
            'advisor_id' => $request->advisor,
            'category_id' => $request->category,
            'curricolumn_id' => $request->curricolumn,
            'education_year' => $request->education_year,
            'status' => 'on'
        ]);

        $stat_counter = new stat_counter();
        $stat_counter ->project_id = $insert ->id;
        $stat_counter ->views = 0;
        $stat_counter->downloads = 0;
        $stat_counter->save();



        if($insert){
            return redirect()->back();
        }else{
            return redirect()->back();
        }


    }


}
