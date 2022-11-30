<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use Illuminate\Http\Request;

class CatController extends Controller
{
    public function category(){
        return view('admin.forms.add_category');
    }


    // add
    public function store(Request $request){

        $data = $request->validate([
            "name"=>"required|min:3|max:30|unique:cats,name",
            "status"=>"required|in:1,2"
        ]);

     $cats=Cat::create($data);
     return redirect(url('admin/add_category'));
    }


    public function destroy($id){
        $cats=Cat::findOrFail($id)->delete();
        session()->flash('success','students deleted succesfuly');
        return redirect(url('admin/cats_data'));
    }

    public function delet_all_cats(){

        Video::where('id', 'like', "%%")->delete();
        return redirect(url('admin/cats_data'));
    }

    // public function edit_status(Request $request){
    //     $cat=Cat::findOrFail($request->id);
    //     $cat->status=$request->status;
    //     $cat->save();
    //     // // $cat_status->update($request->status);
    //     // return $cat_status;
    // }

    public function edit_status(Request $request)
    {
        $cat = Cat::find($request->user_id);
        $cat->status = $request->status;
        $cat->save();

        return response()->json(['success'=>'Status change successfully.']);
    }

}

