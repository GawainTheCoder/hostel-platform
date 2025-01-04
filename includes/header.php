<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<header class="bg-white shadow">
  <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">
    <!-- Logo -->
    <a href="landingpage.php" class="flex items-center">
      <img
        src="assets/images/logo5.png"
        alt="Hostel Logo"
        class="h-8 w-auto object-contain"
      />
      <span class="ml-2 text-lg font-bold text-gray-800 font-['Dream_Avenue']">H2H</span>
    </a>

    <!-- Desktop Nav -->
    <nav class="hidden md:flex items-center space-x-6 text-sm font-medium">
    <a
    href="index.php"
    class="px-4 py-2 rounded-md text-white bg-[#065b53] 
           border border-[#065b53]
           hover:bg-[#054c46] hover:border-[#054c46] 
           transition duration-300"
>
    Book Now
</a>

      <a
        href="guides.php"
        class="text-gray-700 hover:text-orange-500 transition duration-300"
      >
        Guides
      </a>
      <a
        href="landlords.php"
        class="text-gray-700 hover:text-orange-500 transition duration-300"
      >
        Landlords
      </a>
    </nav>

    <!-- Hamburger Button (visible on mobile) -->
    <button
      id="hamburger"
      class="md:hidden focus:outline-none focus:ring-2 
             focus:ring-offset-2 focus:ring-orange-500 rounded"
    >
      <!-- Icon lines or SVG here -->
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          d="M4 6h16M4 12h16M4 18h16"
        />
      </svg>
    </button>
  </div>

  <!-- Mobile Nav (initially hidden) -->
  <div id="mobileNav" class="hidden md:hidden px-6 pb-4 flex flex-col space-y-3 text-sm font-medium">
    <a
      href="index.php"
      class="px-4 py-2 rounded-md text-white bg-[#065b53] 
           border border-[#065b53]
           hover:bg-[#054c46] hover:border-[#054c46] 
           transition duration-300"
    >
      Book Now
    </a>

    <a href="guides.php" class="text-gray-700 hover:text-orange-500 transition">
      Guides
    </a>
    <a
      href="landlords.php"
      class="text-gray-700 hover:text-orange-500 transition"
    >
      Landlords
    </a>
  </div>
</header>

<script>
  $(document).ready(function () {
    $('#hamburger').on('click', function () {
      // Toggle the mobile nav
      $('#mobileNav').toggleClass('hidden');
    });
  });
</script>
