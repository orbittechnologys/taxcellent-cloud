@extends('layouts.master')
@section('css')
    <link href="{{ asset('template/css/style.mine568.css?v=15.10.10') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('template/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('template/css/ionicons.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('template/css/servicepagecss17e6.css?v=5.2') }}" rel="stylesheet" async type="text/css" />
    <link href="{{ asset('template/css/servicepagecss17e6.css?v=1') }}" rel="stylesheet" />
    <script src="{{ asset('template/js/customf500.js?v=13') }}"></script>
    @stop
@section('content')

@include('layouts.inc.header')

<div class="fullpageremove">
    <div class="page-wrapper">           
        <div class="page-wrapper">
            <style>
                .fp-viewing--1 {overflow-y: scroll !important;}
            </style>
            <!-- REQUEST CALL BACK -->
            <div class="insta-request-call-back-block">
                <!-- CONTAINER -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="nav-top-static">
                                <ol class="breadcrumb" style="text-align:left">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ url('services') }}"> Services</a></li>
                                    <li><a href="{{ url('business-registration-service') }}"> Business Registration</a></li>
                                    <li class="active"><a style="color:#909090 !important;">Limited Liability Partnership</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.CONTAINER -->
                <div class="LocalNavigation">
                    <div class="container">
                        <nav class="nav">
                            <ul class="menu">
                                <li class="active" style="padding-left:0px;">
                                    <a href="#what-is-included">What's included</a>
                                </li>
                                <li>
                                    <a href="#pricing-details">Process</a>
                                </li>
                                <li>
                                    <a href="#documens">document checklist</a>
                                </li>
                                <li>
                                    <a href="#faq">FAQs</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!--Add static cintent for page-->
        <div class="other-element-add-wrapper">
            <div class="container">
                <div class="row">
                <input type="hidden" id="service_id" value="1" name="service_id">
                    <input type="hidden" id="sub_cat_id" value="2" name="sub_cat_id">
                    <input type="hidden" id="serPrice" value="9599" name="serPrice">
                    <div class="col-md-4 col-sm-5 col-xs-12 col-md-push-8 col-sm-push-7 col-xs-push-0">
                        <div id="sidStik" class="ins-request-call-back-form2 pricpln_wdget">
                                        <div class="panel-heading">
                                            <span class="pricely-label mobile-view-title">Limited Liability Partnership</span>
                                            <div class="pricely-figure pric-fig2" style="padding-bottom:0px !important;padding-top:0px !important;">
                                                
                                                <span class="pricely-amount" style="margin-bottom:10px !important;"><span class="pricely-currency"><i class="fa fa-rupee"></i></span> 9,599</span>
                                                <span class="per-return-text">per registration</span>
                                                
                                                
                                                
                                            </div>
                                            <span class="pricely-amount" style="margin: 0 0 10px 0px !important;padding: 0 !important;line-height: 10px;"> <del style="color:#2f3141">₹12,499</del><span style="width:auto;float:none;" class="per-return-text" style="">(you save &nbsp;  ₹ 2,900)</span></span>
                                            <span class="pricely-button pric-btn-btm"><button class="btn btn-teal waves-effect waves-ripple" onclick="buyNow()">Buy plan</button></span>
                                            <figure class="img-shape absolute-bottom pricpln_btmEfct">
                                                <img src="{{ asset('template/images/screenshot/wave.svg') }}" alt="">
                                            </figure>
                                        </div>
                            <div class="talktoexpert-form">
                                <h2>Talk to our experts</h2>
                                <!--  <div class="input-box Req_fnamediv">
                                    <label class="formLabel" for="">First Name</label>
                                    <input type="text" class="formInput" required="" id="Req_txtname" name="" autocomplete="off">
                                </div>
                                <div class="input-box Req_lnamediv">
                                    <label class="formLabel" for="">Last Name</label>
                                    <input type="text" class="formInput" required="" id="Req_txtlastname" name="" autocomplete="off">
                                </div> -->
                                <div class="input-box Req_emailaddressdiv">
                                    <label class="formLabel" for="">Email</label>
                                    <input type="text" class="formInput" required="" id="Req_txtenquiryemail" name="" autocomplete="off">
                                </div>
                                <div class="input-box Req_phonediv">
                                    <label class="formLabel" for="">Phone Number</label>
                                    <input type="text" class="formInput" required="" id="Req_txtphone" name="" autocomplete="off">
                                </div>
                                <div class="input-box">
                                    <button type="submit" class="btn btn-insGreen waves-effect waves-ripple requestcallbackclick">Request a Callback</button>
                                </div>

                                <div class="information-tag">
                                    <p>Your information is 100% safe with us</p>
                                    <img src="{{ asset('template/images/safe-icon.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-7 col-xs-12 col-md-pull-4 col-sm-pull-5 col-xs-pull-0">
                        <!--Private limited section start-->
                        <div id="whats-included"></div>
                        <div class="pricely-chart2 plcrs-blk">
                            <div class="plan-block">
                                <div class="plan-inner-block">
                                    <h3>LIMITED LIABILITY PARTNERSHIP</h3>
                                    <div class="plan-discription">
                                        <h4>Services included:</h4>
                                        <ul>
                                            <li>
                                                <i class="ion-checkmark-round"></i> Filing of E-forms with the Registrar of Companies (ROC)
                                            </li>
                                            <li>
                                                <i class="ion-checkmark-round"></i> Online Documents Collection
                                            </li>
                                            <li>
                                                <i class="ion-checkmark-round"></i> Designated Partner Identification Numbers-DPINs (2 nos.)
                                            </li>
                                            <li>
                                                <i class="ion-checkmark-round"></i> Digital Signature Certificates-DSCs (2 nos.)
                                            </li>
                                            <li>
                                                <i class="ion-checkmark-round"></i> Name Approval
                                            </li>
                                            <li>
                                                <i class="ion-checkmark-round"></i> PAN Application
                                            </li>
                                            <li>
                                                <i class="ion-checkmark-round"></i> TAN Registration
                                            </li>
                                            <li>
                                                <i class="ion-checkmark-round"></i> Issue of Certificate of Incorporation
                                            </li>
                                            <li>
                                                <i class="ion-checkmark-round"></i> Includes Government Fees upto 1 Lakh Capital Contribution by Designated Partners
                                            </li>
    
                                            <li>
                                                <i class="ion-checkmark-round"></i> Stamp duty upto Rs. 500
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="plan-discription">
                                        <h4>Ideal For:</h4>
                                        <ul>
                                            <li>
                                                <i class="ion-arrow-right-b"></i>  Minimum two directors and two shareholders
                                            </li>
                                            <li>
                                                <i class="ion-arrow-right-b"></i> Companies, body corporates or already existing partnerships
                                            </li>
                                            <li>
                                                <i class="ion-arrow-right-b"></i> LLPs registered outside india
                                            </li>
                                            <li>
                                                <i class="ion-arrow-right-b"></i> Startups and SMEs looking for carrying business with minimal legal formalities
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--Private limited section start end-->

                        <!--Process how it works section start-->
                        <!-- <div id="pricing-details" class="section1 section"></div> -->
                        <div class="howitworks-section plcrs-hiw-blk" id="pricing-details">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pricely-chart2 plcrs-blk">
                                        <div class="plan-inner-block">
                                            <h3>Process - How it works</h3>
                                        </div>
                                    </div>
                                    <div class="NW-ins-HIW-content-block">
                                        <img src="{{ asset('template/images/insta-c-a-23860.png?v=1') }}" width="100%" />
                                        <div class="small-2 columns end" data-reactid="250">
                                            <div class="UjhVBb" data-reactid="251">
                                                <div class="row ghqMrx" data-reactid="252">
                                                    <span data-reactid="253"><strong data-reactid="254">Approx 2 Weeks </strong></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Process how it works section end-->

                        <!--Document check list section start-->
                        <div id="documentchecklist"></div>
                        <div class="documentchecklist-section">
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="documens" class="section1 section"></div>
                                    <div class="pricely-chart2 plcrs-blk">
                                        <div class="plan-block">
                                            <div class="plan-inner-block">
                                                <h3>Document Checklist</h3>
                                                <div class="plan-discription">
                                                    <h4>Partner KYC documents</h4>
                                                    <ul>
                                                        <li>
                                                            <i class="ion-checkmark-round"></i>Scanned copies of Pan card and Aadhar of the Partners along with passport size photos
                                                        </li>
                                                        <li>
                                                            <i class="ion-checkmark-round"></i>Scanned copies of any one of the ID Proof of the Partners - Driving License/ Voter’s ID/ Passport copy
                                                        </li>
                                                        <li>
                                                            <i class="ion-checkmark-round"></i>Address Proof of the Partners - Bank Statement/ Telephone Bill/ Mobile Bill/ Electricity Bill (Latest Month scanned copies needed)
                                                        </li>

                                                    </ul>
                                                </div>
                                                <div class="plan-discription">
                                                    <h4>Address proof of registered office</h4>
                                                    <ul>
                                                        <li>
                                                            <i class="ion-arrow-right-b"></i>Scanned copy of rent Agreement of registered office
                                                        </li>
                                                        <li>
                                                            <i class="ion-arrow-right-b"></i>Latest Electricity Bill of registered office
                                                        </li>
                                                        <li>
                                                            <i class="ion-arrow-right-b"></i>No Objection Certificate from the owner of the Premises, if not owned by the partners (format of NOC downloadable from dashboard)
                                                        </li>

                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Document check list section end-->

                        <!--Faq section start-->
                        <div id="faq" class="section1 section"></div>
                        <div class="documentchecklist-section">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pricely-chart2">
                                        <div class="plan-block plcrs-blk">
                                            <div class="plan-inner-block">
                                                <h3>Frequently Asked Questions </h3>
                                                <div class="plan-discription">
                                                    <div class="faq-block" id="faq">
                                                        <div class="questions"> What is a Limited Liability Partnership (LLP)?</div>
                                                        <div class="faq-box">
                                                            <div>
                                                                <div>
                                                                    <p> A Limited Liability Partnership (LLP) is a partnership in which some or all partners have limited liabilities. It therefore can exhibit elements of a partnership firm and a private limited company, where the business is carried out in a corporate framework, guided by terms of the mutually adopted partnership deed. In an LLP, a partner is not responsible or liable for another partner's misconduct or negligence. The Limited Liability Partnership (LLP) partnership was introduced in India by way of Limited Liability Partnership Act, 2008 and has become a preferable form of organization among entrepreneurs as it combines the benefits of both a partnership firm and a company into a single form of organization. </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-block" id="faq">
                                                        <div class="questions"> What are the essential features of an LLP?</div>
                                                        <div class="faq-box">
                                                            <div>
                                                                <div>
                                                                    <ul style="margin:0px; padding:0px;">
                                                                        <li>1. <b>Separate Legal Entity:</b> A Limited Liability Partnership is legally recognised as a separate entity. Hence, an LLP can have its PAN, bank accounts, licenses, approvals, contracts, assets and liabilities in its unique name.</li>
                                                                        <li>2. <b>Limited Liability:</b> Partners of a Limited Liability Partnership have liability limited to the extent of their contribution in the LLP and personal assets of partners cannot be utilized for the payment of the liabilities of the LLP under any circumstances.</li>
                                                                        <li>3. <b>Lesser Compliance:</b> Tax compliances are similar for both private limited company and LLP. However, when it comes to compliance relating to the Ministry of Corporate Affairs, LLP enjoys significant advantages. An LLP does not have to get its accounts audited if the annual turnover of the LLP is less than Rs. 40 lakhs and the capital contribution is less than Rs. 25 lakhs. A private limited company on the other hand would have to file audited financial statements every year irrespective of its turnover.</li>
                                                                        <li>4. <b>Simplicity:</b> The administrative process of forming the LLP and maintaining it is very simple when compared to a private limited company.</li>                                                                    

                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-block" id="faq">
                                                        <div class="questions"> How do I start an LLP?</div>
                                                        <div class="faq-box">
                                                            <div>
                                                                <div>
                                                                    <p> A Limited Liability Partnership can be incorporated by submitting relevant information on the website of the Ministry of Corporate Affairs. In order to start an LLP, you must meet the minimum requirements as listed below:</p>
                                                                    <ul class="list-in">
                                                                        <li>1.<b>Designated Partners:</b> A Limited Liability Partnership must have a minimum of two Designated Partners and a maximum of 200. The prerequisite is to have at least one Designated Partner who is a resident of India. The partners should be above the age of 18 years. This is to ensure that the partner in the LLP is not a minor and is competent to enter into a contract.</li>
                                                                        <li>2.<b>Digital Signature Certificate (DSC):</b> DSC is mandatory for all the partners. Any form filed for incorporation of Limited Liability Partnership (LLP) in India shall be submitted online after affixing the DSC of the designated partner.</li>

                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-block" id="faq">
                                                        <div class="questions">Is there any minimum capital requirement for LLP registration in India?</div>
                                                        <div class="faq-box">
                                                            <div>
                                                                <div>
                                                                    <p>No. There is no minimum amount of capital prescribed to form an LLP in India and therefore an LLP can be incorporated with any amount of capital. Although there is no minimum requirement, every partner must contribute financially to form the LLP. The amount of capital contribution is disclosed in the LLP Agreement and the amount of stamp duty payable depends on the total contributed amount.</p>                                                                
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-block" id="faq">
                                                        <div class="questions">What is the minimum number of partners required to start a Limited liability Partnership?</div>
                                                        <div class="faq-box">
                                                            <div>
                                                                <div>
                                                                    <p>To incorporate a Limited Liability Partnership, a minimum of two people is required. A Limited Liability Partnership must have a minimum of two Designated Partners and a maximum of 200.</p>                                                                
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-block" id="faq">
                                                        <div class="questions"> What are the documents required to set up an LLP in India?</div>
                                                        <div class="faq-box">
                                                            <div>
                                                                <div>
                                                                    <ul class="list-in">
                                                                        <li><i class="ion-arrow-right-b"></i> 	Copy of PAN Card of Designated partners</li>
                                                                        <li><i class="ion-arrow-right-b"></i> 	Passport size photograph of Designated partners</li>
                                                                        <li><i class="ion-arrow-right-b"></i> 	Copy of Aadhaar Card/ Voter identity card/ Driver’s license as address proof</li>
                                                                        <li><i class="ion-arrow-right-b"></i>	Electricity/ Water bill/ Telephone Bill as proof of Registered Office (Business Place)</li>
                                                                        <li><i class="ion-arrow-right-b"></i>	Copy of Sale Deed/Property Deed (If owned property)</li>
                                                                        <li><i class="ion-arrow-right-b"></i>	Passport (in case of Foreign Nationals/ NRIs)</li>
                                                                        <li><i class="ion-arrow-right-b"></i>	Digital Signature Certificate</li>
                                                                        <li><i class="ion-arrow-right-b"></i>	Copy of Notarised Rental Agreement</li>
                                                                        <li><i class="ion-arrow-right-b"></i>	Copy of NOC from the property owner</li>
                                                                        
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                
                                                    <div class="faq-block" id="faq">
                                                        <div class="questions">How to reserve the name for a Limited Liability Partnership?</div>
                                                        <div class="faq-box">
                                                            <div>
                                                                <div>
                                                                    <p>LLP name availability is an essential part for an online LLP registration. The name of an LLP is reserved through a web-based form named “LLP-RUN” (Reserve Unique Name). The partners can provide a maximum of 2 names in preferential order to reserve the name. The registrar may ask to re-submit the application with different names, if the proposed names do not fall under criteria of uniqueness, relevancy or does not fulfil the necessary requirements.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-block" id="faq">
                                                        <div class="questions">What is the process of getting a LLP Registered?</div>
                                                        <div class="faq-box">
                                                            <div>
                                                                <div>
                                                                <p><b>Step-1: Acquire Digital Signature Certificate for Partners:</b><br />
                                                                The first and foremost step to register a Limited Liability Partnership is to acquire a Digital Signature Certificate (DSC) of the partners. Any e-form is filed with the Ministry after affixing the DSC of the authorised signatory for LLP Incorporation. Also, it is required for the application of DIN of the partners.
                                                                </p>
                                                                                                                                <p><b>Step-2: Name approval Application:</b><br />
                                                                The application for reservation of name of the proposed LLP  is to be made in form
                                                                “RUN-LLP”, where one can apply for maximum 2 names in order of preference. One shall keep in mind that the names applied for are not identical or nearly resembling any existing Company or LLP or registered trademark.  If the proposed names are not approved by the MCA, a resubmission is allowed with two more proposed names. Once the name is approved, it is reserved for a period of 3 months from the date of approval.
                                                                </p>
                                                                                                                                <p><b>Step-3: Application for Certificate of Incorporation:</b><br />
                                                                The form used for incorporation of LLP is FiLLiP (Form for incorporation of Limited Liability Partnership) which shall be filed with the Registrar who has a jurisdiction over the state in which the registered office of the LLP is situated. The form will be an integrated form. The most significant part is integration of DIN Allotment Application with incorporation application. Some important features of this application are:<br />
                                                                1)	DPIN/DIN application for maximum 2 Designated Partners (DPs) can be made under the application. If there are more than 2 DPs who do not hold DIN, they can be added
                                                                later by following respective filings of “Form-4”.<br />
                                                                2)	With this form, the application for name reservation can also be made. However, it is at the discretion of the applicants who can choose to reserve the name through LLP-RUN or under this form.
                                                                The application is accompanied with requisite documents including the subscriber’s sheet and registered office address proof. The e-form will be attested by the partners through PAN based DSC and certified by the practising professional (CA/CS/CWA).<br />

                                                                The application will be processed for approval by Central Registration Centre (CRC). If the registrar finds it necessary to call for further documents or information, it may do so by directing for re-submission.
                                                                Upon approval of the application made for LLP registration online, the Certificate of Incorporation (CoI) will be issued in form 16 along with DPIN/DIN allotted to the Designated Partners. CoI will also consist of the Limited Liability Partnership Identification Number (LLPIN). The date of CoI will be the date of LLP incorporation since when it has come into legal existence. The business can now be commenced in LLP’s name.
                                                                </p>
                                                                                                                                <p><b>Step 4: Apply for PAN and TAN</b><br />
                                                                Unlike the case of a company, the application for PAN and TAN is required to be made separately for LLP through offline or online mode. The applications are made directly to the Income Tax Department. The applications are made in form 49A and 49B respectively with Certificate of Incorporation as supporting proof.
                                                                </p>
                                                                                                                                <p><b>Step 5: Drafting and Filing LLP Agreement</b><br />
                                                                The next step is to draft the LLP Agreement based on the partners’ requirements. Step-4 and Step-5 both can be processed simultaneously, however, this step would take a little longer to complete than simply making the application. The name, business object, place of business and all other essential details of LLP will be placed in the Agreement. Other clauses will be capital contribution, profit sharing ratio, rights and responsibilities of partners, etc.
                                                                                                                                </p><p>
                                                                Once the LLP Agreement is reviewed and agreed upon by the partners, it will be executed by payment of stamp duty. which depends on the respective State Stamp Act where the registered office of the LLP is situated. Lastly, with the signatures by the partners and attestation by the witnesses, the agreement will be executed.
                                                                This is filed in LLP form-3 and the verification and approval are processed by the concerned State RoC instead of Central Registration Centre (CRC) as in the case of previous steps. The agreement must be filed with MCA within 30 days of date of incorporation. Any delay leads to a penalty of Rs 100 per day till the date of actual filing.
                                                                </p>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-block" id="faq">
                                                        <div class="questions"> What is a Digital Signature Certificate (DSC)?</div>
                                                        <div class="faq-box">
                                                            <div>
                                                                <div>
                                                                    <p>Digital Signature Certificate for LLP is provided in the form of a token and issued by Certified Authorities. Any form filed for incorporation of Limited Liability Partnership (LLP) in India online shall be submitted after affixing the DSC of the designated partner.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-block" id="faq">
                                                        <div class="questions">What is the Designated Partner Identification Number (DPIN)? </div>
                                                        <div class="faq-box">
                                                            <div>
                                                                <div>
                                                                    <p>The concept of Designated Partner Identification Number (DPIN) for LLP incorporation is the same as Director Identification Number (DIN) with respect to the Company incorporation. Director Identification Number is a unique number assigned by the MCA to Individuals on whose behalf the application is made. This allows any individual to be Director in any Company or Designated Partner in LLP. The application of DIN allotment is made with incorporation application in FiLLiP subject to maximum 2 DINs.</p>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-block" id="faq">
                                                        <div class="questions">What are the requirements to be a Partner/Designated partner for LLP formation?</div>
                                                        <div class="faq-box">
                                                            <div>
                                                                <div>
                                                                    <p>There are no limitations in terms of citizenship or residential status to be a Partner in LLP. In other words, the LLP Act, 2008 allows foreign nationals, including foreign companies & LLPs to incorporate an LLP in India. The prerequisite is to have at least one Designated Partner who is a resident of India who is above the age of 18 years. This is to ensure that the concerned person is not a minor and competent enough to enter a contract. Also, the proposed Designated Partner shall have DPIN.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-block" id="faq">
                                                        <div class="questions">Can a salaried working person also become a partner in an LLP?</div>
                                                        <div class="faq-box">
                                                            <div>
                                                                <div>
                                                                    <p>Yes, a salaried person can become a partner in an LLP. You need to check your employment agreement if that allows for such provisions. In most, cases employers are comfortable with the fact that their employee is a director or partner in another company or LLP.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-block" id="faq">
                                                        <div class="questions">Can NRI/ Foreign Nationals be a designated partner in LLP?</div>
                                                        <div class="faq-box">
                                                            <div>
                                                                <div>
                                                                    <p>Yes, an NRI or Foreign National can be a Designated Partner in a Limited Liability Partnership after obtaining Designated Partner Identification Number (DPIN). However, at least one Designated Partner in the LLP must be a Resident India. In fact, the foreign director can also be a majority shareholder in the company </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-block" id="faq">
                                                        <div class="questions">Does an LLP have a separate legal entity?</div>
                                                        <div class="faq-box">
                                                            <div>
                                                                <div>
                                                                    <p>Yes, an LLP has a separate legal entity, liable to the full extent for its assets. In other words, liability of the partners is limited to their agreed contribution in the LLP. Further, no partner would be liable on account of the independent or unauthorized actions of other partners, thus allowing individual partners to be shielded from joint liability created by another partner’s wrongful business decisions or misconduct.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-block" id="faq">
                                                        <div class="questions">Is an office address required for starting a Limited Liability Partnership?</div>
                                                        <div class="faq-box">
                                                            <div>
                                                                <div>
                                                                    <p>Yes, the partners must provide a place of business in India with the required list of documents. It can be both – a residential and commercial plot. In most cases, the address is used for the communication purpose by the MCA and other concerned authorities and is also published on its portal.</p>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-block" id="faq">
                                                        <div class="questions">Can we Change the office address of the LLP after incorporation?</div>
                                                        <div class="faq-box">
                                                            <div>
                                                                <div>                                                                
                                                                    <p>Yes, the LLP office address can be changed at any time after incorporation by filling the form “Form-15” to ROC.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-block" id="faq">
                                                        <div class="questions">What is an LLP Agreement? Is it required to be filed with MCA?</div>
                                                        <div class="faq-box">
                                                            <div>
                                                                <div>
                                                                    <p>LLP Agreement is an agreement executed by all partners after LLP incorporation in India. The agreement prescribes all the clauses related to business, including the rights, roles, duties, and responsibilities of partners in LLP. The agreement must be filed in “Form -3” with the ROC within 30 days of the issue of a certificate of incorporation. Failure to do so will charge an additional fee of ₹ 100 per day till the date of filing.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-block" id="faq">
                                                        <div class="questions">How is the Stamp duty amount computed with respect to an LLP Agreement? Whether notarization is necessary?</div>
                                                        <div class="faq-box">
                                                            <div>
                                                                <div>
                                                                    <p>The amount of capital contribution is taken into consideration in deciding the stamp duty on the LLP Agreement in India. The rate of stamp duty varies from State to State. The State Stamp Act will be applied depending on where the registered office is situated. The stamp duty amount of Rs 500 is included in the package cost of Taxcellent. Further, the agreement must be on stamp paper and be notarized.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-block" id="faq">
                                                        <div class="questions">Do I have to physically visit the ROC office during registration of LLP?</div>
                                                        <div class="faq-box">
                                                            <div>
                                                                <div>
                                                                    <p>No, none of the partners are required to be present. All the forms are filed on the web portal and are digitally signed. The required documents can be uploaded on your Taxcellent dashboard and the dedicated C.A. initiates the process upon receipt.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-block" id="faq">
                                                        <div class="questions">When can I get the PAN and TAN of the LLP?</div>
                                                        <div class="faq-box">
                                                            <div>
                                                                <div>
                                                                    <p>PAN and TAN is mandatory for every LLP. Unlike Companies where SPICe + form for incorporation has facility to get PAN and TAN along with Certificate of Incorporation, LLP Form FiLLiP (Form for incorporation of Limited Liability Partnership) does not have such facility right now, so PAN and TAN application is required to be made separately as soon as LLP gets incorporated. The physical copy of the PAN will be received at the Registered Office once the same is dispatched by the Income Tax Department.</p>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-block" id="faq">
                                                        <div class="questions"> How long will it take to incorporate an LLP?</div>
                                                        <div class="faq-box">
                                                            <div>
                                                                <div>
                                                                    <p>Taxcellent can incorporate a Limited Liability Partnership in 14-20 days. The time taken for incorporation will depend on submission of relevant documents by the client and speed of Government Approvals. To ensure speedy incorporation, please choose a unique name for your LLP and ensure you have all the required documents prior to starting the incorporation process.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-block" id="faq">
                                                        <div class="questions">What are the annual compliance requirements once LLP is registered?</div>
                                                        <div class="faq-box">
                                                            <div>
                                                                <div>
                                                                    <p>Once LLP registration is completed, the partners must open a bank account in the name of LLP for business transactions. There is no additional requirement to be fulfilled. However, the partners must deposit the agreed amount to contribute as and when required. Subsequently it shall file form “Form -8” and “form-11” as part of Annual compliance within the given timeline.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-block" id="faq">
                                                        <div class="questions">Whether Audit is mandatory after LLP registration in India?</div>
                                                        <div class="faq-box">
                                                            <div>
                                                                <div>
                                                                    <p>Statutory audit in case of LLP registration depends on the turnover and contribution of the LLP. If the LLP turnover exceeds ₹ 40 lakhs and/or the capital contribution exceeds ₹ 25 lakhs, the financial statements must be audited by an eligible statutory auditor.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-block" id="faq">
                                                        <div class="questions"> Can an LLP be converted into a Private limited Company?</div>
                                                        <div class="faq-box">
                                                            <div>
                                                                <div>
                                                                    <p>Yes, you can convert your LLP into a Private Limited Company. LLP can be converted into a Private limited company by following the provisions contained in Sections 366 to 374 Part XXI of the Companies Act,2013 and Companies (Authorised to Register) Rules, 2014.</p>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-block" id="faq">
                                                        <div class="questions"> Can an existing partnership firm be converted to an LLP?</div>
                                                        <div class="faq-box">
                                                            <div>
                                                                <div>
                                                                    <p>Yes, an existing partnership firm can be converted into LLP by complying with the Provisions of clause 58 and Schedule II of the LLP Act. “Form 17” needs to be filed along with “Form FiLLiP” for such conversion and incorporation of LLP.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-block" id="faq">
                                                        <div class="questions">What is the income tax rate applicable to an LLP? Does the Income Tax Act treat partnership firms and LLPs differently?</div>
                                                        <div class="faq-box">
                                                            <div>
                                                                <div>
                                                                    <p>Both general partnerships and LLPs are taxed at a flat rate of 30%.
                                                                    All the other income tax act provisions apply similarly except that general partnership firms are covered under presumptive taxation scheme i.e. if turnover is below Rs. 2 crores in business or Rs. 50 lakhs in case of profession, there is no need to maintain books of accounts or get accounts audited whereas, LLPs are not covered under presumptive taxation scheme.
                                                                    </p>
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-block" id="faq">
                                                        <div class="questions">How can Taxcellent help? What is the cost incurred to get a Limited Liability Partnership?</div>
                                                        <div class="faq-box">
                                                            <div>
                                                                <div>
                                                                    <p>
                                                                        Taxcellent is an online cloud accounting platform backed by a team of in-house professionals to facilitate incorporation of the LLP within a defined timeline. Once you buy the LLP incorporation package, a dedicated C.A. from our team will be assigned to you. When you upload the requisite documents on your personal Taxcellent dashboard, the dedicated C.A. will be notified and will handhold you through the process of incorporation from start to finish.Taxcellent charges are notified <a href="limited-liability-partnership-company-registration-services.html">here</a>
                                                                    </p>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Faq section end-->
                    </div>

                    <div class="col-md-4 col-sm-5 col-xs-12">
                        <div class="ins-request-call-back-form2 mobile-ins-rewuest-call-back-form2 fixedpositionleftnav">
                            <div class="talktoexpert-form talktoexpert-form-mobile">
                                <h2>Talk to our experts</h2>
                                <div class="input-box Req_fnamediv">
                                    <label class="formLabel" for="">First Name</label>
                                    <input type="text" class="formInput" required="" id="Req_txtname" name="" autocomplete="off">
                                </div>
                                <div class="input-box Req_lnamediv">
                                    <label class="formLabel" for="">Last Name</label>
                                    <input type="text" class="formInput" required="" id="Req_txtlastname" name="" autocomplete="off">
                                </div>
                                <div class="input-box Req_emailaddressdiv">
                                    <label class="formLabel" for="">Email</label>
                                    <input type="text" class="formInput" required="" id="Req_txtenquiryemail" name="" autocomplete="off">
                                </div>
                                <div class="input-box Req_phonediv">
                                    <label class="formLabel" for="">Phone Number</label>
                                    <input type="text" class="formInput" required="" id="Req_txtphone" name="" autocomplete="off">
                                </div>
                                <div class="input-box">
                                    <button type="submit" class="btn btn-insGreen waves-effect waves-ripple requestcallbackclick">Request a Callback</button>
                                </div>

                                <div class="information-tag">
                                    <p>Your information is 100% safe with us</p>
                                    <img src="../images/safe-icon.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="endstik"></div>
            </div>
        </div>
        @include('layouts.inc.footer')
    </div>
