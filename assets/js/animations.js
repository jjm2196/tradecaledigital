/* =========================================================
   Trade Scale Digital — animations.js
   1. Scroll-reveal for [data-animate] elements
   2. Animated hero demo counter
   Lightweight, no dependencies.
   ========================================================= */
(function () {
  "use strict";

  /* ---------- 1. Scroll reveal ---------- */
  var animated = document.querySelectorAll("[data-animate]");

  if ("IntersectionObserver" in window && animated.length) {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          var el = entry.target;
          var delay = parseInt(el.getAttribute("data-delay") || "0", 10);
          setTimeout(function () { el.classList.add("is-visible"); }, delay);
          io.unobserve(el);
        }
      });
    }, { threshold: 0.15, rootMargin: "0px 0px -40px 0px" });

    animated.forEach(function (el) { io.observe(el); });
  } else {
    // Fallback: just show everything
    animated.forEach(function (el) { el.classList.add("is-visible"); });
  }

  /* ---------- 2. Hero demo counter ---------- */
  var priceEl = document.getElementById("demoPrice");
  var barEl = document.getElementById("demoBar");

  if (priceEl) {
    var target = 8750;           // the "estimated project value" it counts up to
    var duration = 1600;         // ms
    var started = false;

    function runCounter() {
      if (started) return;
      started = true;

      var startTime = null;
      function step(ts) {
        if (!startTime) startTime = ts;
        var progress = Math.min((ts - startTime) / duration, 1);
        // easeOutCubic
        var eased = 1 - Math.pow(1 - progress, 3);
        var value = Math.round(target * eased);
        priceEl.textContent = "£" + value.toLocaleString("en-GB");
        if (progress < 1) requestAnimationFrame(step);
      }
      requestAnimationFrame(step);

      if (barEl) {
        // small timeout so the CSS transition fires
        setTimeout(function () { barEl.style.width = "78%"; }, 150);
      }
    }

    // Start when the hero card scrolls into view (or immediately if already visible)
    if ("IntersectionObserver" in window) {
      var cardObserver = new IntersectionObserver(function (entries) {
        entries.forEach(function (e) {
          if (e.isIntersecting) { runCounter(); cardObserver.disconnect(); }
        });
      }, { threshold: 0.4 });
      cardObserver.observe(priceEl);
    } else {
      runCounter();
    }
  }
})();
