<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use File;
use Session;
use Redirect;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\UploadedDocuments;

class UserFileController extends Controller
{

    
    public function storeFile(Request $request)
    {
       
        $this->validate($request, [
            'kyc_doc' => 'required|mimes:doc,docx,xls,xlsx,csv,jpg,jpeg,png,pdf,ppt,pptx|max:25600'
            
    ]);
    $fileModel = new UploadedDocuments;
    if($request->hasfile('kyc_doc'))
     {

        
        if (!file_exists(public_path('uploads/'.$user->email.'kyc_attachment'))) {
            File::makeDirectory(public_path('uploads/'.$user->email.'kyc_attachment/'), 0777, true, true);
        }
        
        $userData  =UploadedDocuments::where('user_id','=',Auth::user()->id)->where('cat_id','=',$request->catId)->where('service_id','=',$request->serviceId)->first();
    //    if( $fileModel->kyc_doc!=' ')
    //         $fileModel->update();
    //         else
    $file = $request->file('kyc_doc');
    $fileName = $file->getClientOriginalName();
    $file->move(public_path('uploads/'.$user->email.'kyc_attachment/'), $fileName);
    // $filePath = $file->storeAs('uploads', $fileName, 'public');
    // $fileModel->name = time().'_'.$req->file->getClientOriginalName();
    $fileModel->user_id=Auth::user()->id;
    $fileModel->doc_id='11';
    $fileModel->kyc_doc = 'kyc_attachment/'.$fileName;
    //         {

        if( empty(DB::table('user_upload_document')->count())){
            $fileModel->save();
        }
        else if ( $userData->exists()) {
           
            UploadedDocuments::where('user_id','=',Auth::user()->id)->where('cat_id','=',$request->catId)->where('service_id','=',$request->serviceId)
            ->update([
                'kyc_doc' => 'kyc_attachment/'.$fileName
             ]);
                
             }else{
                $fileModel->save();
                
             }
        
        
        return back();
        
        
     }


     
    }
    public function storeFileMultiple(Request $request)
    {
        // dd($request);
        // dd($request->file());
        $uploadedFiles[]=$request->file();
        foreach ($uploadedFiles as $key => $value){
    if (is_array($value)){
        // <p>{{$key}} :
        foreach ($value as $value_key => $value_value) {
            $filename=str_replace('_', ' ', $value_key);
            $documentDetails= DB::table('documents_list')->where('doc_name','=',$filename)->first();
            $doc_ids[]=$documentDetails->id;
        }
        // </p>}
    }
}
// dd($doc_ids);
        // foreach($uploadedFiles as $key => $value)
        // {
        //     dd($value);
        // }
        $this->validate($request, [
            // 'PAN_of_the_Directors/Partners' => 'mimes:doc,docx,xls,xlsx,csv,jpg,jpeg,png,pdf,ppt,pptx|max:5120',
            // 'id_proof' => 'mimes:doc,docx,xls,xlsx,csv,jpg,jpeg,png,pdf,ppt,pptx|max:25600',
            // 'adress_proof' => 'mimes:doc,docx,xls,xlsx,csv,jpg,jpeg,png,pdf,ppt,pptx|max:25600'
            
    ]);
    $fileModel = new UploadedDocuments;
    $fileModel->user_id=Auth::user()->id;
    $fileModel->cat_id=$request->catId;
    $fileModel->doc_id=implode(",",$doc_ids);


    $fileModel->service_id=$request->serviceId;
    $user  =User::where('id','=',Auth::user()->id)->first();
    // $documentDetails= DB::table('documents_list')->where('id','=',$id)->first();
    $userData  =UploadedDocuments::where('user_id','=',Auth::user()->id)->where('cat_id','=',$request->catId)->where('service_id','=',$request->serviceId)->first();
    if($request->hasfile('PAN_of_the_Directors/Partners'))
     {
       
        
        if (!file_exists(public_path('uploads/pan_card'))) {
            File::makeDirectory(public_path('uploads/pan_card'), 0777, true, true);
        }
        // $files=$request->file('attachment');
        $files = $request->file('PAN_of_the_Directors/Partners');
        foreach($files as $file)
        {
        $fileName = $file->getClientOriginalName();
        $file->move(public_path('uploads/pan_card'), $fileName);
        $pan_cards[]= 'pan_card/'.$fileName;
        }
        $fileModel->pan_card = implode(",",$pan_cards);
    }
    if($request->hasfile('ID_proof_of_the_partners_(voter_ID/Aadhaar_Card/_Driving_License/Passport)')){
        if (!file_exists(public_path('uploads/id_proof'))) {
            File::makeDirectory(public_path('uploads/id_proof'), 0777, true, true);
        }
        $files = $request->file('ID_proof_of_the_partners_(voter_ID/Aadhaar_Card/_Driving_License/Passport)');
        foreach($files as $file)
        {
        $fileName = $file->getClientOriginalName();
        $file->move(public_path('uploads/id_proof'), $fileName);
        $id_proofs[] = 'id_proof/'.$fileName;
        }
        $fileModel->id_proof=implode(",",$id_proofs);
    }
    if($request->hasfile('Address_proof_of_the_registered_office_(ownership_documents_or_rental/lease_agreement)')){
        if (!file_exists(public_path('uploads/office_address_proof'))) {
            File::makeDirectory(public_path('uploads/office_address_proof'), 0777, true, true);
        }
        $files = $request->file('Address_proof_of_the_registered_office_(ownership_documents_or_rental/lease_agreement)');
        foreach($files as $file)
        {
        $fileName = $file->getClientOriginalName();
        $file->move(public_path('uploads/office_address_proof'), $fileName);
        $office_address_proofs[] = 'office_address_proof/'.$fileName;
        }
        $fileModel->office_address_proof =implode(",",$office_address_proofs);
    }

    if($request->hasfile('Bank_Account_statement/_cancelled_cheque')){
        if (!file_exists(public_path('uploads/bank_statements'))) {
            File::makeDirectory(public_path('uploads/bank_statements'), 0777, true, true);
        }
        $files = $request->file('Bank_Account_statement/_cancelled_cheque');
        foreach($files as $file)
        {
        $fileName = $file->getClientOriginalName();
        $file->move(public_path('uploads/bank_statements'), $fileName);
        $bank_statement[] = 'bank_statements/'.$fileName;
        }
        $fileModel->bank_statements =implode(",",$bank_statement);
    }
    if($request->hasfile('No_objection_certificate_from_the_owner_of_the_premise_to_use_the_premise_as_registered_office')){
        if (!file_exists(public_path('uploads/no_object_certificate'))) {
            File::makeDirectory(public_path('uploads/no_object_certificate'), 0777, true, true);
        }
        $files = $request->file('No_objection_certificate_from_the_owner_of_the_premise_to_use_the_premise_as_registered_office');
        foreach($files as $file)
        {
        $fileName = $file->getClientOriginalName();
        $file->move(public_path('uploads/no_object_certificate'), $fileName);
        $no_object_certificates[] = 'no_object_certificate/'.$fileName;
        }
        $fileModel->no_object_certificate =implode(",",$no_object_certificates);
    }
    if($request->hasfile('Passport_size_photo_of_Applicant')){
        if (!file_exists(public_path('uploads/photo'))) {
            File::makeDirectory(public_path('uploads/photo'), 0777, true, true);
        }
        $files = $request->file('Passport_size_photo_of_Applicant');
        foreach($files as $file)
        {
        $fileName = $file->getClientOriginalName();
        $file->move(public_path('uploads/photo'), $fileName);
        $photos[] = 'photo/'.$fileName;
        }
        $fileModel->photo =implode(",",$photos);
    }

    if($request->hasfile('Telephone_bills,_gas_bills,_electricity_bills_of_last_2_months_or_property_tax_receipts_of_registered_office')){
        if (!file_exists(public_path('uploads/property_tax_receipt'))) {
            File::makeDirectory(public_path('uploads/property_tax_receipt'), 0777, true, true);
        }
        $files = $request->file('Telephone_bills,_gas_bills,_electricity_bills_of_last_2_months_or_property_tax_receipts_of_registered_office');
        foreach($files as $file)
        {
        $fileName = $file->getClientOriginalName();
        $file->move(public_path('uploads/property_tax_receipt'), $fileName);
        $property_tax_receipts[] = 'property_tax_receipt/'.$fileName;
        }
        $fileModel->property_tax_receipt =implode(",",$property_tax_receipts);
    }
    if($request->hasfile('Aadhaar_Card_of_Partners/_Directors')){
        if (!file_exists(public_path('uploads/adhaar_card'))) {
            File::makeDirectory(public_path('uploads/adhaar_card'), 0777, true, true);
        }
        $files = $request->file('Aadhaar_Card_of_Partners/_Directors');
        foreach($files as $file)
        {
        $fileName = $file->getClientOriginalName();
        $file->move(public_path('uploads/adhaar_card'), $fileName);
        $adhaar_cards[] = 'adhaar_card/'.$fileName;
        }
        $fileModel->adhaar_card =implode(",",$adhaar_cards);
    }
    if($request->hasfile('Address_proof_of_the_applicant_(electricity_bill/water_bill/_telephone_bill)')){
        if (!file_exists(public_path('uploads/adress_proof'))) {
            File::makeDirectory(public_path('uploads/adress_proof'), 0777, true, true);
        }
        $files = $request->file('Address_proof_of_the_applicant_(electricity_bill/water_bill/_telephone_bill)');
        foreach($files as $file)
        {
        $fileName = $file->getClientOriginalName();
        $file->move(public_path('uploads/adress_proof'), $fileName);
        $adress_proofs[] = 'adress_proof/'.$fileName;
        }
        $fileModel->adress_proof =implode(",",$adress_proofs);
    }
    if($request->hasfile('Apostilled_copy_of_Board_resolution_with_NOC_signed_by_Authorised_Representative')){
        if (!file_exists(public_path('uploads/noc_authorised'))) {
            File::makeDirectory(public_path('uploads/noc_authorised'), 0777, true, true);
        }
        $files = $request->file('Apostilled_copy_of_Board_resolution_with_NOC_signed_by_Authorised_Representative');
        foreach($files as $file)
        {
        $fileName = $file->getClientOriginalName();
        $file->move(public_path('uploads/noc_authorised'), $fileName);
        $noc_authoriseds[] = 'noc_authorised/'.$fileName;
        }
        $fileModel->noc_authorised =implode(",",$noc_authoriseds);
    }
    if($request->hasfile('Apostilled_copy_of_Incorporation_certificate_of_the_foreign_body_corporate')){
        if (!file_exists(public_path('uploads/noc_authorised'))) {
            File::makeDirectory(public_path('uploads/noc_authorised'), 0777, true, true);
        }
        $files = $request->file('Apostilled_copy_of_Incorporation_certificate_of_the_foreign_body_corporate');
        foreach($files as $file)
        {
        $fileName = $file->getClientOriginalName();
        $file->move(public_path('uploads/incoporation_certificate'), $fileName);
        $incoporation_certificates[] = 'incoporation_certificate/'.$fileName;
        }
        $fileModel->incoporation_certificate =implode(",",$incoporation_certificates);
    }
    if($request->hasfile('Apostilled_Passport_copy')){
        if (!file_exists(public_path('uploads/passport_copy'))) {
            File::makeDirectory(public_path('uploads/passport_copy'), 0777, true, true);
        }
        $files = $request->file('Apostilled_Passport_copy');
        foreach($files as $file)
        {
        $fileName = $file->getClientOriginalName();
        $file->move(public_path('uploads/passport_copy'), $fileName);
        $passport_copies[] = 'passport_copy/'.$fileName;
        }
        $fileModel->passport_copy =implode(",",$passport_copies);
    }
    if($request->hasfile('Business_incorporation_certificate/_partnership_deed')){
        if (!file_exists(public_path('uploads/partnership_deed'))) {
            File::makeDirectory(public_path('uploads/partnership_deed'), 0777, true, true);
        }
        $files = $request->file('Business_incorporation_certificate/_partnership_deed');
        foreach($files as $file)
        {
        $fileName = $file->getClientOriginalName();
        $file->move(public_path('uploads/partnership_deed'), $fileName);
        $partnership_deeds[] = 'partnership_deed/'.$fileName;
        }
        $fileModel->partnership_deed =implode(",",$partnership_deeds);
    }
    if($request->hasfile('Digital_Signature_of_the_Applicant')){
        if (!file_exists(public_path('uploads/digital_sign'))) {
            File::makeDirectory(public_path('uploads/digital_sign'), 0777, true, true);
        }
        $files = $request->file('Digital_Signature_of_the_Applicant');
        foreach($files as $file)
        {
        $fileName = $file->getClientOriginalName();
        $file->move(public_path('uploads/digital_sign'), $fileName);
        $digital_signs[] = 'digital_sign/'.$fileName;
        }
        $fileModel->digital_sign =implode(",",$digital_signs);
    }
    if($request->hasfile('Letter_of_Authorization/_Board_Resolution_for_Authorized_Signatory')){
        if (!file_exists(public_path('uploads/letter_of_authorization'))) {
            File::makeDirectory(public_path('uploads/letter_of_authorization'), 0777, true, true);
        }
        $files = $request->file('Letter_of_Authorization/_Board_Resolution_for_Authorized_Signatory');
        foreach($files as $file)
        {
        $fileName = $file->getClientOriginalName();
        $file->move(public_path('uploads/letter_of_authorization'), $fileName);
        $letters_of_authorization[] = 'letter_of_authorization/'.$fileName;
        }
        $fileModel->letter_of_authorization =implode(",",$letters_of_authorization);
    }
        // $filePath = $file->storeAs('uploads', $fileName, 'public');
        // $fileModel->name = time().'_'.$req->file->getClientOriginalName();
        
        if( empty(DB::table('user_upload_document')->count())){
            $fileModel->save();
        }
       else if (isset( $userData)) {
       $UploadedFiles= UploadedDocuments::where('user_id','=',Auth::user()->id)->where('cat_id','=',$request->catId)->where('service_id','=',$request->serviceId)->first();
        $prev_doc_id=$UploadedFiles->doc_id;
        UploadedDocuments::where('user_id','=',Auth::user()->id)->where('cat_id','=',$request->catId)->where('service_id','=',$request->serviceId)
            ->update([
                'doc_id' => $fileModel->doc_id.','.$prev_doc_id
             ]);
            
        // $fileModel->doc_id=implode(",",$doc_ids);
        if($request->hasfile('Letter_of_Authorization/_Board_Resolution_for_Authorized_Signatory')){
            UploadedDocuments::where('user_id','=',Auth::user()->id)->where('cat_id','=',$request->catId)->where('service_id','=',$request->serviceId)
            ->update([
                'letter_of_authorization' => $fileModel->letter_of_authorization
             ]);
            }
        if($request->hasfile('Digital_Signature_of_the_Applicant')){
            UploadedDocuments::where('user_id','=',Auth::user()->id)->where('cat_id','=',$request->catId)->where('service_id','=',$request->serviceId)
            ->update([
                'digital_sign' => $fileModel->digital_sign
             ]);
            }
        if($request->hasfile('Business_incorporation_certificate/_partnership_deed')){
            UploadedDocuments::where('user_id','=',Auth::user()->id)->where('cat_id','=',$request->catId)->where('service_id','=',$request->serviceId)
            ->update([
                'partnership_deed' => $fileModel->partnership_deed
             ]);
            }
        if($request->hasfile('Apostilled_Passport_copy')){
            UploadedDocuments::where('user_id','=',Auth::user()->id)->where('cat_id','=',$request->catId)->where('service_id','=',$request->serviceId)
            ->update([
                'passport_copy' => $fileModel->passport_copy
             ]);
            }
        if($request->hasfile('Apostilled_copy_of_Incorporation_certificate_of_the_foreign_body_corporate')){
            UploadedDocuments::where('user_id','=',Auth::user()->id)->where('cat_id','=',$request->catId)->where('service_id','=',$request->serviceId)
            ->update([
                'incoporation_certificate' => $fileModel->incoporation_certificate
             ]);
            }
        if($request->hasfile('Apostilled_copy_of_Board_resolution_with_NOC_signed_by_Authorised_Representative')){
            UploadedDocuments::where('user_id','=',Auth::user()->id)->where('cat_id','=',$request->catId)->where('service_id','=',$request->serviceId)
            ->update([
                'noc_authorised' => $fileModel->noc_authorised
             ]);
            }
        if($request->hasfile('Address_proof_of_the_applicant_(electricity_bill/water_bill/_telephone_bill)')){
            UploadedDocuments::where('user_id','=',Auth::user()->id)->where('cat_id','=',$request->catId)->where('service_id','=',$request->serviceId)
            ->update([
                'adress_proof' => $fileModel->adress_proof
             ]);
            }
        if($request->hasfile('Aadhaar_Card_of_Partners/_Directors')){
            UploadedDocuments::where('user_id','=',Auth::user()->id)->where('cat_id','=',$request->catId)->where('service_id','=',$request->serviceId)
            ->update([
                'adhaar_card' => $fileModel->adhaar_card
             ]);
            }
        if($request->hasfile('Telephone_bills,_gas_bills,_electricity_bills_of_last_2_months_or_property_tax_receipts_of_registered_office')){
            UploadedDocuments::where('user_id','=',Auth::user()->id)->where('cat_id','=',$request->catId)->where('service_id','=',$request->serviceId)
            ->update([
                'property_tax_receipt' => $fileModel->property_tax_receipt
             ]);
            }
        if($request->hasfile('Passport_size_photo_of_Applicant')){
            UploadedDocuments::where('user_id','=',Auth::user()->id)->where('cat_id','=',$request->catId)->where('service_id','=',$request->serviceId)
            ->update([
                'photo' => $fileModel->photo
             ]);
            }
        if($request->hasfile('No_objection_certificate_from_the_owner_of_the_premise_to_use_the_premise_as_registered_office')){
            UploadedDocuments::where('user_id','=',Auth::user()->id)->where('cat_id','=',$request->catId)->where('service_id','=',$request->serviceId)
            ->update([
                'no_object_certificate' => $fileModel->no_object_certificate
             ]);
            }
            if($request->hasfile('Address_proof_of_the_registered_office_(ownership_documents_or_rental/lease_agreement)')){
            UploadedDocuments::where('user_id','=',Auth::user()->id)->where('cat_id','=',$request->catId)->where('service_id','=',$request->serviceId)
            ->update([
                'office_address_proof' => $fileModel->office_address_proof
             ]);
            }
           
            if($request->hasfile('PAN_of_the_Directors/Partners')){
                UploadedDocuments::where('user_id','=',Auth::user()->id)->where('cat_id','=',$request->catId)->where('service_id','=',$request->serviceId)
                ->update([
                    'pan_card' => $fileModel->pan_card

                 ]);
                }
            if($request->hasfile('ID_proof_of_the_partners_(voter_ID/Aadhaar_Card/_Driving_License/Passport)')){
                    UploadedDocuments::where('user_id','=',Auth::user()->id)->where('cat_id','=',$request->catId)->where('service_id','=',$request->serviceId)
                    ->update([
                        'id_proof' => $fileModel->id_proof
                     ]);
                    }
            if($request->hasfile('Bank_Account_statement/_cancelled_cheque')){
                    UploadedDocuments::where('user_id','=',Auth::user()->id)->where('cat_id','=',$request->catId)->where('service_id','=',$request->serviceId)
                    ->update([
                        'bank_statements' => $fileModel->bank_statements
                     ]);
                    }
             
                }else{
                
                $fileModel->save();
             }
        
        return back()->with('success','File Uploaded successfully!');;
    }

        
        



} 
    

    
