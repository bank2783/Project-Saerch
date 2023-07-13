<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Projects;

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
}
