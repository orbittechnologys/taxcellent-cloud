<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\contact;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;
use App\Models\Service;
use Illuminate\Support\Str;
use App\Models\DocumentsList;


class IndexController extends Controller
{
    /* Services */

    public function index()
    {
        return view('welcome');
    }
    public function getheaderCat()
    {
        $headermenuAry = array();
        $headermenuAry["serviceCategory"] = ServiceCategory::select("id", "cat_name", "slug")->with("service")->orderBy('id', 'ASC')->get()->toArray();
        //  dd($headermenuAry["serviceCategory"]);
        return  $headermenuAry;
    }

    public function serviceCategoryDetail($slug)
    {
        if ($slug) {
            $categoryData = ServiceCategory::where('slug', $slug)->first();
            $service_cat_id = $categoryData->id;
            $serviceAry = Service::where("status", "1")->where("service_cat_id", "=", $service_cat_id)->orderBy('id', 'ASC')->get()->toArray();
            return view('business_registration_service', ['serviceAry' => $serviceAry], ['categoryData' => $categoryData]);
        }
    }
    public function catServiceDetail($slug)
    {
        if ($slug) {
            $serviceDetails = Service::where('slug', $slug)->first();

            $CategoryId = $serviceDetails->service_cat_id;
            $userDocIds = $serviceDetails->user_doc;
            $documentAry = "";
            if ($userDocIds) {
                $userDocAry = explode(",", $userDocIds);
                $documentAry = DocumentsList::whereIn('id', $userDocAry)->get()->toArray();
            }
            $mainCatId = ServiceCategory::where('id', $CategoryId)->first();
            // echo"<pre>";print_r($serviceDetails);die;
            return view('service_details', ['serviceDet' => $serviceDetails, 'mainCatId' => $mainCatId, 'documentAry' => $documentAry]);
        }
    }
    public function businessRegistrationService()
    {

        return view('business_registration_service');
    }
    public function gstService()
    {

        return view('gst_service');
    }
    public function legalService()
    {

        return view('legal_service');
    }
    public function compliancesService()
    {

        return view('compliances_service');
    }
    public function itrService()
    {

        return view('itr_service');
    }
    /* close services */
    /* Sub services */
    public function privateLimitedCompanyRegService()
    {

        return view('private_limited_company_registration_services');
    }
    public function limitedLiabilityPartnershipCompanyRegService()
    {

        return view('limited_liability_partnership_company_registration_services');
    }
    public function onePersonCompanyRegService()
    {

        return view('one_person_company_registration_services');
    }
    public function websiteAgreement()
    {

        return view('website_agreement_services');
    }
    public function legalAgreement()
    {

        return view('legal_agreement_services');
    }
    public function launchingTrademark()
    {

        return view('startups_launching_Trademark');
    }
    public function launchingObjection()
    {

        return view('startups_launching_objection');
    }
    public function completeBusinessAccounting()
    {

        return view('complete_business_accounting');
    }
    public function BusinessAccountingBookkeeping()
    {

        return view('business_accounting_bookkeeping_services');
    }
    public function startupLunchingRegistration()
    {

        return view('startups_launching_registration_advisory_services');
    }
    public function manageinvoice()
    {

        return view('manageinvoice');
    }
    public function gstReturnsFiling()
    {

        return view('gst_returns_filing_services');
    }
    public function gstRegistrationServices()
    {

        return view('gst_registration_services');
    }
    public function importExportCodeReg()
    {

        return view('import_export_code_registration');
    }
    public function digitalSignatureCertificat()
    {

        return view('digital_signature_certificate_dsc_token');
    }
    public function directorIdentificationNumber()
    {

        return view('director_identification_number_services');
    }
    public function incomeTaxReturnFilingSalariedIndividual()
    {

        return view('income_tax_return_filing_salaried_individual');
    }
    public function incomeTaxReturnFilingProfessional()
    {

        return view('income_tax_return_filing_professional');
    }
    public function incomeTaxReturnFilingBusiness()
    {

        return view('income_tax_return_filing_business');
    }
    public function foreignIncomePlan()
    {

        return view('foreign_income_plan');
    }
    public function incomeTaxReturnPrivateCompany()
    {

        return view('income_tax_return_private_limited_company');
    }
    public function incomeTaxReturnPartnershipfirm()
    {

        return view('income_tax_return_limited_liability_partnership_firm');
    }
    public function hriPlan()
    {

        return view('hni_plan');
    }
    /* close sub services */

    public function contactUs()
    {

        return view('contact_us');
    }

    public function contactForm(Request $request)
    {

        $this->validate($request, [
            'contact_name' => 'required',
            'contact_email' => 'required',
            'contact_subject' => 'required',
            'contact_message' => 'required',
            'mobile_num' => 'required',

        ]);

        $conData = new contact;

        $conData->contact_name = $request['contact_name'];
        $conData->contact_email = $request['contact_email'];
        //print_r($user_email);die;
        $conData->mobile_num = $request['mobile_num'];
        $conData->contact_subject = $request['contact_subject'];
        $conData->contact_message = $request['contact_message'];

        $conData->save();

        return back()->with('success', 'Your Contact inquiry has been successfully Generated');
    }
}
