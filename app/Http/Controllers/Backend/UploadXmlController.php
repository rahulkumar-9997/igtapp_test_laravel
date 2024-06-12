<?php
namespace App\Http\Controllers\Backend;
//namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Employee;

class UploadXmlController extends Controller
{
    public function create(){
        return view('backend.xml.add');
    }

    public function store(Request $request){
        $this->validate($request, [
            'xml_file' => 'required',
        ]);
        $data = [];
        if ($request->hasFile('xml_file')){
            $file = $request->file('xml_file');
            $filenameWithExt = $request->file('xml_file')->getClientOriginalName();  
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('xml_file')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $file_path =  $request->xml_file->move(public_path('Xml-File'), $fileNameToStore);
            //$xmlString = file_get_contents(public_path('xmp-sample.xml'));
            $xmlString = file_get_contents(public_path('Xml-File/'.$fileNameToStore));
            //dd($xmlString);
            $xmlObject = simplexml_load_string($xmlString);
                       
            $json = json_encode($xmlObject);
            $data['xml_file_list'] = json_decode($json, true); 
            return view('backend.xml.add', compact('data'));
           
        }
    }
    
    
}
