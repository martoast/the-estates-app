
<?php
    $amenidades = [
        ['img' => 'rdm-am-golf.webp',        't_es' => 'Campo de golf',      't_en' => 'Golf course',     'd_es' => '18 hoyos con vistas espectaculares al mar.',           'd_en' => '18 holes with stunning sea views.'],
        ['img' => 'rdm-am-hipico.webp',      't_es' => 'Club hípico',        't_en' => 'Equestrian club',  'd_es' => 'Para los amantes del mundo ecuestre.', 'd_en' => 'For lovers of the equestrian world.'],
        ['img' => 'estates-am-casaclub.jpg', 't_es' => 'Casa Club',          't_en' => 'Clubhouse',        'd_es' => 'Espacios sociales elegantes para convivir y relajarse.', 'd_en' => 'Elegant social spaces to gather and relax.'],
        ['img' => 'estates-am-hotel.jpg',    't_es' => 'Hotel',             't_en' => 'Hotel',            'd_es' => 'Hospedaje y descanso de resort, con todos los servicios a tu alcance.', 'd_en' => 'Resort lodging and relaxation, with every service within reach.'],
        ['img' => 'rdm-am-padel.webp',       't_es' => 'Canchas deportivas', 't_en' => 'Sports courts',    'd_es' => 'Disfruta las canchas de pádel y tenis en un entorno privado.', 'd_en' => 'Enjoy the padel and tennis courts in a private setting.'],
        ['img' => 'rdm-am-parque.webp',      't_es' => 'Parque ecológico',   't_en' => 'Ecological park',  'd_es' => 'Áreas verdes para reconectar con la naturaleza.',      'd_en' => 'Green areas to connect with nature.'],
        ['img' => 'rdm-am-escuela.webp',     't_es' => 'Escuela privada',    't_en' => 'Private school',   'd_es' => 'Educación de primer nivel dentro del complejo.',       'd_en' => 'First-class education within the community.'],
        ['img' => 'estates-am-restaurante.jpg', 't_es' => 'Restaurante y bar', 't_en' => 'Restaurant & bar','d_es' => 'Buena comida y un lugar para reunirte, a unos pasos de casa.', 'd_en' => 'Good food and a place to gather, just steps from home.'],
        ['img' => 'rdm-am-spa.jpg',          't_es' => 'Spa',               't_en' => 'Spa',              'd_es' => 'Disfruta esta experiencia de bienestar dentro del hotel.', 'd_en' => 'Enjoy this wellness experience inside the hotel.'],
    ];
?>

<section id="amenidades" class="overflow-hidden bg-sand-100 py-24 lg:py-32"
    x-data="{ nudge(dir) { const t = $refs.track; const c = t.querySelector('[data-card]'); const amt = c ? c.offsetWidth + 24 : 380; t.scrollBy({ left: dir * amt, behavior: 'smooth' }); } }">

    
    <div class="mx-auto max-w-7xl px-6 lg:px-10">
        <div class="flex flex-col gap-8 md:flex-row md:items-end md:justify-between">
            <div class="reveal-group max-w-xl">
                <p class="eyebrow text-terra-500"><?php if (isset($component)) { $__componentOriginal618076cb2e02e8026719e8ebca35f227 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal618076cb2e02e8026719e8ebca35f227 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.t','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('t'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php $__env->slot('es', null, []); ?> Real del Mar <?php $__env->endSlot(); ?> <?php $__env->slot('en', null, []); ?> Real del Mar <?php $__env->endSlot(); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $attributes = $__attributesOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__attributesOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $component = $__componentOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__componentOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?></p>
                <h2 class="display mt-6 text-4xl font-light text-ink sm:text-5xl">
                    <?php if (isset($component)) { $__componentOriginal618076cb2e02e8026719e8ebca35f227 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal618076cb2e02e8026719e8ebca35f227 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.t','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('t'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                         <?php $__env->slot('es', null, []); ?> Todo esto te espera en <em>Real del Mar</em> <?php $__env->endSlot(); ?>
                         <?php $__env->slot('en', null, []); ?> All of this awaits you at <em>Real del Mar</em> <?php $__env->endSlot(); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $attributes = $__attributesOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__attributesOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $component = $__componentOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__componentOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?>
                </h2>
                <p class="mt-6 text-lg leading-relaxed text-ink-soft">
                    <?php if (isset($component)) { $__componentOriginal618076cb2e02e8026719e8ebca35f227 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal618076cb2e02e8026719e8ebca35f227 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.t','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('t'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                         <?php $__env->slot('es', null, []); ?> Vivir en The Estates significa tener acceso a las amenidades exclusivas de Real del Mar — un entorno diseñado para disfrutar, relajarse y mantenerse activo, siempre con el mar como telón de fondo. <?php $__env->endSlot(); ?>
                         <?php $__env->slot('en', null, []); ?> Living at The Estates means access to the exclusive amenities of Real del Mar — an environment designed to enjoy, relax, and stay active, always with the sea as a backdrop. <?php $__env->endSlot(); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $attributes = $__attributesOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__attributesOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $component = $__componentOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__componentOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?>
                </p>
            </div>

            
            <div class="flex gap-3">
                <button @click="nudge(-1)" aria-label="Anterior"
                    class="flex h-12 w-12 items-center justify-center rounded-full border border-ink/15 text-ink transition-colors hover:border-ink/40 hover:bg-ink hover:text-sand-50">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
                </button>
                <button @click="nudge(1)" aria-label="Siguiente"
                    class="flex h-12 w-12 items-center justify-center rounded-full border border-ink/15 text-ink transition-colors hover:border-ink/40 hover:bg-ink hover:text-sand-50">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                </button>
            </div>
        </div>
    </div>

    
    <div x-ref="track"
        class="mt-14 flex snap-x snap-mandatory gap-6 overflow-x-auto scroll-smooth px-6 pb-2 lg:px-10 [-ms-overflow-style:none] [scrollbar-width:none] [&::-webkit-scrollbar]:hidden">
        <?php $__currentLoopData = $amenidades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <article data-card class="group w-[78vw] shrink-0 snap-start sm:w-[340px] lg:w-[380px]">
                <div class="relative overflow-hidden rounded-2xl bg-ocean-950 shadow-lg shadow-ink/5">
                    <img src="<?php echo e(asset('images/' . $a['img'])); ?>" alt="<?php echo e($a['t_es']); ?>" loading="lazy"
                        class="aspect-[3/4] w-full object-cover transition-transform duration-[1.2s] ease-out group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-ocean-950/90 via-ocean-950/15 to-transparent"></div>
                    <div class="absolute inset-x-0 bottom-0 p-7">
                        <h3 class="display text-2xl text-sand-50"><span class="lang-es"><?php echo e($a['t_es']); ?></span><span class="lang-en"><?php echo e($a['t_en']); ?></span></h3>
                        <p class="mt-2 text-sm leading-relaxed text-sand-100/80"><span class="lang-es"><?php echo e($a['d_es']); ?></span><span class="lang-en"><?php echo e($a['d_en']); ?></span></p>
                    </div>
                </div>
            </article>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        <div class="w-2 shrink-0 lg:w-6" aria-hidden="true"></div>
    </div>
</section>
<?php /**PATH /Users/alex/Documents/ricardo/casas-the-estates/app/resources/views/partials/amenidades.blade.php ENDPATH**/ ?>