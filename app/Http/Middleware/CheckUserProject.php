<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Project_author;
class CheckUserProject
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()){
            $user_id = Auth::user()->id;
            $project_author = Project_author::pluck('user_id')->toArray();
            if(in_array($user_id,$project_author)){
               return redirect('/');
            }else{
                return $next($request);
            }
        }else{
           return redirect('signin');
        }


    }
}
