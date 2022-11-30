<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
    public function register(Request $request){
        // validation
        $data = $request->validate([
            "name"=>"required|min:2|max:30",
            "email"=>"required|email|unique:users,email",
            "password"=>"required|min:8|max:30|confirmed",
            "image"=>"image|mimes:png,jpg",
            "biography",
            "type"
        ]);
        // بجيب الصورة و بشفرها و بعطيها امتداد و برجع اسمها
        $fileName=Storage::putFile("users",$data['image']);
        $data['image']=$fileName;
        // تشفير الباسورد
        $data['password']=bcrypt($data['password']);
        // add to db
        $user=User::create($data);
         Auth::Login($user);
        return redirect (url('/'));
    }

    public function login(Request $request){
        // validation
        $data = $request->validate([
            "email"=>"required|email",
            "password"=>"required|min:8|max:30",
        ]);
        $isLogin=Auth::attempt(["email" => $data['email'], "password" => $data['password']]);

        if($isLogin!=true){

            return redirect(url('/'))
            // ->withErrors("creadintions not correct")
            ;
        }
            return redirect(url('/'));
    }
// logout
    public function logout(){
        Auth::logout();
        return redirect(url('/'));
    }

// edit
    public function edit($id){
        $users=User::findOrFail($id);
        return view('user.update_profile',compact('users'));
    }

  // function to update user
  public function update(Request $request,$id){
    // validation
    $data=$request->validate([
        'name'=>"required|min:2|max:30",
        'email'=>"required|email|unique:users,email",
        'password'=>"min:8|max:30",
        'image'=>"image|mimes:png,jpg"
    ]);

    $request->password = bcrypt($request->password);
     $users=User::findOrFail($id);
     if($request->has('image')){
        Storage::delete($data['image']);
        return $fileName=Storage::putFile("users",$data['image']);
        $data['image']=$fileName;
     }

     $users->update($request->all());
return $users ;
    return redirect(url("edit/$users->id"));
    //   return $data ;
    // session()->flash('success','students update succesfuly');

}



}
