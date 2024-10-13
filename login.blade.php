<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"rel="stylesheet">
    <script src="https://unpkg.com/alpinejs@3.0.6/dist/cdn.min.js"></script> <!-- Include Alpine.js -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/cssall.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />

    <style>
/* Font Face */
@font-face {
    font-family: 'Helvetica Neue';
    src: url('https://fonts.cdnfonts.com/css/helvetica-neue-55') format('woff2');
    font-weight: normal;
    font-style: normal;
}

/* Global Styles */
body {
    margin: 0;
    font-family: 'Helvetica Neue', sans-serif;
    background-color: #000;
    color: #fff;
    line-height: 1.6;
}

.container {
    display: flex; 
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}

.enroll-button {
    flex-shrink: 0; 
    min-width: 120px;
    padding: 10px 20px;
    white-space: nowrap;
}

/* Navigation */
nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 50px;
    background-color: rgba(0, 0, 0, 0.8);
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 1000;
    flex-wrap: wrap;
}

/* Logo */
.logo img {
    max-height: 40px;
    width: auto;
}

/* Navigation Links */
.nav-links {
    list-style: none;
    display: flex;
    margin-right: 10%;
    gap: 30px;
    flex-wrap: wrap;
}

.nav-links li {
    font-weight: 400;
}

.nav-links a {
    color: #fff;
    text-decoration: none;
    transition: color 0.3s;
}

.nav-links a:hover {
    color: #ff5733;
}

/* Hero Section */
.hero {
    background: url('/api/placeholder/1600/900') no-repeat center center fixed;
    background-size: cover;
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    color: #fff;
    position: relative;
    overflow: hidden;
}

.hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5);
}

.hero-content {
    position: relative;
    z-index: 1;
    max-width: 800px;
    margin: 0 auto;
    padding: 0 10px;
}

.hero h1 {
    font-size: 4rem;
    margin: 0;
}

.hero p {
    font-size: 1.2rem;
    margin: 15px 0 30px 0;
}

/* Media query for screens smaller than 760px */
@media (max-width: 760px) {
    .hero-content {
        max-width: calc(100% - 20px);
    }

    .hero h1 {
        font-size: 2.5rem;
    }

    .hero p {
        font-size: 1rem;
    }

    .cta {
        font-size: 0.9rem;
        padding: 10px 20px;
    }
}

input {
    color: #000; /* Set text color to black */
}
.cta {
    background-color: #ff5733;
    color: #fff;
    padding: 12px 24px;
    text-decoration: none;
    border-radius: 50px;
    font-weight: 600;
    transition: background-color 0.3s;
}

.cta:hover {
    background-color: #c7441a;
}

/* Footer */
footer {
    background-color: #111;
    padding: 50px 20px;
    text-align: center;
    color: #666;
    font-size: 0.9rem;
}

.footer-content {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    max-width: 1200px;
    margin: 0 auto;
}

.footer-section {
    margin-bottom: 30px;
}

.footer-section h3 {
    color: #fff;
    margin-bottom: 15px;
}

.footer-section ul {
    list-style: none;
    padding: 0;
}

.footer-section ul li {
    margin-bottom: 10px;
}

.footer-section ul li a {
    color: #666;
    text-decoration: none;
    transition: color 0.3s;
}

.footer-section ul li a:hover {
    color: #ff5733;
}

/* Social Icons */
.social-icons {
    margin-top: 20px;
}

.social-icons a {
    color: #666;
    font-size: 1.5rem;
    margin: 0 10px;
    transition: color 0.3s;
}

.social-icons a:hover {
    color: #ff5733;
}

/* Scroll to Top Button */
#scrollToTop {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #ff5733;
    color: #fff;
    border: none;
    border-radius: 50%;
    width: 50px;
    height: 50px;
    display: none;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    font-size: 1.5rem;
}
/* Login Section */
.login {
    background: url('/api/placeholder/1600/900') no-repeat center center fixed;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    position: relative;
}

.login::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5); /* Translucent overlay */
}

.login .login-content {
    position: relative;
    z-index: 1;
    background-color: rgba(255, 255, 255, 0.1); /* Light translucent background for content */
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    width: 350px;
    color: #fff;
}

.login .login-content h2 {
    color: #ff5733;
    text-align: center;
    margin-bottom: 20px;
}

