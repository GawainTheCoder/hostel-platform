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

    <title>Hostels in Lahore</title>
    <link rel="stylesheet" href="output.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="scripts/script.js" defer></script>
</head>
<body class="bg-white text-gray-700 font-sans">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KHZP3XTV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php include 'includes/header.php'; ?>

<!-- Filter Section -->
<section class="max-w-6xl mx-auto py-6 px-4">
  <form class="flex flex-col md:flex-row justify-center items-center space-y-4 md:space-y-0 md:space-x-4">
    <div class="flex flex-col w-64">
      <select id="location" name="location" class="border border-gray-300 rounded p-2">
        <option value="">Lahore</option>
        <option value="johar-town">Johar Town</option>
        <option value="dha">DHA</option>
        <option value="model-town">Muslim Town</option>
        <option value="gulberg">Gulberg</option>
      </select>
    </div>

    <!-- Price Filter -->
    <div class="flex flex-col w-64">
      <select id="price-sort" name="price-sort" class="border border-gray-300 rounded p-2">
        <option value="">Sort by Price</option>
        <option value="low-to-high">Low to High</option>
        <option value="high-to-low">High to Low</option>
      </select>
    </div>

    <!-- Gender Filter -->
    <div class="flex flex-col w-64">
      <select id="gender" name="gender" class="border border-gray-300 rounded p-2">
        <option value="">All Hostels</option>
        <option value="female">Female Only</option>
        <option value="male">Male Only</option>
      </select>
    </div>
  </form>
</section>

    <!-- Hostel Listing Grid -->
    <section class="max-w-6xl mx-auto px-4 py-8">
    <div id="hostelGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    <!-- Hostel Card 1 -->
            <div class="bg-white rounded shadow overflow-hidden" data-location="johar-town" data-gender="female" data-price="13000">
                <div class="carousel relative">
                    <div class="carousel-images">
                        <img src="assets/images/detail-hostel1-1.jpg" alt="Hostel Image 1" class="w-full h-48 object-cover">
                        <img src="assets/images/detail-hostel1-2.jpg" alt="Hostel Image 2" class="w-full h-48 object-cover hidden">
                    </div>
                    <button class="carousel-prev absolute left-2 top-1/2 transform -translate-y-1/2 bg-gray-700 bg-opacity-50 text-white px-2 py-1 rounded">‹</button>
                    <button class="carousel-next absolute right-2 top-1/2 transform -translate-y-1/2 bg-gray-700 bg-opacity-50 text-white px-2 py-1 rounded">›</button>
                </div>
                <div class="p-4">
                    <h2 class="font-bold text-lg mb-2">Al Banat Girls Hostel</h2>
                    <p class="text-sm text-gray-600 mb-1">Johar Town, Lahore</p>
                    <p class="text-sm font-semibold text-gray-800 mb-4">From PKR 13,000/month</p>
                    <a href="hostel-details.php?hostel=1" class="inline-block bg-[#065b53] text-white px-4 py-2 rounded hover:bg-[#054c46] transition-colors">View Details</a>                    </div>
            </div>

            <!-- Hostel Card 2 -->
            <div class="bg-white rounded shadow overflow-hidden" data-location="dha" data-gender="female" data-price="20000">
                <div class="carousel relative">
                    <div class="carousel-images">
                        <img src="assets/images/detail-hostel2-1.png" alt="Hostel Image 1" class="w-full h-48 object-cover">
                        <img src="assets/images/detail-hostel2-2.png" alt="Hostel Image 2" class="w-full h-48 object-cover hidden">
                    </div>
                    <button class="carousel-prev absolute left-2 top-1/2 transform -translate-y-1/2 bg-gray-700 bg-opacity-50 text-white px-2 py-1 rounded">‹</button>
                    <button class="carousel-next absolute right-2 top-1/2 transform -translate-y-1/2 bg-gray-700 bg-opacity-50 text-white px-2 py-1 rounded">›</button>
                </div>
                <div class="p-4">
                    <h2 class="font-bold text-lg mb-2">Uptown Hostel in DHA</h2>
                    <p class="text-sm text-gray-600 mb-1">DHA, Lahore</p>
                    <p class="text-sm font-semibold text-gray-800 mb-4">From PKR 20,000/month</p>
                    <a href="hostel-details.php?hostel=2" class="inline-block bg-[#065b53] text-white px-4 py-2 rounded hover:bg-[#054c46] transition-colors">View Details</a>                    </div>
            </div>

            <!-- Hostel Card 3 -->
            <div class="bg-white rounded shadow overflow-hidden" data-location="model-town" data-gender="female" data-price="12000">
                <div class="carousel relative">
                    <div class="carousel-images">
                        <img src="assets/images/detail-hostel3-1.jpg" alt="Hostel Image 1" class="w-full h-48 object-cover">
                        <img src="assets/images/detail-hostel3-2.jpeg" alt="Hostel Image 2" class="w-full h-48 object-cover hidden">
                        <img src="assets/images/detail-hostel3-3.jpg" alt="Hostel Image 3" class="w-full h-48 object-cover hidden">
                        <img src="assets/images/detail-hostel3-4.jpeg" alt="Hostel Image 4" class="w-full h-48 object-cover hidden">
                    </div>
                    <button class="carousel-prev absolute left-2 top-1/2 transform -translate-y-1/2 bg-gray-700 bg-opacity-50 text-white px-2 py-1 rounded">‹</button>
                    <button class="carousel-next absolute right-2 top-1/2 transform -translate-y-1/2 bg-gray-700 bg-opacity-50 text-white px-2 py-1 rounded">›</button>
                </div>
                <div class="p-4">
                    <h2 class="font-bold text-lg mb-2">Makkah Girls Hostel</h2>
                    <p class="text-sm text-gray-600 mb-1">Muslim Town, Lahore</p>
                    <p class="text-sm font-semibold text-gray-800 mb-4">From PKR 12,000/month</p>
                    <a href="hostel-details.php?hostel=3" class="inline-block bg-[#065b53] text-white px-4 py-2 rounded hover:bg-[#054c46] transition-colors">View Details</a>                    </div>
            </div>
            
            <!-- Hostel Card 4 -->
