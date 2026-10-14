@include('home.header')

<!-- ============================================================
     HERO CAROUSEL
     ============================================================ -->
<section class="bk-hero">
  <div class="bk-hero-slides" id="bkHeroTrack">

    <!-- Slide 1  Digital Banking -->
    <div class="bk-hero-slide">
      <div class="bk-hero-bg" style="background-image:url('{{ asset('frontassets/images/banner/banner-slide-1.jpg') }}')"></div>
      <div class="bk-wrap">
        <div class="bk-hero-body">
          <span class="bk-hero-label"><i class="ri-sparkling-2-fill"></i> Next-Generation Digital Banking</span>
          <h1>Your Wealth Deserves a <em>Smarter</em> Home.</h1>
          <p>Swiftsavers Trust Bank fuses bank-grade 256-bit security with an experience engineered for modern life  lightning-fast global transfers, real-time portfolio insights, and expert human support available around the clock.</p>
          <div class="bk-hero-actions">
            <a href="{{ route('register') }}" class="bk-btn bk-btn--white">Open a Free Account <i class="ri-arrow-right-line"></i></a>
            <a href="{{ route('login') }}" class="bk-btn bk-btn--glass">Sign In <i class="ri-login-circle-line"></i></a>
          </div>
        </div>
      </div>
    </div>

    <!-- Slide 2  Personal & Business -->
    <div class="bk-hero-slide">
      <div class="bk-hero-bg" style="background-image:url('{{ asset('frontassets/images/banner/banner-slide-2.jpg') }}')"></div>
      <div class="bk-wrap">
        <div class="bk-hero-body">
          <span class="bk-hero-label"><i class="ri-briefcase-4-fill"></i> Personal &amp; Business Banking</span>
          <h1>One Account. <em>Every</em> Dimension of Your Finances.</h1>
          <p>Personal savings, business accounts, premium credit cards, and high-yield fixed deposits  all seamlessly managed from a single unified dashboard engineered to grow with your ambitions.</p>
          <div class="bk-hero-actions">
            <a href="{{ url('services') }}" class="bk-btn bk-btn--white">Explore Services <i class="ri-arrow-right-line"></i></a>
            <a href="{{ route('register') }}" class="bk-btn bk-btn--glass">Get Started <i class="ri-user-add-line"></i></a>
          </div>
        </div>
      </div>
    </div>

    <!-- Slide 3  Global Transfers -->
    <div class="bk-hero-slide">
      <div class="bk-hero-bg" style="background-image:url('{{ asset('frontassets/images/banner/banner-slide-3.jpg') }}')"></div>
      <div class="bk-wrap">
        <div class="bk-hero-body">
          <span class="bk-hero-label"><i class="ri-earth-fill"></i> Borderless Global Payments</span>
          <h1>Send Money Anywhere on Earth. <em>Instantly.</em></h1>
          <p>Connect with 50+ countries through transparent, live mid-market exchange rates with zero hidden markups. Global finance  finally built the way it should feel: fast, fair, and effortless.</p>
          <div class="bk-hero-actions">
            <a href="{{ route('register') }}" class="bk-btn bk-btn--white">Start Transferring <i class="ri-arrow-right-line"></i></a>
            <a href="{{ url('contact') }}" class="bk-btn bk-btn--glass">Talk to Us <i class="ri-customer-service-2-line"></i></a>
          </div>
        </div>
      </div>
    </div>

    <!-- Slide 4  High-Yield Savings -->
    <div class="bk-hero-slide">
      <div class="bk-hero-bg" style="background-image:url('{{ asset('frontassets/images/banner/4.jpg') }}')"></div>
      <div class="bk-wrap">
        <div class="bk-hero-body">
          <span class="bk-hero-label"><i class="ri-pie-chart-2-fill"></i> High-Yield Tenured Savings</span>
          <h1>Lock In Superior Returns. Build <em>Lasting</em> Wealth.</h1>
          <p>Grow your capital confidently with guaranteed, fixed interest rates on structured tenured deposits and exclusive high-yield wealth management accounts  designed to outperform and endure.</p>
          <div class="bk-hero-actions">
            <a href="{{ route('register') }}" class="bk-btn bk-btn--white">Start Growing Wealth <i class="ri-arrow-right-line"></i></a>
            <a href="{{ url('about') }}" class="bk-btn bk-btn--glass">Learn More <i class="ri-information-line"></i></a>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Controls -->
  <button class="bk-hero-arr bk-hero-arr--prev" onclick="bkSlide(-1)" aria-label="Previous slide"><i class="ri-arrow-left-s-line"></i></button>
  <button class="bk-hero-arr bk-hero-arr--next" onclick="bkSlide(1)" aria-label="Next slide"><i class="ri-arrow-right-s-line"></i></button>
  <div class="bk-hero-dots" id="bkDots">
    <button class="active" onclick="bkGo(0)" aria-label="Go to slide 1"></button>
    <button onclick="bkGo(1)" aria-label="Go to slide 2"></button>
    <button onclick="bkGo(2)" aria-label="Go to slide 3"></button>
    <button onclick="bkGo(3)" aria-label="Go to slide 4"></button>
  </div>
  <div class="bk-hero-progress"><div class="bk-hero-progress-bar" id="bkProgress"></div></div>
