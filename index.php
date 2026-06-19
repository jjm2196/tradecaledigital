<?php
$businessName = "Trade Scale Digital";
$pageTitle = "Custom Quote Tools, AI Assistants & Web Solutions | Trade Scale Digital";
$pageDescription = "Trade Scale Digital builds instant quote calculators, bespoke AI assistants, Shopify stores and conversion tools for UK small businesses. Not just websites — tools that turn visitors into enquiries.";
$pageKeywords = "instant quote tools, AI assistants for small business, quote calculator builder, custom web tools UK, AI chatbot small business, Shopify developer Northern Ireland, lead generation tools, conversion tools small business";
$canonicalUrl = "https://tradescaledigital.co.uk";
$ogTitle = "Custom Quote Tools, AI Assistants & Web Solutions | Trade Scale Digital";
$ogDescription = "Instant quote calculators, bespoke AI assistants and conversion tools for small businesses. Stop using generic websites — get tools that win enquiries.";
$currentPage = "home";

$extraCss = ["/assets/css/home.css"];
$extraJs = ["/assets/js/animations.js"];

require_once $_SERVER["DOCUMENT_ROOT"] . "/includes/header.php";
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ProfessionalService",
  "name": "Trade Scale Digital",
  "url": "https://tradescaledigital.co.uk",
  "email": "hello@tradescaledigital.co.uk",
  "description": "Custom quote tools, bespoke AI assistants, Shopify development and conversion-focused websites for small businesses in Northern Ireland and the UK.",
  "areaServed": { "@type": "AdministrativeArea", "name": "Northern Ireland" },
  "makesOffer": [
    { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Instant Quote Tools & Calculators" } },
    { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Bespoke AI Assistants" } },
    { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Shopify Development" } },
    { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Conversion-Focused Websites" } }
  ]
}
</script>

<main>

  <!-- ============ HERO ============ -->
  <section class="hero home-hero">
    <div class="container hero-grid">
      <div class="hero-content" data-animate="fade-up">
        <p class="eyebrow">Tools that win enquiries & Help Customers</p>
        <h1>We build the <span class="text-pink">tools</span> that turn website visitors into customers.</h1>
        <p class="hero-text">
          Instant quote calculators, bespoke AI assistants and conversion-focused web tools — custom built for small businesses across Northern Ireland and the UK. Not another generic website. Tools that actually do a job.
        </p>

        <div class="hero-actions">
          <a href="#tools" class="btn btn-primary">See What We Build</a>
          <a href="/roofing-instant-quote.php" class="btn btn-secondary">Try a Live Demo</a>
        </div>

        <div class="trust-row">
          <span>Instant Quote Tools</span>
          <span>Custom AI Assistants</span>
          <span>Shopify Stores</span>
          <span>Conversion Websites</span>
        </div>
      </div>

      <aside class="hero-card hero-demo-card" data-animate="fade-up" data-delay="120">
        <p class="card-label">Live tool example</p>
        <div class="demo-counter">
          <div class="demo-price" id="demoPrice">£0</div>
          <p class="demo-sub">Estimated project value</p>
        </div>
        <div class="demo-bar"><span id="demoBar"></span></div>
        <ul>
          <li>Customer answers a few questions</li>
          <li>Gets an instant estimate</li>
          <li>You get a qualified lead</li>
        </ul>
        <a href="/roofing-instant-quote.php" class="mini-link">Try the real demo →</a>
      </aside>
    </div>
  </section>

  <!-- ============ TOOLS: THE MAIN OFFER ============ -->
  <section class="section" id="tools">
    <div class="container">
      <div class="section-heading" data-animate="fade-up">
        <p class="eyebrow">What we build</p>
        <h2>Custom tools, not templates.</h2>
        <p>Most agencies sell you a website. We build the things that make a website actually generate business — interactive tools your competitors don't have.</p>
      </div>

      <div class="service-grid">
        <article class="service-card" data-animate="fade-up">
          <div class="icon-dot"></div>
          <p class="card-label">Lead generation</p>
          <h3>Instant Quote Tools</h3>
          <p>Replace a dead "contact us" form with a calculator that gives customers a price in seconds — and hands you a qualified lead with all the details.</p>
          <a href="/quote-tools-calculators-northern-ireland.php" class="mini-link">Explore quote tools →</a>
        </article>

        <article class="service-card" data-animate="fade-up" data-delay="80">
          <div class="icon-dot"></div>
          <p class="card-label">Automation</p>
          <h3>Bespoke AI Assistants</h3>
          <p>Custom-trained AI that answers customer questions, guides bookings and captures enquiries 24/7 — built around your exact services, like our "Emma" assistant.</p>
          <a href="/ai-assistants-northern-ireland.php" class="mini-link">Explore AI assistants →</a>
        </article>

        <article class="service-card" data-animate="fade-up" data-delay="160">
          <div class="icon-dot"></div>
          <p class="card-label">Ecommerce</p>
          <h3>Shopify & Product Tools</h3>
          <p>Shopify stores with product finders, bundle selectors and custom buying tools that move people from browsing to checkout.</p>
          <a href="/shopify-development-northern-ireland.php" class="mini-link">Explore Shopify →</a>
        </article>

        <article class="service-card" data-animate="fade-up" data-delay="240">
          <div class="icon-dot"></div>
          <p class="card-label">Foundation</p>
          <h3>Conversion Websites</h3>
          <p>Fast, clear, mobile-first websites built to support the tools — with the trust signals and local SEO that turn searches into enquiries.</p>
          <a href="/affordable-websites-northern-ireland.php" class="mini-link">Explore websites →</a>
        </article>
      </div>
    </div>
  </section>

  <!-- ============ WHY TOOLS BEAT WEBSITES ============ -->
  <section class="split-section">
    <div class="container split-grid">
      <div class="split-content" data-animate="fade-up">
        <p class="eyebrow">The difference</p>
        <h2>A website tells people about you. A tool gets them to act.</h2>
        <p>
          A standard enquiry form puts all the work on the customer. They have to think, type and wait. Most don't bother. A custom tool flips that — it gives them something useful instantly, and gives you a better lead in return.
        </p>
        <div class="feature-list">
          <div>
            <strong>Instant value for the customer</strong>
            <span>A price, an answer, a recommendation — before they have to commit.</span>
          </div>
          <div>
            <strong>Better leads for you</strong>
            <span>Project details, budget signals and contact info, all captured up front.</span>
          </div>
          <div>
            <strong>A reason to choose you</strong>
            <span>"Get an instant quote" beats "contact us for a quote" every time.</span>
          </div>
        </div>
      </div>

      <div class="package-box" data-animate="fade-up" data-delay="120">
        <p class="card-label">The shift</p>
        <h3>From form to tool</h3>
        <ul>
          <li>Basic form → Instant quote calculator</li>
          <li>FAQ page → AI assistant that answers live</li>
          <li>Product list → Guided product finder</li>
          <li>"Contact us" → "Get your estimate in 30 seconds"</li>
        </ul>
        <a href="/#contact" class="btn btn-primary full-width">Start a Project</a>
      </div>
    </div>
  </section>

  <!-- ============ PROOF / RECENT WORK ============ -->
  <section class="section process-section">
    <div class="container">
      <div class="section-heading" data-animate="fade-up">
        <p class="eyebrow">Proof</p>
        <h2>Real businesses, real tools.</h2>
        <p>Recent projects where we've helped businesses look more professional and capture better enquiries.</p>
      </div>

      <div class="process-grid">
        <article data-animate="fade-up">
          <span>01</span>
          <h3>The Aesthetics Studio</h3>
          <p>A trust-led website, Google setup and a bespoke AI assistant to handle customer questions and guide bookings.</p>
        </article>
        <article data-animate="fade-up" data-delay="80">
          <span>02</span>
          <h3>Kaida Body Piercing</h3>
          <p>A bold, branded one-page site with clear pricing, aftercare content and Instagram booking built for mobile traffic.</p>
        </article>
        <article data-animate="fade-up" data-delay="160">
          <span>03</span>
          <h3>Roofing Quote Demo</h3>
          <p>A working instant-estimate calculator showing exactly how a quote tool captures better leads than a plain form.</p>
        </article>
      </div>

      <div class="hero-actions" style="justify-content:center;margin-top:40px;">
        <a href="/recent-projects.php" class="btn btn-secondary">View All Work</a>
      </div>
    </div>
  </section>

  <!-- ============ CONTACT ============ -->
  <section class="section" id="contact">
    <div class="container">
      <div class="section-heading" data-animate="fade-up" style="text-align:center;margin:0 auto 38px;">
        <p class="eyebrow">Start a project</p>
        <h2>Tell us what you're trying to fix.</h2>
        <p style="margin-left:auto;margin-right:auto;">Whether it's more enquiries, a smarter store or an AI that handles your FAQs — start with a free review and we'll recommend the simplest useful next step.</p>
      </div>

      <div class="hero-actions" style="justify-content:center;">
        <a href="mailto:hello@tradescaledigital.co.uk" class="btn btn-primary">Email hello@tradescaledigital.co.uk</a>
        <a href="/recent-projects.php" class="btn btn-secondary">See Recent Work</a>
      </div>
    </div>
  </section>

</main>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/includes/footer.php";
?>
