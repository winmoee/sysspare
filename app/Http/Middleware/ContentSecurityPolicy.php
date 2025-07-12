<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ContentSecurityPolicy
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        $response->headers->set('Content-Security-Policy',
            "frame-src 'self' https://www.youtube.com https://www.youtube-nocookie.com;"
        );

        return $response;
    }
}