</section>

<!-- ============================================================
     FEATURE TICKER
     ============================================================ -->
<div class="bk-ticker" aria-hidden="true">
  <div class="bk-ticker-track">
    <span class="bk-ticker-item"><i class="ri-shield-check-fill"></i> 256-Bit Bank-Grade Encryption</span>
    <span class="bk-ticker-sep"></span>
    <span class="bk-ticker-item"><i class="ri-flashlight-fill"></i> Instant Global Transfers</span>
    <span class="bk-ticker-sep"></span>
    <span class="bk-ticker-item"><i class="ri-global-fill"></i> 50+ Countries Covered</span>
    <span class="bk-ticker-sep"></span>
    <span class="bk-ticker-item"><i class="ri-customer-service-2-fill"></i> 24/7 Expert Human Support</span>
    <span class="bk-ticker-sep"></span>
    <span class="bk-ticker-item"><i class="ri-bank-card-fill"></i> Absolutely Zero Hidden Fees</span>
    <span class="bk-ticker-sep"></span>
    <span class="bk-ticker-item"><i class="ri-percent-fill"></i> High-Yield Tenured Deposits</span>
    <span class="bk-ticker-sep"></span>
    <span class="bk-ticker-item"><i class="ri-pie-chart-fill"></i> Smart Portfolio Management</span>
    <span class="bk-ticker-sep"></span>
    <span class="bk-ticker-item"><i class="ri-smartphone-fill"></i> Seamless Mobile Banking</span>
    <span class="bk-ticker-sep"></span>
    <span class="bk-ticker-item"><i class="ri-exchange-dollar-fill"></i> Live Mid-Market FX Rates</span>
    <span class="bk-ticker-sep"></span>
    <!-- duplicate for seamless loop -->
    <span class="bk-ticker-item"><i class="ri-shield-check-fill"></i> 256-Bit Bank-Grade Encryption</span>
    <span class="bk-ticker-sep"></span>
    <span class="bk-ticker-item"><i class="ri-flashlight-fill"></i> Instant Global Transfers</span>
    <span class="bk-ticker-sep"></span>
    <span class="bk-ticker-item"><i class="ri-global-fill"></i> 50+ Countries Covered</span>
    <span class="bk-ticker-sep"></span>
    <span class="bk-ticker-item"><i class="ri-customer-service-2-fill"></i> 24/7 Expert Human Support</span>
    <span class="bk-ticker-sep"></span>
    <span class="bk-ticker-item"><i class="ri-bank-card-fill"></i> Absolutely Zero Hidden Fees</span>
    <span class="bk-ticker-sep"></span>
    <span class="bk-ticker-item"><i class="ri-percent-fill"></i> High-Yield Tenured Deposits</span>
    <span class="bk-ticker-sep"></span>
    <span class="bk-ticker-item"><i class="ri-pie-chart-fill"></i> Smart Portfolio Management</span>
    <span class="bk-ticker-sep"></span>
    <span class="bk-ticker-item"><i class="ri-smartphone-fill"></i> Seamless Mobile Banking</span>
    <span class="bk-ticker-sep"></span>
    <span class="bk-ticker-item"><i class="ri-exchange-dollar-fill"></i> Live Mid-Market FX Rates</span>
    <span class="bk-ticker-sep"></span>
  </div>
