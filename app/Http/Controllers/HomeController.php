<?php

namespace App\Http\Controllers;


use App\Models\Advisor;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;


use App\Models\Projects;
use App\Models\Project_author;
use App\Models\Category;
use App\Models\Curricolumn;
use App\Models\stat_counter;

use SebastianBergmann\CodeCoverage\Report\Xml\Project;
use SplFileInfo;

class HomeController extends Controller
{
    public function index() {

        // $data = [];

        // if(Auth::check()) {
        //     $data['name'] = Auth::user()->name;
        // } else {
        //     $data['name'] = 'Not Login';
        // }
        $category = Category::where('status','=','on')->get();
        $curricolumn = Curricolumn::where('status','=','on')->get();
        $project_data = Projects::where('status','=','on')->paginate(2);
        


        return view('welcome',compact('project_data','category','curricolumn'));
    }

    public function viewProject($id){
        $id_decrypt = Crypt::decrypt($id);
        $project_data = Projects::where('id','=',$id_decrypt)->first();
        // dd($project_data -> project_bookfile);
        $filePath = $project_data -> project_bookfile;
        $fileSize = Storage::size($filePath);
        $stat_counter = stat_counter::where('project_id','=',$project_data->id)->first();
        stat_counter::where('project_id','=',$id_decrypt)->increment('views');
        return view('Project.view_project',compact('project_data','fileSize','stat_counter'));
    }

    public function Profile(){

        $user_id = Auth::user()->id;

        $project_author_data = Project_author::where('user_id','=',$user_id)->first();
        if($project_author_data  ?? false){
            $project_id = $project_author_data -> project_id;
        $project_data = Projects::where('id','=',$project_id)->first();
        $stat_counter = stat_counter::where('project_id','=',$project_data->id)->first();
        $filePath = $project_data -> project_bookfile;
        $fileSize = Storage::size($filePath);

        return view('profile.profile',compact('project_data','fileSize','stat_counter'));
        }else{
            return redirect('/');
        }

        

    }

    public function editProject($id){
        $id_decrypt = Crypt::decrypt($id);
        $project_data = Projects::where('id','=',$id_decrypt)->first();
        $category = Category::all();
        $curricolumn = Curricolumn::all();
        $Advisor = Advisor::all();
        return view('profile.profile_edit',compact('project_data','category','curricolumn','Advisor'));
    }

    public function homeSearch(Request $request){
        $category = Category::where('status','=','on')->get();
        $curricolumn = Curricolumn::where('status','=','on')->get();
        $project_data = Projects::where('status','=','on')->paginate(8);
        if($request->input('keyword_search')){
            $keyword = $request->input('keyword_search');
            $project_data = Projects::where('project_name_th','like','%'.$keyword.'%')->paginate(8);
        }
        elseif($request->input('curricolumn')){
            
            $project_data = Projects::where('curricolumn_id','=',$request->curricolumn)->paginate(8);
            
        }
        elseif($request->input('category')){
           
            $project_data = Projects::where('category_id','=',$request->category)->paginate(8);
        }
        elseif($request->input('keyword_search') and $request->input('curricolumn')){
            $keyword = $request->input('keyword_search');
            $project_data = Projects::where('project_name_th','like','%'.$keyword.'%')
                                   ->where('curricolumn_id','=',$request->curricolumn)->paginate(8);
        }
        elseif($request->input('keyword_search') and $request->input('category') ){
            $keyword = $request->input('keyword_search');
        $project_data = Projects::where('project_name_th','like','%'.$keyword.'%')
                    ->where('category_id','=',$request->category)->paginate(8);
        }elseif($request->input('curricolumn') and $request->input('category')){
            $project_data = Projects::where('curricolumn_id','=',$request->curricolumn)
                        ->where('category','=',$request->category)->paginate(8);
        }elseif($request->input('keyword_search') and $request->input('curricolumn') and $request->input('category') ){
            $keyword = $request->input('keyword_search');
            $project_data = Projects::where('project_name_th','like','%'.$keyword.'%')
                                    ->where('curricolumn_id','=',$request->curricolumn)
                                    ->where('category_id','=',$request->category)->paginate(8);
        }
        return view('welcome',compact('project_data','category','curricolumn'));
    }


}
