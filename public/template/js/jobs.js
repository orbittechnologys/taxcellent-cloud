﻿$(document).ready(function () {   
            $('.txtfirstnamediv').addClass('activealert');
        }
        else {
            $('.txtfirstnamediv').removeClass('activealert');
        }
            $('.txtlastnamediv').addClass('activealert');
        }
        else {
            $('.txtlastnamediv').removeClass('activealert');
        }
            $('.txtemailaddressdiv').addClass('activealert');
        }
        else {
            $('.txtemailaddressdiv').removeClass('activealert');
        }
            $('.txtphonenodiv').addClass('activealert');
        }
        else {
            $('.txtphonenodiv').removeClass('activealert');
        }
                    $('#ins-alert-popup1').find('.alertmessage').text('error');
function validateCaseSensitiveEmail(Emailid) {
    var reg = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;
    if (reg.test(Emailid)) {
        return true;
    }
    else {
        return false;
    }
}