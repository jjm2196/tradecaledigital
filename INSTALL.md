# Solar Instant Quote Tool — Install Guide

A working solar quote calculator demo, built to match your roofing one. It estimates
system size, installed cost and yearly savings using typical 2026 UK figures.

## Files in this package

```
solar-instant-quote.php        → goes in  public_html/solar-instant-quote.php
assets/css/solar.css           → goes in  public_html/assets/css/solar.css
```

Only two files. Drop them into the matching spots in your repo folder
(the `tsd` folder you push from), keeping the same structure.

## Deploying it via your Git workflow

1. Copy both files into your local project folder (same folders as above).

2. **Important — update `.cpanel.yml`.** Right now your deploy config only copies
   `index.php`, `README.md`, `assets`, and `includes`. The new PHP file sits at the
   top level, so add a line for it. Your `.cpanel.yml` should now read:

   ```yaml
   ---
   deployment:
     tasks:
       - export DEPLOYPATH=/home/tradesca/public_html/
       - /bin/cp -R index.php $DEPLOYPATH
       - /bin/cp -R solar-instant-quote.php $DEPLOYPATH
       - /bin/cp -R README.md $DEPLOYPATH
       - /bin/cp -R assets $DEPLOYPATH
       - /bin/cp -R includes $DEPLOYPATH
   ```

   (`assets` is already copied wholesale, so `solar.css` rides along automatically —
   you only need the extra line for the PHP file.)

3. Push and deploy as usual:
   ```bash
   git add .
   git commit -m "Add solar instant quote tool"
   git push
   ```
   Then cPanel → Git Version Control → Manage → Pull or Deploy →
   Update from Remote → Deploy HEAD Commit.

4. Visit `tradescaledigital.co.uk/solar-instant-quote.php` and hard-refresh (Ctrl+F5).

## Optional: link to it

To show it in your nav or quote-tools page, link to `/solar-instant-quote.php`
the same way the roofing demo is linked.

## Notes on the pricing logic

- Figures are based on 2026 UK averages: ~£1,686 per kW installed, ~850 kWh generated
  per kWp per year, electricity ~28p/kWh, battery adds ~£4,500, 0% VAT.
- All clearly labelled as a demo. For a real client you'd swap in their own panel
  rates, battery prices and SEG export assumptions — the numbers are all near the
  top of the `<script>` block (COST_PER_KW, KWH_PER_KWP, PRICE_PER_KWH).
- Leads email to hello@tradescaledigital.co.uk (same as roofing). For a real client,
  change `$contactEmail` near the top of the PHP to their address.