</div>
<div id="pageloader" style="display:none">
    <img src="{{ asset('template/images/loaderd41d.gif') }}" class="img-responsive" alt="loader" height="128" width="128">
</div>

@endsection

@push('scripts')
<script>
    $(document).ready(function($) {
	$('#wsnavtoggle').click(function(){
		$('body').addClass('wsactive')
	});
	 

	$('.wsmenu .overlapblackbg').click(function(){
		$('body').removeClass('wsactive');
		$('body').removeClass('mrginleft');
		setTimeout(function () {
			$('body').removeClass('mrginleft');
		},100);
	});
});
</script>
<script>
    $(window).scroll(function () {
        if($(window).scrollTop()> 130) {
            $('#sidStik').css('position','fixed');
            $('#sidStik').css('top','130px'); 
        }
        else if ($(window).scrollTop() <= 130) {
            $('#sidStik').css('position','');
            $('#sidStik').css('top','');
        }  
        if ($('#sidStik').offset().top + $("#sidStik").height()> $("#endstik").offset().top) {
            $('#sidStik').css('top',-($("#sidStik").offset().top + $("#sidStik").height() - $("#endstik").offset().top));
        }
    });
</script>
<script>
        $(document).ready(function () {
            $(document).on("scroll", onScroll);

            //smoothscroll
            $('a[href^="#"]').on('click', function (e) {
                e.preventDefault();
                $(document).off("scroll");

                $('a').each(function () {
                    $(this).removeClass('active');
                })
                $(this).addClass('active');

                var target = this.hash,
                    menu = target;
                $target = $(target);
                $('html, body').stop().animate({
                    'scrollTop': $target.offset().top + 2
                }, 500, 'swing', function () {
                    window.location.hash = target;
                    $(document).on("scroll", onScroll);
                });
            });
        });

        function onScroll(event) {
            var scrollPos = $(document).scrollTop();
            $('#menu-center a').each(function () {
                var currLink = $(this);
                var refElement = $(currLink.attr("href"));
                if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
                    $('#menu-center ul li a').removeClass("active");
                    currLink.addClass("active");
                }
                else {
                    currLink.removeClass("active");
                }
            });
        }</script>

    <script>
        var sections = $('a')
         , nav = $('nav')
         , nav_height = nav.outerHeight();

        $(window).on('scroll', function () {
            var cur_pos = $(this).scrollTop();

            sections.each(function () {
                var top = $(this).offset().top - nav_height,
                    bottom = top + $(this).outerHeight();

                if (cur_pos >= top && cur_pos <= bottom) {
                    nav.find('a').removeClass('active');
                    sections.removeClass('active');

                    $(this).addClass('active');
                    nav.find('a[href="#' + $(this).attr('id') + '"]').addClass('active');
                }
            });
        });

       nav.find('a').on('click', function () {
            var $el = $(this)
              , id = $el.attr('href');
if(id != "#" ){
if(id != "javascript:;" ){
            $('html, body').animate({
                scrollTop: $(id).offset().top - nav_height
            }, 500);
			 return false;
			}
}
           
        });
    </script>

    <script>
        $('a').click(function () {
		  var $el = $(this)
              , id = $el.attr('href');
		if(id != "#"){
		if(id != "javascript:;" ){
            $('html, body').animate({
                scrollTop: $($(this).attr('href')).offset().top
            }, 500);
			return false;
			}
			}
            
        });

        // Cache selectors
        var topMenu = $(".nav"),
            topMenuHeight = topMenu.outerHeight() + 15,
            // All list items
            menuItems = topMenu.find("a"),
            // Anchors corresponding to menu items
            scrollItems = menuItems.map(function () {
                var item = $($(this).attr("href"));
                if (item.length) { return item; }
            });

        // Bind to scroll
        $(window).scroll(function () {
            // Get container scroll position
            var fromTop = $(this).scrollTop() + topMenuHeight;

            // Get id of current scroll item
            var cur = scrollItems.map(function () {
                if ($(this).offset().top < fromTop)
                    return this;
            });
            // Get the id of the current element
            cur = cur[cur.length - 1];
            var id = cur && cur.length ? cur[0].id : "";
            // Set/remove active class
            menuItems
              .parent().removeClass("active")
              .end().filter("[href='#" + id + "']").parent().addClass("active");
        });
    </script>
@endpush
