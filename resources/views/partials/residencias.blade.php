{{-- ============================== RESIDENCIAS ============================== --}}
@php
    // Shared cinematic showcase — the delivered renders (not prototype-specific).
    $showcase = [
        ['img' => 'estates-vista-aerea-v4.jpg',     'alt' => 'Vista aérea de las villas de The Estates con el Pacífico al fondo'],
        ['img' => 'estates-fachada.jpg',           'alt' => 'Fachada de villa tipo al atardecer'],
        ['img' => 'estates-vista-mar.jpg',          'alt' => 'Jardín y alberca con vista al mar'],
        ['img' => 'estates-sala-cocina.jpg',        'alt' => 'Sala y comedor hacia la cocina'],
        ['img' => 'estates-sala-exterior.jpg',      'alt' => 'Sala abierta a la terraza exterior'],
        ['img' => 'estates-recamara-principal.jpg', 'alt' => 'Recámara principal'],
        ['img' => 'estates-casa-vista-mar.jpg',     'alt' => 'Villa tipo con vista al Pacífico'],
        ['img' => 'estates-calle.jpg',              'alt' => 'Calle interior de la comunidad'],
    ];

    // Three prototypes — all share Nivel 1 (206.17 m²); they differ in the basement program.
    $prototipos = [
        [
            'letra' => 'A',
            'rec_es' => '2 recámaras', 'rec_en' => '2 bedrooms',
            'total' => '249.85', 'sotano' => '43.68', 'ft2' => '2,690',
            'desde' => '1,163,468',
            'sotano_es' => 'Studio / TV · 2º comedor',
            'sotano_en' => 'Studio / TV · 2nd dining',
        ],
        [
            'letra' => 'B',
            'rec_es' => '3 recámaras', 'rec_en' => '3 bedrooms',
            'total' => '270.82', 'sotano' => '64.65', 'ft2' => '2,916',
            'desde' => '1,200,180',
            'sotano_es' => 'Studio / TV · recámara 3 con baño y walk-in closet',
            'sotano_en' => 'Studio / TV · Bedroom 3 with bathroom and walk-in closet',
        ],
        [
            'letra' => 'C',
            'rec_es' => '4 recámaras', 'rec_en' => '4 bedrooms',
            'total' => '289.95', 'sotano' => '83.78', 'ft2' => '3,120',
            'desde' => '1,233,671',
            'sotano_es' => 'Recámaras 3 y 4 · baño · sala TV · comedor',
            'sotano_en' => 'Bedrooms 3 & 4 · bath · TV room · dining',
        ],
    ];
@endphp

