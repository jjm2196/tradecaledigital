# Trade Scale Digital — Homepage Rework

This package contains a **tools-first homepage rework** plus the supporting files,
laid out exactly how they sit on your server. Drop them in, push to GitHub, done.

---

## 1. What's in this package

```
tsd/
├── index.php                  ← NEW tools-first homepage (replaces your current homepage)
├── includes/
│   ├── header.php             ← UPDATED (adds an $extraJs hook — otherwise identical to yours)
│   └── footer.php             ← UPDATED (loads main.js + any page scripts)
└── assets/
    ├── css/
    │   ├── style.css          ← your existing stylesheet (unchanged — included so nothing breaks)
    │   └── home.css           ← NEW animation + homepage styling layer
    └── js/
        ├── main.js            ← your existing nav script (unchanged)
        └── animations.js      ← NEW scroll reveals + hero demo counter
```

**Only 4 files are new or changed:** `index.php`, `includes/header.php`,
`includes/footer.php`, `assets/css/home.css`, `assets/js/animations.js`.
`style.css` and `main.js` are your originals, included only so the folder is complete.

---

## 2. Where each file goes on your server

Your server's web root (the folder cPanel calls `public_html`) should end up like:

| This file | Goes to |
|-----------|---------|
| `index.php` | `public_html/index.php` |
| `includes/header.php` | `public_html/includes/header.php` |
| `includes/footer.php` | `public_html/includes/footer.php` |
| `assets/css/home.css` | `public_html/assets/css/home.css` |
| `assets/js/animations.js` | `public_html/assets/js/animations.js` |

`style.css` and `main.js` already exist on your server in those same spots, so you
can leave the live ones as they are.

> **Back up first:** before replacing anything, download your current `index.php`,
> `header.php` and `footer.php` from cPanel so you can roll back if needed.

---

## 3. How to get your existing files OFF cPanel

You asked how to pull everything down. Easiest way:

1. Log into cPanel → **File Manager**.
2. Go into `public_html`.
3. Select all → top toolbar **Compress** → Zip → it makes a `.zip` in that folder.
4. Right-click that zip → **Download**.
5. Unzip it on your computer. That's your whole live site in one folder.

Now open that folder in VS Code (**File → Open Folder**). That's your project.

---

## 4. The GitHub workflow (first time, step by step)

In VS Code, open the Terminal (**Terminal → New Terminal**) and run these one at a time:

```bash
# inside your project folder
git init
git add .
git commit -m "Initial commit of current site"
```

Then on github.com:
1. Click **New repository** → name it `tradescaledigital` → **Create** (leave it empty, no README).
2. GitHub shows you a URL like `https://github.com/yourname/tradescaledigital.git`.

Back in VS Code terminal:
```bash
git remote add origin https://github.com/yourname/tradescaledigital.git
git branch -M main
git push -u origin main
```

From now on, every change is just:
```bash
git add .
git commit -m "describe what you changed"
git push
```

---

## 5. Making pushes go live automatically (optional, later)

GitHub holds your code — it does **not** put it on your cPanel host by itself.
To auto-deploy on every push you have two common options:

- **cPanel Git Version Control** (simplest if your host supports it): cPanel →
  *Git Version Control* → clone your repo → enable "deploy on update". Many hosts
  support this with no extra cost.
- **GitHub Actions + FTP**: a small workflow file that copies changed files to your
  host over FTP whenever you push. More flexible, slightly more setup.

Get the manual `git push` habit working first. Add auto-deploy once that feels normal.

---

## 6. Notes on the new homepage

- It **reuses your existing CSS classes** (`hero`, `service-grid`, `split-section`,
  etc.) so it matches the rest of the site immediately.
- `home.css` only **adds** styles — it can't break your other pages because no other
  page loads it.
- Animations respect `prefers-reduced-motion`, so they switch off for users who've
  asked their device to reduce motion (good for accessibility).
- The hero "live demo" card counts up to a sample figure to show off the quote-tool
  idea. Change the number in `animations.js` (`var target = 8750;`) if you want.

---

## 7. What's next (when you're ready)

This is the homepage. The same approach can roll out to:
- The AI assistants page (lead with "Emma"-style live examples)
- A dedicated quote-tools gallery (more live calculators)
- A headless CMS for the Insights articles, so you write without touching code

Say the word and we'll do the next piece.
