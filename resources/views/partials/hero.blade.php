{{-- ============================== HERO ============================== --}}
<section class="grain relative flex min-h-svh items-end justify-center overflow-hidden bg-ocean-950">
    {{-- Backdrop --}}
    <div class="absolute inset-0">
        <img
            src="{{ asset('images/the-estates-hero.jpg') }}"
            alt="Villa de The Estates con alberca y jardines al atardecer"
            class="kenburns h-full w-full object-cover object-center"
            fetchpriority="high"
        >
        {{-- Readability scrim — bottom-up, where the centered copy sits --}}
        <div class="absolute inset-0 bg-gradient-to-t from-ocean-950/90 via-ocean-950/25 to-ocean-950/35"></div>
    </div>

    {{-- Copy — bottom-centered, like the Riviera hero --}}
    <div class="reveal-group is-revealed relative z-10 mx-auto w-full max-w-5xl px-6 pb-32 text-center sm:pb-20">
        <img src="{{ asset('images/the-estates-logo-white.png') }}" alt="The Estates at Real del Mar"
            class="mx-auto mb-8 h-16 w-auto object-contain drop-shadow-[0_2px_24px_rgba(10,22,38,0.6)] sm:mb-10 sm:h-20 lg:h-24">
        <h1 class="display text-5xl font-light text-sand-50 drop-shadow-[0_2px_24px_rgba(10,22,38,0.6)] sm:text-6xl lg:text-7xl">
            <x-t>
                <x-slot:es>Una villa <em>mediterránea</em><br>sobre el Pacífico</x-slot:es>
                <x-slot:en>A <em>Mediterranean</em> villa<br>above the Pacific</x-slot:en>
            </x-t>
        </h1>
        <p class="mx-auto mt-7 max-w-xl text-base leading-relaxed text-sand-100/85 sm:text-lg">
            <x-t>
                <x-slot:es>Una colección privada de villas de 2, 3 y 4 recámaras dentro de Real del Mar, con jardines, alberca y vistas abiertas al mar.</x-slot:es>
                <x-slot:en>A private collection of 2, 3 and 4-bedroom villas within Real del Mar — with gardens, pool, and open ocean views.</x-slot:en>
            </x-t>
        </p>
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
