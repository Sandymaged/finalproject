<?php

namespace App\Http\Middleware;

use Closure;

class cheak
{
  
    public function handle($request, Closure $next)
    {
        return $next($request);
    }
}
