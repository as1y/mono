
var arrBrands = [];
var arrType = "";
var arrCategory = "";

function ShowFilter() {

    history.pushState({}, '', "?mobile=true");
    $("#hideF").show(300);
    $("#showF").hide(300);
    $("#GroupContainer").removeClass('d-none d-sm-block');
    return true;

}

function HideFilter() {
    history.pushState({}, '', "?mobile=false");
    $("#showF").show(300);
    $("#hideF").hide(300);
    $("#GroupContainer").addClass('d-none d-sm-block');
    return true;

}

function subscribecode(idcoupon) {

    let email = $('[name=emailcode]').val();

    str =  '&email=' + email + '&type=send' + '&idcoupon=' + idcoupon;

    $.ajax(
        {
            url : /subscribe/,
            type: 'POST',
            data: str,
            cache: false,
            success: function(subs ) {

                $('#modalbody').empty();
                $('#modalbody').append('<h5>Промокод отправлен на e-mail!</h5>');

                // $('#modalbody').append(subs);



            }
        }
    );





}

function subscribefooter() {

    let email = $('[name=email]').val();
    str =  '&email=' + email + '&type=footer';

    $.ajax(
        {
            url : /subscribe/,
            type: 'POST',
            data: str,
            cache: false,
            success: function(subs ) {

                $('[name=subscribemodal]').modal('show');
                $('[name=email]').val("");

            }
        }
    );


}

function ChangeFilter() {
    str = getFilterParamsParams();

    if (arrType != ""){
        updateFilter(str);
        return true;
    }


    getparam = getUrlParams();

    if (getparam.mobile == "undefined") getparam.mobile = false;

    if (arrBrands.length == 0)   window.location.href = '/promocode/vse/' + arrCategory + '?mobile=' + getparam.mobile;
    if (arrBrands.length == 1) window.location.href = '/promocode/' + arrBrands + '/' + arrCategory+ '?mobile=' + getparam.mobile;
    if (arrBrands.length > 1) updateFilter(str);

    return true;

}

function changePageSearch(page) {

    let query = $("#search").val();

}


function changePage(page){

    str = getFilterParamsParams ();


    $('#CouponContainer').empty();

    $.ajax(
        {
            url : document.location.pathname,
            type: 'POST',
            data: str + '&page=' + page,
            cache: false,
            success: function( coupons ) {

                $('#CouponContainer').append(coupons);
                window.scrollTo(0, 0);


            }
        }
    );


}

function clck(couponid)
{
    // // Устанавливаем промокод в сессиию
    document.cookie = "runmodal="+couponid;
    window.open("#");
}

function updateFilter(str) {

    function funcBeforeFilter(){
        $("#preloaderfilter").removeClass('d-none');
    }

    function funcBeforeResult(){
        $("#preloaderresult").removeClass('d-none');
    }


    $('#CouponContainer').empty();

    $.ajax(
        {
            url : document.location.pathname,
            type: 'POST',
            data: str,
            beforeSend: funcBeforeResult(),
            cache: false,
            success: function( coupons ) {

                $("#preloaderresult").addClass('d-none');
                $('#CouponContainer').show();
                $('#CouponContainer').append(coupons);


            }
        }
    );

    $('#GroupContainer').hide();
    $('#GroupContainer').empty();
    $.ajax(
        {
            url : document.location.pathname,
            type: 'POST',
            data: str + '&arrCount=1',
            beforeSend: funcBeforeFilter,
            cache: false,
            success: function( filter ) {

                $("#preloaderfilter").addClass('d-none');
                $('#GroupContainer').show();
                $('#GroupContainer').append(filter);


            }
        }
    );



}

function getFilterParamsParams() {
    arrBrands = [];
    arrType = "";
    arrCategory = "";


    $("input[name='companies']:checked").each(function(){ arrBrands.push($(this).prop('title')); });
    arrType = $('select[name=type]').val();
    arrCategory = $('select[name=category]').val();
    str =  '&arrBrands=' + arrBrands + '&arrType=' + arrType + '&arrCategory=' + arrCategory;
    return str;

}

function getUrlParams(url = location.search){
    var regex = /[?&]([^=#]+)=([^&#]*)/g, params = {}, match;
    while(match = regex.exec(url)) {
        params[match[1]] = match[2];
    }
    return params;
}





