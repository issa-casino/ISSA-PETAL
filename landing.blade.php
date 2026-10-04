<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blossom & Co. — thoughtful flowers and gifts for every occasion.">
    <title>Blossom & Co. | Flowers & Gifts</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/script.js') }}" defer></script>
</head>
<body>
    <header class="header">
        <a href="#home" class="logo">Blossom<span>& Co.</span></a>
        <button class="menu-toggle" id="menuToggle" aria-label="Toggle navigation"
            aria-expanded="false">☰</button>
        <nav class="nav" id="nav">
            <a href="#home">Home</a>
            <a href="#products">Our Flowers</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <main>
        <section class="hero" id="home">
            <div class="hero-content">
                <p class="eyebrow">LITTLE THINGS, BIG FEELINGS</p>
                <h1>Flowers that speak<br><span>from the heart.</span></h1>
                <p class="hero-text">
                    Thoughtfully arranged blooms and lovely gifts
                    to make every moment a little more beautiful.
                </p>
                <a class="btn" href="#products">Explore Our Collection</a>
            </div>
            <div class="hero-art" role="img" aria-label="Pink flower illustration">
                <div class="flower">🌷</div>
                <div class="floating-note">Made with love ♡</div>
            </div>
        </section>

        <section class="section" id="products">
            <div class="section-heading">
                <p class="eyebrow">OUR LITTLE COLLECTION</p>
                <h2>A bouquet for every feeling</h2>
                <p>Choose a little something to brighten someone's day.</p>
            </div>

            <div class="product-grid">
                <article class="product-card">
                    <div class="product-art art-one">🌹</div>
                    <div class="product-info">
                        <h3>Sweet Rose Bouquet</h3>
                        <p>Classic roses wrapped with love.</p>
                        <div class="product-bottom">
                            <strong>₱599</strong>
                            <button class="inquire-btn" data-product="Sweet Rose Bouquet">Inquire ♡</button>
                        </div>
                    </div>
                </article>

                <article class="product-card">
                    <div class="product-art art-two">🌸</div>
                    <div class="product-info">
                        <h3>Pink Dream Bouquet</h3>
                        <p>Soft pink blooms for special days.</p>
                        <div class="product-bottom">
                            <strong>₱799</strong>
                            <button class="inquire-btn" data-product="Pink Dream Bouquet">Inquire ♡</button>
                        </div>
                    </div>
                </article>

                <article class="product-card">
                    <div class="product-art art-three">💐</div>
                    <div class="product-info">
                        <h3>Sunshine Mix</h3>
                        <p>A cheerful mix to make them smile.</p>
                        <div class="product-bottom">
                            <strong>₱699</strong>
                            <button class="inquire-btn" data-product="Sunshine Mix">Inquire ♡</button>
                        </div>
                    </div>
                </article>
            </div>
        </section>

        <section class="about" id="about">
            <div class="about-art" aria-hidden="true">🌼</div>
            <div class="about-content">
                <p class="eyebrow">A LITTLE ABOUT US</p>
                <h2>Every flower has a story.</h2>
                <p>
                    At Blossom & Co., we believe the smallest gestures can
                    mean the most. Our flower and gift collections are
                    designed to help you celebrate love, friendship,
                    gratitude, and life's sweetest moments.
                </p>
                <a href="#contact" class="text-link">Let's make someone's day →</a>
            </div>
        </section>

        <section class="section contact" id="contact">
            <div class="section-heading">
                <p class="eyebrow">WE'D LOVE TO HEAR FROM YOU</p>
                <h2>Send a little love</h2>
                <p>Tell us what you're looking for and we'll help you get started.</p>
            </div>

            <form id="contactForm" class="contact-form">
                <label for="customerName">Your name</label>
                <input id="customerName" name="customerName" type="text"
                    placeholder="Enter your name" required>

                <label for="customerEmail">Email address</label>
                <input id="customerEmail" name="customerEmail" type="email"
                    placeholder="you@example.com" required>

                <label for="productChoice">Interested in</label>
                <select id="productChoice" name="productChoice" required>
                    <option value="">Choose a collection</option>
                    <option>Sweet Rose Bouquet</option>
                    <option>Pink Dream Bouquet</option>
                    <option>Sunshine Mix</option>
                    <option>Custom arrangement</option>
                </select>

                <label for="customerMessage">Your message</label>
                <textarea id="customerMessage" name="customerMessage" rows="4"
                    placeholder="Tell us about your special occasion..." required></textarea>

                <button class="btn submit-btn" type="submit">Prepare Inquiry ♡</button>
                <p id="formMessage" class="form-message" role="status"></p>
                <p class="form-note">Demo form: this page does not send or store messages.</p>
            </form>
        </section>
    </main>

    <footer class="footer">
        <a href="#home" class="logo">Blossom<span>& Co.</span></a>
        <p>Made with love, one bloom at a time. ♡</p>
        <p class="copyright">© <span id="year"></span> Blossom & Co.</p>
    </footer>
</body>
</html>