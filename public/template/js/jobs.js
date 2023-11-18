$(document).ready(function () {        $(document).on("click", ".jobclick", function (e) {        var txtfirstname = $('#txtfirstname').val();                var txtlastname = $('#txtlastname').val();        var txtemailaddress = $('#txtemailaddress').val();        var txtphoneno = $('#txtphoneno').val();        if (txtfirstname == "") {
            $('.txtfirstnamediv').addClass('activealert');
        }
        else {
            $('.txtfirstnamediv').removeClass('activealert');
        }        if (txtlastname == "") {
            $('.txtlastnamediv').addClass('activealert');
        }
        else {
            $('.txtlastnamediv').removeClass('activealert');
        }        if (txtemailaddress == "") {
            $('.txtemailaddressdiv').addClass('activealert');
        }
        else {
            $('.txtemailaddressdiv').removeClass('activealert');
        }        if (txtphoneno == "") {
            $('.txtphonenodiv').addClass('activealert');
        }
        else {
            $('.txtphonenodiv').removeClass('activealert');
        }        if (txtemailaddress != "") {            if (validateCaseSensitiveEmail(txtemailaddress)) {            } else {                $('.txtemailaddressdiv').addClass('activealert');                return false;            }        }                 var numberphone = /^[0-9]+$/;        if (!txtphoneno.match(numberphone)) {            $('.txtphonenodiv').addClass('activealert');                        return false;        }        if (txtphoneno.length != 10) {            $('.txtphonenodiv').addClass('activealert');            return false;        }        var sAttchment = $("#sAttchment").get(0).files;        var data = new FormData();        try {            data.append("sAttchment", sAttchment[0]);        }        catch (e) { }        data.append("txtfirstname", txtfirstname);        data.append("txtlastname", txtlastname);        data.append("txtemailaddress", txtemailaddress);        data.append("txtphoneno", txtphoneno);        $.ajax({            type: 'POST',            processData: false,            contentType: false,            url: ResolveUrl("~/Webservice/sendjobmail"),            data: data,// dataToPost,                          success: function (data) {                if (data == "added") {                    var landingUrl = "/thankyoujobpost";                    window.location.href = landingUrl;                }                else {                    $('#ins-alert-popup1').show();
                    $('#ins-alert-popup1').find('.alertmessage').text('error');                }            },            error: function (x, y, z) {                alert(x + '\n' + y + '\n' + z);            }        });    });   });
function validateCaseSensitiveEmail(Emailid) {
    var reg = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;
    if (reg.test(Emailid)) {
        return true;
    }
    else {
        return false;
    }
}