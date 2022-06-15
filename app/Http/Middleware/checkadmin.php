<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;

class checkadmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
       if($user = Auth::user())
       {
        $userid = Auth::user()->id;
        $adminrole = DB::table('model_has_roles')
        ->where('model_id',$userid)
        ->first();

if( $adminrole->role_id==3)
{
return $next($request);
}
else 
{

return redirect('/home');
}
       }

       else 
       {
        Auth::logout();
        return redirect('/');
       }
       
        
       
    }
}
