$(document).ready(function(){
	
var baseURL ="http://www.example.com/index.php/";
	
	$("#product_add").validate(
	{
		ignore:".ignore"
	});
	
	$("#adminOrderAddFormId").validate();	
	
 $('#order_product_copy').click(function() {
	var $temp = $("<input>");
    $("body").append($temp);	
    $temp.val($("#ProductId option:selected").text()).focus().select();	
    document.execCommand("copy");
    $temp.remove();
	
	alert("copied");
 });
	
	
	$("#checkAllOrders").click(function(){
		
		if($(this).is(":checked"))
		{
			$(".chkMoveOrder").prop("checked",true);
		}
		else{
			$(".chkMoveOrder").prop("checked",false);
		}
		
			
		
	});
	
	$(".galleryimage-edit a").click(function(){
		var galleryId = $(this).prop("id");
		
		var existingIds = $("#galleryIdsToRemove").val();
		
		$("#galleryIdsToRemove").val(existingIds+","+galleryId);
		
		
		$(this).siblings("img").remove();
		$(this).remove();
		alert($("#galleryIdsToRemove").val());
	});
	
	
	$(".ordernotes-form").click(function(){
	 ($(this).siblings("div")).toggle({duration:500,easing:'swing'});
	 //$(".OrderNoteMessage").empty();
	 
	 var orderId = $(this).prop("id");	 
	 $("#OrderNoteMessage_"+orderId+"").html("");
	 
	});
	
	$(".OrderNoteSubmitButton").click(function(){
		
		var orderId = $(this).siblings(".ordernote_orderId").val();
		
		
		
		//alert(orderId);
		if($("#OrderNotesId_"+orderId+"").val()=="")
		{
			alert("cannot save empty notes");
		}
		else{
		
		var btn = $(this);
		btn.val("saving..");
		
		$.ajax({
			type:'post',
			url:baseURL+"/admin/order/addordernotes",
			data:$("#addnoteform_"+orderId+"").serialize(),
			success:function(data){
				btn.val("Add Comments");
				
				if(data=="ok")
				{
					$("#OrderNoteMessage_"+orderId+"").html("<div class='alert-success'>Saved Successfully</div>");	
					
				}
				else{
					$("#OrderNoteMessage_"+orderId+"").html("<div class='alert-danger'>Error Saving</div>");	
				}
				
			},
			error: function(jqXHR, textStatus, errorThrown) {
								btn.val("Add Comments");
								$("#OrderNoteMessage_"+orderId+"").html("<div class='alert-danger'>Error Saving</div>");
								alert(jqXHR.responseText);
								
			}
		});
		}
	});
	
		$("#updateOrderStatus").submit(function(){
			var ids;
			$(".chkMoveOrder").each(function(index){
				if($(this).is(":checked"))
				{
					var id=$(this).prop("id");
					ids=ids+","+id;					
				}
			});
			$("#orderIdsToMove").val(ids);			
		});
		
		
		$("#printOrders").submit(function(){
			var ids;
			$(".chkMoveOrder").each(function(index){
				if($(this).is(":checked"))
				{
					var id=$(this).prop("id");
					ids=ids+","+id;					
				}
			});
			$("#orderIdsToPrint").val(ids);			
		});
	
	
		$(".chosen-select").chosen();
	
	
	var selectedCity = $('#SelectedCityOrderEdit').val();
	
		$('#CityOrderEdit option[value='+selectedCity+']').prop('selected',true);
		$("#CityOrderEdit").trigger("chosen:updated");
	
	$('a[data-confirm]').click(function (ev) {
        var href = $(this).attr('href');

        if (!$('#dataConfirmModal').length) {
            $('body').append('<div id="dataConfirmModal" class="modal modal-danger" role="dialog" aria-labelledby="dataConfirmLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true"><span aria-hidden="true">�</span></button><h3 id="dataConfirmLabel">Please Confirm</h3></div><div class="modal-body"></div><div class="modal-footer"><button class="btn btn-outline pull-left" data-dismiss="modal" aria-hidden="true">Cancel</button><a class="btn btn-outline" id="dataConfirmOK">OK</a></div></div></div></div>');
        }
        $('#dataConfirmModal').find('.modal-body').text($(this).attr('data-confirm'));
        $('#dataConfirmOK').attr('href', href);
        $('#dataConfirmModal').modal({ show: true });
        return false;
    });
});