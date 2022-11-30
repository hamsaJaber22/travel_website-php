<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    public function video(){
        $cats=Cat::select('id','name')->get();
        return view('admin.forms.add_video',compact('cats'));
    }

        // add
    public function store(Request $request){

        $data = $request->validate([
           "name"=>"required|min:3|max:30|unique:videos,name",
           "description"=>"required",
           "video"=>"required|mimes:mp4,mov,ogg | max:50000",
           "poster"=>"required|mimes:png,jpg,gif",
           "type"=>"required|in:1,2",
           "cat_id"=>"required|exists:cats,id"
        ]);

         // بجيب الصورة و بشفرها و بعطيها امتداد و برجع اسمها
         $imgName=Storage::putFile("videos_poster",$data['poster']);
         $data['poster']=$imgName;

         $videoName=Storage::putFile("videos",$data['video']);
         $data['video']=$videoName;

         $videos=Video::create($data);
        //  return $videos;
         return redirect(url('admin/add_video'));
        }

        // update

  // function to update video
//   public function update(Request $request,$id){


//      $videos=Video::findOrFail($id);
//

//      $videos->update($request->all());
// return $videos ;
//     // return redirect(url("edit/$users->id"));
//   }

        public function update(Request $request,$id){
           // validation
        //    $data = $request->validate([
        //        "name"=>"required|min:3|max:30|unique:videos,name",
        //        "description"=>"required",
        //        "video"=>"required|mimes:mp4,mov,ogg | max:50000",
        //        "poster"=>"required|mimes:png,jpg,gif",
        //        "type"=>"required|in:1,2",
        //        "cat_id"=>"required|exists:cats,id"
        //     ]);
               $video=Video::findOrFail($id);
               $video->update($request->all());
               if($request->has('poster')){
                        Storage::delete($data['poster']);
                        return $fileName=Storage::putFile("videos_poster",$data['poster']);
                        $data['poster']=$fileName;
                     }
                return $video;

        }

        public function destroy($id){
            $videos=Video::findOrFail($id);
            Storage::delete($videos->video);
            Storage::delete($videos->poster);
            $videos->delete();

            session()->flash('success','students deleted succesfuly');
            return redirect(url('admin/video_data'));
        }

        public function delet_all_videos(){
            Video::where('id', 'like', "%%")->delete();
            return redirect(url('admin/video_data'));
        }


// vedio details
public function details($id){
    $details=video::findOrFail($id);
    return view('user.video_details',compact('details'));
}
}
