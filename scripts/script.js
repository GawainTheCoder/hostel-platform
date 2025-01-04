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

    // Filter functionality
    $('#location').on('change', function() {
        var selectedLocation = $(this).val();
        
        if (!selectedLocation) {
            // No location selected, show all hostels
            $('[data-location]').show();
        } else {
            // Hide all, then show only those that match the selected location
            $('[data-location]').hide();
            $('[data-location="' + selectedLocation + '"]').show();
        }
    });
});