.login .login-content form input,
.login .login-content form button {
    width: 100%;
    margin: 10px 0;
}

    </style>
    
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <img src="{{ asset('asset/images/logo3.png') }}" alt="DetoxCourses Logo">
            </div>
            <ul class="nav-links">
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section id="home" class="hero">
        <div class="hero-content">
            <h1>Transform Your Health</h1>
            <p>Join our comprehensive detox courses guided by experts and embark on a journey to a healthier you.</p>
            <a href="#login" class="cta">Explore Courses</a>
        </div>
    </section>


 

    <section x-data="{ email: '', password: '', showPassword: false, errorMessage: '' }" id="login" class="login" data-aos="fade-up">
        <div class="login-content">
            <h2>Login</h2>
            <template x-if="errorMessage">
            <div class="mb-4 text-red-600" x-text="errorMessage"></div>
         </template>
            <form method="POST" action="{{ route('login') }}" @submit.prevent="if (!email || !password) { errorMessage = 'Please fill in all fields'; return; } $el.submit();">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-white-700">Email</label>
                    <input type="email" id="email" name="email" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" x-model="email">
                </div>
                <div class="mb-4 relative">
                    <label for="password" class="block text-sm font-medium text-white-700">Password</label>
                    <input :type="showPassword ? 'text' : 'password'" id="password" name="password" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" x-model="password">
                    <button type="button" class="absolute right-2 top-2 text-gray-600" @click="showPassword = !showPassword">
                    </button>
                </div>
                <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600">Login</button>
            </form>
            <div class="mt-4">
            <p class="text-center text-gray-600">Or login with:</p>
            <div class="flex justify-center mt-2">
                <a href="{{ route('social.login', 'google') }}" class="mx-2 px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600">Google</a>
                <a href="{{ route('social.login', 'facebook') }}" class="mx-2 px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Facebook</a>
            </div>
        </div>

        <div class="mt-4 text-center">
            <p class="text-gray-600">Don't have an account? <a href="{{ route('register') }}" class="text-blue-500 hover:underline">Register here</a></p>
        </div>
        </div>
    </section>



    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#program">Our Program</a></li>
                    <li><a href="#courses">Courses</a></li>
                    <li><a href="#benefits">Benefits</a></li>
                    <li><a href="#faq">FAQ</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Contact Us</h3>
                <ul>
                    <li>Email: info@detoxcourses.com</li>
                    <li>Phone: +123 456 7890</li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Follow Us</h3>
                <div class="social-icons">
                    <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <button id="scrollToTop"><i class="fas fa-chevron-up"></i></button>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            AOS.init({
                duration: 1200,
            });

            // Smooth scroll function with offset
            function smoothScroll(target, duration, offset = 0) {
                var targetElement = document.querySelector(target);
                var targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - offset;
                var startPosition = window.pageYOffset;
                var distance = targetPosition - startPosition;
                var startTime = null;

                function animation(currentTime) {
                    if (startTime === null) startTime = currentTime;
                    var timeElapsed = currentTime - startTime;
                    var run = ease(timeElapsed, startPosition, distance, duration);
                    window.scrollTo(0, run);
                    if (timeElapsed < duration) requestAnimationFrame(animation);
                }

                function ease(t, b, c, d) {
                    t /= d / 2;
                    if (t < 1) return c / 2 * t * t + b;
                    t--;
                    return -c / 2 * (t * (t - 2) - 1) + b;
                }

                requestAnimationFrame(animation);
            }

            // Add click event listener to the "Explore Courses" button
            document.querySelector('.cta').addEventListener('click', function(e) {
                e.preventDefault();
                // Adjust the offset value (e.g., 100) to move the scroll position higher
                smoothScroll('#login', 1000, 100);
            });

            // FAQ Accordion
            const faqItems = document.querySelectorAll('.faq-item');
            faqItems.forEach(item => {
                item.querySelector('.faq-question').addEventListener('click', () => {
                    const content = item.querySelector('.faq-item-content');
                    content.style.display = content.style.display === 'block' ? 'none' : 'block';
                });
            });

            // Scroll to Top Button
            const scrollToTopButton = document.getElementById('scrollToTop');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 300) {
                    scrollToTopButton.style.display = 'flex';
                } else {
                    scrollToTopButton.style.display = 'none';
                }
            });
            scrollToTopButton.addEventListener('click', () => {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        });
    </script>
</body>
</html>