</div>

<!-- ============================================================
     TRUST STRIP
     ============================================================ -->
<section class="bk-trust">
  <div class="bk-wrap">
    <div class="bk-trust-grid">
      <div class="bk-trust-item">
        <div class="bk-trust-icon"><i class="ri-lock-2-line"></i></div>
        <div><strong>256-bit Encryption</strong><span>Military-grade security on every session</span></div>
      </div>
      <div class="bk-trust-item">
        <div class="bk-trust-icon"><i class="ri-global-line"></i></div>
        <div><strong>50+ Countries</strong><span>One network, truly unlimited reach</span></div>
      </div>
      <div class="bk-trust-item">
        <div class="bk-trust-icon"><i class="ri-customer-service-2-line"></i></div>
        <div><strong>24/7 Live Support</strong><span>Real experts, always a call away</span></div>
      </div>
      <div class="bk-trust-item">
        <div class="bk-trust-icon"><i class="ri-flashlight-line"></i></div>
        <div><strong>Instant Settlement</strong><span>Your money moves the moment you act</span></div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     SERVICES / FEATURES BENTO GRID
     ============================================================ -->
<section class="bk-section" id="services">
  <div class="bk-wrap">
    <div class="bk-section-top">
      <span class="bk-label">Our Services</span>
      <h2 class="bk-title">World-Class Banking, Built Around <em>You</em></h2>
      <p class="bk-desc">From everyday personal banking to high-speed international transfers and wealth-building deposit products  explore the complete financial ecosystem engineered around your goals.</p>
    </div>
    <div class="bk-cards-grid bk-cards-grid--bento">
      <div class="bk-card bk-card--featured sr">
        <span class="bk-card-badge">Most Popular</span>
        <div class="bk-card-icon"><i class="ri-exchange-dollar-line"></i></div>
        <h3>International Transfers</h3>
        <p>Move money across borders in seconds using real-time mid-market exchange rates, enterprise-grade security, and fees so low you'll wonder why you ever paid more.</p>
        <a href="{{ route('register') }}" class="bk-card-link">Send Money Now <i class="ri-arrow-right-line"></i></a>
      </div>
      <div class="bk-card sr">
        <div class="bk-card-icon"><i class="ri-bank-line"></i></div>
        <h3>Personal Banking</h3>
        <p>Checking and savings accounts that actually reward loyalty  competitive interest rates, zero maintenance fees, and a sleek dashboard that keeps you fully in control.</p>
        <a href="{{ url('services') }}" class="bk-card-link">Learn More <i class="ri-arrow-right-line"></i></a>
      </div>
      <div class="bk-card sr">
        <div class="bk-card-icon"><i class="ri-briefcase-4-line"></i></div>
        <h3>Business Solutions</h3>
        <p>Commercial accounts, payroll automation, bulk payments, and treasury management tools  a complete financial backbone built for businesses ready to scale.</p>
        <a href="{{ url('services') }}" class="bk-card-link">Learn More <i class="ri-arrow-right-line"></i></a>
      </div>
      <div class="bk-card sr">
        <div class="bk-card-icon"><i class="ri-bank-card-line"></i></div>
        <h3>Premium Cards</h3>
        <p>Beautifully designed virtual and physical cards with instant cashback rewards, zero annual fees, travel insurance benefits, and seamless multi-currency support worldwide.</p>
        <a href="{{ url('services') }}" class="bk-card-link">Learn More <i class="ri-arrow-right-line"></i></a>
      </div>
      <div class="bk-card sr">
        <div class="bk-card-icon"><i class="ri-hand-coin-line"></i></div>
        <h3>Loans &amp; Financing</h3>
        <p>Flexible personal loans, business credit lines, and structured home financing  all with transparent, fixed rates and repayment terms tailored to your exact situation.</p>
        <a href="{{ url('services') }}" class="bk-card-link">Learn More <i class="ri-arrow-right-line"></i></a>
      </div>
      <div class="bk-card sr">
        <div class="bk-card-icon"><i class="ri-pie-chart-2-line"></i></div>
        <h3>Wealth &amp; Deposits</h3>
        <p>Lock in guaranteed, above-market returns with our exclusive high-yield tenured deposit accounts  purpose-built to protect and compound your capital over time.</p>
        <a href="{{ url('about') }}" class="bk-card-link">Learn More <i class="ri-arrow-right-line"></i></a>
      </div>
      <div class="bk-card bk-card--cta sr">
        <div class="bk-card-icon"><i class="ri-question-answer-line"></i></div>
        <h3>Have a Question?</h3>
        <p>Our certified financial specialists are on hand 24/7 to help you choose the right product, open your account, or solve any issue  instantly.</p>
        <a href="{{ url('contact') }}" class="bk-card-link">Speak to an Expert <i class="ri-arrow-right-line"></i></a>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     HOW IT WORKS
     ============================================================ -->
