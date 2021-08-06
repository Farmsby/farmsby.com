jQuery(document).ready(function(){
    // This button will increment the value
    $(".btn-up").click( function(e) {
    
        e.preventDefault();
        
        // Define field variable
        field = "input[name=" + $(this).attr("field") + "]";
        
        // Get its current value
        var currentVal = parseInt($(field).val());
        
        // If is not undefined
        if ( !isNaN(currentVal) && currentVal < 20 ) {
    
            // Increment
            $(field).val(currentVal + 1);
    
        }
        
    });
    
    $(".btn-down").click( function(e) {
    
        e.preventDefault();
        
        // Define field variable
        field = "input[name=" + $(this).attr("field") + "]";
        
        // Get its current value
        var currentVal = parseInt($(field).val());
        
        // If it isn't undefined or its greater than 0
        if ( !isNaN(currentVal) && currentVal > 1 ) {
            // Decrement one
            $(field).val(currentVal - 1);
        }
        
    });
    // Default Price
    var counter = 15000
    field = "input[name='quantity']";
    var currentVal = parseInt($(field).val());

    $(".counter").text(counter);

    // Click function
    $(".btn-up").click(function(){
      //Plus
      counter = counter + 15000;
      // Display total
      $(".counter").text(counter);
    });

    
    $(".btn-down").click(function(){
        
    //Subtract
    // if ( currentVal == 1 ) {
    //   counter = counter - 0;
    // } else {
        counter = counter - 15000;
    // }
      $(".counter").text(counter);
    });

});