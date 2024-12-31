<?php include 'includes/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <title>Guides</title>
  <link rel="stylesheet" href="output.css" />
  <!-- Tailwind (if you use a CDN, for example) -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.0/dist/tailwind.min.css" rel="stylesheet"> -->
</head>
<body class="bg-white text-gray-700 font-sans">
  
  <section class="max-w-7xl mx-auto px-4 py-10">
    <!-- Page Heading -->
    <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
      Helpful Guides for Students
    </h1>
    <p class="text-gray-600 mb-10">
      Find tips and advice on renting, dealing with landlords, and everything you need to know as a student.
    </p>

    <!-- Grid of Guides -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      
      <!-- Guide 1 -->
      <article class="bg-white shadow rounded overflow-hidden">
        <img 
          src="https://via.placeholder.com/600x300?text=Guide+1+Image" 
          alt="Guide 1" 
          class="w-full h-48 object-cover"
        >
        <div class="p-4">
          <h2 class="text-xl font-bold text-gray-900 mb-2">
            What should I get from my landlord when I have agreed to rent?
          </h2>
          <p class="text-sm text-gray-600 mb-4">
            A quick look at the key documents and agreements you'll need from your landlord...
          </p>
          <a 
            href="guide-detail1.php" 
            class="inline-block text-orange-500 font-semibold hover:text-orange-600"
          >
            Read more &rarr;
          </a>
        </div>
      </article>

      <!-- Guide 2 -->
      <article class="bg-white shadow rounded overflow-hidden">
        <img 
          src="https://via.placeholder.com/600x300?text=Guide+2+Image" 
          alt="Guide 2" 
          class="w-full h-48 object-cover"
        >
        <div class="p-4">
          <h2 class="text-xl font-bold text-gray-900 mb-2">
            How to prepare for university accommodation
          </h2>
          <p class="text-sm text-gray-600 mb-4">
            Everything you need to pack, questions to ask, and tips for moving day...
          </p>
          <a 
            href="guide-detail2.php" 
            class="inline-block text-orange-500 font-semibold hover:text-orange-600"
          >
            Read more &rarr;
          </a>
        </div>
      </article>
    </div>
  </section>

<?php include 'includes/footer.php'; ?>
</body>
</html>
