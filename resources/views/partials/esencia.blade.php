{{-- ============================== ESENCIA ============================== --}}
<section id="esencia" class="relative overflow-hidden py-24 lg:py-36">
    <div class="mx-auto max-w-7xl px-6 lg:px-10">
        <div class="grid items-center gap-16 lg:grid-cols-12">
            {{-- Editorial copy --}}
            <div class="reveal-group lg:col-span-7">
                <p class="eyebrow text-terra-500"><x-t><x-slot:es>La esencia</x-slot:es><x-slot:en>The essence</x-slot:en></x-t></p>
                <h2 class="display mt-6 text-5xl font-light text-ink sm:text-6xl lg:text-7xl">
                    <x-t>
                        <x-slot:es>Vivir entre piedra,<br>olivo <em>y mar</em></x-slot:es>
                        <x-slot:en>Live among stone,<br>olive <em>and sea</em></x-slot:en>
                    </x-t>
                </h2>
                <p class="mt-8 max-w-xl text-lg leading-relaxed text-ink-soft">
                    <x-t>
                        <x-slot:es>The Estates es una comunidad privada de villas dentro de Real del Mar, en Tijuana. Arquitectura mediterránea de piedra y teja, con jardines, alberca privada y vistas abiertas al Pacífico — espacios pensados para sentirse amplios, luminosos y conectados con el entorno.</x-slot:es>
                        <x-slot:en>The Estates is a private community of villas within Real del Mar, in Tijuana. Mediterranean architecture of stone and clay tile, with gardens, a private pool, and open views of the Pacific — spaces designed to feel spacious, light-filled, and connected to their surroundings.</x-slot:en>
                    </x-t>
                </p>
                <p class="mt-5 max-w-xl text-lg leading-relaxed text-ink-soft">
                    <x-t>
                        <x-slot:es>Tres prototipos de 2, 3 y 4 recámaras sobre amplios lotes, diseñados para vivir o invertir dentro de una comunidad establecida con campo de golf, casa club y seguridad.</x-slot:es>
                        <x-slot:en>Three prototypes of 2, 3 and 4 bedrooms on generous lots, designed for living or investing within an established community with a golf course, clubhouse, and security.</x-slot:en>
                    </x-t>
                </p>

                {{-- Key numbers (blueprint: proyecto stat row) --}}
                <dl class="mt-10 grid grid-cols-2 gap-x-6 gap-y-5 sm:grid-cols-4">
                    @foreach ([
                        ['n' => '~22', 'es' => 'Villas · Etapa 1', 'en' => 'Villas · Stage 1'],
                        ['n' => '3', 'es' => 'Prototipos', 'en' => 'Prototypes'],
                        ['n' => '2–4', 'es' => 'Recámaras', 'en' => 'Bedrooms'],
                        ['n' => '250+', 'es' => 'm² totales', 'en' => 'Total m²'],
                    ] as $stat)
                        <div>
                            <dt class="display text-4xl font-light text-ink">{{ $stat['n'] }}</dt>
                            <dd class="eyebrow mt-1 text-[0.55rem] text-ink-soft"><span class="lang-es">{{ $stat['es'] }}</span><span class="lang-en">{{ $stat['en'] }}</span></dd>
                        </div>
                    @endforeach
                </dl>
            </div>

            {{-- Villa render --}}
            <div class="reveal relative lg:col-span-5">
                <div class="overflow-hidden rounded-2xl bg-ocean-950 shadow-xl shadow-ink/10">
                    <img
                        src="{{ asset('images/estates-fachada.jpg') }}"
                        alt="Fachada de una villa de The Estates al atardecer"
                        loading="lazy"
                        class="aspect-[4/5] w-full object-cover"
                    >
                </div>
                <p class="eyebrow mt-4 text-center text-[0.55rem] text-ink-soft/70">
                    <x-t><x-slot:es>Villa tipo · The Estates</x-slot:es><x-slot:en>Type villa · The Estates</x-slot:en></x-t>
                </p>
            </div>
        </div>
    </div>
</section>
