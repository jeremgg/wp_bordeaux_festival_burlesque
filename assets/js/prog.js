(function( $ ) {
    $( function() {

        var $container = $('.isotope').isotope({
            itemSelector: '.element-item',
            layoutMode: 'fitRows'
        });

        $('#filters').on( 'click', 'button', function() {
            var filterValue = $( this ).attr('data-filter');
            $container.isotope({ filter: filterValue });
        });

    });
})(jQuery);
