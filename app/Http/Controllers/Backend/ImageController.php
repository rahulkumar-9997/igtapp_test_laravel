<?php
namespace App\Http\Controllers\Backend;
//namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\UploadImage;

class ImageController extends Controller
{
    public function create(){
        $data = [];
        $data['image_list'] = UploadImage::orderBy('id','DESC')->get();; 
        return view("backend.image.add", compact('data'));
    }

    public function store(Request $request){
        $this->validate($request, [
            'image_file' => 'mimes:jpg',
        ]);
        
        if ($request->hasFile('image_file')){
            $file = $request->file('image_file');
            $filenameWithExt = $request->file('image_file')->getClientOriginalName();  
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image_file')->getClientOriginalExtension();
            $image_file_name = $filename.'_'.time().'.'.$extension;
            $file_path =  $request->image_file->move(public_path('Images-File'), $image_file_name);
            
            $input['image'] = $image_file_name;
            //dd($input);
            $image_upload = UploadImage::create($input);
            if ($image_upload){
                return redirect('image-create')->with('success','Image uploaded successfully');
            }else{
                return redirect()->back()->with('error','Somthings went wrong please try again !.');
            }
            
        }
        return redirect()->back()->with('error','Required field!');
    } 
}