<section id="residencias" class="bg-sand-100 py-24 lg:py-36">
    <div class="mx-auto max-w-7xl px-6 lg:px-10">
        {{-- Header --}}
        <div class="reveal-group mx-auto max-w-2xl text-center">
            <p class="eyebrow text-terra-500"><x-t><x-slot:es>Residencias</x-slot:es><x-slot:en>Residences</x-slot:en></x-t></p>
            <h2 class="display mt-6 text-5xl font-light text-ink sm:text-6xl">
                <x-t>
                    <x-slot:es>Dos, tres o <em>cuatro recámaras</em></x-slot:es>
                    <x-slot:en>Two, three or <em>four bedrooms</em></x-slot:en>
                </x-t>
            </h2>
            <p class="mx-auto mt-6 max-w-xl text-lg leading-relaxed text-ink-soft">
                <x-t>
                    <x-slot:es>La misma arquitectura mediterránea, a la medida de tu vida. Elige el espacio que necesitas y despierta cada día frente al Pacífico.</x-slot:es>
                    <x-slot:en>The same Mediterranean architecture, tailored to your life. Choose the space you need and wake each day to the Pacific.</x-slot:en>
                </x-t>
            </p>
        </div>

        {{-- Cinematic showcase + thumbnails (single Alpine scope) --}}
        <div class="mt-16"
             x-data="{ active: '{{ asset('images/' . $showcase[0]['img']) }}', loading: false, show(i){ if(i===this.active) return; this.loading=true; setTimeout(()=>this.active=i, 180); } }">
            <div class="group relative overflow-hidden rounded-3xl bg-ocean-950 shadow-2xl shadow-ink/10">
                <img :src="active" @load="loading=false" alt="The Estates"
                    class="aspect-[4/3] w-full object-cover transition-opacity duration-300 sm:aspect-video"
                    :class="loading ? 'opacity-0' : 'opacity-100'">
                <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-ocean-950/80 via-ocean-950/10 to-transparent"></div>

                {{-- Glass info panel --}}
                <div class="relative z-10 -mt-16 p-4 sm:absolute sm:inset-x-0 sm:bottom-0 sm:z-auto sm:mt-0 sm:max-w-lg sm:p-6 lg:p-10">
                    <div class="rounded-2xl border border-sand-50/15 bg-ocean-950/40 p-5 backdrop-blur-md sm:p-6 lg:p-8">
                        <p class="eyebrow text-[0.6rem] text-terra-300"><x-t><x-slot:es>22 villas · Etapa 1</x-slot:es><x-slot:en>22 villas · Phase 1</x-slot:en></x-t></p>
                        <p class="eyebrow mt-1 text-[0.55rem] text-sand-100/60"><x-t><x-slot:es>123 villas en total</x-slot:es><x-slot:en>123 villas in total</x-slot:en></x-t></p>
                        <h3 class="display mt-3 text-4xl font-light text-sand-50 sm:text-5xl">Villas <em>The Estates</em></h3>
                        <p class="mt-4 text-sm leading-relaxed text-sand-100/85">
                            <x-t>
                                <x-slot:es>Villas mediterráneas de piedra y teja sobre amplios lotes, con jardines privados, alberca y vistas abiertas al mar.</x-slot:es>
                                <x-slot:en>Mediterranean stone-and-tile villas on generous lots, with private gardens, a pool, and open ocean views.</x-slot:en>
                            </x-t>
                        </p>
                        <a href="#contacto" class="eyebrow mt-6 inline-flex items-center gap-3 text-[0.6rem] text-sand-50">
                            <x-t><x-slot:es>Agendar visita</x-slot:es><x-slot:en>Schedule a visit</x-slot:en></x-t>
                            <span class="block h-px w-8 bg-terra-300 transition-all duration-300 group-hover:w-12"></span>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Thumbnail strip --}}
            <div class="-mx-6 mt-4 flex snap-x gap-3 overflow-x-auto px-6 pb-1 lg:mx-0 lg:px-0 [-ms-overflow-style:none] [scrollbar-width:none] [&::-webkit-scrollbar]:hidden">
                @foreach ($showcase as $item)
                    <button type="button" @click="show('{{ asset('images/' . $item['img']) }}')"
                        class="relative h-16 w-24 shrink-0 snap-start overflow-hidden rounded-lg transition-all duration-300 sm:h-20 sm:w-32"
                        :class="active === '{{ asset('images/' . $item['img']) }}' ? 'ring-2 ring-terra-400 ring-offset-2 ring-offset-sand-100' : 'opacity-55 hover:opacity-100'">
                        <img src="{{ asset('images/' . $item['img']) }}" alt="{{ $item['alt'] }}" loading="lazy" class="h-full w-full object-cover">
                    </button>
                @endforeach
            </div>
        </div>

        {{-- Prototype comparison cards --}}
        <div class="mt-14 grid gap-6 md:grid-cols-3">
            @foreach ($prototipos as $p)
                <div class="group flex flex-col rounded-2xl border border-ink/8 bg-sand-50 p-8 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-ink/5 lg:p-10">
                    <div class="flex items-start justify-between">
                        <div>
                            <span class="display text-6xl font-light leading-none text-terra-400">{{ $p['letra'] }}</span>
                            <h4 class="eyebrow mt-3 text-[0.6rem] text-ink-soft"><span class="lang-es">{{ $p['rec_es'] }}</span><span class="lang-en">{{ $p['rec_en'] }}</span></h4>
                        </div>
                        <div class="text-right">
                            <p class="display text-3xl font-light text-ink">{{ $p['total'] }}<span class="text-lg text-ink-soft"> m²</span></p>
                            <p class="eyebrow text-[0.5rem] text-ink-soft/70"><x-t><x-slot:es>totales</x-slot:es><x-slot:en>total</x-slot:en></x-t></p>
                        </div>
                    </div>

                    <ul class="mt-8 space-y-3 border-t border-ink/8 pt-6 text-sm text-ink-soft">
                        <li class="flex items-center gap-3"><span class="h-1 w-1 rounded-full bg-olive-400"></span><x-t><x-slot:es>Nivel principal 206.17 m²</x-slot:es><x-slot:en>Main level 206.17 m²</x-slot:en></x-t></li>
                        <li class="flex items-center gap-3"><span class="h-1 w-1 rounded-full bg-olive-400"></span><x-t><x-slot:es>Nivel inferior {{ $p['sotano'] }} m²</x-slot:es><x-slot:en>Lower level {{ $p['sotano'] }} m²</x-slot:en></x-t></li>
                        <li class="flex items-start gap-3"><span class="mt-2 h-1 w-1 shrink-0 rounded-full bg-olive-400"></span><span><span class="lang-es">{{ $p['sotano_es'] }}</span><span class="lang-en">{{ $p['sotano_en'] }}</span></span></li>
                        <li class="flex items-center gap-3"><span class="h-1 w-1 rounded-full bg-olive-400"></span><x-t><x-slot:es>{{ $p['ft2'] }} ft² construcción</x-slot:es><x-slot:en>{{ $p['ft2'] }} ft² built</x-slot:en></x-t></li>
                    </ul>

                    <div class="mt-8 flex items-end justify-between border-t border-ink/8 pt-6">
                        <div>
                            <p class="eyebrow text-[0.5rem] text-ink-soft/70"><x-t><x-slot:es>Desde</x-slot:es><x-slot:en>From</x-slot:en></x-t></p>
                            <p class="display text-2xl font-light text-ink">${{ $p['desde'] }} <span class="text-sm text-ink-soft">USD</span></p>
                        </div>
                        <a href="#contacto" class="eyebrow text-[0.55rem] text-terra-500 underline-offset-4 hover:underline"><x-t><x-slot:es>Cotizar</x-slot:es><x-slot:en>Inquire</x-slot:en></x-t></a>
                    </div>
                </div>
            @endforeach
        </div>

        <p class="mt-8 text-center text-xs text-ink-soft/60">
            <x-t>
                <x-slot:es>Precios "desde" por prototipo; el valor final varía según el lote. Consulta la disponibilidad y precios por lote más abajo.</x-slot:es>
                <x-slot:en>"From" prices per prototype; final value varies by lot. See availability and per-lot pricing below.</x-slot:en>
            </x-t>
        </p>
    </div>
</section>
