<?php
$pageTitle = "Solar Panel Instant Quote Calculator Demo | Trade Scale Digital";
$pageDescription = "Demo solar panel instant quote calculator by Trade Scale Digital. Show customers an estimated system size, installed cost and yearly savings before they enquire.";
$canonicalUrl = "https://tradescaledigital.co.uk/solar-instant-quote.php";
$currentPage = "solar-quote-demo";
$extraCss = ["/assets/css/solar.css"];

$contactEmail = "hello@tradescaledigital.co.uk";
$formStatus = "";
$formMessage = "";

function tsd_clean($value) {
  return trim(htmlspecialchars($value ?? "", ENT_QUOTES, "UTF-8"));
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["solar_quote_submit"])) {
  $honeypot = trim($_POST["website_url"] ?? "");

  if ($honeypot !== "") {
    $formStatus = "error";
    $formMessage = "Something went wrong. Please try again.";
  } else {
    $name = tsd_clean($_POST["name"] ?? "");
    $email = filter_var(trim($_POST["email"] ?? ""), FILTER_SANITIZE_EMAIL);
    $phone = tsd_clean($_POST["phone"] ?? "");
    $postcode = tsd_clean($_POST["postcode"] ?? "");
    $estimate = tsd_clean($_POST["estimate_range"] ?? "");

    if ($name === "" || $email === "" || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $formStatus = "error";
      $formMessage = "Please enter your name and a valid email address.";
    } else {
      $body = "New Solar Quote Demo Lead\n\n";
      $body .= "Name: $name\n";
      $body .= "Email: $email\n";
      $body .= "Phone: $phone\n";
      $body .= "Postcode: $postcode\n";
      $body .= "Estimated Range: $estimate\n\n";

      foreach ($_POST as $key => $value) {
        if (in_array($key, ["solar_quote_submit", "website_url"], true)) continue;
        $label = ucwords(str_replace("_", " ", $key));
        $body .= $label . ": " . tsd_clean($value) . "\n";
      }

      $headers = [];
      $headers[] = "From: Trade Scale Digital <$contactEmail>";
      $headers[] = "Reply-To: $name <$email>";
      $headers[] = "Content-Type: text/plain; charset=UTF-8";

      $sent = mail($contactEmail, "New Solar Instant Quote Demo Lead", $body, implode("\r\n", $headers));

      if ($sent) {
        $formStatus = "success";
        $formMessage = "Thanks — your solar estimate request has been sent.";
      } else {
        $formStatus = "error";
        $formMessage = "The form could not send right now. Please email hello@tradescaledigital.co.uk directly.";
      }
    }
  }
}
?>

<?php include __DIR__ . "/includes/header.php"; ?>

<main>

<section class="roof-quote-hero">
  <div class="container roof-quote-grid">
    <div>
      <p class="eyebrow">Instant quote calculator demo</p>
      <h1>Let customers estimate their solar system before they enquire.</h1>
      <p class="hero-text">
        This demo shows how a solar installer could let homeowners answer a few simple questions and instantly see an estimated system size, installed cost and yearly savings — turning a cold enquiry into a warm, qualified lead.
      </p>

      <div class="hero-actions">
        <a href="#solar-calculator" class="btn btn-primary">Try the Demo</a>
        <a href="/#contact" class="btn btn-secondary">Build One For My Business</a>
      </div>
    </div>

    <aside class="hero-card">
      <p class="card-label">Demo outcome</p>
      <div class="price">30s</div>
      <p>Homeowners get a realistic estimate quickly, while the installer receives a better-qualified lead.</p>
      <ul>
        <li>Guided questions</li>
        <li>Estimated system size &amp; cost</li>
        <li>Yearly savings estimate</li>
        <li>Lead capture</li>
      </ul>
    </aside>
  </div>
</section>

