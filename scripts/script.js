$(document).ready(function() {
    // Simple carousel functionality for each hostel card
    $('.carousel').each(function() {
        const $carousel = $(this);
        const $images = $carousel.find('.carousel-images img');
        let currentIndex = 0;

        // Show first image initially
        $images.hide().eq(currentIndex).show();

        // Next button
        $carousel.find('.carousel-next').on('click', function() {
            $images.eq(currentIndex).hide();
            currentIndex = (currentIndex + 1) % $images.length;
            $images.eq(currentIndex).fadeIn();
        });

        // Prev button
        $carousel.find('.carousel-prev').on('click', function() {
            $images.eq(currentIndex).hide();
            currentIndex = (currentIndex - 1 + $images.length) % $images.length;
            $images.eq(currentIndex).fadeIn();
        });
    });

    // Filter functionality (no page reload)
    $('#filterBtn').on('click', function() {
        var selectedLocation = $('#location').val();
        
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

