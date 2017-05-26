
$(function($) {

    
    var time = new Date();
    var target_time = new Date(time.getFullYear(), time.getMonth(), time.getDate());
    target_time = target_time.valueOf()+1000*60*60*24;
    var tomorrow = new Date(target_time);
    var months = ['января','февраля','марта','апреля','мая','июня','июля','августа','сентября','октября','ноября','декабря'];
    $('.end-of-action-date').html(tomorrow.getDate()+" "+months[tomorrow.getMonth()]);
    // $('#timer2 .text').html("Предложение действительно до "+tomorrow.getDate()+" "+months[time.getMonth()]);

});

// comagic form start
/*
$( ".comagic_phone" ).on( "click", function() {
	var newComagicPhone = $('.comagic_phone').html();		  
	$( ".comagic_phone" ).parent("a").attr( "href", "tel:"+newComagicPhone+"" );
});


// add new tel in href after replace
function comagicPhoneReplaceInHref() {
  var newComagicPhone = $('.comagic_phone').html();		  
  $( ".comagic_phone" ).parent("a").attr( "href", "tel:"+newComagicPhone+"" );
}
setTimeout(comagicPhoneReplaceInHref, 2000);
*/



//template_ceo
$('#b_contact_ceo_but260').click(function()
{	
	var template_name=$('#form_text_12').val();
	var template_tel=$('#form_text_13').val();
	if (template_tel) {
		$("#loader-wrapper").css("display","block");
		if (comagicYesOrNo == "yes") {
			Comagic.push(['addOfflineRequest', {name: template_name,  phone: template_tel, message: 'pismo_directoru'}]);
		}					
		setTimeout(function () {
			jQuery('.b_contact_ceo_form form').submit();
		}, 1000); // время в мс
	}
	else {
		$('#form_text_13').focus();
	}
});	

$('#b_contact_ceo_but').click(function()
{	
	var template_name=$('#form_text_12').val();
	var template_tel=$('#form_text_13').val();
	if (template_tel) {
		$("#loader-wrapper").css("display","block");
		if (comagicYesOrNo == "yes") {
			Comagic.push(['addOfflineRequest', {name: template_name,  phone: template_tel, message: 'pismo_directoru'}]);
		}			
		setTimeout(function () {
			jQuery('.b_contact_ceo_form form').submit();
		}, 1000); // время в мс
	}
	else {
		$('#form_text_13').focus();
	}
});


//template_kupitdeshevle	
$('#modal_hochu_but').click(function()
{	
	var template_name=$('#form_text_1').val();
	var template_tel=$('#form_text_2').val();
	if (template_tel) {
		$("#loader-wrapper").css("display","block");
		if (comagicYesOrNo == "yes") {
			Comagic.push(['addOfflineRequest', {name: template_name,  phone: template_tel, message: 'kupit_deshevle'}]);
		}			
		setTimeout(function () {
			jQuery('.modal_man_form form').submit();
		}, 1000); // время в мс
	}
	else {
		$('#form_text_2').focus();
	}
});	


//template_otdelka
$('#template_otdelka_but').click(function()
{	
	var template_tel=$('#form_text_20').val();
	if (template_tel) {
		$("#loader-wrapper").css("display","block");
		if (comagicYesOrNo == "yes") {
			Comagic.push(['addOfflineRequest', {phone: template_tel, message: 'otdelka'}]);
		}			
		setTimeout(function () {
			jQuery('.calc_otdelka__right_2 form').submit();
		}, 1000); // время в мс
	}
	else {
		$('#form_text_20').focus();
	}
});

$('#form_text_20').keypress(function(e) {
    if(e.which == 13) {  //Enter is key 13	
		var template_tel=$('#form_text_20').val();
		if (template_tel) {
			$("#loader-wrapper").css("display","block");
			if (comagicYesOrNo == "yes") {
				Comagic.push(['addOfflineRequest', {phone: template_tel, message: 'otdelka'}]);
			}			
			setTimeout(function () {
				jQuery('.calc_otdelka__right_2 form').submit();
			}, 1000); // время в мс
		}
		else {
			$('#form_text_20').focus();
		}
		return false;
	}
});

$('#template_otdelka_but260').click(function()
{	
	var template_tel=$('#form_text_20').val();
	if (template_tel) {
		$("#loader-wrapper").css("display","block");
		if (comagicYesOrNo == "yes") {
			Comagic.push(['addOfflineRequest', {phone: template_tel, message: 'otdelka'}]);
		}			
		setTimeout(function () {
			jQuery('.calc_otdelka__right_2 form').submit();
		}, 1000); // время в мс
	}
	else {
		$('#form_text_20').focus();
	}
});	


