<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DocumentsList;

class DocumentsController extends Controller
{
    public function DocumentList()
    {
        $docData = DocumentsList::get()->toArray();

        return view('admin.documentList')->with(compact('docData'));
    }
    public function addDocumentList()
    {
        $mode="Add";
        return view('admin.addDocument')->with(compact('mode'));
    }
    public function store(Request $request)
     {
         $request->validate([
            'doc_name' => 'required',
          ]);

         $insert = [
            'doc_name' => $request->doc_name,
         ];
   
         DocumentsList::insertGetId($insert);
         //ServiceCategory::create($request->all());
        return redirect('admin/addDocument')->with('success','Service category created successfully.');
    }

    public function editDocument($id)
    {
        $DocumentsDetail=DocumentsList::where("id",$id)->get()->first();
        $mode="Edit";
        return view('admin.editDocumnet')->with(compact('DocumentsDetail','mode'));
    }

   public  function updateDocument(Request $request)
    {
        $request->validate([
            'doc_name' => 'required'
          ]);

        
        $docData= DocumentsList::find($request->editid);
        $docData->doc_name = $request->input('doc_name');
        $docData->update();

     return redirect('admin/editDocument/'.$request->editid)->with('success','Documnent updated successfully.');

        
    }    

    public function deleteDocument($id)
    {
        if($id)
        {
            $documentDetail = DocumentsList::find($id);
            $documentDetail->delete();    
        }
        $documentData=DocumentsList::get()->toArray();
        return redirect('admin/documentsList')->with('success','Document Deleted successfully');
    }

}
