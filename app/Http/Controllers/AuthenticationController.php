<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\CustomClasses\InstagramAPI;
class AuthenticationController extends Controller
{
    public function showRegister(){
        return view('user.register');
    }

    public function registersupplierviainstagram(){
        Session::put('instagram_operation',['operation'=>'register','user_type'=>'supplier']);
        $instagram=new InstagramAPI();
        return Redirect::to($instagram->getLoginUrl());
    }

    public function showSupplierRegister(){
        if(Session::has('user_instagram_info')){
            $userInfo=Session::get('user_instagram_info');
            return view('dashboard.supplierRegister',['userInfo'=>$userInfo]);
        }

    }

    public function instagramCallback(Request $request){
        if($request->has('hub_mode')){
            if($request->get('hub_mode')=='subscribe'){
                return $request->get('hub_challenge');
            }
        }
        if(Session::get('instagram_operation')){
            $instagramOperation=Session::pull('instagram_operation');
            if($instagramOperation['operation']=='register'){
                if($instagramOperation['user_type']=='supplier'){
                    if (Session::has('user_instagram_info'))
                    {
                        Session::forget('user_instagram_info');
                    }
                    if($request->get('code')){
                        $code = $request->get('code');
                        $instagram=new InstagramAPI();
                        $data = $instagram->getOAuthToken($code);
                        Session::put('user_instagram_info',$data);
                        return Redirect::action('AuthenticationController@showSupplierRegister');
                    }
                }

            }
        }

    }
}
