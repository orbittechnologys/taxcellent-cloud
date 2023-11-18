<?php

namespace App\Http\Controllers\admin;

use DB;
use Auth;
use File;
use ZipArchive;
use Response;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;
use App\Models\UploadedDocuments;
use App\Http\Controllers\Controller;
use Spatie\MediaLibrary\Support\MediaStream;
class Servicescontroller extends Controller
{
    //public function businessRegistrationService()
   // {
        
   // }
    public function addServiceCategory()
    {
        $mode="Add";
        return view('admin.addCategoryService')->with(compact('mode'));
    }
    public function store(Request $request)
     {
         $request->validate([
            'cat_name' => 'required',
            'cat_title' => 'required',
            'cat_desc' => 'required',
          ]);
         $slug=Str::slug($request->input('cat_name'), '-');
         $insert = [
            'cat_name' => $request->cat_name,
            'slug' => $slug,
            'cat_title' => $request->cat_title,
            'cat_desc' => $request->cat_desc, 
         ];
   
         ServiceCategory::insertGetId($insert);
         //ServiceCategory::create($request->all());
        return redirect('admin/addServiceCategory')->with('success','Service category created successfully.');
    }

    public function editservicecategory($id)
    {
        $serviceCategoryAry=ServiceCategory::where("id",$id)->get()->first();
        $mode="Edit";
        return view('admin.editCategoryService')->with(compact('serviceCategoryAry','mode'));
    }

   public  function updateservicecategory(Request $request)
    {
        $request->validate([
            'cat_name' => 'required',
            'cat_title' => 'required',
            'cat_desc' => 'required',
          ]);

        
        $slug = Str::slug($request->input('cat_name'), '-');
        $serviceCat = ServiceCategory::find($request->editid);
        $serviceCat->cat_name = $request->input('cat_name');
        $serviceCat->cat_title = $request->input('cat_title');
        $serviceCat->cat_desc = $request->input('cat_desc');
        $serviceCat->slug = $slug;
        $serviceCat->update();

     return redirect('admin/editservicecategory/'.$request->editid)->with('success','Service category updated successfully.');

        //return view('admin.addCategoryService')->with('success','Service category updated successfully.',compact('serviceCategoryAry','mode'));   
        
    }

    public function ServiceCategory()
    {
        $serviceCategoryAry=ServiceCategory::get()->toArray();
        return view('admin.businessRegistrationService')->with(compact('serviceCategoryAry'));
    }

    

    public function deletecategory($id)
    {
        if($id)
        {
            $user = ServiceCategory::find($id);
            $user->delete();    
        }
        $serviceCategoryAry=ServiceCategory::get()->toArray();
        return redirect('admin/serviceCategory')->with('success','Service Category Deleted successfully');
    }

    public function legalService()
    {
        return view('admin.legalService');
    }

    public function businessService()
    {
        
        $orderDetails= DB::table('order_details')->orderBy('id', 'desc')->get();

        return view('admin.businessService',compact('orderDetails'));
    }
    public function businessServiceDetails(Request $request)
    {
        // dd($request);
        $userData=DB::table('users')->where('id','=',$request->id)->first();
        // $fileDetails= DB::table('user_upload_document')->where("user_id", $request->id)->first();
        // $serviceDetails=DB::table('service_category')->where("id", $userData->service_cat_id)->first();
         $subCategory=DB::table('service')->where("id", $request->service)->first();
        // $no=$request->id;
        //  $orderDetails= DB::table('order_details')->get();

        return view('admin.businessServiceDetails',compact(['userData','subCategory']));
    }

    public function downloadZip(Request $request,$id,$fileDetails)
    {          
        
        $filenames=str_replace('  ', '/', $fileDetails);
        $files = explode(',',$filenames);

        $zip      = new ZipArchive;
        // if (!file_exists(public_path('uploads/'.$files[0]))) {
            File::makeDirectory(public_path('uploads/'.$files[0].'zip'), 0777, true, true);
        // }
        $fileName = "uploads/$files[0].zip";
        if(Str::contains($fileDetails, ',')){
            // $fileName=$fileDetails
        if ($zip->open(public_path($fileName), ZipArchive::CREATE) === TRUE) {
            foreach ($files as $file){
               $path =  public_path("uploads/".$file);
                $relativeName = basename($path);
                $zip->addFile($path, $relativeName);
            }
            // dd($path, $relativeName);
            $zip->close();
        }

        return response()->download(public_path($fileName));               
    }
    else {

      return  response()->download(public_path("uploads/".$filenames));
    } 
          
        
   
        
    }


    public function finalDocUpload(Request $request){
        $this->validate($request, [
            'final_doc' => 'required|mimes:doc,docx,xls,xlsx,csv,jpg,jpeg,png,pdf,ppt,pptx|max:25600'
            
    ]);
    $fileModel = new UploadedDocuments;
    if($request->hasfile('final_doc'))
     {

        
        if (!file_exists(public_path('uploads/final_doc_attachment'))) {
            File::makeDirectory(public_path('uploads/final_doc_attachment/'), 0777, true, true);
        }
        
        $userData  =UploadedDocuments::where('user_id','=',$request->id)->where('cat_id','=',$request->catId)->where('service_id','=',$request->serviceId)->first();
   
    $file = $request->file('final_doc');
    $fileName = $file->getClientOriginalName();
    $file->move(public_path('uploads/final_doc_attachment/'), $fileName);
   
    $fileModel->final_doc = 'final_doc_attachment/'.$fileName;
    //         {
        if ( $userData->exists()) {
           
            UploadedDocuments::where('user_id','=',$request->id)->where('cat_id','=',$request->catId)->where('service_id','=',$request->serviceId)
            ->update([
                'final_doc' => 'final_doc_attachment/'.$fileName
             ]);
                
             }
        
        
        return back();
        
    }
    }
    public function uersAccountingService()
    {
        return view('admin.uersAccountingService');
    }

    public function uersCompliancesService()
    {
        return view('admin.uersCompliancesService');
    }

    public function uersGSTService()
    {
        return view('admin.uersGSTService');
    }

    public function uersTaxService()
    {
        return view('admin.uersTaxService');
    }

    }

