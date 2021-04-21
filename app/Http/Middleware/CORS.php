<?php

namespace App\Http\Middleware;
use Illuminate\Http\Request;
use Closure;

class CORS {
    
    public function handle(Request $request, Closure $next) {
        
        return $next($request);
    }

}
