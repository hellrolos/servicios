<?php

namespace App\Http\Middleware;

use Closure;

class Admin
{
    protected $auth;

    public function __construct(Guard $user){
        $this->auth = $user;
    }

    public function handle($request, Closure $next)
    {
        $correo = $this->auth->user()->email;
        return $next($request);
    }
}
