@extends('layouts.dashboard.user_master')
@section('css')
<!-- Internal Select2 css -->
<link href="{{ asset('dashboard/assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
<link href="{{ asset('dashboard/assets/plugins/pickerjs/picker.min.css')}}" rel="stylesheet">
<style type="text/css">
    .p-l-3 {
        padding-left: 3px;
    }
    .p-r-3 {
        padding-right: 3px;
    }
    .p-b-10 {
        padding-bottom: 10px;
    }
    .p-l-8 {
        padding-left: 8px;
    }
    .m-t-40 {
        margin-top: 40px;
    }
    .table-bordered, .table-bordered td, .table-bordered th {
    border: 1px solid #dde2ef!important;
    }

    .loading {
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-color: rgba(0,0,0,.5);
    z-index: 999999;
}
.loading-wheel {
    width: 20px;
    height: 20px;
    margin-top: -40px;
    margin-left: -40px;
    
    position: absolute;
    top: 50%;
    left: 50%;
    
    border-width: 30px;
    border-radius: 50%;
    -webkit-animation: spin 1s linear infinite;
}
.style-2 .loading-wheel {
    border-style: double;
    border-color: #ccc transparent;
}
@-webkit-keyframes spin {
    0% {
        -webkit-transform: rotate(0);
    }
    100% {
        -webkit-transform: rotate(-360deg);
    }
}
</style>
@stop
@section('content')

@include('user.inc.header')



