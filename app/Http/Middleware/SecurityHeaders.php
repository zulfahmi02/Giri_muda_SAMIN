<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SecurityHeaders
{
    /**
     * Add a conservative set of security headers to every response.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        $response->headers->set('Content-Security-Policy', $this->contentSecurityPolicy());
        $response->headers->set('Referrer-Policy', 'strict-origin-when-cross-origin');
        $response->headers->set('X-Content-Type-Options', 'nosniff');
        $response->headers->set('X-Frame-Options', 'SAMEORIGIN');
        $response->headers->set('Permissions-Policy', 'accelerometer=(), camera=(), geolocation=(), gyroscope=(), microphone=(), payment=(), usb=(), fullscreen=(self)');
        $response->headers->remove('X-Powered-By');

        if (! headers_sent()) {
            header_remove('X-Powered-By');
        }

        return $response;
    }

    protected function contentSecurityPolicy(): string
    {
        $scriptSrc = ["'self'"];
        $styleSrc = ["'self'", "'unsafe-inline'"];
        $connectSrc = ["'self'"];

        if (app()->isLocal()) {
            $scriptSrc = array_merge($scriptSrc, ['http://127.0.0.1:5173', 'http://localhost:5173']);
            $styleSrc = array_merge($styleSrc, ['http://127.0.0.1:5173', 'http://localhost:5173']);
            $connectSrc = array_merge($connectSrc, [
                'http://127.0.0.1:5173',
                'http://localhost:5173',
                'ws://127.0.0.1:5173',
                'ws://localhost:5173',
            ]);
        }

        return implode('; ', [
            "default-src 'self'",
            "base-uri 'self'",
            "frame-ancestors 'self'",
            "form-action 'self'",
            "object-src 'none'",
            'img-src \'self\' data: blob:',
            'font-src \'self\' data:',
            'media-src \'self\' data: blob:',
            'script-src '.implode(' ', $scriptSrc),
            'style-src '.implode(' ', $styleSrc),
            'connect-src '.implode(' ', $connectSrc),
        ]);
    }
}
