$(document).ready(function(){
	
	$(".addtocart").click(function(){
		$(this).closest("form").submit();
	});
	
	$("#checkoutForm").validate();
	
	$(".chosen-select").chosen();
	
	$('#saleCountdown').mbComingsoon({
		
                expiryDate: new Date($('#saleCountdown').data("year"), $('#saleCountdown').data("month"), $('#saleCountdown').data("day")),
                speed: 100,
                callBack: function () {
                    var today = new Date();
                    var tomorrow = new Date(today.getFullYear(), today.getMonth(), today.getDate() + 3);
                    $('#myCounter').mbComingsoon({expiryDate: tomorrow})
                },
            });
});