<!-- landingpage.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Landing Page</title>
    <link rel="stylesheet" href="output.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="scripts/script.js" defer></script>
</head>
<body class="font-sans text-gray-700">
<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="relative bg-[#c7eae4]">
  <div class="max-w-7xl mx-auto px-4 py-10 grid grid-cols-1 lg:grid-cols-2 gap-8">
    
    <!-- Text Content -->
    <div class="flex flex-col justify-center">
      <h1 class="text-3xl md:text-5xl font-bold text-gray-900 mb-4">
        The home of student accommodation
      </h1>
      <p class="text-lg text-gray-500 mb-6">
        Search Pk's No.1 Student Accommodation Website
      </p>
      <!-- Instead of a search bar, we have a "Book Now" button -->
      <a href="index.php" class="inline-block w-fit bg-orange-500 text-white px-6 py-3 rounded-md 
                                text-base font-semibold hover:bg-orange-600 transition-colors">
        Book Now
      </a>
      <!-- Trustpilot line (or any rating snippet) -->
      <div class="mt-6 flex items-center">
        <span class="mr-2 text-sm font-semibold text-gray-600">Excellent</span>
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/63/Trustpilot_logo_black_and_green.svg" 
             alt="Trustpilot" class="h-5 w-auto"/>
      </div>
    </div>
    
    <!-- Hero Image (Placeholder or your real image) -->
    <div class="relative flex items-center justify-center">
      <!-- Background circle / shape for styling (optional) -->
      <div class="absolute -z-10 bg-orange-100 rounded-full w-72 h-72 md:w-96 md:h-96 
                  right-0 top-16 md:top-0 md:right-16 pointer-events-none"></div>
      <img 
        src="https://via.placeholder.com/400x400?text=Hero+Woman+Image" 
        alt="Hero Woman Image" 
        class="relative w-64 h-64 md:w-80 md:h-80 object-cover rounded-full"
      >
    </div>
  </div>
</section>

<!-- Icons / Feature Row (Trusted by 1m+ students, etc.) -->
<section class="bg-gray-50 py-10">
  <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-4 gap-8 text-center">
    <!-- Feature 1 -->
    <div class="flex flex-col items-center space-y-2">
      <img src="https://via.placeholder.com/60?text=Icon" alt="icon" class="mb-2">
      <h3 class="text-lg font-bold text-gray-900">Trusted by 1m+ students</h3>
      <p class="text-sm text-gray-600">Every year, we help over a million students find their ideal place</p>
    </div>
    <!-- Feature 2 -->
    <div class="flex flex-col items-center space-y-2">
      <img src="https://via.placeholder.com/60?text=Icon" alt="icon" class="mb-2">
      <h3 class="text-lg font-bold text-gray-900">Quick & easy bookings</h3>
      <p class="text-sm text-gray-600">Secure your room in no time with hassle-free instant booking</p>
    </div>
    <!-- Feature 3 -->
    <div class="flex flex-col items-center space-y-2">
      <img src="https://via.placeholder.com/60?text=Icon" alt="icon" class="mb-2">
      <h3 class="text-lg font-bold text-gray-900">The widest choice</h3>
      <p class="text-sm text-gray-600">Browse verified, affordable student rooms close to university</p>
    </div>
    <!-- Feature 4 -->
    <div class="flex flex-col items-center space-y-2">
      <img src="https://via.placeholder.com/60?text=Icon" alt="icon" class="mb-2">
      <h3 class="text-lg font-bold text-gray-900">We’re here to help</h3>
      <p class="text-sm text-gray-600">Reach out to our friendly team of experts who are always on hand</p>
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
          <div class="w-10 h-10 bg-gray-300 text-gray-800 rounded-full flex items-center 
                      justify-center font-semibold mr-3">
            KA
          </div>
          <div>
            <p class="font-bold text-gray-800">Katie</p>
            <!-- Star rating, etc. -->
            <div class="text-green-500 text-sm">★★★★★</div>
          </div>
        </div>
        <p class="text-sm text-gray-600">
          “Very easy to use website, with a variety of properties, quick response times 
          and very friendly and helpful staff.”
        </p>
      </div>
      <!-- Review 2 -->
      <div class="bg-white rounded-md p-6 shadow">
        <div class="flex items-center mb-2">
          <div class="w-10 h-10 bg-gray-300 text-gray-800 rounded-full flex items-center 
                      justify-center font-semibold mr-3">
            OL
          </div>
          <div>
            <p class="font-bold text-gray-800">Olivia</p>
            <div class="text-green-500 text-sm">★★★★★</div>
          </div>
        </div>
        <p class="text-sm text-gray-600">
          “My first time looking for accommodation outside of uni halls, I was a bit nervous, 
          but all my fears were wiped clean. This was such a smooth and hassle-free process.”
        </p>
      </div>
      <!-- Review 3 -->
      <div class="bg-white rounded-md p-6 shadow">
        <div class="flex items-center mb-2">
          <div class="w-10 h-10 bg-gray-300 text-gray-800 rounded-full flex items-center 
                      justify-center font-semibold mr-3">
            HR
          </div>
          <div>
            <p class="font-bold text-gray-800">Hritika</p>
            <div class="text-green-500 text-sm">★★★★★</div>
          </div>
        </div>
        <p class="text-sm text-gray-600">
          “I found a home in half a day and had the confirmation in hand. 10/10 would recommend!”
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
