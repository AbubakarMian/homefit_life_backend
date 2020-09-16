<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);
        return $response;
        // $user =Auth::user();
        // if(Auth::Check()){
        //     if($user->role_id == 'Super Admin'){
        //         $response = $next($request);
        //        return $response->header('Cache-Control','nocache, no-store, max-age=0, must-revalidate')
        //             ->header('Pragma','no-cache')
        //             ->header('Expires','Sat, 26 Jul 1997 05:00:00 GMT');
        //     }
        //     else if($user->role_id == 'Trainer'){
        //         return redirect('admin_secure/login');
        //     }
        //     else{
        //         return redirect('admin_secure/login')->with('error', 'Wrong Login Details');
        //     }    
        // }
        // else{
        //     return redirect('admin_secure/login')->with('error', 'Wrong Login Details');
        // }   
          
    }
}
