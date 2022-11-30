<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        return view('user/index');
    }

    public function contact(){
        return view('user/contact');
    }

    public function movie(){
        // $cats=Cat::get();
        // return view('user/movie',compact('cats'));
        $videos=Video::get();
        return view('user/movie',compact('videos'));
    }

    public function price_plan(){
        return view('user/price_plan');
    }

    public function tvseries(){
        $videos=Video::get();
        return view('user/tvseries',compact('videos'));
    }
    public function reset(){
        return view('user.reset_password');
    }

    public function user_profile(){
         return view('user.profile');
    }

    // public function edit_profile($id){
    //     $users=User::findOrFail($id);
    //     return view('user.update_profile',compact('users'));
    // }


    // read user data in table for admin
// delete all user
    public function delet_all_users(){
        // User::truncate();
        // // User::all()->delete();
        User::where('id', 'like', "%%")->delete();
        return redirect(url('admin/user_data'));

    }


}
