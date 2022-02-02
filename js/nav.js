 $(document).ready(function() {
            $(".menu-icon").on("click", function() {
                  $("nav ul").toggleClass("showing");
            });
});

      // Scrolling Effect

 $(window).on("scroll", function() {
          if($(window).scrollTop()) {
                  $('nav').addClass('blue');
            }

            else {
                  $('nav').removeClass('blue');
            }
})

(function($) { // Begin jQuery
      $(function() { // DOM ready
        // If a link has a dropdown, add sub menu toggle.
        $('nav ul li a:not(:only-child)').click(function(e) {
          $(this).siblings('.nav-dropdown').toggle();
          // Close one dropdown when selecting another
          $('.nav-dropdown').not($(this).siblings()).hide();
          e.stopPropagation();
        });
        // Clicking away from dropdown will remove the dropdown class
        $('html').click(function() {
          $('.nav-dropdown').hide();
        });
        // Toggle open and close nav styles on click
       
      }); // end DOM ready
    })(jQuery); // end jQuery