//template_perezv5min	
$('#template_perezv5min').click(function()
{	
	var template_tel=$('#form_text_10').val();
	if (template_tel) {
		$("#loader-wrapper").css("display","block");
		if (comagicYesOrNo == "yes") {
			Comagic.push(['addOfflineRequest', {phone: template_tel, message: 'perezvonim_za_5min'}]);
		}			
		setTimeout(function () {
			jQuery('.es17_blockbg form').submit();
		}, 1000); // время в мс
	}
	else {
		$('#form_text_10').focus();
	}
});

$('#form_text_10').keypress(function(e) {
    if(e.which == 13) {  //Enter is key 13	
		var template_tel=$('#form_text_10').val();
		if (template_tel) {
			$("#loader-wrapper").css("display","block");
			if (comagicYesOrNo == "yes") {
				Comagic.push(['addOfflineRequest', {phone: template_tel, message: 'perezvonim_za_5min'}]);
			}			
			setTimeout(function () {
				jQuery('.es17_blockbg form').submit();
			}, 1000); // время в мс
		}
		else {
			$('#form_text_10').focus();
		}
		return false;
	}
});

$('#template_perezv5min260').click(function()
{	
	var template_tel=$('#form_text_10').val();
	if (template_tel) {
		$("#loader-wrapper").css("display","block");
		if (comagicYesOrNo == "yes") {
			Comagic.push(['addOfflineRequest', {phone: template_tel, message: 'perezvonim_za_5min'}]);
		}			
		setTimeout(function () {
			jQuery('.es17_blockbg form').submit();
		}, 1000); // время в мс
	}
	else {
		$('#form_text_10').focus();
	}
});


//template_poeskizu	
$('#template_poeskizu_but').click(function()
{	
	var template_name=$('#form_text_4').val();
	var template_tel=$('#form_text_3').val();
	if (template_tel) {
		$("#loader-wrapper").css("display","block");
		if (comagicYesOrNo == "yes") {
			Comagic.push(['addOfflineRequest', {name: template_name,  phone: template_tel, message: 'rasschitaem_po_eskizu'}]);
		}			
		setTimeout(function () {
			jQuery('.es4_bg form').submit();
		}, 1000); // время в мс
	}
	else {
		$('#form_text_3').focus();
	}
});	


//template_smsskidka	
$('#template_smsskidka_but').click(function()
{	
	var template_tel=$('#form_text_11').val();
	if (template_tel) {
		$("#loader-wrapper").css("display","block");
		if (comagicYesOrNo == "yes") {
			Comagic.push(['addOfflineRequest', {phone: template_tel, message: 'sms_skidka'}]);
		}		
		setTimeout(function () {
			jQuery('.b-sms_bg form').submit();
		}, 1000); // время в мс
	}
	else {
		$('#form_text_11').focus();
	}
});	

$('#form_text_11').keypress(function(e){
    if(e.which == 13){  //Enter is key 13
        var template_tel=$('#form_text_11').val();
		if (template_tel) {
			$("#loader-wrapper").css("display","block");
			if (comagicYesOrNo == "yes") {
				Comagic.push(['addOfflineRequest', {phone: template_tel, message: 'sms_skidka'}]);
			}		
			setTimeout(function () {
				jQuery('.b-sms_bg form').submit();
			}, 1000); // время в мс
		}
		else {
			$('#form_text_11').focus();
		}
		
		return false;
    }
});




//template_za5min	
$('#template_za5min_but').click(function()
{	
	var template_name=$('#form_text_6').val();
	var template_tel=$('#form_text_7').val();
	if (template_tel) {
		$("#loader-wrapper").css("display","block");
		if (comagicYesOrNo == "yes") {
			Comagic.push(['addOfflineRequest', {name: template_name,  phone: template_tel, message: 'raschet_za_5_min'}]);
		}			
		setTimeout(function () {
			jQuery('.es8_form form').submit();
		}, 1000); // время в мс
	}
	else {
		$('#form_text_7').focus();
	}
});	

$('#template_za5min_but260').click(function()
{	
	var template_name=$('#form_text_6').val();
	var template_tel=$('#form_text_7').val();
	if (template_tel) {
		$("#loader-wrapper").css("display","block");
		if (comagicYesOrNo == "yes") {
			Comagic.push(['addOfflineRequest', {name: template_name,  phone: template_tel, message: 'raschet_za_5_min'}]);
		}			
		setTimeout(function () {
			jQuery('.es8_form form').submit();
		}, 1000); // время в мс
	}
	else {
		$('#form_text_7').focus();
	}
});	


