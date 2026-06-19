{{-- ============================== DISPONIBILIDAD (interactive site plan) ============================== --}}
@php
    $plan = json_decode(file_get_contents(resource_path('data/estates-lots.json')), true) ?: [];
    $lots = $plan['lots'] ?? [];
    $viewBox = $plan['viewBox'] ?? '0 0 1036 964';
    [$vbW, $vbH] = array_slice(array_map('floatval', explode(' ', $viewBox)), 2);
    $avail = collect($lots)->where('status', 'available')->count();
    $reserved = collect($lots)->where('status', 'reserved')->count();
    $sold = collect($lots)->where('status', 'sold')->count();
@endphp

<section id="disponibilidad" class="bg-ocean-950 py-24 lg:py-32"
    x-data="{
        filter: 'all',
        active: null,
        shown(s) { return this.filter === 'all' || this.filter === s; },
        pick(l) { this.active = l; },
    }">
    <div class="mx-auto max-w-7xl px-6 lg:px-10">
        {{-- Header --}}
        <div class="reveal-group mx-auto max-w-2xl text-center">
            <p class="eyebrow text-terra-300"><x-t><x-slot:es>Disponibilidad</x-slot:es><x-slot:en>Availability</x-slot:en></x-t></p>
            <h2 class="display mt-6 text-5xl font-light text-sand-50 sm:text-6xl">
                <x-t>
                    <x-slot:es>Encuentra tu villa <em>en el plano</em></x-slot:es>
                    <x-slot:en>Find your villa <em>on the plan</em></x-slot:en>
                </x-t>
            </h2>
            <p class="mt-6 text-lg leading-relaxed text-sand-100/70">
                <x-t>
                    <x-slot:es>Etapa 1 · {{ count($lots) }} villas. Pasa el cursor o toca cada lote para ver su estado.</x-slot:es>
                    <x-slot:en>Stage 1 · {{ count($lots) }} villas. Hover or tap any lot to see its status.</x-slot:en>
                </x-t>
            </p>
        </div>

        {{-- Filter chips + live counts --}}
        <div class="reveal mt-10 flex flex-wrap items-center justify-center gap-3">
            @php
                $chips = [['k'=>'all','es'=>'Todos','en'=>'All','n'=>count($lots)],
                          ['k'=>'available','es'=>'Disponibles','en'=>'Available','n'=>$avail]];
                if ($reserved) $chips[] = ['k'=>'reserved','es'=>'Apartados','en'=>'Reserved','n'=>$reserved];
                if ($sold) $chips[] = ['k'=>'sold','es'=>'Vendidos','en'=>'Sold','n'=>$sold];
            @endphp
            @foreach ($chips as $chip)
                <button @click="filter = '{{ $chip['k'] }}'"
                    class="eyebrow flex items-center gap-2 rounded-full border px-5 py-2.5 text-[0.6rem] transition-colors duration-300"
                    :class="filter === '{{ $chip['k'] }}' ? 'border-terra-400 bg-terra-400/15 text-sand-50' : 'border-sand-50/15 text-sand-200/70 hover:border-sand-50/40'">
                    <span class="lang-es">{{ $chip['es'] }}</span><span class="lang-en">{{ $chip['en'] }}</span>
                    <span class="text-sand-200/50">{{ $chip['n'] }}</span>
                </button>
            @endforeach
        </div>

        <div class="mt-12 grid items-center gap-10 lg:grid-cols-5 lg:gap-12">
            {{-- The interactive plan --}}
            <div class="lg:col-span-3">
                <div class="plan-svg relative mx-auto w-full overflow-hidden rounded-2xl border border-sand-50/10"
                     style="aspect-ratio: {{ $vbW }} / {{ $vbH }};">
                    <img src="{{ asset('images/estates-masterplan.jpg') }}" alt=""
                        class="pointer-events-none absolute inset-0 h-full w-full object-cover">
                    <svg viewBox="{{ $viewBox }}" class="absolute inset-0 h-full w-full" xmlns="http://www.w3.org/2000/svg">
                        @foreach ($lots as $lot)
                            <path d="{{ $lot['d'] }}"
                                class="plan-lot plan-lot--{{ $lot['status'] }}"
                                :class="{ 'is-dim': !shown('{{ $lot['status'] }}') }"
                                @mouseenter="pick({ n: '{{ $lot['n'] }}', area: {{ $lot['area'] ? "'".addslashes($lot['area'])."'" : 'null' }}, status: '{{ $lot['status'] }}' })"
                                @click="pick({ n: '{{ $lot['n'] }}', area: {{ $lot['area'] ? "'".addslashes($lot['area'])."'" : 'null' }}, status: '{{ $lot['status'] }}' })"
                            ></path>
                        @endforeach
                        @foreach ($lots as $lot)
                            <text x="{{ $lot['cx'] }}" y="{{ $lot['cy'] }}" class="plan-label" style="font-size: 15px;"
                                :class="{ 'is-dim': !shown('{{ $lot['status'] }}') }">{{ $lot['n'] }}</text>
                        @endforeach
                    </svg>
                </div>
            </div>

            {{-- Detail panel --}}
            <div class="lg:col-span-2">
                <div class="flex min-h-[20rem] flex-col justify-center rounded-2xl border border-sand-50/15 bg-ocean-900/60 p-8 backdrop-blur-sm lg:min-h-[24rem] lg:p-10">
                    <template x-if="!active">
                        <div class="py-2">
                            <p class="eyebrow text-[0.6rem] text-ocean-300"><x-t><x-slot:es>Etapa 1 · Villas</x-slot:es><x-slot:en>Stage 1 · Villas</x-slot:en></x-t></p>
                            <p class="display mt-3 text-3xl font-light text-sand-50">
                                <x-t><x-slot:es>Selecciona un lote para ver los detalles</x-slot:es><x-slot:en>Select a lot to see the details</x-slot:en></x-t>
                            </p>
                            <div class="mt-7 space-y-3 border-t border-sand-50/10 pt-6">
                                <p class="flex items-center gap-3 text-sm text-sand-100/80"><span class="h-3 w-3 rounded-sm" style="background: var(--color-terra-400)"></span><x-t><x-slot:es>Disponible</x-slot:es><x-slot:en>Available</x-slot:en></x-t> <span class="text-sand-200/50">· {{ $avail }}</span></p>
                                @if ($reserved)
                                <p class="flex items-center gap-3 text-sm text-sand-100/80"><span class="h-3 w-3 rounded-sm" style="background: var(--color-olive-400)"></span><x-t><x-slot:es>Apartado</x-slot:es><x-slot:en>Reserved</x-slot:en></x-t> <span class="text-sand-200/50">· {{ $reserved }}</span></p>
                                @endif
                            </div>
                            <div class="mt-7 border-t border-sand-50/10 pt-6">
                                <p class="eyebrow text-[0.5rem] text-ocean-300"><x-t><x-slot:es>Precios desde</x-slot:es><x-slot:en>Pricing from</x-slot:en></x-t></p>
                                <p class="display mt-1 text-3xl font-light text-sand-50">$1,163,468 <span class="text-base text-sand-200/60">USD</span></p>
                            </div>
                        </div>
                    </template>

                    <template x-if="active">
                        <div class="py-2">
                            <div class="flex items-center justify-between">
                                <p class="eyebrow text-[0.6rem] text-ocean-300"><x-t><x-slot:es>Etapa 1 · Villas</x-slot:es><x-slot:en>Stage 1 · Villas</x-slot:en></x-t></p>
                                <span class="eyebrow rounded-full px-3 py-1 text-[0.5rem]"
                                    :class="active && active.status === 'available' ? 'bg-terra-400/20 text-terra-300' : 'bg-olive-400/20 text-olive-300'">
                                    <span x-show="active && active.status === 'available'"><span class="lang-es">Disponible</span><span class="lang-en">Available</span></span>
                                    <span x-show="active && active.status === 'reserved'"><span class="lang-es">Apartado</span><span class="lang-en">Reserved</span></span>
                                </span>
                            </div>
                            <p class="display mt-3 text-5xl font-light text-sand-50">
                                <span class="lang-es">Lote</span><span class="lang-en">Lot</span> <span x-text="active && active.n"></span>
                            </p>
                            <div class="mt-6 border-t border-sand-50/10 pt-6" x-show="active && active.area">
                                <p class="display text-3xl font-light text-terra-300"><span x-text="active && active.area"></span></p>
                                <p class="eyebrow mt-1 text-[0.55rem] text-sand-200/60"><x-t><x-slot:es>de terreno</x-slot:es><x-slot:en>of land</x-slot:en></x-t></p>
                            </div>
                            <a href="#contacto"
                                class="eyebrow mt-8 inline-flex w-full items-center justify-center rounded-full px-6 py-4 text-[0.65rem] transition-all duration-300"
                                :class="active && active.status === 'available' ? 'bg-terra-500 text-sand-50 hover:bg-terra-600' : 'border border-sand-50/20 text-sand-200/70 hover:border-sand-50/40'">
                                <span x-show="active && active.status === 'available'"><span class="lang-es">Solicitar información</span><span class="lang-en">Request information</span></span>
                                <span x-show="active && active.status !== 'available'"><span class="lang-es">Ver otras opciones</span><span class="lang-en">See other options</span></span>
                            </a>
                        </div>
                    </template>
                </div>
            </div>
        </div>

        <p class="mt-8 text-center text-xs text-sand-200/40">
            <x-t>
                <x-slot:es>Plano de carácter ilustrativo. Cada lote se cotiza por su superficie; te compartimos la lista completa de precios a solicitud.</x-slot:es>
                <x-slot:en>Illustrative plan. Each lot is priced by its area; we'll share the full price list on request.</x-slot:en>
            </x-t>
        </p>
    </div>
</section>