<section class="bk-section bk-section--gray">
  <div class="bk-wrap">
    <div class="bk-section-top">
      <span class="bk-label">How It Works</span>
      <h2 class="bk-title">Up and Running in <em>Under 5 Minutes</em></h2>
      <p class="bk-desc">Joining Swiftsavers Trust Bank is effortless. Three simple steps stand between you and a smarter, faster, fee-free banking experience.</p>
    </div>
    <div class="bk-steps">
      <div class="bk-step sr">
        <div class="bk-step-num">01</div>
        <h3>Create Your Account</h3>
        <p>Register securely online in under 5 minutes  just a valid government ID and your basic details. No branch visit. No paperwork. No waiting.</p>
      </div>
      <div class="bk-step-line"></div>
      <div class="bk-step sr">
        <div class="bk-step-num">02</div>
        <h3>Verify Your Identity</h3>
        <p>Our automated, AI-powered verification process secures your account with bank-grade protocols from day one  private, instant, and completely friction-free.</p>
      </div>
      <div class="bk-step-line"></div>
      <div class="bk-step sr">
        <div class="bk-step-num">03</div>
        <h3>Fund &amp; Take Control</h3>
        <p>Deposit funds instantly, execute global transfers, track spending in real time, and manage every financial goal from one powerful, unified dashboard.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     SMART BANKING FEATURES
     ============================================================ -->
<section class="bk-features-dark" id="features">
  <div class="bk-wrap">
    <div class="bk-section-top">
      <span class="bk-label bk-label--light">Smart Banking</span>
      <h2 class="bk-title bk-title--white">One Platform. <em>Complete</em> Command of Your Money.</h2>
      <p class="bk-desc bk-desc--light">We've merged cutting-edge fintech infrastructure with the kind of personal service that earns real trust  making financial management feel effortless, every single day.</p>
    </div>
    <div class="bk-fd-grid">
      <div class="bk-fd-item">
        <div class="bk-fd-icon"><i class="ri-send-plane-fill"></i></div>
        <h4>Instant Transfers</h4>
        <p>Send domestic and international payments in seconds. Real-time confirmation, low fees, and complete transparency  every time.</p>
      </div>
      <div class="bk-fd-item">
        <div class="bk-fd-icon"><i class="ri-smartphone-line"></i></div>
        <h4>Mobile-First Banking</h4>
        <p>A full-featured banking experience across every device. Manage accounts, initiate payments, and review your history on phone, tablet, or desktop.</p>
      </div>
      <div class="bk-fd-item">
        <div class="bk-fd-icon"><i class="ri-fingerprint-line"></i></div>
        <h4>Biometric Security</h4>
        <p>Access your account with fingerprint or face recognition  secured by hardware-level authentication that never stores biometric data externally.</p>
      </div>
      <div class="bk-fd-item">
        <div class="bk-fd-icon"><i class="ri-notification-3-line"></i></div>
        <h4>Instant Push Alerts</h4>
        <p>Receive real-time SMS and email notifications the moment funds move, arrive, or trigger a balance change  you're always the first to know.</p>
      </div>
      <div class="bk-fd-item">
        <div class="bk-fd-icon"><i class="ri-line-chart-line"></i></div>
        <h4>Spending Intelligence</h4>
        <p>Automatic categorisation and vivid visual analytics help you understand where every dollar goes  and identify exactly where you can save more.</p>
      </div>
      <div class="bk-fd-item">
        <div class="bk-fd-icon"><i class="ri-shield-star-line"></i></div>
        <h4>AI Fraud Protection</h4>
        <p>Our proprietary AI monitors every transaction 24/7, flags anomalies in milliseconds, and locks suspicious activity before it can cause damage.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     ABOUT / WHY CHOOSE US
     ============================================================ -->