<div class="container-fluid">
    <!-- breadcrumb -->
    {{-- @if (Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! Session::get('success') !!}</li>
        </ul>
    </div>
@endif --}}
    <div class="breadcrumb-header justify-content-between">
        
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Profile</h4><span
                    class="text-muted mt-1 tx-13 ms-2 mb-0">/My Profile</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
    <!-- row -->
    <div class="row row-sm">
        
        
        <!-- Col -->
        <div class="col-lg-12">
            <div class="card">

                <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
                <div class="loading style-2" style="display: none;"><div class="loading-wheel"></div></div>

                {{ Form::open(array('method' => 'post', 'route' => array('user.userAccountUpadte'),  'files'=>'true'))  }}
                    <div class="card-body">
                        <div class="mb-4 main-content-label">Basic Profile Information</div>
                        {{csrf_field()}}

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        
                        <div class="row row-sm mb-3">
                            <div class="col-lg">
                                <label class="form-label">First Name <span class="tx-danger">*</span></label>
                                <input type="text" name="firstName" class="form-control" id="firstName" value="<?=(isset($userData->firstName)) ? $userData->firstName : '';?>" placeholder="First Name">
                            </div>
                            <div class="col-lg mg-t-10 mg-lg-t-0">
                                <label class="form-label">last Name <span class="tx-danger">*</span></label>
                                <input type="text" name="lastName" class="form-control" id="lastName" value="<?=(isset($userData->lastName)) ? $userData->lastName : '';?>" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="row row-sm mb-3">
                            <div class="col-lg">
                                    <label class="form-label">Email <span class="tx-danger">*</span></label>
                                    <input type="email" name="email" class="form-control" id="email" value="<?=(isset($userData->email)) ? $userData->email : '';?>" placeholder="Email Id">
                            </div>
                            <div class="col-lg mg-t-10 mg-lg-t-0">
                                    <label class="form-label">Phone Number <span class="tx-danger">*</span></label>
                                    <input type="number" name="mobile_num" class="form-control" id="mobile_num" value="<?=(isset($userData->mobile_num)) ? $userData->mobile_num : '';?>" placeholder="Enter Mobile Number">
                            </div>
                        </div>
                        <div class="mb-4 main-content-label">Personal Details</div>
                        <div class="row mg-t-10 mb-3">
                            <div class="col-lg-5">
                                <label class="rdiobox">
                                    <input name="profileType" type="radio" value="WITH-BUSINESS" <?=(isset($userData->profileType) && $userData->profileType !== null && $userData->profileType == 'WITH-BUSINESS' ) ? 'checked' : '';?>><span>Individual with Business Income</span>
                                </label>
                            </div>
                            <div class="col-lg-5 mg-t-20 mg-lg-t-0">
                                <label class="rdiobox">
                                    <input name="profileType" type="radio" value="WITHOUT-BUSINESS" <?=(isset($userData->profileType) && $userData->profileType !== null && $userData->profileType == 'WITHOUT-BUSINESS' ) ? 'checked' : '';?>> <span>Individual Without Business Income</span>
                                </label>
                            </div>
                            <div class="col-lg-2 mg-t-20 mg-lg-t-0">
                                <label class="rdiobox">
                                    <input name="profileType" type="radio" value="OTHERS" <?=(isset($userData->profileType) && $userData->profileType !== null && $userData->profileType == 'OTHERS' ) ? 'checked' : '';?>> <span>Others</span>
                                </label>
                            </div>
                        </div>
                        <div id="Main_Div" class="hide">
                            <div id="PersonalDetails_Div" class="<?=(isset($userData->profileType) && $userData->profileType == 'WITH-BUSINESS' || $userData->profileType == 'WITHOUT-BUSINESS' ) ? '' : 'd-none'?>">
                                <div class="row mg-t-10 mb-3">
                                    <div class="col-lg-6">
                                        <label class="form-label">Date of Birth</label>
                                        <input type="date" name="dob" class="form-control" id="dob" value="<?=(isset($DOB)) ? $DOB : '';?>" placeholder="Date of Birth">
                                    </div>
                                </div>
                                <div class="mb-4 main-content-label">Residential Address</div>
                                <div class="row mg-t-10 mb-3">
                                    <div class="col-lg-6">
                                        <label class="form-label">Address</label>
                                        <textarea name="address1" class="form-control" id="address1"  placeholder="Enter Your Full Address"><?=(isset($userData->address1)) ? $userData->address1 : '';?></textarea>
                                    </div>
                                </div>
                                <div class="row mg-t-10 mb-3">
                                    <div class="col-lg-6">
                                        <label class="form-label">City </label>
                                        <input type="text" name="city" class="form-control" id="city" value="<?=(isset($userData->city)) ? $userData->city : '';?>" placeholder="Enter City">
                                    </div>
                                    <div class="col-lg-6 mg-t-20 mg-lg-t-0">
                                        <label class="form-label">State</label>
                                        <select class="form-control sStatecombo select2" id="ddstate" name="state">
                                            <option value="">Select State</option>
                                            <option value="Andra Pradesh">Andra Pradesh</option>
                                            <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                            <option value="Assam">Assam</option>
                                            <option value="Bihar">Bihar</option>
                                            <option value="Chhattisgarh">Chhattisgarh</option>
                                            <option value="Chandigarh">Chandigarh</option>
                                            <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                            <option value="Daman and Diu">Daman and Diu</option>
                                            <option value="Delhi">Delhi</option>
                                            <option value="Goa">Goa</option>
                                            <option value="Gujarat">Gujarat</option>
                                            <option value="Haryana">Haryana</option>
                                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                                            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                            <option value="Jharkhand">Jharkhand</option>
                                            <option value="Karnataka">Karnataka</option>
                                            <option value="Kerala">Kerala</option>
                                            <option value="Lakshadeep">Lakshadeep</option>
                                            <option value="Madya Pradesh">Madya Pradesh</option>
                                            <option value="Maharashtra">Maharashtra</option>
                                            <option value="Manipur">Manipur</option>
                                            <option value="Meghalaya">Meghalaya</option>
                                            <option value="Mizoram">Mizoram</option>
                                            <option value="Nagaland">Nagaland</option>
                                            <option value="Orissa">Orissa</option>
                                            <option value="Punjab">Punjab</option>
                                            <option value="Pondicherry">Pondicherry</option>
                                            <option value="Rajasthan">Rajasthan</option>
                                            <option value="Sikkim">Sikkim</option>
                                            <option value="Tamil Nadu">Tamil Nadu</option>
                                            <option value="Tripura">Tripura</option>
                                            <option value="Uttaranchal">Uttaranchal</option>
                                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                                            <option value="West Bengal">West Bengal</option>
                                            <option value="Meghalaya">Meghalaya</option>
                                            <option value="Meghalaya">Meghalaya</option>
                                        </select>
                                        <input type="text" class="form-control sStatetextbox" formControlName="sState" name="" value="" id="txtstate" autocomplete="off" style="display:none;">
                                    </div>
                                </div>
                                <div class="row mg-t-10 mb-3">
                                    <div class="col-lg-6">
                                        <label class="form-label">Pincode </label>
                                        <input type="text" name="zip_code" class="form-control" id="zip_code" value="<?=(isset($userData->zip_code)) ? $userData->zip_code : '';?>" placeholder="Enter Pincode">
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label">Country </label>
                                        <select name="country" id="sCountry" class="form-control select2"  onchange="countychangeHandler(this);" autocomplete="off">
                                            <option value="">Select Country</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Aland Islands">Aland Islands</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="American Samoa">American Samoa</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antarctica">Antarctica</option>
                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Aruba">Aruba</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Azerbaijan">Azerbaijan</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bahrain">Bahrain</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Bermuda">Bermuda</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Bolivia">Bolivia</option>
                                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Bouvet Island">Bouvet Island</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="British">British</option>
                                            <option value="Brunei">Brunei</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Cape Verde">Cape Verde</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Christmas Island">Christmas Island</option>
                                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value=">Costa Rica">Costa Rica</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech Republic">Czech Republic</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Falkland Islands">Falkland Islands</option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="French Southern Territories">French Southern Territories</option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Greenland">Greenland</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guadeloupe">Guadeloupe</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guernsey">Guernsey</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Heard & McDonald Islands">Heard & McDonald Islands</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option selected="selected" value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Iran">Iran</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Isle of Man">Isle of Man</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jersey">Jersey</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Laos">Laos</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libya">Libya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macau SAR China">Macau SAR China</option>
                                            <option value="Macedonia">Macedonia</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marshall Islands">Marshall Islands</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mayotte">Mayotte</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Micronesia">Micronesia</option>
                                            <option value="Moldova">Moldova</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montenegro">Montenegro</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Myanmar (Burma)">Myanmar (Burma)</option>
                                            <option value="Namibia">Namibia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherlands">Netherlands</option>
                                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                                            <option value="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfolk Island">Norfolk Island</option>
                                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                            <option value="North Korea">North Korea</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau">Palau</option>
                                            <option value="Palestinian Territories">Palestinian Territories</option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Philippines">Philippines</option>
                                            <option value="Pitcairn Islands">Pitcairn Islands</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Réunion">Réunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russia">Russia</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="Saint Barthélemy">Saint Barthélemy</option>
                                            <option value="Saint Helena">Saint Helena</option>
                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                            <option value="Saint Lucia">Saint Lucia</option>
                                            <option value="Saint Martin">Saint Martin</option>
                                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="São Tomé and Príncipe">São Tomé and Príncipe</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Serbia">Serbia</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Slovakia">Slovakia</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="South Georgia & South Sandwich Islands">South Georgia & South Sandwich Islands</option>
                                            <option value="South Korea">South Korea</option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="St. Vincent & Grenadines">St. Vincent & Grenadines</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syria">Syria</option>
                                            <option value="Taiwan">Taiwan</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania">Tanzania</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Timor-Leste">Timor-Leste</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tokelau">Tokelau</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United States">United States</option>
                                            <option value="Uruguay">Uruguay</option>
                                            <option value="U.S. Outlying Islands">U.S. Outlying Islands</option>
                                            <option value="U.S. Virgin Islands">U.S. Virgin Islands</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Vatican City">Vatican City</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Vietnam">Vietnam</option>
                                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                                            <option value="Western Sahara">Western Sahara</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div id="PANDetails_Div">
                                <div class="mb-4 main-content-label">Permanent Account Number</div>
                                <div class="row mg-t-10 mb-3">
                                    <div class="col-lg-6">
                                        <label class="form-label">PAN Number </label>
                                        <input type="text" name="PAN_Number" class="form-control" id="PAN_Number" value="<?=(isset($userData->PAN_Number)) ? $userData->PAN_Number : '';?>" placeholder="Enter PAN Number">
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label">PAN card attachment</label>
                                        <div class="input-group file-browser">
                                            <input type="text" class="form-control border-right-0 browse-file" placeholder="choose" readonly="">
                                            <label class="input-group-btn">
                                                <span class="btn btn-default">
                                                    Browse <input type="file" name="pan_card_attachment" class="d-none pan_card_attachment" id="pan_card_attachment">
                                                </span>
                                                <span class="pan_card_attachment_prev">
                                                    @if((isset($userData->pan_card_attachment) && $userData->pan_card_attachment!=''))
                                                    <a target="popup" onclick="window.open('uploads/{{$userData->pan_card_attachment}}','name','width=600,height=400')">
                                                    <button type="button" class="btn btn-secondary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
                                                        <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"></path>
                                                        </svg>View Image
                                                    </button>
                                                    </a>
                                                    @endif
                                                </span>
                                            </label>
                                        </div><br/>
                                    </div>
                                </div>
                            </div>
                            <div id="AadharDetails_Div" class="<?=(isset($userData->profileType) && $userData->profileType == 'WITH-BUSINESS' || $userData->profileType == 'WITHOUT-BUSINESS' ) ? '' : 'd-none'?>">
                                <div class="mb-4 main-content-label">Aadhaar Card</div>
                                <div class="row mg-t-10 mb-3">
                                    <div class="col-lg-6">
                                        <label class="form-label">Aadhar Card Number</label>
                                        <input type="text" name="aadhar_card_number" class="form-control" id="aadhar_card_number" value="<?=(isset($userData->aadhar_card_number)) ? $userData->aadhar_card_number : '';?>" placeholder="Enter Aadhar Card Number">
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label">Aadhaar card attachment</label>
                                        <div class="input-group file-browser">
                                            <input type="text" class="form-control border-right-0 browse-file" placeholder="choose" readonly="">
                                            <label class="input-group-btn">
                                                <span class="btn btn-default">
                                                    Browse <input type="file" name="aadhar_card_attachment" class="d-none aadhar_card_attachment" id="aadhar_card_attachment">
                                                </span>
                                                <span class="aadhar_card_attachment_prev">
                                                @if((isset($userData->aadhar_card_attachment) && $userData->aadhar_card_attachment!=''))
                                                <a target="popup" onclick="window.open('uploads/{{$userData->aadhar_card_attachment}}','name','width=600,height=400')">
                                                <button type="button" class="btn btn-secondary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
                                                    <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"></path>
                                                    </svg>View Image
                                                </button>
                                                </a>
                                                @endif
                                                </span>
                                            </label>
                                        </div><br/>
                                    </div>
                                </div>
                            </div>
                            <div id="businessDetails_Div" class="<?=(isset($userData->profileType) && $userData->profileType == 'WITH-BUSINESS' || $userData->profileType == 'OTHERS' ) ? '' : 'd-none'?>">
                                <div class="mb-4 main-content-label">Business Details</div>
                                <div class="row mg-t-10 mb-3">
                                    <div class="col-lg">
                                        <label class="form-label">Business Name</label>
                                        <input type="text" name="business_name" class="form-control" id="business_name" value="<?=(isset($userData->business_name)) ? $userData->business_name : '';?>" placeholder="Enter Business Name">
                                    </div>
                                </div>
                                <div class="row mg-t-10 mb-3">
                                    <div id="role_Div" class="col-lg-6 <?=(isset($userData->profileType) && $userData->profileType == 'WITH-BUSINESS') ? '' : 'd-none'?>">
                                        <label class="form-label">Role </label>
                                        <select name="business_role" class="form-select select2" autocomplete="off">
                                            <option value="">Select Role</option>
                                            <option value="0"  <?=(isset($userData->business_role) && $userData->business_role != null && $userData->business_role == '0' ) ? 'selected="selected"' : '';?> >Sole Proprietorship</option>
                                            <option value="1" <?=(isset($userData->business_role) && $userData->business_role != null && $userData->business_role == '1' ) ? 'selected="selected"' : '';?>>Partner</option>
                                            <option value="2" <?=(isset($userData->business_role) && $userData->business_role != null && $userData->business_role == '2' ) ? 'selected="selected"' : '';?>>Director</option>
                                        </select>
                                    </div>

                                    <div id="otherStatus_Div" class="col-lg-3 <?=(isset($userData->profileType) && $userData->profileType == 'OTHERS' ) ? '' : 'd-none'?>">
                                        <label class="form-label">Status </label>
                                        <select id="statusVal" name="business_status" class="form-control select2 business_status" autocomplete="off">
                                            <option value="">Select Status</option>
                                            <option value="0"  <?=(isset($userData->business_status) && $userData->business_status != null && $userData->business_status == 0 ) ? 'selected="selected"' : '';?> >Hindu Undivided Family</option>
                                            <option value="1" <?=(isset($userData->business_status) && $userData->business_status != null && $userData->business_status == 1 ) ? 'selected="selected"' : '';?>>Partnership Firm </option>
                                            <option value="2" <?=(isset($userData->business_status) && $userData->business_status != null && $userData->business_status == 2 ) ? 'selected="selected"' : '';?>>Limited Liability Partnership</option>
                                            <option value="3" <?=(isset($userData->business_status) && $userData->business_status != null && $userData->business_status == 3 ) ? 'selected="selected"' : '';?>>Trust </option>
                                            <option value="4" <?=(isset($userData->business_status) && $userData->business_status != null && $userData->business_status == 4 ) ? 'selected="selected"' : '';?>>Society </option>
                                            <option value="5" <?=(isset($userData->business_status) && $userData->business_status != null && $userData->business_status == 5 ) ? 'selected="selected"' : '';?>>Company </option>
                                        </select>
                                    </div>
                                  
                                    <div id="otherCompany_Div" class="col-lg-3 business_company" style="display: <?=(isset($userData->business_status) && $userData->business_status == '5' ) ? '' : 'none'?>">
                                        <label class="form-label">Company </label>
                                        <select name="company" class="form-control select2" autocomplete="off">
                                            <option value="">Select Company</option>
                                            <option value="0" <?=(isset($userData->company) && $userData->company != null && $userData->company == 0 ) ? 'selected="selected"' : '';?>>Private Limited Company</option>
                                            <option value="1" <?=(isset($userData->company) && $userData->company != null && $userData->company == 1 ) ? 'selected="selected"' : '';?>>One Person Company</option>
                                            <option value="2" <?=(isset($userData->company) && $userData->company != null && $userData->company == 2 ) ? 'selected="selected"' : '';?>>Public Limited Company</option>
                                            <option value="3" <?=(isset($userData->company) && $userData->company != null && $userData->company == 3 ) ? 'selected="selected"' : '';?>>Subsidiary of Foreign Companies</option>
                                            <option value="4" <?=(isset($userData->company) && $userData->company != null && $userData->company == 4 ) ? 'selected="selected"' : '';?>>Section 8 Company</option>
                                        </select>
                                    </div>

                                   
                                    <div class="col-lg-6">
                                        <label class="form-label"> Date of business registration</label>
                                        <input type="date" name="business_dor" class="form-control" id="business_dor" value="<?=(isset($businessDate)) ? $businessDate : '';?>" >
                                    </div>
                                </div>
                                <div class="mb-4 main-content-label">Registered Office Address</div>
                                <div class="row mg-t-10 mb-3">
                                    <div class="col-lg-6">
                                        <label class="form-label">Address</label>
                                        <textarea name="office_address" class="form-control" id="office_address"  placeholder="Enter Your Office Address"><?=(isset($userData->office_address)) ? $userData->office_address : '';?></textarea>
                                    </div>
                                </div>
                                <div class="row mg-t-10 mb-3">
                                    <div class="col-lg-6">
                                        <label class="form-label">City</label>
                                        <input type="text" name="office_city" class="form-control" id="office_city" value="<?=(isset($userData->office_city)) ? $userData->office_city : '';?>" placeholder="Enter City">
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label">State</label>
                                        <select class="form-control sStatecombo select2" id="ddstate" name="office_state">
                                            <option value="">Select State</option>
                                            <option value="Andra Pradesh">Andra Pradesh</option>
                                            <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                            <option value="Assam">Assam</option>
                                            <option value="Bihar">Bihar</option>
                                            <option value="Chhattisgarh">Chhattisgarh</option>
                                            <option value="Chandigarh">Chandigarh</option>
                                            <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                            <option value="Daman and Diu">Daman and Diu</option>
                                            <option value="Delhi">Delhi</option>
                                            <option value="Goa">Goa</option>
                                            <option value="Gujarat">Gujarat</option>
                                            <option value="Haryana">Haryana</option>
                                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                                            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                            <option value="Jharkhand">Jharkhand</option>
                                            <option value="Karnataka">Karnataka</option>
                                            <option value="Kerala">Kerala</option>
                                            <option value="Lakshadeep">Lakshadeep</option>
                                            <option value="Madya Pradesh">Madya Pradesh</option>
                                            <option value="Maharashtra">Maharashtra</option>
                                            <option value="Manipur">Manipur</option>
                                            <option value="Meghalaya">Meghalaya</option>
                                            <option value="Mizoram">Mizoram</option>
                                            <option value="Nagaland">Nagaland</option>
                                            <option value="Orissa">Orissa</option>
                                            <option value="Punjab">Punjab</option>
                                            <option value="Pondicherry">Pondicherry</option>
                                            <option value="Rajasthan">Rajasthan</option>
                                            <option value="Sikkim">Sikkim</option>
                                            <option value="Tamil Nadu">Tamil Nadu</option>
                                            <option value="Tripura">Tripura</option>
                                            <option value="Uttaranchal">Uttaranchal</option>
                                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                                            <option value="West Bengal">West Bengal</option>
                                            <option value="Meghalaya">Meghalaya</option>
                                            <option value="Meghalaya">Meghalaya</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mg-t-10 mb-3">
                                    <div class="col-lg-6">
                                        <label class="form-label">Pincode </label>
                                        <input type="text" name="office_zip_code" class="form-control" id="office_zip_code" value="<?=(isset($userData->office_zip_code)) ? $userData->office_zip_code : '';?>" placeholder="Enter Pincode">
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label">Country</label>
                                        <select name="office_country" id="sCountry" class="form-control select2" autocomplete="off">
                                            <option value="">Select Country</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Aland Islands">Aland Islands</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="American Samoa">American Samoa</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antarctica">Antarctica</option>
                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Aruba">Aruba</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Azerbaijan">Azerbaijan</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bahrain">Bahrain</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Bermuda">Bermuda</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Bolivia">Bolivia</option>
                                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Bouvet Island">Bouvet Island</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="British">British</option>
                                            <option value="Brunei">Brunei</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Cape Verde">Cape Verde</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Christmas Island">Christmas Island</option>
                                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value=">Costa Rica">Costa Rica</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech Republic">Czech Republic</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Falkland Islands">Falkland Islands</option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="French Southern Territories">French Southern Territories</option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Greenland">Greenland</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guadeloupe">Guadeloupe</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guernsey">Guernsey</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Heard & McDonald Islands">Heard & McDonald Islands</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option selected="selected" value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Iran">Iran</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Isle of Man">Isle of Man</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jersey">Jersey</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Laos">Laos</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libya">Libya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macau SAR China">Macau SAR China</option>
                                            <option value="Macedonia">Macedonia</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marshall Islands">Marshall Islands</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mayotte">Mayotte</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Micronesia">Micronesia</option>
                                            <option value="Moldova">Moldova</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montenegro">Montenegro</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Myanmar (Burma)">Myanmar (Burma)</option>
                                            <option value="Namibia">Namibia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherlands">Netherlands</option>
                                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                                            <option value="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfolk Island">Norfolk Island</option>
                                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                            <option value="North Korea">North Korea</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau">Palau</option>
                                            <option value="Palestinian Territories">Palestinian Territories</option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Philippines">Philippines</option>
                                            <option value="Pitcairn Islands">Pitcairn Islands</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Réunion">Réunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russia">Russia</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="Saint Barthélemy">Saint Barthélemy</option>
                                            <option value="Saint Helena">Saint Helena</option>
                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                            <option value="Saint Lucia">Saint Lucia</option>
                                            <option value="Saint Martin">Saint Martin</option>
                                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="São Tomé and Príncipe">São Tomé and Príncipe</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Serbia">Serbia</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Slovakia">Slovakia</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="South Georgia & South Sandwich Islands">South Georgia & South Sandwich Islands</option>
                                            <option value="South Korea">South Korea</option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="St. Vincent & Grenadines">St. Vincent & Grenadines</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syria">Syria</option>
                                            <option value="Taiwan">Taiwan</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania">Tanzania</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Timor-Leste">Timor-Leste</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tokelau">Tokelau</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United States">United States</option>
                                            <option value="Uruguay">Uruguay</option>
                                            <option value="U.S. Outlying Islands">U.S. Outlying Islands</option>
                                            <option value="U.S. Virgin Islands">U.S. Virgin Islands</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Vatican City">Vatican City</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Vietnam">Vietnam</option>
                                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                                            <option value="Western Sahara">Western Sahara</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="otherCIN_Div"  class="<?=(isset($userData->company) && $userData->company !== null ) ? '' : 'd-none'?>" >
                                    <div class="row mg-t-10 mb-3">
                                        <div class="col-lg">
                                            <label class="form-label">CIN Details </label>
                                            <input type="text" name="CIN_deatils" class="form-control" id="CIN_deatils" value="<?=(isset($userData->CIN_deatils)) ? $userData->CIN_deatils : '';?>" placeholder="Enter CIN Details">
                                        </div>
                                    </div>
                                </div>
                                <div id="otherLLPIN_Div" class="<?=(isset($userData->business_status) && $userData->business_status == '2') ? '' : 'd-none'?>">
                                    <div class="row mg-t-10 mb-3">
                                        <div class="col-lg">
                                            <label class="form-label">LLPIN Details </label>
                                            <input type="text" name="LLPIN_deatils" class="form-control" id="LLPIN_deatils" value="<?=(isset($userData->LLPIN_deatils)) ? $userData->LLPIN_deatils : '';?>" placeholder="Enter LLPIN Details">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4 main-content-label <?=(isset($userData->profileType) && $userData->profileType == 'WITH-BUSINESS') ? '' : 'd-none'?>">GST Details</div>
                                <div class="row mg-t-10 mb-3" >
                                    <div class="col-lg-6">
                                        <label class="form-label">GSTIN Number</label>
                                        <input type="text" name="GST_Number" class="form-control" id="GST_Number" value="<?=(isset($userData->GST_Number)) ? $userData->GST_Number : '';?>" placeholder="Enter GSTIN">
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label">GST registration attachment</label>
                                        <!-- {!! Form::file('gstin_attachment', null, array('class'=>'form-control', 'id'=>'gstin_attachment')) !!}  -->
                                        <div class="input-group file-browser">
                                            <input type="text" class="form-control border-right-0 browse-file" placeholder="choose" readonly="">
                                            <label class="input-group-btn">
                                                <span class="btn btn-default">
                                                    Browse <input type="file" name="gstin_attachment" class="d-none gstin_attachment" multiple="" id="gstin_attachment">
                                                
                                                </span>
                                                <span class="gstin_attachment_prev">
                                                    @if((isset($userData->gstin_attachment) && $userData->gstin_attachment!=''))
                                                    <a target="popup" onclick="window.open('uploads/{{$userData->gstin_attachment}}','name','width=600,height=400')">
                                                    <button type="button" class="btn btn-secondary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
                                                        <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"></path>
                                                        </svg>View Image
                                                    </button>
                                                    </a>
                                                    @endif
                                                </span>
                                            </label>
                                        </div><br/>
                                    </div>
                                </div>
                            </div>
                            <div id="otherSectionDetails_Div" class="<?=(isset($userData->profileType) && $userData->profileType == 'WITH-BUSINESS' || $userData->profileType == 'WITHOUT-BUSINESS' || $userData->profileType == 'OTHERS') ? '' : 'd-none'?>">
                                <div class="mb-4 main-content-label">Others Section</div>
                                <div class="form-group">
                                    <div class="row p-l-8">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover mb-0 text-nowrap">
                                                <tbody class="custom-cls-no-br">
                                                    <tr>
                                                        <td width="10%" align="center">
                                                            <div class="col-md p-l-3 p-r-3">
                                                                <button type="button" class="btn btn-primary btn-with-icon btn-xs fieldsaddmore-addbtn" style="height: auto!important;">
                                                                    <i class="fa fa-plus-circle" aria-hidden="true" style="font-size: 12px!important;"></i> Add
                                                                </button>
                                                            </div>
                                                        </td>
                                                        <!-- <td>
                                                            <div class="col-md-3 p-l-3 p-r-3">
                                                                <label class="form-label">SR No.</label>
                                                            </div>
                                                        </td> -->
                                                        <td width="45%" align="center">
                                                            <div class="col-md p-l-3 p-r-3">
                                                                <label class="form-label"><b> Description</b></label>
                                                            </div>
                                                        </td>
                                                        <td width="45%" align="center">
                                                            <div class="col-md p-l-3 p-r-3">
                                                                <label class="form-label"><b>Attachment</b></label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="admore-fields">
                                    
                                    </div>
                                </div>
                            </div>
                            <div id="contactPersonDetails_Div"  class="<?=(isset($userData->profileType) && $userData->profileType == 'OTHERS') ? '' : 'd-none'?>">
                                <div class="mb-4 main-content-label" >Key person Details</div>
                                <div class="row mg-t-10 mb-3">
                                    <div class="col-lg-6">
                                        <label class="form-label">Signing person</label>
                                        <input type="text" name="key_personName" class="form-control" id="key_personName" value="<?=(isset($userData->key_personName)) ? $userData->key_personName : '';?>" placeholder="Enter Signing person">
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label">Designation</label>
                                        <input type="text" name="key_personDesignation" class="form-control" id="key_personDesignation" value="<?=(isset($userData->key_personDesignation)) ? $userData->key_personDesignation : '';?>" placeholder="Enter Designation">
                                    </div>
                                </div>
                                <div class="row mg-t-10 mb-3">
                                    <div class="col-lg-6">
                                        <label class="form-label">Email Id</label>
                                        <input type="email" name="key_personEmail" class="form-control" id="key_personEmail" value="<?=(isset($userData->key_personEmail)) ? $userData->key_personEmail : '';?>" placeholder="Enter Email">
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label">Phone number</label>
                                        <input type="number" name="key_personPhone" class="form-control" id="key_personPhone" value="<?=(isset($userData->key_personPhone)) ? $userData->key_personPhone : '';?>" placeholder="Enter Phone number">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Update Profile</button>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
        <!-- /Col -->
    </div>
    <!-- row closed -->
