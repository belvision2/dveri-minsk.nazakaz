
; /* Start:"a:4:{s:4:"full";s:95:"/bitrix/templates/main/components/bitrix/form.result.new/call_zamershik/script.js?1472011932450";s:6:"source";s:81:"/bitrix/templates/main/components/bitrix/form.result.new/call_zamershik/script.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
$(document).ready(function(){
    $("form[name='CALL_ZAMERSHIK']").submit(function(event){
        //console.log("click on submit");
        $("form[name='CALL_ZAMERSHIK'] input").each(function(){
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
;
; /* Start:"a:4:{s:4:"full";s:96:"/bitrix/templates/main/components/bitrix/form.result.new/pismo_direktoru/script.js?1472012317407";s:6:"source";s:82:"/bitrix/templates/main/components/bitrix/form.result.new/pismo_direktoru/script.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
$(document).ready(function(){
    $("form[name='MAIL_TO_DIRECTOR']").submit(function(event){
        $("form[name='MAIL_TO_DIRECTOR'] input").each(function(){
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
;; /* /bitrix/templates/main/components/bitrix/form.result.new/call_zamershik/script.js?1472011932450*/
; /* /bitrix/templates/main/components/bitrix/form.result.new/pismo_direktoru/script.js?1472012317407*/
