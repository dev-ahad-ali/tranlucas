( function( $ ) {
    $(function(){ // Ready function
        
        const $statsSection = $('.statistic-section');
        if ($statsSection.length > 0) {
            const animationDuration = 2000;
            let animated = false;

            function animateValue($element, target) {
                $({count: 0}).animate({count: target}, {
                    duration: animationDuration,
                    easing: 'swing',
                    step: function() {
                        $element.text(Math.ceil(this.count));
                    },
                    complete: function() {
                        $element.text(target);
                    }
                });
            }

            function checkScroll() {
                const bottomOfWindow = $(window).scrollTop() + $(window).height();
                const sectionOffset = $statsSection.offset().top + ($statsSection.outerHeight() / 2);

                if (!animated && bottomOfWindow > sectionOffset) {
                    animated = true;
                    $('.number-item .h1').each(function() {
                        const target = parseInt($(this).data('target'));
                        animateValue($(this), target);
                    });
                }
            }

            $(window).on('scroll', checkScroll);
            checkScroll(); // Trigger on page load if already visible
        }
        
    })
}( jQuery ) );