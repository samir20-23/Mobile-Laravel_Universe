@extends('layouts.css.style')
@section('content')
    <!-- HEADER -->
    <header class="header" data-header>
      <div class="overlay" data-overlay></div>
      <div class="header-bottom">
        <div class="container">
          <a href="#" class="logo">
          </a>
          <nav class="navbar" data-navbar>
            <div class="navbar-top">
              <a href="#" class="logo">
              </a>
              <button class="nav-close-btn" data-nav-close-btn aria-label="Close Menu">
                <ion-icon name="close-outline"></ion-icon>
              </button>
            </div>
            <div class="navbar-bottom">
              <ul class="navbar-list">
                <li>
                  <a href="{{ url('/') }}" class="navbar-link" data-nav-link>Home</a>
                </li>
                <li>
                  <a href="{{ url('/') }}" class="navbar-link" data-nav-link>About</a>
                </li>
                <li>
                  <a href="{{ url('contact') }}" class="navbar-link" data-nav-link>Contact</a>
                </li>
              </ul>
            </div>
          </nav>
          <div class="header-bottom-actions">
            <button class="header-bottom-actions-btn" data-nav-open-btn aria-label="Open Menu">
              <ion-icon name="menu-outline"></ion-icon>
              <span>Menu</span>
            </button>
          </div>
        </div>
      </div>
    </header>

    <main>
      <article>
        <!-- HERO -->
        <section class="hero" id="home">
          <div class="container">
            <div class="hero-content">
              <p class="hero-subtitle">
                <ion-icon name="home"></ion-icon>
                <span>Real Estate Agency</span>
              </p>
              <h2 class="h1 hero-title">Find Your Dream House By Us</h2>
              <p class="hero-text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
              </p>
              <a href="{{ url('contact') }}"> <button class="btn">Make An Enquiry</button></a>
            </div>
            <figure class="hero-banner">
            </figure>
          </div>
        </section>

        <!-- ABOUT -->
        <section class="about" id="about">
          <div class="container">
            <figure class="about-banner">
            </figure>
            <div class="about-content">
              <p class="section-subtitle">About Us</p>
              <h2 class="h2 section-title">The Leading Real Estate Rental Marketplace.</h2>
              <p class="about-text">
                Over 39,000 people work for us in more than 70 countries all over the This breadth of global coverage,
                combined with specialist services
              </p>
              <ul class="about-list">
                <li class="about-item">
                  <div class="about-item-icon">
                    <ion-icon name="home-outline"></ion-icon>
                  </div>
                  <p class="about-item-text">Smart Home Design</p>
                </li>
                <li class="about-item">
                  <div class="about-item-icon">
                    <ion-icon name="leaf-outline"></ion-icon>
                  </div>
                  <p class="about-item-text">Beautiful Scene Around</p>
                </li>
                <li class="about-item">
                  <div class="about-item-icon">
                    <ion-icon name="wine-outline"></ion-icon>
                  </div>
                  <p class="about-item-text">Exceptional Lifestyle</p>
                </li>
                <li class="about-item">
                  <div class="about-item-icon">
                    <ion-icon name="shield-checkmark-outline"></ion-icon>
                  </div>
                  <p class="about-item-text">Complete 24/7 Security</p>
                </li>
              </ul>
              <p class="callout">
                "Enimad minim veniam quis nostrud exercitation llamco laboris. Lorem ipsum dolor sit amet"
              </p>
              <a href="{{ url('contact') }}" class="btn">Our Services</a>
            </div>
          </div>
        </section>
      </article>
    </main>

    <!-- FOOTER -->
    <footer class="footer">
      <div class="footer-bottom">
        <div class="container">
          <p class="copyright">
            &copy; 2024 <a href="#">SoliCode</a>. All Rights Reserved
          </p>
        </div>
      </div>
    </footer>
@endsection
