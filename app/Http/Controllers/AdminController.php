<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function register(){
        return view('admin.register');
    }
    public function login(){
        return view('admin.login');
    }
    public function reset(){
        return view('admin.reset_password');
    }
    public function profile(){
        return view('admin.admin_profile');
    }
    public function user_data(){
        $users=User::get();
        return view('admin.tables.user_data',compact('users'));
    }

    public function cats_data(){
        $cats=Cat::get();
        return view('admin.tables.category_data',compact('cats'));
    }

    public function video_data(){
        $videos=Video::get();
        return view('admin.tables.video_data',compact('videos'));
    }

    public function dashboard(){
        return view('admin.index');
    }

    // public function delet_all_users(){
    //     // User::truncate();
    //     // // User::all()->delete();
    //     User::where('id', 'like', "%%")->delete();
    //     return redirect(url('admin/user_data'));

    // }

}

