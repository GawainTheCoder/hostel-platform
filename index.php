<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>Hostel Platform - Lahore</title>
    <link rel="stylesheet" href="output.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="scripts/script.js" defer></script>
</head>
<body class="bg-white text-gray-700 font-sans">

 <!-- Header Section -->
<header class="bg-white shadow">
    <div class="max-w-6xl mx-auto flex items-center justify-between py-2 px-4">
        <div class="flex items-center space-x-4">
            <!-- Logo -->
            <a href="index.php" class="flex items-center">
                <img src="assets/images/logo5.png" alt="Hostel Logo" class="h-10 w-10 object-contain" />
            </a>
        </div>
        <nav class="flex space-x-6 text-sm font-medium">
            <a href="#" class="relative text-gray-700 hover:text-orange-500 transition duration-300">
                Guides
                <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-orange-500 transition-all duration-300 hover:w-full"></span>
            </a>
            <a href="#" class="relative text-gray-700 hover:text-orange-500 transition duration-300">
                Blog
                <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-orange-500 transition-all duration-300 hover:w-full"></span>
            </a>
            <a href="#" class="relative text-gray-700 hover:text-orange-500 transition duration-300">
                Landlords
                <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-orange-500 transition-all duration-300 hover:w-full"></span>
            </a>
        </nav>
    </div>
</header>
<!-- Banner Section -->
<section class="relative w-full -mt-4">
    <div class="aspect-[16/9] w-full">
        <img src="assets/images/banner.jpg" alt="Home Away From Home" class="w-full h-full object-contain">
    </div>
</section>

<!-- Filter Section -->
<section class="max-w-6xl mx-auto py-6 px-4">
  <form class="flex flex-col md:flex-row justify-center items-center space-y-4 md:space-y-0 md:space-x-4">
    <div class="flex flex-col w-64">
      <select id="location" name="location" class="border border-gray-300 rounded p-2">
        <option value="">Select Location</option>
        <option value="johar-town">Johar Town</option>
        <option value="dha">DHA</option>
        <option value="model-town">Muslim Town</option>
      </select>
    </div>
    <button type="button" id="filterBtn" class="btn-orange">Search</button>
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
    <footer class="bg-gray-900 text-white py-8">
        <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <h3 class="font-bold mb-2">About Us</h3>
                <p class="text-sm text-gray-300">Home Away From Home (H2H) helps students find safe, affordable, and verified hostels in Pakistan. Simplified booking, student-friendly options — your perfect stay made easy.</p>
            </div>
            <div>
                <h3 class="font-bold mb-2">Contact</h3>
                <ul class="text-sm text-gray-300 space-y-1">
                    <li>Email: info@hostelplatform.com</li>
                    <li>Phone: +92 300 1234567</li>
                </ul>
            </div>
            <div>
                <h3 class="font-bold mb-2">Social Media</h3>
                <ul class="text-sm text-gray-300 space-y-1">
                    <li><a href="#" class="hover:text-orange-500">Facebook</a></li>
                    <li><a href="#" class="hover:text-orange-500">Instagram</a></li>
                    <li><a href="#" class="hover:text-orange-500">Twitter</a></li>
                </ul>
            </div>
            <div>
                <h3 class="font-bold mb-2">Legal</h3>
                <ul class="text-sm text-gray-300 space-y-1">
                    <li><a href="#" class="hover:text-orange-500">Terms & Conditions</a></li>
                    <li><a href="#" class="hover:text-orange-500">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
    </footer>

</body>
</html>