<section class="section" id="solar-calculator">
  <div class="container">
    <div class="roof-calculator-wrap">

      <div class="section-heading">
        <p class="eyebrow">Solar estimate demo</p>
        <h2>Estimate your solar setup.</h2>
        <p>This is a demo calculator using typical 2026 UK figures. Real pricing would be tuned to the installer's own panels, rates, battery options and service area.</p>
      </div>

      <?php if ($formMessage !== ""): ?>
        <div class="form-alert <?php echo $formStatus === "success" ? "success" : "error"; ?>">
          <?php echo $formMessage; ?>
        </div>
      <?php endif; ?>

      <form class="roof-quote-form" method="post" action="#solar-calculator">
        <input type="hidden" name="solar_quote_submit" value="1">
        <input type="hidden" id="estimate_range" name="estimate_range" value="">
        <input type="hidden" id="system_size_field" name="system_size" value="">
        <input type="hidden" id="annual_saving_field" name="annual_saving" value="">

        <div class="hidden-field">
          <label>Website URL</label>
          <input type="text" name="website_url" autocomplete="off">
        </div>

        <div class="roof-form-grid">

          <div class="roof-form-panel">
            <h3>1. Your property</h3>

            <div class="form-field">
              <label for="property_size">Property size</label>
              <select id="property_size" name="property_size" required>
                <option value="small">1-2 bedrooms</option>
                <option value="medium" selected>3 bedrooms</option>
                <option value="large">4 bedrooms</option>
                <option value="xlarge">5+ bedrooms</option>
              </select>
            </div>

            <div class="form-field">
              <label for="electric_bill">Rough monthly electricity bill</label>
              <select id="electric_bill" name="electric_bill" required>
                <option value="low">Under £100</option>
                <option value="medium" selected>£100 - £200</option>
                <option value="high">£200 - £300</option>
                <option value="vhigh">Over £300</option>
              </select>
            </div>

            <div class="form-field">
              <label for="roof_direction">Which way does the main roof face?</label>
              <select id="roof_direction" name="roof_direction" required>
                <option value="south">South (best)</option>
                <option value="eastwest" selected>East / West</option>
                <option value="north">North / not sure</option>
              </select>
            </div>

            <div class="form-field">
              <label for="battery">Include battery storage?</label>
              <select id="battery" name="battery" required>
                <option value="yes" selected>Yes - store energy for evenings</option>
                <option value="no">No - panels only</option>
                <option value="not_sure">Not sure</option>
              </select>
            </div>

            <div class="form-field">
              <label for="ev">Do you have (or plan) an EV?</label>
              <select id="ev" name="ev" required>
                <option value="no" selected>No</option>
                <option value="yes">Yes</option>
                <option value="maybe">Maybe in future</option>
              </select>
            </div>

            <div class="form-field">
              <label for="timeframe">When are you hoping to install?</label>
              <select id="timeframe" name="timeframe" required>
                <option value="researching" selected>Just researching</option>
                <option value="3months">Within 3 months</option>
                <option value="asap">As soon as possible</option>
              </select>
            </div>
          </div>

          <div class="roof-result-panel">
            <p class="card-label">Estimated installed cost</p>
            <div class="roof-price" id="solarPrice">£0 - £0</div>

            <div class="solar-stats" id="solarStats">
              <div class="solar-stat">
                <span class="solar-stat-value" id="solarSize">—</span>
                <span class="solar-stat-label">Suggested system</span>
              </div>
              <div class="solar-stat">
                <span class="solar-stat-value" id="solarSaving">—</span>
                <span class="solar-stat-label">Est. yearly saving</span>
              </div>
            </div>

            <p id="solarSummary">
              Complete the options to see a demo estimate.
            </p>

            <div class="quote-breakdown" id="quoteBreakdown"></div>

            <h3>2. Send the estimate</h3>

            <div class="form-field">
              <label for="name">Name *</label>
              <input type="text" id="name" name="name" required>
            </div>

            <div class="form-row">
              <div class="form-field">
                <label for="email">Email *</label>
                <input type="email" id="email" name="email" required>
              </div>

              <div class="form-field">
                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone">
              </div>
            </div>

            <div class="form-field">
              <label for="postcode">Postcode</label>
              <input type="text" id="postcode" name="postcode" placeholder="BT...">
            </div>

            <div class="form-field">
              <label for="message">Extra details</label>
              <textarea id="message" name="message" placeholder="Roof type, shading, anything else useful."></textarea>
            </div>

            <button type="submit" class="btn btn-primary full-width">Send My Solar Estimate</button>
          </div>

        </div>
      </form>

    </div>
  </div>
</section>

