<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Guides</title>
  <link rel="stylesheet" href="output.css" />
</head>
<body class="bg-gray-50">
  <?php include 'includes/header.php'; ?>
  
  <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 sm:py-10">
    <!-- Page Heading -->
    <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-4 sm:mb-6">
      Helpful Guides for Students
    </h1>
    <p class="text-sm sm:text-base text-gray-600 mb-6 sm:mb-10">
      Find tips and advice on renting, dealing with landlords, and everything you need to know as a student.
    </p>

    <!-- Grid of Guides -->
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6">
      
      <!-- Guide 1 -->
      <article class="bg-white shadow rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300">
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
      <article class="bg-white shadow rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300">
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
