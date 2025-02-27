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


        initServiceItemSwap() // Initialize service item click handlers
        
    })

    // Initialize the service item click handlers
    function initServiceItemSwap() {
        const $serviceItems = $('.service-right-boxe .service-item');
        const $activeContainer = $('.cyber-security-services__card.active');
        
        // Cache active container elements to improve performance
        const activeElements = {
            $icon: $activeContainer.find('.card_icon'),
            $title: $activeContainer.find('h4'),
            $button: $activeContainer.find('.btn'),
            $description: $activeContainer.find('p')
        };
        
        // Attach click handlers to all service items
        $serviceItems.on('click', function() {
            const $this = $(this);
            
            // Cache target item elements
            const targetElements = {
                $icon: $this.find('.card_icon'),
                $title: $this.find('h6'),
                $button: $this.find('a'),
                description: $this.attr('data-description')
            };
            
            // Store active content temporarily
            const activeData = {
                title: activeElements.$title.text(),
                description: activeElements.$description.text(),
                iconSrc: activeElements.$icon.attr('src'),
                link: activeElements.$button.attr('href')
            };
            
            // Swap data between active container and clicked item
            swapContent(activeElements, targetElements, activeData, $this);
        });
    }
    
    // Function to swap content between active container and clicked item
    function swapContent(activeElements, targetElements, activeData, $targetItem) {
        // Update active container with target item data
        activeElements.$title.text(targetElements.$title.text());
        activeElements.$description.text(targetElements.description);
        activeElements.$icon.attr('src', targetElements.$icon.attr('src'));
        activeElements.$button.attr('href', targetElements.$button.attr('href'));
        
        // Update target item with previously active data
        targetElements.$title.text(activeData.title);
        targetElements.$button.attr('href', activeData.link);
        targetElements.$icon.attr('src', activeData.iconSrc);
        $targetItem.attr('data-description', activeData.description);
    }



}( jQuery ) );