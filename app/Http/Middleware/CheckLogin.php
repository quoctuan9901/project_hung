<?php

namespace App\Http\Middleware;

use Closure,Auth;

class CheckLogin
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
        if (Auth::check() && Auth::user()->level == 1) {
            return $next($request);
        } else {
            return redirect()->route('auth.getLogin')->with('error','Bạn không đủ quyền hạn để truy cập');
        }
        
    }
}
