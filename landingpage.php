<!-- landingpage.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KHZP3XTV');</script>
<!-- End Google Tag Manager -->

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Landing Page</title>
    <link rel="stylesheet" href="output.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="scripts/script.js" defer></script>
</head>
<body class="font-sans text-gray-700">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KHZP3XTV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="relative">
  <div>
    <img 
      src="assets/images/banner.jpeg" 
      alt="Banner Image" 
      class="w-full min-h-[200px] sm:aspect-[16/9] sm:h-[350px] md:h-[450px] lg:h-[550px] object-cover object-center"
    >
  </div>
  <div class="bg-[#065b53] px-4 py-4">
    <div class="max-w-6xl mx-auto flex justify-center sm:justify-start">
      <a href="index.php" 
         class="inline-block bg-[#f89a44] text-[#065b53] px-6 sm:px-8 py-2 sm:py-3 rounded-full text-sm sm:text-base font-semibold shadow-lg hover:shadow-md hover:bg-[#f77a25] transition-all ml-4 sm:ml-32">
        Book Now
      </a>
    </div>
  </div>
</section>

<!-- Icons / Feature Row (Trusted by 1m+ students, etc.) -->
<section class="bg-gray-50 py-10">
  <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-4 gap-8 text-center">
    <!-- Feature 1 -->
    <div class="flex flex-col items-center space-y-2">
      <img src="assets/images/feature1.png" alt="icon" class="w-16 h-16 mb-2">
      <h3 class="text-lg font-bold text-gray-900">Trusted by students</h3>
      <p class="text-sm text-gray-600">Join thousands of students who trust H2H for finding safe, reliable, and student-friendly hostels across Lahore</p>
</div>
<div class="flex flex-col items-center space-y-2">
      <img src="assets/images/feature4.png" alt="icon" class="w-16 h-16 mb-2">
      <h3 class="text-lg font-bold text-gray-900">Quick & easy bookings</h3>
      <p class="text-sm text-gray-600">Say goodbye to long searches! Find and book your ideal hostel in just a few clicks or a quick chat</p>
</div>
<div class="flex flex-col items-center space-y-2">
      <img src="assets/images/feature3.png" alt="icon" class="w-16 h-16 mb-2">
      <h3 class="text-lg font-bold text-gray-900">The widest choice</h3>
      <p class="text-sm text-gray-600">From budget-friendly to premium options, explore Lahore’s largest selection of verified hostels tailored for students</p>
</div>
<div class="flex flex-col items-center space-y-2">
      <img src="assets/images/feature2.png" alt="icon" class="w-16 h-16 mb-2">
      <h3 class="text-lg font-bold text-gray-900">We're here to help</h3>
      <p class="text-sm text-gray-600">Confused? Stuck? Our friendly support team is just a message away to guide you every step of the way</p>
</div>
  </div>
</section>

