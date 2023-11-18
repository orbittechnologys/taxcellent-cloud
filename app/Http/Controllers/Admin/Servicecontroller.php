<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\DocumentsList;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class Servicecontroller extends Controller
{

    public function ServiceList()
    {
        $serviceAry = Service::with('serviceCategory')->orderBy('id', 'desc')->get()->toArray();

        return view('admin.serviceList')->with(compact('serviceAry'));
    }

    public function addService()
    {
        $mode = "Add";
        $serviceCatAry = ServiceCategory::get()->toArray();
        $DocumentsListAry = DocumentsList::orderBy('doc_name', 'Asc')->get()->toArray();
        return view('admin.addService')->with(compact('mode', 'serviceCatAry','DocumentsListAry'));
    }
    public function store(Request $request)
    {
        if(!empty($request->user_checklist))
        {
            $documentList=implode(",",$request->user_checklist);
        }else{
            $documentList="";
        }
    //print_r($request->service_include);die;
        $request->validate([
            'service_cat_id' => 'required',
            'service_name' => 'required',
            'price' => 'required|integer',
            'discount' => 'required|integer',
            'status' => 'required',
        ]);

        $slug = Str::slug($request->input('service_name'), '-');
        $insert = [
            'service_cat_id' => $request->service_cat_id,
            'service_name' => $request->service_name,
            'service_include' => $request->service_include,
            'reg_process' => $request->reg_process,
            'timeframe' => $request->timeframe,
            'price' => $request->price,
            'discount' => $request->discount,
            'user_doc' => $documentList,
            'status' => $request->status,
            'slug' => $slug,
        ];

        Service::insertGetId($insert);

        // Service::create($request->all());
        return redirect('admin/addService')->with('success', 'Service created successfully.');
    }
    public function editservice($id)
    {
        $serviceAry = Service::where("id", $id)->get()->first();
        $serviceCatAry = ServiceCategory::get()->toArray();
        $DocumentsListAry = DocumentsList::orderBy('doc_name', 'Asc')->get()->toArray();
        $mode = "Edit";
        return view('admin.editService')->with(compact('serviceAry', 'mode', 'serviceCatAry','DocumentsListAry'));
    }
    public function updateservice(Request $request)
    {
        $request->validate([
            'service_cat_id' => 'required',
            'service_name' => 'required',
            'price' => 'required|integer',
            'discount' => 'required|integer',
            'status' => 'required',
        ]);

        if(!empty($request->user_checklist))
        {
            $documentList=implode(",",$request->user_checklist);
        }else{
            $documentList="";
        }
        $slug = Str::slug($request->input('service_name'), '-');

        $serviceUpd = Service::find($request->editid);
        $serviceUpd->service_cat_id = $request->input('service_cat_id');
        $serviceUpd->service_name = $request->input('service_name');
        $serviceUpd->price = $request->input('price');
        $serviceUpd->slug = $slug;
        $serviceUpd->discount = $request->input('discount');
        $serviceUpd->user_doc = $documentList;
        $serviceUpd->service_include = $request->input('service_include');
        $serviceUpd->reg_process = $request->input('reg_process');
        $serviceUpd->timeframe = $request->input('timeframe');
        $serviceUpd->status = $request->input('status');
        $serviceUpd->update();
        $serviceCatAry = Service::get()->toArray();
        return redirect('admin/editservice/' . $request->editid)->with('success', 'Service updated successfully.', 'serviceCatAry');

        //return view('admin.addCategoryService')->with('success','Service category updated successfully.',compact('serviceCategoryAry','mode'));
    }

    public function deleteservice($id)
    {
        if ($id) {
            $ser = Service::find($id);
            $ser->delete();
        }
        return redirect('admin/service')->with('success', 'Service Deleted successfully');
    }

}
