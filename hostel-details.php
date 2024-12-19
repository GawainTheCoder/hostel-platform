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
$overviewMain = "The Al Hamad Girls Hostel stands as a modest accommodation option in the heart of the city, offering a comfortable living space for female students and working professionals.
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
<section class="relative w-full bg-gray-100">
    <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-4 p-4 lg:p-8">
        <div class="lg:col-span-2 relative">
            <div class="carousel relative h-80 md:h-[500px] overflow-hidden rounded shadow">
                <div class="carousel-images h-full w-full">
                    <?php foreach($images as $index => $img): ?>
                        <img src="<?php echo $img; ?>" alt="Hostel Image <?php echo $index+1; ?>" class="w-full h-full object-cover <?php echo $index > 0 ? 'hidden' : ''; ?>">
                    <?php endforeach; ?>
                </div>
                <button class="carousel-prev absolute left-2 top-1/2 transform -translate-y-1/2 bg-gray-700 bg-opacity-50 text-white px-2 py-1 rounded">‹</button>
                <button class="carousel-next absolute right-2 top-1/2 transform -translate-y-1/2 bg-gray-700 bg-opacity-50 text-white px-2 py-1 rounded">›</button>
            </div>
        </div>
        
        <div class="lg:col-span-1 bg-white p-4 rounded shadow relative lg:-mt-20 lg:ml-0 z-10">
            <h2 class="text-xl font-bold mb-2"><?php echo $title; ?></h2>
            <p class="text-gray-600 mb-4"><?php echo $location; ?></p>
            <p class="text-sm font-semibold text-gray-800 mb-4"><?php echo $price; ?></p>

            <div class="flex space-x-2 mb-4">
                <button class="btn-orange">Book Now</button>
                <button class="btn-green">Enquire</button>
            </div>

            <p class="text-xs text-gray-500">* Prices may vary depending on room type and availability.</p>
        </div>
    </div>
</section>

<section class="max-w-6xl mx-auto px-4 py-8">
    <h3 class="text-2xl font-bold mb-4">Overview</h3>
    <div class="relative">
        <p id="overview-text" class="text-gray-700 leading-relaxed max-w-3xl">
            <?php echo nl2br($overviewMain); ?>
            <span id="additional-text" class="hidden">
                <?php echo nl2br($overviewMore); ?>
            </span>
        </p>
        <button id="show-more-btn" class="mt-4 inline-block text-orange-500 hover:text-orange-600 font-semibold">
            Show more
        </button>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
</body>
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
    });
</script>
</html>
abc 
