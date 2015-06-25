<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class Entrust
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param  Guard $auth
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next )
    {
        // Traitement du controller et method appelants
        $actionName = explode('\\', $request->route()->getActionName());
        $action = end($actionName);

        $fragments = explode('@', $action);
        if(!isset($fragments['1'])){
            $controller = null;
            $method = $fragments['0'];
        }else{
            $controller = $fragments['0'];
            $method = $fragments['1'];
            $controller = strtolower(str_replace('Controller', '', $controller));
            $requiredPermission = $method . '-' . $controller;
            if(!$this->auth->user()->ability('super-admin', $requiredPermission)){
                return redirect('/')->with('error', "Vous n'avez pas le droit d'accèder à cette page !");
            }
        }
        return $next($request);
    }
}
