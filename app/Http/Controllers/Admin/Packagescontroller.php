<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;
use App\Models\Service;
use App\Models\ServicePackages;
use Carbon\Carbon;


class Packagescontroller extends Controller
{
    
    public function PackagesList()
    {
        $packagesAry=ServicePackages::with("serviceCategory","serviceName")->get()->toArray();
        return view('admin.packagesList')->with(compact('packagesAry'));
    }

    
    public function addPackages()
    {
        $mode="Add";
        $serviceCatAry=ServiceCategory::get()->toArray();
        $serviceAry=Service::get()->toArray();
        return view('admin.addPackages')->with(compact('mode','serviceCatAry','serviceAry'));
    }
    public function store(Request $request)
     {
    
         $request->validate([
            'service_cat_id' => 'required',
            'service_id' => 'required',
            'package_name' => 'required',
            'status' => 'required',
        ]);
    
        ServicePackages::create($request->all());
        return redirect('admin/addPackages')->with('success','Packages created successfully.');
    }
    public function editpackages($id)
    {
        
		$servicePackagesAry=ServicePackages::where("id",$id)->get()->first();
        
        $serviceCatAry=ServiceCategory::get()->toArray();
        $serviceAry=Service::get()->toArray();
        $mode="Edit";
        return view('admin.editPackages')->with(compact('mode','servicePackagesAry','serviceCatAry','serviceAry'));
    }
    public  function updatepackages(Request $request)
    {
        $request->validate([
            'service_cat_id' => 'required',
            'service_id' => 'required',
            'package_name' => 'required',
            'status' => 'required',
        ]);

        
        $serviceUpd = ServicePackages::find($request->editid);
        $serviceUpd->service_cat_id = $request->input('service_cat_id');
        $serviceUpd->service_id = $request->input('service_id');
        $serviceUpd->package_name = $request->input('package_name');
        $serviceUpd->status = $request->input('status');
        $serviceUpd->update();

        $serviceCatAry=ServiceCategory::get()->toArray();
        $serviceAry=Service::get()->toArray();
     return redirect('admin/editpackages/'.$request->editid)->with('success','Packages updated successfully.','serviceCatAry','serviceAry');

        //return view('admin.addCategoryService')->with('success','Service category updated successfully.',compact('serviceCategoryAry','mode'));   
        
    }

    public function deletepackages($id)
    {
        if($id)
        {
            $ser = ServicePackages::find($id);
            $ser->delete();    
        }
        return redirect('admin/packages')->with('success','Service Package Deleted successfully');
    }

}
