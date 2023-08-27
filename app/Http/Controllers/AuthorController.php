<?php

namespace App\Http\Controllers;
use App\Models\Author;
use App\Models\Curricolumn;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function showAuthor(){
        $curricolumn = Curricolumn::all();
        $author = Author::where('status','=','on')->get();
    return view('Admin.tables.Authors',compact('author','curricolumn'));
    }
    public function authorUpdate(Request $request){
        // dd($request);
        $validate = $request->validate([
            'author_id' => 'required',
            'author_name' => 'required',
            'author_sid' => 'required',
            'author_email' => 'required',
            'author_tel' => 'required',
            'author_gender' => 'required',
            'author_curricolumn' => 'required',
        ]);

        $update = Author::find($request->author_id)->update([
            'author_name' => $request->author_name,
            'author_sid' => $request->author_sid,
            'author_email' => $request->author_email,
            'author_tel' => $request->author_tel,
            'author_gender' => $request->author_gender,
            'author_curicolumn' => $request->author_curricolumn,
        ]);
        if($update){
            return redirect()->back()->with('message_success', 'Update success!');
        }else{
            return redirect()->back()->with('message_error', 'Update not success!');
        }
    }

    public function authorInsert(Request $request){
        // dd($request);
        $validate = $request->validate([
            'author_name' => 'required',
            'author_sid' => 'required',
            'author_email' => 'required|email',
            'author_tel' => 'required',
            'author_gender' => 'required',
            'author_curricolumn_id' => 'required',
        ]);

        $insert = new Author();
        $insert->author_name = $request->author_name;
        $insert->author_sid = $request->author_sid;
        $insert->author_email = $request->author_email;
        $insert->author_tel = $request->author_tel;
        $insert->author_gender = $request->author_gender;
        $insert->curicolumn_id = $request->author_curricolumn_id;
        $insert->status = 'on';
        $insert -> save();

        if($insert){
            return redirect()->back()->with('message_success', 'Update success!');
        }else{
            return redirect()->back()->with('message_error', 'Update not success!');
        }
    }

    public function authorDelete(Request $request){
        $update = Author::find($request->author_id)->update([
            'status' => 'off',
        ]);
        if($update){
            return redirect()->back()->with('message_success', 'Delete success!');
        }else{
            return redirect()->back()->with('message_error', 'Delete not success!');
        }
    }
}
