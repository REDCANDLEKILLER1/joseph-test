# Maijah Taejon Site — Vercel Static Hotfix

This package is Vercel-ready.

## Main fix
Vercel does not run PHP by default and root deployments commonly 404 when the project only has `index.php`.
This package adds:

- `index.html` copied from `index.php`
- `pitch.html` copied from `pitch.php`
- internal links updated from `.php` to `.html`
- `vercel.json` with clean URL rewrites

## Baseball page
Open:

- `/baseball`
- `/baseball.html`
- `/baseball.html?edit=1` for demo link editing

## Notes
The original PHP files are preserved, but Vercel static hosting will not execute `send_mail.php` or other PHP scripts.
The contact form needs a Vercel serverless function or external form service before live production use.
