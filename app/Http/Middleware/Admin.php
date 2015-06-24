<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class Admin
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
    public function handle($request, Closure $next)
    {
    /*
        if($this->auth->user()->role != 'admin'){
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect('/')->with('error', "Vous n'avez pas le droit d'accèder à cette page !");
            }
        }
    */
        $actionName = explode('\\', $request->route()->getActionName());
        $action = end($actionName);

        $fragments = explode('@', $action);
        if(isset($fragments['1'])){
            $controller = $fragments['0'];
            $method = $fragments['1'];
        }else{
            $controller = null;
            $method = $fragments['0'];
        }
        //dd($controller, $method);
        return $next($request);
    }
}
