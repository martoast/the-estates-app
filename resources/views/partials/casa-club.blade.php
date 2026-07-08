{{-- ============================== CASA CLUB (blueprint: signature-amenity tease band) ============================== --}}
<section id="casa-club" class="grain relative flex min-h-[80svh] items-end overflow-hidden bg-ocean-950">
    <div class="absolute inset-0">
        <img src="{{ asset('images/estates-am-casaclub.jpg') }}" alt="Casa Club de Real del Mar" loading="lazy"
            class="h-full w-full object-cover">
        <div class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-black/70 to-transparent"></div>
    </div>
    <div class="relative mx-auto w-full max-w-7xl px-6 pb-20 lg:px-10">
        <div class="reveal-group max-w-xl">
            <p class="eyebrow text-terra-300"><x-t><x-slot:es>Casa Club</x-slot:es><x-slot:en>Clubhouse</x-slot:en></x-t></p>
            <h2 class="display mt-5 text-4xl font-light text-sand-50 drop-shadow-[0_2px_24px_rgba(10,22,38,0.6)] sm:text-5xl">
                <x-t>
                    <x-slot:es>Conoce la <em>Casa Club</em></x-slot:es>
                    <x-slot:en>Discover the <em>Clubhouse</em></x-slot:en>
                </x-t>
            </h2>
            <p class="mt-6 text-lg leading-relaxed text-sand-100/90 drop-shadow-[0_2px_18px_rgba(10,22,38,0.55)]">
                <x-t>
                    <x-slot:es>Un punto de encuentro para residentes, familias e invitados dentro de Real del Mar — espacios sociales elegantes para convivir, descansar y disfrutar la comunidad.</x-slot:es>
                    <x-slot:en>A gathering place for residents, families, and guests within Real del Mar — elegant social spaces to come together, unwind, and enjoy the community.</x-slot:en>
                </x-t>
            </p>
            <a href="#amenidades" class="eyebrow mt-8 inline-flex items-center justify-center rounded-full bg-terra-500 px-8 py-4 text-[0.7rem] text-sand-50 transition-colors hover:bg-terra-600">
                <x-t><x-slot:es>Ver amenidades</x-slot:es><x-slot:en>See amenities</x-slot:en></x-t>
            </a>
        </div>
    </div>
</section>
