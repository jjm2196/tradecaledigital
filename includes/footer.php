<footer class="site-footer">
  <div class="container footer-inner">
    <p>&copy; <?php echo date("Y"); ?> <?php echo htmlspecialchars($businessName ?? "Trade Scale Digital", ENT_QUOTES, "UTF-8"); ?>. Affordable websites, Shopify stores, AI assistants, quote tools and automation for Northern Ireland small businesses.</p>
    <div>
      <a href="/#services">Services</a>
      <a href="/recent-projects.php">Recent Work</a>
      <a href="/#ai">AI</a>
      <a href="/#quote-tools">Quote Tools</a>
      <a href="/#contact">Contact</a>
      <a href="/affordable-websites-northern-ireland.php">Websites</a>
        <a href="/google-business-profile-setup-ni.php">Google Business Profile</a>
        <a href="/ai-assistants-northern-ireland.php">AI Assistants</a>
        <a href="/quote-tools-calculators-northern-ireland.php">Quote Tools</a>
        <a href="/shopify-development-northern-ireland.php">Shopify</a>
        <a href="/recent-projects.php">Recent Work</a>
        <a class="footer-social-icon" href="https://www.facebook.com/profile.php?id=61582842210662" target="_blank" rel="noopener" aria-label="Facebook">
  <i class="fa-brands fa-facebook-f"></i>
</a>

<a class="footer-social-icon" href="https://www.instagram.com/tradescale.digital/" target="_blank" rel="noopener" aria-label="Instagram">
  <i class="fa-brands fa-instagram"></i>
</a>
    </div>
  </div>
</footer>

<script>
document.addEventListener("DOMContentLoaded", function () {
  const menuToggle = document.getElementById("menuToggle");
  const mainNav = document.getElementById("mainNav");

  if (menuToggle && mainNav) {
    menuToggle.addEventListener("click", function (event) {
      event.preventDefault();
      event.stopPropagation();

      const isOpen = mainNav.classList.toggle("is-open");
      menuToggle.classList.toggle("is-open", isOpen);
      menuToggle.setAttribute("aria-expanded", isOpen ? "true" : "false");
    });

    mainNav.querySelectorAll("a").forEach(function (link) {
      link.addEventListener("click", function () {
        mainNav.classList.remove("is-open");
        menuToggle.classList.remove("is-open");
        menuToggle.setAttribute("aria-expanded", "false");
      });
    });

    document.addEventListener("click", function (event) {
      if (!mainNav.contains(event.target) && !menuToggle.contains(event.target)) {
        mainNav.classList.remove("is-open");
        menuToggle.classList.remove("is-open");
        menuToggle.setAttribute("aria-expanded", "false");
      }
    });
  }

  const projectType = document.getElementById("project_type");
  const groups = document.querySelectorAll(".conditional-group");

  if (projectType && groups.length) {
    function updateConditionalFields() {
      const selected = projectType.value;

      groups.forEach(function (group) {
        const showFor = group.getAttribute("data-show-for");

        if (showFor === selected) {
          group.classList.add("is-active");

          group.querySelectorAll("input, select, textarea").forEach(function (field) {
            field.disabled = false;
          });
        } else {
          group.classList.remove("is-active");

          group.querySelectorAll("input, select, textarea").forEach(function (field) {
            field.disabled = true;
          });
        }
      });
    }

    updateConditionalFields();
    projectType.addEventListener("change", updateConditionalFields);
  }
});
</script>

<script src="/assets/js/main.js" defer></script>
<?php
if (!empty($extraJs)) {
  $extraJsFiles = is_array($extraJs) ? $extraJs : [$extraJs];
  foreach ($extraJsFiles as $jsFile) {
    echo '<script src="' . htmlspecialchars($jsFile, ENT_QUOTES, "UTF-8") . '" defer></script>' . PHP_EOL;
  }
}
?>
</body>
</html>