</div>
<!-- Container closed -->
@endsection
@push('scripts')
<!-- Addmore template -->
<script id="fieldsaddmore-template" type="text/template">
    <div class="row fieldsaddmore-row rowId p-l-8 p-b-10">
        <div class="table-responsive">
            <table class="table table-bordered table-hover mb-0 text-nowrap ">
                <tbody class="custom-cls-no-br">
                    <tr>
                        <td width="10%" align="center" style="vertical-align:middle;">
                            <div class="col-md p-l-3 p-r-3">
                                <button  type="button" data-rowid="key" class="btn btn-danger btn-with-icon btn-xs fieldsaddmore-removebtn" style="height: auto!important;">
                                    <i class="fa fa-minus-circle" aria-hidden="true" style="font-size: 12px!important;"></i> Remove
                                </button>
                            </div>
                        </td>
                        <!-- <td>
                            <div class="col-md-6 p-l-3 p-r-3">
                                <input class="form-control" id="sr_no" placeholder="Enter SR No." name="other[key][sr_no]" type="text">
                            </div>
                        </td> -->
                        <td width="45%">
                            <div class="col-md p-l-3 p-r-3">
                                <input class="form-control document_id_no_key" onchange="disableField();" data-rowid="key" id="document_id_no" placeholder="Enter  Description" name="other[key][document_id_name]" type="text">
                            </div>
                        </td>
                        <td width="45%">
                            <div class="col-md p-l-3 p-r-3">
                                <input name="other[key][attachment]" class="attachment_key" type="file">
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</script>

