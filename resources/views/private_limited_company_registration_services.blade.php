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
                                    <li class="active"><a style="color:#909090 !important;">Private Limited Company</a></li>
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
                    <input type="hidden" id="sub_cat_id" value="1" name="sub_cat_id">
                    <input type="hidden" id="serPrice" value="9999" name="serPrice">
                    <div class="col-md-4 col-sm-5 col-xs-12 col-md-push-8 col-sm-push-7 col-xs-push-0">
                        <div id="sidStik" class="ins-request-call-back-form2 pricpln_wdget">
                                        <div class="panel-heading">
                                            <span class="pricely-label mobile-view-title">Private Limited Company Registration</span>
                                            <div class="pricely-figure pric-fig2" style="padding-bottom:0px !important;padding-top:0px !important;">   
                                                <span class="pricely-amount" style="margin-bottom:10px !important;"><span class="pricely-currency"><i class="fa fa-rupee"></i></span> 9,999</span>
                                                <span class="per-return-text">per registration</span>                                                
                                            </div>
                                            <span class="pricely-amount" style="margin: 0 0 10px 0px !important;padding: 0 !important;line-height: 10px;"> <del style="color:#2f3141">₹15,000</del><span style="width:auto;float:none;" class="per-return-text" style="">(you save &nbsp;  ₹ 5,000)</span></span>
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
                                    <h3>Private Limited Company Registration</h3>
                                    <div class="plan-discription">
                                        <h4>Services included:</h4>
                                        <ul>
                                            <li>
                                                <i class="ion-checkmark-round"></i> Company name reservation - RUN (1 application with resubmission)
                                            </li>
                                            <li>
                                                <i class="ion-checkmark-round"></i> Filing of E-forms with the Registrar of Companies (ROC)
                                            </li>
                                            <li>
                                                <i class="ion-checkmark-round"></i> Director Identification Numbers (2 nos.)
                                            </li>
                                            <li>
                                                <i class="ion-checkmark-round"></i> Digital Signature Certificates (2 DSC applications)
                                            </li>
                                            <li>
                                                <i class="ion-checkmark-round"></i> Finalising of Memorandum of Association (MOA) &amp; Articles of Association (AOA)
                                            </li>
                                            <li>
                                                <i class="ion-checkmark-round"></i> Follow-up until issue of Certificate of Incorporation
                                            </li>
                                            <li>
                                                <i class="ion-checkmark-round"></i> PAN Application
                                            </li>
                                            <li>
                                                <i class="ion-checkmark-round"></i> TAN Registration
                                            </li>
                                            <li>
                                                <i class="ion-checkmark-round"></i> Excludes foreign national or Foreign Body Corporate as a director OR business that needs approval from RBI, SEBI or IRDA for incorporation
                                            </li>
    
                                            <li>
                                                <i class="ion-checkmark-round"></i> Includes Government Fees &amp; Stamp duty upto Rs. 1 Lakh Authorized Capital
                                            </li>
                                            <li>
                                                <i class="ion-checkmark-round"></i> Assistance with bank account opening – ICICI Bank, HDFC Bank, Kotak Mahindra Bank
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="plan-discription">
                                        <h4>Ideal For:</h4>
                                        <ul>
                                            <li>
                                                <i class="ion-arrow-right-b"></i>  Small businesses that intend to expand
                                            </li>
                                            <li>
                                                <i class="ion-arrow-right-b"></i> Startups looking to raise funds
                                            </li>
                                            <li>
                                                <i class="ion-arrow-right-b"></i>  Businesses interested in implementing Employee Stock Option Plans (ESOPs)
                                            </li>
                                            <li>
                                                <i class="ion-arrow-right-b"></i> Businesses converting their existing structure into private limited company
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
                                        <img src="{{ asset('template/images/insta-c-a-1.png') }}" width="100%" />
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
                                                    <h4>Director KYC documents</h4>
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
                                                            <i class="ion-arrow-right-b"></i>No Objection Certificate from the owner of the Premises, if not owned by the directors (format of NOC downloadable from dashboard)
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
                                                        <div class="questions"> What is a Private Limited Company?</div>
                                                        <div class="faq-box">
                                                            <div>
                                                                <div>
                                                                    <p> A private limited company is the most flexible and credible structure of businesses. It is a type of structure with a clear distinction between ownership and management. In other words, investors and the people managing the company i.e. directors may be different. The Ministry of Corporate Affairs governs private limited company registration in India. Companies are incorporated and regulated under the Companies Act, 2013 and the Companies Incorporation Rules, 2014.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-block" id="faq">
                                                        <div class="questions"> What are the benefits of a Private Limited Company?</div>
                                                        <div class="faq-box">
                                                            <div>
                                                                <div>
                                                                    <ul style="margin:0px; padding:0px;">
                                                                        <li>1. <b>Separate legal entity:</b> A private limited company is legally recognised as a separate entity. Hence, a company can have Permanent Account Number (PAN), bank accounts, licenses, approvals, contracts, assets and liabilities in its unique name.</li>
                                                                        <li>2. <b>Limited liability:</b> Members of the private limited company have limited liability to the extent of their share in the company and personal assets of members cannot be utilized for the payment of the liabilities of the company under any circumstances.</li>
                                                                        <li>3. <b>Equity:</b> A Private Limited Company can raise funds from the general public or entities interested in becoming a shareholder</li>
                                                                        <li>4. <b>Easy transferability of shares:</b> Members can easily transfer the shares of a private limited company as they must simply file and sign the share transfer form and give it to the buyer of shares along with share certificates.</li>
                                                                        <li>5. <b>Trustworthy and credible:</b> A private company has to follow statutory compliances and is monitored by a strict set of rules. All the knowledge is available on-line. Therefore, a Private Limited Company structure offers credibility and trustworthiness.</li>

                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-block" id="faq">
                                                        <div class="questions"> How many directors/ members are required to incorporate a Private Limited Company?</div>
                                                        <div class="faq-box">
                                                            <div>
                                                                <div>
                                                                    <ul class="list-in">
                                                                        <li><i class="ion-arrow-right-b"></i><b>Members:</b> A Private Limited Company requires at least two members to register, both the members can be a director cum shareholder of the company. A Private Limited Company can have up to 200 people as members as per the Companies Act, 2013</li>
                                                                        <li><i class="ion-arrow-right-b"></i><b>Directors:</b> In a Private Limited Company there should be a minimum of two (2) directors. To become a director, a Director Identification Number (DIN) must be obtained. At least one of the Directors must be a Resident of India, who has stayed at least 182 days in the previous financial year but from Budget 2020 i.e. financial year from 2020-21, this period has been reduced to 120 days</li>

                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-block" id="faq">
                                                        <div class="questions"> What are the documents required for Private Limited Company company incorporation?</div>
                                                        <div class="faq-box">
                                                            <div>
                                                                <div>
                                                                    <ul class="list-in">
                                                                        <li><i class="ion-arrow-right-b"></i> PAN card copies with Self-attestation.</li>
                                                                        <li><i class="ion-arrow-right-b"></i> Voter Id copy or passport copy or aadhar card copy or Driving license copy with self-attestation.</li>
                                                                        <li><i class="ion-arrow-right-b"></i> Latest bank account statement or mobile / telephone bill or electricity Bill (not older than two months)</li>
                                                                        <li><i class="ion-arrow-right-b"></i>Passport size photo in jpg format</li>
                                                                        <li><i class="ion-arrow-right-b"></i>For the registered office proof of the company, if the property is rented/ leased, copy of rental agreement or lease agreement.</li>
                                                                        <li><i class="ion-arrow-right-b"></i>Copy of electricity bill or property tax receipt or water tax receipt not older than two months </li>
                                                                        <li><i class="ion-arrow-right-b"></i>Copy of No Objection Certificate(NOC) from the owner of the property.</li>
                                                                        <li><i class="ion-arrow-right-b"></i>If owned property, copy of sale deed and electricity bill is enough.</li>
                                                                        <li><i class="ion-arrow-right-b"></i>In the case of NRI or foreign national, passport copy must be notarized at the Indian Embassy of the country.</li>
                                                                        <li><i class="ion-arrow-right-b"></i>In case one of the shareholders or subscribers is a Corporate Entity(Company, LLP, etc.,) Certificate of Incorporation and MOA and AOA of the body corporate must be attached along with the resolution passed by the body corporate to subscribe to the shares of the company under incorporation.</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-block" id="faq">
                                                        <div class="questions">What is the difference between a Private limited Company and a One-Person Company?</div>
                                                        <div class="faq-box">
                                                            <div>
                                                                <div>
                                                                    <p>A private Limited Company is the form of a company where a minimum of two members are required and the maximum number of members can be 200. The liability of the members of a Private Limited Company is limited to the number of shares held by them.</p>
                                                                    <p>One Person Company means a Company which has only one person as its member.An OPC is effectively a company where it can have only one shareholder as its member.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-block" id="faq">
                                                        <div class="questions">How do I start a Private limited company?</div>
                                                        <div class="faq-box">
                                                            <div>
                                                                <div>
                                                                    <p>Incorporation of private limited company has a procedure and by following the same company can be structured.In this endeavour, Taxcellent which is backed by a team of professionals provides an online platform to facilitate incorporation of the company within a defined timeline. We would require all the necessary documents for incorporating a company and sign up for one of our relevant package and company can be registered with guidance from one of our experts.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-block" id="faq">
                                                        <div class="questions">What is the difference between the authorized capital and paid-up capital of the company?</div>
                                                        <div class="faq-box">
                                                            <div>
                                                                <div>
                                                                    <p>Authorized capital stands for the maximum amount of capital that a company can raise by way of issue of shares at present or in the future.Whereas, the Paid-up Capital refers to the actual amount raised by a company i.e., the amount paid by the shareholders on the issuance of shares.With the recent amendments in the Companies Act, one can register a company in India by any amount of paid-up capital which can be less or equal to the authorized capital but not exceeding the authorized capital.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-block" id="faq">
                                                        <div class="questions"> What is the minimum capital requirement?</div>
                                                        <div class="faq-box">
                                                            <div>
                                                                <div>
                                                                    <p>During the registration, a minimum of Rs 1 Lakh should be provided as an authorized capital.A minimum paid-up capital requirement is eliminated as a part of the Government’s initiative to simplify the business registration in India.However, each shareholder must subscribe at least 1 share for the registration.A place of business in India must be provided as a registered office address.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-block" id="faq">
                                                        <div class="questions">What is the process of getting a Private Company Registered?</div>
                                                        <div class="faq-box">
                                                            <div>
                                                                <div>
                                                                    <p><b>Step 1:</b> Acquire Digital Signature Certificate</p>
                                                                    <p><b>Step-2:</b> Name Approval Application: (Part A of SPICe+)</p>
                                                                    <p><b>Step-3:</b> ROC Form SPICe+ (Part B of SPICe+)</p>
                                                                    <p><b>Step-4:</b> e-MOA, e-AOA, and AGILE-PRO</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-block" id="faq">
                                                        <div class="questions">What is the Digital Signature Certificate(DSC)? Why it is required?</div>
                                                        <div class="faq-box">
                                                            <div>
                                                                <div>
                                                                    <p>Digital Signature Certificate is provided in the form of a token issued by Certified Authorities.Any form filed for online company registration in India shall be submitted only after affixing the DSC of an Applicant. Also, the directors will require DSC for DIN application and the subscribers to MOA and AOA shall possess DSC for submitting e-forms for incorporation.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-block" id="faq">
                                                        <div class="questions">What is the Director Identification Number (DIN)?</div>
                                                        <div class="faq-box">
                                                            <div>
                                                                <div>
                                                                    <p>Director Identification Number (DIN) is a unique identification number required for a person to become a director of a company. DIN is issued by the ROC office(Ministry of Corporate Affairs). DIN is to be mentioned in documents while appointing a person as a director of a company. All present or proposed Directors must have a DIN. It never expires and a person can have only one DIN, further with the same DIN, it allows an individual to be a Director in any company or Designated partner in an LLP.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-block" id="faq">
                                                        <div class="questions">Who can become a Director in a Private Limited Company?</div>
                                                        <div class="faq-box">
                                                            <div>
                                                                <div>
                                                                    <p>Any person above the age of 18 years can become a director in the company after procuring Director Identification Number (DIN). And since there are no specific criteria provided in terms of citizenship or residency, a foreign national can also become a director.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-block" id="faq">
                                                        <div class="questions">Can a Salaried person become a director of a company?</div>
                                                        <div class="faq-box">
                                                            <div>
                                                                <div>
                                                                    <p>Yes, salaried persons can also become the director of any type of company.However, it is recommended to go through the employment agreement and check whether it contains any restrictions on doing so.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-block" id="faq">
                                                        <div class="questions">Can an NRI also become a director in a company? And what additional documents will be required to be submitted?</div>
                                                        <div class="faq-box">
                                                            <div>
                                                                <div>
                                                                    <p>Yes, salaried persons can also become the director of any type of company.However, it is recommended to go through the employment agreement and check whether it contains any restrictions on doing so.</p>
                                                                    <p>Yes, an NRI or any foreign national can become a director in a private limited company.However, such a person can be considered as a director only when there is atleast one Indian resident director.  </p>

                                                                    <ul class="list-in">
                                                                        <p><b>Additional documents required:</b></p>
                                                                        <li><i class="ion-arrow-right-b"></i> Copy of Passport, attested by the Consulate of Indian Embassy or Foreign Public Notary</li>
                                                                        <li><i class="ion-arrow-right-b"></i> Copy of Driving License/ Bank Statement or Electricity Bills copy or Any Property Tax Payment Receipt which is attested by Consulate of Indian Embassy or Foreign Public Notary.</li>
                                                                        </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-block" id="faq">
                                                        <div class="questions">How do I reserve the name of the company?</div>
                                                        <div class="faq-box">
                                                            <div>
                                                                <div>
                                                                    <ul>
                                                                        <p><b>While deciding on the name of the company, you must ensure the following :</b></p>
                                                                        <li>1. The company name is not similar to any other Private Limited, OPC, LLP or Public limited company</li>
                                                                        <li>2. The first word of the company name is not a registered trademark</li>
                                                                        <li>3. The name is not too generic to be accepted by the Registrar of Companies (ROC) and does not contain abbreviations</li>
                                                                        <li>4. The name should contain the objective of the business</li>

                                                                    </ul>
                                                                    <p>The applicants can propose maximum 2 names with their preference order under “Part A” of SPICe+ form.The applicant should comply with the provisions of the Act or regulations.The registrar may ask to re-submit the application with a different name if names do not fall under the criteria of uniqueness, relevancy or do not fulfill other requirements.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-block" id="faq">
                                                        <div class="questions">What is SPICe+?</div>
                                                        <div class="faq-box">
                                                            <div>
                                                                <div>
                                                                    <p>SPICestands for Simplified Proforma for Incorporating Company electronically Plus.SPICe+ aims to offer services by Central Government Ministries and Departments (Ministry of Corporate Affairs, Ministry of Labour and the Department of Revenue in the Ministry of Finance) and one State Government(Maharashtra). The form is an integrated web form with a single window for multiple services.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-block" id="faq">
                                                        <div class="questions">What are the regulatory services covered under SPICe+?</div>
                                                        <div class="faq-box">
                                                            <div>
                                                                <div>
                                                                    <ul class="list-in">
                                                                        <li><i class="ion-arrow-right-b"></i> <b>Part A –:</b> Name Reservation(New Companies only)</li>
                                                                        <li>
                                                                            <i class="ion-arrow-right-b"></i> <b>Part B:</b>
                                                                            <ul class="list-in">
                                                                                <li>a)  Company Incorporation</li>
                                                                                <li>b)  Application for DIN</li>
                                                                                <li>c)  PAN Application</li>
                                                                                <li>d)  TAN Application</li>
                                                                                <li>e)  GSTIN Application</li>
                                                                                <li>f)  EPFO Registration</li>
                                                                                <li>g)  ESIC Registration</li>
                                                                                <li>h)  Opening of Bank Account for the Company</li>
                                                                                <li>i)  Profession Tax Registration(Only for applicable states in India)</li>
                                                                            </ul>

                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-block" id="faq">
                                                        <div class="questions">What is the Memorandum of Association(MOA) and Article of Association(AOA)?</div>
                                                        <div class="faq-box">
                                                            <div>
                                                                <div>
                                                                    <p>These are the two most important documents for any company.MoA contains the details of the main, ancillary/ subsidiary and other objects from the proposed company and the scope of operations of the company and AoA contains the details of the rules and procedures for the routine conduct of the proposed company.AoA also contains the details of the authorized share capital and the name of its first/permanent directors.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-block" id="faq">
                                                        <div class="questions">What is the process of incorporating a Private Limited Company ?</div>
                                                        <div class="faq-box">
                                                            <div>
                                                                <div>
                                                                    <p><b>Step 1: Acquire Digital Signature Certificate for Directors and Subscriber</b><br>The first and foremost step to register a private limited company is to acquire a Digital Signature Certificate(DSC) of the Directors and Subscribers to MOA.Any e-form is filed with the Ministry after affixing the DSC of the authorised signatory for company incorporation.It is also required for the application of Director Identification Number (DIN) of the directors.Further, DSC of the subscriber is needed to file MOA and AOA.</p>

                                                                    <p>
                                                                        <b>Step-2: Name Approval Application</b><br>The next step in company registration involves making an application for reservation of name of the proposed company.The application is to be made in<br>
                                                                        ‘Part A ’of SPICe+ Form, where one can apply for maximum 2 names in order of preference.One shall keep in mind that the names applied are not identical or nearly resembling with any existing Company or LLP or registered trademark.<br>

                                                                    Next, you must give particulars of the ‘proposed or approved name’ and click the ‘Auto-check’ button to do first level automatic scrutiny of the proposed or approved name in accordance with the rules governing the name.Once approved on preliminary check, submit ‘Part A’ for reservation of name.
                                                                    </p>

                                                                    <p><b>Step-3: Application for Certificate of Incorporation</b><br>After submitting “Part A” of SPICe+ and upon choosing to proceed with incorporation, ‘Part B’ is enabled for making an application of Certificate of Incorporation in SPICe + form accompanied with SPICe+_MOA, SPICe+_AOA, and AGILE-PRO.</p>
                                                                    <p>The details required for registration must be entered. The details also include:</p>
                                                                    <ul>
                                                                        <li>a)  Address of the registered office of the company</li>
                                                                        <li>b)  Proposed directors and subscribers</li>
                                                                        <li>c)  Capital of the company</li>
                                                                        <li>d)  Other information to apply for tax registrations such as PAN and TAN</li>
                                                                    </ul>
                                                                    <p>After filling up Part B, you must carry out a ‘pre-scrutiny’ check.Once the ‘pre-scrutiny; is successful, click on ‘submit’. A confirmation is displayed upon successful submission of the form.</p>
                                                                    <p>Next, download the PDF of Part B submitted for affixing the DSC and for filling up any linked forms along with Part B.The forms linked to SPICe+ are AGILE-PRO, SPICe+_MOA, and SPICe+_AOA.Part B of SPICe+ and linked forms can then be uploaded on the MCA portal.</p>
                                                                    <p><b>Memorandum of Association and Articles of Association and AGILE-PRO</b></p>
                                                                    <p>Memorandum of Association(MOA) and Articles of Association(AOA) are the two most important documents for any company and mark the last step in the process of registering a Company.MOA of the company states the scope of operations of the company, whereas AOA states how the company will be carrying the operations as per the Companies Act,2013.</p>
                                                                    <p>AGILE stands for Application for Goods and services identification number, employees’ state insurance corporation registration plus employees’ provident fund organization registration.</p>
                                                                    <p>

                                                                    A Service Request Number is generated for making a payment towards company incorporation. Once the payment is made successfully, the forms would be processed.In a case where the forms need resubmission for any errors being flagged upon processing, the SPICe+ form has to be resubmitted in the same manner.
                                                                    </p>
                                                                    <p>After due verification of the application and documents provided, the concerned RoC may grant the Certificate of Incorporation (COI). It is conclusive proof of the existence of the company, wherein the date of incorporation, Company Identification Number(CIN) and Permanent Account Number(PAN) and Tax Deduction and Collection Account Number(TAN) are mentioned with the sign and seal of the registrar.</p>
                                                                    <p>Once, the Certificate of Incorporation is granted, the company may commence business activity as the incorporation procedure is complete. </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-block" id="faq">
                                                        <div class="questions"> Is it possible to register a company using my residential address?</div>
                                                        <div class="faq-box">
                                                            <div>
                                                                <div>
                                                                    <p>Yes, it is possible to register a Private Limited Company on a residential address as there is no requirement to have a commercial place to open a company.A registered office is a place where the business receives communication, if any, from the Ministry of Corporate Affairs(MCA) and/or other concerned authorities.This address is displayed at the portal of the MCA.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-block" id="faq">
                                                        <div class="questions">Can I change the registered office address of the company after incorporation?</div>
                                                        <div class="faq-box">
                                                            <div>
                                                                <div>
                                                                    <p>Yes, the company office address can be changed at any time after incorporation by filling the form INC 22 to ROC.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-block" id="faq">
                                                        <div class="questions">Does anyone have to be physically present to incorporate a private limited company?</div>
                                                        <div class="faq-box">
                                                            <div>
                                                                <div>
                                                                    <p>No, none of the promoters are required to be physically present when opting to register a company online.All the forms are filed on the web portal and are digitally signed.The required documents can be uploaded on your Taxcellent dashboard or be sent through e-mail for filing</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-block" id="faq">
                                                        <div class="questions"> What is the government fees applicable for Private limited company incorporation?</div>
                                                        <div class="faq-box">
                                                            <div>
                                                                <div>
                                                                    <p><b>Below are the charges applicable for government forms:</b></p>
                                                                    <ul>
                                                                        <li>“Part A” SPICe+ Form: Rs.1000</li>
                                                                        <li>AoA: NIL(up to Rs.10 lakh of authorized capital)</li>
                                                                        <li>MoA: NIL</li>
                                                                        <li>SPICe+ Form: NIL</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-block" id="faq">
                                                        <div class="questions"> How much time is needed to set up a private limited company?</div>
                                                        <div class="faq-box">
                                                            <div>
                                                                <div>
                                                                    <p>Generally, it takes 25-30 days to get it done.But we, at Taxcellent, will get your company registered within 7-8 days, it’s all dependent on the availability of required documents that are provided by the applicant.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-block" id="faq">
                                                        <div class="questions">Do I have to deposit share capital in a bank account at the time of incorporation?</div>
                                                        <div class="faq-box">
                                                            <div>
                                                                <div>
                                                                    <p>Once the company is registered, a bank account should be opened in the name of the company.After opening a bank account, the shareholders may deposit the capital amount ino the account anytime within 60 days from the date of incorporation.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-block" id="faq">
                                                        <div class="questions">What are the statutory compliances to be fulfilled once a private company is registered?</div>
                                                        <div class="faq-box">
                                                            <div>
                                                                <div>
                                                                    <p>
                                                                        <b>Post Incorporation Compliances for a Private Limited Company</b><br>
                                                                        Once, the company is registered, it should follow below-mentioned requirements on priority:
                                                                    </p>
                                                                    <ul>
                                                                        <li><b>1. First Meeting:</b> As per Section 173(1), of The Companies Act 2013, the company shall hold a meeting of the Board of Directors in less than 30 days from the date of its incorporation.Directors are permitted to attend the meeting either in person or through video conferencing.</li>
                                                                        <li><b>2.  Open A Bank Account: </b> Companies need to have a bank account even before approaching the authorities for company incorporation.Because the company is an artificial entity, the transactions cannot be done in the name of any natural person.</li>
                                                                        <li><b>3.  Appointment of Statutory Auditor: </b> The Board of Directors must appoint a practising Chartered Accountant within 30 days of incorporation of the company in Form ADT-1. If the Board of Directors of Company fail to appoint an auditor within 30 days of incorporation, the shareholders of the company will have to appoint an auditor within 90 days of incorporation by calling Extraordinary General Meeting. The tenure of the first auditor of the Company shall be up to conclusion of the first Annual General Meeting of the company</li>
                                                                        <li><b>4.  Commencement of business certificate:  </b>The company shall obtain a certificate of commencement of business. There is a requirement to file a disclosure made by the directors of the company stating that every subscriber has paid the amount due on the shares.This declaration has to be filed by the company within a period of 180 days of the date of incorporation of the company in Form INC 20A.</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-block" id="faq">
                                                        <div class="questions"> What are the annual compliance requirements to be fulfilled by a private limited company?</div>
                                                        <div class="faq-box">
                                                            <div>
                                                                <div>
                                                                    <p>During every financial year, the company must hold one Annual General Meeting(AGM) and at least 4 board meetings(one in each quarter). Further, the accounts and financial statements must be audited by an independent auditor.Subsequently, it shall file form AOC–4 and MGT-7 as part of Annual Compliance within the given timeline.</p>
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

                </div>
                <div id="endstik"></div>
            </div>
        </div>
        <!-- <div id="pricing-details" class="section1 section"></div> -->

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