<div class="bg-white rounded shadow overflow-hidden" data-location="gulberg" data-gender="male" data-price="17000">
    <div class="carousel relative">
        <div class="carousel-images">
            <!-- First image -->
            <img src="assets/images/detail-hostel4-1.jpg" alt="Hostel Image 1" class="w-full h-48 object-cover">

            <!-- Video as second slide -->
            <video controls class="w-full h-48 object-cover hidden">
                <source src="assets/images/detail-hostel4-2.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>

            <!-- Third image -->
            <img src="assets/images/detail-hostel4-3.jpg" alt="Hostel Image 3" class="w-full h-48 object-cover hidden">

            <!-- Fourth image -->
            <img src="assets/images/detail-hostel4-4.png" alt="Hostel Image 4" class="w-full h-48 object-cover hidden">
        </div>
        <button class="carousel-prev absolute left-2 top-1/2 transform -translate-y-1/2 bg-gray-700 bg-opacity-50 text-white px-2 py-1 rounded">‹</button>
        <button class="carousel-next absolute right-2 top-1/2 transform -translate-y-1/2 bg-gray-700 bg-opacity-50 text-white px-2 py-1 rounded">›</button>
    </div>
    <div class="p-4">
        <h2 class="font-bold text-lg mb-2">Al-Rasheed Boys Hostel</h2>
        <p class="text-sm text-gray-600 mb-1">Gulberg, Lahore</p>
        <p class="text-sm font-semibold text-gray-800 mb-4">From PKR 17,000/month</p>
        <a href="hostel-details.php?hostel=4" class="inline-block bg-[#065b53] text-white px-4 py-2 rounded hover:bg-[#054c46] transition-colors">View Details</a>
    </div>
</div>
        </div>
    </section>

    <!-- Pagination -->
    <section class="max-w-6xl mx-auto px-4 py-4 flex justify-center">
        <nav class="space-x-2">
            <a href="#" class="text-gray-600 hover:text-orange-500">1</a>
        </nav>
    </section>

    <!-- Footer Section -->
    <?php include 'includes/footer.php'; ?>
</body>
</html>
