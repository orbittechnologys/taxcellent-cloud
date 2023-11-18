$(document).ready(function () {
    var gettext = $('#sFirstname_paymentpage').val();    var input = $('#sFirstname_paymentpage');    input.val(gettext);    // input[0].dispatchEvent(new Event("input", { bubbles: true }));    $('body').on('click', '.btn', function () {

        try {
          //  $(".formInput").val('');
            var data = $(this).attr('data-toggle');
            if (data != "") {
                $('.activealert').removeClass('activealert');

            }
        } catch (e) { }

    });    $("#chk_digital_courierserive").change(function () {       

        var subtotal = $('#hdsubtotal').val();
        var discount = $('#hddiscount').val();

        if ($("#chk_digital_courierserive").prop('checked') == true) {
            var courier_charge = 360;
            var pass_subtotal = parseFloat(subtotal);
            var pass_total = parseFloat(parseFloat(subtotal) + parseFloat(courier_charge) - parseFloat(discount)).toFixed(2);
           
            $('.subtotal').text(parseFloat(pass_subtotal).toFixed(2));
            $('.grnadtotal').text(pass_total);
            $('.tokenchargetotal').text(parseFloat(courier_charge).toFixed(2));
            $('.divtokencharges').show();
        }
        else {            
            var courier_charge = 0;
            var pass_subtotal = parseFloat(subtotal);

            var pass_total = parseFloat(parseFloat(subtotal) + parseFloat(courier_charge) - parseFloat(discount)).toFixed(2);

            $('.subtotal').text(parseFloat(pass_subtotal).toFixed(2));
            $('.grnadtotal').text(pass_total);
            $('.tokenchargetotal').text(parseFloat(courier_charge).toFixed(2));
            $('.divtokencharges').hide();
        }

        //if ($("#chk_digital_courierserive").prop('checked') == true) {
        //    $.ajax({
        //        type: "POST",
        //        contentType: "application/json",
        //        url: ResolveUrl("~/payment/gettotaldata"),
        //        data: "",//datefilter
        //        dataType: "json",
        //        async: true,
        //        success: function (data) {
        //            $('.savedatali li').remove();

        //            for (i = 0; i < data.length; i++) {
        //                var lastrowval = data[0].lastrowval;
        //                if (lastrowval == true) {
        //                    var subtotal = data[0].subtotal;
        //                    var discount = data[0].discount;
        //                    var total = data[0].grandtotal;

        //                    subtotal = parseFloat(subtotal + 360);
        //                    total = (subtotal - discount);

        //                    var firsttd = "<div class='grand-total'>Sub Total: <span><i class='fa fa-rupee'></i>" + subtotal + "</span></div><div class='grand-total'>Discount: <span><i class='fa fa-rupee'></i>" + data[0].discount + " </span></div><div class='grand-total'>Grand Total: <span><i class='fa fa-rupee'></i>" + total + "  </span></div>";
        //                    $(firsttd).appendTo(".savedatali");
        //                }
        //            }

        //        }
        //    });
        //}
    });
});function countychangeHandler(target) {
    if (target.value != "") {
        var text = target.options[target.selectedIndex].text;        if (text == "India") {
            $('.sStatecombo').show();            $('.sStatetextbox').hide();
        }        else {
            $('.sStatecombo').hide();            $('.sStatetextbox').show();
        }
    }
}$(".buycartitem_withpackageclick").click(function () {
    var id = $(this).attr('id');    var data = new FormData();
    data.append("id", id);    $.ajax({
        type: "POST",
        processData: false,
        contentType: false,
        url: ResolveUrl("~/Webservice/Addtocartwithpackage"),        async: false,        data: data, //datefilter          success: function (data) {

            if (data == "redirect_on_cart") {
                var url = "/cart";
                window.location.href = url;
            }
            else if (data == "redirect_on_login") {
                var url = "/login";
                window.location.href = url;
            }
            else {
                $('#ins-alert-popup1').show();
                $('#ins-alert-popup1').find('.alertmessage').text('error item not added in cart');
                return false;
            }
        },        error: function (x, y, z) {
            alert(x + '\n' + y + '\n' + z);
        }
    });
});$(".buycartitem_withoutpackageclick").click(function () {
    var id = $(this).attr('id');    var data = new FormData();
    data.append("id", id);    $.ajax({
        type: "POST",
        processData: false,
        contentType: false,
        url: ResolveUrl("~/Webservice/Addtocartwithoutpackage"),        async: false,        data: data, //datefilter          success: function (data) {
            if (data == "redirect_on_cart") {
                var url = "/cart";
                window.location.href = url;
            }
            else if (data == "redirect_on_login") {
                var url = "/login";
                window.location.href = url;
            }
            else {
                $('#ins-alert-popup1').show();
                $('#ins-alert-popup1').find('.alertmessage').text('error item not added in cart');
                return false;
            }
        },        error: function (x, y, z) {
            alert(x + '\n' + y + '\n' + z);
        }
    });
});$(".makepayment").click(function () {
    var sFirstName = $("#sFirstName").val();    var sLastname = $("#sLastname").val();    var sCustomerEmailId = $("#sCustomerEmailId").val();    var sCompanyName = $("#sCompanyName").val();    var sStreet = $("#sStreet").val();    var sStreet1 = $("#sStreet1").val();    var sCity = $("#sCity").val();    var sCountry = $("#sCountry").val();    var sState = $("#sState").val();    var sZip = $("#sZip").val();    var sPhoneNumber = $("#sPhoneNumber").val();    var sGSTNumber = $("#sGSTNumber").val();    var sReferrerr = $("#sReferrerr").val();    var courier_charge = 0;    if ($("#chk_digital_courierserive").prop('checked') == true) {
        courier_charge = 360;    }    if (sFirstName == "") {
        $('.sFirstName').addClass('activealert');
    }
    else {
        $('.sFirstName').removeClass('activealert');
    }
    if (sLastname == "") {
        $('.sLastname').addClass('activealert');
    }
    else {
        $('.sLastname').removeClass('activealert');
    }
    if (sCustomerEmailId == "") {
        $('.sCustomerEmailId').addClass('activealert');
    }
    else {
        $('.sCustomerEmailId').removeClass('activealert');
    }
    if (sCity == "") {
        $('.sCity').addClass('activealert');
    }
    else {
        $('.sCity').removeClass('activealert');
    }
    if (sCountry == "") {
        $('.sCountry').addClass('activealert');
    }
    else {
        $('.sCountry').removeClass('activealert');
    }
    if (sState == "") {
        $('.sState').addClass('activealert');
    }
    else {
        $('.sState').removeClass('activealert');
    }

    if (sZip == "") {
        $('.sZip').addClass('activealert');
    }
    else {
        $('.sZip').removeClass('activealert');
    }

    if (sPhoneNumber == "") {
        $('.sPhoneNumber').addClass('activealert');
    }
    else {
        $('.sPhoneNumber').removeClass('activealert');
    }

    if (sFirstName == "" || sLastname == "" || sCustomerEmailId == "" || sCity == "" || sCountry == "" || sState == "" || sZip == "" || sPhoneNumber == "") {
        return false;
    }

    var numberscheck = /^[0-9]+$/;
    if (!sPhoneNumber.match(this.numberscheck)) {
        //$('.sPhoneNumber').addClass('activealert');
        $('#ins-alert-popup').show();
        $('#ins-alert-popup').find('.alertmessage').text('Please enter numeric phone number.');
        return false;
    }

    if (sPhoneNumber.length != 10) {
        // $('.sPhoneNumber').addClass('activealert');
        $('#ins-alert-popup').show();
        $('#ins-alert-popup').find('.alertmessage').text('Please enter valid phone number.');
        return false;
    }


    if (sGSTNumber != "") {
        if (sGSTNumber.length != 15) {
            //$('.sGSTNumber').addClass('activealert');
            $('#ins-alert-popup').show();
            $('#ins-alert-popup').find('.alertmessage').text('Please enter valid GST number.');
            return false;
        }
    }


    var numberType = $("#mobile_no_code").intlTelInput("getSelectedCountryData");
    var mobile_one_code = numberType.dialCode;
    mobile_one_code = "+" + mobile_one_code;
   // sPhoneNumber = mobile_one_code + " " + sPhoneNumber;
   
    var data = new FormData();
    data.append("sFirstName", sFirstName);
    data.append("sLastname", sLastname);
    data.append("sCustomerEmailId", sCustomerEmailId);
    data.append("sCompanyName", sCompanyName);
    data.append("sStreet", sStreet);
    data.append("sStreet1", sStreet1);
    data.append("sCity", sCity);
    data.append("sState", sState);
    data.append("sZip", sZip);
    data.append("sPhoneNumber", sPhoneNumber);
    data.append("mobile_one_code", mobile_one_code);
    data.append("sGSTNumber", sGSTNumber);
    data.append("sReferrerr", sReferrerr);    
    data.append("courier_charge", courier_charge);
    $('#pageloader .img-responsive').show();
    $('#pageloader').show();
    $.ajax({
        type: "POST",
        processData: false,
        contentType: false,
        url: ResolveUrl("~/payment/makepayment"),        async: false,        data: data, //datefilter         success: function (data) {
            $('#pageloader .img-responsive').hide();
            $('#pageloader').hide();
            if (data.indexOf("test.instamojo.com")) {
                window.location.href = data;
            }
        },        error: function (x, y, z) {
            alert(x + '\n' + y + '\n' + z);
        }
    });
});