//template_zafixtsenu	
$('#template_zafixtsenu_but').click(function()
{	
	var template_tel=$('#form_text_9').val();
	if (template_tel) {
		$("#loader-wrapper").css("display","block");
		if (comagicYesOrNo == "yes") {
			Comagic.push(['addOfflineRequest', {phone: template_tel, message: 'zafiksirovat_tsenu'}]);
		}			
		setTimeout(function () {
			jQuery('.es13_bg form').submit();
		}, 1000); // время в мс
	}
	else {
		$('#form_text_9').focus();
	}
});

$('#form_text_9').keypress(function(e){
    if(e.which == 13){  //Enter is key 13	
		var template_tel=$('#form_text_9').val();
		if (template_tel) {
			$("#loader-wrapper").css("display","block");
			if (comagicYesOrNo == "yes") {
				Comagic.push(['addOfflineRequest', {phone: template_tel, message: 'zafiksirovat_tsenu'}]);
			}			
			setTimeout(function () {
				jQuery('.es13_bg form').submit();
			}, 1000); // время в мс
		}
		else {
			$('#form_text_9').focus();
		}
		return false;
	}
});

$('#template_zafixtsenu_but260').click(function()
{	
	var template_tel=$('#form_text_9').val();
	if (template_tel) {
		$("#loader-wrapper").css("display","block");
		if (comagicYesOrNo == "yes") {
			Comagic.push(['addOfflineRequest', {phone: template_tel, message: 'zafiksirovat_tsenu'}]);
		}			
		setTimeout(function () {
			jQuery('.es13_bg form').submit();
		}, 1000); // время в мс
	}
	else {
		$('#form_text_9').focus();
	}
});	


//template_zakaz	
$('#template_zakaz_but').click(function()
{	
	var template_name=$('#form_text_16').val();
	var template_tel=$('#form_text_17').val();
	if (template_tel) {
		$("#loader-wrapper").css("display","block");
		if (comagicYesOrNo == "yes") {
			Comagic.push(['addOfflineRequest', {name: template_name,  phone: template_tel, message: 'zakaz_shop'}]);
		}			
		setTimeout(function () {
			jQuery('.b_market_item_form_bg form').submit();
		}, 1000); // время в мс
	}
	else {
		$('#form_text_17').focus();
	}
});

$('#template_zakaz_but260').click(function()
{	
	var template_name=$('#form_text_16').val();
	var template_tel=$('#form_text_17').val();
	if (template_tel) {
		$("#loader-wrapper").css("display","block");
		if (comagicYesOrNo == "yes") {
			Comagic.push(['addOfflineRequest', {name: template_name,  phone: template_tel, message: 'zakaz_shop'}]);
		}			
		setTimeout(function () {
			jQuery('.b_market_item_form_bg form').submit();
		}, 1000); // время в мс
	}
	else {
		$('#form_text_17').focus();
	}
});


//template_zhdu	
$('#template_zhdu_but').click(function()
{	
	var template_tel=$('#form_text_15').val();
	if (template_tel) {
		$("#loader-wrapper").css("display","block");
		if (comagicYesOrNo == "yes") {
			Comagic.push(['addOfflineRequest', {phone: template_tel, message: 'zhdu_zvonok'}]);
		}			
		setTimeout(function () {
			jQuery('.b_contact_zhdu_bg form').submit();
		}, 1000); // время в мс
	}
	else {
		$('#form_text_15').focus();
	}
});

$('#form_text_15').keypress(function(e) {
    if(e.which == 13) {  //Enter is key 13	
		var template_tel=$('#form_text_15').val();
		if (template_tel) {
			$("#loader-wrapper").css("display","block");
			if (comagicYesOrNo == "yes") {
				Comagic.push(['addOfflineRequest', {phone: template_tel, message: 'zhdu_zvonok'}]);
			}			
			setTimeout(function () {
				jQuery('.b_contact_zhdu_bg form').submit();
			}, 1000); // время в мс
		}
		else {
			$('#form_text_15').focus();
		}
		return false;
	}
});


//template_happy
$('#happy_but').click(function()
{	
	var template_name=$('#form_text_21').val();
	var template_tel=$('#form_text_22').val();
	if (template_tel) {
		$("#loader-wrapper").css("display","block");
		if (comagicYesOrNo == "yes") {
			Comagic.push(['addOfflineRequest', {name: template_name,  phone: template_tel, message: 'pozdravlyaem'}]);
		}			
		setTimeout(function () {
			jQuery('.modal_form_happy form').submit();
		}, 1000); // время в мс
	}
	else {
		$('#form_text_22').focus();
	}
});



