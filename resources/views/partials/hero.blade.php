{{-- ============================== HERO ============================== --}}
<section class="grain relative flex min-h-svh items-end overflow-hidden bg-ocean-950">
    {{-- Backdrop --}}
    <div class="absolute inset-0">
        <img
            src="{{ asset('images/estates-vista-mar.jpg') }}"
            alt="Villa de The Estates con vista al Pacífico al atardecer"
            class="kenburns h-full w-full object-cover object-center"
            fetchpriority="high"
        >
        {{-- Readability scrims — darken where the copy sits, keep the image the star --}}
        {{-- Bottom-up (covers mobile centered copy + buttons) --}}
        <div class="absolute inset-0 bg-gradient-to-t from-ocean-950/90 via-ocean-950/25 to-ocean-950/35"></div>
        {{-- Left scrim (desktop, where the headline is left-aligned) --}}
        <div class="absolute inset-0 hidden bg-gradient-to-r from-ocean-950/85 via-ocean-950/30 to-transparent lg:block"></div>
    </div>

    {{-- Copy --}}
    <div class="relative mx-auto w-full max-w-7xl px-6 pb-28 text-center lg:px-10 lg:pb-20 lg:text-left">
        <div class="reveal-group is-revealed mx-auto max-w-3xl lg:mx-0">
            <p class="eyebrow text-[0.6rem] text-terra-300 sm:text-[0.65rem]">
                <x-t><x-slot:es>Real del Mar · Tijuana, Baja California</x-slot:es><x-slot:en>Real del Mar · Tijuana, Baja California</x-slot:en></x-t>
            </p>
            <h1 class="display mt-5 text-5xl font-light text-sand-50 drop-shadow-[0_2px_24px_rgba(10,22,38,0.6)] sm:text-6xl lg:text-7xl">
                <x-t>
                    <x-slot:es>Una villa <em>mediterránea</em><br>sobre el Pacífico</x-slot:es>
                    <x-slot:en>A <em>Mediterranean</em> villa<br>above the Pacific</x-slot:en>
                </x-t>
            </h1>
            <p class="mx-auto mt-7 max-w-xl text-base leading-relaxed text-sand-100/85 lg:mx-0 lg:text-lg">
                <x-t>
                    <x-slot:es>Una colección privada de villas de 2, 3 y 4 recámaras dentro de Real del Mar, con jardines, alberca y vistas abiertas al mar.</x-slot:es>
                    <x-slot:en>A private collection of 2, 3 and 4-bedroom villas within Real del Mar — with gardens, pool, and open ocean views.</x-slot:en>
                </x-t>
            </p>
            <div class="mt-9 flex flex-col items-center gap-4 sm:flex-row lg:items-start">
                <a href="#residencias"
                   class="eyebrow rounded-full bg-terra-500 px-7 py-3.5 text-[0.65rem] text-sand-50 transition-all duration-300 hover:bg-terra-600">
                    <x-t><x-slot:es>Ver residencias</x-slot:es><x-slot:en>Explore residences</x-slot:en></x-t>
                </a>
                <a href="#contacto"
                   class="eyebrow rounded-full border border-sand-50/30 px-7 py-3.5 text-[0.65rem] text-sand-50 backdrop-blur-sm transition-all duration-300 hover:border-sand-50/60 hover:bg-sand-50/5">
                    <x-t><x-slot:es>Agendar visita</x-slot:es><x-slot:en>Schedule a visit</x-slot:en></x-t>
                </a>
            </div>
        </div>
    </div>

    {{-- Scroll cue --}}
    <a href="#esencia"
       class="absolute bottom-8 left-1/2 z-10 -translate-x-1/2"
       aria-label="Bajar">
        <svg class="h-6 w-6 animate-bounce text-sand-100/80" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
        </svg>
    </a>
</section>
