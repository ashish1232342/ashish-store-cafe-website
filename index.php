<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Send email
    $to = "your-email@example.com"; // Your email address
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<p>Thank you for contacting us, we will get back to you soon.</p>";
    } else {
        echo "<p>Sorry, something went wrong. Please try again later.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ashish General Store & Cafe</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

  <style>
    /* Custom Styling for Sticky Header */
    #header.sticky {
      background-color: rgba(37, 99, 235, 0.9);
    }

    .parallax {
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

    /* Typing Animation */
    .typing {
      display: inline-block;
      white-space: nowrap;
      overflow: hidden;
      border-right: 3px solid;
      width: 0;
      animation: typing 4s steps(30) 1s forwards, blink 0.75s step-end infinite;
    }

    @keyframes typing {
      0% {
        width: 0;
      }

      100% {
        width: 100%;
      }
    }

    @keyframes blink {
      50% {
        border-color: transparent;
      }
    }
  </style>
</head>

<body class="bg-gray-50 text-gray-800 font-sans">

  <header id="header" class="bg-gradient-to-r from-blue-700 via-blue-800 to-blue-900 text-white fixed top-0 w-full z-50 shadow-lg transition-all">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
      <h1 class="text-2xl font-bold text-yellow-400">🛍️ Ashish Store & Cafe</h1>
      <nav class="space-x-6 text-sm md:text-base">
        <a href="index.php" class="hover:text-yellow-400 transition">Home</a>
        <a href="services.php" class="hover:text-yellow-400 transition">Services</a>
        <a href="offers.php" class="text-yellow-400">Offers</a>
        <a href="contact.php" class="hover:text-yellow-400 transition">Contact</a>
        <a href="about.php" class="hover:text-yellow-400 transition">About</a>
      </nav>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="relative bg-cover bg-center text-white py-16 parallax" style="background-image: url('your-image.jpg');">
    <div class="max-w-6xl mx-auto px-4 flex flex-col md:flex-row items-center gap-8">
      <div class="flex-1 text-center md:text-left">
        <h2 class="text-5xl font-bold mb-4 text-yellow-300">
          <span class="typing">Welcome to Ashish General Store & Cafe</span>
        </h2>
        <p class="text-lg mb-6">All essentials & online services under one roof ☕📠</p>
        <a href="https://wa.me/917294819117" target="_blank"
          class="inline-block bg-green-500 hover:bg-green-600 px-6 py-3 rounded-full font-semibold">
          💬 Chat on WhatsApp
        </a>
      </div>
    </div>
  </section>

  <!-- Contact Form Section -->
  <section class="py-16 bg-white" id="contact">
    <div class="max-w-6xl mx-auto px-4 text-center">
      <h3 class="text-3xl font-semibold mb-12">Contact Us 📞</h3>
      <form action="index.php" method="POST" class="space-y-6">
        <div>
          <input type="text" name="name" placeholder="Your Name" required class="w-full p-4 rounded-lg border border-gray-300">
        </div>
        <div>
          <input type="email" name="email" placeholder="Your Email" required class="w-full p-4 rounded-lg border border-gray-300">
        </div>
        <div>
          <textarea name="message" placeholder="Your Message" rows="6" required class="w-full p-4 rounded-lg border border-gray-300"></textarea>
        </div>
        <button type="submit" class="w-full bg-blue-700 text-white py-3 rounded-lg hover:bg-blue-800 transition duration-300">
          Send Message
        </button>
      </form>
    </div>
  </section>

  <!-- Footer Section -->
  <footer class="bg-blue-900 text-white pt-12 pb-6">
    <div class="max-w-7xl mx-auto px-6">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 text-center md:text-left">
        <div class="mb-8 md:mb-0">
          <h4 class="text-xl font-bold mb-3 text-yellow-300">Shop Details</h4>
          <p class="text-sm mb-1">📍 Bundu, Jharkhand</p>
          <p class="text-sm">📞 +91 917004959376</p>
        </div>
        <div class="mb-8 md:mb-0">
          <h4 class="text-xl font-bold mb-3 text-yellow-300">Quick Links</h4>
          <ul class="space-y-2 text-sm">
            <li><a href="terms-and-conditions.php" class="hover:text-yellow-400 transition duration-300">Terms</a></li>
            <li><a href="services.php" class="hover:text-yellow-400 transition duration-300">Services</a></li>
            <li><a href="contact.php" class="hover:text-yellow-400 transition duration-300">Contact</a></li>
            <li><a href="about.php" class="hover:text-yellow-400 transition duration-300">About Us</a></li>
            <li><a href="privacy-policy.php" class="hover:text-yellow-400 transition duration-300">Privacy Policy</a></li>
          </ul>
        </div>
        <div class="flex justify-center space-x-6 md:space-x-12">
          <a href="https://facebook.com" class="hover:text-yellow-400 text-2xl"><i class="fab fa-facebook"></i></a>
          <a href="https://twitter.com" class="hover:text-yellow-400 text-2xl"><i class="fab fa-twitter"></i></a>
          <a href="https://instagram.com" class="hover:text-yellow-400 text-2xl"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
      <div class="border-t border-blue-700 mt-10 pt-4 text-center text-sm text-blue-200">
        &copy; 2025 <span class="font-medium text-white">Ashish General Store & Cafe</span>. All rights reserved.
      </div>
    </div>
  </footer>

</body>

</html>
