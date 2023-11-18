$('.recommendclick').click(function () {
    var recommend_chk = $('.recommend_chk').is(':checked')    var selectedtext = "";    var selectedid = "";    var selectedid_multiple = "";    if (recommend_chk == true) {
        var bnumbersix = false;        var bproplanselected = false;        var bplusselectedplan = false;        var bpremiumselectedplan = false;        var bbasicselectedplan = false;        var bthreefourselectedplan = false;        var bfiveselectedplan = false;        var bfourtyselectedplan = false;        var b13selectedplan = false;        $('.recommend_chk:checkbox:checked').each(function () {
            selectedid_multiple += $(this).attr("id") + ",";            selectedid = $(this).attr("id");            if (selectedid == "6") {
                bnumbersix = true;
            }            if (selectedid == "1" || selectedid == "2" || selectedid == "8" || selectedid == "15" || selectedid == "16" || selectedid == "17" || selectedid == "20" || selectedid == "19" || selectedid == "22" || selectedid == "21") {
                bbasicselectedplan = true;
            }            if (selectedid == "9" || selectedid == "10" || selectedid == "11" || selectedid == "18" || selectedid == "25" || selectedid == "23" || selectedid == "24" || selectedid == "28" || selectedid == "27") {
                bpremiumselectedplan = true;
            }                        if (selectedid == "7") {
                bproplanselected = true;
            }
            if (selectedid == "6" || selectedid == "12" || selectedid == "26") {
                bplusselectedplan = true;
            }
           
            if (selectedid == "3" || selectedid == "4") {
                bthreefourselectedplan = true;
            }
            if (selectedid == "5") {
                bfiveselectedplan = true;
            }            if (selectedid == "14") {
                bfourtyselectedplan = true;
            }             if (selectedid == "13")
            {
                 b13selectedplan = true;
            }        });        //   alert('selectedid_multiple >' + selectedid_multiple + 'selectedid >' + selectedid);        if (b13selectedplan)        {
            var landingUrl = "/service/nri-income-tax-return-filing-and-consulting-services";            window.location.href = landingUrl;
        }        else if (bfourtyselectedplan) {            //  var landingUrl = "/service/income-tax-return-filing-business_basic";            var landingUrl = "/service/startups-business-registration-services";            window.location.href = landingUrl;
        }        else if (bfiveselectedplan)        {
            var landingUrl = "/service/income-tax-return-filing-professional";            window.location.href = landingUrl;
        }        else if (bthreefourselectedplan) {            //  var landingUrl = "/service/income-tax-return-filing-business_basic";            var landingUrl = "/service/income-tax-return-filing-business";            window.location.href = landingUrl;
        }         else if (bplusselectedplan) {
            var landingUrl = "/service/income-tax-return-filing-salaried-individual_plus";            window.location.href = landingUrl;
        }        else if (bproplanselected) {
            var landingUrl = "/service/income-tax-return-filing-salaried-individual_pro";            window.location.href = landingUrl;
        }        else if (bpremiumselectedplan) {
            var landingUrl = "/service/income-tax-return-filing-salaried-individual_premium";            window.location.href = landingUrl;
        }        else if (bbasicselectedplan) {
            var landingUrl = "/service/income-tax-return-filing-salaried-individual_basic";            window.location.href = landingUrl;
        }        else {
            $('#ins-alert-popup').show();
            $('#ins-alert-popup').find('.alertmessage').text('please select proper value');
        }        //else if (selectedid_multiple.indexOf("5,") != -1 && selectedid_multiple.indexOf("15,") == -1 && selectedid_multiple.indexOf("25,") == -1) {        //    //  var landingUrl = "/service/income-tax-return-filing-professional_basic";        //    var landingUrl = "/service/income-tax-return-filing-professional";        //    window.location.href = landingUrl;
        //}        //else if (selectedid == "3" || selectedid == "4") {        //    //  var landingUrl = "/service/income-tax-return-filing-business_basic";        //    var landingUrl = "/service/income-tax-return-filing-business";        //    window.location.href = landingUrl;
        //}        //else if (selectedid_multiple.indexOf("3,4,") != -1) {
        //    var landingUrl = "/service/income-tax-return-filing-business";        //    window.location.href = landingUrl;
        //}        //else if (selectedid_multiple.indexOf("13,") != -1) {        //    //var landingUrl = "/service/individual-nri-services_basic";        //    var landingUrl = "/service/nri-income-tax-return-filing-and-consulting-services";        //    window.location.href = landingUrl;
        //}        //else if (selectedid_multiple.indexOf("14,") != -1) {
        //    var landingUrl = "/service/startups-business-registration-services";        //    window.location.href = landingUrl;
        //}               /*        if (selectedid == "1" || selectedid == "2" || selectedid == "8") {            var landingUrl = "/service/income-tax-return-filing-salaried-individual_basic";            window.location.href = landingUrl;        }        else if (selectedid_multiple == "1,2,8,") {            var landingUrl = "/service/income-tax-return-filing-salaried-individual_basic";            window.location.href = landingUrl;        }        else if (selectedid == "8" || selectedid == "9" || selectedid == "10" || selectedid == "11") {            var landingUrl = "/service/income-tax-return-filing-salaried-individual_premium";            window.location.href = landingUrl;        }        else if (selectedid_multiple == "1,2,8,9,10,11,") {            var landingUrl = "/service/income-tax-return-filing-salaried-individual_premium";            window.location.href = landingUrl;        }        //else if (selectedid == "6" || selectedid == "7") {        else if (selectedid == "6") {            //var landingUrl = "/service/income-tax-return-filing-salaried-individual_pro";            var landingUrl = "/service/income-tax-return-filing-salaried-individual_plus";            window.location.href = landingUrl;        }        else if (bnumbersix) {            //var landingUrl = "/service/income-tax-return-filing-salaried-individual_pro";            var landingUrl = "/service/income-tax-return-filing-salaried-individual_plus";            window.location.href = landingUrl;
        }        // else if (selectedid_multiple == "1,6,7,") {        else if (selectedid_multiple == "1,6,") {            //var landingUrl = "/service/income-tax-return-filing-salaried-individual_pro";            var landingUrl = "/service/income-tax-return-filing-salaried-individual_plus";            window.location.href = landingUrl;        }        else if (selectedid == "12") {            var landingUrl = "/service/income-tax-return-filing-salaried-individual_plus";            window.location.href = landingUrl;        }        else if (selectedid_multiple == "1,6,7,8,12,") {            var landingUrl = "/service/income-tax-return-filing-salaried-individual_plus";            window.location.href = landingUrl;        }        else if (selectedid_multiple.indexOf("5,") != -1 && selectedid_multiple.indexOf("15,") == -1 && selectedid_multiple.indexOf("25,") == -1) {            //  var landingUrl = "/service/income-tax-return-filing-professional_basic";            var landingUrl = "/service/income-tax-return-filing-professional";            window.location.href = landingUrl;        }        else if (selectedid == "3" || selectedid == "4") {            //  var landingUrl = "/service/income-tax-return-filing-business_basic";            var landingUrl = "/service/income-tax-return-filing-business";            window.location.href = landingUrl;        }        else if (selectedid_multiple.indexOf("3,4,") != -1) {            var landingUrl = "/service/income-tax-return-filing-business";            window.location.href = landingUrl;        }        else if (selectedid_multiple.indexOf("13,") != -1) {            //var landingUrl = "/service/individual-nri-services_basic";            var landingUrl = "/service/nri-income-tax-return-filing-and-consulting-services";            window.location.href = landingUrl;        }        else if (selectedid_multiple.indexOf("14,") != -1) {            var landingUrl = "/service/startups-business-registration-services";            window.location.href = landingUrl;        }        else if (selectedid == "26") {
                        var landingUrl = "/service/income-tax-return-filing-salaried-individual_plus";            window.location.href = landingUrl;
        }        else if (selectedid == "18" || selectedid == "23" || selectedid == "24" || selectedid == "25" || selectedid == "27" || selectedid == "28") {
            var landingUrl = "/service/income-tax-return-filing-salaried-individual_premium";            window.location.href = landingUrl;
        }        else if (selectedid == "15" || selectedid == "16" || selectedid == "17" || selectedid == "19" || selectedid == "20" || selectedid == "21" || selectedid == "22") {
            var landingUrl = "/service/income-tax-return-filing-salaried-individual_basic";            window.location.href = landingUrl;
        }        else {                        $('#ins-alert-popup').show();
            $('#ins-alert-popup').find('.alertmessage').text('please select proper value');        }        */
    }
});