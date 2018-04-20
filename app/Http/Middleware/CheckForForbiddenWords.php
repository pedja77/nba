<?php

namespace App\Http\Middleware;

use Closure;

class CheckForForbiddenWords
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
        if (preg_match('/(idiot|hate|stupid)/i', $request->content)) {
            return redirect('forbidden');
        }

        return $next($request);
    }
}
