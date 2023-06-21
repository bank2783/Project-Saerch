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
        $project_data = Projects::all();


        return view('welcome',compact('project_data'));
    }

    public function viewProject($id){
        $id_decrypt = Crypt::decrypt($id);
        $project_data = Projects::where('id','=',$id_decrypt)->first();
        // dd($project_data -> project_bookfile);
        $filePath = 'public/bird_mark,+Journal+manager,+153_สมพล+สุขเจริญพงษ์.pdf';
        $fileSize = Storage::size($filePath);

        return view('Project.view_project',compact('project_data','fileSize'));
    }

    public function Profile(){

        $user_id = Auth::user()->id;

        if($project_author = Project_author::where('user_id','=',$user_id)->first()){
            $project_data = Projects::where('id','=',$project_author -> project_id)->first();
            $filePath = 'public/bird_mark,+Journal+manager,+153_สมพล+สุขเจริญพงษ์.pdf';
            $fileSize = Storage::size($filePath);
            return view('profile.profile',compact('project_data','fileSize'));

        }else{
            return redirect('/');
        }

    }

    public function editProject($id){
        $id_decrypt = Crypt::decrypt($id);
        $project_data = Projects::where('id','=',$id_decrypt)->first();
        $Category = Category::all();
        $Curricolumn = Curricolumn::all();
        $Advisor = Advisor::all();
        return view('profile.profile_edit',compact('project_data','Category','Curricolumn','Advisor'));
    }
}
