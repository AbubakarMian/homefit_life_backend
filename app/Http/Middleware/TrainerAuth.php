<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class TrainerAuth
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
        $user =Auth::user();    

        if(Auth::Check()){
            if($user->role_id == 'Trainer'){
                $response = $next($request);
               return $response->header('Cache-Control','nocache, no-store, max-age=0, must-revalidate')
                    ->header('Pragma','no-cache')
                    ->header('Expires','Sat, 26 Jul 1997 05:00:00 GMT');
            }    
            else{
                return redirect('user/login')->with('error', 'Wrong Login Details');
            }
        }
        else{
            return redirect('user/login')->with('error', 'Wrong Login Details');
        }   
    }
}
