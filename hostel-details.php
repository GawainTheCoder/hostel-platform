<?php
$hostelId = isset($_GET['hostel']) ? $_GET['hostel'] : 1;

// Set defaults (Hostel 1)
$title = "Al Banat Girls Hostel";
$location = "Johar Town, Lahore";
$price = "From PKR 13,000/month";
$images = [
    "assets/images/detail-hostel1-1.jpg",
    "assets/images/detail-hostel1-2.jpg",
    "assets/images/detail-hostel1-3.jpeg"
];
$overviewMain = "The Al Banat Girls Hostel stands as a modest accommodation option in the heart of the city, offering a comfortable living space for female students and working professionals.
Room Types and Pricing
The hostel primarily features well-maintained biseater and triseater rooms. The biseater rooms are priced at Rs. 13,000 per month, offering a balanced mix of privacy and affordability. Each room comes furnished with essential furniture including beds, study tables, and wardrobes.
Building Structure
The hostel's architecture features a three-story building with well-ventilated rooms. Common areas include a spacious lobby and a small courtyard where residents often gather during evenings for social interaction and relaxation.
Security and Management
While the hostel maintains a relatively relaxed security protocol with basic monitoring and visitor regulations, it provides residents with the freedom to manage their daily schedules with minimal restrictions.";
$overviewMore = "Dining Arrangements
Unlike many other hostels in the area, Al Hamad does not operate an in-house mess facility. This gives residents the flexibility to arrange their meals according to their preferences – whether through nearby restaurants, food delivery services, or setting up their own cooking arrangements in the designated kitchen area.
Location and Accessibility
The hostel's central location ensures easy access to educational institutions, markets, and public transport facilities, making it a practical choice for students and working women seeking safe accommodation within their budget. The surrounding area features numerous convenience stores, medical facilities, and recreational spaces.
Contact Information
For inquiries about room availability and booking procedures, interested candidates can reach the management at 0331-4944002. Tours of the facility can be arranged with prior appointment";

// If hostel ID is 2
if ($hostelId == 2) {
    $title = "Spacious Hostel in DHA";
    $location = "DHA, Lahore";
    $price = "From PKR 20,000/month";
    $images = [
        "assets/images/detail-hostel2-1.png",
        "assets/images/detail-hostel2-2.png"
    ];
    $overviewMain = "This spacious hostel in DHA offers modern amenities and comfortable living.
Located in one of Lahore’s prime residential areas, the hostel provides easy access to 
public transport, shopping malls, and educational institutions. With a clean, minimalist 
design and ample natural light, it’s perfect for students and young professionals.";
    $overviewMore = "In addition to standard rooms, this hostel includes shared common areas,
a well-equipped kitchen, and a relaxing lounge space. The security system and maintenance 
staff ensure a safe and pleasant stay. Nearby cafes and restaurants further enhance 
the lifestyle experience.";
}

// If hostel ID is 3
if ($hostelId == 3) {
    $title = "Makkah Girls Hostel";
    $location = "Muslim Town, Lahore";
    $price = "From PKR 12,000/month";
    $images = [
        "assets/images/detail-hostel3-1.jpg",
        "assets/images/detail-hostel3-2.jpeg",
        "assets/images/detail-hostel3-3.jpg",
        "assets/images/detail-hostel3-4.jpeg"
    ];
    $overviewMain = "Makkah Girls Hostel Overview
Located in a serene neighborhood, Makkah Girls Hostel provides a structured and comfortable living environment for female students and working professionals. The hostel has gained popularity for its well-organized facilities and thoughtful room arrangements spread across three floors.
Fee Structure
Initial Payment Breakdown
The hostel requires an initial payment of Rs. 21,000, which is broken down into:

A registration fee of Rs. 1,000
A security deposit of Rs. 5,000 (refundable)
First month's rent of Rs. 15,000

Additional Amenities
For residents interested in refrigerator access, there's a shared facility available at Rs. 2,000. Each refrigerator serves residents from two corridors, with each corridor containing 10 rooms, ensuring convenient access for all occupants.
Building Layout and Facilities
The hostel is structured across three floors, each thoughtfully designed with dedicated amenities:

Each floor features separate washroom facilities
Comfortable sitting areas on every floor for relaxation and study
The third floor houses the mess facility and washing machines
Well-maintained corridors with 10 rooms each";
    $overviewMore = "Room Options
The hostel exclusively offers double and triple-sharing rooms, promoting a community living environment while maintaining comfort and privacy. Each room is furnished with essential furniture and adequate storage space.
Mess and Laundry Services
The third-floor mess facility serves nutritious meals to all residents, while the washing machines provide convenient laundry solutions, eliminating the need for external laundry services.
Contact Information
For inquiries, room bookings, and tours, interested candidates can reach the management through:

Primary Contact: 0323-3333140
Alternative Number: 0324-4444150

The management team is available during business hours to address queries and provide detailed information about the facility.";
}
?>

