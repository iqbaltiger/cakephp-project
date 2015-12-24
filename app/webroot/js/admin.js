$(function() {
	var baseurl = 'http://localhost/rupayan/';
	$('#AuthorizedMenuDominionId').on('change',function(){
		url = baseurl+'/authorizedmenus/changeprocessselectoption';
		var value = $(this).val();
		$.ajax({
			type : 'POST',
			url : url,		
			data: {dominion_id:value},
			success : function(data) {
				if(data){
					$('#AuthorizedMenuProcessId').html(data);			
				}
			}
		});
	});
});


$(document).on("click", ".ajax_page", function(event) {	

 	if ($(this).attr('href') == undefined) {
 		url = $(this).find('a').attr('href');
 	} else {
 		url = $(this).attr('href');
 	}

 	var is_modal = false;
 	if ($(this).data('target') != undefined) {
 		var modal_id = $(this).data('target');
 		is_modal = true;
 		var loading_html = '<div class="center"><i class="fa fa-spinner fa-spin fa-4x"></i><p class="text-warning">Loading...</p></div>';
 		$('#modal').find('.modal-content').html(loading_html);
 	} else {
 		$(".overlay").show();
 	}

 	$.ajax({
 		type : 'GET',
 		url : url,
 		success : function(data) {
 			if (is_modal) {
 				$('#modal').find('.modal-content').html(data);

 			} else {
 				$("#content .vbox").html(data);
 				changeUrlWithoutRefresh('Title',url);
 			}

			//hide flashMessage
			$(".overlay, #flashMessage").hide();
		}
	});
 	event.preventDefault();
 });