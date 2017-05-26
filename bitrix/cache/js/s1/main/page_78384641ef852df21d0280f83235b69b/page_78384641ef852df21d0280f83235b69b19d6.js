
; /* Start:"a:4:{s:4:"full";s:91:"/bitrix/templates/main/components/bitrix/form.result.new/send_order/script.js?1472011935438";s:6:"source";s:77:"/bitrix/templates/main/components/bitrix/form.result.new/send_order/script.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
$(document).ready(function(){
    $("form[name='SEND_ORDER']").submit(function(event){
        //console.log("click on submit");
        $("form[name='SEND_ORDER'] input").each(function(){
            if ($(this).attr("data-validation") == "required"){
                if (!$(this).val()){
                    $(this).focus();
                    event.preventDefault();
                }
            }
        });
    });
});
/* End */
;; /* /bitrix/templates/main/components/bitrix/form.result.new/send_order/script.js?1472011935438*/
