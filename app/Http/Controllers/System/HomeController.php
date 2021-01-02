<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {

        return view('dashboard.home');
    }



    public function edit()
    {
        return view('dashboard.edit');
    }

    public function update($id,Request $request)
    {
        $requests=$request->except('role');
        $requests['email'] = strtolower($request->email);
        if(!is_null($request->password)){
            $requests['password']=Hash::make($request->password);
        }else{
            unset($requests['password']);
        }
        $user = User::find($id);
        $user->fill($requests)->save();
//        $user->syncRoles($request->role);
        toast(__('Edited successfully'),'success');
        return redirect(route('system.home'));
    }

}
