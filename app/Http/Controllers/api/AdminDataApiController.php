<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Projects;
use App\Models\User;
use App\Models\Project_author;

class AdminDataApiController extends Controller
{
    public function chartData(){
        $cs_project_count = Projects::where('curricolumn_id','=','1')->count();
        $it_project_count = Projects::where('curricolumn_id','=','2')->count();
        $mit_project_count = Projects::where('curricolumn_id','=','3')->count();

        return response()->json(['cs' => $cs_project_count,
                                 'it' => $it_project_count,
                                 'mit' => $mit_project_count
                                 ]);
   }

   public function userChecker(){
    $user_data = User::select('email','id')->get();
    // dd($user_data);
    foreach($user_data as $user){
        $user -> email = str_replace('@local','',$user->email);


    }
    $project_author = Project_author::pluck('user_id');

    return response()->json(['s_id' => $user_data,
                            'project_author' => $project_author]);
   }


}
