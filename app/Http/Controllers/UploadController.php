<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Curricolumn;
use App\Models\Projects;
use App\Models\Author;
use App\Models\Advisor;
use App\Models\Project_author;
use App\Models\User;
use App\Models\stat_counter;


class UploadController extends Controller
{
    public function showUploadForm(){
        $curricolumn = Curricolumn::all();
        $category = Category::all();
        $Advisor = Advisor::all();

        return view('Project.upload',compact('curricolumn','category','Advisor'));
    }

    public function storeProject(Request $res){

        // dd($res);
        $Validator = Validator::make($res -> all(),
        [
            'project_name_th' => ['required'],
            'project_name_en' => ['required'],
            'abstract_th' => ['required'],
            'abstract_eng' => ['required'],
            'keyword_th' => ['required'],
            'keyword_eng' => ['required'],
            'curricolumn' => ['required'],
            'advisor_name' => ['required'],
            'author_name' => ['required'],
            'author_tel' => ['required'],
            'author_email' => ['required'],
            'author_gender' => ['required'],
            'author_sid' => ['required'],
            'project_file' => ['required'],
        ]
        ,
        [
            ///////////// project_thai_name validate ////////////
            'project_thai_name.required' => 'กรุณากรอกชื่อโครงงาน',
            // 'project_thai_name.regex' => 'ใส่ชื่อภาษาไทยเท่านั้น',

            ///////////// project_eng_name validate ////////////
            'project_eng_name.required' => 'กรุณากรอกชื่อโครงงาน',
            // 'project_thai_name.regex' => 'ใส่ชื่อภาษาอังกฤษเท่านั้น',

            ///////////// abstract_th validate ////////////
            'abstract_th.required' => 'กรุณาใส่บทคัดย่อ',


            ///////////// abstract_eng validate ////////////
            'abstract_eng.required' => 'กรุณาใส่บทคัดย่อ',

            ///////////// abstract_eng validate ////////////
            'keyword_th.required' => 'กรุณาใส่คีย์เวิร์ด',

            ///////////// abstract_eng validate ////////////
            'keyword_eng.required' => 'กรุณาใส่คีย์เวิร์ด',

            ///////////// curricolumn validate ////////////
            'curricolumn.required' => 'กรุณาเลือกหลักสูตร',

            ///////////// advisor validate ////////////
            'advisor_name.required' => 'กรุณากรอกชื่ออาจารย์ที่ปรึกษา',


            ///////////// author validate ////////////
            'author_name.required' => 'กรุณากรอกชื่อ',
            'author_tel.required' => 'กรุณากรอกเบอร์โทรศัพท์',
            'author_email.required' => 'กรุณากรอกอีเมลล์',
            'author_sid.required' => 'กรุณากรอกรหัสนักศึกษา',
            'author_gender.required' => 'กรุณาเลือกเพศ',

            ///////////// PDF validate ////////////
            // 'project_file.required' => 'กรุณาเพิ่มไฟล์โครงงาน',
            // 'project_file.mimes' => 'ใช้ไฟล์ PDF เท่านั้น'

        ]
    )->validate();

    // if($Validator->faile()){
    //     return redirect()->back()->withErrors($validator)->withInput();
    // }

    if ($res->hasFile('project_file')) {
        $destination_path = 'file/project'; // เส้นทางไปยังโฟลเดอร์ที่ต้องการใน storage
        $project_file = $res->file('project_file');
        $project_name = $project_file->getClientOriginalName();
        $path = $res->file('project_file')->store('file/project');
    }



    $author_insert = Author::create([
        'author_name' => $res -> author_name,
        'author_sid' => $res -> author_sid,
        'author_gender' => $res -> author_gender,
        'author_tel' => $res -> author_tel,
        'author_email' => $res -> author_email,
        'status' => 'on',
        'curicolumn_id' =>$res -> curricolumn
    ]);



    // $advisor_insert = Advisor::create([
    //     'advisor_name' => $res -> advisor_name,
    //     'advisor_tel' => $res -> advisor_tel,
    //     'advisor_email' => $res -> advisor_email,
    //     'status' => 'on'
    // ]);


    // dd($res -> curricolumn);

    $projects_insert = Projects::create([
        'project_name_th' => $res -> project_name_th,
        'project_name_en' => $res -> project_name_en,
        'project_abstract_th' => $res -> abstract_th,
        'project_abstract_en' => $res -> abstract_eng,
        'project_keyword_th' => $res -> keyword_th,
        'project_keyword_en' => $res -> keyword_eng,
        'project_bookfile' => $path,
        'status' => 'on',
        'advisor_id' => $res->advisor_name,
        'category_id' => $res -> category ,
        'user_id' => Auth::user()->id,
        'author_id' => $author_insert->id,
        'curricolumn_id' => $res -> curricolumn,

    ]);

    $project_author_insert = Project_author::create([
        'project_id' => $projects_insert->id,
        'user_id' => Auth::user()->id,
        'status' => 'on'
    ]);


    if($res -> input('sid_input_author')){
        $project_author = Project_author::pluck('user_id')->toArray();
        $sid_array = $res->input('sid_input_author');
        foreach($sid_array as $sid_one){
            $user_id = User::where('email','=',$sid_one.'@local')->first();
            if(in_array($user_id,$project_author)){
                return redirect()->back()->with('message_error', 'รหัสนักศึกษาที่เพิ่มมีโครงงานแล้ว');
            }else{
                $add_project_author = Project_author::create([
                    'project_id' => $projects_insert->id,
                    'user_id' => $user_id -> id,
                    'status' => 'on'
                ]);
            }
        }
    }

    $stat_counter = new stat_counter();
    $stat_counter ->project_id = $projects_insert ->id;
    $stat_counter ->views = 0;
    $stat_counter->downloads = 0;
    $stat_counter->save();


    return redirect()->back()->with('message_success', 'อัปโหลดโครงงานสำเร็จ!');

    }
}