<section class="bk-section" id="about">
  <div class="bk-wrap">
    <div class="bk-split">
      <div class="bk-split-media sr">
        <div class="bk-img-stack">
          <img src="{{ asset('frontassets/images/banner/5.jpg') }}" alt="Expert banking advisors at Swiftsavers Trust Bank" class="bk-img-main">
          <div class="bk-img-badge">
            <span class="bk-img-badge-num">15+</span>
            <span class="bk-img-badge-txt">Years of<br>Excellence</span>
          </div>
        </div>
      </div>
      <div class="bk-split-text sr">
        <span class="bk-label">Why Choose Us</span>
        <h2 class="bk-title">A Bank Built on Integrity, Not Just <em>Numbers</em></h2>
        <p class="bk-desc" style="margin:0 0 20px">For over a decade, Swiftsavers Trust Bank has been redefining what digital finance can feel like  fusing powerful fintech infrastructure with genuine human care, so every customer feels safe, heard, and valued in everything we do.</p>
        <div class="bk-check-list">
          <div class="bk-check-item">
            <i class="ri-checkbox-circle-fill"></i>
            <div>
              <strong>Radical Transparency  Always</strong>
              <p>No hidden fees. No fine-print traps. No surprise charges. Just honest banking that respects your intelligence and your money.</p>
            </div>
          </div>
          <div class="bk-check-item">
            <i class="ri-checkbox-circle-fill"></i>
            <div>
              <strong>Multi-Layer Enterprise Security</strong>
              <p>Multi-factor authentication, end-to-end SSL encryption, real-time fraud monitoring, and biometric access guard every cent.</p>
            </div>
          </div>
          <div class="bk-check-item">
            <i class="ri-checkbox-circle-fill"></i>
            <div>
              <strong>24/7 Dedicated Human Support</strong>
              <p>Speak with a real certified financial specialist any time of day or night  not a bot, not a script. A person who genuinely cares.</p>
            </div>
          </div>
        </div>
        <a href="{{ url('about') }}" class="bk-btn bk-btn--fill" style="margin-top:20px">Discover Our Story <i class="ri-arrow-right-line"></i></a>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     WHY SWITCH / COMPARISON
     ============================================================ -->
