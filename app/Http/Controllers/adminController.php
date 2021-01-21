<?php

namespace App\Http\Controllers;

use App\news;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index(){
        $news = news::OrderBy('id','DESC')->paginate(5);
        return view('admin.index',compact('news'));
    }
    public function create(Request $request){
       $request->validate($this->rules(),$this->message());
       $file= $request->file('image');
       $fileName  = "name_".time().'.'.$file->getClientOriginalExtension();
       $path = public_path('/uploads/');
       $file->move($path,$fileName);
        $news = new news();
        $news->title = $request->input('title');
        $news->content = $request->input('content');
        $news->image = 'uploads/'.$fileName;
        $news->save();
        return \response()->json(['code'=>200,'data'=>$news]);
    }
    public function fetch_data(Request $request){
        if($request->ajax()){
            $news = news::OrderBy('id',"DESC")->paginate(5);
            return view('admin.pagination_data',compact('news'))->render();
        }
    }
    public function rules(){
        return [
            'title'=>'required',
            'content'=>'required',
            'image'=>'required|mimes:jpg,png,jpeg'
        ];
    }
    public function message(){
        return [
          'image.mimes'=>'must be jpg or png or jpeg'
        ];
    }

    public function edit($id){
        try {
            $news = news::findOrFail($id);
            return \response()->json($news);
        }
        catch (ModelNotFoundException $exception){
               return \response()->json([]);
        }
    }
    public function update(Request $request,$id){

        try {
            $news = news::findOrFail($id);
            $news->title = $request->input('title');
            $news->content = $request->input('content');
                if($request->has("update_image")){
                   if( \File::exists(public_path($news->image) )){
                       \File::delete($news->image);
                   }
                    $file= $request->file('update_image');
                    $fileName  = "name_".time().'.'.$file->getClientOriginalExtension();
                    $path = public_path('/uploads/');
                    $file->move($path,$fileName);
                    $news->image = 'uploads/'.$fileName;
                    $news->update();
                }else{
                    $news->update();
                }
         $response['news']= $news;
            return view("admin.row_update")->with($response);
        }
        catch (ModelNotFoundException $exception){
            return \response()->json([]);
        }
    }
    public function delete($id){
        $news = news::findOrFail($id);
        $news->delete();
        return \response()->json([]);
    }
}