<!--Internal  pickerjs js -->
<script src="{{ asset('dashboard/assets/plugins/pickerjs/picker.min.js') }}"></script>
<!-- Internal form-elements js -->
<script src="{{ asset('dashboard/assets/js/form-elements.js') }}"></script>
<!-- Internal Select2.min js -->
<script src="{{ asset('dashboard/assets/plugins/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/fieldsaddmore-master/jqery.fieldsaddmore.min.js') }}"></script>
<script>
    


    $(".business_status").change(function() {
        if($('option:selected', this).val()==5)
        {
            $('.business_company').show();
        }else{
            $('.business_company').hide();
        }
    });

    

    (function($) {
    //Imlementation with different elements and callback function
    $('.admore-fields').fieldsaddmore({
        templateEle: "#fieldsaddmore-template",
        rowEle: ".fieldsaddmore-row",
        addbtn: ".fieldsaddmore-addbtn",
        removebtn: ".fieldsaddmore-removebtn",
        min:0,
        callbackBeforeInit: function(ele, options) {
            // console.log('BeforeInit');
        },
        callbackBeforeAdd: function(ele, options) {
            /*let totalRow = $(".fieldsaddmore-row").length;
            console.log(totalRow);
            if(totalRow >= 5){
                return false;
            }*/
            // console.log('Before Content Add');
        },
        callbackAfterAdd: function(ele, options) {
            // console.log('After Content Add');
            let totalRow = $(".fieldsaddmore-row").length;
            if(totalRow >= 5){
                $('.fieldsaddmore-addbtn').addClass('disabled');
            }
            disableField();
        },
        callbackBeforeAddClick: function(ele, options) {
            // console.log('Before Add Click');
        },
        callbackAfterAddClick: function(ele, options) {
            // console.log('After Add Click');
        },
        callbackBeforeRemoveClick: function(ele, options) {
            // console.log('Before Remove Click');
        },
        callbackAfterRemoveClick: function(ele, options) {
            // console.log('After Remove Click');
            let totalRow = $(".fieldsaddmore-row").length;
            if(totalRow < 5){
                $('.fieldsaddmore-addbtn').removeClass('disabled');
            }
            disableField();
        }
    });
    })(jQuery);

    function disableField(){
        let totalRow = $(".fieldsaddmore-row").length;
        if(totalRow > 1){
            
            var counter = 1;
            $(".admore-fields input[type=text]").each(function(i) {
                let rowid = $(this).data('rowid');
                if($('.document_id_no_'+rowid).val()!='')
                {
                    counter++;
                }

            });
            
            $(".admore-fields input[type=text]").each(function(i) {
                let rowid = $(this).data('rowid');
                if(i>=counter)
                {
                    $('.document_id_no_'+rowid).prop('disabled', true); // disable
                    $('.attachment_'+rowid).prop('disabled', true); // disable
                }else{

                    $('.document_id_no_'+rowid).prop('disabled', false); // disable
                    $('.attachment_'+rowid).prop('disabled', false); // disable
                }
                
            });
        }else{
            $(".admore-fields input[type=text]").each(function(i) {
                let rowid = $(this).data('rowid');
                $('.document_id_no_'+rowid).prop('disabled', false); // disable
                $('.attachment_'+rowid).prop('disabled', false); // disable
            });
        }
    }

