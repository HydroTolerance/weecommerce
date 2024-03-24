<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OwnsProductMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $productId = $request->route('product')->id;

        if ($request->user()->products()->where('id', $productId)->exists()) {
            return $next($request);
        }
        session()->put('intended_url', $request->url());
        return redirect()->back()->with('error', 'You are not authorized to access this product.');
    }
}
