

//on window open load these functions
$(window).load(function() {
    
    function b() {
    var linebreak = document.createElement("br");
    document.getElementsByTagName("li").appendChild(linebreak);
    }
    
    //on click of id sandwich
    $("#sandwich").click(function() {

        //toggle the display of class nav
        $(".nav").toggle();

    });
    
    //on click of class dropbtn
    $("li.menu-item-has-children a").click(function(e) {

        //toggle the display of class dropdown-content only following clicked item
        $(this).next(".sub-menu").slideToggle();
        
        e.preventDefault();

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

