$(document).ready(function () {
    console.log("________servicejs");

    $("button.navbar-toggle").click(function () {
        $("#myNavbar").toggle();
    });

    //validateContact("#contact-form-par");
    owlCarouselInit();
    $(".filter-box input[name]").click(function () {
        postAjaxforFilterDevice();
        postAjaxforFilterResult();
    });



});


function owlCarouselInit() {
    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        autoplay: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            1200: {
                items: 2
            }
        },
        autoWidth: true,
    });
    console.log("___carousel");

}

function postAjaxforFilterDevice() {
    collectData();
    POSTAjax(
        '/aj/Home/FilterDeviceForBox',
        query,
        function () {
            //console.log(query);
        },
        function (res) {
            $(".filter-box").find(".filter-devices").html(res);
            $("input#searchdevices").keyup(function () {
                var value = $(this).val();
                $(".filter-device-box").find("li.label-box-device").each(function () {
                    //var value2 = $(this).children().last().val();
                    var valueLabel = $(this).children().last().val();
                    //debugger;
                    //console.log(valueLabel);
                    var pattern = new RegExp(value, "gmi");
                    if ($(this).children().last().val().search(pattern) !== -1) {
                        $(this).css("display", "list-item");

                    } else {
                        $(this).css("display", "none")
                    }
                });
                //console.log(value);
            });
            $("#filter-devices-form input[name]").click(function () {
                postAjaxforFilterResult();
            })
        },
        function () {
            alert("Error postAjaxforFilterDevice");
        },
        true
    );
}

function postAjaxforFilterResult() {
    collectData();
    POSTAjax(
        '/aj/Home/FilterBox',
        query,
        function () {
            console.log(query);
        },
        function (res) {
            $(".filter-result").html(res);
        },
        function () {
            alert("Error postAjaxforFilterResult");
        },
        true
    );
}

function collectData() {
    console.log("___collectdata");
    query.strServices = $("#filter-services-form input[name='service']:checked").val();
    query.strManufacture = $("#filter-manufactures-form input[name='manufacture']:checked").val();
    query.strDevices = $("#filter-devices-form input[name='devices']:checked").val();
    console.log(query);

}



function POSTAjax(url, dat, befHandle, sucHandle, errHandle, asy) {
    $.ajax({
        async: asy,
        url: url,
        data: dat,
        type: 'POST',
        cache: false,
        beforeSend: function () {
            befHandle();
        },
        success: function (e) {
            sucHandle(e);
        },
        error: function () {
            errHandle();
        }
    });
}