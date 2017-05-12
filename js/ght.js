

//on window open load these functions
$(window).load(function() {
    
     $("div.nav li").after("<br />");
    
    //on click of id sandwich
    $("#sandwich").click(function() {

        //toggle the display of class nav
        $(".nav").toggle();

    });
    
    //on click of li with class menu-item-has-children
    $("li.menu-item-has-children a").click(function(e) {

        //toggle the display of class sub-menu only following clicked item
        $(this).next(".sub-menu").slideToggle();
        
        //find a way to keep this from targetting children a tags...
        //e.preventDefault();

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

