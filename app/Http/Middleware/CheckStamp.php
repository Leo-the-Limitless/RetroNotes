<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckStamp
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $allowedStamps = ["butterfly", "daisy", "autumn", "heart", "moon"];

        $stamp = $request->route('stamp');

        if (!in_array($stamp, $allowedStamps)) {
            return redirect('/send');
        }
        
        return $next($request);
    }
}
