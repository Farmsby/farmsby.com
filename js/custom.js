$(".selector").on('click', function (e) {
    e.preventDefault();
    var selectorValue = $(this).data('val');
    $(".farmType").val(selectorValue);
    $('.flex-column').removeClass('selectedBox');
    $('#'+$(this).data('id')).addClass('selectedBox');
})

function displayOption() {
	var checkBox = document.getElementById("checkReccursionBox");
	var dropdown = document.getElementById("recursiveDropdown");
	if (checkBox.checked == true){
		dropdown.style.display = "inline";
	} else {
		dropdown.style.display = "none";
	}
}

function copyToClipboard(element) {
	var $temp = $("<input>");
	$("body").append($temp);
	$temp.val($(element).text()).select();
	document.execCommand("copy");
	alert("Copied");
	$temp.remove();
}

function facebookShare(refURL) {
	window.open("https://facebook.com/sharer/sharer.php?u="+refURL, "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=100,left=500,width=500,height=500");
}
function linkedinShare(refURL) {
	window.open("http://www.linkedin.com/shareArticle?mini=true&amp;url="+refURL, "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=100,left=500,width=500,height=500");
}
function twitterShare(refURL) {
	window.open("https://twitter.com/share?url="+refURL+"&amp;text=Hello%20there&amp;hashtags=farmsby", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=100,left=500,width=500,height=500");
}

//onblur function
function requiredField(input) {
      input.classList.remove("form-pass");
      input.classList.remove("form-fail");
    if (input.value.length < 1) {
      //red border
      input.classList.add("form-fail");
      
    } else if (input.type == "email") {
      console.log("this is an email type");
      
        if (input.value.indexOf("@") != -1 && input.value.indexOf(".") != -1) {
          //green border
          input.classList.add("form-pass");
        } else {
          //red border
          input.classList.add("form-fail");
        }
      
    } else {
      //green border
      input.classList.add("form-pass");
    }
}

var createAllErrors = function() {
        var form = $( this ),
            errorList = $( "ul.errorMessages", form );

        var showAllErrorMessages = function() {
            errorList.empty();

            // Find all invalid fields within the form.
            var invalidFields = form.find( ":invalid" ).each( function( index, node ) {

                // Find the field's corresponding label
                var label = $( "label[for=" + node.id + "] "),
                // Opera incorrectly does not fill the validationMessage property.
                message = node.validationMessage || 'Invalid value.';

                errorList.show().append( "<li><span>" + label.html() + "</span> " + message + "</li>" );
            });
        };

        // Support Safari
        form.on( "submit", function( event ) {
            if ( this.checkValidity && !this.checkValidity() ) {
                $( this ).find( ":invalid" ).first().focus();
                event.preventDefault();
            }
        });

        $( "input[type=submit], button:not([type=button])", form )
            .on( "click", showAllErrorMessages);

        $( "input", form ).on( "keypress", function( event ) {
            var type = $( this ).attr( "type" );
            if ( /date|email|month|number|search|tel|text|time|url|week/.test ( type )
              && event.keyCode == 13 ) {
                showAllErrorMessages();
            }
        });
    };
    
    $( "form" ).each( createAllErrors );