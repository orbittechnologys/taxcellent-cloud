﻿$(document).ready(function () {
        $('.sFirstNamediv').addClass('activealert');
    }
    else {
        $('.sFirstNamediv').removeClass('activealert');
    }
        $('.sEmailaddressdiv').addClass('activealert');
    }
    else {
        $('.sEmailaddressdiv').removeClass('activealert');
    }
        $('.sPhoneNumberdiv').addClass('activealert');
    }
    else {
        $('.sPhoneNumberdiv').removeClass('activealert');
    }
        $('.sCountrydiv').addClass('activealert');
    }
    else {
        $('.sCountrydiv').removeClass('activealert');
    }
        $('.sStatediv').addClass('activealert');
    }
    else {
        $('.sStatediv').removeClass('activealert');
    }
        $('.sCitydiv').addClass('activealert');
    }
    else {
        $('.sCitydiv').removeClass('activealert');
    }
        $('.sInterestdiv').addClass('activealert');
    }
    else {
        $('.sInterestdiv').removeClass('activealert');
    }
        $('.txtmessagediv').addClass('activealert');
    }
    else {
        $('.txtmessagediv').removeClass('activealert');
    }    
        return false;
    }
    
        type: "POST",
        processData: false,
        contentType: false,
        url: ResolveUrl("~/Webservice/SendContactemail"),
            $('#pageloader').hide();
            $('.img-responsive').hide();
            if (data == "add") {

               $("#sFirstname").val('');


                $('#ins-alert-popup').show();
                $('#ins-alert-popup').find('.alertmessage').text('Your request has been submited.');


            }         
            else {
                $('#ins-alert-popup1').show();
                $('#ins-alert-popup1').find('.alertmessage').text('error');
                return false;
            }
        },
            alert(x + '\n' + y + '\n' + z);
        }
    });