$(document).ready(function () {
//  sCountry hdcountry ddstate txtstate hdstate
if ($('#hdcountry').length > 0) {
    var hdcountry = $('#hdcountry').val();
    if (hdcountry != "") {
        $('#sCountry')
        .find('option')
        .filter(function () {
            return this.value.trim() == hdcountry.trim();
        })
        .prop('selected', true);
        var text = $("#sCountry option:selected").text();
        if (text == "India") {
            $('#txtstate').hide();
            $('#ddstate').show();
        }
        else {
            $('#txtstate').show();
            $('#ddstate').hide();
        }


    }

}


if ($('#hdstate').length > 0) {
    var hdstateid = $('#hdstate').val();
    if (hdstateid != "") {

        $('#ddstate')
        .find('option')
        .filter(function () {
            return this.text.trim() == hdstateid.trim();
        })
        .prop('selected', true);
    }
}

});


function countychangeHandler(target) {
if (target.value != "") {
    var text = target.options[target.selectedIndex].text;

    if (text == "India") {
        $('.sStatecombo').show();
        $('.sStatetextbox').hide();
    }
    else {
        $('.sStatecombo').hide();
        $('.sStatetextbox').show();
    }
}

}

$(document).on("change", ":file", (function() {
    var e = $(this)
        , t = e.get(0).files ? e.get(0).files.length : 1
        , r = e.val().replace(/\\/g, "/").replace(/.*\//, "");
    e.trigger("fileselect", [t, r])
}
)),
$(document).ready((function() {
    $(":file").on("fileselect", (function(e, t, r) {
        var o = $(this).parents(".input-group").find(":text")
            , a = t > 1 ? t + " files selected" : r;
        o.length ? o.val(a) : a && alert(a)
    }
    ))
}
)),

$(document).ready(function(){
    // $('#Main_Div').addClass("d-none");
    // $('#otherCIN_Div').addClass('d-none');
    // $('#otherLLPIN_Div').addClass('d-none');
    $('body').on('change','input[name="profileType"]', function(){
        $('#Main_Div').removeClass("d-none")
        var valueIsChecked = $(this).val();
            
        if(valueIsChecked == 'WITH-BUSINESS'){
            $('#PersonalDetails_Div').removeClass('d-none');
            $('#PANDetails_Div').removeClass('d-none');
            $('#AadharDetails_Div').removeClass('d-none');
            $('#businessDetails_Div').removeClass('d-none');
            $('#role_Div').removeClass('d-none');
            $('#otherSectionDetails_Div').removeClass('d-none');
            $('#otherStatus_Div').addClass('d-none');
            $('#otherCompany_Div').addClass('d-none');
            $('#contactPersonDetails_Div').addClass('d-none');

        } else if(valueIsChecked == 'WITHOUT-BUSINESS')
        {
            $('#PersonalDetails_Div').removeClass('d-none');
            $('#PANDetails_Div').removeClass('d-none');
            $('#AadharDetails_Div').removeClass('d-none');
            $('#otherSectionDetails_Div').removeClass('d-none');
            $('#businessDetails_Div').addClass('d-none');
            $('#role_Div').addClass('d-none');
            $('#otherStatus_Div').addClass('d-none');
            $('#otherCompany_Div').addClass('d-none');
            $('#contactPersonDetails_Div').addClass('d-none');
            
        } else{
            $('#PersonalDetails_Div').addClass('d-none');
            $('#AadharDetails_Div').addClass('d-none');
            $('#role_Div').addClass('d-none');
            $('#businessDetails_Div').removeClass('d-none');
            $('#otherSectionDetails_Div').removeClass('d-none');
            $('#otherStatus_Div').removeClass('d-none');
            $('#otherCompany_Div').removeClass('d-none');
            $('#contactPersonDetails_Div').removeClass('d-none');
        }    
    });

    $('body').on('change','select[name="company"]', function(){
        $('#otherCIN_Div').removeClass('d-none');
    });
    $('body').on('change','select[name="business_status"]', function(){
        var valueOfCom = document.getElementById("statusVal").value;
        //  console.log(valueOfCom);
            if(valueOfCom == 2){
                $('#otherLLPIN_Div').removeClass('d-none');
            }
            else{
                $('#otherLLPIN_Div').addClass('d-none');
            }
    });
});


$('body').on("change", ".pan_card_attachment", function (e) {
        var pan_card_attachment = $(".pan_card_attachment").get(0).files;
        var data = new FormData();
        try {
            data.append("pan_card_attachment", pan_card_attachment[0]);
        }
        catch (e) { }

        $('.loading').show();
        $.ajax({
            type: 'POST',
            processData: false,
            contentType: false,
            url:"{{ route('uploadPanCard.post') }}",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: data,
            success: function (data) {
                    $('.loading').hide();

                    $('.pan_card_attachment_prev').html(data);
            },
            error: function (x, y, z) {
                alert(x + '\n' + y + '\n' + z);
            }
        });
    });

    $('body').on("change", ".aadhar_card_attachment", function (e) {
        var aadhar_card_attachment = $(".aadhar_card_attachment").get(0).files;
        var data = new FormData();
        try {
            data.append("aadhar_card_attachment", aadhar_card_attachment[0]);
        }
        catch (e) { }

        $('.loading').show();
        $.ajax({
            type: 'POST',
            processData: false,
            contentType: false,
            url:"{{ route('uploadAadharCard.post') }}",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: data,
            success: function (data) {
                    $('.loading').hide();

                    $('.aadhar_card_attachment_prev').html(data);
            },
            error: function (x, y, z) {
                alert(x + '\n' + y + '\n' + z);
            }
        });
    });
    $('body').on("change", ".gstin_attachment", function (e) {
        var gstin_attachment = $(".gstin_attachment").get(0).files;
        var data = new FormData();
        try {
            data.append("gstin_attachment", gstin_attachment[0]);
        }
        catch (e) { }

        $('.loading').show();
        $.ajax({
            type: 'POST',
            processData: false,
            contentType: false,
            url:"{{ route('uploadGST.post') }}",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: data,
            success: function (data) {
                    $('.loading').hide();

                    $('.gstin_attachment_prev').html(data);
            },
            error: function (x, y, z) {
                alert(x + '\n' + y + '\n' + z);
            }
        });
    });
</script>
@endpush