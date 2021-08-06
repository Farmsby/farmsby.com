$(document).ready(function () {

	setTimeout(function() {
	    $(".overlay").removeClass('hide');
	}, 10000);

	$(document).click(function(event) {
	  //if you click on anything except the modal itself or the "open modal" link, close the modal
	  if (!$(event.target).closest(".adPop").length) {
	    $("body").find(".overlay").addClass("hide");
	  }
	});

})