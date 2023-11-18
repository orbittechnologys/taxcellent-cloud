$(document).ready(function () {});function countychangeHandler(target) {    if (target.value != "") {        var text = target.options[target.selectedIndex].text;        if (text == "India") {            $('.sStatecombo').show();            $('.sStatetextbox').hide();        }        else {            $('.sStatecombo').hide();            $('.sStatetextbox').show();        }    }}$(".contactusclick").click(function () {    var sFirstName = $("#sFirstname").val();    var sEmailaddress = $("#sEmailaddress").val();    var sPhoneNumber = $("#sPhoneNumber").val();        var sCountry = $("#sCountry").val();    var sState = $("#sState").val();    var sCity = $("#sCity").val();    var sInterest = $("#sInterest option:selected").text();    var txtmessage = $('textarea#txtmessage').val();    if (sFirstName == "") {
        $('.sFirstNamediv').addClass('activealert');
    }
    else {
        $('.sFirstNamediv').removeClass('activealert');
    }    if (sEmailaddress == "") {
        $('.sEmailaddressdiv').addClass('activealert');
    }
    else {
        $('.sEmailaddressdiv').removeClass('activealert');
    }    if (sPhoneNumber == "") {
        $('.sPhoneNumberdiv').addClass('activealert');
    }
    else {
        $('.sPhoneNumberdiv').removeClass('activealert');
    }    if (sCountry == "") {
        $('.sCountrydiv').addClass('activealert');
    }
    else {
        $('.sCountrydiv').removeClass('activealert');
    }    if (sState == "") {
        $('.sStatediv').addClass('activealert');
    }
    else {
        $('.sStatediv').removeClass('activealert');
    }    if (sCity == "") {
        $('.sCitydiv').addClass('activealert');
    }
    else {
        $('.sCitydiv').removeClass('activealert');
    }    if (sInterest == "--") {
        $('.sInterestdiv').addClass('activealert');
    }
    else {
        $('.sInterestdiv').removeClass('activealert');
    }    if (txtmessage == "") {
        $('.txtmessagediv').addClass('activealert');
    }
    else {
        $('.txtmessagediv').removeClass('activealert');
    }        if (sFirstName == "" || sEmailaddress == "" || sPhoneNumber == "" || sCity == "" || sCountry == "" || sState == "" || sInterest == "--" || txtmessage == "") {
        return false;
    }        var data = new FormData();
        data.append("sFirstName", sFirstName);    data.append("sEmailaddress", sEmailaddress);    data.append("sPhoneNumber", sPhoneNumber);    data.append("sCountry", sCountry);    data.append("sState", sState);    data.append("sCity", sCity);    data.append("sInterest", sInterest);    data.append("sMessage", txtmessage);    $('.img-responsive').show();    $('#pageloader').show();      $.ajax({
        type: "POST",
        processData: false,
        contentType: false,
        url: ResolveUrl("~/Webservice/SendContactemail"),        async: false,        data: data, //datefilter          success: function (data) {
            $('#pageloader').hide();
            $('.img-responsive').hide();
            if (data == "add") {

               $("#sFirstname").val('');               $("#sEmailaddress").val('');               $("#sPhoneNumber").val('');               $("#sCountry").val('');               $("#sState").val('');               $("#sCity").val('');               $("#sInterest option:selected").text('--');               $("#txtmessage").val('');


                $('#ins-alert-popup').show();
                $('#ins-alert-popup').find('.alertmessage').text('Your request has been submited.');


            }         
            else {
                $('#ins-alert-popup1').show();
                $('#ins-alert-popup1').find('.alertmessage').text('error');
                return false;
            }
        },        error: function (x, y, z) {
            alert(x + '\n' + y + '\n' + z);
        }
    });
});