<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Tech Pro Systems</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <style>
        html {
            scroll-behavior: smooth;
        }
        .video-container {
            position: relative;
            height: 80vh;
            overflow: hidden;
        }
        .video-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
        }
        .section {
            min-height: 100vh;
            padding-top: 4rem;
            padding-bottom: 4rem;
            position: relative;
        }
        .scroll-indicator {
            position: absolute;
            bottom: 2rem;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .scroll-indicator:hover {
            transform: translateX(-50%) scale(1.1);
        }
        .scroll-circle {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .scroll-circle i {
            color: #333;
            font-size: 20px;
        }
        @media (max-width: 768px) {
            .nav-links {
                flex-wrap: wrap;
                justify-content: center;
                gap: 0.5rem;
                padding: 0.25rem;
            }
            .nav-links a {
                padding: 0.25rem 0.75rem;
                font-size: 0.875rem;
                white-space: nowrap;
            }
            nav .container {
                padding: 0.5rem 0.25rem;
            }
            nav .flex {
                gap: 0.5rem;
            }
        }
        @media (max-width: 480px) {
            .nav-links {
                gap: 0.25rem;
            }
            .nav-links a {
                padding: 0.25rem 0.5rem;
                font-size: 0.8125rem;
            }
        }
        /* Desktop styles (default) */
        .nav-links a {
            padding: 0.5rem 1.5rem;  /* Restore original desktop padding */
            font-size: 1rem;         /* Restore original desktop font size */
        }
        
        .nav-links {
            gap: 1rem;              /* Restore original desktop gap */
        }
        span.phonebrk {
    display: inline-block;
    margin-left: 35px;
}
    </style>  
</head>
<body>
    <!-- Hero Section -->
    <div class="video-container">
        <video autoplay muted loop class="w-full h-full object-cover">
            <source src="/assets/video/hero_architect_1.mp4" type="video/mp4">
        </video>
        <div class="video-overlay">
            <img src="https://smarttechprosystems.com/assets/images/Smart Tech Logo.png" alt="Logo" style="width:200px"/>
            <h1 class="text-6xl font-bold mb-4">Welcome to Smart Tech Pro Systems</h1>
            <p class="text-2xl">Innovative AV Solutions for Your Home and Business</p>
        </div>
        <a href="#about" class="scroll-indicator">
            <div class="scroll-circle">
                <i class="fas fa-chevron-down"></i>
            </div>
        </a>
    </div>

    <!-- Navigation -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-6 py-3">
            <div class="flex justify-center nav-links">
                <a href="#about" class="text-gray-700 hover:text-gray-900">About Us</a>
                <a href="#services" class="text-gray-700 hover:text-gray-900">Services</a>
                <a href="#portfolio" class="text-gray-700 hover:text-gray-900">Portfolio</a>
                <a href="#testimonials" class="text-gray-700 hover:text-gray-900">Testimonials</a>
                <a href="#contact" class="text-gray-700 hover:text-gray-900">Contact</a>
            </div>
        </div>
    </nav>

    <!-- About Section -->
    <section id="about" class="relative py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold mb-8 text-center">About Us</h2>
            
            <div class="max-w-4xl mx-auto space-y-8">
                <!-- Introduction -->
                <div class="mb-8">
                    <p class="text-lg leading-relaxed">
                        At Smart Tech Pro Systems, we bring over 25 years of expertise in the audio-visual industry, delivering cutting-edge solutions tailored to our clients' unique needs. From immersive home theaters to smart office environments, we combine quality, innovation, and reliability in every project.
                    </p>
                </div>

                <!-- Experience and Expertise -->
                <div class="mb-8">
                    <h3 class="text-2xl font-semibold mb-4">Experience and Expertise</h3>
                    <p class="text-lg leading-relaxed">
                        With decades of experience, we've worked in some of Los Angeles' most exclusive neighborhoods, including Bel Air, Beverly Hills, and beyond. Our trusted partnerships with high-end architects and builders have allowed us to create bespoke AV systems that integrate seamlessly into luxury homes and commercial spaces.
                    </p>
                </div>

                <!-- Pioneering Innovation -->
                <div class="mb-8">
                    <h3 class="text-2xl font-semibold mb-4">Pioneering Innovation</h3>
                    <p class="text-lg leading-relaxed">
                        At the forefront of technological innovation, we continually push boundaries to bring you the latest and most relevant AV trends. As regular attendees of industry-leading events like CEDIA and CES, we stay ahead of the curve, sourcing the newest products and solutions that enhance the modern lifestyle.
                    </p>
                </div>

                <!-- Rooted in Los Angeles -->
                <div class="mb-8">
                    <h3 class="text-2xl font-semibold mb-4">Rooted in Los Angeles</h3>
                    <p class="text-lg leading-relaxed">
                        As LA natives, we understand the city's unique lifestyle and design sensibilities. This local perspective allows us to create solutions that not only elevate your space but also align with the distinctive needs of our community. At Smart Tech Pro Systems, we are proud to serve the city we call home.
                    </p>
                </div>

                <!-- Your Partner in Excellence -->
                <div class="mb-8">
                    <h3 class="text-2xl font-semibold mb-4">Your Partner in Excellence</h3>
                    <p class="text-lg leading-relaxed">
                        Whether you're envisioning a state-of-the-art home theater, seamless smart home automation, or a high-performance office environment, our team is dedicated to turning your vision into reality. With our expertise and passion for innovation, we deliver AV solutions that redefine excellence.
                    </p>
                </div>
            </div>

            <a href="#services" class="scroll-indicator">
                <div class="scroll-circle">
                    <i class="fas fa-chevron-down"></i>
                </div>
            </a>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="section bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-8">Our Services</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-gray-100 p-6 rounded-lg shadow">
                    <h3 class="text-2xl font-semibold mb-4">Home Theater Design</h3>
                    <p class="text-gray-700">Experience cinema-quality visuals and sound from the comfort of your home.</p>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow">
                    <h3 class="text-2xl font-semibold mb-4">Smart Home Integration</h3>
                    <p class="text-gray-700">Transform your home with comprehensive automation: lighting, audio, TVs, climate control, motorized shades, fireplaces, and secure access control - all seamlessly integrated for effortless living.</p>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow">
                    <h3 class="text-2xl font-semibold mb-4">Conference Room AV</h3>
                    <p class="text-gray-700">Upgrade your workspace with seamless video conferencing and collaboration tools.</p>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow">
                    <h3 class="text-2xl font-semibold mb-4">Enterprise Networks</h3>
                    <p class="text-gray-700">High-performance, secure networking solutions designed for demanding environments. From mesh Wi-Fi to dedicated VLANs, we ensure reliable connectivity for homes and businesses.</p>
                </div>
            </div>
        </div>
        <a href="#portfolio" class="scroll-indicator">
            <div class="scroll-circle">
                <i class="fas fa-chevron-down"></i>
            </div>
        </a>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="section bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-8">Our Portfolio</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <img src="/assets/images/media-room-2.jpg" alt="Century City Media Room" class="rounded mb-4" onclick="openModal(this.src, this.alt)">
                    <p class="text-gray-700">Sleek media room installation in Century City featuring a minimalist projector mount and clean cable management. This modern space combines form and function with hidden components and a streamlined aesthetic. The perfect example of how technology can enhance a room while maintaining its elegant design.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <img src="/assets/images/smart-home-1.jpg" alt="Hollywood Hills Smart Home" class="rounded mb-4" onclick="openModal(this.src, this.alt)">
                    <p class="text-gray-700">Family room installation in the Hollywood Hills featuring hidden components and clean design. The integrated smart home system seamlessly controls lighting, audio, and climate while maintaining the room's elegant aesthetic.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <img src="/assets/images/conf-room-2.jpg" alt="Beverly Hills Conference Room" class="rounded mb-4" onclick="openModal(this.src, this.alt)">
                    <p class="text-gray-700">State-of-the-art conference room featuring quad 4K laser projectors and an interactive smart whiteboard system. The integrated solution enables seamless wireless presentation sharing, video conferencing, and collaborative whiteboarding. The smart whiteboard supports multi-touch gestures, digital annotation, and instant sharing of meeting notes.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <img src="/assets/images/conf-room-2.jpg" alt="Beverly Hills Conference Room" class="rounded mb-4" onclick="openModal(this.src, this.alt)">
                    <p class="text-gray-700">State-of-the-art conference room featuring quad 4K laser projectors and an interactive smart whiteboard system. The integrated solution enables seamless wireless presentation sharing, video conferencing, and collaborative whiteboarding. The smart whiteboard supports multi-touch gestures, digital annotation, and instant sharing of meeting notes.</p>
                </div>
            </div>
        </div>
        <a href="#testimonials" class="scroll-indicator">
            <div class="scroll-circle">
                <i class="fas fa-chevron-down"></i>
            </div>
        </a>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="relative py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold mb-12 text-center">What Our Clients Say</h2>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <!-- Short Testimonial 1 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="mb-4">
                        <i class="fas fa-quote-left text-2xl text-blue-600"></i>
                    </div>
                    <p class="text-gray-600 mb-4">
                        "The smart home system they installed has made our daily life so much easier. Everything works perfectly with just a tap on our phones."
                    </p>
                    <div class="font-semibold">James K.</div>
                    <div class="text-sm text-gray-500">Pacific Palisades</div>
                </div>

                <!-- Original Long Testimonial 1 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="mb-4">
                        <i class="fas fa-quote-left text-2xl text-blue-600"></i>
                    </div>
                    <p class="text-gray-600 mb-4">
                        "Smart Tech Pro Systems transformed our Beverly Hills home into a technological masterpiece. The integrated lighting, climate, and entertainment systems work flawlessly together. Their attention to detail and professional installation exceeded our expectations."
                    </p>
                    <div class="font-semibold">Michael R.</div>
                    <div class="text-sm text-gray-500">Beverly Hills Residence</div>
                </div>

                <!-- Short Testimonial 2 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="mb-4">
                        <i class="fas fa-quote-left text-2xl text-blue-600"></i>
                    </div>
                    <p class="text-gray-600 mb-4">
                        "Best home theater installation experience ever! The team was professional and the result is spectacular."
                    </p>
                    <div class="font-semibold">Linda M.</div>
                    <div class="text-sm text-gray-500">Santa Monica</div>
                </div>

                <!-- Original Long Testimonial 2 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="mb-4">
                        <i class="fas fa-quote-left text-2xl text-blue-600"></i>
                    </div>
                    <p class="text-gray-600 mb-4">
                        "As an architect, I've worked with many AV companies, but Smart Tech Pro Systems stands out. Their enterprise-grade network installation in our 50,000 sq ft commercial project was impeccable. They're now our go-to team for all high-end installations."
                    </p>
                    <div class="font-semibold">Sarah Chen, AIA</div>
                    <div class="text-sm text-gray-500">Principal Architect, Chen Design Group</div>
                </div>

                <!-- Short Testimonial 3 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="mb-4">
                        <i class="fas fa-quote-left text-2xl text-blue-600"></i>
                    </div>
                    <p class="text-gray-600 mb-4">
                        "Their conference room setup revolutionized our business meetings. Crystal clear audio and video quality every time."
                    </p>
                    <div class="font-semibold">Robert T.</div>
                    <div class="text-sm text-gray-500">CEO, Tech Innovations LA</div>
                </div>

                <!-- Original Long Testimonial 3 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="mb-4">
                        <i class="fas fa-quote-left text-2xl text-blue-600"></i>
                    </div>
                    <p class="text-gray-600 mb-4">
                        "The home theater they designed for us is absolutely stunning. The attention to acoustic detail and video quality is remarkable. Their team was professional throughout the project and provided excellent training on how to use everything."
                    </p>
                    <div class="font-semibold">David & Lisa Thompson</div>
                    <div class="text-sm text-gray-500">Bel Air Estate</div>
                </div>
            </div>

            <a href="#contact" class="scroll-indicator">
                <div class="scroll-circle">
                    <i class="fas fa-chevron-down"></i>
                </div>
            </a>
        </div>
    </section>

    <!-- Contact Us Section -->
    <section id="contact" class="section bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-8">Contact Us</h2>
            
            <h3 class="text-4xl font-bold text-center mb-8"><span>1-855-HIFI-805</span><br><span class="phonebrk"><small>(4434)</small></h3>
 <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "info@smarttechprosystems.com";  // Your email
    $subject = "New Contact Form Submission";
    $headers = "From: no-reply@yourdomain.com\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "<p style='color: green;'>Message sent successfully!</p>";
    } else {
        echo "<p style='color: red;'>Error sending message.</p>";
    }
}
?>   
            <form class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow" method="POST">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Name</label>
                    <input type="text" id="name"  name="name" class="w-full p-2 border rounded">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" id="email" name="email" class="w-full p-2 border rounded">
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-gray-700">Message</label>
                    <textarea id="message" name="message" rows="4" class="w-full p-2 border rounded"></textarea>
                </div>
                <button class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700" type="submit">Send Message</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto px-6 text-center">
            <p>&copy; 2025 Smart Tech Pro Systems. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Modal container -->
    <div id="imageModal" class="modal">
        <span class="close-modal" onclick="closeModal()">&times;</span>
        <div class="modal-content-wrapper">
            <img id="modalImage" class="modal-content">
            <div id="imageCaption"></div>
        </div>
    </div>
    
    <script src="js/script.js"></script>
</body>
</html>
