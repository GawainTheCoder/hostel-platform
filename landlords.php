<?php 
// landlords.php
include 'includes/header.php';

// Simple submission logic (server side):
$submissionSuccess = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // You could do more thorough server-side validation here.
    // For now, we just set success = true if the required fields exist.
    $requiredFields = ['fullName','email','phone','propertyName','propertyLocation','numRooms','monthlyRent','description'];
    $allFilled = true;

    foreach ($requiredFields as $field) {
        if (empty($_POST[$field])) {
            $allFilled = false;
            break;
        }
    }

    if ($allFilled) {
        // For demonstration, just set $submissionSuccess = true
        // In a real app, you might save to DB or send email, etc.
        $submissionSuccess = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Your Property</title>
    <link rel="stylesheet" href="output.css" />
</head>
<body class="bg-white text-gray-700 font-sans">
    <main class="min-h-screen">
        <section class="max-w-4xl mx-auto px-4 sm:px-6 py-6 sm:py-10">
            <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-4 sm:mb-6">
                List Your Property
            </h1>
            
            <p class="text-sm sm:text-base text-gray-600 mb-6 sm:mb-8">
                Join our network of trusted landlords and reach students looking for quality accommodation.
            </p>

            <?php if ($submissionSuccess): ?>
                <!-- Show success message -->
                <div class="bg-green-100 border border-green-200 text-green-700 p-4 rounded mb-6">
                    <p class="font-semibold">Success!</p>
                    <p>Your property has been submitted. We’ll review your details and get in touch soon.</p>
                </div>
            <?php else: ?>
                <!-- Show the form -->
                <form 
                    action="landlords.php" 
                    method="POST" 
                    class="bg-white rounded shadow p-6 space-y-4"
                >
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6">
                        <!-- Full Name -->
                        <div>
                            <label for="fullName" class="block font-semibold mb-1">Full Name <span class="text-red-500">*</span></label>
                            <input 
                                type="text" 
                                id="fullName" 
                                name="fullName" 
                                class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500" 
                                required
                            />
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="email" class="block font-semibold mb-1">Email <span class="text-red-500">*</span></label>
                            <input 
                                type="email" 
                                id="email" 
                                name="email" 
                                class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500" 
                                required
                            />
                        </div>

                        <!-- Phone -->
                        <div>
                            <label for="phone" class="block font-semibold mb-1">Phone Number <span class="text-red-500">*</span></label>
                            <input 
                                type="tel" 
                                id="phone" 
                                name="phone" 
                                class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500" 
                                required
                            />
                        </div>

                        <!-- Property Name -->
                        <div>
                            <label for="propertyName" class="block font-semibold mb-1">Property Name <span class="text-red-500">*</span></label>
                            <input 
                                type="text" 
                                id="propertyName" 
                                name="propertyName" 
                                class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500" 
                                placeholder="e.g. Greenfield Apartments" 
                                required
                            />
                        </div>

                        <!-- Property Location -->
                        <div>
                            <label for="propertyLocation" class="block font-semibold mb-1">Property Location <span class="text-red-500">*</span></label>
                            <input 
                                type="text" 
                                id="propertyLocation" 
                                name="propertyLocation" 
                                class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500" 
                                placeholder="e.g. DHA Phase 5, Lahore" 
                                required
                            />
                        </div>

                        <!-- Number of Rooms -->
                        <div>
                            <label for="numRooms" class="block font-semibold mb-1">Number of Rooms <span class="text-red-500">*</span></label>
                            <input 
                                type="number" 
                                id="numRooms" 
                                name="numRooms" 
                                min="1" 
                                class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500" 
                                required
                            />
                        </div>

                        <!-- Monthly Rent -->
                        <div>
                            <label for="monthlyRent" class="block font-semibold mb-1">Monthly Rent (PKR) <span class="text-red-500">*</span></label>
                            <input 
                                type="number" 
                                id="monthlyRent" 
                                name="monthlyRent"
                                min="1000" 
                                class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500" 
                                required
                            />
                        </div>

                        <!-- Short Description -->
                        <div class="sm:col-span-2">
                            <label for="description" class="block font-semibold mb-1">Short Description <span class="text-red-500">*</span></label>
                            <textarea 
                                id="description" 
                                name="description" 
                                rows="4" 
                                class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500"
                                placeholder="Tell us a bit about your property..."
                                required
                            ></textarea>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button 
                        type="submit" 
                        class="w-full sm:w-auto px-6 py-3 bg-orange-500 text-white rounded-md hover:bg-orange-600 transition-colors duration-300"
                    >
                        Submit Property
                    </button>
                </form>
            <?php endif; ?>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>
</body>
</html>