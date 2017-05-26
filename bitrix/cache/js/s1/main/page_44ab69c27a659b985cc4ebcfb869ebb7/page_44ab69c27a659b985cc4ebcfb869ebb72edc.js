
; /* Start:"a:4:{s:4:"full";s:93:"/bitrix/templates/main/components/bitrix/form.result.new/send.review/script.js?14720207501650";s:6:"source";s:78:"/bitrix/templates/main/components/bitrix/form.result.new/send.review/script.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
$(document).ready(function(){
    $(".ratingStar").click(function(){
        var $currentRaiting = $(this).attr("data-raiting");
        $(".ratingStar").each(function(){
            if ($(this).attr("data-raiting") <= $currentRaiting){
                $(this).attr("src","../img/form_star_act.png");
            }else {
                $(this).attr("src","../img/form_star.png");
            }
        });
        $("#reviewRaiting").val($currentRaiting);
    });

    $(".es1_otzivy__form_bg__rek > img").click(function(){
        if ($("#reviewRecomendate").val() > 0){
            $("#reviewRecomendate").val(0);
            $(this).attr("src","../img/rek.png");
        }else {
            $("#reviewRecomendate").val(1);
            $(this).attr("src","../img/rek_act.png");
        }

    });


    $("form[name='send_review']").submit(function(event){
        $("form[name='send_review'] input, form[name='send_review'] textarea").each(function(){
            if ($(this).attr("data-validation") == "required"){
                if (!$(this).val()){
                    $(this).addClass("ERROR");
                    event.preventDefault();
                }else {
                    $(this).removeClass("ERROR");
                }
            }
        });
    });


});

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#blphoto')
                .attr('src', e.target.result).addClass("active");
            $('.es1_otzivy__form_bg__form_photo').css("background","none");
        };
        reader.readAsDataURL(input.files[0]);
    }
}
/* End */
;; /* /bitrix/templates/main/components/bitrix/form.result.new/send.review/script.js?14720207501650*/
