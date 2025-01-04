$(document).ready(function() {
    // Simple carousel functionality for each hostel card
    $('.carousel').each(function() {
        const $carousel = $(this);
        // Select both <img> and <video> within .carousel-images
        const $slides = $carousel.find('.carousel-images img, .carousel-images video');
        let currentIndex = 0;

        // Show first slide initially
        $slides.hide().eq(currentIndex).show();

        // Next button
        $carousel.find('.carousel-next').on('click', function() {
            // Hide current
            $slides.eq(currentIndex).hide();
            // Increment index
            currentIndex = (currentIndex + 1) % $slides.length;
            // Show next
            $slides.eq(currentIndex).fadeIn();
        });

        // Prev button
        $carousel.find('.carousel-prev').on('click', function() {
            // Hide current
            $slides.eq(currentIndex).hide();
            // Decrement index
            currentIndex = (currentIndex - 1 + $slides.length) % $slides.length;
            // Show previous
            $slides.eq(currentIndex).fadeIn();
        });
    });

    // Filter and sort functionality
    function filterHostels() {
        const selectedLocation = $('#location').val();
        const selectedGender = $('#gender').val();
        const selectedPriceSort = $('#price-sort').val();
        
        let $hostels = $('[data-location]');
        
        // Apply location filter
        if (selectedLocation) {
            $hostels = $hostels.filter(`[data-location="${selectedLocation}"]`);
        }
        
        // Apply gender filter
        if (selectedGender) {
            $hostels = $hostels.filter(`[data-gender="${selectedGender}"]`);
        }
        
        // Hide all hostels first
        $('[data-location]').hide();
        
        // Show filtered hostels
        $hostels.show();
        
        // Sort by price if selected
        if (selectedPriceSort) {
            const $container = $('#hostelGrid'); // instead of $('.grid')
            const $cards = $hostels.toArray();
            
            $cards.sort((a, b) => {
                const priceA = parseInt($(a).data('price'));
                const priceB = parseInt($(b).data('price'));
                return selectedPriceSort === 'low-to-high' ? priceA - priceB : priceB - priceA;
            });
            
            $cards.forEach(card => $container.append(card));
        }
    }

    // Event listeners for filters
    $('#location, #gender, #price-sort').on('change', filterHostels);
});

