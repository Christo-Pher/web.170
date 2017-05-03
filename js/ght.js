$(document).ready( function () {
    $( "li.menu-item-has-children a" ).addClass( "dropbtn" );
});

//on window open load these functions
$(window).load(function() {
    
    
    
    //on click of id sandwich
    $("#sandwich").click(function() {

        //toggle the display of class nav
        $(".nav").toggle();

    });
    
    //on click of class dropbtn
    $(".dropbtn").click(function() {

        //toggle the display of class dropdown-content only following clicked item
        $(this).next(".sub-menu").slideToggle();

    }); 
    
    //run datepicker widget on id birthdate
    $( function() {
                $("#birthdate").datepicker({
                    changeMonth: true,
                    changeYear: true,
                    minDate: "-70Y",
                    maxDate: "-18Y",
                    defaultDate: "-40Y",
                    yearRange: "-70:-18"
                });
            } );
            
});

