var absurl = window.location.pathname;
$(document).ready(function () {

    var groupnumber = parseInt(document.getElementById('hdGroupNo').value, 10);

    if (groupnumber > 1) {
        var span11 = $('.span11').text(groupnumber - 1);
        var span21 = $('.span21').text(groupnumber);
        var span31 = $('.span31').text(groupnumber + 1);

        var span1 = $('.span1').text(groupnumber - 1);
        var span2 = $('.span2').text(groupnumber);
        var span3 = $('.span3').text(groupnumber + 1);
    }
    LoaddataonPage();
    pagination1();
    pagination();
});

function LoaddataonPage() {
    var groupnumber = document.getElementById('hdGroupNo').value;
    var hdsUrl = document.getElementById('hdsUrl').value;
    var noofimage = 4;
    document.getElementById('hdNoofPage').value = noofimage;
    var sortby = document.getElementById('hdshorting').value;
    var one = parseInt(noofimage, 10);
    var two = parseInt(groupnumber, 10);
    var iDisplayStart = (one * two) - (noofimage);
    document.getElementById('hdiDisplayStart').value = iDisplayStart;
   // alert(groupnumber + ',' + iDisplayStart + ',' + noofimage + ',' + sortby);
    FillAllsearchImgjs(groupnumber, iDisplayStart, noofimage, sortby,hdsUrl);
}
function FillAllsearchImgjs(groupnumber, iDisplayStart, noofimage, sortby,hdsUrl) {
    var data = new FormData();
    data.append("sEcho", groupnumber);
    data.append("iDisplayStart", iDisplayStart);
    data.append("iDisplayLength", noofimage);
    data.append("sortby", sortby);
    data.append("sUrl", hdsUrl);

    $.ajax({
        type: "POST",
        processData: false,
        contentType: false,
        url: '/Webservice/FillListingdata',
        data: data, //datefilter
        success: function (data) {
            $('.Productdatainner .hv-wrapper').remove();
            var RecordCount = 0;

            if (data.length > 0) {

                for (var i = 0; i < data.length; i++) {
                
                    //var firsttd = "<article class='post post-list media hv-wrapper'><div class='media-left'><div class='post-thumbnail overlay-container'><a href='" + data[i].sUrl + "'><img src='" + data[i].sImage + "' class='media-object' alt='post-img'></a></div></div>";
                    //var secondtd = "<div class='media-body'><p class='post-date'>" + data[i].sCreatedDate + "</p><h6 class='post-title'><a href='" + data[i].sUrl + "'>" + data[i].sBlogTitle + "</a></h6>";
                    //var thirdtd = "<p class='post-desc'>" + data[i].sShortDescription + "</p><a href='" + data[i].sUrl + "' class='btn-link'>More</a></div></article>";

                    var firsttd = "<article class='post post-list media hv-wrapper left-blog-list'><div class='media-left'><div class='post-thumbnail overlay-container'><a href='" + data[i].sUrl + "'><img src='" + data[i].sImage + "' class='media-object' alt='post-img' ></a></div></div>";
                    var secondtd = "<div class='media-body'><p class='post-date'><strong>" + data[i].sCreatedDate + "</strong></p><h1 class='post-title'><a href='" + data[i].sUrl + "'>" + data[i].sBlogTitle + "</a></h1><p class='post-desc'>" + data[i].sShortDescription + "";
                    var thirdtd = "<a href='" + data[i].sUrl + "' class='btn-link'>read more...</a></p></div></article>";

                    //     $(firsttd + secondtd + thirdtd).prependTo(".Productdata");
                    $(firsttd + secondtd + thirdtd).appendTo(".Productdatainner");
                    RecordCount = data[i].nOrderno;
                    document.getElementById('hdRecordCount').value = RecordCount;
                }

                var selectedpage = document.getElementById('hdGroupNo').value;
                var nopage = document.getElementById('hdNoofPage').value;

                var total = RecordCount / nopage;
                var celtotal = parseInt(Math.ceil(total), 10);
                $('.selectedpage').text(selectedpage);
                $('.totalnoofpage').text(celtotal);

                $('.pagination').show();
                $('#datadisplypage').show();
                $('#paginationdisplay').show();

                $('.pagination1').show();
                $('#datadisplypage1').show();
                $('#paginationdisplay1').show();

                $('#showmessageofrecord').hide();

                $('.footerdata').show();

            } else {
                $(".loadmoredata").hide();

                $('.footerdata').hide();
                $('#datadisplypage').hide();
                $('.pagination').hide();
                $('#datadisplypage1').hide();
                $('.pagination1').hide();
                $('#showmessageofrecord').show();
                $(".pagination2").hide();
                $('.Productdatainner').html("<div class='product-listing-norecordfound' style='margin-top: 75px;'>No records found</div>");
            }

            //below pagination code      
            var nopage = document.getElementById('hdNoofPage').value;
            var total = RecordCount / nopage;
            var celtotal = parseInt(Math.ceil(total), 10);
            var final = RecordCount;
            var groupNumber = document.getElementById('hdGroupNo').value;

            var Page = groupnumber;
            $('.Groupno').text(Page);
            $('.outofpage').text(celtotal);

            $('.TotalImage1').text(final);
            $('.TotalImage').text(celtotal);
            var span1 = $('.span11').text();

            if (celtotal >= span1) {
                $('.span1').show();
                $('.bespan1').show();

            }
            else {
                $('.span1').hide();
                $('.bespan1').hide();
            }

            var span2 = $('.span2').text();
            if (celtotal >= span2) {
                $('.span2').show();
                $('.bespan2').show();
            }
            else {
                $('.span2').hide();
                $('.bespan2').hide();
            }
            var span3 = $('.span3').text();
            if (celtotal >= span3) {
                $('.span3').show();
                $('.bespan3').show();
            }
            else {
                $('.span3').hide();
                $('.bespan3').hide();
            }

            if (celtotal > 1) {
                $('.reportpagerbelow').show();
                $('.FirstNumber').text(groupNumber);
                $('.LastNumber').text(celtotal);
                var gno = document.getElementById('hdGroupNo').value;
                //  opencustumealert(gno);
                if (gno == 1) {
                    $('.span1').addClass('active');
                    $('.bespan1').addClass('active');
                    $('.span2').removeClass('active');
                    $('.span3').removeClass('active');

                    //add on 18-04-2016 after click on last data pagination not disply from 1 so added
                    $('.span' + gno).text('1');
                    $('.bespan' + gno).addClass('1');
                    $('.span' + gno).show();

                    if (celtotal < 2) {
                        $('.span2').hide();
                        //$('.pagination .next').hide();
                        //$('.pagination .nextpaging').hide();
                    }
                    else {
                        $('.span2').text('2');
                        $('.bespan2').addClass('2');
                        $('.span2').show();
                    }

                    if (celtotal < 3) {
                        $('.span3').hide();
                        //$('.pagination .next').hide();
                        //$('.pagination .nextpaging').hide();
                    }
                    else {
                        $('.span3').text('3');
                        $('.bespan3').addClass('3');
                        $('.span3').show();
                    }
                    //finish             
                }
                else {
                    $('.span' + gno).parent('li').addClass('active');
                    $('.bespan' + gno).parent('li').addClass('active');

                    $('.span' + gno + '').addClass('active');
                    $('.bespan' + gno + '').addClass('active');
                }
            }
            else {

                $('.reportpagerbelow').hide();
                $('.FirstNumber').text('1');

                $('.span1').addClass('active');
                $('.bespan1').addClass('active');
            }


            var prevno = parseInt(document.getElementById('hdGroupNo').value, 10) - 1;
            //opencustumealert(prevno);
            if (prevno > 0) {
                $('.pagination2 .prev').show();
                $('.pagination2 .prevfirst2').show();
                $('.pagination2 .prevpaging').show();
            }
            else {
                $('.pagination2 .prev').hide();
                $('.pagination2 .prevfirst2').hide();
                $('.pagination2 .prevpaging').hide();
            }

            var nextno = parseInt(Page, 10) + 1;
            if (nextno < celtotal) {
                $('.pagination2 .next').show();
                $('.pagination2 .nextlast2').show();
                $('.pagination2 .nextpaging').show();
            }
            else {
                $('.pagination2 .next').hide();
                $('.pagination2 .nextlast2').hide();
                $('.pagination2 .nextpaging').hide();
            }
        },
        error: function (response) {
            //alert(error[0].Message);
            var r = jQuery.parseJSON(response.responseText);
            alert("Message: " + r.Message);
            alert("StackTrace: " + r.StackTrace);
            alert("ExceptionType: " + r.ExceptionType);
        }
    });
}
function pagination1() {
    $(document).on("click", ".pagination1 .prev1", function (e) {
        e.preventDefault();

        var nopage = document.getElementById('hdNoofPage').value;
        var prevno = parseInt(document.getElementById('hdGroupNo').value, 10) - 1;

        if (prevno > 0) {
            if (e.handled == true) {
                return false;
            }
            e.handled = true;
            $('.paging1').each(function () {
                //$(this).removeClass('active');
                $(this).parent('li').removeClass('active');
                $(this).removeClass('active');
            })
            $('.paging').each(function () {
                $(this).removeClass('active');
                $(this).parent('li').removeClass('active');
            })

            var curr = document.getElementById('hdGroupNo').value;
            var accurtext = "";
            $('.paging1').each(function () {
                if (curr == $(this).text()) {
                    accurtext = $(this).attr('id');
                }
            })
            accurtext = accurtext.replace(/Span/g, "");
            var gnumber = parseInt(document.getElementById('hdGroupNo').value, 10);
            var firstdisplay = parseFloat($('.span11').text());
            if (gnumber == firstdisplay) {

                var span1 = $('.span11').text();
                var newspan1 = parseInt(span1, 10) - 3;
                $('.span11').text(newspan1);
                $('.bespan1').text(newspan1);

                var span2 = $('.span21').text();
                var newspan2 = parseInt(span2, 10) - 3;
                $('.span21').text(newspan2);
                $('.bespan2').text(newspan2);

                var span3 = $('.span31').text();
                var newspan3 = parseInt(span3, 10) - 3;
                $('.span31').text(newspan3);
                $('.bespan3').text(newspan3);

                $('.span1').text(newspan1);
                $('.span2').text(newspan2);
                $('.span3').text(newspan3);

                $('.span101').addClass('active');
                $('.belowspan .bespan10').addClass('active');
            }
            else {
                var nextaccurtext = "";
                $('.paging1').each(function () {

                    //if (prevno == $(this).text()) {
                    //    nextaccurtext = $(this).attr('id');
                    //}

                    var pass = $(this).text();

                    if (pass > 10) {
                        pass = $(this).text().slice(1);
                    }
                    else {
                        pass = $(this).text();
                    }
                    if (prevno == pass) {
                        nextaccurtext = $(this).attr('id');
                    }

                    if (nextaccurtext == "") {
                        nextaccurtext = prevno;
                    }


                })
                //alert(nextaccurtext);
                try {
                    $('.' + nextaccurtext.toLowerCase()).addClass('active');
                    $('.belowspan  .be' + nextaccurtext.toLowerCase()).addClass('active');
                }

                catch (e) {

                }
            }
            var Searchkeyword = "";
            prevno = parseInt(document.getElementById('hdGroupNo').value, 10) - 1;
            document.getElementById('hdGroupNo').value = prevno;
            document.getElementById('HdselectnID').value = "";
            var Page = prevno;
            var RecsPerPage = document.getElementById('hdNoofPage').value;
            var RecordCount = document.getElementById('hdRecordCount').value;

            var one = parseInt(Page, 10);
            var two = parseInt(RecsPerPage, 10);
            var iDisplayStart = (one * two) - (RecsPerPage);


            var sortby = document.getElementById('hdshorting').value;
            var noofimage = document.getElementById('hdNoofPage').value;
            document.getElementById('hdiDisplayStart').value = iDisplayStart;

           // window.location.href = absurl + "?&pageid=" + Page + "&Noofimage=" + noofimage;
            window.location.href = absurl + "?&pageid=" + Page;


        }
        return false;
    });
    $(document).on("click", ".pagination1 .next1", function (e) {
        e.preventDefault();

        var cnt1 = $('#lbTotalImage1').text().replace(',', '');
        var RecordCount = document.getElementById('hdRecordCount').value;
        var nopage = document.getElementById('hdNoofPage').value;
        var total = RecordCount / nopage;
        var celtotal = Math.ceil(total);

        var nextno = parseInt(document.getElementById('hdGroupNo').value, 10) + 1;
        //  alert("RecordCount>>" + RecordCount + ">>nopage>>" + nopage + ">>total>>" + total + ">>celtotal>>" + celtotal + ">>nextno>>" + nextno);
        if (nextno <= celtotal) {
            if (e.handled == true) {
                return false;
            }
            e.handled = true;
            $('.paging1').each(function () { $(this).removeClass('active'); })
            var curr = document.getElementById('hdGroupNo').value;
            var accurtext = "";
            $('.paging1').each(function () {
                $(this).parent('li').removeClass('active');
                $(this).removeClass('active');
            })
            $('.paging').each(function () {
                $(this).parent('li').removeClass('active');
                $(this).removeClass('active');
            })
            var gnumber = parseInt(document.getElementById('hdGroupNo').value, 10);
            var lastdisplay = parseFloat($('.span31').text());
            // var currtext = $('#' + curr).id();
            accurtext = accurtext.replace(/Span/g, "");
            // alert("gnumber>>" + gnumber + ">>lastdisplay>>" + lastdisplay);
            if (gnumber == lastdisplay) {
                var span1 = $('.span11').text();
                var newspan1 = parseInt(span1, 10) + 3;
                $('.span11').text(newspan1);
                $('.bespan1').text(newspan1);

                var span2 = $('.span21').text();
                var newspan2 = parseInt(span2, 10) + 3;
                $('.span21').text(newspan2);
                $('.bespan2').text(newspan2);

                var span3 = $('.span31').text();
                var newspan3 = parseInt(span3, 10) + 3;
                $('.span31').text(newspan3);
                $('.bespan3').text(newspan3);

                $('.span1').text(newspan1);
                $('.span2').text(newspan2);
                $('.span3').text(newspan3);

                $('.span11').addClass('active');
                $('.belowspan .bespan1').addClass('active');
            }
            else {

                var nextaccurtext = "";
                $('.paging1').each(function () {
                    var pass = $(this).text();
                    // alert('pass' + pass);
                    if (pass > 10) {
                        pass = $(this).text().slice(1);
                    }
                    else {
                        pass = $(this).text();
                    }
                    if (nextno == pass) {
                        nextaccurtext = $(this).attr('id');
                    }
                })
                try {
                    $('.' + nextaccurtext.toLowerCase()).addClass('active');
                    $('.belowspan .be' + nextaccurtext.toLowerCase()).addClass('active');
                }
                catch (e) {

                }
            }
            nextno = parseInt(document.getElementById('hdGroupNo').value, 10) + 1;
            document.getElementById('hdGroupNo').value = nextno;
            document.getElementById('HdselectnID').value = "";
            var Searchkeyword = "";
            var Page = nextno;
            var RecsPerPage = document.getElementById('hdNoofPage').value;

            var one = parseInt(Page, 10);
            var two = parseInt(RecsPerPage, 10);
            var iDisplayStart = (one * two) - (RecsPerPage);
            var sortby = document.getElementById('hdshorting').value;

            var noofimage = document.getElementById('hdNoofPage').value;
            // window.location.href = absurl + "?&pageid=" + Page + "&Noofimage=" + noofimage;
            window.location.href = absurl + "?&pageid=" + Page;

            return false;
        }
    });
    $(document).on("click", ".pagination1 .prevpaging1", function (e) {
        var text = $(this).text();
        $('.paging1').each(function () {
            $(this).parent('li').removeClass('active');
            $(this).removeClass('active');
        })
        $('.paging').each(function () {
            $(this).parent('li').removeClass('active');
            $(this).removeClass('active');
        })

        var span1 = $('.span11').text();
        var cnt1 = $('.TotalImage2').text().replace(',', '');
        var RecordCount = parseInt(cnt1);
        var nopage = document.getElementById('hdNoofPage').value;
        var total = RecordCount / nopage;
        var celtotal = Math.ceil(total);
        //   alert("span1>> " + span1 + "cnt1>>" + cnt1 + "RecordCount>> " + RecordCount + "nopage>>" + nopage + "total>> " + total + "celtotal>> " + celtotal);

        var span1 = $('.span11').text();
        var newspan1 = 1;
        $('.span11').text(newspan1);
        $('.bespan1').text(newspan1);

        var span2 = $('.span21').text();
        //var newspan2 = parseInt(span2, 10) - 3;
        var newspan2 = 2;
        $('.span21').text(newspan2);
        $('.bespan2').text(newspan2);

        var span3 = $('.span31').text();
        // var newspan3 = parseInt(span3, 10) - 3;
        var newspan3 = 3;
        $('.span31').text(newspan3);
        $('.bespan3').text(newspan3);

        if (celtotal >= span1) {
            $('.span11').show();
            $('.bespan1').show();
        }
        else {
            $('.span11').hide();
            $('.bespan1').hide();
        }
        var span2 = $('.span21').text();
        if (celtotal >= span2) {
            $('.span21').show();
            $('.bespan2').show();
        }
        else {
            $('.span21').hide();
            $('.bespan2').hide();
        }
        var span3 = $('.span31').text();
        if (celtotal >= span3) {
            $('.span31').show();
            $('.bespan3').show();
        }
        else {
            $('.span31').hide();
            $('.bespan3').hide();
        }

        //other pagination
        var span11 = $('.span1').text();
        var newspan1 = parseInt(span11, 10) - 3;
        $('.span1').text(newspan1);
        $('.bespan1').text(newspan1);

        var span21 = $('.span2').text();
        var newspan2 = parseInt(span21, 10) - 3;
        $('.span2').text(newspan2);
        $('.bespan2').text(newspan2);

        var span31 = $('.span3').text();
        var newspan3 = parseInt(span31, 10) - 3;
        $('.span3').text(newspan3);
        $('.bespan3').text(newspan3);

        if (celtotal >= span11) {
            $('.span11').show();
            $('.span1').show();
            $('.bespan1').show();

        }
        else {
            $('.span11').hide();
            $('.span1').hide();
            $('.bespan1').hide();
        }
        var span21 = $('.span2').text();
        if (celtotal >= span21) {
            $('.span21').show();
            $('.span2').show();
            $('.bespan2').show();
        }
        else {
            $('.span21').hide();
            $('.span2').hide();
            $('.bespan2').hide();
        }
        var span31 = $('.span3').text();
        if (celtotal >= span31) {
            $('.span31').show();
            $('.span3').show();
            $('.bespan3').show();
        }
        else {
            $('.span31').hide();
            $('.span3').hide();
            $('.bespan3').hide();
        }
        var span11 = $('.span11').text();
        var span1 = $('.span1').text();
        if (span1 == 1) {
            $('.prevpaging').hide();
            $('.prevpaging1').hide();
        }

        var Searchkeyword = "";
        var Page = text;
        var RecsPerPage = document.getElementById('hdNoofPage').value;
        var RecordCount = document.getElementById('hdRecordCount').value;
        document.getElementById('hdGroupNo').value = Page;

        document.getElementById('HdselectnID').value = "";
        document.getElementById('hdNoofPage').value = RecsPerPage;

        var category = document.getElementById('hdCategory').value;
        var search = document.getElementById('hdsearch').value;
        var country = document.getElementById('hdcountry').value;
        var startprice = document.getElementById('hdstartprice').value;
        var endprice = document.getElementById('hdendprice').value;
        var sortby = document.getElementById('hdshorting').value;
        var shape = document.getElementById('hdshape').value;
        var oddsize = document.getElementById('hdoddsize').value;
        var newPathname = "";
        var docuurl = document.URL;
        var spliturl = docuurl.split('/');
        var newPathname = "";
        for (i = 3; i < spliturl.length; i++) {
            newPathname += "/";
            newPathname += spliturl[i];
        }


        var one = parseInt(Page, 10);
        var two = parseInt(RecsPerPage, 10);
        var iDisplayStart = (one * two) - (RecsPerPage);

        document.getElementById('hdiDisplayStart').value = iDisplayStart;
        FillAllsearchImgjs(Page, iDisplayStart, RecsPerPage, category, country, sortby, search, shape, oddsize);
        return false;

    });
    $(document).on("click", ".pagination1 .nextpaging1", function (e) {
        var text = $(this).text();
        $('.paging1').each(function () {
            $(this).parent('li').removeClass('active');
            $(this).removeClass('active');
        })
        $('.paging').each(function () {
            $(this).parent('li').removeClass('active');
            $(this).removeClass('active');
        })

        var id = $(this).attr('id');

        var lastdisplay = parseFloat($('.span31').text());
        var cnt1 = $('#lbTotalImage1').text().replace(',', '');
        var RecordCount = document.getElementById('hdRecordCount').value;
        var nopage = document.getElementById('hdNoofPage').value;
        var total = RecordCount / nopage;
        var celtotal = Math.ceil(total);
        var LastNumber = celtotal;

        var span1 = $('.span11').text();
        var newspan1 = parseInt(LastNumber, 10) - 2;

        $('.span11').text(newspan1);
        $('.span1').text(newspan1);
        $('.bespan1').text(newspan1);

        var span2 = $('.span21').text();
        //   var newspan2 = parseInt(span2, 10) + 3;
        var newspan2 = parseInt(LastNumber, 10) - 1;
        $('.span21').text(newspan2);
        $('.span2').text(newspan2);
        $('.bespan2').text(newspan2);

        var span3 = $('.span31').text();
        // var newspan3 = parseInt(span3, 10) + 3;
        var newspan3 = LastNumber;
        $('.span31').text(newspan3);
        $('.span3').text(newspan3);
        $('.bespan3').text(newspan3);


        if (celtotal >= span1) {
            $('.span11').show();
            $('.span1').show();
            $('.bespan1').show();


            var span2 = $('.span21').text();
            if (celtotal >= span2) {
                $('.span21').show();
                $('.span2').show();
                $('.bespan2').show();
            }
            else {
                $('.span2').hide();
                $('.span21').hide();
                $('.bespan2').hide();
            }
            var span3 = $('.span31').text();
            if (celtotal >= span3) {
                $('.span3').show();
                $('.span31').show();
                $('.bespan3').show();
            }
            else {
                $('.span3').hide();
                $('.span31').hide();
                $('.bespan3').hide();
            }

            $('.span1').text(newspan1);
            $('.span2').text(newspan2);
            $('.span3').text(newspan3);

            if (celtotal >= span11) {
                $('.span11').show();
                $('.span1').show();
                $('.bespan1').show();

            }
            else {
                $('.span11').hide();
                $('.span1').hide();
                $('.bespan1').hide();
            }
            var span21 = $('.span2').text();
            if (celtotal >= span21) {
                $('.span21').show();
                $('.span2').show();
                $('.bespan2').show();
            }
            else {
                $('.span21').hide();
                $('.span2').hide();
                $('.bespan2').hide();
            }
            var span31 = $('.span3').text();
            if (celtotal >= span31) {
                $('.span31').show();
                $('.span3').show();
                $('.bespan3').show();
            }
            else {
                $('.span31').hide();
                $('.span3').hide();
                $('.bespan3').hide();
            }
        }
        else {
            // $('.nextpaging1').hide();
            //  $('.nextpaging').hide();
        }


        var span11 = $('.span1').text();
        var span1 = $('.span11').text();

        var Searchkeyword = "";
        var Page = text;
        var RecsPerPage = document.getElementById('hdNoofPage').value;
        var RecordCount = document.getElementById('hdRecordCount').value;
        document.getElementById('hdGroupNo').value = Page;

        document.getElementById('HdselectnID').value = "";
        document.getElementById('hdNoofPage').value = RecsPerPage;

        var category = document.getElementById('hdCategory').value;
        var search = document.getElementById('hdsearch').value;
        var country = document.getElementById('hdcountry').value;
        var startprice = document.getElementById('hdstartprice').value;
        var endprice = document.getElementById('hdendprice').value;
        var sortby = document.getElementById('hdshorting').value;
        var shape = document.getElementById('hdshape').value;
        var one = parseInt(Page, 10);
        var two = parseInt(RecsPerPage, 10);
        var iDisplayStart = (one * two) - (RecsPerPage);
        var oddsize = document.getElementById('hdoddsize').value;
        document.getElementById('hdiDisplayStart').value = iDisplayStart;
        FillAllsearchImgjs(Page, iDisplayStart, RecsPerPage, category, country, sortby, search, shape, oddsize);
        return false;
    });
    $(document).on("click", ".pagination1 .paging1", function () {
        var text = $(this).text();
        var id = $(this).attr('id');

        $('.paging1').each(function () {
            $(this).parent('li').removeClass('active');
            $(this).removeClass('active');
        })
        $('.paging').each(function () {
            $(this).parent('li').removeClass('active');
            $(this).removeClass('active');
        })

        $(this).parent('li').addClass('active');
        $(this).addClass('active');

        var passid = id.replace('1', '');
        $('#' + passid).parent('li').addClass('active');

        var Searchkeyword = "";
        var Page = text;
        var RecsPerPage = document.getElementById('hdNoofPage').value;
        var RecordCount = document.getElementById('hdRecordCount').value;
        document.getElementById('hdGroupNo').value = Page;
        document.getElementById('HdselectnID').value = "";
        document.getElementById('hdNoofPage').value = RecsPerPage;
        var one = parseInt(Page, 10);
        var two = parseInt(RecsPerPage, 10);
        var iDisplayStart = (one * two) - (RecsPerPage);
        var sortby = document.getElementById('hdshorting').value;


        var noofimage = document.getElementById('hdNoofPage').value;


        //window.location.href = absurl + "?&pageid=" + Page + "&Noofimage=" + noofimage;
        window.location.href = absurl + "?&pageid=" + Page;
    });


}
function pagination() {
    $(document).on("click", ".pagination2 .prev", function (e) {
        e.preventDefault();

        var nopage = document.getElementById('hdNoofPage').value;
        var prevno = parseInt(document.getElementById('hdGroupNo').value, 10) - 1;

        if (prevno > 0) {
            if (e.handled == true) {
                return false;
            }
            e.handled = true;
            $('.paging1').each(function () {
                //$(this).removeClass('active');
                $(this).parent('li').removeClass('active');
                $(this).removeClass('active');
            })
            $('.paging').each(function () {
                $(this).removeClass('active');
                $(this).parent('li').removeClass('active');
            })

            var curr = document.getElementById('hdGroupNo').value;
            var accurtext = "";
            $('.paging').each(function () {
                if (curr == $(this).text()) {
                    accurtext = $(this).attr('id');
                }
            })
            accurtext = accurtext.replace(/Span/g, "");
            var gnumber = parseInt(document.getElementById('hdGroupNo').value, 10);
            var firstdisplay = parseFloat($('.span11').text());
            if (gnumber == firstdisplay) {

                var span1 = $('.span11').text();
                var newspan1 = parseInt(span1, 10) - 3;
                $('.span11').text(newspan1);
                $('.bespan1').text(newspan1);

                var span2 = $('.span21').text();
                var newspan2 = parseInt(span2, 10) - 3;
                $('.span21').text(newspan2);
                $('.bespan2').text(newspan2);

                var span3 = $('.span31').text();
                var newspan3 = parseInt(span3, 10) - 3;
                $('.span31').text(newspan3);
                $('.bespan3').text(newspan3);

                $('.span1').text(newspan1);
                $('.span2').text(newspan2);
                $('.span3').text(newspan3);

                $('.span101').addClass('active');
                $('.belowspan .bespan10').addClass('active');
            }
            else {
                var nextaccurtext = "";
                $('.paging').each(function () {

                    var pass = $(this).text();
                    // alert('pass' + pass);
                    if (pass > 10) {
                        pass = $(this).text().slice(1);
                    }
                    else {
                        pass = $(this).text();
                    }
                    if (prevno == pass) {
                        nextaccurtext = $(this).attr('id');
                    }

                    if (nextaccurtext == "") {
                        nextaccurtext = prevno;
                    }

                })
                //alert(nextaccurtext);
                try {

                    $('.' + nextaccurtext.toLowerCase()).addClass('active');
                    $('.belowspan  .be' + nextaccurtext.toLowerCase()).addClass('active');
                } catch (e) {

                }
            }
            var Searchkeyword = "";
            prevno = parseInt(document.getElementById('hdGroupNo').value, 10) - 1;
            document.getElementById('hdGroupNo').value = prevno;
            document.getElementById('HdselectnID').value = "";
            var Page = prevno;
            var RecsPerPage = document.getElementById('hdNoofPage').value;
            var RecordCount = document.getElementById('hdRecordCount').value;

            var one = parseInt(Page, 10);
            var two = parseInt(RecsPerPage, 10);
            var iDisplayStart = (one * two) - (RecsPerPage);
          
            var noofimage = document.getElementById('hdNoofPage').value;
            var sortby = document.getElementById('hdshorting').value;


            //window.location.href = absurl + "?&pageid=" + Page + "&Noofimage=" + noofimage;
            window.location.href = absurl + "?&pageid=" + Page;

        }
        return false;
    });
    $(document).on("click", ".pagination2 .next", function (e) {
        e.preventDefault();
        //  var cnt1 = $('#lbTotalImage1').text().replace(',', '');
        var cnt1 = $('#lbTotalImageTop').text().replace(',', '');
        var RecordCount = document.getElementById('hdRecordCount').value;
        var nopage = document.getElementById('hdNoofPage').value;
        var total = RecordCount / nopage;
        var celtotal = Math.ceil(total);

        var nextno = parseInt(document.getElementById('hdGroupNo').value, 10) + 1;
        //  alert("RecordCount>>" + RecordCount + ">>nopage>>" + nopage + ">>total>>" + total + ">>celtotal>>" + celtotal + ">>nextno>>" + nextno);
        if (nextno <= celtotal) {
            if (e.handled == true) {
                return false;
            }
            e.handled = true;
            $('.paging').each(function () { $(this).removeClass('active'); })
            var curr = document.getElementById('hdGroupNo').value;
            var accurtext = "";
            $('.paging1').each(function () {
                $(this).parent('li').removeClass('active');
                $(this).removeClass('active');
            })
            $('.paging').each(function () {
                $(this).parent('li').removeClass('active');
                $(this).removeClass('active');
            })
            var gnumber = parseInt(document.getElementById('hdGroupNo').value, 10);
            var lastdisplay = parseFloat($('.span31').text());
            // var currtext = $('#' + curr).id();
            accurtext = accurtext.replace(/Span/g, "");
            // alert("gnumber>>" + gnumber + ">>lastdisplay>>" + lastdisplay);
            if (gnumber == lastdisplay) {
                var span1 = $('.span11').text();
                var newspan1 = parseInt(span1, 10) + 3;
                $('.span11').text(newspan1);
                $('.bespan1').text(newspan1);

                var span2 = $('.span21').text();
                var newspan2 = parseInt(span2, 10) + 3;
                $('.span21').text(newspan2);
                $('.bespan2').text(newspan2);

                var span3 = $('.span31').text();
                var newspan3 = parseInt(span3, 10) + 3;
                $('.span31').text(newspan3);
                $('.bespan3').text(newspan3);

                $('.span1').text(newspan1);
                $('.span2').text(newspan2);
                $('.span3').text(newspan3);

                $('.span11').addClass('active');
                $('.belowspan .bespan1').addClass('active');
            }
            else {

                var nextaccurtext = "";
                $('.paging').each(function () {
                    var pass = $(this).text();
                    // alert('pass' + pass);
                    if (pass > 10) {
                        pass = $(this).text().slice(1);
                    }
                    else {
                        pass = $(this).text();
                    }
                    if (nextno == pass) {
                        nextaccurtext = $(this).attr('id');
                    }
                })
                //   alert('.' + nextaccurtext.toLowerCase());

                try {


                    $('.' + nextaccurtext.toLowerCase()).addClass('active');
                    $('.belowspan .be' + nextaccurtext.toLowerCase()).addClass('active');
                } catch (e) {

                }
            }
            nextno = parseInt(document.getElementById('hdGroupNo').value, 10) + 1;
            document.getElementById('hdGroupNo').value = nextno;
            document.getElementById('HdselectnID').value = "";
            var Searchkeyword = "";
            var Page = nextno;
            var RecsPerPage = document.getElementById('hdNoofPage').value;

            var one = parseInt(Page, 10);
            var two = parseInt(RecsPerPage, 10);
            var iDisplayStart = (one * two) - (RecsPerPage);            
            var noofimage = document.getElementById('hdNoofPage').value;
            var sortby = document.getElementById('hdshorting').value;

            //window.location.href = absurl + "?&pageid=" + Page + "&Noofimage=" + noofimage;
            window.location.href = absurl + "?&pageid=" + Page;
        }
    });
    $(document).on("click", ".pagination2 .prevpaging", function (e) {
        var text = $(this).text();
        $('.paging1').each(function () {
            $(this).parent('li').removeClass('active');
            $(this).removeClass('active');
        })
        $('.paging').each(function () {
            $(this).parent('li').removeClass('active');
            $(this).removeClass('active');
        })

        var span1 = $('.span11').text();
        var cnt1 = $('.TotalImage').text().replace(',', '');
        var RecordCount = parseInt(cnt1);
        var nopage = document.getElementById('hdNoofPage').value;
        var total = RecordCount / nopage;
        var celtotal = Math.ceil(total);
        //   alert("span1>> " + span1 + "cnt1>>" + cnt1 + "RecordCount>> " + RecordCount + "nopage>>" + nopage + "total>> " + total + "celtotal>> " + celtotal);
        var span1 = $('.span11').text();
        //  var newspan1 = parseInt(span1, 10) - 3;
        var newspan1 = 1;
        $('.span11').text(newspan1);
        $('.bespan1').text(newspan1);

        var span2 = $('.span21').text();
        //var newspan2 = parseInt(span2, 10) - 3;
        var newspan2 = 2;
        $('.span21').text(newspan2);
        $('.bespan2').text(newspan2);

        var span3 = $('.span31').text();
        // var newspan3 = parseInt(span3, 10) - 3;
        var newspan3 = 3;
        $('.span31').text(newspan3);
        $('.bespan3').text(newspan3);

        // alert(celtotal);
        if (celtotal >= span1) {
            $('.span11').show();
            $('.bespan1').show();
        }
        else {
            $('.span11').hide();
            $('.bespan1').hide();
        }
        var span2 = $('.span21').text();
        if (celtotal >= span2) {
            $('.span21').show();
            $('.bespan2').show();
        }
        else {
            $('.span21').hide();
            $('.bespan2').hide();
        }
        var span3 = $('.span31').text();
        if (celtotal >= span3) {
            $('.span31').show();
            $('.bespan3').show();
        }
        else {
            $('.span31').hide();
            $('.bespan3').hide();
        }

        if (celtotal >= span1) {
            $('.span11').show();
            $('.span1').show();
            $('.bespan1').show();

        }
        else {
            $('.span11').hide();
            $('.span1').hide();
            $('.bespan1').hide();
        }
        var span21 = $('.span2').text();
        if (celtotal >= span21) {
            $('.span21').show();
            $('.span2').show();
            $('.bespan2').show();
        }
        else {
            $('.span21').hide();
            $('.span2').hide();
            $('.bespan2').hide();
        }
        var span31 = $('.span3').text();
        if (celtotal >= span31) {
            $('.span31').show();
            $('.span3').show();
            $('.bespan3').show();
        }
        else {
            $('.span31').hide();
            $('.span3').hide();
            $('.bespan3').hide();
        }


        var span1 = $('.span11').text();
        var span1 = $('.span1').text();

   

       return false;
    });
    $(document).on("click", ".pagination2 .nextpaging", function (e) {
        var text = $(this).text();
        $('.paging1').each(function () {
            $(this).parent('li').removeClass('active');
            $(this).removeClass('active');
        })
        $('.paging').each(function () {
            $(this).parent('li').removeClass('active');
            $(this).removeClass('active');
        })

        var id = $(this).attr('id');

        var LastNumber = parseFloat($('.LastNumber').text());
        var lastdisplay = parseFloat($('.span3').text());
        var cnt1 = $('#lbTotalImage1').text().replace(',', '');
        var RecordCount = document.getElementById('hdRecordCount').value;
        var nopage = document.getElementById('hdNoofPage').value;
        var total = RecordCount / nopage;
        var celtotal = Math.ceil(total);

        //  alert("LastNumber>>" + LastNumber + ">>lastdisplay>>" + lastdisplay +">>celtotal>>" + celtotal);
        var span1 = $('.span1').text();
        var newspan1 = parseInt(LastNumber, 10) - 2;

        $('.span1').text(newspan1);
        $('.span11').text(newspan1);
        $('.bespan1').text(newspan1);

        var span2 = $('.span2').text();
        var newspan2 = parseInt(LastNumber, 10) - 1;
        $('.span2').text(newspan2);
        $('.span21').text(newspan2);
        $('.bespan2').text(newspan2);

        var span3 = $('.span3').text();
        var newspan3 = LastNumber;
        $('.span3').text(newspan3);
        $('.span31').text(newspan3);
        $('.bespan3').text(newspan3);

        if (celtotal >= span1) {

            $('.span11').show();
            $('.span1').show();
            $('.bespan1').show();

            var span2 = $('.span2').text();
            if (celtotal >= span2) {
                $('.span21').show();
                $('.span2').show();
                $('.bespan2').show();
            }
            else {
                $('.span2').hide();
                $('.span21').hide();
                $('.bespan2').hide();
            }
            var span3 = $('.span3').text();
            if (celtotal >= span3) {
                $('.span3').show();
                $('.span31').show();
                $('.bespan3').show();
            }
            else {
                $('.span3').hide();
                $('.span31').hide();
                $('.bespan3').hide();
            }

            if (celtotal >= span11) {
                $('.span11').show();
                $('.span1').show();
                $('.bespan1').show();

            }
            else {
                $('.span11').hide();
                $('.span1').hide();
                $('.bespan1').hide();
            }
            var span21 = $('.span2').text();
            if (celtotal >= span21) {
                $('.span21').show();
                $('.span2').show();
                $('.bespan2').show();
            }
            else {
                $('.span21').hide();
                $('.span2').hide();
                $('.bespan2').hide();
            }
            var span31 = $('.span3').text();
            if (celtotal >= span31) {
                $('.span31').show();
                $('.span3').show();
                $('.bespan3').show();
            }
            else {
                $('.span31').hide();
                $('.span3').hide();
                $('.bespan3').hide();
            }
        }
        else {
            // $('.nextpaging1').hide();
            //  $('.nextpaging').hide();
        }

        var span11 = $('.span1').text();
        var span1 = $('.span11').text();

    
        return false;
    });

    $(document).on("click", ".pagination2 .paging", function () {
        var text = $(this).text();
        var id = $(this).attr('id');
        $('.paging1').each(function () {
            $(this).parent('li').removeClass('active');
            $(this).removeClass('active');
        })
        $('.paging').each(function () {
            $(this).parent('li').removeClass('active');
            $(this).removeClass('active');
        })

        $(this).parent('li').addClass('active');
        $(this).addClass('active');

        var passid = id.replace('1', '');
        $('#' + passid).parent('li').addClass('active');

        var Searchkeyword = "";
        
        var Page = text;
        var RecsPerPage = document.getElementById('hdNoofPage').value;
        var RecordCount = document.getElementById('hdRecordCount').value;
        document.getElementById('hdGroupNo').value = Page;

        document.getElementById('HdselectnID').value = "";
        document.getElementById('hdNoofPage').value = RecsPerPage;

        var one = parseInt(Page, 10);
        var two = parseInt(RecsPerPage, 10);
        var iDisplayStart = (one * two) - (RecsPerPage);

        var noofimage = document.getElementById('hdNoofPage').value;
        var sortby = document.getElementById('hdshorting').value;
       
        //  window.location.href = absurl + "?&pageid=" + Page + "&Noofimage=" + noofimage;
        window.location.href = absurl + "?&pageid=" + Page;

        return false;
    });

}