<!-- Guides Section (Check out our useful student guides) -->
<section class="bg-white py-10">
  <div class="max-w-7xl mx-auto px-4">
    <div class="flex justify-between items-center mb-6">
      <h2 class="text-2xl md:text-3xl font-bold text-gray-900">
        Check out our useful student guides
      </h2>
      <!-- “See all guides” link (not functional at the moment) -->
      <a href="guides.php" class="text-orange-500 font-semibold hover:text-orange-600 flex items-center">
        See all guides 
        <span class="ml-1">→</span>
      </a>
    </div>
    <!-- Cards row -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <!-- Card 1 -->
      <div class="bg-white shadow rounded-md p-4 flex flex-col md:flex-row items-center">
        <img 
          src="https://via.placeholder.com/300x200?text=Guide+Image" 
          alt="Guide Image" 
          class="w-full md:w-48 h-32 object-cover rounded mb-4 md:mb-0 md:mr-4"
        >
        <div>
          <h3 class="text-lg font-bold text-gray-900 mb-1">
            The ultimate guide to finding student accommodation
          </h3>
          <p class="text-sm text-gray-600 mb-2">
            Use our tips to make sure you are ahead in the race to get the best place to live...
          </p>
          <a href="guide-detail1.php" class="text-orange-500 font-semibold hover:text-orange-600">
            Read guide →
          </a>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="bg-white shadow rounded-md p-4 flex flex-col md:flex-row items-center">
        <img 
          src="https://via.placeholder.com/300x200?text=Guide+Image" 
          alt="Guide Image" 
          class="w-full md:w-48 h-32 object-cover rounded mb-4 md:mb-0 md:mr-4"
        >
        <div>
          <h3 class="text-lg font-bold text-gray-900 mb-1">
            The student accommodation guide for out of town...
          </h3>
          <p class="text-sm text-gray-600 mb-2">
            Many students are attracted to study in Lahore as a result...
          </p>
          <a href="guide-detail2.php" class="text-orange-500 font-semibold hover:text-orange-600">
            Read guide →
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Reviews Section (What students think of us) -->
<section class="py-10" style="background-color: #c7eae4;">
  <div class="max-w-7xl mx-auto px-4">
    <div class="flex items-center justify-between mb-6">
      <h2 class="text-2xl md:text-3xl font-bold text-gray-900">
        What students think of us
      </h2>
      <!-- Trustpilot snippet or rating -->
      <div class="flex items-center space-x-2">
        <p class="text-sm font-semibold text-gray-700">Excellent</p>
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/63/Trustpilot_logo_black_and_green.svg" 
             alt="Trustpilot" class="h-5 w-auto" />
        <p class="text-sm text-gray-700">658 reviews on</p>
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/63/Trustpilot_logo_black_and_green.svg"
             alt="Trustpilot" class="h-5 w-auto" />
      </div>
    </div>
    
    <!-- Review cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <!-- Review 1 -->
      <div class="bg-white rounded-md p-6 shadow">
        <div class="flex items-center mb-2">
          <!-- Initials or avatar -->
          <div class="w-10 h-10 mr-3">
    <img 
        src="assets/images/katie.png" 
        alt="Profile picture" 
        class="w-full h-full rounded-full object-cover"
    />
