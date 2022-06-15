<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    public function redirectTo() {

        $role = Auth::user()->roles->first();

        $permissions = Permission::all();

        foreach($permissions as $permission){

             $item =   DB::table('role_has_permissions')
                    ->where('permission_id',$permission->id)
                    ->where('role_id',$role->id)
                    ->first();

             if(!empty($item)){

                 break;
             }
        }

        if(!empty($item)){

            return route('admin.dashboard');

        }
        else if($role->name == "customer"){

            return '/home';
        }
        else{

            return '/home';
        }


     

    }

    //protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
