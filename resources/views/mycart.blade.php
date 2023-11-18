@extends('layouts.master')

@section('content')

@include('layouts.inc.header')

<div class="fullpageremove">
@if(Session::has('cart'))
    <div class="page-wrapper">
        <div class="page-content" id="cart-summary">
            <!-- CONTAINER -->
            <form class="" action="{{ route('checkout.order') }}" method="post" enctype="multipart/form-data" onload="alert('hello')">
            @csrf
            <input type="hidden" name="grand_total" value="">
            <div class="col-md-12 animated">
                <div class="container">
                    <div class="row">
                        <div class="cart-content-wrap" >
                            
                            <div class="col-md-12 animated" data-animation="fadeInUp" data-animation-delay="100">
                                <h1 class="cart-title"><i class="ion-ios-list-outline"></i> Summary Of the Order</h1>
                            </div>
                            <div class="col-md-8 col-sm-8 col-xs-12 animated" data-animation="fadeInUp" data-animation-delay="500">
                                <div class="table-responsive">
                                    <table class="cart-table">
                                        <tbody>
                                            <tr>
                                                <th class="column-1">Service Name</th>
                                                <th class="column-4">Price</th>
                                                <th class="column-5"><i class="ion-ios-trash"></i></th>
                                            </tr>
                                            @php
                                            //print_r(Session::get('cart'));die;
                                            $total = 0;
                                            @endphp
                                            @if (is_array(Session::get('cart')) || is_object(Session::get('cart')))
                                            
                                            @foreach (Session::get('cart') as $key => $cartItem)
                                                @php
                                                //$ServiceName = DB::table('service_applications')->find($cartItem['serviceId']);
                                                $SubCatName = DB::table('service')->find($cartItem['serviceId']);
                                                
                                                $mainPrice = ($cartItem['servicePrice']);
                                                
                                                $total = $total + $mainPrice;
                                                @endphp
                                                <tr id="4895">
                                                    <td data-rwd-label="Service Name">
                                                        <div class="traditional-cart-entry">
                                                            <div class="content">
                                                                <div class="cell-view">
                                                                    <a href="#" class="tag cart-summary-tag">{{ $SubCatName->service_name;}}</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td data-rwd-label="Price"><div class="subtotal"><i class="fa fa-rupee"></i> {{ $mainPrice }}</div></td>
                                                    <td data-rwd-label="Remove">
                                                        <a href="#" class="remove-button" onclick="removeFromCartView(event, {{ $key }})"  class="text-right pl-4">
                                                            <i class="ion-close"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                @endif
                                            <tr>
                                                
                                                    
                                                <td colspan="3" class="ins-td-center">
                                                    <button type="submit" class="input-btn inst-btn-primary addanotherservice-btn" onclick="window.location.href = '/service-category/business-registration'">Add More Services</button>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 animated" data-animation="fadeInUp" data-animation-delay="500">
                                <div class="cort-summary-content-block">
                                    <div class="cart-summary-box">
                                                    <div class="grand-total">Sub Total: <span><i class="fa fa-rupee"></i>{{ $total}}</span></div>
                                                    <div class="grand-total">Discount: <span><i class="fa fa-rupee"></i>0.00</span></div>
                                                    <div class="grand-total">GST: <span><i class="fa fa-rupee"></i>{{round((( $total*18)/100),2)}}</span></div>
                                                    <div class="grand-total">Grand Total: <span><i class="fa fa-rupee"></i>{{ $total+round((( $total*18)/100),2)}}</span></div>
                                        <button type="submit" class="input-btn inst-btn-primary">Proceed To Payment</button>
                                    </div>
                                    <div class="cart-descount-content-block">
                                        <div class="cart-discount-block">
                                            <label>Do you have a promo code?</label>
                                            <input type="text" value="" placeholder="" id="txtcouponcode" class="formInput">
                                            <button type="submit" class="input-btn inst-btn-primary applypromocodeclick">Apply</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container ">
                <div class="row">
                    <div class="cart-content-wrap" >
                        <div class="table-responsive">
                        <div class="col-md-12 animated" data-animation="fadeInUp" data-animation-delay="100">
                            <h1 class="cart-title"><i class="ion-ios-list-outline"></i> Billing Address</h1>
                        </div>
                        

                        @csrf
                       
  
                        
                        <div class="col-xs-6 col-sm-6 col-md-6 country" >
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
                    
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <label class="form-label">State</label>
                            <select  id="sCountry" class="form-control select2"  onchange="countychangeHandler(this);" name="state">
                                <option value="Karnataka">Karnataka</option>
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
                            {{-- <input type="text" class="form-control sStatetextbox" formControlName="sState" name="state" value="" id="txtstate" autocomplete="off" style="display:none;"> --}}
                        </div>
                    
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="input-box ">
                                <label class="formLabel" for="">City</label>
                                <input id="city" type="text" class="formInput" name="city"  required  autocomplete="off" />
                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="input-box ">
                                <label class="formLabel" for="">Pin Code</label>
                                <input id="zip_code" type="number" class="formInput" name="zip_code"   required autocomplete="off" />
                                @error('zip_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="input-box ">
                                <label class="formLabel" for="">Address</label>
                                <input id="address1" type="text" class="formInput" name="address1"  required  autocomplete="off" />
                                @error('address1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 company_name" >
                            <div class="input-box ">
                                <label class="formLabel" for="">Company Name (Optional)</label>
                                <input id="address1" type="text" class="formInput" name="company"    autocomplete="off" />
                                @error('company')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        </div>
                      </div>
                </div>  
                </div> 
                       
                </div>      
                        
                    
                    
                
                
           
           
        

            <!-- /.CONTAINER -->
            </form>
        </div>
        @include('layouts.inc.footer')
    </div>
@else
    <div class="dc-header">
        <h3 class="heading heading-6 strong-700">{{__('Your Cart is empty')}}</h3>
    </div>
@endif
</div>
@endsection
@push('scripts')
<script type="text/javascript">

function removeFromCartView(e, key){
    e.preventDefault();
    removeFromCart(key);
    location.reload();
}
</script>
{{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
{{-- <script> 
    $(document).ready(function() {
        const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
//   buttonsStyling: false
})

swalWithBootstrapButtons.fire({
 title: 'Is Billing on Behalf of Company?',
//   text: "Is Billing on Behalf of Company?",
  
  showCancelButton: true,
  confirmButtonText: 'Yes',
  cancelButtonText: 'No',
  allowOutsideClick: false
//   reverseButtons: true
}).then((result) => {
  if (result.isConfirmed) {
    $('.company_name').show();
   
  } else if (
    /* Read more about handling dismissals below */
    result.dismiss === Swal.DismissReason.cancel
  ) {
    $('.company_name').hide();
  }
})
    //     // alert("ok");
    //      confirmAction = confirm("Is Billing on Behalf of Company?");
    //   if (confirmAction) {
    //     // console.log("hai");
    //     $('.company_name').show();
    //     // { {view('service_details')}}
    //     // alert("Action successfully executed");
    //   } else {
    //     // return view('mycart');
    //     $('.company_name').hide();
    //   }
    
});
    // The function below will start the confirmation dialog
   
</script>
--}}
@endpush