<?php include 'includes/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Hostel Details - Lahore</title>
    <link rel="stylesheet" href="output.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="scripts/script.js" defer></script>
</head>
<body class="bg-white text-gray-700 font-sans">
<!-- Hero Section with Large Carousel & Quick Info Panel -->
<section 
  class="relative w-full bg-gray-100 pt-4" 
>
    <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-6 px-4 py-8">
        
        <!-- Carousel Column -->
        <div class="lg:col-span-2 relative">
            <div class="carousel relative h-80 md:h-[500px] overflow-hidden rounded shadow">
                <div class="carousel-images h-full w-full">
                    <?php foreach($images as $index => $img): ?>
                        <img 
                            src="<?php echo $img; ?>" 
                            alt="Hostel Image <?php echo $index+1; ?>" 
                            class="w-full h-full object-cover <?php echo $index > 0 ? 'hidden' : ''; ?>"
                        >
                    <?php endforeach; ?>
                </div>
                <!-- Carousel controls -->
                <button 
                  class="carousel-prev absolute left-2 top-1/2 -translate-y-1/2 bg-gray-700 bg-opacity-50 
                         text-white px-3 py-1 rounded hover:bg-gray-800 z-10"
                >
                    ‹
                </button>
                <button 
                  class="carousel-next absolute right-2 top-1/2 -translate-y-1/2 bg-gray-700 bg-opacity-50 
                         text-white px-3 py-1 rounded hover:bg-gray-800 z-10"
                >
                    ›
                </button>
            </div>
        </div>
        
        <!-- Info Panel Column -->
        <div class="lg:col-span-1 bg-white p-6 rounded shadow relative z-10">
            <h2 class="text-2xl font-bold mb-2"><?php echo $title; ?></h2>
            <p class="text-gray-600 mb-2"><?php echo $location; ?></p>
            <p class="text-base font-semibold text-gray-800 mb-4"><?php echo $price; ?></p>

            <div class="flex space-x-2 mb-4">
                <!-- Book Now button triggers the booking form modal -->
                <button 
                  id="open-booking-modal"
                  class="btn-orange bg-orange-500 text-white px-4 py-2 rounded 
                         hover:bg-orange-600 focus:outline-none"
                >
                  Book Now
                </button>
                <!-- Enquire button triggers the enquiry modal -->
                <button 
                  id="open-enquiry-modal"
                  class="btn-green bg-green-500 text-white px-4 py-2 rounded
                         hover:bg-green-600 focus:outline-none"
                >
                  Enquire
                </button>
            </div>

            <p class="text-xs text-gray-500">
                * Prices may vary depending on room type and availability.
            </p>
        </div>
    </div>
</section>

<!-- Overview Section -->
<section class="max-w-6xl mx-auto px-4 py-8">
    <h3 class="text-2xl font-bold mb-4">Overview</h3>
    <div class="relative">
        <p id="overview-text" class="text-gray-700 leading-relaxed max-w-3xl">
            <?php echo nl2br($overviewMain); ?>
            <span id="additional-text" class="hidden">
                <?php echo nl2br($overviewMore); ?>
            </span>
        </p>
        <button 
          id="show-more-btn" 
          class="mt-4 inline-block text-orange-500 hover:text-orange-600 font-semibold"
        >
            Show more
        </button>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

<!-- ================== MODALS (HIDDEN BY DEFAULT) ================== -->

<!-- BACKDROP for both modals -->
<div id="modal-backdrop" 
     class="hidden fixed inset-0 bg-black bg-opacity-50 z-40">
</div>

