<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>Hostels in Lahore</title>
    <link rel="stylesheet" href="output.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="scripts/script.js" defer></script>
</head>
<body class="bg-white text-gray-700 font-sans">
<?php include 'includes/header.php'; ?>

<!-- Filter Section -->
<section class="max-w-6xl mx-auto py-6 px-4">
  <form class="flex flex-col md:flex-row justify-center items-center space-y-4 md:space-y-0 md:space-x-4">
    <div class="flex flex-col w-64">
      <select id="location" name="location" class="border border-gray-300 rounded p-2">
        <option value="">All Locations</option>
        <option value="johar-town">Johar Town</option>
        <option value="dha">DHA</option>
        <option value="model-town">Muslim Town</option>
      </select>
    </div>
  </form>
</section>

    <!-- Hostel Listing Grid -->
    <section class="max-w-6xl mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Hostel Card 1 -->
            <div class="bg-white rounded shadow overflow-hidden" data-location="johar-town">
                <div class="carousel relative">
                    <div class="carousel-images">
                        <img src="assets/images/detail-hostel1-1.jpg" alt="Hostel Image 1" class="w-full h-48 object-cover">
                        <img src="assets/images/detail-hostel1-2.jpg" alt="Hostel Image 2" class="w-full h-48 object-cover hidden">
                        <img src="assets/images/detail-hostel1-3.jpg" alt="Hostel Image 3" class="w-full h-48 object-cover hidden">
                    </div>
                    <button class="carousel-prev absolute left-2 top-1/2 transform -translate-y-1/2 bg-gray-700 bg-opacity-50 text-white px-2 py-1 rounded">‹</button>
                    <button class="carousel-next absolute right-2 top-1/2 transform -translate-y-1/2 bg-gray-700 bg-opacity-50 text-white px-2 py-1 rounded">›</button>
                </div>
                <div class="p-4">
                    <h2 class="font-bold text-lg mb-2">Al Banat Girls Hostel</h2>
                    <p class="text-sm text-gray-600 mb-1">Johar Town, Lahore</p>
                    <p class="text-sm font-semibold text-gray-800 mb-4">From PKR 13,000/month</p>
                    <a href="hostel-details.php?hostel=1" class="btn-green">View Details</a>                    </div>
            </div>

            <!-- Hostel Card 2 -->
            <div class="bg-white rounded shadow overflow-hidden" data-location="dha">
                <div class="carousel relative">
                    <div class="carousel-images">
                        <img src="assets/images/detail-hostel2-1.png" alt="Hostel Image 1" class="w-full h-48 object-cover">
                        <img src="assets/images/detail-hostel2-2.png" alt="Hostel Image 2" class="w-full h-48 object-cover hidden">
                    </div>
                    <button class="carousel-prev absolute left-2 top-1/2 transform -translate-y-1/2 bg-gray-700 bg-opacity-50 text-white px-2 py-1 rounded">‹</button>
                    <button class="carousel-next absolute right-2 top-1/2 transform -translate-y-1/2 bg-gray-700 bg-opacity-50 text-white px-2 py-1 rounded">›</button>
                </div>
                <div class="p-4">
                    <h2 class="font-bold text-lg mb-2">Spacious Hostel in DHA</h2>
                    <p class="text-sm text-gray-600 mb-1">DHA, Lahore</p>
                    <p class="text-sm font-semibold text-gray-800 mb-4">From PKR 20,000/month</p>
                    <a href="hostel-details.php?hostel=2" class="btn-green">View Details</a>                    </div>
            </div>

            <!-- Hostel Card 3 -->
            <div class="bg-white rounded shadow overflow-hidden" data-location="model-town">
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
                    <a href="hostel-details.php?hostel=3" class="btn-green">View Details</a>                    </div>
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
