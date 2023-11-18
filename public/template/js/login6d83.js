//$(document).ready(function () {
    var displaycurrentpassword = localStorage.getItem("displaycurrentpassword");    //  alert(displaycurrentpassword);    if (displaycurrentpassword == "true") {
        $('.display_currentpwddiv').hide();
    }    else {
        $('.display_currentpwddiv').show();
    }
    $("body").on("keypress", "#sEmailaddress_SI,#sPassword_SI", function (e) {
        if (e.which == 13) {
            $('.signinclick').trigger('click');
        }
    });    $("body").on("keypress", "#sEmailaddress_FP", function (e) {
        if (e.which == 13) {
            $('.Forgotpasswordclick').trigger('click');
        }
    });    $("body").on("keypress", "#sFirstname_SU,#sLastname_SU,#sEmailaddress_SU,#txtpassword_SU", function (e) {
        $('.passwordenterytext').hide();
        if (e.which == 13) {
            $('.signupclick').trigger('click');
        }
    });    $("body").on("keypress", "#txtpassword_SU", function (e) {
        $('.passwordenterytext').show();    });});$(document).on("click", ".okvalidatemodelclick", function (e) {
    $('#ins-alert-popup1').hide();
    $('#ins-alert-popup').hide();
    $('#ins-alert-popup').find('.okvalidatemodelclick').show();
    $('#ins-alert-popup').find('.okvalidatemodelclick1').hide();
});$(document).on("click", ".okvalidatemodelclick1", function (e) {
    var landingUrl = "/cart";
    window.location.href = landingUrl;
});function popupForms(url) {
    var ran = Math.floor(Math.random() * 1001)    var win = window.open("/" + url + '?dum=' + ran, '', 'menubar=1,toolbar=0,location=no,scrollbars=1,resizable=1,width=560,height=420,left=300,top=8');    return false;
}function countychangeHandler(target) {
    if (target.value != "") {
        var text = target.options[target.selectedIndex].text;        if (text == "India") {
            $('.sStatecombo').show();            $('.sStatetextbox').hide();
        }        else {
            $('.sStatecombo').hide();            $('.sStatetextbox').show();
        }
    }
}$('.hide-password').click(function () {
    if ($('.displaypassword').attr('type') == 'password') {
        $('.displaypassword').prop('type', 'text');        $('.hide-password').text('hide');        //alert('1');        return false();
    }    if ($('.displaypassword').attr('type') == 'text') {
        $('.displaypassword').prop('type', 'password');        $('.hide-password').text('show');        //  alert('2');        return false();
    }
});$('.hide-Currentpassword').click(function () {    //alert('1');    if ($('.displayCurrentpassword').attr('type') == 'password') {
        $('.displayCurrentpassword').prop('type', 'text');        $('.hide-Currentpassword').text('hide');        //alert('1');        return false();
    }    if ($('.displayCurrentpassword').attr('type') == 'text') {
        $('.displayCurrentpassword').prop('type', 'password');        $('.hide-Currentpassword').text('show');        //  alert('2');        return false();
    }
});$('#fbLogin').click(function () {
    FB.init({
        appId: '258800374659862', // Set YOUR APP ID //'http://circle8.asia/Login',//        channelUrl: 'http://hayageek.com/examples/oauth/facebook/oauth-javascript/channel.html', // Channel File        status: true, // check login status        cookie: true // enable cookies to allow the server to access the session            });    FB.login(function (response) {
        localStorage.setItem("displaycurrentpassword", "true");        // alert(response.status + 'cm in ff');        console.log(">>" + response.status);        if (response.status === 'connected') {
            console.log("<br>Connected to Facebook");            //SUCCESS            FB.api('/me', { locale: 'tr_TR', fields: 'id,name, email,birthday, hometown,education,gender,website,work' },              function (response) {
                  var User_name = response.name;                  var validation_id = response.id;                  var email = response.email;                  console.log(response);                  var sPlatfrom = "facebook";                  socialmediaInsertdata(validation_id, '', User_name, sPlatfrom, email);                  //var url = "/cart";                  //window.location.href = url;                  return false;
              }            );
        }        else if (response.status === 'not_authorized') {
            console.log("Failed to Connect");
        } else {
            console.log("Logged Out");
        }
    },      {
          scope: 'email,user_location,user_likes'
      }    );
});$('.logoutclick').click(function () {
    $.ajax({
        url: '/api/homepageapi/Getlogout',        type: 'POST',        contentType: "application/json",        dataType: 'json',        data: "", //datefilter        success: function (data) {
            localStorage.setItem("displaycurrentpassword", "");            var landingUrl = "/home";            window.location.href = landingUrl;
        },        error: function (x, y, z) {
            alert(x + '\n' + y + '\n' + z);
        }
    });
});$('.signupclick').click(function () {
    var sFirstname = $('#sFirstname_SU').val();
    var sLastname = $('#sLastname_SU').val();
    var sEmailaddresspass = $('#sEmailaddress_SU').val();
    var sEmailaddress = $('#sEmailaddress_SU').val().toLowerCase();
    var txtpassword = $('#txtpassword_SU').val();
    var sPhoneNumber = $('#sPhoneNumber_SU').val();

    if (sFirstname == "") {
        $('.sFirstname_SUdiv').addClass('activealert');
    }
    else {
        $('.sFirstname_SUdiv').removeClass('activealert');
    }

    if (sLastname == "") {
        $('.sLastname_SUdiv').addClass('activealert');
    }
    else {
        $('.sLastname_SUdiv').removeClass('activealert');
    }

    if (sEmailaddress == "") {
        $('.sEmailaddress_SUdiv').addClass('activealert');
    }
    else {
        $('.sEmailaddress_SUdiv').removeClass('activealert');
    }    

    if (txtpassword == "") {
        $('.txtpassword_SUdiv').addClass('activealert');
    }
    else {
        $('.txtpassword_SUdiv').removeClass('activealert');
    }

    if (sPhoneNumber == "") {
        $('.sPhoneNumber_SUdiv').addClass('activealert');
    }
    else {
        $('.sPhoneNumber_SUdiv').removeClass('activealert');
    }

    if (sFirstname == "" || sLastname == "" || sEmailaddress == "" || txtpassword == "" || sPhoneNumber == "") {
        return false;
    }

    if (sEmailaddress != "") {
        if (validateCaseSensitiveEmail(sEmailaddress)) {
            $('.sEmailaddress_SUdiv').removeClass('activealert');
        } else {
            $('.sEmailaddress_SUdiv').addClass('activealert');
            return false;
        }
    } else { $('.sEmailaddress_SUdiv').removeClass('activealert'); }
   
    if (txtpassword != "") {
        if (txtpassword.length < 7) {
            $('.txtpassword_SUdiv').addClass('activealert');
            return false;
        }
        else {
            if (txtpassword.match(/([a-zA-Z])/) && txtpassword.match(/([0-9])/)) {
                $('.txtpassword_SUdiv').removeClass('activealert');
                //sucess
            } else {
                $('.txtpassword_SUdiv').addClass('activealert');
                return false;
            }
        }
    }

    if (txtpassword != "" && txtpassword.length >= 7 && txtpassword.match(/([a-zA-Z])/) && txtpassword.match(/([0-9])/)) {
        $('.txtpassword_SUdiv').removeClass('activealert');
    }

    var numberscheck = /^[0-9]+$/;
    if (!sPhoneNumber.match(numberscheck)) {
        $('#ins-alert-popup').show();
        $('#ins-alert-popup').find('.alertmessage').text('Please enter numeric phone number.');
        return false;
    }

    if (sPhoneNumber.length != 10 || sPhoneNumber.length > 10) {
        $('#ins-alert-popup').show();
        $('#ins-alert-popup').find('.alertmessage').text('Please enter valid phone number.');
        return false;
    }

    //if ($("#chkterm_and_condition").prop('checked') == false) {
    // //   alert('Please checked terms and condition');
    //    $('#ins-alert-popup').show();
    //    $('#ins-alert-popup').find('.alertmessage').text('Please checked terms and condition.');
    //    $('#ins-alert-popup').find('.okvalidatemodelclick').show();
    //    $('#ins-alert-popup').find('.okvalidatemodelclick1').hide();
    //    return false;
    //}
  
    var data = new FormData();

    data.append("sFirstname", sFirstname);
    data.append("sLastname", sLastname);
    data.append("sEmailaddress", sEmailaddresspass);
    data.append("txtpassword", txtpassword);
    data.append("sPhoneNumber", sPhoneNumber);
  
    $('#pageloader').show();
    $('#pageloader .img-responsive').show();
    
    $.ajax({       
        type: "POST",
        processData: false,
        contentType: false,
        url: ResolveUrl("~/Webservice/loginSignUp"),        async: true,        data: data, //datefilter
        success: function (data) {
            localStorage.setItem("displaycurrentpassword", "");            $('#pageloader').hide();            $('#pageloader .img-responsive').hide();            if (data == "redirect_on_cart") {

              //  alert('Registered successfully.');
                $('#ins-alert-popup').show();
                $('#ins-alert-popup').find('.alertmessage').text('Registered successfully.');
                $('#ins-alert-popup').find('.okvalidatemodelclick').hide();
                $('#ins-alert-popup').find('.okvalidatemodelclick1').show();
                //var landingUrl = "/cart";
                //window.location.href = landingUrl;
            }
            else if (data == "redirect_on_myaccount") {
                var landingUrl = "/myaccount";
                window.location.href = landingUrl;
            }
            else if (data == "alreadyexits") {
                $('#ins-alert-popup1').show();
                $('#ins-alert-popup1').find('.alertmessage').text('User already exits please use another email address.');
                //alert('User already exits please use another email address.');
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
});$('.signinclick').click(function () {
    var sEmailaddress = $('#sEmailaddress_SI').val().toLowerCase();
    var txtpassword = $('#sPassword_SI').val();

    if (sEmailaddress == "") {
        $('.sEmailaddress_SIdiv').addClass('activealert');
    }
    else {
        $('.sEmailaddress_SIdiv').removeClass('activealert');
    }

    if (txtpassword == "") {
        $('.sPassword_SIdiv').addClass('activealert');
    }
    else {
        $('.sPassword_SIdiv').removeClass('activealert');
    }

    if (sEmailaddress == "" || txtpassword == "") {
        return false;
    }

    var data = new FormData();
    data.append("sEmailaddress", sEmailaddress);
    data.append("txtpassword", txtpassword);
    
    $('#pageloader').show();
    $('#pageloader .img-responsive').show();
    $.ajax({
        type: "POST",
        processData: false,
        contentType: false,
        url: ResolveUrl("~/Webservice/loginSignIn"),        async: false,        data: data, //datefilter  
        success: function (data) {			 
            localStorage.setItem("displaycurrentpassword", "");            $('#pageloader').hide();            $('#pageloader .img-responsive').hide();            if (data == "notmatch") {
                $('#ins-alert-popup1').show();
                $('#ins-alert-popup1').find('.alertmessage').text('Username or password is incorrect.');
                //alert('Username or password is incorrect.');
            }			else if (data == "notactivate") {                $('#ins-alert-popup1').show();                $('#ins-alert-popup1').find('.alertmessage').text('Your account is not activate.');                //alert('Username or password is incorrect.');            }			else if (data == "completebusinessaccounting") {				 window.location.href = "/complete-business-accounting";			}
            else if (data == "redirect_on_cart") {
                var landingUrl = "/cart";
                window.location.href = landingUrl;
            }
            else if (data == "redirect_on_myaccount") {
                var landingUrl = "/myaccount";
                window.location.href = landingUrl;
            }
            else {
                var landingUrl = "/login";
                window.location.href = landingUrl;
            }

        },        error: function (x, y, z) {
            alert(x + '\n' + y + '\n' + z);
        }
    });
});$('.Forgotpasswordclick').click(function () {
    var sEmailaddress = $('#sEmailaddress_FP').val().toLowerCase();    

    if (sEmailaddress == "") {
        $('.sEmailaddress_FPdiv').addClass('activealert');
        return false;
    }
    else {
        $('.sEmailaddress_FPdiv').removeClass('activealert');
    } 

    var data = new FormData();
    data.append("sEmailaddress", sEmailaddress);   
    
    $('#pageloader').show();
    $('#pageloader .img-responsive').show();
    $.ajax({     
        type: "POST",
        processData: false,
        contentType: false,
        url: ResolveUrl("~/Webservice/loginForgotpassword"),        async: false,        data: data, //datefilter
        success: function (data) {
            localStorage.setItem("displaycurrentpassword", "");            $('#pageloader').hide();            $('#pageloader .img-responsive').hide();            if (data == "add") {
                //alert('Email send successfully.');
                $('#ins-alert-popup').show();
                $('#ins-alert-popup').find('.alertmessage').text('Email sent successfully.');
             //   var landingUrl = "/login";
             //   window.location.href = landingUrl;
            }
            else if (data == "Usernotexits") {
               // alert('User not exits');
                $('#ins-alert-popup').show();
                $('#ins-alert-popup').find('.alertmessage').text('User does not exist.');
             //   var landingUrl = "/login";
             //   window.location.href = landingUrl;
            }
            else {
                $('#ins-alert-popup1').show();
                $('#ins-alert-popup1').find('.alertmessage').text('Please try again.');
                //alert('error');
            }

        },        error: function (x, y, z) {
            alert(x + '\n' + y + '\n' + z);
        }
    });
});//g+ login startfunction onSignIn() {
    var myParams = {
        'clientid': '308423806140-pj5b71eutb5tp8onr7qum9jjnfpncv5i.apps.googleusercontent.com',        'cookiepolicy': 'single_host_origin',        'callback': 'loginCallback',        'approvalprompt': 'force',        'scope': 'https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email'        //'https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/plus.profile.emails.read'    };    gapi.auth.signIn(myParams);
}function loginCallback(result) {    //  alert('innerpage');    if (result['status']['signed_in']) {        // alert("Login Success");                gapi.client.load('plus', 'v1', onGapiLoaded);
    }
}function onGapiLoaded() {
    var request = gapi.client.plus.people.get({
        'userId': 'me'
    });    request.execute(function (gprofile) {
        console.log(gprofile.emails[0].value);        console.log(gprofile.displayName + ' :displayName');        console.log(gprofile.getPhotoUrl + ' :getPhotoUrl');        console.log(gprofile.id + ' :id');        // console.log(gprofile.given_name + ' :given_name');        // console.log(gprofile.name + ' :name');        // displaycurrentpassword = "true";        localStorage.setItem("displaycurrentpassword", "true");        var email = gprofile.emails[0].value;        var sPlatfrom = "googleplus";        socialmediaInsertdata('', gprofile.id, gprofile.displayName, sPlatfrom, email);        //var url = "/cart";        //window.location.href = url;        //return false;    });
}//g+ login endfunction socialmediaInsertdata(sFacebookid, sGoogleplusid, sDisplayname_socialmedia, sPlatfrom, email) {
    $.ajax({
        url: '/Webservice/Getsocialmedia',        type: 'POST',        contentType: "application/json",        dataType: 'json',        data: "{'sFacebookid':'" + sFacebookid + "','sGoogleplusid':'" + sGoogleplusid + "','sDisplayname_socialmedia':'" + sDisplayname_socialmedia + "','sPlatfrom':'" + sPlatfrom + "','sEmailaddress':'" + email + "'}", //datefilter        success: function (data) {            //alert(data);            if (data == "redirect_on_myaccount") {
                var landingUrl = "/myaccount";                window.location.href = landingUrl;
            }            else if (data == "redirect_on_cart") {
                var landingUrl = "/cart";                window.location.href = landingUrl;
            }            else {
                var landingUrl = "/home";                window.location.href = landingUrl;
            }
        },        error: function (x, y, z) {
            alert(x + '\n' + y + '\n' + z);
        }
    });
}//$(document).ready(function () {//    //alert('c');//    socialmediaInsertdata('933540966803825', '', 'mital', 'facebook', 'mitu10_10@yahoo.com');//});
function validateCaseSensitiveEmail(Emailid) {
    var reg = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;
    if (reg.test(Emailid)) {
        return true;
    }
    else {
        return false;
    }
}