<!-- BOOKING MODAL -->
<div id="booking-modal" 
     class="hidden fixed inset-0 z-50 flex items-center justify-center">
  <div class="bg-white w-full max-w-md mx-4 p-6 rounded shadow relative">
    <!-- Close button -->
    <button 
      id="close-booking-modal" 
      class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 text-xl font-bold"
    >
      &times;
    </button>
    <!-- Booking Form -->
    <h2 class="text-xl font-bold mb-4">Book Hostel</h2>
    
    <!-- Success message (hidden by default) -->
    <div id="booking-success-message" class="hidden p-4 bg-green-100 text-green-800 mb-4 rounded">
      Success! You will be contacted within 1-2 days for confirmation.
    </div>

    <form id="booking-form">
      <div class="mb-4">
        <label for="fullName" class="block text-sm font-semibold mb-1">Full Name *</label>
        <input 
          type="text" 
          id="fullName" 
          name="fullName" 
          class="w-full border border-gray-300 rounded px-3 py-2" 
          required
        />
      </div>
      <div class="mb-4">
        <label for="email" class="block text-sm font-semibold mb-1">Email *</label>
        <input 
          type="email" 
          id="email" 
          name="email" 
          class="w-full border border-gray-300 rounded px-3 py-2"
          required
        />
      </div>
      <div class="mb-4">
        <label for="phone" class="block text-sm font-semibold mb-1">Phone Number *</label>
        <input 
          type="tel" 
          id="phone" 
          name="phone" 
          class="w-full border border-gray-300 rounded px-3 py-2"
          required
        />
      </div>
      <div class="mb-4">
        <label for="startDate" class="block text-sm font-semibold mb-1">Preferred Start Date *</label>
        <input 
          type="date" 
          id="startDate" 
          name="startDate" 
          class="w-full border border-gray-300 rounded px-3 py-2"
          required
        />
      </div>
      <div class="mb-4">
        <label for="endDate" class="block text-sm font-semibold mb-1">Preferred End Date *</label>
        <input 
          type="date" 
          id="endDate" 
          name="endDate" 
          class="w-full border border-gray-300 rounded px-3 py-2"
          required
        />
      </div>
      <button 
        type="submit" 
        class="w-full bg-orange-500 text-white py-2 rounded font-semibold hover:bg-orange-600"
      >
        Submit Booking
      </button>
    </form>
  </div>
</div>

<!-- ENQUIRY MODAL -->
<div id="enquiry-modal" 
     class="hidden fixed inset-0 z-50 flex items-center justify-center">
  <div class="bg-white w-full max-w-sm mx-4 p-6 rounded shadow relative">
    <!-- Close button -->
    <button 
      id="close-enquiry-modal" 
      class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 text-xl font-bold"
    >
      &times;
    </button>
    <h2 class="text-xl font-bold mb-4">Contact Landlord</h2>
    <p class="mb-4 text-gray-700">
      You can reach the landlord instantly via WhatsApp! 
      <br/>
      <span class="text-sm text-gray-500">*(This is a demo; no actual WhatsApp link.)*</span>
    </p>
    <!-- Demo link -->
    <a href="#" 
       class="inline-block bg-green-500 text-white px-4 py-2 rounded font-semibold 
              hover:bg-green-600 transition-colors"
    >
      Contact on WhatsApp
    </a>
  </div>
</div>

<!-- ================== SCRIPTS ================== -->
<script>
    // "Show more" functionality
    $(document).ready(function(){
      $('#show-more-btn').on('click', function() {
          const additionalText = $('#additional-text');
          if (additionalText.hasClass('hidden')) {
              additionalText.removeClass('hidden');
              $(this).text('Show less');
          } else {
              additionalText.addClass('hidden');
              $(this).text('Show more');
          }
      });
      
      // MODAL TOGGLE LOGIC
      const modalBackdrop = $('#modal-backdrop');
      
      // Booking modal
      const bookingModal = $('#booking-modal');
      const openBookingBtn = $('#open-booking-modal');
      const closeBookingBtn = $('#close-booking-modal');
      
      // Enquiry modal
      const enquiryModal = $('#enquiry-modal');
      const openEnquiryBtn = $('#open-enquiry-modal');
      const closeEnquiryBtn = $('#close-enquiry-modal');

      // Open booking modal
      openBookingBtn.on('click', function(){
        modalBackdrop.removeClass('hidden');
        bookingModal.removeClass('hidden');
      });
      // Close booking modal
      closeBookingBtn.on('click', function(){
        bookingModal.addClass('hidden');
        modalBackdrop.addClass('hidden');
      });

      // Open enquiry modal
      openEnquiryBtn.on('click', function(){
        modalBackdrop.removeClass('hidden');
        enquiryModal.removeClass('hidden');
      });
      // Close enquiry modal
      closeEnquiryBtn.on('click', function(){
        enquiryModal.addClass('hidden');
        modalBackdrop.addClass('hidden');
      });

      // If user clicks backdrop, close any open modal
      modalBackdrop.on('click', function(){
        bookingModal.addClass('hidden');
        enquiryModal.addClass('hidden');
        modalBackdrop.addClass('hidden');
      });

      // Booking form submission
      $('#booking-form').on('submit', function(e) {
        e.preventDefault(); // stop actual submission
        // You could do client-side validation here if needed
        
        // If fields are valid, show success message
        $('#booking-form').hide(); // hide the form
        $('#booking-success-message').removeClass('hidden'); // show the success message
      });
    });
</script>
</body>
</html>
