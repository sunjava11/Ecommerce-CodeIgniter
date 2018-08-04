$(document).ready(function(){
	
	$(".addtocart").click(function(){
		$(this).closest("form").submit();
	});
	
	$("#checkoutForm").validate();
    
    
    $(".infinite-scroll").infiniteScroll(
        {
              path: function() {
            return '/page/activedeal?&per_page=' + ( ( this.loadCount + 1 ) * 20 );                        
        },
        append: '.post'
        });

    $(".product-gallery-item").click(function(){
		var imgurl = $(this).data("image");		
		$(".main-product-gallery-image").fadeOut(500,function(){
			$(this).attr('src',imgurl).fadeIn(500);
		});
		
	});

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