//template_zamer	
$('#template_zamer_but').click(function()
{	
	var template_tel=$('#form_text_25').val();
	if (template_tel) {
		$("#loader-wrapper").css("display","block");
		if (comagicYesOrNo == "yes") {
			Comagic.push(['addOfflineRequest', {phone: template_tel, message: 'zapis_na_zamer'}]);
		}			
		setTimeout(function () {
			jQuery('.butzamer form').submit();
		}, 1000); // время в мс
	}
	else {
		$('#form_text_25').focus();
	}
});	

$('#form_text_25').keypress(function(e){
    if(e.which == 13) {  //Enter is key 13
		var template_tel=$('#form_text_25').val();
		if (template_tel) {
			$("#loader-wrapper").css("display","block");
			if (comagicYesOrNo == "yes") {
				Comagic.push(['addOfflineRequest', {phone: template_tel, message: 'zapis_na_zamer'}]);
			}			
			setTimeout(function () {
				jQuery('.butzamer form').submit();
			}, 1000); // время в мс
		}
		else {
			$('#form_text_25').focus();
		}
		return false;
	}
});


$('#template_zamer_but_260').click(function()
{	
	var template_tel=$('#form_text_25').val();
	if (template_tel) {
		$("#loader-wrapper").css("display","block");
		if (comagicYesOrNo == "yes") {
			Comagic.push(['addOfflineRequest', {phone: template_tel, message: 'zapis_na_zamer'}]);
		}		
		setTimeout(function () {
			jQuery('.butzamer form').submit();
		}, 1000); // время в мс
	}
	else {
		$('#form_text_25').focus();
	}
});	
	


//template_ceo df
/*
$('#template_otzivy_but_260').click(function()
{	
	var template_name=$('#form_text_27').val();
	
		$("#loader-wrapper").css("display","block");
		if (comagicYesOrNo == "yes") {
			Comagic.push(['addOfflineRequest', {name: template_name, message: 'new_otzyv'}]);
		}			
		setTimeout(function () {
			jQuery('.es1_otzivy__form_bg form').submit();
		}, 1000); // время в мс
});	

$('#template_otzivy_but').click(function() s
{	
	var template_name=$('#form_text_27').val();
	
		$("#loader-wrapper").css("display","block");
		if (comagicYesOrNo == "yes") {
			Comagic.push(['addOfflineRequest', {name: template_name, message: 'new_otzyv'}]);
		}			
		setTimeout(function () {
			jQuery('.es1_otzivy__form_bg form').submit();
		}, 1000); // время в мс
	
});
*/



//template_gift	
$('#gift_but').click(function()
{	
	var template_tel=$('#form_text_23').val();
	if (template_tel) {
		$("#loader-wrapper").css("display","block");
		if (comagicYesOrNo == "yes") {
			Comagic.push(['addOfflineRequest', {phone: template_tel, message: 'ne_uhodite_bez_podarka'}]);
		}			
		setTimeout(function () {
			jQuery('.modal_form_gift form').submit();
		}, 1000); // время в мс
	}
	else {
		$('#form_text_23').focus();
	}
});	

$('#form_text_23').keypress(function(e) {
    if(e.which == 13) {  //Enter is key 13	
		var template_tel=$('#form_text_23').val();
		if (template_tel) {
			$("#loader-wrapper").css("display","block");
			if (comagicYesOrNo == "yes") {
				Comagic.push(['addOfflineRequest', {phone: template_tel, message: 'ne_uhodite_bez_podarka'}]);
			}			
			setTimeout(function () {
				jQuery('.modal_form_gift form').submit();
			}, 1000); // время в мс
		}
		else {
			$('#form_text_23').focus();
		}
		return false;
	}
});

$('#gift_but260').click(function()
{	
	var template_tel=$('#form_text_23').val();
	if (template_tel) {
		$("#loader-wrapper").css("display","block");
		if (comagicYesOrNo == "yes") {
			Comagic.push(['addOfflineRequest', {phone: template_tel, message: 'ne_uhodite_bez_podarka'}]);	
		}
		setTimeout(function () {
			jQuery('.modal_form_gift form').submit();
		}, 1000); // время в мс
	}
	else {
		$('#form_text_23').focus();
	}
});	
	



// comagic form end	