<section class="bk-section bk-section--gray">
  <div class="bk-wrap">
    <div class="bk-section-top">
      <span class="bk-label">Why Switch</span>
      <h2 class="bk-title">The <em>Difference</em> Speaks for Itself</h2>
      <p class="bk-desc">No queues, no slow approvals, no surprise charges. Just honest, intelligent banking that respects your time and maximises your money.</p>
    </div>
    <div class="bk-compare sr">
      <div class="bk-compare-row bk-compare-row--head">
        <div class="bk-compare-label">Feature</div>
        <div class="bk-compare-col bk-compare-col--us">Swiftsavers Trust Bank</div>
        <div class="bk-compare-col">Traditional Banks</div>
      </div>
      <div class="bk-compare-row">
        <div class="bk-compare-label">Account Opening</div>
        <div class="bk-compare-col bk-compare-col--us"><i class="ri-checkbox-circle-fill"></i> Under 5 mins, fully online</div>
        <div class="bk-compare-col"><i class="ri-close-circle-line"></i> Days, requires branch visit</div>
      </div>
      <div class="bk-compare-row">
        <div class="bk-compare-label">Global Transfer Speed</div>
        <div class="bk-compare-col bk-compare-col--us"><i class="ri-checkbox-circle-fill"></i> Real-time &amp; Instant</div>
        <div class="bk-compare-col"><i class="ri-close-circle-line"></i> 3–5 Business days</div>
      </div>
      <div class="bk-compare-row">
        <div class="bk-compare-label">Customer Support</div>
        <div class="bk-compare-col bk-compare-col--us"><i class="ri-checkbox-circle-fill"></i> 24/7 Live Expert Support</div>
        <div class="bk-compare-col"><i class="ri-close-circle-line"></i> Business hours only</div>
      </div>
      <div class="bk-compare-row">
        <div class="bk-compare-label">Monthly Account Fees</div>
        <div class="bk-compare-col bk-compare-col--us"><i class="ri-checkbox-circle-fill"></i> $0  Completely Free</div>
        <div class="bk-compare-col"><i class="ri-close-circle-line"></i> $10–$35 Recurring</div>
      </div>
      <div class="bk-compare-row">
        <div class="bk-compare-label">Fraud Monitoring</div>
        <div class="bk-compare-col bk-compare-col--us"><i class="ri-checkbox-circle-fill"></i> AI-driven, real-time detection</div>
        <div class="bk-compare-col"><i class="ri-close-circle-line"></i> Delayed manual review</div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     EXCHANGE RATES
     ============================================================ -->
<section class="bk-section" id="rates">
  <div class="bk-wrap">
    <div class="bk-section-top">
      <span class="bk-label">Live FX Rates</span>
      <h2 class="bk-title">Real-Time Rates. <em>Zero</em> Hidden Markups.</h2>
      <p class="bk-desc">Our rates are sourced directly from global interbank markets and refreshed continuously  giving you complete visibility and the best value before every international transfer.</p>
    </div>
    <div class="bk-rates-wrap sr">
      <table class="bk-rates-table">
        <thead>
          <tr>
            <th>Currency Pair</th>
            <th>Buy Rate (USD)</th>
            <th>Sell Rate (USD)</th>
            <th>24h Change</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><div class="bk-cur"><img src="https://flagcdn.com/w40/gb.png" alt="GBP"><div><b>GBP</b><small>British Pound</small></div></div></td>
            <td class="bk-mono">1.2645</td>
            <td class="bk-mono">1.2590</td>
            <td><span class="bk-badge bk-badge--up">+0.12%</span></td>
            <td><a href="{{ route('register') }}" class="bk-btn-xs">Send <i class="ri-send-plane-line"></i></a></td>
          </tr>
          <tr>
            <td><div class="bk-cur"><img src="https://flagcdn.com/w40/eu.png" alt="EUR"><div><b>EUR</b><small>Euro</small></div></div></td>
            <td class="bk-mono">1.0842</td>
            <td class="bk-mono">1.0790</td>
            <td><span class="bk-badge bk-badge--up">+0.08%</span></td>
            <td><a href="{{ route('register') }}" class="bk-btn-xs">Send <i class="ri-send-plane-line"></i></a></td>
          </tr>
          <tr>
            <td><div class="bk-cur"><img src="https://flagcdn.com/w40/jp.png" alt="JPY"><div><b>JPY</b><small>Japanese Yen</small></div></div></td>
            <td class="bk-mono">0.00671</td>
            <td class="bk-mono">0.00665</td>
            <td><span class="bk-badge bk-badge--down">-0.15%</span></td>
            <td><a href="{{ route('register') }}" class="bk-btn-xs">Send <i class="ri-send-plane-line"></i></a></td>
          </tr>
          <tr>
            <td><div class="bk-cur"><img src="https://flagcdn.com/w40/ca.png" alt="CAD"><div><b>CAD</b><small>Canadian Dollar</small></div></div></td>
            <td class="bk-mono">0.7410</td>
            <td class="bk-mono">0.7365</td>
            <td><span class="bk-badge bk-badge--up">+0.05%</span></td>
            <td><a href="{{ route('register') }}" class="bk-btn-xs">Send <i class="ri-send-plane-line"></i></a></td>
          </tr>
          <tr>
            <td><div class="bk-cur"><img src="https://flagcdn.com/w40/ch.png" alt="CHF"><div><b>CHF</b><small>Swiss Franc</small></div></div></td>
            <td class="bk-mono">1.1290</td>
            <td class="bk-mono">1.1235</td>
            <td><span class="bk-badge bk-badge--down">-0.03%</span></td>
            <td><a href="{{ route('register') }}" class="bk-btn-xs">Send <i class="ri-send-plane-line"></i></a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- ============================================================
     TESTIMONIALS
     ============================================================ -->
