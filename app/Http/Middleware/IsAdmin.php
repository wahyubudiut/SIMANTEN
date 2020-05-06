<?php

namespace App\Http\Middleware;

use Closure;

class IsAdmin
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
        $this->auth = auth()->user() ?
            (auth()->user()->is_admin === 1)
            : false;

        if($this->auth === true){
            return $next($request);
        }
   
        return redirect('admin/login')->with('error',"You don't have admin access.");
    }
}
