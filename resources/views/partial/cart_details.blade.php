<!-- CONTAINER -->
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
                                $SubCatName = DB::table('service')->find($cartItem['service_id']);
                                
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
                                    <button type="submit" class="input-btn inst-btn-primary addanotherservice-btn" onclick="window.location.href = '/our-services'">Add More Services</button>
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
                                    <div class="grand-total">Grand Total: <span><i class="fa fa-rupee"></i>{{ $total}}</span></div>
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
<!-- /.CONTAINER -->