</div>
      <div>
        <p class="font-bold text-gray-800">Fatima</p>
        <!-- Star rating, etc. -->
        <div class="text-green-500 text-sm">★★★★★</div>
      </div>
    </div>
    <p class="text-sm text-gray-600">
      “H2H ki wajah se hostel dhoondhna first semester mein bohot easy ho gaya. Bas apne requirements bheje aur perfect match mil gaya. Highly recommend!”
    </p>
  </div>
      <!-- Review 2 -->
      <div class="bg-white rounded-md p-6 shadow">
        <div class="flex items-center mb-2">
          <div class="w-10 h-10 mr-3">
            <img 
              src="assets/images/olivia.png" 
              alt="Profile picture" 
              class="w-full h-full rounded-full object-cover"
            />
          </div>
          <div>
            <p class="font-bold text-gray-800">Hassan</p>
            <div class="text-green-500 text-sm">★★★★★</div>
          </div>
        </div>
        <p class="text-sm text-gray-600">
        The platform is super easy to use! Found a hostel near my university in no time. 
        Their chat support is amazing, really helpful throughout the process.”
        </p>
      </div>
      <!-- Review 3 -->
      <div class="bg-white rounded-md p-6 shadow">
        <div class="flex items-center mb-2">
          <div class="w-10 h-10 mr-3">
            <img 
              src="assets/images/hr.jpg" 
              alt="Profile picture" 
              class="w-full h-full rounded-full object-cover"
            />
          </div>
          <div>
            <p class="font-bold text-gray-800">Ali</p>
            <div class="text-green-500 text-sm">★★★★★</div>
          </div>
        </div>
        <p class="text-sm text-gray-600">
          “Best platform for students! I found an affordable hostel in Johar Town with all the features I needed. 
          Great initiative for students in Lahore!”
        </p>
      </div>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="bg-white py-10">
  <div class="max-w-7xl mx-auto px-4">
    <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6">Frequently Asked Questions</h2>
    
    <!-- Simple FAQ accordion with jQuery toggle -->
    <div class="space-y-4">
      <!-- Q1 -->
      <div class="border-b border-gray-200 pb-4">
        <button 
          class="faq-toggle w-full text-left text-lg font-semibold text-gray-800 flex justify-between items-center"
        >
          How do I book a room?
          <span class="ml-2 text-orange-500">+</span>
        </button>
        <div class="faq-content hidden mt-2 text-sm text-gray-600">
          To book a room, simply click the “Book Now” button and follow the steps on our booking page.
        </div>
      </div>
      <!-- Q2 -->
      <div class="border-b border-gray-200 pb-4">
        <button 
          class="faq-toggle w-full text-left text-lg font-semibold text-gray-800 flex justify-between items-center"
        >
          Can I tour the property first?
          <span class="ml-2 text-orange-500">+</span>
        </button>
        <div class="faq-content hidden mt-2 text-sm text-gray-600">
          Yes, many of our properties allow virtual tours or in-person visits. Contact us for details.
        </div>
      </div>
      <!-- Q3 -->
      <div class="border-b border-gray-200 pb-4">
        <button 
          class="faq-toggle w-full text-left text-lg font-semibold text-gray-800 flex justify-between items-center"
        >
          Is customer support available?
          <span class="ml-2 text-orange-500">+</span>
        </button>
        <div class="faq-content hidden mt-2 text-sm text-gray-600">
          Absolutely. Our support team is available 24/7 to help you with your queries.
        </div>
      </div>
      
      <!-- Q4 -->
      <div class="border-b border-gray-200 pb-4">
        <button 
            class="faq-toggle w-full text-left text-lg font-semibold text-gray-800 flex justify-between items-center"
        >
            What if I need to cancel or change my booking?
            <span class="ml-2 text-orange-500">+</span>
        </button>
        <div class="faq-content hidden mt-2 text-sm text-gray-600">
            For cancellations or changes, you need to contact the hostel directly. However, our team can help you get in touch with the hostel if needed.
        </div>
    </div>

    <!-- Q5 -->
    <div class="border-b border-gray-200 pb-4">
        <button 
            class="faq-toggle w-full text-left text-lg font-semibold text-gray-800 flex justify-between items-center"
        >
            Are the hostels listed on H2H verified?
            <span class="ml-2 text-orange-500">+</span>
        </button>
        <div class="faq-content hidden mt-2 text-sm text-gray-600">
            Yes, all hostels listed on our platform are verified by our team. We ensure they meet basic safety, hygiene, and quality standards before adding them to our directory.
        </div>
    </div>

    <!-- Q6 -->
    <div class="border-b border-gray-200 pb-4">
        <button 
            class="faq-toggle w-full text-left text-lg font-semibold text-gray-800 flex justify-between items-center"
        >
            How do I register for a hostel through H2H?
            <span class="ml-2 text-orange-500">+</span>
        </button>
        <div class="faq-content hidden mt-2 text-sm text-gray-600">
            You can register by using booking through our hostel profiles or through chat support on WhatsApp. Just share your requirements (location, budget, and room type) with our team, and they'll guide you through the process step by step.
        </div>
    </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

<!-- jQuery (for FAQ toggles, etc.) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  // Simple FAQ accordion
  $(document).ready(function() {
    $('.faq-toggle').on('click', function() {
      // Toggle the '+' or '-' symbol
      const symbol = $(this).find('span');
      symbol.text(symbol.text() === '+' ? '–' : '+');
      
      // Toggle the next .faq-content
      $(this).next('.faq-content').slideToggle();
    });
  });
</script>

</body>
</html>
