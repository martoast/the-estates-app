# The Estates — Project Summary

Luxury hillside villa community inside **Real del Mar**, Tijuana, Baja California (the
same master-planned resort community as the Candé by FRISA project we just built). The
Estates is the high-end single-family-home phase: Mediterranean / Tuscan-style stone
villas with terracotta roofs, private pools, lush native gardens and ocean views over
the Pacific.

- **Client:** Ricardo (same client as Real del Mar / Candé)
- **Product:** Single-family villas, Stage 1
- **Location:** Real del Mar, Tijuana, B.C., México (Pacific coast)
- **Currency:** Prices quoted in **USD**

## Stack & architecture

Cloned from the Real del Mar / Candé app — same stack and patterns:

- **Laravel + Blade** (single repo), page assembled from section partials in
  `resources/views/partials/`
- **Tailwind CSS v4** CSS-first config (`@theme` in `resources/css/app.css`). Important
  utilities use trailing-bang syntax (`text-[0.625rem]!`). NOTE: the unlayered `.eyebrow`
  rule outranks layered utilities — override with `!` utilities.
- **Alpine.js** for interactivity; bilingual via `$store.lang` + `<x-t>`/`<x-slot:es>`/
  `<x-slot:en>` components and `.lang-es`/`.lang-en` CSS. Product toggle uses
  `$store.product`.
- **Static deploy:** `./build-static.sh` (from `app/`) → builds Vite assets, serves via
  `artisan serve`, rewrites URLs root-relative, outputs `../dist` for Netlify
  drag-and-drop. Override deploy URL with `SITE_URL=... ./build-static.sh`.
- Dev server: `php artisan serve` (use a free port, e.g. 3002).

## Product line — 3 prototypes

All prototypes share **Nivel 1 = 206.17 m²**; they differ by the basement (sótano) program.

| Prototype | Bedrooms | Sótano m² | Total m² | Construcción (ft²) | From (USD) |
|-----------|----------|-----------|----------|--------------------|------------|
| **A**     | 2 rec.   | 43.68     | 249.85   | 2,690              | $1,163,467.51 |
| **B**     | 3 rec.   | 64.65     | 270.82   | 2,915.96           | $1,200,180.10 |
| **C**     | 4 rec.   | 83.78     | 289.95   | 3,120.4            | $1,233,671.37 |

**Prototype A (2 rec.)** — N1: Sala, Comedor/Cocina, Cuarto de lavar, Baño de visita,
Closet/Vestíbulo, Recámara 1 (baño completo + walk-in), Recámara 2 (baño completo +
walk-in). Sótano: Studio/TV, 2º Comedor.

**Prototype B (3 rec.)** — N1 same as A. Sótano: Studio/TV, Recámara 3 (baño completo +
walk-in).

**Prototype C (4 rec.)** — N1 same as A. Sótano: Recámara 3, Recámara 4, Baño completo,
Sala TV, Comedor.

**Entrega (all prototypes):** Carpintería — closets en recámaras, mueble de baño, cocina
integral, puertas generales (incl. servicio). Instalaciones — ductos de aire
acondicionado, salidas de gas y estufa, salidas eléctricas/apagadores/contactos, boiler.

## Availability (Stage 1)

Per the dossier (`DISPONIBILIDAD CASAS THE ESTATES.pptx`):

- **~22 lots** in Stage 1: lots **0–8** and **110–122**.
- Status legend: **21 Disponible · 2 Apartado · 0 Vendido** (as delivered).
- Each lot is priced individually by lot size (LOT ft²); construction area is fixed per
  prototype. Full per-lot price tables for 2/3/4-bedroom configs are in
  `incoming/raw-delivery/5. TABLA DE PRECIOS/`.
- Lot sizes range ~18,600–32,750 ft². Avg commercial value ~$1.39M (2BR) → ~$1.46M (4BR).

## Source content (raw delivery)

Archived in `incoming/raw-delivery/` (≈133 MB, not deployed). Folders:

1. **PLANOS** — architectural floor plans (PDF) for Tipo A, B, C (techos, planta baja, nivel -1)
2. **RENDER THE ESTATES** — 11 marketing renders (the only imagery we have — see note below)
3. **FICHAS TECNICAS** — technical spec sheets (PDF) per prototype
4. **DOSSIER** — `DISPONIBILIDAD CASAS THE ESTATES.pptx` (availability master plan)
5. **TABLA DE PRECIOS** — per-lot price tables (PNG, ES + EN) + `Mosaico de precios.xlsx`

### ⚠️ Renders note
Unlike Candé/Real del Mar — where Ricardo insisted on **real photos, no renders** — The
Estates is pre-construction and the entire delivered image set is **renders**. Confirm
with Ricardo whether the no-renders rule applies here; if it does, we'll need real
photography. For now the site is built from renders.

## Optimized web images (`app/public/images/`)

Resized to 2400px progressive JPEG (q82), ~6.4 MB total:

| File | Render |
|------|--------|
| `estates-vista-mar.jpg` | Sunset ocean-view garden, pergola, pool, fire pit (great hero candidate) |
| `estates-fachada.jpg` | Front facade of type villa at dusk, pool + loungers |
| `estates-calle.jpg` | Street view through the community |
| `estates-aerea.jpg` | Aerial of the development (high-res) |
| `estates-aerea-conjunto.jpg` | Aerial of the wider conjunto / layout |
| `estates-caseta-acceso.jpg` | Access gate / caseta |
| `estates-casa-vista-mar.jpg` | Type villa with ocean view |
| `estates-recamara-principal.jpg` | Master bedroom interior |
| `estates-sala-cocina.jpg` | Open living/dining → kitchen, beamed ceiling |
| `estates-sala-exterior.jpg` | Living/dining opening to exterior terrace |
| `estates-fachada-alt.jpg` | Alt facade composition |
| `estates-masterplan.jpg` | Lot layout / master plan (low-res from dossier — request hi-res) |

## Quick-start
1. `cd app && composer install && npm install` (done)
2. `php artisan serve --port=3002`
3. `npm run dev` for hot asset reload, or `npm run build` for production assets
4. Build static export: `./build-static.sh` → outputs `../dist/`