<section class="section dark-detail">
  <div class="container detail-grid">
    <div>
      <p class="eyebrow">Why this works</p>
      <h2>Solar buyers research for weeks. Catch them early.</h2>
    </div>

    <div>
      <p>
        Most solar enquiries are people quietly comparing options. A plain "request a quote" form asks them to commit before they're ready. An instant estimate gives them the numbers they're hunting for — system size, cost and savings — and captures the lead while their interest is hot.
      </p>

      <div class="tag-row">
        <span>Better enquiries</span>
        <span>Qualified leads</span>
        <span>Instant savings estimate</span>
        <span>0% VAT highlighted</span>
        <span>Custom-built logic</span>
      </div>
    </div>
  </div>
</section>

</main>

<script>
(function () {
  const fields = ["property_size", "electric_bill", "roof_direction", "battery", "ev", "timeframe"];
  const priceEl = document.getElementById("solarPrice");
  const sizeEl = document.getElementById("solarSize");
  const savingEl = document.getElementById("solarSaving");
  const summaryEl = document.getElementById("solarSummary");
  const breakdownEl = document.getElementById("quoteBreakdown");
  const estimateInput = document.getElementById("estimate_range");
  const sizeInput = document.getElementById("system_size_field");
  const savingInput = document.getElementById("annual_saving_field");

  function money(value) {
    return "£" + Math.round(value).toLocaleString("en-GB");
  }

  // 2026 UK figures: ~£1,686 per kW installed (MCS avg), ~850 kWh per kWp per year,
  // electricity ~28p/kWh. Battery adds roughly £4,500.
  const COST_PER_KW = 1686;
  const KWH_PER_KWP = 850;
  const PRICE_PER_KWH = 0.28;
  const SELF_USE = 0.55; // share of generation used at home (without battery)

  function calculateSolarQuote() {
    const size = document.getElementById("property_size").value;
    const bill = document.getElementById("electric_bill").value;
    const direction = document.getElementById("roof_direction").value;
    const battery = document.getElementById("battery").value;
    const ev = document.getElementById("ev").value;
    const timeframe = document.getElementById("timeframe").value;

    // Base system size (kWp) by property size
    const sizeByProperty = { small: 3, medium: 4, large: 5, xlarge: 6 };
    let kwp = sizeByProperty[size] || 4;
    let notes = [];

    // Adjust system size up for high usage / EV
    if (bill === "high") { kwp += 1; notes.push("Larger system for higher usage"); }
    if (bill === "vhigh") { kwp += 2; notes.push("Larger system for very high usage"); }
    if (ev === "yes") { kwp += 1; notes.push("Extra capacity for EV charging"); }

    // Generation depends on roof direction
    const directionFactor = { south: 1, eastwest: 0.85, north: 0.7 };
    const genFactor = directionFactor[direction] || 0.85;

    // Cost
    let cost = kwp * COST_PER_KW;

    let selfUse = SELF_USE;
    if (battery === "yes") {
      cost += 4500;
      selfUse = 0.8;
      notes.push("Battery storage included");
    }

    notes.push("0% VAT applied (solar)");

    // Annual generation and saving
    const annualKwh = kwp * KWH_PER_KWP * genFactor;
    const annualSaving = annualKwh * selfUse * PRICE_PER_KWH;

    const low = cost * 0.92;
    const high = cost * 1.12;
    const range = money(low) + " - " + money(high);

    priceEl.textContent = range;
    sizeEl.textContent = kwp + "kWp";
    savingEl.textContent = money(annualSaving) + "/yr";

    estimateInput.value = range;
    sizeInput.value = kwp + "kWp";
    savingInput.value = money(annualSaving) + " per year";

    summaryEl.textContent = "Based on your answers, this demo suggests a " + kwp +
      "kWp system generating roughly " + Math.round(annualKwh).toLocaleString("en-GB") +
      " kWh a year, saving an estimated " + money(annualSaving) + " annually.";

    breakdownEl.innerHTML = notes.map(note => "<div>✓ " + note + "</div>").join("");
  }

  fields.forEach(id => {
    const field = document.getElementById(id);
    if (field) field.addEventListener("change", calculateSolarQuote);
  });

  calculateSolarQuote();
})();
</script>

<?php include __DIR__ . "/includes/footer.php"; ?>
