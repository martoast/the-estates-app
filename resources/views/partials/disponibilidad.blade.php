{{-- ============================== DISPONIBILIDAD (Stage 1 overview) ============================== --}}
@php
    // Stage 1 figures from the client dossier (DISPONIBILIDAD CASAS THE ESTATES).
    $stats = [
        ['n' => '22', 'es' => 'Lotes · Etapa 1', 'en' => 'Lots · Stage 1', 'tone' => 'sand'],
        ['n' => '21', 'es' => 'Disponibles',     'en' => 'Available',      'tone' => 'terra'],
        ['n' => '2',  'es' => 'Apartados',        'en' => 'Reserved',       'tone' => 'olive'],
    ];
@endphp

<section id="disponibilidad" class="bg-ocean-950 py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-10">
        {{-- Header --}}
        <div class="reveal-group mx-auto max-w-2xl text-center">
            <p class="eyebrow text-terra-300"><x-t><x-slot:es>Disponibilidad</x-slot:es><x-slot:en>Availability</x-slot:en></x-t></p>
            <h2 class="display mt-6 text-5xl font-light text-sand-50 sm:text-6xl">
                <x-t>
                    <x-slot:es>Etapa 1, lista para <em>elegir</em></x-slot:es>
                    <x-slot:en>Stage 1, ready to <em>choose</em></x-slot:en>
                </x-t>
            </h2>
            <p class="mt-6 text-lg leading-relaxed text-sand-100/70">
                <x-t>
                    <x-slot:es>Veintidós villas sobre amplios lotes en la primera etapa. Cada lote se cotiza por su superficie; te compartimos la lista completa de precios a solicitud.</x-slot:es>
                    <x-slot:en>Twenty-two villas on generous lots in the first stage. Each lot is priced by its area; we'll share the full price list on request.</x-slot:en>
                </x-t>
            </p>
        </div>

        <div class="mt-14 grid items-center gap-10 lg:grid-cols-5 lg:gap-14">
            {{-- Master plan --}}
            <div class="reveal lg:col-span-3">
                <div class="overflow-hidden rounded-3xl border border-sand-50/12 bg-sand-50/[0.03] p-3 backdrop-blur-sm sm:p-5">
                    <img src="{{ asset('images/estates-masterplan.jpg') }}"
                        alt="Plano maestro de The Estates — distribución de lotes de la Etapa 1"
                        loading="lazy"
                        class="w-full rounded-2xl bg-sand-50/5 object-contain">
                </div>
                <p class="eyebrow mt-4 text-center text-[0.55rem] text-sand-200/40">
                    <x-t><x-slot:es>Plano maestro · Etapa 1</x-slot:es><x-slot:en>Master plan · Stage 1</x-slot:en></x-t>
                </p>
            </div>

            {{-- Summary panel --}}
            <div class="reveal-group lg:col-span-2">
                {{-- Stats --}}
                <div class="grid grid-cols-3 gap-px overflow-hidden rounded-2xl border border-sand-50/15 bg-sand-50/10">
                    @foreach ($stats as $s)
                        <div class="bg-ocean-900/60 px-4 py-7 text-center">
                            <p class="display text-4xl font-light leading-none {{ $s['tone'] === 'terra' ? 'text-terra-300' : ($s['tone'] === 'olive' ? 'text-olive-300' : 'text-sand-50') }}">{{ $s['n'] }}</p>
                            <p class="eyebrow mt-2 text-[0.5rem] text-sand-200/60"><span class="lang-es">{{ $s['es'] }}</span><span class="lang-en">{{ $s['en'] }}</span></p>
                        </div>
                    @endforeach
                </div>

                {{-- Pricing --}}
                <div class="mt-6 rounded-2xl border border-sand-50/15 bg-ocean-900/60 p-8 backdrop-blur-sm lg:p-10">
                    <p class="eyebrow text-[0.55rem] text-ocean-300"><x-t><x-slot:es>Precios</x-slot:es><x-slot:en>Pricing</x-slot:en></x-t></p>
                    <p class="display mt-3 text-4xl font-light text-sand-50">
                        <span class="text-lg text-sand-200/60"><x-t><x-slot:es>Desde</x-slot:es><x-slot:en>From</x-slot:en></x-t></span>
                        $1,163,468 <span class="text-xl text-sand-200/60">USD</span>
                    </p>
                    <ul class="mt-7 space-y-3 border-t border-sand-50/10 pt-6 text-sm text-sand-100/80">
                        <li class="flex items-center gap-3"><span class="h-1 w-1 rounded-full bg-terra-300"></span><x-t><x-slot:es>Prototipos de 2, 3 y 4 recámaras</x-slot:es><x-slot:en>2, 3 and 4-bedroom prototypes</x-slot:en></x-t></li>
                        <li class="flex items-center gap-3"><span class="h-1 w-1 rounded-full bg-terra-300"></span><x-t><x-slot:es>Lotes de ~1,730 a 3,040 m²</x-slot:es><x-slot:en>Lots from ~1,730 to 3,040 m²</x-slot:en></x-t></li>
                        <li class="flex items-center gap-3"><span class="h-1 w-1 rounded-full bg-terra-300"></span><x-t><x-slot:es>Precio final según lote elegido</x-slot:es><x-slot:en>Final price by chosen lot</x-slot:en></x-t></li>
                    </ul>
                    <a href="#contacto"
                        class="eyebrow mt-8 inline-flex w-full items-center justify-center rounded-full bg-terra-500 px-6 py-4 text-[0.65rem] text-sand-50 transition-all duration-300 hover:bg-terra-600">
                        <x-t><x-slot:es>Solicitar lista de precios</x-slot:es><x-slot:en>Request the price list</x-slot:en></x-t>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
