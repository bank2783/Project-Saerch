<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Projects;
use Illuminate\Support\Facades\Auth;

class CheckProjectPromiss
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
        $project_author = Projects::where('status','=','on')->where('user_id','=',Auth::user()->id)->pluck('user_id')->toArray();
        if(in_array(Auth::user()->id,$project_author)){
            return $next($request);
        }else{
            return redirect('/');
        }
       }else{
        return route('signin');
       }
    }
}
