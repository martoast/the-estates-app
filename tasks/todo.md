# The Estates — TODO

Cloned from the Candé / Real del Mar app on 2026-06-19 as the starting template.
The site currently still renders Candé content — the work below rebrands it to The Estates.

## Done — rebrand v1 (2026-06-19)
- [x] **Design system** — Cormorant Garamond display serif, deeper navy palette, new olive/sage accent token
- [x] **Logo** — "The Estates" typographic wordmark (nav, preloader, footer)
- [x] **Hero** — `estates-vista-mar.jpg` + new bilingual copy & dual CTAs
- [x] **Esencia** — new positioning copy + villa render (replaced the Candé video block)
- [x] **Residencias** — A/B/C prototype cards with real m²/ft²/USD + cinematic showcase
- [x] **Disponibilidad** — redesigned Stage-1 overview (master plan + 21/2/22 stats + pricing)
- [x] **Galería** — `estates-*` renders + new copy
- [x] **Amenidades / Contacto** — copy + form options updated
- [x] **SEO/meta/OG** — title, description, `og-estates.jpg`, footer, WhatsApp

## Now — polish & confirm
- [x] ~~Interactive site plan~~ — attempted (Voronoi, then hand-trace) but the low-res dossier plan (518px raster, no vector) can't be traced accurately. **Reverted to a static master-plan image + stats/pricing panel.** Lot data + tracing scripts preserved (`resources/data/estates-lots.json`) to re-enable IF a vector/CAD lotification plan arrives.
- [ ] **Ask Ricardo for the vector/CAD/PDF lotification plan** → then the interactive lot picker can be done exactly (like Real del Mar)
- [ ] **Confirm:** real lot sizes for 111/117/119 (price-table values look ~10× too small); which 2 lots are *apartado*
- [ ] Per-lot price data: wire the full 2/3/4-bedroom price tables (once interactive plan is viable)
- [ ] Remove leftover Candé assets (`cande-*`, `rdm-*` in `public/images/`) now mostly unreferenced (amenities `rdm-am-*` still used — those are Real del Mar community amenities)
- [ ] `APP_NAME` in `.env` (still "Laravel")
- [ ] Review the Cormorant serif direction with Ricardo — swap if a brand font exists

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
