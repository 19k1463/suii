<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;

class RedirectBasedOnRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */ 
    protected $auth; //do study about this //

    public function __construct(Guard $auth) {
        $this->auth = $auth;
    } 
    public function handle(Request $request, Closure $next): Response
    {   
        if ($this->auth->check()) {
            $user = $this->auth->user();
        }
        $userRole =(string) Auth::user()->roles->pluck('name');
        if($userRole[0]==='patient'){
        return redirect('/patient');
        }
   
    
       if($userRole[0]==='doctor'){
        return redirect('/doctor');
        }
    return $next($request);
  }
}
