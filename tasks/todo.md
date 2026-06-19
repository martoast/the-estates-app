# The Estates — TODO

Cloned from the Candé / Real del Mar app on 2026-06-19 as the starting template.
The site currently still renders Candé content — the work below rebrands it to The Estates.

## Now — rebrand the clone
- [ ] **Hero** — swap to an Estates render (candidate: `estates-vista-mar.jpg`), new headline/subhead
- [ ] **Residencias / product** — replace Candé casas/depas tabs with Prototype **A / B / C** (2/3/4 rec.)
      using the m²/ft² + "desde $USD" data in `summary.md`
- [ ] **Galería** — replace `rdm-*`/`cande-*` images with the `estates-*` renders
- [ ] **Disponibilidad** — Stage 1 lots (0–8, 110–122); 21 disponible / 2 apartado / 0 vendido.
      Need per-lot price data wired (tables in `incoming/raw-delivery/5. TABLA DE PRECIOS/`)
- [ ] **Esencia / intro copy** — new The Estates positioning (Mediterranean villas, ocean views, within Real del Mar)
- [ ] **SEO** — title, description, OG image (build `og-estates.jpg`), canonical/og:url via `SITE_URL`
- [ ] **Branding** — confirm logo/wordmark ("THE ESTATES"), color palette (delivery uses navy/white), fonts
- [ ] Remove leftover Candé assets (`cande-*`, `rdm-*` in `public/images/`) once no longer referenced
- [ ] `APP_NAME` in `.env` (still "Laravel"); page `<title>`/meta

## Blocked / needs Ricardo
- [ ] **Renders vs. real photos** — whole image set is renders; confirm if the Candé "no renders" rule applies
- [ ] **Hi-res master plan** — current `estates-masterplan.jpg` is a low-res crop from the pptx
- [ ] **Floor plans** — want the PLANOS PDFs rendered as web images per prototype?
- [ ] Contact info: WhatsApp/sales number, email, social links
- [ ] Netlify site name / custom domain for The Estates (build URL placeholder = `casas-the-estates.netlify.app`)
- [ ] Confirm whether financiamiento / FRISA respaldo sections carry over

## Done — 2026-06-19
- [x] Created `~/Documents/ricardo/casas-the-estates/` + cloned Laravel app from Real del Mar
- [x] `composer install` + `npm install`, fresh `APP_KEY`, `npm run build` verified
- [x] Fresh git repo initialized
- [x] Archived raw client delivery → `incoming/raw-delivery/` (133 MB)
- [x] Optimized 11 renders + master plan → `app/public/images/estates-*.jpg` (~6.4 MB)
- [x] Extracted product data (prototypes A/B/C, pricing, availability) into `summary.md`
- [x] Pointed `build-static.sh` SITE_URL at a placeholder so we can't deploy over Candé