<section class="bk-section bk-section--gray" id="testimonials">
  <div class="bk-wrap">
    <div class="bk-section-top">
      <span class="bk-label">Client Stories</span>
      <h2 class="bk-title">Trusted by Thousands <em>Across the Globe</em></h2>
      <p class="bk-desc">Don't take our word for it. Here's what real clients  from solo entrepreneurs to global business owners  say about banking with Swiftsavers Trust Bank every day.</p>
    </div>
    <div class="bk-rating-summary">
      <div class="bk-stars"><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-fill"></i></div>
      <span><strong>4.9 / 5</strong> average rating from over 12,000 verified clients worldwide</span>
    </div>
    <div class="bk-testimonials-scroll">
      <div class="bk-testimonial sr">
        <div class="bk-stars"><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i></div>
        <p>"Swiftsavers completely changed how we handle business payments. International transfers execute in seconds, the fees are refreshingly honest, and the support team is extraordinary. This is banking done right."</p>
        <div class="bk-testimonial-author">
          <div class="bk-avatar"><i class="ri-user-3-fill"></i></div>
          <div><strong>James Whitfield</strong><span>Entrepreneur &amp; Managing Director</span></div>
        </div>
      </div>
      <div class="bk-testimonial sr">
        <div class="bk-stars"><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i></div>
        <p>"The interface is stunning, zero hidden charges, and my transfers arrive instantly every single time. I've been with three major banks  none of them come close to what Swiftsavers delivers."</p>
        <div class="bk-testimonial-author">
          <div class="bk-avatar"><i class="ri-user-3-fill"></i></div>
          <div><strong>Sarah Mitchell</strong><span>Creative Director, London</span></div>
        </div>
      </div>
      <div class="bk-testimonial sr">
        <div class="bk-stars"><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-fill"></i></div>
        <p>"I send money to my family overseas every month. The exchange rates are the best I've found anywhere, and the transfers always clear the same day. I've already saved hundreds in fees this year alone."</p>
        <div class="bk-testimonial-author">
          <div class="bk-avatar"><i class="ri-user-3-fill"></i></div>
          <div><strong>David George</strong><span>International Trade Partner</span></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     CTA BANNER
     ============================================================ -->
<section class="bk-cta">
  <div class="bk-wrap">
    <div class="bk-cta-box sr">
      <div class="bk-cta-content">
        <h2>Ready to Experience Banking the Way It Should Be?</h2>
        <p>Join tens of thousands of individuals and businesses already banking smarter with Swiftsavers Trust Bank. Open your free account in under 5 minutes  no paperwork, no branch visit, no nonsense.</p>
        <div class="bk-cta-btns">
          <a href="{{ route('register') }}" class="bk-btn bk-btn--white">Open Free Account <i class="ri-arrow-right-line"></i></a>
          <a href="{{ url('contact') }}" class="bk-btn bk-btn--glass">Talk to an Expert <i class="ri-customer-service-2-line"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

@include('home.footer')